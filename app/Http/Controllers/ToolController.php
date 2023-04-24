<?php

namespace App\Http\Controllers;

use App\Models\History;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orhanerday\OpenAi\OpenAi;
use PhpOffice\PhpWord\PhpWord;

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

    public function generateLessonPlanner(Request $request)
    {
        $open_ai_key = getenv('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $grade = $request->input('grade');
        $title = $request->input('title');
        $description = $request->input('description');

        // dd($grade, $title, $description);
        $lesson = [];

        try {
            $prompt = "In Spanish. Create a lesson plan for grade $grade with the title \"$title\" and description \"$description\". Please provide content for the following headings in this format: Heading[number]:Heading|Content. Each heading should be on a new line.\n\nHeading[0]:Goals and Objectives\nHeading[1]:Materials and Resources\nHeading[2]:Warm-up Activity\nHeading[3]:Vocabulary and Grammar\nHeading[4]:Activities and Exercises\nHeading[5]:Assessment\nHeading[6]:Extension Activities\nHeading[7]:Closure Activity";

            $complete = $open_ai->completion([
                'model' => 'text-davinci-003',
                'prompt' => $prompt,
                'temperature' => 0.9,
                'max_tokens' => 1000,
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

        // $rawHeadings = array(
        //     0 => "Question[0]:What did Rosie feel like when she was on Papa's shoulder?|{Princess,Giant,King,Princess}. ",
        //     1 => "Question[1]:What did Papa tell Rosie the orange bumpy star was?|{Starfish,Lighthouse,Jellyfish,Starfish}."
        // );


        // $questions = array();

        // foreach ($rawHeadings as $headingContent) {
        //     if (strpos($headingContent, "|") !== false) {
        //         list($headingNumberAndHeading, $content) = explode("|", $headingContent);
        //         list(, $heading) = explode(":", $headingNumberAndHeading);

        //         $options = array_map('trim', explode(',', str_replace(array('{', '}'), '', $content)));

        //         $questions[] = (object) [
        //             'Title' => trim(substr($heading, strpos($heading, ":") + 0)),
        //             'Option1' => $options[0],
        //             'Option2' => $options[1],
        //             'Option3' => $options[2],
        //             'Correct' => $options[3]
        //         ];
        //     }
        // }

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
            $section->addText($item['Content']);
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
}