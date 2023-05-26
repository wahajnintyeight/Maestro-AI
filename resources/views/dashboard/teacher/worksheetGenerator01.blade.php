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
        Generador de actividades
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
            <form method="POST" action="{{ route('teacher.generateWorksheet') }}">
                @csrf
                <div class="relative flex items-center  p-5">
                    <div class="w-12 mr-2 h-12 image-fit">
                        <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" id="Clipboard">
                            <path
                                d="M15 18.998v54a2 2 0 0 0 2 2h46a2 2 0 0 0 2-2v-54a2 2 0 0 0-2-2h-8v-2a2 2 0 0 0-2-2h-4.055a8.937 8.937 0 0 0-2.58-5.364 8.937 8.937 0 0 0-5.99-2.624c-2.382-.09-4.666.78-6.44 2.48a9.57 9.57 0 0 0-2.836 5.508H27a2 2 0 0 0-2 2v2h-8a2 2 0 0 0-2 2zm14-2h4a2 2 0 0 0 2-2v-.65a5.53 5.53 0 0 1 1.703-3.97 4.831 4.831 0 0 1 3.51-1.372 4.956 4.956 0 0 1 3.322 1.456A4.97 4.97 0 0 1 45 13.998v1a2 2 0 0 0 2 2h4v3H29v-3zm-10 4h6v1a2 2 0 0 0 2 2h26a2 2 0 0 0 2-2v-1h6v50H19v-50z"
                                fill="#595bd4" class="color000000 svgShape"></path>
                            <path
                                d="M56.5 34.498h-19a2 2 0 0 0 0 4h19a2 2 0 0 0 0-4zm-31.36 5.408a2.002 2.002 0 0 0 2.84 0l6.94-7a2 2 0 1 0-2.84-2.816l-5.52 5.567-1.64-1.655a2.001 2.001 0 0 0-2.842 2.816l3.062 3.088zm31.36 7.092h-19a2 2 0 0 0 0 4h19a2 2 0 0 0 0-4zm-21.592-4.42a1.998 1.998 0 0 0-2.828.012l-5.52 5.567-1.64-1.655a2.001 2.001 0 0 0-2.842 2.816l3.062 3.088a2.002 2.002 0 0 0 2.84 0l6.94-7a2 2 0 0 0-.012-2.828zM56.5 59.498h-19a2 2 0 0 0 0 4h19a2 2 0 0 0 0-4zm-24.086-1.914a2 2 0 0 0-2.828 0L28 59.17l-1.586-1.586a2 2 0 1 0-2.828 2.828l1.586 1.586-1.586 1.586a2 2 0 1 0 2.828 2.828L28 64.826l1.586 1.586c.39.39.902.586 1.414.586s1.023-.195 1.414-.586a2 2 0 0 0 0-2.828l-1.586-1.586 1.586-1.586a2 2 0 0 0 0-2.828z"
                                fill="#595bd4" class="color000000 svgShape"></path>
                        </svg>
                    </div>
                    <div class="ml-6 mr-auto">
                        <div class="font-medium text-base">Generador de actividades</div>
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
                        <label for="lesson-description" class="form-label">Objetivos de aprendizaje</label>
                        <!-- Textarea for Lesson Description -->
                        <textarea id="lesson-description"
                            placeholder="Intente algo como esto: La primera guerra mundial." name="description"
                            class="form-control h-40"><?php echo htmlspecialchars($description); ?></textarea>
                    </div>
                </div>
                <div class="p-5 border-t justify-center mx-auto border-slate-200/60 dark:border-darkmode-400 flex">

                    <button type="submit" id="generate-btn" class="btn btn-primary px-2 py-2">
                        ✨Generar Contenido
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
                        la asignatura para generar una
                        explicación del concepto más adecuada. Haga clic en el botón "Generar Contenido" a
                        continuación para crear una
                        hoja de ejercicios personalizada basada en el Objetivo de Aprendizaje y el Curso seleccionados.
                    </li>
                </ul>
                <div class="mb-10 mt-3 bg-white shadow-lg p-8">
                    <?php
                    if (empty($worksheet)) {
                        echo "Los resultados se mostrarán aquí. ¡Haz clic en '✨Explicar concepto' para comenzar el proceso!";
                    } else {
                       echo '<div class="font-medium text-md">' . nl2br($worksheet) . '</div>';
                            
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