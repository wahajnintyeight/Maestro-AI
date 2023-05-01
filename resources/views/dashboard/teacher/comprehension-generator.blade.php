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
                        <label for="grade-level" class="form-label">Nivel de grado</label>
                        <select id="grade-level" required name="grade" class="form-select">
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
                        <label for="lesson-title" class="form-label">Numero de preguntas</label>
                        <!-- Input for Lesson Title -->

                        <input id="default-range" name="questionNo" type="number" placeholder="i.e 8"
                            class="form-control">
                    </div>
                    <div class="mt-5">
                        <label for="comprehension-focus" class="form-label">Enfoque de las preguntas</label>
                        <!-- Textarea for Lesson Description -->
                        <textarea id="comprehension-focus" type="textarea"
                            placeholder="Enfoque de lectura: comprensión literal, inferencia, evaluación, vocabulario, elección del autor, comparación, contraste y comentario, recuperación, resumen y predicción, análisis del lenguaje y la estructura."
                            name="focus" required required minlength="2"
                            class="form-control h-40"><?php echo htmlspecialchars($focus); ?></textarea>
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
                    // dd($questions);
                    if (empty($questions)) {
                    echo "Los resultados se mostrarán aquí. Haga clic en '✨Generar preguntas' para iniciar el
                    ¡proceso!";
                    } else {
                    foreach ($questions as $question) {
                    echo '<ol>
                        <h4 class="text-xl font-medium leading-none mt-3">' . $question->Title . '</h4>
                    </ol><br>';
                    echo '<div class="font-normal">
                        <li>' . $question->Option1 . '</li>
                    </div>';
                    echo '<div class="font-normal">
                        <li>' . $question->Option2 . '</li>
                    </div>';
                    echo '<div class="font-normal">
                        <li>' . $question->Option3 . '</li>
                    </div><br>';
                    echo '<div class="font-normal text-success">Correct Answer: <b>' . $question->Correct . '</b></div>
                    ';
                    }
                    }
                    @endphp
                </div>

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