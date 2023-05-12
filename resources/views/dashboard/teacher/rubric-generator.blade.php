@extends('dashboard.teacher.layout')
@section('content')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Generador de rúbricas
    </h2>
</div>
<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    <div class="col-span-12 lg:col-span-4 2xl:col-span-4 flex lg:block flex-col-reverse">
        <div class="intro-y box mt-5">
            <form method="POST" action="{{ route('teacher.generateRubric') }}">
                @csrf
                <div class="relative flex items-center  p-5">
                    <div class="w-12 h-12 image-fit">
                        <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" id="Table">
                            <rect width="256" height="256" fill="none"></rect>
                            <path fill="none" stroke="#595bd4" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="16"
                                d="M32,56H224a0,0,0,0,1,0,0V192a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V56A0,0,0,0,1,32,56Z"
                                class="colorStroke000000 svgStroke"></path>
                            <line x1="32" x2="224" y1="104" y2="104" fill="none" stroke="#595bd4" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="16" class="colorStroke000000 svgStroke"></line>
                            <line x1="32" x2="224" y1="152" y2="152" fill="none" stroke="#595bd4" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="16" class="colorStroke000000 svgStroke"></line>
                            <line x1="88" x2="88" y1="104" y2="200" fill="none" stroke="#595bd4" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="16" class="colorStroke000000 svgStroke"></line>
                        </svg>
                    </div>
                    <div class="ml-6 mr-auto">
                        <div class="font-medium text-base">Generador de rúbricas</div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div>
                        <label for="curriculum" class="form-label">Currículo</label>
                        <select id="curriculum" name="curriculum" class="form-select">
                            <option value="Currículo Espanol - LOMLOE">Currículo Espanol - LOMLOE
                            </option>
                            <option value="Chile">Chile</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Peru">Peru</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="lesson-title" class="form-label">Grade</label>
                        <!-- Input for Lesson Title -->
                        <select id="grade-level" name="grade" class="form-select">
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
                        <label for="lesson-title" class="form-label">Tema</label>
                        <!-- Input for Lesson Title -->
                        <input required id="lesson-title" name="title" type="text" class="form-control"
                            placeholder="es decir, podcast" value="<?php echo htmlspecialchars($title); ?>">
                    </div>
                    <div class="mt-5">
                        <label for="lesson-title" class="form-label">Categoría 1</label>
                        <!-- Input for Lesson Title -->
                        <input required id="lesson-title" name="category_1" type="text" class="form-control"
                            placeholder="es decir, contenido" value="<?php echo htmlspecialchars($category_1); ?>">
                    </div>
                    <div class="mt-5">
                        <label for="lesson-title" class="form-label">Categoría 2</label>
                        <!-- Input for Lesson Title -->
                        <input required id="lesson-title" name="category_2" type="text" class="form-control"
                            placeholder="es decir, Organización" value="<?php echo htmlspecialchars($category_2); ?>">
                    </div>
                    <div class="mt-5">
                        <label for="lesson-title" class="form-label">Categoría 3</label>
                        <!-- Input for Lesson Title -->
                        <input required id="lesson-title" name="category_3" type="text" class="form-control"
                            placeholder="es decir, calidad" value="<?php echo htmlspecialchars($category_3); ?>">
                    </div>
                    <div class="mt-5">
                        <label for="lesson-title" class="form-label">Categoría 4</label>
                        <!-- Input for Lesson Title -->
                        <input required id="lesson-title" name="category_4" type="text" class="form-control"
                            placeholder="es decir, longitud" value="<?php echo htmlspecialchars($category_4); ?>">
                    </div>
                    <div class="mt-5 d-0" style="display: none">
                        <label for="lesson-description" class="form-label">Area Assessed</label>
                        <!-- Textarea for Lesson Description -->
                        <input required id="lesson-title" name="area_assessed" type="number" class="form-control"
                            placeholder="Area Assessed" value="2">
                    </div>
                </div>
                <div class="p-5 border-t justify-center mx-auto border-slate-200/60 dark:border-darkmode-400 flex">

                    <button type="submit" id="generate-btn" class="btn btn-primary px-2 py-2">
                        ✨Generar rúbrica
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
                    <li class="ml-4">
                        ¿Satisfecho con los resultados? Haga clic en "Descargar .DOCX" para descargar
                        la rúbrica generada.
                    </li>
                    <li class="ml-4">¿No satisfecho? Modifique los detalles para generar una rúbrica más apropiada.</li>
                </ul>
                <hr>
                <div class="overflow-x-auto">
                    @if (empty($rubric))
                    <div class="text-center">
                        <h5 class="font-medium mt-2 text-left py-2">Los resultados se mostrarán aquí. ¡Haz clic en
                            '✨Generar rúbrica para comenzar el proceso!
                        </h5>
                    </div>
                    @else
                    <table class="table-auto table-responsive w-full text-left whitespace-normal">
                        <thead>
                            <tr>
                                <th class="text-left px-4 py-3 border border-gray-300 text-gray-600 font-bold w-24">
                                    Category</th>
                                <th class="text-left px-4 py-3 border border-gray-300 text-gray-600 font-bold w-24">
                                    Excelente </th>
                                <th class="text-left px-4 py-3 border border-gray-300 text-gray-600 font-bold w-24">
                                    Satisfactorio
                                </th>
                                <th class="text-left px-4 py-3 border border-gray-300 text-gray-600 font-bold w-24">
                                    Mejorable </th>
                                <th class="text-left px-4 py-3 border border-gray-300 text-gray-600 font-bold w-24">
                                    Insuficiente
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rubric as $category => $ratings)
                            <tr>
                                <td class="text-left px-3 py-2 border border-gray-300 font-semibold">
                                    {{ $category }}</td>
                                @foreach ($ratings as $rating => $description)
                                <td class="text-left px-3 py-1 border border-gray-300">{{ $description }}
                                </td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
                {{-- paste the code here --}}
                <?php 
                if (!empty($rubric)) {
                    ?>
                <div class="my-2 mt-4 flex">
                    <a target="_blank"
                        href="{{ route('teacher.downloadRubric', ['rubric' => urlencode(json_encode($rubric))]) }}"
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
    <div class="col-span-12 mt-4 lg:col-span-12 2xl:col-span-12">
        <div class="container-fluid mx-auto w-full my-12">

        </div>
    </div>
</div>

<script>
    document.getElementById('generate-btn').addEventListener('click', function() {
            document.getElementById('spinner').classList.remove('hidden');
        });
</script>
@endsection