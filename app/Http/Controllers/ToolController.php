<?php

namespace App\Http\Controllers;

use App\Models\History;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orhanerday\OpenAi\OpenAi;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Settings;
use PhpOffice\PhpPresentation\IOFactory;
use PhpOffice\PhpPresentation\PhpPresentation;
use PhpOffice\PhpPresentation\Slide;
use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\Style\Bullet;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Style\Shadow;
use GuzzleHttp\Client;

class ToolController extends Controller
{
    public function showLessonPlanner(Request $request)
    {
        $lesson = $request->session()->get('lesson', '');
        $grade = $request->session()->get('grade', '');
        $title = $request->session()->get('title', '');
        $description = $request->session()->get('description', '');

        // Clear session data
        $request->session()->forget(['lesson', 'grade', 'title', 'description']);

        return view('dashboard.teacher.lessonPlanner01', compact('lesson', 'title', 'grade', 'description'));
    }

    public function showConceptExplainer(Request $request)
    {
        $concept = $request->session()->get('concept', '');
        $curriculum = $request->session()->get('curriculum', '');
        $age = $request->session()->get('age', '');
        $subject = $request->session()->get('subject', '');
        $topic = $request->session()->get('topic', '');

        // Clear session data
        $request->session()->forget(['concept', 'curriculum', 'age', 'subject', 'topic']);

        return view('dashboard.teacher.conceptExplainer01', compact('concept', 'curriculum', 'age', 'subject', 'topic'));
    }

    public function showSlidesGenerator(Request $request)
    {
        $slides = $request->session()->get('slides', []);
        $curriculum = $request->session()->get('curriculum', '');
        $grade = $request->session()->get('grade', '');
        $description = $request->session()->get('description', '');
        $num_of_slides = $request->session()->get('num_of_slides', '');

        // Clear session data
        $request->session()->forget(['slides', 'curriculum', 'grade', 'description', 'num_of_slides']);

        return view('dashboard.teacher.slideGenerator01', compact('slides', 'curriculum', 'grade', 'description', 'num_of_slides'));
    }

    public function showWorksheetGenerator(Request $request)
    {
        $worksheet = $request->session()->get('worksheet', '');
        $curriculum = $request->session()->get('curriculum', '');
        $grade = $request->session()->get('grade', '');
        $description = $request->session()->get('description', '');

        // Clear session data
        $request->session()->forget(['worksheet', 'curriculum', 'grade', 'description']);

        return view('dashboard.teacher.worksheetGenerator01', compact('worksheet', 'curriculum', 'grade', 'description'));
    }

    // change this function to rubric generator show page
    public function showRubricGenerator(Request $request)
    {
        $rubric = $request->session()->get('rubric', []);
        $curriculum = $request->session()->get('curriculum', '');
        $grade = $request->session()->get('grade', '');
        $category_1 = $request->session()->get('category_1', '');
        $category_2 = $request->session()->get('category_2', '');
        $category_3 = $request->session()->get('category_3', '');
        $category_4 = $request->session()->get('category_4', '');
        $area_assessed = $request->session()->get('area_assessed', '');
        $title = $request->session()->get('title', '');

        // Clear session data
        $request->session()->forget(['rubric', 'curriculum', 'grade', 'title', 'area_assessed', 'category_1', 'category_2', 'category_3', 'category_4']);

        return view('dashboard.teacher.rubric-generator', compact('rubric', 'curriculum', 'grade', 'title', 'area_assessed', 'category_1', 'category_2', 'category_3', 'category_4'));
    }

