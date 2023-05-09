@extends('dashboard.teacher.layout')
@section('content')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Generar Preguntas de Comprensión
    </h2>
</div>
<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    <div class="col-span-12 lg:col-span-4 2xl:col-span-4 flex lg:block flex-col-reverse">
        <div class="intro-y box mt-5">
            <form method="POST" action="{{ route('teacher.comprehension.generate') }}">
                @csrf
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" id="questionnaire">
                            <linearGradient id="a" x1="925.021" x2="937.235" y1="-571.934" y2="-587.024"
                                gradientTransform="matrix(3.0757 0 0 -3.0757 -2839.739 -1758.136)"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#FCD600"></stop>
                                <stop offset="1" stop-color="#F16222"></stop>
                            </linearGradient>
                            <path fill="url(#a)"
                                d="M10.1 0h27.7C43.5 0 48 4.5 48 10.1v27.7C48 43.5 43.5 48 37.9 48H10.1C4.5 48 0 43.5 0 37.9V10.1C0 4.5 4.5 0 10.1 0z">
                            </path>
                            <path fill="#fff"
                                d="M19.5 32.5h-.2c-.3-.1-.4-.4-.3-.7l7.4-17c.1-.3.4-.4.7-.3.3.1.4.4.3.7l-7.4 17c-.1.2-.3.3-.5.3z">
                            </path>
                            <path fill="#fff"
                                d="M32 33.5c-.1 0-.2 0-.3-.1l-3.9-2.9H21c-.2 0-.5 0-.7-.1-.3-.1-.4-.4-.3-.6.1-.3.4-.4.6-.3.1 0 .3.1.4.1h7c.1 0 .2 0 .3.1l3.2 2.4v-2c0-.3.2-.5.5-.5h1c.8 0 1.5-.7 1.5-1.5v-7c0-.8-.7-1.5-1.5-1.5h-7.8c-.3 0-.5-.2-.5-.5s.2-.5.5-.5H33c1.4 0 2.5 1.1 2.5 2.5v7c0 1.4-1.1 2.5-2.5 2.5h-.5V33c0 .2-.1.4-.3.4-.1.1-.1.1-.2.1zm-13-8h-1c-.8 0-1.5-.7-1.5-1.5v-3c0-.8.7-1.5 1.5-1.5h1c.8 0 1.5.7 1.5 1.5v3c0 .8-.7 1.5-1.5 1.5zm-1-5c-.3 0-.5.2-.5.5v3c0 .3.2.5.5.5h1c.3 0 .5-.2.5-.5v-3c0-.3-.2-.5-.5-.5h-1z">
                            </path>
                            <path fill="#fff"
                                d="M30 27.5c-.3 0-.5-.2-.5-.5v-4c0-.3-.2-.5-.5-.5h-2c-.3 0-.5.2-.5.5v4c0 .3-.2.5-.5.5s-.5-.2-.5-.5v-4c0-.8.7-1.5 1.5-1.5h2c.8 0 1.5.7 1.5 1.5v4c0 .3-.2.5-.5.5z">
                            </path>
                            <path fill="#fff"
                                d="M29.5 25.5h-3c-.3 0-.5-.2-.5-.5s.2-.5.5-.5h3c.3 0 .5.2.5.5s-.2.5-.5.5zm-8.5 0c-.1 0-.3 0-.4-.1l-2-2c-.2-.2-.2-.5 0-.7s.5-.2.7 0l2 2c.2.2.2.5 0 .7 0 .1-.2.1-.3.1z">
                            </path>
                            <path fill="#fff"
                                d="M15 31.5c-.1 0-.2 0-.2-.1-.2-.1-.3-.3-.3-.4v-2.5H14c-1.4 0-2.5-1.1-2.5-2.5v-7c0-1.4 1.1-2.5 2.5-2.5h12c.3 0 .5.2.5.5s-.2.5-.5.5H14c-.8 0-1.5.7-1.5 1.5v7c0 .8.7 1.5 1.5 1.5h1c.3 0 .5.2.5.5v2l3.2-2.4c.1-.1.2-.1.3-.1h2c.3 0 .5.2.5.5s-.2.5-.5.5h-1.8l-3.9 2.9c-.1.1-.2.1-.3.1z">
                            </path>
                        </svg>
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">Generar Preguntas de Comprensión</div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div>
                        <label for="grade-level" class="form-label">Curso</label>
                        <select id="grade-level" required name="grade" class="form-select">
                            <option value="Infantil" <?php if ($grade=='Infantil' ) { echo 'selected' ; } ?>>Infantil
                            </option>
                            <option value="Primero de primaria" <?php if ($grade=='Primero de primaria' ) {
                                echo 'selected' ; } ?>
                                >Primero de primaria</option>
                            <option value="Segundo de primaria" <?php if ($grade=='Segundo de primaria' ) {
                                echo 'selected' ; } ?>
                                >Segundo de primaria</option>
                            <option value="Tercero de primaria" <?php if ($grade=='Tercero de primaria' ) {
                                echo 'selected' ; } ?>
                                >Tercero de primaria</option>
                            <option value="Cuarto de primaria" <?php if ($grade=='Cuarto de primaria' ) {
                                echo 'selected' ; } ?>>Cuarto
                                de primaria</option>
                            <option value="Quinto de primaria" <?php if ($grade=='Quinto de primaria' ) {
                                echo 'selected' ; } ?>>Quinto
                                de primaria</option>
                            <option value="Sexto de primaria" <?php if ($grade=='Sexto de primaria' ) { echo 'selected'
                                ; } ?>>Sexto de
                                primaria</option>
                            <option value="1º de la ESO" <?php if ($grade=='1º de la ESO' ) { echo 'selected' ; } ?>>1º
                                de la ESO
                            </option>
                            <option value="2º de la ESO" <?php if ($grade=='2º de la ESO' ) { echo 'selected' ; } ?>>2º
                                de la ESO
                            </option>
                            <option value="3º de la ESO" <?php if ($grade=='3º de la ESO' ) { echo 'selected' ; } ?>>3º
                                de la ESO
                            </option>
                            <option value="4º de la ESO" <?php if ($grade=='4º de la ESO' ) { echo 'selected' ; } ?>>4º
                                de la ESO
                            </option>
                            <option value="1º de Bachillerato" <?php if ($grade=='1º de Bachillerato' ) {
                                echo 'selected' ; } ?>>1º de
                                Bachillerato</option>
                            <option value="2º de Bachillerato" <?php if ($grade=='2º de Bachillerato' ) {
                                echo 'selected' ; } ?>>2º de
                                Bachillerato</option>
                            <option value="Nivel Universitario" <?php if ($grade=='Nivel Universitario' ) {
                                echo 'selected' ; } ?>>Nivel
                                Universitario</option>
                        </select>
                    </div>

                    <div class="mt-5">
                        <label for="lesson-title" class="form-label">Numero de preguntas</label>
                        <!-- Input for Lesson Title -->

                        <input id="default-range" name="questionNo" type="number" placeholder="i.e 8"
                            class="form-control">
                    </div>
                    <div class="mt-5">
                        <label for="comprehension-focus" class="form-label">Enfoque de las preguntas</label>
                        <!-- Textarea for Lesson Description -->
                        <select id="comprehension-focus" name="focus" required class="form-select">
                            <option value="Vocabulary and Spelling" <?php if ($focus=='Vocabulary' ) { echo 'selected' ;
                                } ?>
                                >Vocabulario</option>
                            <option value="Literal Retrieval" <?php if ($focus=='Literal Retrieval' ) { echo 'selected'
                                ; } ?>>Comprensión literal</option>
                            <option value="Inference" <?php if ($focus=='Inference' ) { echo 'selected' ; } ?>
                                >Comprensión inferencial
                            </option>
                            <option value="Evaluation" <?php if ($focus=='Evaluation' ) { echo 'selected' ; } ?>
                                >Evaluation</option>
                            <option value="Author Choice" <?php if ($focus=='Author Choice' ) { echo 'selected' ; } ?>
                                >Author Choice</option>
                            <option value="Compare, Contrast and Comment" <?php if
                                ($focus=='Compare, Contrast and Comment' ) { echo 'selected' ; } ?>>Compare, Contrast
                                and
                                Comment</option>
                            <option value="Summary and Prediction" <?php if ($focus=='Summary and Prediction' ) {
                                echo 'selected' ; } ?>>Summary and Prediction</option>
                            <option value="Analysis of Language and Structure" <?php if
                                ($focus=='Analysis of Language and Structure' ) { echo 'selected' ; } ?>>Analysis of
                                Language
                                and Structure</option>
                            <option value="Mixture of All" <?php if ($focus=='Mixture of All' ) { echo 'selected' ; } ?>
                                >Mixture of All</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="lesson-description" class="form-label">Texto de comprensión</label>
                        <!-- Textarea for Lesson Description -->
                        <textarea id="lesson-description"
                            placeholder="En un pequeño y pintoresco pueblo enclavado entre exuberantes colinas verdes, los residentes disfrutaban de una vida armoniosa, ajenos al ajetreo y al bullicio del mundo.........."
                            name="description" required minlength="25"
                            class="form-control h-40"><?php echo htmlspecialchars($description); ?></textarea>
                    </div>
                </div>
                <div class="p-5 border-t justify-center mx-auto border-slate-200/60 dark:border-darkmode-400 flex">

                    <button type="submit" id="generate-btn" class="btn btn-primary px-2 py-2">
                        ✨Generar preguntas
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
                <h1 class="text-xl font-medium leading-none py-2">Direcciones</h1>
                <ul class="list-disc list-inside border-b pb-5 border-slate-200/60 dark:border-darkmode-400"
                    style="list-style-type: disc;">
                    <li class="ml-4">¿Feliz con los resultados? Haga clic en "Descargar .DOCX" para descargar el
                        documento de Word.
                    </li>
                    <li class="ml-4">¿No satisfecho? Modificar el texto de comprensión para modificar aún más
                        el
                        resultados.</li>
                </ul>
                <div class="my-10">
                    @php
                    if (empty($questions)) {
                    echo "Los resultados se mostrarán aquí. Haga clic en '✨Generar preguntas' para iniciar el
                    proceso!";
                    } else {

                    // Display questions
                    echo '<h3 class="text-lg font-medium">Questions</h3>
                    <ol style="list-style-position: inside;">';
                        foreach ($questions as $key => $question) {
                        echo '<li>
                            <h5 class="text-md leading-none mt-3">' . ($key + 1) . '. ' . $question->Question . '</h5>
                        </li>';
                        }
                        echo '</ol><br>';

                    // Display answers
                    echo '<h3 class="text-lg">Answers</h3>
                    <ol style="list-style-position: inside;">';
                        foreach ($questions as $key => $question) {
                        echo '<li>
                            <h5 class="text-md font-normal mt-3">' . ($key + 1) . '. ' . ucfirst($question->Answer) . '
                            </h5>
                        </li>';
                        }
                        echo '</ol>';
                    }
                    @endphp
                </div>
                <?php 
                if (!empty($questions)) {
                    ?>
                <div class="my-2 mt-4 flex">
                    <a target="_blank"
                        href="{{ route('teacher.downloadComprehension', ['questions' => urlencode(json_encode($questions))]) }}"
                        class="btn btn-primary">Descargar.DOCX</a>
                </div>
                <?php
                } else {
                    // echo  "Los resultados se mostrarán aquí. ¡Haz clic en '✨Generar plan de lección' para comenzar el proceso!";
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