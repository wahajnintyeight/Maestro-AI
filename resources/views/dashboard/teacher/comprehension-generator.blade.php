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
                    <div class="w-12 mr-2 h-12 image-fit">
                        <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                            viewBox="0 0 128 128" id="Teacher">
                            <path
                                d="M81.195 27.936h-9.36A15.898 15.898 0 0 1 74 35.94c0 .291-.028.576-.044.863zM40 62.958v8.005h4v-8.005a2 2 0 1 0-4 0zm38.045-5.032L95.417 35.62a5.743 5.743 0 0 0 1.373-3.731 5.899 5.899 0 0 0-2.121-4.522 5.992 5.992 0 0 0-8.378.653l-13 15.926h-1.456a16.1 16.1 0 0 1-3.288 4.003h5.693a2 2 0 0 0 1.549-.735L89.349 30.6a1.966 1.966 0 0 1 2.745-.17 1.883 1.883 0 0 1 .696 1.459 1.744 1.744 0 0 1-.426 1.145 1.444 1.444 0 0 0-.071.086l-17.83 22.894a2 2 0 0 0-.423 1.23v.028c.02 2.206.008 12.014.005 13.692h4"
                                fill="#595bd4" class="color000000 svgShape"></path>
                            <path
                                d="M44 43.946a12.017 12.017 0 0 0-12 12.008v15.01h4v-15.01a8.012 8.012 0 0 1 8-8.005h3.453a16.1 16.1 0 0 1-3.288-4.003zm14-20.013a12.008 12.008 0 1 0 12 12.008 12.017 12.017 0 0 0-12-12.008z"
                                fill="#595bd4" class="color000000 svgShape"></path>
                            <path
                                d="M122 0H6a6.008 6.008 0 0 0-6 6.004V62.04a6.008 6.008 0 0 0 6 6.004l22-.151v-11.94a16.023 16.023 0 0 1 14.546-15.936 15.756 15.756 0 0 1 1.619-12.081H10a2.001 2.001 0 0 1 0-4.003h37.453A15.91 15.91 0 0 1 58 19.931H10a2.001 2.001 0 0 1 0-4.003h62a2.001 2.001 0 0 1 0 4.003H58a15.91 15.91 0 0 1 10.547 4.002h16.29a10.017 10.017 0 0 1 12.412.376 9.878 9.878 0 0 1 3.541 7.58 9.764 9.764 0 0 1-2.293 6.285L82.052 59.292c.008 1.924.006 4.235-.002 6.687v1.543l4.985-.034c-.011-.176-.035-.349-.035-.527v-4.003a8.012 8.012 0 0 1 8-8.005h18a8.012 8.012 0 0 1 8 8.005v.585a8.035 8.035 0 0 1 4.045 3.664A5.438 5.438 0 0 0 128 62.04V6.004A6.008 6.008 0 0 0 122 0ZM34 11.926H10a2.001 2.001 0 0 1 0-4.003h24a2.001 2.001 0 0 1 0 4.003Z"
                                fill="#595bd4" class="color000000 svgShape"></path>
                            <path
                                d="M124 74.966h-2v-4.002a4.001 4.001 0 0 0-4-4.003h-1v-4.003a4.001 4.001 0 0 0-4-4.002H95a4.001 4.001 0 0 0-4 4.002v4.003a4.001 4.001 0 0 0 4 4.002h1v4.003H4a4.001 4.001 0 0 0-4 4.003v4.002a4.001 4.001 0 0 0 4 4.003h2v39.025a2 2 0 1 0 4 0V86.974h108v39.025a2 2 0 1 0 4 0V86.974h2a4.001 4.001 0 0 0 4-4.003V78.97a4.001 4.001 0 0 0-4-4.003Zm-6-4.002v4.002h-18v-4.002ZM95 66.96v-4.003h18v4.003Zm29 16.01H4V78.97h120Z"
                                fill="#595bd4" class="color000000 svgShape"></path>
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