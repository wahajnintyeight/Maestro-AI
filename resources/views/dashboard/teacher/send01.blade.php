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
        Estrategias para Alumnos con Dificultades Específicas de Aprendizaje</h2>
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
            <form method="POST" action="{{ route('teacher.generateSendSupport') }}">
                @csrf
                <div class="relative flex items-center p-5">
                    <div class="w-12 mr-2 h-12 image-fit">
                        <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="Student">
                            <path
                                d="m59.3 12.6-27-10c-.2-.1-.5-.1-.7 0l-27 10c-.3.1-.6.5-.6.9s.3.8.7.9l9.3 3.5v5.6c0 .2 0 .3.1.5.1.1.6 1.1 1.9 2.3 0 .1-.1.2-.1.3v.1c-2.8.5-5 2.9-5 5.9s2.2 5.4 5 5.9V38.8c0 .1.8 5.1 4.5 9.1-5.3 2.6-9.6 7-12.1 12.4-.1.3-.1.7.1 1 .2.3.5.5.8.5h45.4c.3 0 .7-.2.8-.5s.2-.6.1-1c-2.5-5.4-6.8-9.7-12.1-12.4 3.6-4 4.5-9 4.5-9.1V38.5c2.8-.5 5-2.9 5-5.9s-2.2-5.4-5-5.9v-.1c0-.1 0-.2-.1-.3 1.3-1.2 1.9-2.1 1.9-2.3.1-.2.1-.3.1-.5v-5.6l4-1.5v8.3c-1.2.4-2 1.5-2 2.8 0 1.7 1.3 3 3 3s3-1.3 3-3c0-1.3-.8-2.4-2-2.8v-9l3.3-1.2c.4-.1.7-.5.7-.9s-.1-.9-.5-1zM55 28.5c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm-37-.7c1.2.8 2.6 1.6 4.4 2.2-.7.9-2.2 2.1-4.4 2.4v-4.6zm-5 4.7c0-1.9 1.3-3.4 3-3.9v7.7c-1.7-.4-3-1.9-3-3.8zm9 16.7c1.6 1.3 3.6 2.4 6.1 2.9l4.1 7.4H10.8c2.6-4.6 6.5-8.2 11.2-10.3zm8.7 3.3h2.6L32 54.7l-1.3-2.2zm22.4 7H34.6L33 56.7l2.8-4.6c2.5-.5 4.5-1.6 6.1-2.9 4.8 2.1 8.7 5.7 11.2 10.3zM46 38.4c-.2 1.1-2.3 12.1-14 12.1-11.6 0-13.8-11-14-12.1v-4c3.7-.4 5.7-2.7 6.5-3.8.9.2 1.8.4 2.8.6.5.8 3.5 4.8 8.5 5.7.7.1 1.4.2 2.1.2h.1v.5c0 .6.4 1 1 1s1-.4 1-1v-.7c2-.3 4-1.2 6-2.4v3.9zm0-6.4c-3.4 2.5-6.8 3.5-9.8 2.9-2.8-.5-4.9-2.2-6.1-3.5.6 0 1.3.1 1.9.1 6.8 0 11.2-1.8 14-3.7V32zm5 .5c0 1.9-1.3 3.4-3 3.9v-7.7c1.7.4 3 1.9 3 3.8zm-3-9.3c-.8 1.1-4.9 6.3-16 6.3s-15.2-5.2-16-6.3v-4.6l15.7 5.8c.1 0 .2.1.3.1s.2 0 .3-.1L48 18.6v4.6zm-16-.8L7.9 13.5 32 4.6l24.1 8.9L32 22.4z"
                                fill="#595bd4" class="color000000 svgShape"></path>
                            <path
                                d="M25 34.5c-.6 0-1 .4-1 1v2c0 .6.4 1 1 1s1-.4 1-1v-2c0-.6-.4-1-1-1zm12.3 9.1c-.5-.2-1.1.1-1.3.6 0 0-.8 2.3-4.1 2.3-3.2 0-4-2.2-4.1-2.3-.2-.5-.7-.8-1.3-.6-.5.2-.8.7-.6 1.3.1.2 1.3 3.7 5.9 3.7s5.9-3.5 5.9-3.7c.4-.6.1-1.2-.4-1.3z"
                                fill="#595bd4" class="color000000 svgShape"></path>
                        </svg>
                        {{-- <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
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
                        </svg> --}}
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">Estrategias para Alumnos con Dificultades Específicas de
                            Aprendizaje</div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">

                    <div class="mt-2">
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
                        <label for="lesson-description" class="form-label">Dificultades Especificas De
                            Aprendizaje</label>
                        <!-- Textarea for Lesson Description -->
                        <textarea id="lesson-description"
                            placeholder="Intente algo como esto: Escriba un plan de lección sobre la primera guerra mundial. Incluye una actividad dinámica en grupo."
                            name="focus" class="form-control h-40"><?php echo htmlspecialchars($focus); ?></textarea>
                    </div>
                </div>
                <div class="p-5 border-t justify-center mx-auto border-slate-200/60 dark:border-darkmode-400 flex">

                    <button type="submit" id="generate-btn" class="btn btn-primary px-2 py-2">
                        ✨Genera Asesoramiento
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
                    if (empty($send)) {
                        echo "Los resultados se mostrarán aquí. ¡Haz clic en '✨Generar plan de lección' para comenzar el proceso!";
                    } else {
                  
                    echo '<div class="font-medium text-md">' . nl2br($send) . '</div>';
                    }
                    ?>
                </div>
                <?php 
                if (!empty($send)) {
                    ?>
                <div class="my-2 flex">
                    <a target="_blank"
                        href="{{ route('teacher.downloadSendSupportDocx', ['send' => urlencode(json_encode($send))]) }}"
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