    public function generateLessonPlanner(Request $request)
    {
        set_time_limit(180); // sets the maximum execution time to 2 minutes
        // dd($request);
        $open_ai_key = getenv('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $user_id = Auth::user()->email;

        $grade = $request->input('grade');
        $title = $request->input('title');
        $description = $request->input('description');
        $curriculum = $request->input('curriculum');

        // dd($grade, $title, $description);
        $lesson = '';

        try {

            $prompt = "Crea una programación para el Nivel Educativo $grade con el título \"$title\" y la descripción \"$description\". Sigue el currículo \"$curriculum\". Envuelve cada encabezado en [h] [/h]. Habla sobre los siguientes encabezados: Título, un Objetivo, dos Competencias de la LOMLOE, 3x Vocabulario (con Definiciones de Palabras), Explicación del Profesor corta, Actividades y ejercicios breves, Evaluación, Actividad de Cierre. Cada encabezado debe comenzar en una nueva línea. Evita la costumbre de hacer esto: 'Contenido: Este es el contenido', es decir, no es necesario anteponer el contenido con una etiqueta y dos puntos. Utiliza este punto de viñeta para elementos de lista: •. Muestra los encabezados en texto en negrita";


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


            $completeDecoded = json_decode($complete);


            $lesson = $completeDecoded->choices[0]->message->content;
            $lesson = str_replace('[h]', '<h2>', $lesson);
            $lesson = str_replace('[/h]', '</h2>', $lesson);
            $lesson = str_replace('-', '•', $lesson);


            // dd($lesson);
        } catch (Exception $e) {
            // Handle exceptions thrown by the OpenAI PHP SDK or custom exceptions
            // Log the error message or display an appropriate error message to the user
            error_log("Error: " . $e->getMessage());
        }

        // Store the lesson data in the session and redirect to the showLessonPlanner method
        $request->session()->put('lesson', $lesson);
        $request->session()->put('grade', $grade);
        $request->session()->put('title', $title);
        $request->session()->put('curriculum', $curriculum);
        $request->session()->put('description', $description);

        // Store the generated content in the histories table
        $user_id = auth()->id(); // Get the authenticated user's ID
        $tool_name = 'Lesson Planner';
        $content = json_encode($lesson); // Convert the lesson array to a JSON string

        $history = new History([
            'user_id' => $user_id,
            'tool_name' => $tool_name,
            'content' => $content,
        ]);

        $history->save();

        return redirect()->action([ToolController::class, 'showLessonPlanner']);
    }


    public function generateSlides(Request $request)
    {
        set_time_limit(180); // sets the maximum execution time to 2 minutes

        $open_ai_key = getenv('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $grade = $request->input('grade');
        $num_of_slides = $request->input('num_of_slides');
        $description = $request->input('description');
        $curriculum = $request->input('curriculum');

        // dd($grade, $num_of_slides, $description);
        $slides = [];

        try {
            $prompt = "Crear una presentación de " . $num_of_slides . " diapositivas para el grado $grade con el objetivo \"$description\". La presentación debe seguir el currículo \"$curriculum\". Genera esto para " . $num_of_slides . " diapositivas. Por ejemplo: La Maravilla del Sistema Digestivo|Entender la estructura y función del sistema digestivo humano y su papel integral en la salud y nutrición en general|[Anatomía y Funciones del Sistema Digestivo|El sistema digestivo comienza en la boca y termina en el ano. La comida se descompone a través de la masticación y la acción enzimática en la boca, luego es procesada por ácidos en el estómago, y luego se mueve al intestino delgado para la absorción de nutrientes. El intestino grueso absorbe agua, formando desechos que se eliminan. El hígado, la vesícula biliar y el páncreas, aunque no están en el tracto digestivo, producen bilis y enzimas que ayudan a la digestión.|¿Cuál es el papel del estómago en la digestión?|¿Dónde ocurre principalmente la absorción de nutrientes?|¿Cómo ayudan el hígado, la vesícula biliar y el páncreas en la digestión?]|";

            $assistant_prompt = "Eres un experto en generar " . $num_of_slides . " diapositivas de presentación para el grado " . $grade . ". Proporciona contenido para cada diapositiva en este formato exacto: TitleOfPresentationHere|ObjectiveOfPresentationHere|[SlideHeading1Here|SlideContent1Here|QuestionStatement1RegardingSlide1Here|QuestionStatement2RegardingSlide1Here|QuestionStatement3RegardingSlide1Here]|[SlideHeading2Here|SlideContent2Here|QuestionStatement1RegardingSlide2Here|QuestionStatement2RegardingSlide2Here|QuestionStatement3RegardingSlide2Here]|. Si hay 8 diapositivas, entonces el formato irá hasta SlideHeading8Here|SlideContent8Here Para las preguntas en cada diapositiva, solo da declaraciones de preguntas. No procedas a responder las preguntas.";

            $complete = $open_ai->chat([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => $assistant_prompt
                    ],
                    [
                        'role' => 'user',
                        'content' => $prompt
                    ],
                ],
                'temperature' => 0.9,
                'max_tokens' => 700,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ]);
            // dd($complete);


            // $complete = '{"id":"chatcmpl-7DWPntpL47Xi2GWyen0OxtuCxqlsG","object":"chat.completion","created":1683457223,"model":"gpt-3.5-turbo-0301","usage":{"prompt_tokens":428,"completion_tokens":345,"total_tokens":773},"choices":[{"message":{"role":"assistant","content":"Creación de contenido en Youtube|Objetivo: Crear contenido en Youtube con el fin de mejorar la competencia comunicativa del alumnado|[Introducción a Youtube|Presentación de la plataforma Youtube, explicación de sus características y otros datos de interés| ¿Qué es Youtube?| ¿Cuáles son las diferentes herramientas que ofrece Youtube?| ¿Por qué es importante utilizar Youtube para la creación de contenido?]|[Estrategias de contenido|Estrategias para la realización de contenido de calidad, planificación de guiones, grabación y edición de vídeos| ¿Cómo planificar la creación de contenido en Youtube?| ¿Cómo estructurar una historia que enganche al espectador?| ¿Qué herramientas digitales son útiles para la grabación y edición de vídeos?]|[Herramientas de análisis de vídeos|Explicación de herramientas para analizar los resultados obtenidos en Youtube, medición de estadísticas y otros datos de interés| ¿Qué son las estadísticas de Youtube?| ¿Cómo se miden las estadísticas en Youtube?| ¿En qué nos pueden ayudar las estadísticas de Youtube al crear contenido?]|[Difusión de contenido|Estrategias para la difusión del contenido generado, uso de redes sociales y otras estrategias para aumentar el número de visualizaciones| ¿Cómo se puede promocionar el contenido para llegar al mayor número de personas?| ¿Cuáles son las redes sociales más utilizadas para compartir contenido en Youtube?| ¿Qué otras estrategias se pueden utilizar para aumentar el número de visualizaciones?|"},"finish_reason":"stop","index":0}]}';

            // $complete = '{"id":"cmpl-7Afqt6Yp1Ax56Yq2BY0qVmtG9XiIK","object":"text_completion","created":1682778515,"model":"text-davinci-003","choices":[{"text":",\n\nThe Digestive System|Objective: To understand the anatomy and physiology of the digestive system as outlined in the Spanish National Curriculum/LOMLOE|[Anatomy of the Digestive System|The digestive system is composed of the gastrointestinal (GI) tract, which consists of the mouth, esophagus, stomach, small intestine, large intestine and rectum, as well as several accessory organs such as the liver, gallbladder and pancreas. The GI tract turns food into the nutrients and energy needed for human life.|What is the first part of the digestive system?|What structures make up the gastrointestinal tract?|What do the accessory organs do?]|[Digestion Processes|Digestion begins in the mouth with chewing and saliva then moves through the esophagus to the stomach where acid helps breakdown food. It continues to the small intestine where enzymes and bile help break down proteins, carbs and fats. Vitamins and minerals are absorbed during this process. Lastly, undigested food moves to the large intestine and wastes are expelled through the rectum. |What processes occur in the mouth?|What is the role of the acid in the stomach?|Where do vitamins and minerals get absorbed? ]|[Nutrition and Digestion|In order for the body to utilize nutrients, they must be broken down into smaller molecules by the digestive system. This process is known as digestion which helps break down foods into their components so they can be used by the body. Good nutrition requires a balance of healthy foods and a variety of nutrients needed for growth, development, and energy. |What is the process of digestion?|What is the role of digestion in nutrition?|What is the goal of good nutrition? ]|[The Role of Digestion in Homeostasis|Homeostasis is the ability to maintain a consistent internal environment for optimal health. The digestive system plays an essential role in homeostasis by extracting essential nutrients from food and eliminating toxins from the body, thereby providing the energy and materials necessary for the body to function properly. |What is homeostasis?|What is the role of the digestive system in homeostasis?|What materials are necessary for the body to function optimally? ]|","index":0,"logprobs":null,"finish_reason":"stop"}],"usage":{"prompt_tokens":139,"completion_tokens":462,"total_tokens":601}}';

            // dd($complete);

            $complete_array = json_decode($complete, true);
            $text = trim($complete_array['choices'][0]['message']['content']);
            $text = str_replace("]\n[", "]|[", $text);
            $text = str_replace("| \n[", "]|[", $text);
            $text = str_replace("? ¿", "]|[", $text);
            $text = str_replace("]\n\n[", "]|[", $text);
            $parts = explode('|', $text);
            // dd($text,$parts);
            // dd($parts);
            // dd($text,$parts);
            $slides = [
                'Title' => trim($parts[0]),
                'Objective' => $parts[1],
                'Slides' => [],
            ];
            // dd($slides);
            for (
                $i = 2;
                $i < count($parts);
                $i++
            ) {
                if (preg_match('/^\[(.+)$/', $parts[$i], $matches)) {
                    $slideHeading = $matches[1];
                    $slideContent = $parts[++$i];
                    $questions = [];
                    for ($j = 0; $j < 3; $j++) {
                        $questions[] = $parts[++$i];
                    }
                    // Decrement the index by one to correctly process the next slide or end the loop
                    $i--;
                    $slides['Slides'][] = [
                        'Heading' => $slideHeading,
                        'Content' => $slideContent,
                        'Questions' => $questions,
                    ];
                }
            }
            // dd($slides);
            // Clean the title
            $slides['Title'] = preg_replace('/[\r\n]+/', '', $slides['Title']);

            // Clean the questions
            foreach ($slides['Slides'] as $slideKey => $slide) {
                foreach ($slide['Questions'] as $questionKey => $question) {
                    $slides['Slides'][$slideKey]['Questions'][$questionKey] = rtrim($question, ']');
                }
            }
        } catch (Exception $e) {
            // Handle exceptions thrown by the OpenAI PHP SDK or custom exceptions
            // Log the error message or display an appropriate error message to the user
            error_log("Error: " . $e->getMessage());
        }

        // Store the lesson data in the session and redirect to the showLessonPlanner method
        $request->session()->put('slides', $slides);
        $request->session()->put('grade', $grade);
        $request->session()->put('num_of_slides', $num_of_slides);
        $request->session()->put('curriculum', $curriculum);
        $request->session()->put('description', $description);

        // Store the generated content in the histories table
        $user_id = auth()->id(); // Get the authenticated user's ID
        $tool_name = 'Slides Generator';
        $content = json_encode($slides); // Convert the lesson array to a JSON string

        $history = new History([
            'user_id' => $user_id,
            'tool_name' => $tool_name,
            'content' => $content,
        ]);

        $history->save();

        return redirect()->action([ToolController::class, 'showSlidesGenerator']);
    }

