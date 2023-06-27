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
        Manejo de Comportamiento</h2>
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
            <form method="POST" action="{{ route('teacher.generateBehavior') }}">
                @csrf
                <div class="relative flex items-center p-5">
                    <div class="w-12 mr-2 h-12 image-fit">
                        <svg style="width: 58px; !important" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                            viewBox="0 0 64 64" id="Moody">
                            <path
                                d="M33 25V10H31V24.32324l-9.37109 3.74805.74218 1.85742 10-4A1.00045 1.00045 0 0 0 33 25zM36.87872 43.85388H33.15118a5 5 0 1 0-2.30236 0H27.12128A3 3 0 0 0 25 44.7326L19.75818 48 13 46.85388V50l6.48523 2.72406A.5.5 0 0 0 20 52.67255L25 51V62H39V51l5 1.67255a.5.5 0 0 0 .51477.05151L51 50V46.85388l-6.75818 1L39 44.7326A3 3 0 0 0 36.87872 43.85388zM51 2A11 11 0 1 0 62 13 11 11 0 0 0 51 2zM44.12927 9.45093A1.00329 1.00329 0 0 1 45.10992 8h.00171a1.05051 1.05051 0 0 1 .92017.46472 1.14327 1.14327 0 0 0 1.9364 0A1.05051 1.05051 0 0 1 48.88837 8h.00171a1.00329 1.00329 0 0 1 .98065 1.45093 3.43455 3.43455 0 0 1-5.74146 0zM55.78131 19a1.04051 1.04051 0 0 1-.91864-.47607C54.41376 17.73309 52.908 17 51 17s-3.41376.73309-3.86267 1.52393A1.04051 1.04051 0 0 1 46.21869 19a.95937.95937 0 0 1-.8479-1.41174C46.20953 16.06171 48.38464 15 51 15s4.79047 1.06171 5.62921 2.58826A.95937.95937 0 0 1 55.78131 19zm2.08942-9.54907a3.43455 3.43455 0 0 1-5.74146 0A1.00329 1.00329 0 0 1 53.10992 8h.00171a1.05051 1.05051 0 0 1 .92017.46472 1.14327 1.14327 0 0 0 1.9364 0A1.05051 1.05051 0 0 1 56.88837 8h.00171A1.00329 1.00329 0 0 1 57.87073 9.45093zM13 24A11 11 0 1 0 2 13 11 11 0 0 0 13 24zM15.10992 8h.00171a1.05051 1.05051 0 0 1 .92017.46472 1.14327 1.14327 0 0 0 1.9364 0A1.05051 1.05051 0 0 1 18.88837 8h.00171a1.00329 1.00329 0 0 1 .98065 1.45093 3.43455 3.43455 0 0 1-5.74146 0A1.00329 1.00329 0 0 1 15.10992 8zm1.75275 7.47607A1.04051 1.04051 0 0 1 17.78131 15a.95937.95937 0 0 1 .8479 1.41174C17.79047 17.93829 15.61536 19 13 19s-4.79047-1.06171-5.62921-2.58826A.95937.95937 0 0 1 8.21869 15a1.04051 1.04051 0 0 1 .91864.47607C9.58624 16.26691 11.092 17 13 17S16.41376 16.26691 16.86267 15.47607zM7.10992 8h.00171a1.05051 1.05051 0 0 1 .92017.46472 1.14327 1.14327 0 0 0 1.9364 0A1.05051 1.05051 0 0 1 10.88837 8h.00171a1.00329 1.00329 0 0 1 .98065 1.45093A3.34132 3.34132 0 0 1 9 11 3.34132 3.34132 0 0 1 6.12927 9.45093 1.00329 1.00329 0 0 1 7.10992 8zM23.61914 4.65234L24.38086 6.502a20.1551 20.1551 0 0 1 15.23828 0l.76172-1.84961A22.17143 22.17143 0 0 0 23.61914 4.65234z"
                                fill="#595bd4" class="color000000 svgShape"></path>
                            <path
                                d="M12.02246 25.95312l-1.99805.09376a22.12648 22.12648 0 0 0 11.499 18.30273l.95312-1.75781A20.1136 20.1136 0 0 1 12.02246 25.95312zM53.97559 26.04688l-1.998-.09376A20.1136 20.1136 0 0 1 41.52344 42.5918l.95312 1.75781A22.12648 22.12648 0 0 0 53.97559 26.04688z"
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
                        <div class="font-medium text-base">Comportamiento: Estrategias para manejar el Comportamiento en
                            el aula</div>
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
                        <label for="lesson-description" class="form-label">Problemas de comportamiento</label>
                        <!-- Textarea for Lesson Description -->
                        <textarea id="lesson-description"
                            placeholder="Interrupción de bajo nivel, levantarse del asiento, discutir entre ellos, etc."
                            name="issues" class="form-control h-40"><?php echo htmlspecialchars($issues); ?></textarea>
                    </div>
                </div>
                <div class="p-5 border-t justify-center mx-auto border-slate-200/60 dark:border-darkmode-400 flex">

                    <button type="submit" id="generate-btn" class="btn btn-primary px-2 py-2">
                        ✨Generar estrategia
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
                    <li class="ml-4">¿No satisfecho? Modificar la descripción para modificar aún más
                        el
                        resultados.</li>
                </ul>
                <div class="my-10">
                    <?php
                    if (empty($behavior)) {
                        echo "Los resultados se mostrarán aquí. ¡Haz clic en '✨Generar estrategia' para comenzar el proceso!";
                    } else {
                  
                    echo '<div class="font-medium text-md">' . nl2br($behavior) . '</div>';
                    }
                    ?>
                </div>
                <?php 
                if (!empty($behavior)) {
                    ?>
                <div class="my-2 flex">
                    <a target="_blank"
                        href="{{ route('teacher.downloadBehaviorDocx', ['behavior' => urlencode(json_encode($behavior))]) }}"
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