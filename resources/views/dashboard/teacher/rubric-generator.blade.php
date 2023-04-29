@extends('dashboard.teacher.layout')
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Explica un Concepto
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" id="mobile">
                                <g transform="translate(-113 -1248.426)">
                                    <path fill="#d7edff" fill-rule="evenodd"
                                        d="M174.501 1299.953v3.455a3.435 3.435 0 0 1-3.43 3.454H118.93c-1.9 0-3.46-1.54-3.43-3.454l.05-3.455">
                                    </path>
                                    <path fill="none" stroke="#1c4d7e" stroke-linejoin="round"
                                        d="M174.501 1299.953v3.455a3.435 3.435 0 0 1-3.43 3.454H118.93c-1.9 0-3.46-1.54-3.43-3.454l.05-3.455">
                                    </path>
                                    <path fill="#fff"
                                        d="M172.47 1281.989a2.748 2.748 0 0 0-2.745-2.764h-49.397a2.748 2.748 0 0 0-2.744 2.764l-2.03 17.964c0 2.073 1.135 4.146 3.789 4.146H170.3c2.655 0 4.201-2.073 4.201-4.146z">
                                    </path>
                                    <path fill="#d7edff" fill-rule="evenodd"
                                        d="m165.354 1279.416 1.372 21.919H122.91l1.373-21.919"></path>
                                    <path fill="#8fb6d7" fill-rule="evenodd"
                                        d="m123.78 1279.517-1.37 22.318h44.316l-.155-1.972H125.6c-1.1 0-1.04-.994-1.04-.994l1.159-19.352z">
                                    </path>
                                    <path fill="none" stroke="#1c4d7e" d="m120.528 1288.207-.412 4.146"></path>
                                    <ellipse cx="119.845" cy="1294.425" fill="#1c4d7e" rx=".686" ry=".691">
                                    </ellipse>
                                    <path fill="#f2f2f2"
                                        d="M169.845 1279.257a2.74 2.74 0 0 1 2.448 2.732l2.03 17.965c0 2.073-1.136 4.144-3.79 4.144h-50.957c-1.633 0-2.836-.786-3.524-1.873.338.081.693.137 1.079.137h50.957c2.653 0 3.789-2.074 3.789-4.146l-.043-.385c.022-.203.043-.408.043-.613l-2.032-17.961z">
                                    </path>
                                    <path fill="#f2f2f2"
                                        d="M120.03 1279.257a2.74 2.74 0 0 0-2.447 2.732l-2.03 17.965c0 2.073 1.136 4.144 3.79 4.144H170.3c1.633 0 2.836-.786 3.524-1.873a4.569 4.569 0 0 1-1.079.137h-50.957c-2.653 0-3.789-2.074-3.789-4.146l.043-.385a5.532 5.532 0 0 1-.043-.613l2.032-17.961z">
                                    </path>
                                    <path fill="none" stroke="#1c4d7e" stroke-linecap="round" stroke-linejoin="round"
                                        d="m165.354 1279.416 1.372 21.919H122.91l1.373-21.919"></path>
                                    <path fill="none" stroke="#1c4d7e"
                                        d="M172.47 1281.989a2.748 2.748 0 0 0-2.745-2.764h-49.397a2.748 2.748 0 0 0-2.744 2.764l-2.03 17.964c0 2.073 1.135 4.146 3.789 4.146H170.3c2.655 0 4.201-2.073 4.201-4.146z">
                                    </path>
                                    <ellipse cx="-19.44" cy="1305.815" fill="#d7edff" stroke="#1c4d7e"
                                        stroke-width="1.007" rx="1.377" ry="1.397"
                                        transform="matrix(.99978 .02112 .1447 .98948 0 0)"></ellipse>
                                </g>
                                <g transform="translate(-823.001 -1263.426)">
                                    <path fill="#ee7581"
                                        d="M843.5 1308.862v-9.5a9.48 9.48 0 0 1 9.5-9.5h4a9.48 9.48 0 0 1 9.5 9.5v9.5">
                                    </path>
                                    <path fill="#ee6276"
                                        d="M855.5 1289.862a9.48 9.48 0 0 1 9.5 9.5v9.5h1.5v-9.5a9.48 9.48 0 0 0-9.5-9.5h-1.5zm-2.5 0a9.48 9.48 0 0 0-9.5 9.5v9.5h1.5v-9.5a9.48 9.48 0 0 1 9.5-9.5H853z">
                                    </path>
                                    <path fill="none" stroke="#1c4d7e" d="M849.037 1303.6v5.38m-9.036-.118h30"></path>
                                    <g fill="#ff5855" color="#000">
                                        <path fill="#ee7581"
                                            d="m-121.545 1153.253 9.487 3.164c1.314.438 2.694-.277 3.162-1.581l1.607-4.473"
                                            overflow="visible" style="isolation:auto;mix-blend-mode:normal"
                                            transform="matrix(.85185 0 0 .85428 957.222 322.2)"></path>
                                        <path style="isolation:auto;mix-blend-mode:normal"
                                            d="m-119.014 1145.664 5.354 1.785m1.14-2.186-.977 2.239" overflow="visible"
                                            transform="matrix(.85185 0 0 .85428 957.222 322.2)"></path>
                                    </g>
                                    <path fill="none" stroke="#ee6276" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="0" style="isolation:auto;mix-blend-mode:normal"
                                        d="m853.087 1306.341 8.081 2.703c1.42.474 2.106.318 2.55-.687.86-1.98 1.183-3.023 1.87-4.685"
                                        color="#000" overflow="visible"></path>
                                    <path fill="#ffe1c0" stroke="#ee6276" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="0" style="isolation:auto;mix-blend-mode:normal"
                                        d="m850.163 1300.845-2.967-.983a.853.853 0 0 1-.539-1.08.85.85 0 0 1 1.078-.54l2.967.983-.808-.27 2.8.936.276.066c.192-.907.697-1.718 1.4-2.25l.02-.015a.938.938 0 0 1 1.625.44.916.916 0 0 1-.373.911l.112-.106c-.218.152-.417.422-.552.75a2.105 2.105 0 0 0-.161.984l.026.018a3.412 3.412 0 0 1 2.155 4.323 3.398 3.398 0 0 1-4.31 2.16l-.809-.27.508.17-3.945-1.414.013-.108c-.288-.097-.638-.178-.7-.477a.855.855 0 0 1 .27-.81.85.85 0 0 1 .835-.172h0a.854.854 0 0 1 .539-1.62h0a.856.856 0 0 1-.296-1.45.85.85 0 0 1 .835-.172"
                                        color="#000" overflow="visible"></path>
                                    <path fill="#ffe1c0" stroke="#66124a" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="0" style="isolation:auto;mix-blend-mode:normal"
                                        d="M964.028-1215.615a.854.852 0 0 1-.427.738.854.852 0 0 1-.854 0 .854.852 0 0 1-.427-.738"
                                        color="#000" overflow="visible" transform="rotate(108.393) skewX(-.098)">
                                    </path>
                                    <path fill="#f9b536" style="isolation:auto;mix-blend-mode:normal"
                                        d="M854.866 1300.589c.08.026 1.295.433 1.37.467a3.412 3.412 0 0 1 1.921 4.235 3.398 3.398 0 0 1-4.31 2.16l-1.926-.644"
                                        color="#000" overflow="visible"></path>
                                    <path fill="none" stroke="#ee6276" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="0" style="isolation:auto;mix-blend-mode:normal"
                                        d="M855.792 1300.936c.08.026 1.295.433 1.37.467a3.412 3.412 0 0 1 1.921 4.235 3.398 3.398 0 0 1-4.31 2.16l-1.927-.644"
                                        color="#000" overflow="visible"></path>
                                    <path fill="#ffe1c0" stroke="#1c4d7e" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="0"
                                        d="m849.481 1300.589-2.967-.983a.853.853 0 0 1-.538-1.081.85.85 0 0 1 1.077-.54l2.967.983-.808-.27 2.8.936.277.066c.192-.906.697-1.718 1.399-2.25l.02-.015a.938.938 0 0 1 1.625.44.916.916 0 0 1-.372.912l.111-.106c-.218.15-.417.422-.551.749a2.105 2.105 0 0 0-.162.984l.027.018a3.412 3.412 0 0 1 2.154 4.323 3.398 3.398 0 0 1-4.31 2.16l-.808-.27.507.17-4.066-1.36h0a.854.854 0 0 1 .54-1.62h0a.856.856 0 0 1-.296-1.45.85.85 0 0 1 .834-.171h0a.856.856 0 0 1-.296-1.45.85.85 0 0 1 .835-.171"
                                        color="#000" overflow="visible" style="isolation:auto;mix-blend-mode:normal">
                                    </path>
                                    <path fill="none" stroke="#1c4d7e" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="0"
                                        d="M854.866 1300.589c.08.026 1.295.433 1.37.467a3.412 3.412 0 0 1 1.921 4.235 3.398 3.398 0 0 1-4.31 2.16l-1.926-.644"
                                        color="#000" overflow="visible" style="isolation:auto;mix-blend-mode:normal">
                                    </path>
                                    <path fill="none" stroke="#1c4d7e" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="0" stroke-width="1.172"
                                        style="isolation:auto;mix-blend-mode:normal"
                                        d="m-121.545 1153.253 9.487 3.164c1.314.438 2.597-.316 3.162-1.581l2.312-5.176m-12.43-3.996 5.354 1.785m1.14-2.186-.977 2.239"
                                        color="#000" overflow="visible"
                                        transform="matrix(.85185 0 0 .85428 957.222 322.2)">
                                    </path>
                                    <path fill="none" stroke="#1c4d7e" stroke-linecap="round" stroke-linejoin="round"
                                        d="M843.5 1308.862v-9.5a9.48 9.48 0 0 1 9.5-9.5h4a9.48 9.48 0 0 1 9.5 9.5v9.5">
                                    </path>
                                    <path fill="#92828f"
                                        d="M860.482 1276.858h-10.808c-2.24 0-4.044-1.902-4.044-4.265 0-2.05 1.356-3.751 3.177-4.168l.017-.014v2.048c0 .59.475 1.066 1.065 1.066h10.116a2.658 2.658 0 0 1 2.662 2.666v3.199-1.6 3.2h-2.13v-2.133z"
                                        color="#000" overflow="visible" style="isolation:auto;mix-blend-mode:normal">
                                    </path>
                                    <path fill="#d7b2a9" style="isolation:auto;mix-blend-mode:normal"
                                        d="m848.824 1268.411-.016.014c-1.822.417-3.178 2.12-3.178 4.168 0 2.363 1.803 4.265 4.044 4.265h1.278c-2.24 0-4.045-1.902-4.045-4.265 0-1.539.765-2.883 1.917-3.632z"
                                        color="#000" overflow="visible"></path>
                                    <path fill="#a69199" style="isolation:auto;mix-blend-mode:normal"
                                        d="M858.727 1271.526a2.657 2.657 0 0 1 2.662 2.665V1278.99h1.278V1274.19a2.657 2.657 0 0 0-2.662-2.665z"
                                        color="#000" overflow="visible"></path>
                                    <rect width="5.111" height="5.506" x="852.444" y="1285.707" fill="#ffe1c0"
                                        stroke="#1c4d7e" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="0" color="#000" style="isolation:auto;mix-blend-mode:normal"
                                        overflow="visible" rx="2.556" ry="1.652"></rect>
                                    <path fill="#ffe1c0" style="isolation:auto;mix-blend-mode:normal"
                                        d="M860.963 1276.69v5.863c0 2.954-2.66 5.331-5.963 5.331s-5.963-2.377-5.963-5.33v-5.864z"
                                        color="#000" overflow="visible"></path>
                                    <path fill="#ffe1c0" stroke="#1c4d7e" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="0" style="isolation:auto;mix-blend-mode:normal"
                                        d="M861.389 1278.997a1.28 1.28 0 0 1 1.278 1.281 1.28 1.28 0 0 1-1.278 1.282"
                                        color="#000" overflow="visible"></path>
                                    <path fill="#92828f" stroke="#1c4d7e" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="0" d="M847.76 1276.464v2.525h1.277v-2.177" color="#000"
                                        overflow="visible" style="isolation:auto;mix-blend-mode:normal"></path>
                                    <ellipse style="isolation:auto;mix-blend-mode:normal" cx="852.702" cy="1280.962"
                                        fill="#1c4d7e" color="#000" overflow="visible" rx=".426" ry=".427">
                                    </ellipse>
                                    <ellipse cx="857.298" cy="1280.962" fill="#1c4d7e" color="#000"
                                        overflow="visible" rx=".426" ry=".427"
                                        style="isolation:auto;mix-blend-mode:normal"></ellipse>
                                    <path fill="none" stroke="#1c4d7e" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="0" style="isolation:auto;mix-blend-mode:normal"
                                        d="M853.306-1279.406a1.278 1.281 0 0 1-1.71-.488m6.808 0a1.278 1.281 0 0 1-.85.615 1.278 1.281 0 0 1-1.023-.23"
                                        color="#000" overflow="visible" transform="scale(1 -1)"></path>
                                    <path fill="#1c4d7e" style="isolation:auto;mix-blend-mode:normal"
                                        d="M857.13 1283.524a2.13 2.136 0 0 1-1.065 1.85 2.13 2.136 0 0 1-2.13 0 2.13 2.136 0 0 1-1.064-1.85H855z"
                                        color="#000" overflow="visible"></path>
                                    <path fill="#ee9485" style="isolation:auto;mix-blend-mode:normal"
                                        d="M854.993 1284.045a1.161 1.164 0 0 0-.607.155 1.161 1.164 0 0 0-.472.52 1.706 1.711 0 0 0 .232.164 1.706 1.711 0 0 0 1.708 0 1.706 1.711 0 0 0 .184-.125 1.161 1.164 0 0 0-.49-.559 1.161 1.164 0 0 0-.555-.155z"
                                        color="#000" overflow="visible"></path>
                                    <path fill="#ffe1c0" stroke="#1c4d7e" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="0"
                                        d="M848.611 1278.997a1.28 1.28 0 0 0-1.278 1.281 1.28 1.28 0 0 0 1.278 1.282"
                                        color="#000" overflow="visible" style="isolation:auto;mix-blend-mode:normal">
                                    </path>
                                    <path fill="#f7d0b0" style="isolation:auto;mix-blend-mode:normal"
                                        d="M858.833 1276.69v5.864c0 2.627-2.107 4.793-4.898 5.24.346.055.7.09 1.065.09 3.303 0 5.963-2.377 5.963-5.33v-5.864h-2.13z"
                                        color="#000" overflow="visible"></path>
                                    <path fill="#ffebca" style="isolation:auto;mix-blend-mode:normal"
                                        d="M849.037 1276.69v5.864c0 2.953 2.66 5.33 5.963 5.33.364 0 .719-.035 1.065-.09-2.791-.447-4.898-2.613-4.898-5.24v-5.864h-2.13z"
                                        color="#000" overflow="visible"></path>
                                    <path fill="none" stroke="#1c4d7e" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="0"
                                        d="M860.963 1276.69v5.863c0 2.954-2.66 5.331-5.963 5.331s-5.963-2.377-5.963-5.33v-5.864z"
                                        color="#000" overflow="visible" style="isolation:auto;mix-blend-mode:normal">
                                    </path>
                                    <path fill="none" stroke="#1c4d7e" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="0" style="isolation:auto;mix-blend-mode:normal"
                                        d="M860.936 1276.687h-11.262c-2.24 0-4.044-1.902-4.044-4.265 0-2.05 1.356-3.752 3.177-4.168l.017-.014v2.048c0 .59.475 1.066 1.065 1.066h10.116a2.658 2.658 0 0 1 2.662 2.666v3.199-1.6 3.199h-1.677v-2.132z"
                                        color="#000" overflow="visible"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="ml-6 mr-auto">
                            <div class="font-medium text-base">Explica un Concepto</div>
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
                            <input required id="lesson-title" name="grade" type="number" class="form-control"
                                placeholder="ej. Sustantivos y pronombres" value="<?php echo htmlspecialchars($grade); ?>">
                        </div>
                        <div class="mt-5">
                            <label for="lesson-title" class="form-label">Title</label>
                            <!-- Input for Lesson Title -->
                            <input required id="lesson-title" name="title" type="text" class="form-control"
                                placeholder="ej. Sustantivos y pronombres" value="<?php echo htmlspecialchars($title); ?>">
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
                            ✨Explicar concepto
                            <span id="spinner" class="hidden">
                                <svg width="25" viewBox="-2 -2 42 42" xmlns="http://www.w3.org/2000/svg"
                                    stroke="white" class="w-4 h-4 ml-2">
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
                        <li class="ml-4">¿Satisfecho con los resultados? Haga clic en "Descargar .DOCX" o "Descargar
                            .PDF"
                            para descargar el
                            documento con la explicación del concepto.
                        </li>
                        <li class="ml-4">¿No satisfecho? Modifique la edad del estudiante, el nombre del tema y el nombre
                            de
                            la asignatura
                            para generar una explicación del concepto más adecuada.</li>
                    </ul>
                    <hr>
                    <div class="overflow-x-auto">
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
                                            <td class="text-left px-3 py-1 border border-gray-300">{{ $description }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- paste the code here --}}
                    <?php 
                if (!empty($rubric)) {
                    ?>
                    <div class="my-2 flex">
                        <a target="_blank"
                            href="{{ route('teacher.downloadRubric', ['rubric' => urlencode(json_encode($rubric))]) }}"
                            class="btn btn-primary">Descargar.DOCX</a>
                    </div>
                    <?php
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
