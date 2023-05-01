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
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 512 512" id="cube">
                            <path fill="#00efd1"
                                d="M411.59 129.53a35.063 35.063 0 0 1 3.43-5.85 35.983 35.983 0 1 1-3.43 5.85zM411.23 384.41a35.882 35.882 0 1 1 11.85 14.71A35.857 35.857 0 0 1 411.23 384.41z">
                            </path>
                            <path fill="#f4b844"
                                d="M444.04,180.62V334.13a35.892,35.892,0,0,0-32.81,50.28L289.61,440.37l-.37.15a35.93,35.93,0,0,0-33.51-22.58V267.17a35.9,35.9,0,0,0,32.86-50.71l.17-.08,122.67-56.81a35.91,35.91,0,0,0,32.61,21.05Z">
                            </path>
                            <path fill="#fedb41"
                                d="M288.76,73.01l122.83,56.52a35.874,35.874,0,0,0-.16,30.04L288.76,216.38l-.17.08a35.911,35.911,0,0,0-65.45.12l-121.5-56.27-.21-.1a35.854,35.854,0,0,0-.16-31.32l.4-.19L223.13,72.82a35.892,35.892,0,0,0,61.85,6.38,36.505,36.505,0,0,0,3.63-6.25Z">
                            </path>
                            <path fill="#00efd1"
                                d="M222.5 440.67a35.9 35.9 0 1 1 12.36 42.25A35.657 35.657 0 0 1 222.5 440.67zM223.13 72.82a35.9 35.9 0 1 1 65.48.13 36.505 36.505 0 0 1-3.63 6.25 35.892 35.892 0 0 1-61.85-6.38zM223.14 216.58a35.9 35.9 0 1 1 11.72 43.78A35.825 35.825 0 0 1 223.14 216.58z">
                            </path>
                            <path fill="#00acea"
                                d="M255.73,267.17V417.94a35.908,35.908,0,0,0-33.23,22.73L100.72,384.63l-.21-.09a35.887,35.887,0,0,0-33.09-50.4V180.58a35.888,35.888,0,0,0,34.01-20.37l.21.1,121.5,56.27a35.9,35.9,0,0,0,32.59,50.59Z">
                            </path>
                            <path fill="#00efd1"
                                d="M67.42 180.58a35.888 35.888 0 1 1 30.72-14.83A35.812 35.812 0 0 1 67.42 180.58zM88.71 340.94a35.907 35.907 0 0 1 11.8 43.6 35.5 35.5 0 0 1-3.74 6.52 35.89 35.89 0 1 1-8.06-50.12z">
                            </path>
                            <path fill="#083863"
                                d="M479.663,170.438A43.891,43.891,0,1,0,408.532,119c-.058.079-.108.162-.166.242L298.509,68.69A44.072,44.072,0,0,0,281.617,22.6a43.871,43.871,0,0,0-68.344,45.95L104.365,118.654a44.208,44.208,0,0,0-9.595-9.506A43.958,43.958,0,0,0,43.134,180.3,49.367,49.367,0,0,0,59,187.548V326.935a46.065,46.065,0,0,0-27.1,17.376,43.97,43.97,0,0,0,71.335,51.428c.2-.283.405-.576.6-.863l109.04,50.174A43.924,43.924,0,0,0,255.8,497.74a44.564,44.564,0,0,0,7.058-.566,43.893,43.893,0,0,0,36.011-52.26l108.992-50.149a43.861,43.861,0,0,0,36.156,19.174,44.511,44.511,0,0,0,7.063-.567,43.895,43.895,0,0,0,18.734-78.915A46.023,46.023,0,0,0,452,326.841V187.883A44.126,44.126,0,0,0,479.663,170.438ZM408.516,344.314a44.091,44.091,0,0,0-7.105,35.805L292.8,430.1a43.34,43.34,0,0,0-11.05-11.829A45.558,45.558,0,0,0,264,410.635V274.455A43.8,43.8,0,0,0,298.539,220.7L408.2,169.9a43.869,43.869,0,0,0,10.2,10.4,45.58,45.58,0,0,0,17.6,7.575v139.02A43.906,43.906,0,0,0,408.516,344.314Zm-188.054,83.8c-.5.685-1.032,1.387-1.486,2.1L110.392,380.258a44.291,44.291,0,0,0-17.192-45.8A41.578,41.578,0,0,0,75,326.807V188.135a43.346,43.346,0,0,0,29.373-17.646l108.786,50.333a44.209,44.209,0,0,0,17.1,46.021A40.568,40.568,0,0,0,248,274.407V410.721A44.141,44.141,0,0,0,220.462,428.113Zm9.71-334.38A43.584,43.584,0,0,0,255.8,102.07a44.458,44.458,0,0,0,7.058-.567,43.6,43.6,0,0,0,28.61-17.628c.146-.2.279-.412.422-.617l109.722,50.488a43.717,43.717,0,0,0-.087,21.59L291.867,206.125a43.883,43.883,0,0,0-71.54-.572c-.164.226-.313.46-.473.689L111.442,156.033a44.382,44.382,0,0,0-.1-22.977L219.816,83.151A43.867,43.867,0,0,0,230.172,93.733ZM255.858,259h-.1a27.455,27.455,0,0,1-16.209-5.206A28.1,28.1,0,1,1,255.858,259Zm163-126.124a27.125,27.125,0,0,1,2.645-4.506A27.956,27.956,0,1,1,444.071,173h-.02a28.231,28.231,0,0,1-25.195-40.124ZM233.293,41.817a27.7,27.7,0,0,1,18.174-11.193,28.22,28.22,0,0,1,4.485-.36,27.91,27.91,0,0,1,25.373,39.381,28.607,28.607,0,0,1-2.828,4.868,27.892,27.892,0,0,1-48.062-4.955A28,28,0,0,1,233.293,41.817ZM46.441,128.37a27.917,27.917,0,0,1,38.947-6.261,27.57,27.57,0,0,1,8.7,10.308,27.9,27.9,0,0,1-26.313,40.171h0A27.9,27.9,0,0,1,46.441,128.37ZM93.2,381.3l-.015.035a27.588,27.588,0,0,1-2.895,5.042,27.916,27.916,0,1,1-45.213-32.757A27.516,27.516,0,0,1,67.485,342h.231a27.75,27.75,0,0,1,16.3,5.351A28.106,28.106,0,0,1,93.2,381.3Zm185.3,88.887A27.886,27.886,0,1,1,255.773,426h.155A27.838,27.838,0,0,1,278.5,470.183Zm188.219-83.808a27.883,27.883,0,0,1-48.156-5.17,27.993,27.993,0,0,1,25.5-39.2h.078a28.009,28.009,0,0,1,22.576,44.375Z">
                            </path>
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
                            <option value="Spanish National Curriculum/LOMLOE">Spanish National Curriculum/LOMLOE
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
                        <label for="lesson-title" class="form-label">Topic</label>
                        <!-- Input for Lesson Title -->
                        <input required id="lesson-title" name="title" type="text" class="form-control"
                            placeholder="es decir, podcast" value="<?php echo htmlspecialchars($title); ?>">
                    </div>
                    <div class="mt-5">
                        <label for="lesson-title" class="form-label">Category #1</label>
                        <!-- Input for Lesson Title -->
                        <input required id="lesson-title" name="category_1" type="text" class="form-control"
                            placeholder="es decir, contenido" value="<?php echo htmlspecialchars($category_1); ?>">
                    </div>
                    <div class="mt-5">
                        <label for="lesson-title" class="form-label">Category #2</label>
                        <!-- Input for Lesson Title -->
                        <input required id="lesson-title" name="category_2" type="text" class="form-control"
                            placeholder="es decir, Organización" value="<?php echo htmlspecialchars($category_2); ?>">
                    </div>
                    <div class="mt-5">
                        <label for="lesson-title" class="form-label">Category #3</label>
                        <!-- Input for Lesson Title -->
                        <input required id="lesson-title" name="category_3" type="text" class="form-control"
                            placeholder="es decir, calidad" value="<?php echo htmlspecialchars($category_3); ?>">
                    </div>
                    <div class="mt-5">
                        <label for="lesson-title" class="form-label">Category #4</label>
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