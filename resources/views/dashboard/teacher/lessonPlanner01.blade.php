@extends('dashboard.teacher.layout')
@section('content')
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<style>
    h2 {
        font-size: 18px;
        font-weight: bold;
    }

    .toast {
        position: absolute;
        top: 25px;
        right: 30px;
        border-radius: 12px;
        z-index: 9999 !important;
        background: #fff;
        padding: 20px 35px 20px 25px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        border-left: 6px solid #4070f4;
        overflow: hidden;
        transform: translateX(calc(100% + 30px));
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.35);
    }

    .toast.active {
        transform: translateX(0%);
    }

    .toast .toast-content {
        display: flex;
        align-items: center;
    }

    .toast-content .check {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 35px;
        width: 35px;
        background-color: #4070f4;
        color: #fff;
        font-size: 20px;
        border-radius: 50%;
    }

    .toast-content .message {
        display: flex;
        flex-direction: column;
        margin: 0 20px;
    }

    .message .text {
        font-size: 16px;
        font-weight: 400;
        ;
        color: #666666;
    }

    .message .text.text-1 {
        font-weight: 600;
        color: #333;
    }

    .toast .close {
        position: absolute;
        top: 10px;
        right: 15px;
        padding: 5px;
        cursor: pointer;
        opacity: 0.7;
    }

    .toast .close:hover {
        opacity: 1;
    }

    .toast .progress {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 3px;
        width: 100%;
        background: #ddd;
    }

    .toast .progress:before {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        height: 100%;
        width: 100%;
        background-color: #4070f4;
    }

    .progress.active:before {
        animation: progress 120s linear forwards;
    }

    @keyframes progress {
        100% {
            right: 100%;
        }
    }

    .toast.active~button {
        pointer-events: none;
    }
</style>
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Planificador de situaciones de aprendizaje </h2>
</div>
{{-- <div id="success-modal-preview" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="p-5 text-center">
                    <i data-lucide="hourglass-full" class="w-16 h-16 text-primary mx-auto mt-3"></i>
                    <div class="text-3xl mt-5">¡Por favor, ten paciencia!</div>
                    <div class="text-gray-700 mt-2">Estamos generando tu contenido en este momento.</div>
                    <div class="text-gray-500 mt-2">Este proceso puede llevar algunos minutos, dependiendo de la carga
                        de los servidores.
                        Por favor, no cierres ni actualices esta página. ¡Merecerá la pena!</div>
                </div>
                <div class="px-5 pb-8 text-center">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-primary w-24">Entendido</button>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="toast">
    <div class="toast-content">
        <i class="fas fa-solid fa-check check"></i>
        <div class="message">
            <span class="text text-1">Success</span>
            <span class="text text-2">Your changes has been saved</span>
        </div>
    </div>
    <i class="fa-solid fa-xmark close"></i>
    <div class="progress"></div>
</div> --}}

<div class="toast">
    <div class="toast-content">
        <svg class="check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
        </svg>
        <div class="message">
            <span class="text text-1">¡Paciencia, por favor!</span>
            <span class="text text-2">Generando tu contenido ahora. ¡Vale la pena esperar!</span>
        </div>
    </div>
    <svg class="close" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24" stroke-width="1.5"
        stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
    </svg>
    <div class="progress"></div>
</div>

<!-- END: Modal Content -->
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
                        <div class="font-medium text-base">Planificador de situaciones de aprendizaje</div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div>
                        <label for="curriculum" class="form-label">Currículo</label>
                        <select id="curriculum" name="curriculum" class="form-select">
                            <option value="Currículo Español - LOMLOE">Currículo Español - LOMLOE
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
                        <label for="lesson-title" class="form-label">Situación de aprendizaje</label>
                        <!-- Input for Lesson Title -->
                        <input id="lesson-title" name="title" type="text" class="form-control"
                            placeholder="Agregar un título o tema de la lección"
                            value="<?php echo htmlspecialchars($title); ?>">


                    </div>
                    <div class="mt-5">
                        <label for="lesson-description" class="form-label">Descripción de la lección</label>
                        <!-- Textarea for Lesson Description -->
                        <textarea id="lesson-description"
                            placeholder="Intente algo como esto: Escriba un plan de lección sobre la primera guerra mundial. Incluye una actividad dinámica en grupo."
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
    toast = document.querySelector(".toast"),
    closeIcon = document.querySelector(".close"),
    progress = document.querySelector(".progress");
    
    let timer1, timer2;

    document.getElementById('generate-btn').addEventListener('click', function() {
        document.getElementById('spinner').classList.remove('hidden');
        toast.classList.add("active");
        progress.classList.add("active");
        
        // Set your desired timeOut value here. 1s = 1000 milliseconds
        timer1 = setTimeout(() => {
        toast.classList.remove("active");
        }, 120000);
        
        // You can adjust this value as per your requirement.
        timer2 = setTimeout(() => {
        progress.classList.remove("active");
        }, 120300);
    });

    closeIcon.addEventListener("click", () => {
    toast.classList.remove("active");
    
    setTimeout(() => {
    progress.classList.remove("active");
    }, 300);
    
    clearTimeout(timer1);
    clearTimeout(timer2);
    });
</script>
@endsection