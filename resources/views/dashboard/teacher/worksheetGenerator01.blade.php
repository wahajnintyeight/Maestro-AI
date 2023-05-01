@extends('dashboard.teacher.layout')
@section('content')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Worksheet Generator
    </h2>
</div>
<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    <div class="col-span-12 lg:col-span-4 2xl:col-span-4 flex lg:block flex-col-reverse">
        <div class="intro-y box mt-5">
            <form method="POST" action="{{ route('teacher.generateWorksheet') }}">
                @csrf
                <div class="relative flex items-center  p-5">
                    <div class="w-12 h-12 image-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="documents">
                            <path fill="#275e87" d="M437 507H75L5 265h70z"></path>
                            <path fill="#69bdfb" d="M75 5h300v420H75z"></path>
                            <path fill="#9cd3fc" d="M106 46h300v420H106z"></path>
                            <path fill="#cde9fe" d="M437 507V149l-62-62H137v420z"></path>
                            <path fill="#69bdfb" d="M375 149h62l-62-62z"></path>
                            <path fill="#3279af" d="M199 186h176v10H199zM199 227h176v10H199zM199 269h176v10H199z">
                            </path>
                            <path fill="#3279af" d="m507 265-70 242H75l70-192h210l20-50z"></path>
                            <path fill="#275e87" d="M467 265s-65 183-315 242h285l70-242h-40z"></path>
                        </svg>
                    </div>
                    <div class="ml-6 mr-auto">
                        <div class="font-medium text-base">Worksheet Generator</div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div>
                        <label for="curriculum" class="form-label">Currículo</label>
                        <select id="curriculum" name="curriculum" class="form-select">
                            <option value="Spanish National Curriculum/LOMLOE">Spanish National Curriculum/LOMLOE
                            </option>
                            <option value="Chile">Chile: Curriculum Nacional Base</option>
                            <option value="Argentina">Argentina: Diseño Curricular Nacional</option>
                            <option value="Peru">Peru: Curriculum Nacional</option>
                            <option value="Mexico">Mexico: Sistema Educativo Nacional</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="grade-level" class="form-label">Nivel de grado</label>
                        <select id="grade-level" name="grade" class="form-select">
                            <option value="Kindergarten" <?php if ($grade=='Kindergarten' ) { echo 'selected' ; } ?>
                                >Kindergarten</option>
                            <option value="1st Grade" <?php if ($grade=='1st Grade' ) { echo 'selected' ; } ?>>1st Grade
                            </option>
                            <option value="2nd Grade" <?php if ($grade=='2nd Grade' ) { echo 'selected' ; } ?>>2nd Grade
                            </option>
                            <option value="3rd Grade" <?php if ($grade=='3rd Grade' ) { echo 'selected' ; } ?>>3rd Grade
                            </option>
                            <option value="4th Grade" <?php if ($grade=='4th Grade' ) { echo 'selected' ; } ?>>4th Grade
                            </option>
                            <option value="5th Grade" <?php if ($grade=='5th Grade' ) { echo 'selected' ; } ?>>5th Grade
                            </option>
                            <option value="6th Grade" <?php if ($grade=='6th Grade' ) { echo 'selected' ; } ?>>6th Grade
                            </option>
                            <option value="7th Grade" <?php if ($grade=='7th Grade' ) { echo 'selected' ; } ?>>7th Grade
                            </option>
                            <option value="8th Grade" <?php if ($grade=='8th Grade' ) { echo 'selected' ; } ?>>8th Grade
                            </option>
                            <option value="9th Grade" <?php if ($grade=='9th Grade' ) { echo 'selected' ; } ?>>9th Grade
                            </option>
                            <option value="10th Grade" <?php if ($grade=='10th Grade' ) { echo 'selected' ; } ?>>10th
                                Grade</option>
                            <option value="11th Grade" <?php if ($grade=='11th Grade' ) { echo 'selected' ; } ?>>11th
                                Grade</option>
                            <option value="12th Grade" <?php if ($grade=='12th Grade' ) { echo 'selected' ; } ?>>12th
                                Grade</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="lesson-description" class="form-label">Learning Objectives</label>
                        <!-- Textarea for Lesson Description -->
                        <textarea id="lesson-description"
                            placeholder="Intente algo como esto: escriba un plan de lección sobre cómo se usa la música en las tribus nativas americanas"
                            name="description"
                            class="form-control h-40"><?php echo htmlspecialchars($description); ?></textarea>
                    </div>
                </div>
                <div class="p-5 border-t justify-center mx-auto border-slate-200/60 dark:border-darkmode-400 flex">

                    <button type="submit" id="generate-btn" class="btn btn-primary px-2 py-2">
                        ✨Generate Worksheet
                        <span id="spinner" class="hidden">
                            <svg width="25" viewBox="-2 -2 42 42" xmlns="http://www.w3.org/2000/svg" stroke="white"
                                class="w-4 h-4 ml-2">
                                <g fill="none" fill-rule="evenodd">
                                    <g transform="translate(1 1)" stroke-width="4">
                                        <circle stroke-opacity=".5" cx="18" cy="18" r="18">
                                        </circle>
                                        <path d="M36 18c0-9.94-8.06-18-18-18">
                                            <animateTransform attributeName="transform" type="rotate" from="0 18 18"
                                                to="360 18 18" dur="1s" repeatCount="indefinite">
                                            </animateTransform>
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- END: Profile Menu -->
    <div class="col-span-12 lg:col-span-8 2xl:col-span-8">
        <!-- BEGIN: Display Information -->
        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Resultados generados
                </h2>
            </div>
            <div class="p-5">
                <h1 class="text-xl font-medium leading-none py-2">Instrucciones</h1>
                <ul class="list-disc list-inside border-b pb-5 border-slate-200/60 dark:border-darkmode-400"
                    style="list-style-type: disc;">
                    <li class="ml-4">¿Satisfecho con los resultados? Haga clic en "Descargar .DOCX" o "Descargar .PDF"
                        para descargar el
                        documento con la explicación del concepto.
                    </li>
                    <li class="ml-4">¿No satisfecho? Modifique la edad del estudiante, el nombre del tema y el nombre de
                        la asignatura
                        para generar una explicación del concepto más adecuada.</li>
                </ul>
                <div class="mb-10 mt-3 bg-white shadow-lg p-8">
                    <?php
                    if (empty($worksheet)) {
                        echo "Los resultados se mostrarán aquí. ¡Haz clic en '✨Explicar concepto' para comenzar el proceso!";
                    } else {
                        echo '<h4 class="text-md leading-none mt-3"><span class="font-medium">Title:</span> ' . $worksheet['Title'] . '</h4>';
                        echo '<h4 class="text-md leading-none mt-3"><span class="font-medium">Objective:</span> ' . $worksheet['Objective'] . '</h4><br>';
                        echo '
                        <hr>';
                        echo '<h4 class="text-md leading-none mt-3"><span class="font-medium">Task 1:</span> Read the following statements and select the appropriate options.</h4><br>';
                        
                        for ($i = 0; $i < count($worksheet['MCQs']); $i++) {
                            $mcq = $worksheet['MCQs'][$i];
                            echo '<div class="font-normal">' . ($i + 1) . '. ' . $mcq['Question'] . '</div>';
                            echo '<ul class="list-disc pl-5" style="list-style-type: disc;">';
                            echo '<li class="ml-4">' . $mcq['Choice1'] . '</li>';
                            echo '<li class="ml-4">' . $mcq['Choice2'] . '</li>';
                            echo '<li class="ml-4">' . $mcq['Choice3'] . '</li><br>';
                            echo '</ul>';
                        }
                            echo '<hr>';
                            echo '<h4 class="text-md font-medium leading-none mt-3">Task 2: Fill in the Blanks</h4><br>';
                            echo '<div class="flex flex-wrap items-center">';
                            echo '<h4 class="text-md font-medium leading-none">Word Bank:</h4>';
                            for ($i = 0; $i < count($worksheet['FillInTheBlanks']); $i++) { 
                                $fib=$worksheet['FillInTheBlanks'][$i];
                                echo '<div class="mx-2">' . $fib['Answer'] . '</div>' ; 
                            } 
                                echo '</div><br>' ;

                            for ($i = 0; $i < count($worksheet['FillInTheBlanks']); $i++) { 
                                $fib=$worksheet['FillInTheBlanks'][$i];
                                echo '<div class="font-normal">' . ($i + 1) . '. ' . $fib['Statement'] . '</div><br>' ;
                            }
                            echo '<hr>';
                            echo '<h4 class="text-md font-medium leading-none mt-3">Task 3: Critical Thinking</h4><br>';
                            if($worksheet['decide'] == 0) {    
                                echo '<h4 class="text-md font-medium leading-none mt-3">Answer the following questions in complete sentences</h4><br>';                    
                                echo '<ul class="list-disc pl-5" style="list-style-type: disc;">';                            
                                    foreach($worksheet['GeneralQuestions'] as $question) {
                                    echo '<li>' . $question . '</li>';
                                }
                                echo '</ul><br>';
                            } else {
                                echo '<h4 class="text-md font-medium leading-none mt-3">Label the following statements as: True or False</h4><br>';
                                echo '<ul class="list-disc pl-5" style="list-style-type: disc;">';
                                    foreach($worksheet['TrueOrFalse'] as $question) {
                                    echo '<li>' . $question['Statement'] . ' __________ </li>';
                                    }
                                    echo '</ul><br>';
                            }
                            echo '
                            <hr>';
                            echo '<h4 class="text-md font-medium leading-none mt-3">Task 4: Assessment</h4><br>';                        
                            echo '<div class="font-normal">' . $worksheet['AssessmentSummary'] . '</div>';

                            // Add the Answer Key section at the end
                            if (!empty($worksheet)) {
                            echo '
                            <h3 class="mt-5">-----------------------------------------------------------------------------------------------------</h3>';
                            echo '<h3 class="text-md font-medium leading-none mt-3">Answer Key (For Teacher Use Only)</h3><br>';
                            
                            // MCQs section
                            echo '<h4 class="text-md font-medium leading-none mt-3 mb-3">MCQs:</h4>';
                            for ($i = 0; $i < count($worksheet['MCQs']); $i++) { 
                                $mcq=$worksheet['MCQs'][$i]; echo '<div>' . ($i + 1) . '. ' .
                                $mcq['Correct'] . '</div>' ; 
                            } // Fill in the Blanks section
                                echo '<h4 class="text-md font-medium leading-none mt-3 mb-3">Fill in the Blanks:</h4>' ; 
                                for ($i=0; $i < count($worksheet['FillInTheBlanks']); $i++) {
                                     $fib=$worksheet['FillInTheBlanks'][$i]; echo '<div>' . ($i + 1) . '. ' . $fib['Answer'] . '</div>' ; 
                                    } // True or False section 
                                    if ($worksheet['decide']==1) {
                                echo '<h4 class="text-md font-medium leading-none mt-3 mb-3">True or False:</h4>' ; for ($i=0; $i <
                                count($worksheet['TrueOrFalse']); $i++) { $tof=$worksheet['TrueOrFalse'][$i]; echo '<div>' . ($i + 1) . '. ' .
                                $tof['Answer'] . '</div>' ; } } 
                                }
                            
                    }
                    ?>
                </div>
                <?php 
                if (!empty($worksheet)) {
                    ?>
                <div class="my-2 flex gap-2">
                    <a target="_blank"
                        href="{{ route('teacher.downloadWorksheetDocx', ['worksheet' => urlencode(json_encode($worksheet))]) }}"
                        class="btn btn-primary">Descargar .DOCX</a>

                    <a target="_blank"
                        href="{{ route('teacher.downloadWorksheetPDF', ['worksheet' => urlencode(json_encode($worksheet))]) }}"
                        class="btn btn-primary">Descargar .PDF</a>
                </div>

                <div class="font-medium italic mt-5">
                    MaestroIA ofrece herramientas y recursos de alta calidad para educadores. Nuestro contenido generado
                    por inteligencia
                    artificial debe ser revisado cuidadosamente para garantizar su precisión y adecuación antes de su
                    uso. No asumimos
                    responsabilidad alguna por cualquier contenido incorrecto o inapropiado generado por nuestra
                    plataforma.
                </div>
                <?php
                }
                ?>
            </div>
        </div>


    </div>
</div>

<script>
    document.getElementById('generate-btn').addEventListener('click', function() {
            document.getElementById('spinner').classList.remove('hidden');
        });
</script>
@endsection