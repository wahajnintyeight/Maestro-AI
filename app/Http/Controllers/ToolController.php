<?php

namespace App\Http\Controllers;

use App\Models\History;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orhanerday\OpenAi\OpenAi;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Settings;

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
            $prompt = "In Traditional Spanish from Spain. Create a lesson plan for grade $grade with the title \"$title\" and description \"$description\". Try to follow the \" $curriculum \" curriculum.  Please provide content for the following headings in this format: Heading[number]:Heading|Content. Each heading should be on a new line.\n\nHeading[0]:Goals and Objectives\nHeading[1]:Materials and Resources\nHeading[2]:Warm-up Activity\nHeading[3]:Vocabulary and Grammar\nHeading[4]:Activities and Exercises\nHeading[5]:Assessment\nHeading[6]:Extension Activities\nHeading[7]:Closure Activity";

            $complete = $open_ai->completion([
                'model' => 'text-davinci-003',
                'prompt' => $prompt,
                'temperature' => 0.9,
                'max_tokens' => 1500,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ]);

            // dd($complete);

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
        $request->session()->put('title', $curriculum);
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
            $prompt = "In English. Create a worksheet on the topic of $description for a student of grade $grade, following the $curriculum curriculum. The worksheet should provide comprehensive and challenging questions. Structure the worksheet using the following format: TitleOfComprehension|ObjectiveOfComprehension|[MCQQuestion1|Choice1|Choice2|Choice3]|[MCQQuestion2|Choice1|Choice2|Choice3]|[MCQQuestion3|Choice1|Choice2|Choice3]|[MCQQuestion4|Choice1|Choice2|Choice3]|[MCQQuestion5|Choice1|Choice2|Choice3]|[MCQQuestion6|Choice1|Choice2|Choice3]|[MCQQuestion7|Choice1|Choice2|Choice3]|[MCQQuestion8|Choice1|Choice2|Choice3]|{GeneralQuestion1|GeneralQuestion2|GeneralQuestion3}|(Ask a Question that summarizes the assessment - wrap it in () parenthesis)|<Fill in Blank Statement 1 | Fill In Blank Answer>|<Fill in Blank Statement 2 | Fill In Blank Answer>|<Fill in Blank Statement 3 | Fill In Blank Answer>.";


            // $complete = $open_ai->completion([
            //     'model' => 'text-davinci-003',
            //     'prompt' => $prompt,
            //     'temperature' => 0.9,
            //     'max_tokens' => 1500,
            //     'frequency_penalty' => 0,
            //     'presence_penalty' => 0.6,
            // ]);


            $complete = '{"id":"cmpl-7AZxD0KbAeZgItzEHy462Ma7dVTrL","object":"text_completion","created":1682755843,"model":"text-davinci-003","choices":[{"text":"\n\nDigestive System|To understand the functions and parts of the human digestive system|[What is the structure where food is broken down into molecules?|A. Cells|B. Mouth|C. Stomach]|[What is the organ which stores undigested food?|A. Small intestine|B. Large intestine|C. Esophagus]|[What organ produces bile?|A. Liver|B. Gallbladder|C. Pancreas]|[Which organ produces enzymes?|A. Liver|B. Pancreas|C. Kidney]|[The small intestine absorbs vitamins, proteins and ___________?|A. Minerals|B. Fiber|C. Carbohydrates]|[What is the organ that pumps blood throughout the body?|A. Lungs|B. Liver|C. Heart]|[What organ stores minerals and vitamins?|A. Kidneys|B. Liver|C. Gallbladder]|{What are the different organs involved in the digestive system?|What is the purpose of digestive system?|Explain what happens in the mouth during digestion?}|(How does the digestive system help us get energy from food?)|<Which part of the human body produces saliva | Mouth>|<The first step of digestion occurs in the _________ | Stomach>|<The food enters the small intestines through the ________ | Ileum>.","index":0,"logprobs":null,"finish_reason":"stop"}],"usage":{"prompt_tokens":265,"completion_tokens":302,"total_tokens":567}}';
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

                // If the next element starts with '[', it is still part of the MCQs
                if (
                    $i < count($parts) && $parts[$i][0] === '['
                ) {
                    $mcqs[] = [
                        'Question' => $question,
                        'Choice1' => $choice1,
                        'Choice2' => $choice2,
                        'Choice3' => $choice3,
                    ];
                } else {
                    // Otherwise, we have reached the end of the MCQs, add the last MCQ and break the loop
                    $mcqs[] = [
                        'Question' => $question,
                        'Choice1' => $choice1,
                        'Choice2' => $choice2,
                        'Choice3' => $choice3,
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

            // dd($i, count($parts));

            if (
                $i < count($parts)
            ) {
                $current = trim($parts[$i]);

                // dd($current);
                if ($current[0] === '(') {
                    while ($i < count($parts)) {
                        $current = trim($parts[$i], '().');
                        // Break the loop when encountering '<'
                        if ($current[0] === '<') {
                            break;
                        }

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
            }


            // dd($i);

            // Build the final worksheet array
            $worksheet = [
                'Title' => $title,
                'Objective' => $objective,
                'MCQs' => $mcqs,
                'GeneralQuestions' => $general_questions,
                'AssessmentSummary' => $assessment_summary,
                'FillInTheBlanks' => $fill_in_the_blanks, // Add the FillInTheBlanks array to the final worksheet
            ];

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
            $prompt = "In Traditional Spanish from Spain. Create a detailed concept explanation for a student aged $age studying the subject '$subject' and topic '$topic'. Try to follow the '$curriculum' curriculum. Explain each concept in depth, using simple language and examples to make it easy for the student to understand. Ensure that the explanation is comprehensive and covers all essential aspects of the topic. Please provide content in this format: TitleOfConcept|BodyOfConceptExplanation|ExampleOfConceptParagraph|ConciseSummaryOfExplanation. The explanation should be age-appropriate and easy to understand.\n\nFor exaompe - Here's how to structure it for a Noun & Pronoun Topic: Nouns & Pronouns|Long Paragraph explaining Nouns & Pronouns|Noun & Pronoun Example|Summary of the Concept";
            $complete = $open_ai->completion([
                'model' => 'text-davinci-003',
                'prompt' => $prompt,
                'temperature' => 0.9,
                'max_tokens' => 1000,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ]);

            // dd($complete);

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
        $description = $request->session()->get('description', '');

        // Clear session data
        $request->session()->forget(['questions', 'grade', 'questionNo', 'description']);

        return view('dashboard.teacher.comprehension-generator', compact('grade', 'questionNo', 'questions', 'description'));
    }
    public function generateComprehensionQuestions(Request $request)
    {


        $open_ai_key = getenv('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $grade = $request->input('grade');
        $questionNo = $request->input('questionNo');
        $description = $request->input('description');

        try {
            $prompt = "In English. Create " . $questionNo . " questions for this given comprehension: " . $description . " . \nPlease provide questions in this format: Question[number]:Question|{Option1,Option2,Option3,Correct}. Each question should be on a new line. \nThe questions should be relevant, and the grade level for the questions should be " . $grade . ". For example - Question[0]:What is the color of the car?|{Red,Yellow,Green,Red}.";

            $complete = $open_ai->completion([
                'model' => 'text-davinci-003',
                'prompt' => $prompt,
                'temperature' => 0.9,
                'max_tokens' => 500,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ]);


            $completeDecoded = json_decode($complete);


            if (is_object($completeDecoded) && isset($completeDecoded->choices[0]->text)) {
                $responseText = $completeDecoded->choices[0]->text;
                $rawHeadings = explode("\n", trim($responseText));

                $questions = array();

                // $rawHeadings = array(
                //     0 => "Question[0]:What did Rosie feel like when she was on Papa's shoulder?|{Princess,Giant,King,Princess}. ",
                //     1 => "Question[1]:What did Papa tell Rosie the orange bumpy star was?|{Starfish,Lighthouse,Jellyfish,Starfish}."
                // );
                foreach ($rawHeadings as $headingContent) {
                    if (strpos($headingContent, "|") !== false) {
                        list($headingNumberAndHeading, $content) = explode("|", $headingContent);
                        list(, $heading) = explode(":", $headingNumberAndHeading);

                        $options = array_map('trim', explode(',', str_replace(array('{', '}'), '', $content)));

                        $questions[] = (object) [
                            'Title' => trim(substr($heading, strpos($heading, ":") + 0)),
                            'Option1' => $options[0],
                            'Option2' => $options[1],
                            'Option3' => $options[2],
                            'Correct' => $options[3]
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

        if ($this->saveHistory("Comprehension Question Generator", $questions, auth()->id())) {
            // dd($questions);
            // Store the lesson data in the session and redirect to the showLessonPlanner method
            $request->session()->put('questions', $questions);
            $request->session()->put('grade', $grade);
            $request->session()->put('ques', $grade);
            $request->session()->put('description', $description);
            return redirect()->action([ToolController::class, 'viewForm']);
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
        $section->addText('Answer the following questions in complete sentences:');
        foreach ($worksheet['GeneralQuestions'] as $index => $question) {
            $section->addListItem($question, 0);
        }
        $section->addTextBreak();

        // Add Task 4: Assessment
        $section->addText('Task 4: Assessment', $taskStyle);
        $cleanAssessmentSummary = $this->removeInvalidXmlChars($worksheet['AssessmentSummary']);
        $section->addText($cleanAssessmentSummary);

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
        $headingStyle = ['size' => 16, 'bold' => true];
        $taskStyle = ['size' => 14, 'bold' => true];
        $objectiveStyle = ['size' => 14];
        $contentStyle = ['size' => 12];

        $section = $phpWord->addSection();

        // Add title
        $section->addText($worksheet['Title'], $headingStyle);


        // Add objective
        $section->addText('Objective', $objectiveStyle);
        $section->addText($worksheet['Objective'], $contentStyle);

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
        $section->addText('Answer the following questions in complete sentences:');
        foreach ($worksheet['GeneralQuestions'] as $index => $question) {
            $section->addListItem($question, 0);
        }
        $section->addTextBreak();

        // Add Task 4: Assessment
        $section->addText('Task 4: Assessment', $taskStyle);
        $section->addText($worksheet['AssessmentSummary']);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'PDF');

        $fileName = "worksheet.pdf";

        // Set headers for downloading the file
        header("Content-Disposition: attachment; filename=$fileName");
        header('Content-Type: application/pdf');

        $objWriter->save('php://output');
        exit;
    }
}
