<?php

namespace App\Jobs;

use App\Models\History;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Orhanerday\OpenAi\OpenAi;

class GenerateLessonPlanner implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $grade;
    protected $title;
    protected $description;
    protected $curriculum;
    protected $historyId;

    public function __construct($grade, $title, $description, $curriculum, $historyId)
    {
        $this->grade = $grade;
        $this->title = $title;
        $this->description = $description;
        $this->curriculum = $curriculum;
        $this->historyId = $historyId;
    }

    public function handle()
    {
        // set_time_limit(180);

        Log::info('Job started');

        $open_ai_key = getenv('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $grade = $this->grade;
        $title = $this->title;
        $description = $this->description;
        $curriculum = $this->curriculum;

        $lesson = '';

        try {

            $prompt = "Crea una programación para el Nivel Educativo $grade con el título \"$title\" y la descripción \"$description\". Sigue el currículo \"$curriculum\". Envuelve cada encabezado en [h] [/h]. Habla sobre los siguientes encabezados: Título, un Objetivo, dos Competencias de la LOMLOE, 3x Vocabulario (con Definiciones de Palabras), Explicación del Profesor corta, Actividades y ejercicios breves, Evaluación, Actividad de Cierre. Cada encabezado debe comenzar en una nueva línea. Evita la costumbre de hacer esto: 'Contenido: Este es el contenido', es decir, no es necesario anteponer el contenido con una etiqueta y dos puntos. Utiliza este punto de viñeta para elementos de lista: •.";


            $complete = $open_ai->chat([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    [
                        "role" => "system",
                        "content" => "Eres un experto en crear Planificadores de Lecciones detallados para estudiantes de grado " . $grade . "."
                    ],
                    [
                        "role" => "user",
                        "content" => $prompt
                    ],
                ],
                'temperature' => 0.9,
                'max_tokens' => 650,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ]);

            Log::info('OpenAI response: ' . $complete);

            $completeDecoded = json_decode($complete);


            $lesson = $completeDecoded->choices[0]->message->content;
            $lesson = str_replace('[h]', '<h2>', $lesson);
            $lesson = str_replace('[/h]', '</h2>', $lesson);
            $lesson = str_replace('-', '•', $lesson);
            Log::info('Job ended successfully');
        } catch (Exception $e) {
            Log::error("Error: " . $e->getMessage());
            error_log("Error: " . $e->getMessage());
        }

        try {
            $history = History::find($this->historyId);
            $history->content = json_encode($lesson);
            $history->status = 'done'; // Set the status to 'done' when the job is complete

            $history->save();
        } catch (Exception $e) {
            Log::error("Error: " . $e->getMessage());

            $history = History::find($this->historyId);
            $history->status = 'failed'; // Set the status to 'failed' if there is an error
            $history->save();
        }
    }
}