    public function generateWorksheet(Request $request)
    {
        set_time_limit(180); // sets the maximum execution time to 2 minutes

        $open_ai_key = getenv('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $grade = $request->input('grade');
        $description = $request->input('description');
        $curriculum = $request->input('curriculum');

        // dd($grade, $title, $description);
        $worksheet = [];
        // In Traditional Spanish from Spain.
        try {
            $prompt = "Crea una ficha de trabajo sobre el tema de $description para un estudiante de grado $grade, siguiendo el currículo $curriculum. La ficha debe proporcionar preguntas desafiantes. Incluye los siguientes encabezados: Título, Objetivo, Instrucciones y variedad de preguntas. Envuelve cada encabezado en [h] [/h]. Incluye una mezcla de las siguientes preguntas: 3x Preguntas de Opción Múltiple, 3x Preguntas Generales, 4x Rellenar los Espacios en Blanco, 4x Afirmaciones Verdadero o Falso.";
            //  Al final, añade una larga '----------------' y luego incluye las respuestas a las preguntas por separado.
            $assistantPrompt = 'Eres un experto en generar fichas de trabajo concisas pero desafiantes para estudiantes de grado ' . $grade . '. Manteniendo también los objetivos e instrucciones breves.';

            $complete = $open_ai->chat([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => $assistantPrompt
                    ],
                    [
                        'role' => 'user',
                        'content' => $prompt
                    ],
                ],
                'temperature' => 0.9,
                'max_tokens' => 600,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ]);

            // dd($complete);
            $completeDecoded = json_decode($complete);

            $worksheet = $completeDecoded->choices[0]->message->content;
            $worksheet = str_replace('[h]', '<h2>', $worksheet);
            $worksheet = str_replace('[/h]', '</h2>', $worksheet);
            $worksheet = str_replace('-', '•', $worksheet);
        } catch (Exception $e) {
            // Handle exceptions thrown by the OpenAI PHP SDK or custom exceptions
            // Log the error message or display an appropriate error message to the user
            error_log("Error: " . $e->getMessage());
        }

