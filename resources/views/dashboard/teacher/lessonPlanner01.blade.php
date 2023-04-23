@extends('dashboard.teacher.layout')
@section('content')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Lesson Planner Generator
    </h2>
</div>
<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    <div class="col-span-12 lg:col-span-4 2xl:col-span-4 flex lg:block flex-col-reverse">
        <div class="intro-y box mt-5">
            <form method="POST" action="{{route('teacher.generateLessonPlanner')}}">
                @csrf
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 64 64" id="lesson">
                            <defs>
                                <linearGradient id="a" x1="32" x2="32" y1="63.323" y2="-1.327"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#e93e3a"></stop>
                                    <stop offset=".35" stop-color="#ed683c"></stop>
                                    <stop offset=".7" stop-color="#f3903f"></stop>
                                    <stop offset="1" stop-color="#fdc70c"></stop>
                                </linearGradient>
                                <linearGradient id="b" x1="55" x2="55" y1="63.323" y2="-1.327" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="c" x1="32.667" x2="32.667" y1="63.323" y2="-1.327" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="d" x1="49" x2="49" y1="63.323" y2="-1.327" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="e" x1="44" x2="44" y1="63.323" y2="-1.327" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="f" x1="52" x2="52" y1="63.323" y2="-1.327" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="g" x1="15" x2="15" y1="63.323" y2="-1.327" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="h" x1="10" x2="10" y1="63.323" y2="-1.327" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="i" x1="18" x2="18" y1="63.323" y2="-1.327" xlink:href="#a">
                                </linearGradient>
                            </defs>
                            <path fill="url(#a)"
                                d="M55 2H9a7.008 7.008 0 0 0-7 7v34a7.008 7.008 0 0 0 7 7h13.867l-.75 6H19a3 3 0 0 0 0 6h26a3 3 0 0 0 0-6h-3.117l-.75-6H55a7.008 7.008 0 0 0 7-7V9a7.008 7.008 0 0 0-7-7ZM9 4h46a5.006 5.006 0 0 1 5 5v31H4V9a5.006 5.006 0 0 1 5-5Zm37 55a1 1 0 0 1-1 1H19a1 1 0 0 1 0-2h26a1 1 0 0 1 1 1Zm-6.133-3H24.133l.75-6h14.234ZM55 48H9a5.006 5.006 0 0 1-5-5v-1h56v1a5.006 5.006 0 0 1-5 5Z">
                            </path>
                            <path fill="url(#b)" d="M54 44h2v2h-2z"></path>
                            <path fill="url(#c)"
                                d="m21.2 29.557-1.907 1.907a3 3 0 0 0 4.243 4.243l1.907-1.907 3.239-.648a1 1 0 0 0 .51-.274l16.264-16.263a5 5 0 1 0-7.071-7.071L22.122 25.808a1 1 0 0 0-.274.51Zm.922 4.736a1 1 0 0 1-1.415-1.415l1.414-1.414 1.415 1.415Zm1.557-6.928 3.956 3.956-2.357.472-2.071-2.071ZM39.8 19.444 29.192 30.05l-1.414-1.414 9.193-9.193-1.414-1.414-9.193 9.193-1.414-1.414L35.557 15.2Zm-2.828-5.657.707-.707 4.243 4.242-.708.708Zm7.071-2.829a3.005 3.005 0 0 1 0 4.243l-.707.707-4.243-4.242.707-.708a3 3 0 0 1 4.242 0Z">
                            </path>
                            <path fill="url(#d)" d="M42 34h14v2H42zM42 30h14v2H42z"></path>
                            <path fill="url(#e)" d="M42 26h4v2h-4z"></path>
                            <path fill="url(#f)" d="M48 26h8v2h-8z"></path>
                            <path fill="url(#g)" d="M8 16h14v2H8zM8 12h14v2H8z"></path>
                            <path fill="url(#h)" d="M8 8h4v2H8z"></path>
                            <path fill="url(#i)" d="M14 8h8v2h-8z"></path>
                        </svg>
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">Lesson Planner</div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div>
                        <label for="grade-level" class="form-label">Nivel de grado</label>
                        <select id="grade-level" name="grade" class="form-select">
                            <option value="Kindergarten" <?php if($grade=="Kindergarten" ) { echo "selected" ; } ?>
                                >Kindergarten</option>
                            <option value="1st Grade" <?php if($grade=="1st Grade" ) { echo "selected" ; } ?> >1st Grade
                            </option>
                            <option value="2nd Grade" <?php if($grade=="2nd Grade" ) { echo "selected" ; } ?> >2nd Grade
                            </option>
                            <option value="3rd Grade" <?php if($grade=="3rd Grade" ) { echo "selected" ; } ?> >3rd Grade
                            </option>
                            <option value="4th Grade" <?php if($grade=="4th Grade" ) { echo "selected" ; } ?> >4th Grade
                            </option>
                            <option value="5th Grade" <?php if($grade=="5th Grade" ) { echo "selected" ; } ?> >5th Grade
                            </option>
                            <option value="6th Grade" <?php if($grade=="6th Grade" ) { echo "selected" ; } ?> >6th Grade
                            </option>
                            <option value="7th Grade" <?php if($grade=="7th Grade" ) { echo "selected" ; } ?> >7th Grade
                            </option>
                            <option value="8th Grade" <?php if($grade=="8th Grade" ) { echo "selected" ; } ?> >8th Grade
                            </option>
                            <option value="9th Grade" <?php if($grade=="9th Grade" ) { echo "selected" ; } ?> >9th Grade
                            </option>
                            <option value="10th Grade" <?php if($grade=="10th Grade" ) { echo "selected" ; } ?> >10th
                                Grade</option>
                            <option value="11th Grade" <?php if($grade=="11th Grade" ) { echo "selected" ; } ?> >11th
                                Grade</option>
                            <option value="12th Grade" <?php if($grade=="12th Grade" ) { echo "selected" ; } ?> >12th
                                Grade</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="lesson-title" class="form-label">Título de la lección</label>
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
                        ✨Generar plan de lección
                        <span id="spinner" class="hidden">
                            <svg width="25" viewBox="-2 -2 42 42" xmlns="http://www.w3.org/2000/svg" stroke="white"
                                class="w-4 h-4 ml-2">
                                <g fill="none" fill-rule="evenodd">
                                    <g transform="translate(1 1)" stroke-width="4">
                                        <circle stroke-opacity=".5" cx="18" cy="18" r="18"></circle>
                                        <path d="M36 18c0-9.94-8.06-18-18-18">
                                            <animateTransform attributeName="transform" type="rotate" from="0 18 18"
                                                to="360 18 18" dur="1s" repeatCount="indefinite"></animateTransform>
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
                    <li class="ml-4">¿No satisfecho? Modifique la descripción de la lección para modificar aún más los
                        resultados.</li>
                </ul>
                <div class="my-10">
                    <?php 
                    if (empty($lesson)) {
                        echo "Los resultados se mostrarán aquí. ¡Haz clic en '✨Generar plan de lección' para comenzar el proceso!";
                    } else {
                        foreach ($lesson as $item) {
                            echo '<h4 class="text-xl font-medium leading-none mt-3">' . $item->Heading . '</h4><br>';
                            echo '<div class="font-normal">' . $item->Content . '</div>';
                        }
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