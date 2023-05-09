@extends('dashboard.teacher.layout')
@section('content')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Ideas para Clase
    </h2>
</div>
<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    <div class="col-span-12 lg:col-span-4 2xl:col-span-4 flex lg:block flex-col-reverse">
        <div class="intro-y box mt-5">
            <form method="POST" action="{{ route('teacher.generateLessonPlanner') }}">
                @csrf
                <div class="relative flex items-center p-5">
                    <div class="w-12 mr-2 h-12 image-fit">
                        <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                            id="OnlineLesson">
                            <g data-name="online lesson" fill="#595bd4" class="color000000 svgShape">
                                <path
                                    d="M24 23a1 1 0 0 1-1-1V8a3.003 3.003 0 0 1 3-3h9a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-9a1 1 0 0 0-1 1 1 1 0 0 1-1 1Zm2-16a1 1 0 0 0-1 1v11.17a2.998 2.998 0 0 1 1-.17h8V7Z"
                                    fill="#595bd4" class="color000000 svgShape"></path>
                                <path
                                    d="M31 11h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2zm0 3h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2zm0 3h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2zm-7 6a1 1 0 0 1-1-1 1 1 0 0 0-1-1h-9a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h9a3.003 3.003 0 0 1 3 3v14a1 1 0 0 1-1 1zm-10-4h8a2.998 2.998 0 0 1 1 .17V8a1 1 0 0 0-1-1h-8z"
                                    fill="#595bd4" class="color000000 svgShape"></path>
                                <path
                                    d="M20 11h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2zm0 3h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2zm0 3h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2z"
                                    fill="#595bd4" class="color000000 svgShape"></path>
                                <path
                                    d="M24 27a3.006 3.006 0 0 1-2.83-2H10a2.003 2.003 0 0 1-2-2V9.042a2.003 2.003 0 0 1 2-2h3a1 1 0 0 1 0 2h-3V23h12a1 1 0 0 1 1 1 1 1 0 0 0 2 0 1 1 0 0 1 1-1h12V9h-3a1 1 0 0 1 0-2h3a2.003 2.003 0 0 1 2 2v14a2.003 2.003 0 0 1-2 2H26.83A3.006 3.006 0 0 1 24 27Z"
                                    fill="#595bd4" class="color000000 svgShape"></path>
                                <path
                                    d="M44 35H4a1 1 0 0 1-1-1V10a2.003 2.003 0 0 1 2-2h4a1 1 0 0 1 0 2H5v23h38V10h-4a1 1 0 0 1 0-2h4a2.003 2.003 0 0 1 2 2v24a1 1 0 0 1-1 1Z"
                                    fill="#595bd4" class="color000000 svgShape"></path>
                                <path
                                    d="M45 43H3a1 1 0 0 1-.992-.876l-1-8A.999.999 0 0 1 2 33h44a.999.999 0 0 1 .992 1.124l-1 8A1 1 0 0 1 45 43ZM3.883 41h40.234l.75-6H3.133Z"
                                    fill="#595bd4" class="color000000 svgShape"></path>
                                <path
                                    d="M29 40H19a1 1 0 0 1-.97-.758l-1-4A1 1 0 0 1 18 34h12a1 1 0 0 1 .97 1.242l-1 4A1 1 0 0 1 29 40Zm-9.219-2h8.438l.5-2H19.28Z"
                                    fill="#595bd4" class="color000000 svgShape"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">Ideas para Clase</div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div>
                        <label for="curriculum" class="form-label">Curriculum</label>
                        <select id="curriculum" name="curriculum" class="form-select">
                            <option value="Spanish National Curriculum/LOMLOE">Spanish National Curriculum/LOMLOE
                            </option>
                            <option value="Chile">Chile</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Peru">Peru</option>
                        </select>
                    </div>
                    <div class="mt-5">
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
                        <label for="lesson-title" class="form-label">Objetivo</label>
                        <!-- Input for Lesson Title -->
                        <input id="lesson-title" name="title" type="text" class="form-control"
                            placeholder="Agregar un título o tema de la lección"
                            value="<?php echo htmlspecialchars($title); ?>">


                    </div>
                    <div class="mt-5">
                        <label for="lesson-description" class="form-label">Descripción de la lección</label>
                        <!-- Textarea for Lesson Description -->
                        <textarea id="lesson-description"
                            placeholder="Intente algo como esto: escriba un plan de lección sobre cómo se usa la música en las tribus nativas americanas"
                            name="description"
                            class="form-control h-40"><?php echo htmlspecialchars($description); ?></textarea>
                    </div>
                </div>
                <div class="p-5 border-t justify-center mx-auto border-slate-200/60 dark:border-darkmode-400 flex">

                    <button type="submit" id="generate-btn" class="btn btn-primary px-2 py-2">
                        ✨Generar Programación
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
                    <li class="ml-4">¿No satisfecho? Modifique la descripción de la lección para modificar aún más
                        los
                        resultados.</li>
                </ul>
                <div class="my-10">
                    <?php
                    if (empty($lesson)) {
                        echo "Los resultados se mostrarán aquí. ¡Haz clic en '✨Generar plan de lección' para comenzar el proceso!";
                    } else {
                   //     foreach ($lesson as $item) {
                    //         echo '<h4 class="text-xl font-medium leading-none mt-3">' . $item->Heading . '</h4><br>';
                
                    //         // Check if the content has a list format (Roman, numeric, or alphabetic)
                    //         $hasListFormat = preg_match('/^(-\s|\d+\.\s|[a-zA-Z]\.\s|(?:[MDCLXVI]+\.\s))/m', $item->Content);
                
                    //         if ($hasListFormat) {
                    //             $sentences = preg_split('/^(-\s|\d+\.\s|[a-zA-Z]\.\s|(?:[MDCLXVI]+\.\s))/m', $item->Content);
                    //             echo '<ul class="list-disc pl-5" style="list-style-type: disc;">';
                    //             foreach ($sentences as $sentence) {
                    //                 if (!empty(trim($sentence))) {
                    //                     echo '<li class="ml-4">' . trim($sentence) . '</li>';
                    //                 }
                    //             }
                    //             echo '</ul>';
                    //         } else {
                    //             echo '<div class="font-normal">' . $item->Content . '</div>';
                    //         }
                    //     }
                    echo '<div class="font-medium text-md">' . nl2br($lesson) . '</div>';
                    }
                    ?>
                </div>
                <?php 
                if (!empty($lesson)) {
                    ?>
                <div class="my-2 flex">
                    <a target="_blank"
                        href="{{ route('teacher.download.docx', ['lesson' => urlencode(json_encode($lesson))]) }}"
                        class="btn btn-primary">Descargar.DOCX</a>
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