        // Store the lesson data in the session and redirect to the showLessonPlanner method
        $request->session()->put('worksheet', $worksheet);
        $request->session()->put('grade', $grade);
        $request->session()->put('title', $curriculum);
        $request->session()->put('description', $description);

        // Store the generated content in the histories table
        $user_id = auth()->id(); // Get the authenticated user's ID
        $tool_name = 'Worksheet Generator';
        $content = json_encode($worksheet); // Convert the lesson array to a JSON string

        $history = new History([
            'user_id' => $user_id,
            'tool_name' => $tool_name,
            'content' => $content,
        ]);

        $history->save();

        return redirect()->action([ToolController::class, 'showWorksheetGenerator']);
    }

    public function generateRubric(Request $request)
    {
        set_time_limit(180); // sets the maximum execution time to 2 minutes

        $open_ai_key = getenv('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $topic = $request->input('title');
        $grade = $request->input('grade');
        $area_assessed = $request->input('area_assessed');
        $curriculum = $request->input('curriculum');
        $lang = "Traditional Spanish from Spain";
        $category_1 = $request->input('category_1');
        $category_2 = $request->input('category_2');
        $category_3 = $request->input('category_3');
        $category_4 = $request->input('category_4');
        $rubric = [];
        // In Traditional Spanish from Spain. 
        try {
            $prompt = "In Traditional Spanish from Spain. Create a rubric assessment on the topic of $topic for a student of grade $grade, following the $curriculum curriculum. The content should be well-detailed. Structure the rubric using the following format: TitleOfRubric|[Category1|Excellent1|Good1|NeedImprovement1|Poor1]|[Category2|Excellent2|Good2|NeedImprovement2|Poor2]|[Category3|Excellent3|Good3|NeedImprovement3|Poor3]|[Category4|Excellent1|Good4|NeedImprovement4|Poor4]. The name of Category1 is $category_1, Category2 is $category_2, Category3 is $category_3 and Category4 is $category_4. For example: Podcast Assessment|[Content|Thorough and engaging content with clear focus|Content is mostly clear and engaging with minor inconsistencies|Content is somewhat unclear and lacks focus|Content is unclear and unfocused]|[Organization|Well-structured, logical flow and smooth transitions|Mostly well-structured with minor issues in flow and transitions|Some organization, but flow and transitions need improvement|Disorganized, lacking logical flow and transitions]|[Audio Quality|Crisp, clear audio with no background noise or distortion|Mostly clear audio with minor issues in sound quality|Audio quality is inconsistent and has distracting background noise|Poor audio quality with persistent noise and distortion]|[Presentation|Engaging, articulate, and enthusiastic presentation|Generally engaging and clear, with minor issues in delivery|Presentation lacks clarity or enthusiasm, needs improvement|Unengaging, monotonous, or unclear presentation]";
            // dd($prompt);
            $complete = $open_ai->completion([
                'model' => 'text-davinci-003',
                'prompt' => $prompt,
                'temperature' => 0.9,
                'max_tokens' => 800,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ]);
            // dd($complete);
            // $complete = '{"id":"cmpl-7BHMRHdoqtuahEghL9li6bunttL3p","object":"text_completion","created":1682922699,"model":"text-davinci-003","choices":[{"text":"\n\nEvaluación de Podcasts|[Contenido|Contenido profundo e interesante con un foco claro|El contenido es claro y atractivo mayormente, con algunas inconsistencias|El contenido es algo confuso y carece de foco|El contenido es confuso e inenfocado]|[Organización|La estructura es clara y fluida con lógico flujo y transiciones|Mayormente bien estructurado con algunos problemas en el flujo y transiciones|Alguna organización, pero el flujo y transiciones necesitan mejorar|Desorganizado y carente de flujo y transiciones lógicos]|[Calidad del audio|Sonido cristalino y nítido sin ruidos ni distorsión en el fondo|Mayormente se oye bien con algunos problemas en la calidad del sonido|La calidad del audio es inconsistente y tiene ruido de fondo distractivo|Mal audio con persistentes ruidos y distorsiones]|[Presentación|Presentación atractiva, articulada y entusiasta|En general es interesante y clara, con algunos problemas en el discurso|La presentación carece de claridad o entusiasmo, y necesita mejoras|Presentación poco atractiva, monótona o confusa]","index":0,"logprobs":null,"finish_reason":"stop"}],"usage":{"prompt_tokens":312,"completion_tokens":357,"total_tokens":669}}';

            $completeDecoded = json_decode($complete, true);
            $text = trim($completeDecoded['choices'][0]['text']);
            // dd($text);
            $parts = explode('|', $text);
            // dd($parts);
            $title = trim($parts[0]);
            $rubric = [];
            // dd($prompt, $complete, $parts);

            $currentCategory = '';
            for ($i = 1; $i < count($parts); $i++) {
                if (preg_match('/^\[(.*)$/', $parts[$i], $matches)) {
                    $currentCategory = $matches[1];
                    $rubric[$currentCategory] = [];
                } else {
                    $rating = rtrim($parts[$i], ']');
                    array_push($rubric[$currentCategory], $rating);
                }
            }


            // dd($parts, $rubric, $complete);
        } catch (Exception $e) {
            // Handle exceptions thrown by the OpenAI PHP SDK or custom exceptions
            // Log the error message or display an appropriate error message to the user
            error_log("Error: " . $e->getMessage());
        }
        $request->session()->put('rubric', $rubric);
        $request->session()->put('curriculum', $curriculum);
        $request->session()->put('title', $request->input('title'));
        $request->session()->put('grade', $grade);
        $request->session()->put('category_1', $category_1);
        $request->session()->put('category_2', $category_2);
        $request->session()->put('category_3', $category_3);
        $request->session()->put('category_4', $category_4);
        $request->session()->put('area_assessed', $area_assessed);

        $user_id = auth()->id(); // Get the authenticated user's ID
        $tool_name = 'Rubric Generator';
        $content = json_encode($rubric); // Convert the lesson array to a JSON string

        $history = new History([
            'user_id' => $user_id,
            'tool_name' => $tool_name,
            'content' => $content,
        ]);

        $history->save();

        return redirect()->action([ToolController::class, 'showRubricGenerator'], compact('rubric'));
    }

    public function generateConceptExplainer(Request $request)
    {
        set_time_limit(180); // sets the maximum execution time to 2 minutes

        $open_ai_key = getenv('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $subject = $request->input('subject');
        $topic = $request->input('topic');
        $age = $request->input('age');
        $curriculum = $request->input('curriculum');


        $concept = [];
        // In Traditional Spanish from Spain. 
        try {

            $prompt = "En español tradicional de España. Eres un experto en explicar conceptos profundos de manera concisa y efectiva a estudiantes de " . $age . " años. Proporciona una explicación breve del concepto para un estudiante que estudia '$topic' en la asignatura '$subject' y que sigue el plan de estudios '$curriculum'. Explica cada concepto utilizando un lenguaje sencillo y ejemplos para que sea fácilmente comprensible para el estudiante. Encierra cada encabezado en [h] [/h]. Asegúrate de que la explicación cubra todos los aspectos esenciales del tema. Incluye un ejemplo del concepto al final. Cada encabezado debe comenzar en una nueva línea. Evita la práctica de indicar 'Contenido: Este es el contenido', es decir, no es necesario agregar una etiqueta y dos puntos al contenido.";

            $assistantPrompt = "Eres un experto en explicar conceptos profundos de manera concisa y efectiva a estudiantes de " . $age . " años de edad.";
            $data = [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    [
                        "role" => "system",
                        "content" => $assistantPrompt
                    ],
                    [
                        "role" => "user",
                        "content" => $prompt
                    ],
                ],
                'temperature' => 0.9,
                'max_tokens' => 500,
                'frequency_penalty' => 0,
                'presence_penalty' => 0,
            ];

            $json_data = json_encode($data);

            $ch = curl_init('https://api.openai.com/v1/chat/completions');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization: Bearer ' . getenv('OPENAI_API_KEY'),
                'Content-Length: ' . strlen($json_data)
            ]);
            curl_setopt($ch, CURLOPT_TIMEOUT, 120); // 120 seconds is 2 minutes


            $result = curl_exec($ch);
            $completeDecoded = json_decode($result);

            if (curl_errno($ch)) {
                throw new Exception(curl_error($ch));
            }

            curl_close($ch);

            $concept = $completeDecoded->choices[0]->message->content;
            $concept = str_replace('[h]', '<h2>', $concept);
            $concept = str_replace('[/h]', '</h2>', $concept);

            // dd($concept);
        } catch (Exception $e) {
            // Handle exceptions thrown by the OpenAI PHP SDK or custom exceptions
            // Log the error message or display an appropriate error message to the user
            error_log("Error: " . $e->getMessage());
        }

        // Store the lesson data in the session and redirect to the showLessonPlanner method
        $request->session()->put('concept', $concept);
        $request->session()->put('curriculum', $curriculum);
        $request->session()->put('topic', $topic);
        $request->session()->put('subject', $subject);
        $request->session()->put('age', $age);

        // Store the generated content in the histories table
        $user_id = auth()->id(); // Get the authenticated user's ID
        $tool_name = 'Concept Explainer';
        $content = json_encode($concept); // Convert the lesson array to a JSON string

        $history = new History([
            'user_id' => $user_id,
            'tool_name' => $tool_name,
            'content' => $content,
        ]);

        $history->save();

        return redirect()->action([ToolController::class, 'showConceptExplainer']);
    }

    public function saveHistory($toolName, $data, $userID)
    {
        $user_id = $userID; // Get the authenticated user's ID
        $tool_name = $toolName;
        $content = json_encode($data); // Convert the lesson array to a JSON string

        $history = new History([
            'user_id' => $user_id,
            'tool_name' => $tool_name,
            'content' => $content,
        ]);

        if ($history->save()) {
            return true;
        } else {
            return false;
        }
    }
    public function viewForm(Request $request)
    {
        $questionNo = $request->session()->get('questionNo', '');
        $grade = $request->session()->get('grade', '');
        $questions = $request->session()->get('questions', []);
        $focus = $request->session()->get('focus', '');
        $description = $request->session()->get('description', '');

        // Clear session data
        $request->session()->forget(['questions', 'grade', 'questionNo', 'description', 'focus']);

        return view('dashboard.teacher.comprehension-generator', compact('grade', 'questionNo', 'questions', 'description', 'focus'));
    }
    public function generateComprehensionQuestions(Request $request)
    {
        set_time_limit(180); // sets the maximum execution time to 2 minutes


        $open_ai_key = getenv('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $grade = $request->input('grade');
        $questionNo = $request->input('questionNo');
        $description = $request->input('description');
        $focus = $request->input('focus');
        $lang = "Traditional Spanish from Spain";
        $questions = array();
        $prompt = "";
        try {
            $prompt = "En español tradicional de España. Crea " . $questionNo . " preguntas para esta comprensión proporcionada: " . $description . ". El enfoque de lectura de las preguntas debe ser '" . $focus . "'. Las preguntas deben ser en profundidad, detalladas y extensas. El nivel de dificultad debe ser apropiado para estudiantes de grado " . $grade . ". \nPor favor, proporciona preguntas bien redactadas en este formato: [EnunciadoPregunta1|EnunciadoRespuesta1]|[EnunciadoPregunta2|EnunciadoRespuesta2]|[EnunciadoPregunta3|EnunciadoRespuesta3]|[EnunciadoPregunta4|EnunciadoRespuesta4]|[EnunciadoPregunta5|EnunciadoRespuesta5]. \nVerifica también las respuestas y acláralas. Mantén las preguntas estrictamente relacionadas con el enfoque de las preguntas: '" . $focus . "'.";

            $assistantPrompt = "Eres un experto en generar preguntas de comprensión detalladas en español tradicional de España. Eres un profesor que está creando preguntas de comprensión basadas en el enfoque de '$focus' para un texto de lectura. Por favor, proporciona preguntas bien redactadas en este formato: [EnunciadoPregunta1|EnunciadoRespuesta1]|[EnunciadoPregunta2|EnunciadoRespuesta2]|[EnunciadoPregunta3|EnunciadoRespuesta3]|[EnunciadoPregunta4|EnunciadoRespuesta4]|[EnunciadoPregunta5|EnunciadoRespuesta5]. Por ejemplo: [¿Cuál es la idea principal del texto?|La idea principal del texto es que el autor intenta explicar la importancia del tema.]";

            $complete = $open_ai->chat([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => $assistantPrompt
                    ],
                    [
                        'role' => 'user',
                        'content' => $prompt
                    ],
                ],
                'temperature' => 0.9,
                'max_tokens' => 800,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ]);
            // dd($complete);

            $complete_array = json_decode($complete, true);
            // dd($complete_array);
            $text = trim($complete_array['choices'][0]['message']['content']);
            $text = str_replace("]\n[", "]|[", $text);
            $text = str_replace("]\n\n[", "]|[", $text);
            $parts = explode('|', $text);
            //dd($parts);
            for ($i = 0; $i < count($parts); $i += 2) {
                // Remove the brackets from the question and answer parts
                $question = trim(str_replace(array('[', ']'), '', $parts[$i]));
                $answer = trim(str_replace(array('[', ']'), '', $parts[$i + 1]));

                // Add the question and answer to the questions array
                $questions[] = (object) [
                    'Question' => $question,
                    'Answer' => $answer
                ];
            }
            // dd($questions);
            // } else {
            // Handle the case when the response is not as expected (e.g., missing the expected properties)
            // throw new Exception('Unexpected response from OpenAI API.');
            // }
        } catch (Exception $e) {
            // Handle exceptions thrown by the OpenAI PHP SDK or custom exceptions
            // Log the error message or display an appropriate error message to the user
            error_log("Error: " . $e->getMessage());
        }
        // dd($questions, $completeDecoded, $complete);
        if ($this->saveHistory("Comprehension Question Generator", $questions, auth()->id())) {
            // dd($questions);
            // Store the lesson data in the session and redirect to the showLessonPlanner method
            $request->session()->put('questions', $questions);
            $request->session()->put('grade', $grade);
            $request->session()->put('ques', $grade);
            $request->session()->put('focus', $focus);
            $request->session()->put('description', $description);
            return redirect()->action([ToolController::class, 'viewForm']);
        }
    }

    public function downloadSlidesPPTX(Request $request)
    {
        $slides = json_decode(urldecode($request->input('slides')), true);

        // Create a Guzzle HTTP client instance
        $client = new Client();

        // Send a POST request to your Node.js server
        $response = $client->post('https://maestro-node-js.vercel.app/generateSlides', [
            'json' => $slides
        ]);

        // Get the binary content of the generated PPTX file
        $pptxContent = $response->getBody()->getContents();

        // Save PowerPoint file and return as a response
        $filename = 'presentation.pptx';
        return response($pptxContent)
            ->header('Content-Type', 'application/vnd.openxmlformats-officedocument.presentationml.presentation')
            ->header('Content-Disposition', 'attachment; filename=' . $filename);
    }

    public function downloadHistory($id)
    {
        $history = History::find($id);


        switch ($history->tool_name) {
            case "Lesson Planner":
                break;
            case "Comprehension Question Generator":
                $questions = json_decode($history->content, true);
                $questions = $history->content;
                $urlEncodedQuestions = urlencode($questions);
                return redirect()->route('teacher.downloadComprehension', ['questions' => $urlEncodedQuestions]);
            case "Rubric Generator":
                $data = json_decode($history->content, true);
                $data = $history->content;
                $urlEncodedData = urlencode($data);
                // dd(json_decode(urldecode($urlEncodedData), true));
                // dd($urlEncodedData);
                return redirect()->route('teacher.downloadRubric', ['rubric' => $urlEncodedData]);
            case "Concept Explainer":
                $data = json_decode($history->content, true);
                $data = $history->content;
                $urlEncodedData = urlencode($data);
                return redirect()->route('teacher.downloadConceptDocx', ['concept' => $urlEncodedData]);
            case "Worksheet Generator":
                $data = json_decode($history->content, true);
                $data = $history->content;
                $urlEncodedData = urlencode($data);
                return redirect()->route('teacher.downloadWorksheetDocx', ['worksheet' => $urlEncodedData]);
            case "Slides":
                $data = json_decode($history->content, true);
                $data = $history->content;
                $urlEncodedData = urlencode($data);
                return redirect()->route('teacher.downloadSlidesPPTX', ['slides' => $urlEncodedData]);
        }
    }
    public function downloadDocx(Request $request)
    {
        $lesson = json_decode(urldecode($request->input('lesson')), true);

        $phpWord = new PhpWord();

        $section = $phpWord->addSection();

        $fontStyleName = 'myOwnStyle';
        $phpWord->addFontStyle(
            $fontStyleName,
            array('name' => 'Tahoma', 'size' => 16, 'color' => '1B2232', 'bold' => true)
        );

        $lines = explode("\n", $lesson);
        foreach ($lines as $line) {
            if (strpos($line, '<h2>') !== false && strpos($line, '</h2>') !== false) {
                $line = str_replace(['<h2>', '</h2>'], '', $line); // remove the HTML tags
                $section->addText(trim($line), $fontStyleName); // add the line as heading with special style
            } else {
                $section->addText(trim($line)); // add the line as regular text
            }
        }

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

        $fileName = "lesson_plan.docx";

        // Set headers for downloading the file
        header("Content-Disposition: attachment; filename=$fileName");
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');

        // Save the file to output buffer and send it to the browser
        $objWriter->save('php://output');
        exit;
    }



    public function downloadComprehension(Request $request)
    {
        $questions = json_decode(urldecode($request->input('questions')), true);

        $phpWord = new PhpWord();

        $section = $phpWord->addSection();

        // Add Questions
        $section->addTitle('Questions', 1);
        foreach ($questions as $key => $question) {
            $section->addListItem($question['Question']);
        }

        $section->addTextBreak();

        // Add Answers
        $section->addTitle('Answers', 1);
        foreach ($questions as $key => $question) {
            $section->addListItem(ucfirst($question['Answer']));
        }

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

        $fileName = "comprehension.docx";

        // Set headers for downloading the file
        header("Content-Disposition: attachment; filename=$fileName");
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');

        // Save the file to output buffer and send it to the browser
        $objWriter->save('php://output');
        exit;
    }



    public function downloadRubricDocx(Request $request)
    {
        $rubric = json_decode(urldecode($request->input('rubric')), true);
        // dd($rubric);
        $phpWord = new PhpWord();

        $section = $phpWord->addSection();

        // Create the table
        $table = $section->addTable();

        // Define cell style with border color
        $cellStyle = array('borderSize' => 6, 'borderColor' => '000000');

        // Create the header row
        $headerRow = $table->addRow();

        // Adding "Category Name" as the first header cell
        $headerRow->addCell(2000, $cellStyle)->addText("Category Name");

        // Retrieve the first element of the $rubric array
        $firstCategory = reset($rubric);

        $area_assessed_ar = [
            0 => "Excelente",
            1 => "Satisfactorio",
            2 => "Mejorable",
            3 => "Insuficiente"
        ];
        // Add header cells for the assessed names
        foreach ($firstCategory as $assessed_name => $desc) {
            $headerRow->addCell(2000, $cellStyle)->addText($area_assessed_ar[$assessed_name]);
        }


        // Add table rows
        foreach ($rubric as $category => $ratings) {
            $row = $table->addRow();
            $row->addCell(2000, $cellStyle)->addText($category);
            foreach ($ratings as $rating => $description) {
                $row->addCell(2000, $cellStyle)->addText($description);
            }
        }

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

        $fileName = "rubric_generator.docx";

        // Set headers for downloading the file
        header("Content-Disposition: attachment; filename=$fileName");
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');

        // Save the file to output buffer and send it to the browser
        $objWriter->save('php://output');
        exit;
    }

    public function removeInvalidXmlChars($text)
    {
        return preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F]/', '', $text);
    }

    public function downloadConceptDocx(Request $request)
    {
        $concept = json_decode(urldecode($request->input('concept')), true);

        // dd($concept);
        $phpWord = new PhpWord();

        $section = $phpWord->addSection();

        $fontStyleName = 'myOwnStyle';
        $phpWord->addFontStyle(
            $fontStyleName,
            array('name' => 'Tahoma', 'size' => 16, 'color' => '1B2232', 'bold' => true)
        );

        $lines = explode("\n", $concept);
        foreach ($lines as $line) {
            if (strpos($line, '<h2>') !== false && strpos($line, '</h2>') !== false) {
                $line = str_replace(['<h2>', '</h2>'], '', $line); // remove the HTML tags
                $section->addText(trim($line), $fontStyleName); // add the line as heading with special style
            } else {
                $section->addText(trim($line)); // add the line as regular text
            }
        }

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

        $fileName = "concept_explainer.docx";

        // Set headers for downloading the file
        header("Content-Disposition: attachment; filename=$fileName");
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');

        // Save the file to output buffer and send it to the browser
        $objWriter->save('php://output');
        exit;
    }

    public function downloadConceptPDF(Request $request)
    {
        $concept = json_decode(urldecode($request->input('concept')), true);

        $phpWord = new PhpWord();

        $phpWord->getDocInfo()->setTitle("MaestroIA - Concept Explainer PDF");

        $domPdfPath = base_path('vendor/dompdf/dompdf');
        Settings::setPdfRendererPath($domPdfPath);
        Settings::setPdfRendererName('DomPDF');


        // Define font styles
        $contentStyle = ['size' => 12];
        $headingStyle = ['size' => 16, 'bold' => true];

        $section = $phpWord->addSection();

        $lines = explode("\n", $concept);
        foreach ($lines as $line) {
            if (strpos($line, '<h2>') !== false && strpos($line, '</h2>') !== false) {
                $line = str_replace(['<h2>', '</h2>'], '', $line); // remove the HTML tags
                $section->addText(trim($line), $headingStyle); // add the line as heading with special style
            } else {
                $section->addText(trim($line), $contentStyle); // add the line as regular text
            }
        }

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'PDF');

        $fileName = "concept_explainer.pdf";

        // Set headers for downloading the file
        header("Content-Disposition: attachment; filename=$fileName");
        header('Content-Type: application/pdf');
        // Save the file to output buffer and send it to the browser
        $objWriter->save('php://output');

        exit;
    }


    public function downloadWorksheetDocx(Request $request)
    {
        $worksheet = json_decode(urldecode($request->input('worksheet')), true);

        $phpWord = new PhpWord();

        $section = $phpWord->addSection();

        $fontStyleName = 'myOwnStyle';
        $phpWord->addFontStyle(
            $fontStyleName,
            array('name' => 'Tahoma', 'size' => 16, 'color' => '1B2232', 'bold' => true)
        );

        $lines = explode("\n", $worksheet);
        foreach ($lines as $line) {
            if (strpos($line, '<h2>') !== false && strpos($line, '</h2>') !== false) {
                $line = str_replace(['<h2>', '</h2>'], '', $line); // remove the HTML tags
                $section->addText(trim($line), $fontStyleName); // add the line as heading with special style
            } else {
                $section->addText(trim($line)); // add the line as regular text
            }
        }

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

        $fileName = "worksheet.docx";

        // Set headers for downloading the file
        header("Content-Disposition: attachment; filename=$fileName");
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');

        // Save the file to output buffer and send it to the browser
        $objWriter->save('php://output');
        exit;
    }


    public function downloadWorksheetPDF(Request $request)
    {
        $worksheet = json_decode(urldecode($request->input('worksheet')), true);

        $phpWord = new PhpWord();
        $phpWord->getDocInfo()->setTitle("MaestroIA - Worksheet PDF");

        // Set PDF renderer
        $domPdfPath = base_path('vendor/dompdf/dompdf');
        Settings::setPdfRendererPath($domPdfPath);
        Settings::setPdfRendererName('DomPDF');

        $section = $phpWord->addSection();

        $fontStyleName = 'myOwnStyle';
        $phpWord->addFontStyle(
            $fontStyleName,
            array('name' => 'Tahoma', 'size' => 16, 'color' => '1B2232', 'bold' => true)
        );

        $lines = explode("\n", $worksheet);
        foreach ($lines as $line) {
            if (strpos($line, '<h2>') !== false && strpos($line, '</h2>') !== false) {
                $line = str_replace(['<h2>', '</h2>'], '', $line); // remove the HTML tags
                $section->addText(trim($line), $fontStyleName); // add the line as heading with special style
            } else {
                $section->addText(trim($line)); // add the line as regular text
            }
        }

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'PDF');

        $fileName = "worksheet.pdf";

        // Set headers for downloading the file
        header("Content-Disposition: attachment; filename=$fileName");
        header('Content-Type: application/pdf');

        // Save the file to output buffer and send it to the browser
        $objWriter->save('php://output');
        exit;
    }
}
