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
            $prompt = "En español tradicional de España. Cree un plan de lección para el grado $grade con el título \"$title\" y la descripción \"$description\". Trate de seguir el plan de estudios de \"$curriculum\". Proporcione contenido para los siguientes encabezados en este formato: Encabezado[número]:Encabezado|Contenido. Cada título debe estar en una nueva línea.\n\nTítulo[0]:Metas y objetivos\nTítulo[1]:Materiales y recursos\nTítulo[2]:Actividad de preparación\nTítulo[3]:Vocabulario y gramática\nTítulo [ 4]:Actividades y ejercicios\nTítulo[5]:Evaluación\nTítulo[6]:Actividades de ampliación\nTítulo[7]:Actividad de cierre";

            // $complete = $open_ai->completion([
            //     'model' => 'text-davinci-003',
            //     'prompt' => $prompt,
            //     'temperature' => 0.9,
            //     'max_tokens' => 1500,
            //     'frequency_penalty' => 0,
            //     'presence_penalty' => 0.6,
            // ]);

            $complete = '{"id":"cmpl-7DERl9gzRVNnxATGvr6Cn2iu7BbHP","object":"text_completion","created":1683388153,"model":"text-davinci-003","choices":[{"text":"\n\nTítulo[0]:Metas y objetivos|Los estudiantes podrán desarrollar habilidades de comunicación al expresarse con fluidez en español, mediante la escritura, el discurso y los proyectos colaborativos.\n\nTítulo[1]:Materiales y recursos | Libro de texto, computadora, materiales para tareas colaborativas, una variedad de libros y textos, imágenes (imágenes, dibujos, diseños, etc.), sonidos y videos.\n\nTítulo[2]:Actividad de preparación | Seleccionar un tema de interés para los estudiantes relacionado con temas generales de la clase. Establecer expectativas y discutir el proceso para desarrollar habilidades de comunicación.\n\nTítulo [3]:Vocabulario y gramática |Los estudiantes aprenderán diversas palabras y estructuras gramaticales relacionadas con el tema seleccionado. Práctica de oratoria usando el vocabulario y gramática aprendido.\n\nTítulo [4]:Actividades y ejercicios | Los estudiantes participarán en actividades colaborativas para ayudarles a desarrollar habilidades de comunicación. Estas actividades pueden incluir escritura creativa, diálogos, debates, representaciones teatrales y otros proyectos interactivos.\n\nTítulo[5]:Evaluación | El profesor evaluará la fluidez, precisión y uso adecuado del vocabulario y la gramática tanto en los ejercicios como en las actividades colaborativas y los proyectos.\n\nTítulo[6]:Actividades de ampliación | Los estudiantes aprenderán más sobre el tema seleccionado y formularán sus propias ideas y opiniones sobre el mismo. Los estudiantes tendrán la oportunidad de profundizar su conocimiento a través de lecturas y debates.\n\nTítulo[7]:Actividad de cierre | Los estudiantes presentarán sus proyectos colaborativos al resto de la clase. Asimismo, se les dará la oportunidad de discutir sus logros individuales y colaborativos.","index":0,"logprobs":null,"finish_reason":"stop"}],"usage":{"prompt_tokens":287,"completion_tokens":637,"total_tokens":924}}';

            $completeDecoded = json_decode($complete);

            if (is_object($completeDecoded) && isset($completeDecoded->choices[0]->text)) {
                $responseText = $completeDecoded->choices[0]->text;
                $rawHeadings = explode("\n", trim($responseText));

                foreach ($rawHeadings as $headingContent) {
                    if (strpos($headingContent, "|") !== false) {
                        list($headingNumberAndHeading, $content) = explode("|", $headingContent);
                        list(, $heading) = explode(":", $headingNumberAndHeading);

                        $lesson[] = (object) [
                            'Heading' => trim($heading),
                            'Content' => trim($content),
                        ];
                    }
                }
            } else {
                // Handle the case when the response is not as expected (e.g., missing the expected properties)
                throw new Exception('Unexpected response from OpenAI API.');
            }
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
            $prompt = "In Traditional Spanish from Spain. Create a presentation for grade $grade with the objective \"$description\". The presentation should follow the \"$curriculum\" curriculum and consist of $num_of_slides slides. Provide content for each slide in this format: TitleOfPresentationHere|ObjectiveOfPresentationHere|[SlideHeading1Here|SlideContent1Here|QuestionStatement1RegardingSlide1Here|QuestionStatement2RegardingSlide1Here|QuestionStatement3RegardingSlide1Here]|[SlideHeading2Here|SlideContent2Here|QuestionStatement1RegardingSlide2Here|QuestionStatement2RegardingSlide2Here|QuestionStatement3RegardingSlide2Here]|. Generate this for " . $num_of_slides . " slides. For Questions in each slide - only give Question Statements. Do not proceed to give answer to the questions.";

            $complete = $open_ai->completion([
                'model' => 'text-davinci-003',
                'prompt' => $prompt,
                'temperature' => 0.9,
                'max_tokens' => 1500,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ]);

            // $complete = '{"id":"cmpl-7Afqt6Yp1Ax56Yq2BY0qVmtG9XiIK","object":"text_completion","created":1682778515,"model":"text-davinci-003","choices":[{"text":",\n\nThe Digestive System|Objective: To understand the anatomy and physiology of the digestive system as outlined in the Spanish National Curriculum/LOMLOE|[Anatomy of the Digestive System|The digestive system is composed of the gastrointestinal (GI) tract, which consists of the mouth, esophagus, stomach, small intestine, large intestine and rectum, as well as several accessory organs such as the liver, gallbladder and pancreas. The GI tract turns food into the nutrients and energy needed for human life.|What is the first part of the digestive system?|What structures make up the gastrointestinal tract?|What do the accessory organs do?]|[Digestion Processes|Digestion begins in the mouth with chewing and saliva then moves through the esophagus to the stomach where acid helps breakdown food. It continues to the small intestine where enzymes and bile help break down proteins, carbs and fats. Vitamins and minerals are absorbed during this process. Lastly, undigested food moves to the large intestine and wastes are expelled through the rectum. |What processes occur in the mouth?|What is the role of the acid in the stomach?|Where do vitamins and minerals get absorbed? ]|[Nutrition and Digestion|In order for the body to utilize nutrients, they must be broken down into smaller molecules by the digestive system. This process is known as digestion which helps break down foods into their components so they can be used by the body. Good nutrition requires a balance of healthy foods and a variety of nutrients needed for growth, development, and energy. |What is the process of digestion?|What is the role of digestion in nutrition?|What is the goal of good nutrition? ]|[The Role of Digestion in Homeostasis|Homeostasis is the ability to maintain a consistent internal environment for optimal health. The digestive system plays an essential role in homeostasis by extracting essential nutrients from food and eliminating toxins from the body, thereby providing the energy and materials necessary for the body to function properly. |What is homeostasis?|What is the role of the digestive system in homeostasis?|What materials are necessary for the body to function optimally? ]|","index":0,"logprobs":null,"finish_reason":"stop"}],"usage":{"prompt_tokens":139,"completion_tokens":462,"total_tokens":601}}';

            // dd($complete);

            $complete_array = json_decode($complete, true);
            $text = trim($complete_array['choices'][0]['text']);
            $parts = explode('|', $text);

            $slides = [
                'Title' => trim($parts[0]),
                'Objective' => $parts[1],
                'Slides' => [],
            ];

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
            $prompt = "In Traditional Spanish from Spain. Create a worksheet on the topic of $description for a student of grade $grade, following the $curriculum curriculum. The worksheet should provide comprehensive and challenging questions. Structure the worksheet using the following format: TitleOfComprehension|ObjectiveOfComprehension|[MCQQuestion1|Choice1|Choice2|Choice3|CorrectChoice]|[MCQQuestion2|Choice1|Choice2|Choice3|CorrectChoice]|[MCQQuestion3|Choice1|Choice2|Choice3|CorrectChoice]|[MCQQuestion4|Choice1|Choice2|Choice3|CorrectChoice]|[MCQQuestion5|Choice1|Choice2|Choice3|CorrectChoice]|[MCQQuestion6|Choice1|Choice2|Choice3|CorrectChoice]|[MCQQuestion7|Choice1|Choice2|Choice3|CorrectChoice]|[MCQQuestion8|Choice1|Choice2|Choice3|CorrectChoice]|{GeneralQuestion1|GeneralQuestion2|GeneralQuestion3}|(Ask a Question that summarizes the assessment - wrap it in () parenthesis)|<Fill in Blank Statement 1 - add appropriate blanks i.e _____ | Fill In Blank Answer>|<Fill in Blank Statement 2 | Fill In Blank Answer>|<Fill in Blank Statement 3 | Fill In Blank Answer>|[Statement1|TrueOrFalse]|[Statement2|TrueOrFalse]|[Statement3|TrueOrFalse].";

            // $complete = $open_ai->completion([
            //     'model' => 'text-davinci-003',
            //     'prompt' => $prompt,
            //     'temperature' => 0.9,
            //     'max_tokens' => 1500,
            //     'frequency_penalty' => 0,
            //     'presence_penalty' => 0.6,
            // ]);

            // dd($complete);
            //TODO: work on this
            $complete = '{"id":"cmpl-7DFjIiE4PYJ4lM9tmHekhP467kw8Q","object":"text_completion","created":1683393084,"model":"text-davinci-003","choices":[{"text":"\n\nComprensión sobre Habilidades de Estudio, Pensamiento Crítico y Administración del Tiempo|Evaluar el conocimiento de estudiantes de 8º grado sobre habilidades de estudio, pensamiento crítico y administración del tiempo, siguiendo el currículum LOMLOE|[¿Cuál de las siguientes afirmaciones no representa una habilidad de estudio?|A) Prestar atención durante el aprendizajeB) Pasar la mayor parte del tiempo trabajandoC) Procesar y evaluar informaciónD) Descansar entre clases|B]|[¿Cuál es la característica principal del pensamiento crítico?|A) La rapidez de procesamientoB) El análisis de informaciónC) La creatividadD) La toma de decisiones rápidas|B]|[¿Qué aspecto clave debe abordar una persona para mejorar su administración del tiempo?|A) Priorizar sus tareasB) Ser perseveranteC) Descansar regularmenteD) Memorizar información|A]|[¿Qué herramienta se puede usar para mejorar la administración del tiempo?|A) Un planificadorB) Una grabadoraC) Una bicicletaD) Una lista de tareas|A]|[¿Cuál de los siguientes no es un consejo para mejorar sus habilidades de estudio?|A) Considere todas sus opciones antes de tomar una decisiónB)Pase tiempo libre con amigosC)Descanse adecuadamenteD)Levante la mano si tiene preguntas|B]|[¿Cuál de las siguientes afirmaciones describe mejor el pensamiento crítico?|A)Es el proceso de análisis de información para tomar decisionesB)Es la capacidad de hacer muchas cosas a la vezC)Es la habilidad de cuestionar informaciónD) Es la capacidad de triunfar en situaciones difíciles|A]|[¿Cuál es una forma efectiva de mejorar la administración del tiempo?|A) Aprender a decir noB)Trabajar durante el fin de semanaC)Evitar planificar sus objetivosD)Mantener un horario estricto|A]|{¿Qué consejos puede ofrecer un maestro o tutor para ayudar a los estudiantes a mejorar sus habilidades de estudio?|¿Qué beneficios surgen de desarrollar el pensamiento crítico?|¿Cómo puede una persona equilibrar el aprendizaje, el trabajo y diversas actividades sociales, administrando su tiempo?}|(¿Cómo puede un estudiante mejorar su pensamiento crítico, habilidades de estudio y administración del tiempo?)|<Para mejorar estas habilidades, un estudiante debe ____ practicar _____, _______ planificar, _________ evaluar y __________ innovar|práctica, planificar, evaluar, innovar>|<El pensamiento crítico puede mejorar el __________ y el __________ de un estudiante|aprendizaje, rendimiento>|<La administración del tiempo consiste en ___________ y _________ sus tareas y objetivos|priorizar, planificar>|[La administración del tiempo es una habilidad que se puede aprender|Falso]|[El pensamiento crítico es un proceso intuitivo|Falso]|[Uno de los consejos para mejorar la administración del tiempo es descansar adecuadamente|Falso].","index":0,"logprobs":null,"finish_reason":"stop"}],"usage":{"prompt_tokens":335,"completion_tokens":1063,"total_tokens":1398}}';
            // $complete = '{"id":"cmpl-7AzLVBVb7FBDgsxQpQmJfA79TE2U0","object":"text_completion","created":1682853449,"model":"text-davinci-003","choices":[{"text":" \n\nComprehension on Pakistani Politics |The objective of this worksheet is to explore the basics of politics in Pakistan|[Which is the capital of Pakistan?|Beijing|Islamabad|Karachi|Islamabad]|[What is the official language spoken in Pakistan?|English|Hindi|Urdu|Urdu]|[Who is Pakistan’s current Prime Minister?|Imran Khan|Raja Pervez Ashraf|Nawaz Sharif|Imran Khan]|[Which article of the 1973 Constitution of Pakistan talks about civil liberties?|Article 2|Article 11|Article 19|Article 19]|[The president of Pakistan is also a ____ ?|Politician|Military Officer|Judge|Politician]|[How many provinces are there in Pakistan?|Four|Six|Eight|Eight]|[Who was the first governor-general of Pakistan?|Khawaja Nazimuddin|M.A. Jinnah|Sir Zafarullah Khan|M.A. Jinnah]|{Describe the three branches of government in Pakistan|What are the electoral rules for selecting the president of Pakistan?|How does the Prime Minister of Pakistan exercise their powers?}|(How does the government in Pakistan function?)|<Pakistan is made up of ______ provinces. | Eight>|<The Constitution of Pakistan was written in _____ . |1973>|<The President of Pakistan is elected by _____ . |electoral college>|[Pakistan is a federal republic|True]|[The President of Pakistan has control over the military|False]|[The Prime Minister of Pakistan is elected by the National Assembly|True].","index":0,"logprobs":null,"finish_reason":"stop"}],"usage":{"prompt_tokens":322,"completion_tokens":348,"total_tokens":670}}';
            // dd($complete);


            $complete_array = json_decode($complete, true);
            $text = trim($complete_array['choices'][0]['text']);

            // Split the text using '|' as the delimiter
            $parts = explode('|', $text);

            // dd($parts);

            // Extract the Title and Objective
            $title = trim($parts[0]);
            $objective = trim($parts[1]);

            // Extract the MCQs and store them in an array
            $mcqs = [];
            $i = 2;
            while ($i < count($parts) && $parts[$i] !== '{') {
                $question = trim(str_replace('[', '', $parts[$i]));
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

            // dd($i, $parts);


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

            // dd($i, count($parts));

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



            // dd($parts);

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

            // dd($worksheet);
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
            // $prompt = "In Traditional Spanish from Spain. Create a detailed concept explanation for a student aged $age studying the subject '$subject' and topic '$topic'. Try to follow the '$curriculum' curriculum. Explain each concept in depth, using simple language and examples to make it easy for the student to understand. Ensure that the explanation is comprehensive and covers all essential aspects of the topic. Please provide content in this format: TitleOfConcept|BodyOfConceptExplanation|ExampleOfConceptParagraph|ConciseSummaryOfExplanation. The explanation should be age-appropriate and easy to understand.\n\nFor exaompe - Here's how to structure it for a Noun & Pronoun Topic: Nouns & Pronouns|Long Paragraph explaining Nouns & Pronouns|Noun & Pronoun Example|Summary of the Concept";

            $prompt = "En español tradicional de España. Cree una explicación detallada del concepto para un estudiante de $age que estudie la materia '$subject' y el tema '$topic'. Trate de seguir el plan de estudios '$curriculum'. Explique cada concepto en profundidad, utilizando un lenguaje sencillo y ejemplos para que sea fácil de entender para el estudiante. Asegúrese de que la explicación sea completa y cubra todos los aspectos esenciales del tema. Proporcione contenido en este formato: TitleOfConcept|BodyOfConceptExplanation|ExampleOfConceptParagraph|ConciseSummaryOfExplanation. La explicación debe ser apropiada para la edad y fácil de entender.\n\nPor ejemplo, así es como se estructura para un tema de sustantivo y pronombre: sustantivos y pronombres|párrafo largo que explica sustantivos y pronombres|ejemplo de sustantivo y pronombre|resumen del concepto";

            $complete = $open_ai->completion([
                'model' => 'text-davinci-003',
                'prompt' => $prompt,
                'temperature' => 0.9,
                'max_tokens' => 1000,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ]);

            // dd($complete);

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
            } else {
                $questionNo = 10;
                $prompt = "In Traditional Spanish from Spain. Create 10 questions for this given comprehension: " . $description . ". Two questions should be Vocabulary based, two questions should be Inference based, two should be from Evaluation, two should be from Author Choice, two should be from 'Compare, Contrast and Comment', two should be from 'Literal Retrieval', two should be from 'Summary and Prediction', two should be from 'Analysis of Language and Structure'. \nPlease provide well-written questions in this format: [VocabularyQuestionHere|AnswerStatement1]|[VocabularyQuestionHere|AnswerStatement2]|
                [InferenceQuestionHere|Statement1]|InferenceQuestionHere|AnswerStatement2]|[EvaluationQuestionHere|AnswerStatement1]|EvaluationQuestionHere|AnswerStatement2]|[AuthorChoiceQuestionHere|AnswerStatement1]|AuthorChoiceQuestionHere|AnswerStatement2]|[ContrastQuestionHere|AnswerStatement1]|ContrastQuestionHere|AnswerStatement2]. Each question should be on a new line. \nThe questions should be great depth,relevant, long, detailed, and the grade level for the questions should be " . $grade . ".";
            }
            // $complete = $open_ai->chat([
            //     'model' => 'gpt-3.5-turbo',
            //     'messages' => [
            //         [
            //             'role' => 'system',
            //             'content' => 'You are an expert at generating detailed comprehension questions. You are a teacher who is creating comprehension questions for a reading passage. Please provide well-written questions in this format: [QuestionStatement1|AnswerStatement1]|[QuestionStatement2|AnswerStatement2]|[QuestionStatement3|AnswerStatement3]|[QuestionStatement4|AnswerStatement4]|[QuestionStatement5|AnswerStatement5]. For example: [What is the main idea of the passage?|The main idea of the passage is that the author is trying to explain the importance of the topic.]'
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

            $complete = '{"id":"chatcmpl-7DSEAZWgFEVIkqLYNnXyAZWgYXMve","object":"chat.completion","created":1683441126,"model":"gpt-3.5-turbo-0301","usage":{"prompt_tokens":569,"completion_tokens":781,"total_tokens":1350},"choices":[{"message":{"role":"assistant","content":"[Vocabulary Question 1: What does \"fritter away\" mean in the passage?|The phrase \"fritter away\" means to waste time or money on trivial matters.]\n[Vocabulary Question 2: What does \"conjugality\" mean in the passage?| The word \"conjugality\" refers to the state of being married or in a marital relationship.]\n\n[Inference Question 1: Why does the author state that Oran is a town without intimations?|The author implies that the people of Oran are so consumed by modernity and contemporary habits that they lack any knowledge or indication of something different.]\n[Inference Question 2: What does the author mean by \"people have to love one another without knowing much about it\"?| The statement implies that due to a lack of time and limited thinking, people in Oran engage in romantic or sexual relationships without fully understanding the depth of their feelings or desires.]\n\n[Evaluation Question 1: Is the author presenting a positive or negative view of the way people live and love in Oran?|The author presents a negative view on the manner of loving in Oran.]\n[Evaluation Question 2: In your opinion, is the author\'s description of Oran and its inhabitants accurate? Why or why not? Use evidence from the text to support your response.|Answer will vary, but should provide specific examples from the text to support the opinion.]\n\n[Author Choice Question 1: Why do you think the author chose to highlight the lack of intimacy and knowledge in relationships among the people of Oran?|Answer will vary, but could suggest that the author is making a commentary on the effects of modernization and contemporary society on personal relationships.]\n[Author Choice Question 2: How does the author\'s use of language contribute to the negative portrayal of life in Oran?|The author\'s use of words like \"consume,\" \"rapidly,\" and \"lack of time and thinking\" create a sense of emptiness and superficiality in the relationships described.]\n\n[Contrast Question 1: How does the way people live and love in Oran compare to other towns and countries where people have an \"inkling of something different\"?|The people in Oran are described as lacking any indication of anything different, while people in other towns and countries may have brief glimpses of alternative ways of living.]\n[Contrast Question 2: How does the author\'s tone change when discussing the habits of the people in Oran versus those in other towns and countries?|The author\'s tone is more negative and critical when describing the habits of the people in Oran, while there is a sense of hopefulness in the description of people elsewhere having an \"intimation\" of something different.]\n\n[Literal Retrieval Question 1: What is common among all contemporary people according to the passage?|According to the passage, it is common to see people working all day and then wasting their time on trivial matters like card games and small talk.]\n[Literal Retrieval Question 2: What is the range of types of loving relationships described in Oran?|The two extremes described are quickly consuming each other in \"the act of love\" or settling into a mild habit of conjugality.]\n\n[Summary and Prediction Question 1: Based on the passage, what do you think the author believes is missing from the way people live and love in Oran?|The author suggests that people in Oran lack intimacy, knowledge, and a deeper understanding of relationships.]\n[Summary and Prediction Question 2: What do you predict will happen to the people of Oran if they continue to live and love in the manner described in the passage?|Answer will vary, but could suggest that their relationships will continue to lack depth and meaning, leading to a sense of emptiness and dissatisfaction.]"},"finish_reason":"stop","index":0}]}';

            // $complete = '{"id":"chatcmpl-7DRuo8toCkb4C9DMacrpkUI1lUdbo","object":"chat.completion","created":1683439926,"model":"gpt-3.5-turbo-0301","usage":{"prompt_tokens":443,"completion_tokens":413,"total_tokens":856},"choices":[{"message":{"role":"assistant","content":"[QuestionStatement1|AnswerStatement1] \r\nWhat do the unusual events described in the chronicle refer to and where did they occur? \r\nAnswer: The unusual events referred to in the chronicle occurred in 194- at Oran.\r\n\r\n[QuestionStatement2|AnswerStatement2] \r\nWhat is the description of the town of Oran, and how does it differ from other business centers in the world?\r\nAnswer: Oran is a large French port on the Algerian coast, and it has a smug, placid air. It is different from other business centers in the world because it is entirely negative, with no pigeons, trees, or gardens, and you never hear the rustle of leaves or the beat of wings.\r\n\r\n[QuestionStatement3|AnswerStatement3] \r\nHow are seasons discriminated in the town of Oran, and what tells people about spring\'s coming?\r\nAnswer: Seasons are discriminated only in the sky. People feel the air change, and baskets of flowers brought in from the suburbs by peddlers tell them about spring\'s coming.\r\n\r\n[QuestionStatement4|AnswerStatement4]\r\nWhat is the meaning of the phrase \"a spring cried in the marketplaces,\" and how does it relate to the passage?\r\nAnswer: The phrase means that people announce the coming of spring loudly, as if it were something to be sold. It relates to the passage because it shows how plain and ordinary life is in Oran, and how even the coming of spring is not a significant event there.\r\n\r\n[QuestionStatement5|AnswerStatement5]\r\nWhat is the significance of using \'negative words\' to describe the town of Oran, and how does this affect the overall tone of the passage?\r\nAnswer: The use of negative words to describe Oran affects the overall tone of the passage by creating a sense of apathy and indifference toward the town. The town is described as thoroughly negative, and the use of words like \"ugly\" and \"smug\" contribute to the passive, unremarkable tone of the passage."},"finish_reason":"stop","index":0}]}';

            // $complete = '{"id":"cmpl-7BdsUXFA6sm1bwTJoAtvijpnZJ2LW","object":"text_completion","created":1683009254,"model":"text-davinci-003","choices":[{"text":"\n\n[What does the term spur of the moment mean in this passage?|an impulsive action taken without due consideration]|[What might the phrase no more than that refer to?|Dr. Rieuxs initial reaction to the presence of the dead rat]|[How did M. Michel react when Dr. Rieux told him about the dead rat?|He was genuinely outraged]|[What does M. Michel’s insistence that there werent no rats in the building suggest?|That someone had brought it from outside]|[Evaluate how Dr. Rieux initially reacted to finding the dead rat.|He did not give it much thought and continued on his way downstairs]|[Evaluate how M. Michel reacts to the news of the dead rat.|He is shocked and determined to find out who brought the rat into the building]|[What is the authors choice in describing the reaction of Dr. Rieux and M. Michel to the news of the dead rat?|The author emphasizes the contrast between their reactions]|[Compare and contrast the initial reactions of Dr. Rieux and M. Michel to the news of the dead rat.|Dr. Rieux did not give the dead rat much thought while M. Michel was genuinely outraged]|[What is the literal meaning of the phrase There werent no rats here?|There were no rats in the building]|[Summarize what M. Michel believes about the dead rat.|M. Michel believes that someone must have brought it from outside]|[What evidence in the passage suggests that someone may have been playing a joke?|M. Michels implication that someone had brought the dead rat from outside]|[Analyze how the use of repetition in the passage affects the readers understanding of M. Michels reaction.|The repetition emphasizes M. Michels conviction that the rat must have been brought from outside, suggesting he found it suspicious].","index":0,"logprobs":null,"finish_reason":"stop"}],"usage":{"prompt_tokens":492,"completion_tokens":417,"total_tokens":909}}';

            $complete_array = json_decode($complete, true);
            // dd($complete_array);
            $text = trim($complete_array['choices'][0]['message']['content']);
            $parts = explode('|', $text);
            dd($parts);
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