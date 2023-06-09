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
        Explicación de conceptos
    </h2>
</div>
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
<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    <div class="col-span-12 lg:col-span-4 2xl:col-span-4 flex lg:block flex-col-reverse">
        <div class="intro-y box mt-5">
            <form method="POST" action="{{ route('teacher.generateConceptExplainer') }}">
                @csrf
                <div class="relative flex items-center  p-5">
                    <div class="w-12 h-12 mr-2 image-fit">
                        <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                            viewBox="0 0 64 64" id="ConceptExchange">
                            <rect width="2" height="2" x="6" y="26" fill="#595bd4" class="color000000 svgShape"></rect>
                            <rect width="2" height="2" x="6" y="30" fill="#595bd4" class="color000000 svgShape"></rect>
                            <rect width="2" height="2" x="6" y="34" fill="#595bd4" class="color000000 svgShape"></rect>
                            <rect width="2" height="2" x="6" y="38" fill="#595bd4" class="color000000 svgShape"></rect>
                            <rect width="2" height="2" x="6" y="42" fill="#595bd4" class="color000000 svgShape"></rect>
                            <rect width="2" height="2" x="14" y="46" fill="#595bd4" class="color000000 svgShape"></rect>
                            <rect width="2" height="2" x="18" y="46" fill="#595bd4" class="color000000 svgShape"></rect>
                            <rect width="2" height="2" x="6" y="46" fill="#595bd4" class="color000000 svgShape"></rect>
                            <rect width="2" height="2" x="10" y="46" fill="#595bd4" class="color000000 svgShape"></rect>
                            <polygon points="22 50 26 47 22 44 22 50" fill="#595bd4" class="color000000 svgShape">
                            </polygon>
                            <rect width="2" height="2" x="56" y="36" fill="#595bd4" class="color000000 svgShape"></rect>
                            <rect width="2" height="2" x="56" y="32" fill="#595bd4" class="color000000 svgShape"></rect>
                            <rect width="2" height="2" x="56" y="28" fill="#595bd4" class="color000000 svgShape"></rect>
                            <rect width="2" height="2" x="56" y="24" fill="#595bd4" class="color000000 svgShape"></rect>
                            <rect width="2" height="2" x="56" y="20" fill="#595bd4" class="color000000 svgShape"></rect>
                            <rect width="2" height="2" x="48" y="16" fill="#595bd4" class="color000000 svgShape"></rect>
                            <rect width="2" height="2" x="44" y="16" fill="#595bd4" class="color000000 svgShape"></rect>
                            <rect width="2" height="2" x="56" y="16" fill="#595bd4" class="color000000 svgShape"></rect>
                            <rect width="2" height="2" x="52" y="16" fill="#595bd4" class="color000000 svgShape"></rect>
                            <polygon points="42 20 42 14 38 17 42 20" fill="#595bd4" class="color000000 svgShape">
                            </polygon>
                            <circle cx="45" cy="51" r="1" fill="#595bd4" class="color000000 svgShape">
                            </circle>
                            <circle cx="37" cy="51" r="1" fill="#595bd4" class="color000000 svgShape">
                            </circle>
                            <path
                                d="M48,32,35,40H28V62H62V40H44ZM37,54a3,3,0,1,1,3-3A3,3,0,0,1,37,54Zm16-6a3,3,0,1,1-3,3A3,3,0,0,1,53,48Zm-8,0a3,3,0,1,1-3,3A3,3,0,0,1,45,48Z"
                                fill="#595bd4" class="color000000 svgShape"></path>
                            <circle cx="53" cy="51" r="1" fill="#595bd4" class="color000000 svgShape">
                            </circle>
                            <circle cx="19" cy="13" r="1" fill="#595bd4" class="color000000 svgShape">
                            </circle>
                            <circle cx="27" cy="13" r="1" fill="#595bd4" class="color000000 svgShape">
                            </circle>
                            <path
                                d="M16,32l13-8h7V2H2V24H20ZM27,10a3,3,0,1,1-3,3A3,3,0,0,1,27,10ZM11,16a3,3,0,1,1,3-3A3,3,0,0,1,11,16Zm8,0a3,3,0,1,1,3-3A3,3,0,0,1,19,16Z"
                                fill="#595bd4" class="color000000 svgShape"></path>
                            <circle cx="11" cy="13" r="1" fill="#595bd4" class="color000000 svgShape">
                            </circle>
                        </svg>
                    </div>
                    <div class="ml-6 mr-auto">
                        <div class="font-medium text-base">Explicación de conceptos</div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div>
                        <label for="curriculum" class="form-label">Currículo</label>
                        <select id="curriculum" name="curriculum" class="form-select">
                            <option value="Currículo Español - LOMLOE">Currículo Español - LOMLOE
                            </option>
                            <option value="Chile">Chile: Curriculum Nacional Base</option>
                            <option value="Argentina">Argentina: Diseño Curricular Nacional</option>
                            <option value="Peru">Peru: Curriculum Nacional</option>
                            <option value="Mexico">Mexico: Sistema Educativo Nacional</option>
                            <option value="Uruguayan Curriculum">Uruguayan Curriculum</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="grade-level" class="form-label">Asignatura/Curso</label>
                        <input required id="lesson-title" name="subject" type="text" class="form-control"
                            placeholder="Ej. Ciencias" value="<?php echo htmlspecialchars($subject); ?>">
                    </div>
                    <div class="mt-5">
                        <label for="lesson-title" class="form-label">Tema</label>
                        <!-- Input for Lesson Title -->
                        <input required id="lesson-title" name="topic" type="text" class="form-control"
                            placeholder="El Ciclo del Agua" value="<?php echo htmlspecialchars($topic); ?>">


                    </div>
                    <div class="mt-5">
                        <label for="lesson-description" class="form-label">Edad del estudiante</label>
                        <!-- Textarea for Lesson Description -->
                        <input required id="lesson-title" name="age" type="number" class="form-control" placeholder="8"
                            value="<?php echo htmlspecialchars($age); ?>">
                    </div>
                </div>
                <div class="p-5 border-t justify-center mx-auto border-slate-200/60 dark:border-darkmode-400 flex">

                    <button type="submit" id="generate-btn" class="btn btn-primary px-2 py-2">
                        ✨Explicar concepto
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
                <div class="my-10">
                    <?php
                    if (empty($concept)) {
                        echo "Los resultados se mostrarán aquí. ¡Haz clic en '✨Explicar concepto' para comenzar el proceso!";
                    } else {
                        echo '<div class="font-medium text-md">' . nl2br($concept) . '</div>';
                    }
                    ?>
                </div>

                <?php 
                if (!empty($concept)) {
                    ?>
                <div class="my-2 flex gap-2">
                    <a target="_blank"
                        href="{{ route('teacher.downloadConceptDocx', ['concept' => urlencode(json_encode($concept))]) }}"
                        class="btn btn-primary">Descargar.DOCX</a>
                    {{--
                    <a target="_blank"
                        href="{{ route('teacher.downloadConceptPDF', ['concept' => urlencode(json_encode($concept))]) }}"
                        class="btn btn-primary">Descargar.PDF</a> --}}
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