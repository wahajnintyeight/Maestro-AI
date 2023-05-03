@extends('dashboard.teacher.layout')
@section('content')
<style>
    .slide-container {
        background-color: #fff;
        border-radius: 4px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        padding: 20px;
        width: 60%;
        height: 45%;
    }

    .editable-slides-default {
        display: flex;
        flex-direction: column;
        gap: 16px;
        margin: 0 auto;
        padding: 13px;
        border-radius: 4px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        background-color: rgb(184, 184, 184);
    }

    .editable-slides-default .slide {
        position: relative;
        padding: 1.25in 0.95in 0.95in 0.95in;
        width: 10in;
        height: 720px;
        background-color: white;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .editable-slides-default .slide h3,
    .editable-slides-default .slide p {
        margin: 0;
        padding: 0;
    }

    .editable-slides-default .slide h3 {
        font-size: 28px;
        font-weight: bold;
        color: #3c4858;
        margin-bottom: 12px;
    }

    .editable-slides-default .slide p {
        font-size: 18px;
        color: #606f7b;
        line-height: 1.5;
        margin-top: 29px;
    }

    .editable-slides-default .slide h3:focus,
    .editable-slides-default .slide p:focus {
        outline: none;
        border: 1px solid #007bff;
        border-radius: 4px;
    }
</style>

<?php 

?>
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Slides Generator
    </h2>
</div>
<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    <div class="col-span-12 lg:col-span-4 2xl:col-span-4 flex lg:block flex-col-reverse">
        <div class="intro-y box mt-5">
            <form method="POST" action="{{route('teacher.generateSlides')}}">
                @csrf
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="microsoft-powerpoint">
                            <path fill="#231F20" d="M297.941 48H96v416h320V166.059z"></path>
                            <path fill="#FFF" d="M392 440H120V72h168l104 104z"></path>
                            <path fill="#6D6E71" d="M288 176V72l104 104z"></path>
                            <path fill="#E6E7E8" d="m288 176 104 104V176z"></path>
                            <path fill="#231F20" d="M48 176h72v240H48z"></path>
                            <linearGradient id="a" x1="260.916" x2="123.347" y1="296" y2="296"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#fff"></stop>
                                <stop offset="1" stop-color="#e6e7e8"></stop>
                            </linearGradient>
                            <path fill="url(#a)" d="M120 176h144v240H120z"></path>
                            <path fill="#F25A25" d="M72 200h192v192H72z"></path>
                            <path fill="#E6E7E8"
                                d="M264 376h56v16h-56zM264 336h56v16h-56zM264 256v56c30.928 0 56-25.072 56-56h-56z">
                            </path>
                            <path fill="#F7B3A6" d="M280 202.332V240h37.668c-5.376-18.058-19.61-32.292-37.668-37.668z">
                            </path>
                            <path fill="#FFF"
                                d="M180 240h-52v112h24v-40h28c19.882 0 36-16.118 36-36s-16.118-36-36-36zm0 48h-28v-24h28c6.627 0 12 5.373 12 12s-5.373 12-12 12z">
                            </path>
                        </svg>
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">Slides Generator</div>
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
                        <label for="lesson-description" class="form-label">Objetivo</label>
                        <!-- Textarea for Lesson Description -->
                        <textarea id="lesson-description"
                            placeholder="Intente algo como esto: escriba un plan de lección sobre cómo se usa la música en las tribus nativas americanas"
                            name="description"
                            class="form-control h-40"><?php echo htmlspecialchars($description); ?></textarea>
                    </div>

                    <div class="mt-3">
                        <label for="lesson-title" class="form-label">Número de páginas</label>
                        <!-- Input for Lesson Title -->
                        <input id="lesson-title" name="num_of_slides" type="text" class="form-control"
                            placeholder="i.e 8" value="<?php echo htmlspecialchars($num_of_slides); ?>">


                    </div>
                </div>
                <div class="p-5 border-t justify-center mx-auto border-slate-200/60 dark:border-darkmode-400 flex">

                    <button type="submit" id="generate-btn" class="btn btn-primary px-2 py-2">
                        ✨Generate Slides
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
                    <li class="ml-4">¿Feliz con los resultados? Haga clic en "Descargar .PPTX" para descargar el
                        documento de PowerPoint.
                    </li>
                    <li class="ml-4">¿No satisfecho? Modifique la descripción de la lección para modificar aún más los
                        resultados.</li>
                </ul>
                <div class="my-10">
                    <div class="editable-slides-default">
                        <?php 
                    if (empty($slides)) {
                        echo "Los resultados se mostrarán aquí. ¡Haz clic en '✨Generate Slides' para comenzar el proceso!";
                    } else {
                        echo '<div class="slide flex flex-col justify-center items-center h-full">';
                        echo '<h2 class="text-xl font-medium leading-none mt-3 text-center" style="font-size: 41px;">' . $slides['Title'] . '</h2>';
                        echo '<p class="font-normal text-center">' . $slides['Objective'] . '</p>';
                        echo '</div>';
            
                        // Content slides
                        foreach ($slides['Slides'] as $item) {
                            echo '<div class="slide">';
                            echo '<h3 class="text-xl font-medium leading-none mt-3">' . $item['Heading'] . '</h3>';
                            echo '<p class="font-normal">' . $item['Content'] . '</p>';
            
                            // Display questions as bullets
                            echo '<ul class="list-disc pl-5 mt-10" style="list-style-type: disc;">';
                            foreach ($item['Questions'] as $question) {
                                echo '<li class="font-normal leading-none text-md py-1"><span class="font-normal leading-none text-xl ">' . $question . '</span></li>';
                            }
                            echo '</ul>';
            
                            echo '</div>';
                        }
                    }
                    ?>
                    </div>
                </div>
                <?php 
                if (!empty($slides)) {
                    ?>
                <div class="my-2 flex">
                    <a target="_blank"
                        href="{{ route('teacher.downloadSlidesPPTX', ['slides' => urlencode(json_encode($slides))]) }}"
                        class="btn btn-primary">Descargar.PPTX</a>


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