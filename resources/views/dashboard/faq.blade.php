@extends('dashboard.teacher.layout')
@section('content')
<!-- BEGIN: Top Bar -->

<!-- END: Top Bar -->
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-12">
        <div class="grid grid-cols-12 gap-6">

            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Preguntas Frecuentes
                    </h2>

                </div>
                <div class="intro-y box">
                    <div id="faq-accordion-2" class="accordion accordion-boxed mt-5">
                        <div class="accordion-item">
                            <div id="faq-accordion-content-1" class="accordion-header">
                                <button class="accordion-button" type="button" data-tw-toggle="collapse"
                                    data-tw-target="#faq-accordion-collapse-1" aria-expanded="true"
                                    aria-controls="faq-accordion-collapse-1">
                                    ¿Cómo funciona MaestroIA?
                                </button>
                            </div>
                            <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-2">
                                <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                    Al igual que muchas otras aplicaciones basadas en IA, MaestroIA se basa en los
                                    modelos
                                    de OpenAI, sin
                                    embargo, hemos optimizado las respuestas que proporciona mediante una combinación de
                                    refinamiento de
                                    entradas, ajustes del modelo, entrenamiento y pruebas. El resultado es el
                                    aprovechamiento del poder de
                                    la IA para los profesores que desarrollan su trabajo en Español.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div id="faq-accordion-content-2" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse"
                                    data-tw-target="#faq-accordion-collapse-2" aria-expanded="false"
                                    aria-controls="faq-accordion-collapse-2">
                                    ¿Cómo obtengo los mejores resultados de MaestroIA?
                                </button>
                            </div>
                            <div id="faq-accordion-collapse-2" class="accordion-collapse collapse"
                                aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-2">
                                <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                    Aquí tienes algunos consejos para aprovechar al máximo MaestroIA:
                                    Observa los ejemplos en cada casilla de entrada para ver cómo debes redactar las
                                    entradas.
                                    ¡Regenera! Si el primer resultado que obtienes no es tan bueno como te gustaría, no
                                    dudes en hacer clic
                                    nuevamente en la solicitud de herramienta y regenerar una segunda respuesta.
                                    MaestroIA no tiene límites de uso para las solicitudes, solo te pedimos que seas
                                    justo y
                                    razonable con
                                    la cantidad de solicitudes que realizas, ya que cada una conlleva un costo para
                                    nosotros.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div id="faq-accordion-content-3" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse"
                                    data-tw-target="#faq-accordion-collapse-3" aria-expanded="false"
                                    aria-controls="faq-accordion-collapse-3">
                                    ¿Qué significa cuando aparece un mensaje que dice "No se pudo conectar al servidor
                                    remoto"? ¿Qué debo
                                    hacer?
                                </button>
                            </div>
                            <div id="faq-accordion-collapse-3" class="accordion-collapse collapse"
                                aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-2">
                                <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                    En ocasiones muy raras, MaestroIA puede tener dificultades para conectarse a los
                                    modelos
                                    de OpenAI que lo impulsan. Esto puede deberse a una demanda excepcionalmente alta en
                                    su
                                    extremo
                                    o a una conexión a internet menos que perfecta en tu extremo. Si tu conexión a
                                    internet
                                    es sólida, lo mejor que puedes
                                    hacer es simplemente intentarlo de nuevo, ya que el problema generalmente no
                                    persiste
                                    por mucho tiempo.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div id="faq-accordion-content-4" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse"
                                    data-tw-target="#faq-accordion-collapse-4" aria-expanded="false"
                                    aria-controls="faq-accordion-collapse-4">
                                    ¡Tengo una idea increíble para una herramienta, ¿pueden construirla para mí?
                                </button>
                            </div>
                            <div id="faq-accordion-collapse-4" class="accordion-collapse collapse"
                                aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-2">
                                <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                    Si tienes una idea para una herramienta, por favor avísanos a través del botón "Idea
                                    de
                                    Herramienta" en la
                                    página del "Panel de Control". ¡Haremos nuestro mejor esfuerzo para construirla para
                                    ti
                                    tan pronto como sea
                                    posible!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div id="faq-accordion-content-5" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse"
                                    data-tw-target="#faq-accordion-collapse-5" aria-expanded="false"
                                    aria-controls="faq-accordion-collapse-5">
                                    ¿Cómo cancelo mi suscripción?
                                </button>
                            </div>
                            <div id="faq-accordion-collapse-5" class="accordion-collapse collapse"
                                aria-labelledby="faq-accordion-content-5" data-tw-parent="#faq-accordion-2">
                                <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                    Para cancelar tu suscripción, ve a la página "Mi Cuenta" y haz clic en "Solicitar
                                    cancelación, actualizar
                                    tarjeta". Esto abrirá el portal de pago de Stripe, donde podrás cancelar tu
                                    suscripción.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div id="faq-accordion-content-6" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse"
                                    data-tw-target="#faq-accordion-collapse-6" aria-expanded="false"
                                    aria-controls="faq-accordion-collapse-6">
                                    ¿Cuánto tiempo podré seguir utilizando MaestroIA después de cancelar mi suscripción?
                                </button>
                            </div>
                            <div id="faq-accordion-collapse-6" class="accordion-collapse collapse"
                                aria-labelledby="faq-accordion-content-6" data-tw-parent="#faq-accordion-2">
                                <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                    Podrás seguir utilizando MaestroIA hasta el final del período por el cual has
                                    realizado
                                    el pago.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection