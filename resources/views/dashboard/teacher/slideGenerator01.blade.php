@extends('dashboard.teacher.layout')
@section('content')
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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
        /* width: 10in; */
        height: 5.625in;
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
    }

    .editable-slides-default .slide h3:focus,
    .editable-slides-default .slide p:focus {
        outline: none;
        border: 1px solid #007bff;
        border-radius: 4px;
    }

    /* Responsiveness */
    @media (max-width: 1200px) {
        .editable-slides-default .slide {
            width: 8in;
            height: 4.5in;
        }

        .editable-slides-default .slide h3 {
            font-size: 24px;
        }

        .editable-slides-default .slide p {
            font-size: 16px;
        }
    }

    @media (max-width: 992px) {
        .editable-slides-default .slide {
            width: 6in;
            height: 3.375in;
        }

        .editable-slides-default .slide h3 {
            font-size: 20px;
        }

        .editable-slides-default .slide p {
            font-size: 14px;
        }
    }

    @media (max-width: 768px) {
        .editable-slides-default .slide {
            width: 6in;
            height: 4.25in;
        }

        .editable-slides-default .slide h3 {
            font-size: 16px;
        }

        .editable-slides-default .slide p {
            font-size: 12px;
        }
    }

    @media (max-width: 576px) {
        .editable-slides-default .slide {
            width: 100%;
            height: auto;
        }

        .editable-slides-default .slide h3 {
            font-size: 14px;
        }

        .editable-slides-default .slide p {
            font-size: 10px;
        }
    }
</style>

<?php 

?>
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Generador de Presentaciones
    </h2>
</div>

<div id="success-modal-preview" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
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
</div>

<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    <div class="col-span-12 lg:col-span-4 2xl:col-span-4 flex lg:block flex-col-reverse">
        <div class="intro-y box mt-5">
            <form method="POST" action="{{route('teacher.generateSlides')}}">
                @csrf
                <div class="relative flex items-center p-5">
                    <div class="w-12 mr-2 h-12 image-fit">
                        <svg style="width: 58px; !important" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"
                            id="presentation">
                            <path fill="#595bd4"
                                d="M59.12972,4.77628h-48c-4.18939-.054-4.18835,8.05383,0,8v6.44793c-3.73126-1.81524-7.759,3.16327-5.20562,6.7627a3.88329,3.88329,0,0,0,1.92779,6.02814,8.50824,8.50824,0,0,0,4.90772,6.95575v.9591C2.19894,38.90323-1.68973,57.45407,5.12936,58.77732c11.012-1.86335,31.02569,7.14923,23.91589-13.001h5.08447v2.59784A4.02661,4.02661,0,0,0,32.019,52.9036a3.63071,3.63071,0,0,0,5.2398,2.3988c1.57038-.97314,2.80017-3.06818,1.63233-4.79779-.44922-.79181-1.05506-1.80609-2.07154-1.825a3.90306,3.90306,0,0,0-.68988-.30689V45.77628c33.96888,1.11853,20.401.79583,23-33C63.3182,12.83035,63.31875,4.72232,59.12972,4.77628ZM21.30062,6.89871c8.65222-.292,20.97772-.8396,29.46411-.4024a7.179,7.179,0,0,0-2.15,2.12653c-1.05573-.06092-2.16272-.11377-3.30658-.15882.4245-.25964,1.217-.613,1.01764-1.13269a.4593.4593,0,0,0-.53925-.26465,4.57215,4.57215,0,0,0-2.19787,1.33643q-1.03-.03251-2.089-.05664A8.66779,8.66779,0,0,0,42.055,7.64a.45054.45054,0,0,0-.50287-.65418,5.65892,5.65892,0,0,0-2.3078,1.31842q-1.04782-.01528-2.10681-.02289c.40637-.28485,1.77276-1.21862.71289-1.50769a7.98722,7.98722,0,0,0-3.19172,1.50061c-1.39508.002-2.788.01349-4.16021.03546a3.94539,3.94539,0,0,0,1.22308-.947.40055.40055,0,0,0-.34405-.59954,9.50993,9.50993,0,0,0-2.80671,1.58483c-.95971.0224-1.90521.04957-2.82818.08216.25921-.31647.88006-.60156.72052-1.07813a.41333.41333,0,0,0-.38562-.25934A4.13927,4.13927,0,0,0,23.08383,8.542c-1.63.07965-3.16108.17676-4.54944.292C19.43368,8.21939,20.75735,7.87845,21.30062,6.89871ZM10.78872,9.87522a.63865.63865,0,0,0-.10571.75891c-1.0542-.69867-.87085-3.85712.44629-3.85785.26208.36334,3.72863.32727,8.71258.17029-.77.49981-1.50256,1.04119-2.25763,1.56079a.39106.39106,0,0,0-.16388.42627c-1.43084.137-2.67462.29535-3.67651.47522.49329-.32758,2.183-1.72608.96887-2.06556a3.93055,3.93055,0,0,0-2.07666,1.04682A13.23058,13.23058,0,0,0,10.78872,9.87522ZM9.19613,20.88016c6.70166,4.53656,12.17877-6.12659,14.9342,2.78278C21.82314,30.374,16.85458,27.35306,12.8287,24.9064a.97469.97469,0,0,0-1.63123-1.01483c-.54352.47162-.68933,1.2237-1.23095,1.69025a1.39235,1.39235,0,0,1-1.585.22809C7.44912,24.143,5.86819,21.73917,9.19613,20.88016ZM9.8099,31.14639c-.39807-1.51123-3.80042-1.21789-2.44824-3.72522.912.04328,1.463.47992,2.34478.3949a3.39373,3.39373,0,0,0,2.1637-1.21466c1.98584,2.81909,7.59021,4.049,10.25958,2.34339C23.94351,38.43472,10.52371,41.38187,9.8099,31.14639Zm9.41455,10.76807,2.84375.50879-2.07666,2.07666L17.952,43.18839C18.01077,43.12851,19.161,41.98093,19.22445,41.91446ZM17.22884,46.972a.46241.46241,0,0,0-.51617-.21,4.9531,4.9531,0,0,0-1.92975,1.44458c.48956-5.38544,2.31818-4.99341,2.7251.27581a7.04789,7.04789,0,0,0-2.94769,2.4278c.02179-.35364.0459-.7077.07251-1.05945a11.13292,11.13292,0,0,1,1.70459-1.63031C16.70229,47.91818,17.492,47.54733,17.22884,46.972Zm-2.46923-7.40851a7.52219,7.52219,0,0,0,2.73-.0509,2.51137,2.51137,0,0,1-1.16169,2.47161C15.88857,41.50223,14.37936,40.373,14.75961,39.56351Zm-.06617,12.86816a9.78376,9.78376,0,0,1,2.949-2.39038c.05768.79328.10266,1.59821.14,2.36365-1.34094.00018-2.42077,1.17242-3.39428,1.98614.02459-.55346.051-1.17169.08221-1.822A.41181.41181,0,0,0,14.69344,52.43167ZM13.368,41.85294l1.17286,1.17285-2.27539,1.47168-2.0752-2.07471ZM12.19869,56.77628c-.90387-.37207-8.28564.96789-8.069-1-.11438-4.29334-.53381-10.28565,4.09119-12.49475.90662.49371,3.40918,4.62756,4.71826,3.16223Zm4.461,0a5.20423,5.20423,0,0,0,.84168-.99933.38938.38938,0,0,0-.52912-.529,6.80373,6.80373,0,0,0-1.15869.9917.494.494,0,0,0-.10571.53668H14.20394a7.19822,7.19822,0,0,0,.13172-1.30011c.5448.31982.94659-.34448,1.356-.61139.47766-.4065,1.50867-.9563,2.13794-1.43891a26.98253,26.98253,0,0,0,.22595,3.35041Zm11.46027-1c.2409,1.96582-7.18707.62988-8.05927,1l-.741-10.33228a1.09868,1.09868,0,0,0,1.517.03925l3.19343-3.19336C28.655,45.48038,28.2344,51.495,28.12,55.77628Zm8.08954-4.97217a3.18974,3.18974,0,0,1,.82409,1.243c.02454.19342-.16137.42975-.27606.59747-.29315.28-.51141.70771-.93432.79358.0227.02973-.13855.027-.17408.04352-.0589-.0058-.15222-.00366-.245-.01141-.00238-.0047-.13257-.00116-.13581-.02789-1.792-.2746-1.27679-3.711.61506-3.01844A2.11757,2.11757,0,0,0,36.2095,50.80411Zm20.92022-7.02783H27.7369c-1.77136-2.49243-5.26367-3.64331-8.24731-3.846V38.82114c4.14233-1.8028,5.03485-6.96039,4.63971-11.18494,4.22711-3.418,1.0285-9.27234-3.57148-9.83258-3.264-.46857-4.40216,3.02033-7.4281,2.35407V10.77628h44ZM57.816,8.59134a3.58768,3.58768,0,0,0-.85888.90173c-.65076-.12957-1.42426-.2489-2.30262-.35791.54187-.25329,2.24042-1.37548.963-1.75366a6.479,6.479,0,0,0-3.09845,1.52576c-.79566-.07276-1.64777-.13892-2.54181-.19916.46-.38214.95086-.72851,1.4071-1.11.24311-.2768.68708-.6344.482-1.03833,3.423.22161,6.10315.62817,7.48492,1.311A2.33308,2.33308,0,0,0,57.816,8.59134Zm2.31372,1.18494a1.0013,1.0013,0,0,1-1,1c.32038-.3534-.01-.66931-.84393-.94818.53626-.45832,1.87805-.74018,1.54791-1.66474A1.05794,1.05794,0,0,1,60.12972,9.77628Z"
                                class="color4d4d4d svgShape"></path>
                            <path fill="#595bd4"
                                d="M30.68917 19.92642a.57054.57054 0 00.57739.06665c6.56647.93964 13.316.40033 19.93763.55451 1.53558.12945 1.44372-2.51965-.30219-2.23273-5.39386.52893-10.87506.21991-16.298.31879-.92121.0011-1.84448.0011-2.76538.01611-.47644.00775-1.11627-.03064-1.36078.47089A.601.601 0 0030.68917 19.92642zM30.83456 25.45139c5.117.36993 10.25476.11389 15.383.23883 1.64411-.11457 3.40412.39544 4.95826-.23175a.95722.95722 0 00-.00007-1.63947c-1.53369-.68353-3.48663-.2315-5.15289-.37616a102.37 102.37 0 00-15.35339.78845C29.93551 24.3552 30.184 25.39713 30.83456 25.45139zM49.11752 31.31717c.94842.03943 3.06183.39069 2.8844-1.17474-.15564-1.37366-2.14081-1.10944-3.13434-1.13684a61.34788 61.34788 0 00-9.24793.44555 2.70477 2.70477 0 00-1.69873.5932.63892.63892 0 00.15308 1.00177c.46045.38288 1.21521.27411 1.79816.27118C42.95195 31.17964 46.03684 31.20208 49.11752 31.31717zM51.42654 34.93973a32.22421 32.22421 0 00-10.40131.85944.73012.73012 0 00.19318 1.42736c3.39453.034 6.84143.13562 10.20813-.02649A1.1814 1.1814 0 0051.42654 34.93973zM35.97329 50.55283c-.0805-.09192-.11493-.13318.0354.05072C35.993 50.58432 35.98715 50.57065 35.97329 50.55283zM35.26833 53.44242c.04725.006.09009.02441.13581.02789C35.30959 53.43637 35.267 53.433 35.26833 53.44242zM35.6979 53.46951a1.153 1.153 0 01.12531-.03131A.21624.21624 0 0035.6979 53.46951zM36.37447 30.22287a3.86233 3.86233 0 00-2.28979.11212c-.29181.06568-.63373.18055-.71649.50495-.14722.96905 1.04327.62951 1.621.64233.53528-.07178 1.16241.06732 1.58722-.33581A.582.582 0 0036.37447 30.22287zM38.7936 35.33817a.79735.79735 0 000 1.59375A.79735.79735 0 0038.7936 35.33817zM19.60067 25.91385c2.17682.21307 4.34223-1.96191 3.68634-4.1499a.34982.34982 0 00-.38574-.25177c-.4162.07568-.275.611-.4516.89776a2.8075 2.8075 0 01-2.84906 1.98041A.76187.76187 0 0019.60067 25.91385zM24.74447 49.62949a10.96937 10.96937 0 00-1.95721.5636.50644.50644 0 00.134.9898 5.98511 5.98511 0 002.99194-.23272.7323.7323 0 00-.173-1.32379A1.70221 1.70221 0 0024.74447 49.62949zM21.59029 50.24961a.73872.73872 0 000 1.47656A.73872.73872 0 0021.59029 50.24961z"
                                class="color4d4d4d svgShape"></path>
                        </svg>
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">Generador de Presentaciones</div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div>
                        <label for="curriculum" class="form-label">Curriculum</label>
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
                        <label for="lesson-description" class="form-label">Objetivo</label>
                        <!-- Textarea for Lesson Description -->
                        <textarea id="lesson-description"
                            placeholder="Intente algo como esto: Entender los diferentes procesos que tienen lugar en el ciclo del agua."
                            name="description"
                            class="form-control h-40"><?php echo htmlspecialchars($description); ?></textarea>
                    </div>

                    {{-- <div class="mt-3">
                        <label for="lesson-title" class="form-label">Número de páginas</label>
                        <!-- Input for Lesson Title -->
                        <input id="lesson-title" name="num_of_slides" type="text" class="form-control"
                            placeholder="i.e 4" value="<?php echo htmlspecialchars($num_of_slides); ?>">


                    </div> --}}
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
                <h1 class="text-xl font-medium leading-none py-2">Direcciones</h1>
                <ul class="list-disc list-inside border-b pb-5 border-slate-200/60 dark:border-darkmode-400"
                    style="list-style-type: disc;">
                    <li class="ml-4">¿Feliz con los resultados? Haga clic en "Descargar .PPTX" para descargar el
                        documento de PowerPoint.
                    </li>
                    <li class="ml-4">¿No satisfecho? Modifique la descripción de la lección para modificar aún más
                        los
                        resultados.</li>
                </ul>
                <?php 
                                                    if (!empty($slides)) {
                                                        ?>
                <div class="my-5 flex">
                    <a target="_blank"
                        href="{{ route('teacher.downloadSlidesPPTX', ['slides' => urlencode(json_encode($slides))]) }}"
                        class="btn btn-primary">Descargar.PPTX</a>


                </div>
                <?php
                                                    }
                                                    ?>
                <div class="my-5">

                    <div class="editable-slides-default">
                        <?php
                            if (empty($slides)) {
                                echo "Los resultados se mostrarán aquí. ¡Haz clic en 'Generar Contenido' para comenzar el proceso!";
                            } else {
                                echo '<div class="slide flex flex-col justify-center items-center h-full">';
                                echo '<h2 class="text-xl font-medium leading-none mt-3 text-center" style="font-size: 41px;">' . $slides['Title'] . '</h2>';
                                echo '<p class="font-normal text-center">' . $slides['Objective'] . '</p>';
                                echo '</div>';
                            
                                // Content slides
                                foreach ($slides['Slides'] as $item) {
                                    echo '<div class="slide">';
                                    echo '<h3 class="text-xl font-medium leading-none mt-3">' . $item['Heading'] . '</h3>';
                                    echo '<p class="font-normal" style="margin-top: 29px;">' . $item['Content'] . '</p>';
                            
                                    // Display questions as bullets
                                    echo '<ul class="list-disc pl-5 mt-10" style="list-style-type: disc;">';
                                    foreach ($item['Questions'] as $question) {
                                        echo '<li class="font-normal leading-none text-md py-1"><p class="font-normal leading-none text-xl ">' . $question . '</p></li>';
                                    }
                                    echo '</ul>';
                            
                                    echo '</div>';
                                }
                            }
                            ?>
                    </div>
                </div>

            </div>
        </div>


    </div>
</div>

<script>
    toastr.options = {
        "closeButton": true,
        "debug": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "maxOpened": 1,
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "120000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    document.getElementById('generate-btn').addEventListener('click', function() {
        document.getElementById('spinner').classList.remove('hidden');
        // Get or create an instance of the modal
        // var myModal = tailwind.Modal.getOrCreateInstance(document.querySelector("#success-modal-preview"));
        // // Show the modal
        // myModal.show();
        
        // Show the toastr
        toastr.success('¡Por favor, ten paciencia! Estamos generando tu contenido en este momento. Por favor, no cierres ni actualices esta página. ¡Merecerá la pena!');
    });
</script>
@endsection