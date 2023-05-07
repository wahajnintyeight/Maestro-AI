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
        $lesson = $request->session()->get('lesson', []);
        $grade = $request->session()->get('grade', '');
        $title = $request->session()->get('title', '');
        $description = $request->session()->get('description', '');

        // Clear session data
        $request->session()->forget(['lesson', 'grade', 'title', 'description']);

        return view('dashboard.teacher.lessonPlanner01', compact('lesson', 'title', 'grade', 'description'));
    }

    public function showConceptExplainer(Request $request)
    {
        $concept = $request->session()->get('concept', []);
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
        $worksheet = $request->session()->get('worksheet', []);
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
        $open_ai_key = getenv('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $grade = $request->input('grade');
        $title = $request->input('title');
        $description = $request->input('description');
        $curriculum = $request->input('curriculum');

        // dd($grade, $title, $description);
        $lesson = [];

        try {

            $prompt = "In Traditional Spanish from Spain. Create a lesson plan for grade $grade with the title \"$title\" and description \"$description\". Try to follow the \" $curriculum \" curriculum. For example: [Clase de Nombres y Pronombres|Aprender a identificar y utilizar correctamente los nombres y pronombres en oraciones]|[Metas y Objetivos|Que los estudiantes sean capaces de reconocer y utilizar los nombres y pronombres adecuadamente, mejorando sus habilidades de lectura y escritura]|[Materiales y Recursos|Pizarra, marcadores, hojas de trabajo, tarjetas con nombres y pronombres, dispositivos electrónicos (opcional)]|[Actividad de Calentamiento|Juego de asociación de tarjetas: Los estudiantes emparejan tarjetas con nombres y pronombres correspondientes, fomentando la familiarización con estos conceptos]|[Vocabulario y Gramática|Introducir y explicar los diferentes tipos de nombres (comunes, propios, abstractos, colectivos) y pronombres (personales, posesivos, demostrativos, relativos, interrogativos, indefinidos)]|[Actividades y Ejercicios|1. Práctica de identificación: Los estudiantes subrayan los nombres y pronombres en oraciones proporcionadas; 2. Creación de oraciones: Los alumnos crean oraciones utilizando los nombres y pronombres aprendidos; 3. Juego en equipo: Los estudiantes forman equipos y compiten para identificar y clasificar nombres y pronombres en una lista de palabras]|[Evaluación|Evaluar la comprensión de los estudiantes mediante preguntas de opción múltiple, preguntas de emparejamiento y ejercicios de completar oraciones con nombres y pronombres adecuados]|[Actividad de Cierre|Reflexión y discusión en grupo: Los estudiantes comparten sus experiencias y desafíos al trabajar con nombres y pronombres, y plantean preguntas o inquietudes para futuras lecciones]. Do not add new lines or use new line escape characters. Avoid the habit of doing this: 'Content: This is the content' i.e no need to prepend the content with a label & a colon.";

            $complete = $open_ai->chat([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    [
                        "role" => "system",
                        "content" => "You are an expert at creating in-depth Lesson Planners for students of grade " . $grade . ". Please provide content for the following headings in this format: [ClassTitleHere|ClassObjectiveHere]|[HeadingHere1|ContentHere1]|[HeadingHere2|ContentHere2]"
                    ],
                    [
                        "role" => "user",
                        "content" => $prompt
                    ],
                ],
                'temperature' => 0.9,
                'max_tokens' => 1500,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ]);

            // $complete = '{"id":"chatcmpl-7DS0Epv67ZcEM84POhBGx7BmLfBJu","object":"chat.completion","created":1683440262,"model":"gpt-3.5-turbo-0301","usage":{"prompt_tokens":239,"completion_tokens":493,"total_tokens":732},"choices":[{"message":{"role":"assistant","content":"[Matemáticas|Multiplicación] \n\n[Metas y Objetivos|Los estudiantes aprenderán a multiplicar de forma sencilla y aplicarán esta habilidad en situaciones cotidianas.] \n\n[Materiales y Recursos|Pizarrón, marcadores, manipulativos como bloques de construcción, pelotas y juguetes pequeños.] \n\n[Actividad de Calentamiento|El maestro mostrará diferentes objetos y preguntará cuántos hay en total si se suman dos grupos. Por ejemplo, si hay tres coches y tres bicicletas, ¿cuántos vehículos hay en total? El maestro también puede usar palillos chinos para que los estudiantes hagan grupos de dos o tres y cuenten cuántos palillos hay en total.] \n\n[Vocabulario y Gramática|Multiplicar, sumar, total, igual, grupos, objetos.] \n\n[Actividades y Ejercicios|El maestro comenzará con una lección sobre la multiplicación y cómo funciona. Luego, los estudiantes trabajarán en parejas para usar objetos y crear grupos iguales, por ejemplo, cuatro bloques en un grupo y cinco bloques en otro grupo. Luego, el maestro les preguntará cuántos bloques hay en total si se multiplican los grupos.\nPara continuar la actividad, los estudiantes usarán juguetes pequeños para crear grupos. El maestro les hará preguntas como \"Si tenemos dos grupos de tres pelotas, ¿cuántas pelotas tenemos en total?\"\n \n[Evaluación|El maestro evaluará a los estudiantes mediante preguntas y respuestas orales durante la actividad. También les pedirá que dibujen grupos de objetos y los multipliquen para poner en práctica lo que han aprendido.]\n \n[Actividades de Extensión|Los estudiantes pueden jugar al \"Bingo de multiplicación\" con tarjetas que contengan problemas de multiplicación. También pueden usar bloques de construcción para crear grupos más grandes y multiplicarlos.] \n\n[Actividad de Cierre|El maestro preguntará a los estudiantes qué han aprendido sobre la multiplicación y cómo pueden aplicarlo en su vida cotidiana. Los estudiantes también compartirán sus trabajos de dibujo y ejercicios con el resto de la clase.]"},"finish_reason":"stop","index":0}]}';

            // dd($complete);


            //"[Política en Pakistán|Comprender la política contemporánea de Pakistán]|[Metas y Objetivos|Los estudiantes serán capaces de comprender la situación política actual en Pakistán, los partidos políticos en el país así como los principales problemas políticos que enfrenta el país]|[Materiales y Recursos|Pizarra, proyector, papel, bolígrafos]|[Actividad de Calentamiento|Discusión de noticias recientes en Pakistán. Preguntas abiertas para discusión en clase: ¿Qué está sucediendo en Pakistán en este momento? ¿Qué problemas enfrenta el país? ¿Cómo describe la política de Pakistán? ¿Cuántos partidos políticos hay en el país? ¿Quiénes son los líderes políticos destacados de Pakistán?]|[Vocabulario y Gramática|Vocabulario relacionado con la política en Pakistán: sistema político, partidos políticos, elecciones, líderes políticos, corrupción, derechos humanos, etc. Se revisarán tiempos verbales en presente y pasado: presente simple, presente continuo, pasado simple y pasado continuo.]|[Actividades y Ejercicios|1. Los estudiantes deben trabajar en grupos para investigar un partido político en Pakistán y presentar sus hallazgos a la clase. 2. Los estudiantes deben escribir un ensayo sobre los desafíos políticos de Pakistán y presentar posibles soluciones. 3. Discusión de las elecciones presidenciales más recientes en Pakistán y análisis de los resultados.]|[Evaluación|Los estudiantes serán evaluados en su capacidad para presentar información precisa y clara sobre un partido político, su capacidad para escribir un ensayo coherente y bien estructurado sobre los problemas políticos de Pakistán, y su participación en discusiones en clase. También se evaluará la comprensión del vocabulario y la gramática relacionada con la política.]|[Actividades de Extensión|Los estudiantes pueden investigar más a fondo un tema político específico en Pakistán y presentar su investigación a la clase. También se puede pedir a los estudiantes que escriban una carta a un líder político en Pakistán sobre un problema específico en el país.]|[Actividad de Cierre|La clase debe terminar con una discusión general sobre las lecciones aprendidas en cuanto a la política en Pakistán y cómo se relacionan estas lecciones con la política en otros países.] ◀"

            $completeDecoded = json_decode($complete);

            if (is_object($completeDecoded) && isset($completeDecoded->choices[0]->message->content)) {
                $responseText = $completeDecoded->choices[0]->message->content;
                $responseText = str_replace(['“', '”'], '"', $responseText); // Replace curly quotes with straight quotes if needed
                $responseText = str_replace("]\n\n[", "]|[", $responseText); // Replace "] ◀\n[" with "]|["
                $responseText = str_replace("] \n\n[", "]|[", $responseText); // Replace "] ◀\n[" with "]|["
                $responseText = str_replace("\"\n \n", "]|[", $responseText); // Replace "] ◀\n[" with "]|["

                $rawHeadings = explode("]|[", trim($responseText)); // Split by "]|[" instead of just "\n"

                foreach ($rawHeadings as $headingContent) {
                    list($heading, $content) = explode("|", $headingContent, 2); // Add a limit of 2 to the explode function
                    $heading = trim(str_replace(['[', ']'], '', $heading)); // Remove square brackets from the heading
                    $content = rtrim(str_replace(['[', ']'], '', trim($content)), '}'); // Remove square brackets and the closing curly brace from the content

                    $lesson[] = (object) [
                        'Heading' => $heading,
                        'Content' => $content,
                    ];
                }
            } else {
                // Handle the case when the response is not as expected (e.g., missing the expected properties)
                throw new Exception('Unexpected response from OpenAI API.');
            }

            // dd($complete, $responseText, $rawHeadings, $lesson);


            // dd($responseText, $rawHeadings, $lesson);
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
        $open_ai_key = getenv('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $grade = $request->input('grade');
        $num_of_slides = $request->input('num_of_slides');
        $description = $request->input('description');
        $curriculum = $request->input('curriculum');

        // dd($grade, $num_of_slides, $description);
        $slides = [];

        try {
            $prompt = "In Traditional Spanish from Spain. Create a presentation for grade $grade with the objective \"$description\". The presentation should follow the \"$curriculum\" curriculum. The content of the slides should be in-depth and at least 3 sentences long.  Generate this for " . $num_of_slides . " slides. For example: Innovations in Renewable Energy: A Sustainable Future|Exploring the latest advancements in renewable energy technologies|[Solar Energy Breakthroughs|Perovskite solar cells offer higher efficiency, lower production costs, and flexibility|What are perovskite solar cells?|How do they achieve higher efficiency?|What factors contribute to their lower production costs?]|[Wind Energy Innovations|Airborne wind energy systems harness high-altitude winds; smart wind turbines use sensors and AI for optimization|What are airborne wind energy systems?|What are the benefits of high-altitude winds?|How do smart wind turbines optimize energy production?]|";

            $assistant_prompt = "You are an expert at generating presentation slides for grade " . $grade . ". Provide content for each slide in this exact same format: TitleOfPresentationHere|ObjectiveOfPresentationHere|[SlideHeading1Here|SlideContent1Here|QuestionStatement1RegardingSlide1Here|QuestionStatement2RegardingSlide1Here|QuestionStatement3RegardingSlide1Here]|[SlideHeading2Here|SlideContent2Here|QuestionStatement1RegardingSlide2Here|QuestionStatement2RegardingSlide2Here|QuestionStatement3RegardingSlide2Here]|. For Questions in each slide - only give Question Statements. Do not proceed to give answer to the questions.";

            // $complete = $open_ai->chat([
            //     'model' => 'gpt-3.5-turbo',
            //     'messages' => [
            //         [
            //             'role' => 'system',
            //             'content' => $assistant_prompt
            //         ],
            //         [
            //             'role' => 'user',
            //             'content' => $prompt
            //         ],
            //     ],
            //     'temperature' => 0.9,
            //     'max_tokens' => 1000,
            //     'frequency_penalty' => 0,
            //     'presence_penalty' => 0.6,
            // ]);
            // dd($complete);


            $complete = '{"id":"chatcmpl-7DWPntpL47Xi2GWyen0OxtuCxqlsG","object":"chat.completion","created":1683457223,"model":"gpt-3.5-turbo-0301","usage":{"prompt_tokens":428,"completion_tokens":345,"total_tokens":773},"choices":[{"message":{"role":"assistant","content":"Creación de contenido en Youtube|Objetivo: Crear contenido en Youtube con el fin de mejorar la competencia comunicativa del alumnado|[Introducción a Youtube|Presentación de la plataforma Youtube, explicación de sus características y otros datos de interés| ¿Qué es Youtube?| ¿Cuáles son las diferentes herramientas que ofrece Youtube?| ¿Por qué es importante utilizar Youtube para la creación de contenido?]|[Estrategias de contenido|Estrategias para la realización de contenido de calidad, planificación de guiones, grabación y edición de vídeos| ¿Cómo planificar la creación de contenido en Youtube?| ¿Cómo estructurar una historia que enganche al espectador?| ¿Qué herramientas digitales son útiles para la grabación y edición de vídeos?]|[Herramientas de análisis de vídeos|Explicación de herramientas para analizar los resultados obtenidos en Youtube, medición de estadísticas y otros datos de interés| ¿Qué son las estadísticas de Youtube?| ¿Cómo se miden las estadísticas en Youtube?| ¿En qué nos pueden ayudar las estadísticas de Youtube al crear contenido?]|[Difusión de contenido|Estrategias para la difusión del contenido generado, uso de redes sociales y otras estrategias para aumentar el número de visualizaciones| ¿Cómo se puede promocionar el contenido para llegar al mayor número de personas?| ¿Cuáles son las redes sociales más utilizadas para compartir contenido en Youtube?| ¿Qué otras estrategias se pueden utilizar para aumentar el número de visualizaciones?|"},"finish_reason":"stop","index":0}]}';

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
        $open_ai_key = getenv('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $grade = $request->input('grade');
        $description = $request->input('description');
        $curriculum = $request->input('curriculum');

        // dd($grade, $title, $description);
        $worksheet = [];
        // In Traditional Spanish from Spain.
        try {
            $prompt = "In Traditional Spanish from Spain. Create a worksheet on the topic of $description for a student of grade $grade, following the $curriculum curriculum. The worksheet should provide comprehensive and challenging questions. You MUST make sure you accurately follow the format. Don't stray away from it. Here's an example of the format: Photosynthesis|Objective: Understand the process of photosynthesis|[What is the main purpose of photosynthesis?|Produce oxygen|Produce glucose|Produce carbon dioxide|Produce glucose]|[In which organelle does photosynthesis occur?|Chloroplast|Mitochondria|Nucleus|Chloroplast]|[Which gas is required for photosynthesis?|Oxygen|Carbon dioxide|Nitrogen|Carbon dioxide]|[What is the primary pigment involved in photosynthesis?|Chlorophyll|Carotene|Xanthophyll|Chlorophyll]|{What are the two main stages of photosynthesis?|What is the role of chlorophyll in photosynthesis?|Why is photosynthesis important for life on Earth?}|(Summarize the process of photosynthesis and its importance for plants and other organisms.)|<During photosynthesis, light energy is converted into ____ energy.|chemical>|<The _______ cycle is the second stage of photosynthesis.|Calvin>|<Plants release ____ as a byproduct of photosynthesis.|oxygen>|[Photosynthesis occurs in animal cells.|False]|[Plants use sunlight as a source of energy for photosynthesis.|True]|[The Calvin cycle produces glucose.|True].";

            $assistantPrompt = 'You are an expert generating worksheets for students in grade ' . $grade . '. Write using the following format: TitleOfComprehensionHere|ObjectiveOfComprehensionHere|[MCQQuestion1Here|Choice1|Choice2|Choice3|CorrectChoiceHere]|[MCQQuestion2Here|Choice1|Choice2|Choice3|CorrectChoiceHere]|[MCQQuestion3|Choice1|Choice2|Choice3|CorrectChoiceHere]|[MCQQuestion4Here|Choice1|Choice2|Choice3|CorrectChoiceHere]|{GeneralQuestion1Here|GeneralQuestion2Here|GeneralQuestion3}|(Ask a Question that summarizes the assessment - wrap it in () parenthesis)|<Fill in Blank Statement 1 - add appropriate blanks i.e _____ | Fill In Blank Answer>|<Fill in Blank Statement 2 | Fill In Blank Answer>|<Fill in Blank Statement 3 | Fill In Blank Answer>|[Statement1Here|TrueOrFalse]|[Statement2Here|TrueOrFalse]|[Statement3Here|TrueOrFalse].';

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
                'max_tokens' => 1000,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ]);

            // $complete = '{"id":"chatcmpl-7DVUx1pGwAXOK6wrePjpjhfOe1FH7","object":"chat.completion","created":1683453699,"model":"gpt-3.5-turbo-0301","usage":{"prompt_tokens":593,"completion_tokens":555,"total_tokens":1148},"choices":[{"message":{"role":"assistant","content":"Sistema Digestivo|Objetivo: Evaluar la comprensión del estudiante sobre el sistema digestivo.|[¿Cuál es el primer órgano que recibe los alimentos después de ser ingeridos?|Estómago|Boca|Intestino delgado|B]|[¿Qué enzima descompone las proteínas en el estómago?|Lipasa|Amilasa|Pepsina|C]|[¿Dónde tiene lugar la mayor parte de la absorción de nutrientes en el sistema digestivo?|Estómago|Boca|Intestino delgado|C]|[¿Qué órgano segrega la bilis para ayudar en la digestión de las grasas?|Páncreas|Hígado|Estómago|B]|[¿Qué tipo de músculo ayuda a mover los alimentos a través del sistema digestivo?|Músculo liso|Músculo esquelético|Músculo cardíaco|A]|[¿Qué estructura conecta el esófago al estómago?|Duodeno|Colon|Cardias|C]|[¿Qué órgano elimina los desechos no digeribles del cuerpo?|Hígado|Pulmones|Intestino grueso|C]|[¿Cuántos dientes permanentes tiene un adulto promedio?|28|32|36|B]|{¿Qué ocurre durante la absorción de nutrientes?|¿Cómo se relacionan el sistema digestivo y el sistema circulatorio en la absorción de nutrientes?|¿Por qué es importante masticar bien los alimentos antes de tragarlos?}|(¿Cuál es la función principal del sistema digestivo?)|<La ______ es el tubo muscular que conecta la garganta con el estómago.|esófago>|<El intestino delgado está dividido en tres partes: Duodeno, ______ e íleon.|Yeyuno>|<La bilis se almacena en la ______.|vesícula biliar>|[La saliva contiene una enzima que comienza la digestión de los ___.|Carbohidratos|Proteínas|Grasas|A]|[Los ácidos estomacales tienen un pH de alrededor de ___ |2|5|8|A]|[El hígado produce bilis para ayudar a digerir las grasas.|Verdadero|Falso|Verdadero]| [El colon también se conoce como intestino delgado.|Verdadero|Falso|Falso]"},"finish_reason":"stop","index":0}]}';

            // dd($complete);

            $complete_array = json_decode($complete, true);
            // dd($complete_array);
            $text = trim($complete_array['choices'][0]['message']['content']);
            $text = str_replace("]\n[", "]|[", $text);
            $text = str_replace("]\n\n[", "]|[", $text);
            // $text = str_replace("]\n\n\n[", "]|[", $text);
            $parts = explode('|', $text);

            // dd($parts);

            // Extract the Title and Objective
            $title = trim($parts[0]);
            $objective = trim($parts[1]);

            // Extract the MCQs and store them in an array
            $mcqs = [];
            $i = 2;
            while ($i < count($parts) && $parts[$i] !== '{') {
                $question = trim(preg_replace('/MCQQuestion\d+\|/', '', str_replace('[', '', $parts[$i])));
                // dd($question);
                $i++;
                $choice1 = trim(str_replace(']', '', $parts[$i]));
                $i++;
                $choice2 = trim(str_replace(']', '', $parts[$i]));
                $i++;
                $choice3 = trim(str_replace(']', '', $parts[$i]));
                $i++;
                $correctChoice = trim(str_replace(']', '', $parts[$i]));
                $i++;
                // If the next element starts with '[', it is still part of the MCQs
                if (
                    $i < count($parts) && $parts[$i][0] === '['
                ) {
                    $mcqs[] = [
                        'Question' => $question,
                        'Choice1' => $choice1,
                        'Choice2' => $choice2,
                        'Choice3' => $choice3,
                        'Correct' => $correctChoice,
                    ];
                } else {
                    // Otherwise, we have reached the end of the MCQs, add the last MCQ and break the loop
                    $mcqs[] = [
                        'Question' => $question,
                        'Choice1' => $choice1,
                        'Choice2' => $choice2,
                        'Choice3' => $choice3,
                        'Correct' => $correctChoice,
                    ];
                    break;
                }
            }




            $general_questions = [];
            $assessment_summary = '';

            if ($i < count($parts)) {
                $current = trim($parts[$i]);
                if ($current[0] === '{') {
                    $i++;
                    while ($i < count($parts)) {
                        $current = trim($parts[$i], '{}.');
                        if ($current[0] === '(') {
                            break;
                        }
                        if ($current[0] === '}') {
                            $general_questions[] = trim(trim($current, '|'), '}');
                            $i++; // Increment $i to move to the next part
                            break;
                        } else {
                            $general_questions[] = trim(trim($current, '|'), '}');
                            $i++;
                        }
                    }
                }

                // dd($current[0]);
            }

            // dd($i, count($parts), $parts, $parts[$i]);

            if ($i < count($parts)) {
                $current = trim($parts[$i]);

                if ($current[0] === '(') {
                    while ($i < count($parts)) {
                        $current = trim($parts[$i]);

                        // Break the loop when encountering '<'
                        if ($current[0] === '<') {
                            break;
                        }

                        $current = trim($current, '().');

                        if ($current[strlen($current) - 1] === ')') {
                            $assessment_summary .= $current;
                            break;
                        } else {
                            $assessment_summary .= $current . '';
                            $i++;
                        }
                    }
                }
            }

            $fill_in_the_blanks = [];

            // Create a function to check if a character exists in any element of an array
            function characterExistsInArray($char, $array, $startIndex)
            {
                for ($i = $startIndex; $i < count($array); $i++) {
                    if (strpos($array[$i], $char) !== false) {
                        return true;
                    }
                }
                return false;
            }

            while ($i !== false && $i < count($parts)) {
                $current = trim($parts[$i]);
                if ($current[0] === '<') {
                    $statement = trim(substr($current, 1));
                    $answer = trim(trim($parts[$i + 1]), '>');

                    // Check if '>' is in the next element
                    if (strpos($answer, '>') !== false) {
                        $answer = trim(substr($answer, 0, strpos($answer, '>')));
                        $i++;
                    }

                    $fill_in_the_blanks[] = [
                        'Statement' => $statement,
                        'Answer' => $answer,
                    ];
                    $i += 2;
                } else {
                    $i++;
                }

                // Check if there are no more '>' characters
                if (!characterExistsInArray('>', $parts, $i)) {
                    break;
                }
            }


            // dd($i);

            $true_or_false = [];

            while (
                $i < count($parts)
            ) {
                $current = trim($parts[$i]);
                if ($current[0] === '[') {
                    $statement = trim(substr($current, 1));
                    $answer = trim(trim($parts[$i + 1]), ']');

                    // Check if ']' is in the next element
                    if (strpos($answer, ']') !== false) {
                        $answer = trim(substr($answer, 0, strpos($answer, ']')));
                        $i++;
                    }

                    $true_or_false[] = [
                        'Statement' => $statement,
                        'Answer' => $answer,
                    ];
                    $i += 2;
                } else {
                    $i++;
                }
            }


            $decide = rand(0, 1);

            $worksheet = [
                'Title' => $title,
                'Objective' => $objective,
                'MCQs' => $mcqs,
                'GeneralQuestions' => $general_questions,
                'AssessmentSummary' => $assessment_summary,
                'FillInTheBlanks' => $fill_in_the_blanks,
                // Add the FillInTheBlanks array to the final worksheet
                'TrueOrFalse' => $true_or_false,
                'decide' => $decide
            ];

            // dd($parts, $i, $worksheet);

            // dd($worksheet, $parts, $complete);
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
                'max_tokens' => 1000,
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
        $open_ai_key = getenv('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $subject = $request->input('subject');
        $topic = $request->input('topic');
        $age = $request->input('age');
        $curriculum = $request->input('curriculum');


        $concept = [];
        // In Traditional Spanish from Spain. 
        try {

            $prompt = "En español tradicional de España. Cree una explicación detallada del concepto para un estudiante de $age que estudie la materia '$subject' y el tema '$topic'. Trate de seguir el plan de estudios '$curriculum'. Explique cada concepto en profundidad, utilizando un lenguaje sencillo y ejemplos para que sea fácil de entender para el estudiante. Asegúrese de que la explicación sea completa y cubra todos los aspectos esenciales del tema. Por ejemplo: Exploring Photosynthesis|Students investigate the process of photosynthesis in plants by conducting an experiment using leaf disks. They observe the rate of oxygen production as a measure of photosynthetic activity under various light conditions.|After analyzing the data, students conclude that light intensity and wavelength play a crucial role in the efficiency of photosynthesis. They further discuss the importance of photosynthesis in the global carbon cycle and its implications for sustaining life on Earth.|Understand the process of photosynthesis and its importance by conducting experiments and analyzing the effects of light on plants.";

            $assistantPrompt = "You are an expert at explaining in-depth concepts for students at the age of " . $age . ". Please provide content for the following headings in this format: TitleOfConcept|BodyOfConceptExplanation|ExampleOfConceptParagraph|ConciseSummaryOfExplanation";
            $complete = $open_ai->chat([
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
                'max_tokens' => 1500,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ]);

            // $complete = $open_ai->completion([
            //     'model' => 'text-davinci-003',
            //     'prompt' => $prompt,
            //     'temperature' => 0.9,
            //     'max_tokens' => 1000,
            //     'frequency_penalty' => 0,
            //     'presence_penalty' => 0.6,
            // ]);

            dd($complete);

            // $complete = '{"id":"cmpl-7DGP06O0jTTHc9hkVr9arqZ0974SB","object":"text_completion","created":1683395670,"model":"text-davinci-003","choices":[{"text":".\n\nGramática|La gramática es la estructura o el patrón de un idioma. Esto significa que hay una serie de reglas y patrones a seguir para que una persona hable correctamente. Estas reglas incluyen oraciones con los verbos adecuados, formas de pronombre y mucho más. Por ejemplo, en inglés, cuando utilizas un verbo para describir algo, como correr, debes usar la palabra correcta. En este caso, la palabra correcta es \'correr\'. Si dijera \'ir\', estaría cometiendo un error gramatical.|Ejemplo de concepto de gramática: si quiero decir, \"¡Corre!\", entonces debo usar el verbo correcto, que es \'correr\' en lugar de \'ir\'.|En resumen, la gramática es la estructura o el patrón de un idioma. Esto significa que hay una serie de reglas y patrones a seguir para que una persona hable correctamente.","index":0,"logprobs":null,"finish_reason":"stop"}],"usage":{"prompt_tokens":293,"completion_tokens":275,"total_tokens":568}}';
            // $complete = '{"id":"cmpl-79q7EEGfr2PNitvwpSNw5zzRcGlTz","object":"text_completion","created":1682579640,"model":"text-davinci-003","choices":[{"text":" (50-100 words).\n\nNouns|Nouns are words that name people, places, things, or ideas. They are a part of every sentence, and they usually come before verbs. Nouns can be singular or plural depending on how many items are being talked about. For example, dog is a singular noun and dogs is a plural noun. Understanding how to use nouns correctly is necessary for effectively communicating in English.|The dog barked loudly.|Nouns are words that name items and people, and are used to effectively communicate in English. They can be singular or plural, and come before verbs.","index":0,"logprobs":null,"finish_reason":"stop"}],"usage":{"prompt_tokens":162,"completion_tokens":135,"total_tokens":297}}';

            $completeDecoded = json_decode($complete);

            // dd($completeDecoded);

            if (is_object($completeDecoded) && isset($completeDecoded->choices[0]->text)) {
                $responseText = $completeDecoded->choices[0]->text;
                $responseText = str_replace(["\r\n", "\r", "\n"], ' ', $responseText);
                $responseText = trim($responseText);
                $rawConceptData = explode("|", $responseText);

                if (count($rawConceptData) >= 3) {
                    $title = trim($rawConceptData[0]);
                    $content = trim($rawConceptData[1]);
                    $example = trim($rawConceptData[2]);
                    $summary = trim(implode("|", array_slice($rawConceptData, 3)));

                    $concept[] = (object) [
                        'Title' => $title,
                        'Content' => $content,
                        'Example' => $example,
                        'Summary' => $summary,
                    ];
                }
            } else {
                // Handle the case when the response is not as expected (e.g., missing the expected properties)
                throw new Exception('Unexpected response from OpenAI API.');
            }


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
            if ($focus != "Mixture of All") {
                $prompt = "In Traditional Spanish from Spain. Create " . $questionNo . " questions for this given comprehension: " . $description . ". The reading focus of the questions should be '" . $focus . "'The questions should be in great depth, detailed and long. The difficulty level must be appropriate for grade level " . $grade . " students. \nPlease provide well-written questions in this format: [QuestionStatement1|AnswerStatement1]|[QuestionStatement2|AnswerStatement2]|[QuestionStatement3|AnswerStatement3]|[QuestionStatement4|AnswerStatement4]|[QuestionStatement5|AnswerStatement5]. \n Double-check the answers as well and clarify them. Keep the questions strictly related to the focus of questions: '" . $focus . "'.";

                $assistantPrompt = "You are an expert at generating detailed comprehension questions. You are a teacher who is creating comprehension questions for a reading passage. Please provide well-written questions in this format: [QuestionStatement1|AnswerStatement1]|[QuestionStatement2|AnswerStatement2]|[QuestionStatement3|AnswerStatement3]|[QuestionStatement4|AnswerStatement4]|[QuestionStatement5|AnswerStatement5]. For example: [What is the main idea of the passage?|The main idea of the passage is that the author is trying to explain the importance of the topic.]";
            } else {
                $questionNo = 10;
                $prompt = "In Traditional Spanish from Spain. Create 10 questions for this given comprehension: " . $description . ". Two questions should be Vocabulary based, two questions should be Inference based, two should be from Evaluation, two should be from Author Choice, two should be from 'Compare, Contrast and Comment', two should be from 'Literal Retrieval', two should be from 'Summary and Prediction', two should be from 'Analysis of Language and Structure'. \nPlease provide well-written questions in this format: [VocabularyQuestionHere|AnswerStatement1]|[VocabularyQuestionHere|AnswerStatement2]|
                [InferenceQuestionHere|Statement1]|InferenceQuestionHere|AnswerStatement2]|[EvaluationQuestionHere|AnswerStatement1]|EvaluationQuestionHere|AnswerStatement2]|[AuthorChoiceQuestionHere|AnswerStatement1]|AuthorChoiceQuestionHere|AnswerStatement2]|[ContrastQuestionHere|AnswerStatement1]|ContrastQuestionHere|AnswerStatement2]. Each question should be on a new line. \nThe questions should be great depth,relevant, long, detailed, and the grade level for the questions should be " . $grade . ".";

                $assistantPrompt = "You are an expert at generating detailed comprehension questions. You are a teacher who is creating comprehension questions for a reading passage. Please provide well-written questions in this format: [VocabularyQuestionHere|AnswerStatement1]|[VocabularyQuestionHere|AnswerStatement2]|[InferenceQuestionHere|Statement1]|InferenceQuestionHere|AnswerStatement2]|[EvaluationQuestionHere|AnswerStatement1]|EvaluationQuestionHere|AnswerStatement2]|[AuthorChoiceQuestionHere|AnswerStatement1]|AuthorChoiceQuestionHere|AnswerStatement2]|[ContrastQuestionHere|AnswerStatement1]|ContrastQuestionHere|AnswerStatement2]. For example: [What is the main idea of the passage?|The main idea of the passage is that the author is trying to explain the importance of the topic.]";
            }
            // $complete = $open_ai->chat([
            //     'model' => 'gpt-3.5-turbo',
            //     'messages' => [
            //         [
            //             'role' => 'system',
            //             'content' => $assistantPrompt
            //         ],
            //         [
            //             'role' => 'user',
            //             'content' => $prompt
            //         ],
            //     ],
            //     'temperature' => 0.9,
            //     'max_tokens' => 1000,
            //     'frequency_penalty' => 0,
            //     'presence_penalty' => 0.6,
            // ]);
            // dd($complete);

            $complete = '{"id":"chatcmpl-7DT5GvyTMELkChV3YjmGJ3RXchLTs","object":"chat.completion","created":1683444418,"model":"gpt-3.5-turbo-0301","usage":{"prompt_tokens":498,"completion_tokens":371,"total_tokens":869},"choices":[{"message":{"role":"assistant","content":"[What is the meaning of the word \"terrestrial\" as used in the passage?| The word \"terrestrial\" means relating to the earth or land.]\n\n[What does the word \"quagmire\" mean in the passage?| The word \"quagmire\" means a difficult or complicated situation.]\n\n[What does the phrase \"dismissed from service\" mean in the passage?| The phrase \"dismissed from service\" means to be fired from employment.]\n\n[What is the meaning of the word \"authority\" in the passage?| The word \"authority\" means the power or right to give orders, make decisions, and enforce obedience.]\n\n[What does the word \"topography\" mean as used in the passage?| The word \"topography\" means the detailed description or charting of the features of a relatively small area, district, or locality.]\n\n[What was the name given to the passage that Magellan found?| Magellan named the passage \'the Strait of All Saints\']\n\n[What is the current name of the strait that Magellan had discovered?| The Strait of All Saints is currently known as the Strait of Magellan.]\n\n[What happened to one of the ships during the expedition, and where were they exploring at that time?| One of the five ships sank while exploring the topography of South America in search of a water route across the continent.]\n\n[What did Ferdinand Magellan offer to prove to the future Emperor Charles V of Spain?| Ferdinand Magellan offered to prove that the East Indies fell under Spanish authority.]\n\n[What was the purpose of the papal decree of 1493?| The purpose of the papal decree of 1493 assigned all land in the New World west of 50 degrees W longitude to Spain and all the land east of that line to Portugal.]"},"finish_reason":"stop","index":0}]}';

            // $complete = '{"id":"chatcmpl-7DRuo8toCkb4C9DMacrpkUI1lUdbo","object":"chat.completion","created":1683439926,"model":"gpt-3.5-turbo-0301","usage":{"prompt_tokens":443,"completion_tokens":413,"total_tokens":856},"choices":[{"message":{"role":"assistant","content":"[QuestionStatement1|AnswerStatement1] \r\nWhat do the unusual events described in the chronicle refer to and where did they occur? \r\nAnswer: The unusual events referred to in the chronicle occurred in 194- at Oran.\r\n\r\n[QuestionStatement2|AnswerStatement2] \r\nWhat is the description of the town of Oran, and how does it differ from other business centers in the world?\r\nAnswer: Oran is a large French port on the Algerian coast, and it has a smug, placid air. It is different from other business centers in the world because it is entirely negative, with no pigeons, trees, or gardens, and you never hear the rustle of leaves or the beat of wings.\r\n\r\n[QuestionStatement3|AnswerStatement3] \r\nHow are seasons discriminated in the town of Oran, and what tells people about spring\'s coming?\r\nAnswer: Seasons are discriminated only in the sky. People feel the air change, and baskets of flowers brought in from the suburbs by peddlers tell them about spring\'s coming.\r\n\r\n[QuestionStatement4|AnswerStatement4]\r\nWhat is the meaning of the phrase \"a spring cried in the marketplaces,\" and how does it relate to the passage?\r\nAnswer: The phrase means that people announce the coming of spring loudly, as if it were something to be sold. It relates to the passage because it shows how plain and ordinary life is in Oran, and how even the coming of spring is not a significant event there.\r\n\r\n[QuestionStatement5|AnswerStatement5]\r\nWhat is the significance of using \'negative words\' to describe the town of Oran, and how does this affect the overall tone of the passage?\r\nAnswer: The use of negative words to describe Oran affects the overall tone of the passage by creating a sense of apathy and indifference toward the town. The town is described as thoroughly negative, and the use of words like \"ugly\" and \"smug\" contribute to the passive, unremarkable tone of the passage."},"finish_reason":"stop","index":0}]}';

            // $complete = '{"id":"cmpl-7BdsUXFA6sm1bwTJoAtvijpnZJ2LW","object":"text_completion","created":1683009254,"model":"text-davinci-003","choices":[{"text":"\n\n[What does the term spur of the moment mean in this passage?|an impulsive action taken without due consideration]|[What might the phrase no more than that refer to?|Dr. Rieuxs initial reaction to the presence of the dead rat]|[How did M. Michel react when Dr. Rieux told him about the dead rat?|He was genuinely outraged]|[What does M. Michel’s insistence that there werent no rats in the building suggest?|That someone had brought it from outside]|[Evaluate how Dr. Rieux initially reacted to finding the dead rat.|He did not give it much thought and continued on his way downstairs]|[Evaluate how M. Michel reacts to the news of the dead rat.|He is shocked and determined to find out who brought the rat into the building]|[What is the authors choice in describing the reaction of Dr. Rieux and M. Michel to the news of the dead rat?|The author emphasizes the contrast between their reactions]|[Compare and contrast the initial reactions of Dr. Rieux and M. Michel to the news of the dead rat.|Dr. Rieux did not give the dead rat much thought while M. Michel was genuinely outraged]|[What is the literal meaning of the phrase There werent no rats here?|There were no rats in the building]|[Summarize what M. Michel believes about the dead rat.|M. Michel believes that someone must have brought it from outside]|[What evidence in the passage suggests that someone may have been playing a joke?|M. Michels implication that someone had brought the dead rat from outside]|[Analyze how the use of repetition in the passage affects the readers understanding of M. Michels reaction.|The repetition emphasizes M. Michels conviction that the rat must have been brought from outside, suggesting he found it suspicious].","index":0,"logprobs":null,"finish_reason":"stop"}],"usage":{"prompt_tokens":492,"completion_tokens":417,"total_tokens":909}}';

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

        foreach ($lesson as $item) {
            $section->addTitle($item['Heading'], 1);

            if ($item['Heading'] === "Materials and Resources" || $item['Heading'] === "Vocabulary and Grammar") {
                $sentences = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $item['Content']);
                foreach ($sentences as $sentence) {
                    $section->addListItem(trim($sentence));
                }
            } else {
                $section->addText($item['Content']);
            }

            $section->addTextBreak();
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
        Settings::setOutputEscapingEnabled(true);
        $concept = json_decode(urldecode($request->input('concept')), true);
        $phpWord = new PhpWord();

        $section = $phpWord->addSection();


        foreach ($concept as $item) {
            $cleanTitle = $this->removeInvalidXmlChars($item['Title']);
            $cleanContent = $this->removeInvalidXmlChars($item['Content']);
            $cleanExample = $this->removeInvalidXmlChars($item['Example']);
            $cleanSummary = $this->removeInvalidXmlChars($item['Summary']);

            $section->addTitle($cleanTitle, 1);
            $section->addText($cleanContent);

            $section->addTextBreak();

            $section->addTitle("Example", 1);
            $section->addText($cleanExample);

            $section->addTextBreak();

            $section->addTitle("Summary", 1);
            $section->addText($cleanSummary);
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

        // Set PDF renderer
        // Set the PDF renderer path

        $phpWord = new PhpWord();

        $phpWord->getDocInfo()->setTitle("MaestroIA - Concept Explainer PDF");


        $domPdfPath = base_path('vendor/dompdf/dompdf');
        Settings::setPdfRendererPath($domPdfPath);
        Settings::setPdfRendererName('DomPDF');

        // Define font styles
        $headingStyle = ['size' => 16, 'bold' => true];
        $contentStyle = ['size' => 12];
        $summaryHeadingStyle = ['size' => 16, 'bold' => true];

        $section = $phpWord->addSection();

        foreach ($concept as $item) {
            $section->addText($item['Title'], $headingStyle);
            $section->addTextBreak();
            $section->addText($item['Content'], $contentStyle);
            $section->addTextBreak();

            $section->addText("Example", $headingStyle);
            $section->addTextBreak();
            $section->addText($item['Example'], $contentStyle);
            $section->addTextBreak();

            $section->addText("Summary", $headingStyle);
            $section->addTextBreak();
            $section->addText($item['Summary'], $contentStyle);



            $section->addTextBreak();
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
        Settings::setOutputEscapingEnabled(true);
        $worksheet = json_decode(urldecode($request->input('worksheet')), true);
        $phpWord = new PhpWord();

        $headingStyle = ['size' => 16, 'bold' => true];
        $taskStyle = ['size' => 14, 'bold' => true];
        $objectiveStyle = ['size' => 14];

        $contentStyle = ['size' => 12];

        $section = $phpWord->addSection();

        // Add title
        $cleanTitle = $this->removeInvalidXmlChars($worksheet['Title']);
        $section->addText($cleanTitle, $headingStyle);

        // Add objective
        $cleanObjective = $this->removeInvalidXmlChars($worksheet['Objective']);
        $section->addText('Objective', $objectiveStyle);
        $section->addText($cleanObjective, $contentStyle);

        // Add Task 1: MCQs
        $section->addText('Task 1: Multiple Choice Questions', $taskStyle);
        foreach ($worksheet['MCQs'] as $index => $mcq) {
            $section->addText(($index + 1) . '. ' . $mcq['Question']);
            $section->addListItem($mcq['Choice1'], 0);
            $section->addListItem($mcq['Choice2'], 0);
            $section->addListItem($mcq['Choice3'], 0);
            $section->addTextBreak();
        }

        // Add Task 2: Fill in the Blanks
        $section->addText('Task 2: Fill in the Blanks', $taskStyle);
        $section->addText('Word Bank:');
        foreach ($worksheet['FillInTheBlanks'] as $index => $fib) {
            $section->addListItem($fib['Answer'], 0);
        }
        $section->addTextBreak();

        foreach ($worksheet['FillInTheBlanks'] as $index => $fib) {
            $section->addText(($index + 1) . '. ' . $fib['Statement']);
        }

        $section->addTextBreak();

        // Add Task 3: Critical Thinking
        $section->addText('Task 3: Critical Thinking', $taskStyle);
        if ($worksheet['decide'] == 0) {
            $section->addText('Answer the following questions in complete sentences:');
            foreach ($worksheet['GeneralQuestions'] as $index => $question) {
                $section->addListItem($question, 0);
            }
        } else {
            $section->addText('Label the following statements as: True or False');
            foreach ($worksheet['TrueOrFalse'] as $index => $question) {
                $section->addListItem($question['Statement'] . ' __________', 0);
            }
        }
        $section->addTextBreak();

        // Add Task 4: Assessment
        $section->addText('Task 4: Assessment', $taskStyle);
        $cleanAssessmentSummary = $this->removeInvalidXmlChars($worksheet['AssessmentSummary']);
        $section->addText($cleanAssessmentSummary);

        // Add Answer Key
        $section->addPageBreak();
        $section->addText('Answer Key (For Teacher Use Only)', $headingStyle);

        // MCQs
        $section->addText('MCQs:', $taskStyle);
        foreach ($worksheet['MCQs'] as $index => $mcq) {
            $section->addText(($index + 1) . '. ' . $mcq['Correct']);
        }

        // Fill in the Blanks
        $section->addText('Fill in the Blanks:', $taskStyle);
        foreach ($worksheet['FillInTheBlanks'] as $index => $fib) {
            $section->addText(($index + 1) . '. ' . $fib['Answer']);
        }

        // True or False
        if ($worksheet['decide'] == 1) {
            $section->addText('True or False:', $taskStyle);
            foreach ($worksheet['TrueOrFalse'] as $index => $tof) {
                $section->addText(($index + 1) . '. ' . $tof['Answer']);
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

        // Define font styles
        $headingStyle = ['size' => 14, 'bold' => true];
        $taskStyle = ['size' => 14, 'bold' => true];
        $objectiveStyle = ['size' => 14];
        $contentStyle = ['size' => 12];

        $section = $phpWord->addSection();

        // Add title
        $section->addText($worksheet['Title'], $headingStyle);
        $section->addTextBreak();

        // Add objective
        $section->addText('Objective: ' . $worksheet['Objective'], $contentStyle);

        // Add Task 1: MCQs
        $section->addTextBreak();
        $section->addText('Task 1: Multiple Choice Questions', $taskStyle);
        $section->addTextBreak();

        foreach ($worksheet['MCQs'] as $index => $mcq) {
            $section->addText(($index + 1) . '. ' . $mcq['Question']);
            $section->addListItem('a. ' . $mcq['Choice1'], 0);
            $section->addListItem('b. ' . $mcq['Choice2'], 0);
            $section->addListItem('c. ' . $mcq['Choice3'], 0);
            $section->addTextBreak();
        }

        // Add Task 2: Fill in the Blanks
        $section->addText('Task 2: Fill in the Blanks', $taskStyle);
        $section->addTextBreak();

        $section->addText('Word Bank:');
        foreach ($worksheet['FillInTheBlanks'] as $index => $fib) {
            $section->addListItem($fib['Answer'], 0);
        }
        $section->addTextBreak();

        foreach ($worksheet['FillInTheBlanks'] as $index => $fib) {
            $section->addText(($index + 1) . '. ' . $fib['Statement']);
        }

        $section->addTextBreak();

        // Add Task 3: Critical Thinking
        $section->addText('Task 3: Critical Thinking', $taskStyle);
        $section->addTextBreak();

        if ($worksheet['decide'] == 0) {
            $section->addText('Answer the following questions in complete sentences:');
            foreach ($worksheet['GeneralQuestions'] as $index => $question) {
                $section->addListItem($question, 0);
            }
        } else {
            $section->addText('Label the following statements as: True or False');
            foreach ($worksheet['TrueOrFalse'] as $index => $question) {
                $section->addListItem($question['Statement'] . ' __________', 0);
            }
        }
        $section->addTextBreak();

        // Add Task 4: Assessment
        $section->addText('Task 4: Assessment', $taskStyle);
        $section->addTextBreak();

        $section->addText($worksheet['AssessmentSummary']);
        $section->addTextBreak();

        $section2 = $phpWord->addSection(['breakType' => 'nextPage']);

        // Add Answer Key
        $section2->addText('Answer Key (For Teacher Use Only)', $headingStyle);
        $section2->addTextBreak();

        $section2->addText('MCQs:', $taskStyle);
        $section2->addTextBreak();

        foreach ($worksheet['MCQs'] as $index => $mcq) {
            $section2->addText(($index + 1) . '. ' . $mcq['Correct']);
        }
        $section2->addTextBreak();

        // Fill in the Blanks
        $section2->addText('Fill in the Blanks:', $taskStyle);
        $section2->addTextBreak();

        foreach ($worksheet['FillInTheBlanks'] as $index => $fib) {
            $section2->addText(($index + 1) . '. ' . $fib['Answer']);
        }
        $section2->addTextBreak();

        // True or False
        if ($worksheet['decide'] == 1) {
            $section2->addText('True or False:', $taskStyle);
            $section2->addTextBreak();

            foreach ($worksheet['TrueOrFalse'] as $index => $tof) {
                $section2->addText(($index + 1) . '. ' . $tof['Answer']);
            }
        }

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'PDF');

        $fileName = "worksheet.pdf";

        // Set headers for downloading the file
        header("Content-Disposition: attachment; filename=$fileName");
        header('Content-Type: application/pdf');

        $objWriter->save('php://output');
        exit;
    }
}