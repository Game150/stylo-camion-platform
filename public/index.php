<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylo Camión | Transporte confiable y soluciones logísticas</title>
    <link rel="icon" href="/activos/favicon.ico" type="image/x-icon">
    <!-- Libreias -->
    <link rel="stylesheet" href="./activos/libs/bootstrap-5.3.8-dist/css/bootstrap.min.css">

    <!-- Preload imagens -->
    <link rel="preload" as="image" href="./activos/imgs/index/background/fondo1-1920.webp"
        media="(min-width: 1400px) and (max-width: 1920px)">
    <link rel="preload" as="image" href="./activos/imgs/index/background/fondo1-1200.webp"
        media="(min-width: 1200px) and (max-width: 1399px)">
    <link rel="preload" as="image" href="./activos/imgs/index/background/fondo1-1080.webp"
        media="(min-width: 992px) and (max-width: 1199px)">
    <link rel="preload" as="image" href="./activos/imgs/index/background/fondo1-1080.webp"
        media="(min-width: 768px) and (max-width: 991px)">
    <link rel="preload" as="image" href="./activos/imgs/index/background/fondo1-1080.webp"
        media="(min-width: 576px) and (max-width: 767px)">
    <link rel="preload" as="image" href="./activos/imgs/index/background/fondo1-1080.webp" media="(max-width: 575px)">

    <!-- Preload fonts -->
    <link rel="preload" href="./activos/fonts/Lato/Lato-Bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="./activos/fonts/Poppins/Poppins-Bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="./activos/fonts/Poppins/Poppins-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="./activos/fonts/Poppins/Poppins-Medium.woff2" as="font" type="font/woff2" crossorigin>

    <!-- CSS -->
    <link rel="stylesheet" href="./activos/css/index/index.css">

</head>

<body>
    <header class="row p-2">
        <div class="col-12 d-flex align-items-center justify-content-between">
            <a class="ms-2" href="#" id="span-logo" target="_self">STYLO CAMION</a>
            <span title="Ir al perfil">
                <svg class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" alt="Perfil"
                    id="icon-perfil">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM15 9C15 10.6569 13.6569 12 12 12C10.3431 12 9 10.6569 9 9C9 7.34315 10.3431 6 12 6C13.6569 6 15 7.34315 15 9ZM12 20.5C13.784 20.5 15.4397 19.9504 16.8069 19.0112C17.4108 18.5964 17.6688 17.8062 17.3178 17.1632C16.59 15.8303 15.0902 15 11.9999 15C8.90969 15 7.40997 15.8302 6.68214 17.1632C6.33105 17.8062 6.5891 18.5963 7.19296 19.0111C8.56018 19.9503 10.2159 20.5 12 20.5Z"
                        fill="#fff" />
                </svg>
            </span>
        </div>
    </header>
    <main>
        <!-- Hero -->
        <section class="d-flex flex-column justify-content-center" id="Hero">
            <div class="d-flex align-content-center justify-content-center">
                <span id="Hero-Titulo" class="text-center">Conectamos a todo el ecosistema del transporte</span>
            </div>
            <div class="d-flex align-content-center justify-content-center">
                <span id="Hero-Texto" class="text-center">Cargas, trabajo, ventas, contenidos y soluciones para
                    transportistas, empresas y dadores de carga.</span>
            </div>
            <div class="d-flex align-content-center justify-content-center mt-5">
                <a href="paginas/login.php" target="_parent" id="Hero-CTA">INGRESAR AHORA</a>
            </div>
        </section>
        <!-- Fin Hero -->
        <!-- Sobre la empresa -->
        <section id="info-empresa" class="d-grid justify-content-center align-items-center">
            <div class="d-flex flex-column justify-content-center align-items-center"
                id="container-cont-titulo-parrafo">
                <div class="pb-4" id="cont-titulo-parrafo">
                    <h1 id="titulo-info-empresa">Un punto de encuentro para todo el ecosistema del transporte</h1>
                </div>
                <div id="cont-titulo-parrafo">
                    <p id="parrafo-info-empresa">Stylo Camión es una plataforma pensada para conectar transportistas,
                        empresas y dadores de carga en un mismo espacio, facilitando el encuentro entre quienes ofrecen
                        servicios, generan cargas y buscan oportunidades dentro del sector.
                        Reunimos información relevante del mundo del transporte, oportunidades laborales, cargas
                        disponibles, unidades nuevas y usadas, y servicios profesionales orientados a mejorar la
                        operación, optimizar la logística y fortalecer la presencia digital de empresas y profesionales
                        del rubro.</p>
                </div>
            </div>
        </section>
        <!-- Fin Sobre la empresa -->
        <!-- Seccion Audiencia -->
        <section id="Seccion-Audiencia"
            class="d-flex flex-column justify-content-center align-items-center text-center">
            <div class="pb-4 justify-content-center d-flex" id="cont-titulo-parrafo">
                <h1 id="titulo-audiencia">¿A quién está dirigido Stylo Camión?</h1>
            </div>
            <div id="container-logos-textos-audiencia">
                <div>
                    <div class="d-flex pb-5 justify-content-start" id="cont-logo-texto">
                        <div id="cont-svg-audiencia" class="me-5">
                            <span>
                                <svg viewBox="0 0 16 16" id="icon-camion" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11 2H0V13H2C2 14.1046 2.89543 15 4 15C5.10457 15 6 14.1046 6 13H10C10 14.1046 10.8954 15 12 15C13.1046 15 14 14.1046 14 13H16V8C16 6.34315 14.6569 5 13 5H11V2ZM11 7V9H14V7H11Z"
                                        fill="#ffffff" />
                                </svg>
                            </span>
                        </div>
                        <div id="cont-texto-audiencia" class="d-flex align-items-center justify-content-center">
                            <span id="texto-audiencia">Transportistas y choferes independientes.</span>
                        </div>

                    </div>
                    <div class="d-flex pb-5 justify-content-start" id="cont-logo-texto">
                        <div id="cont-svg-audiencia" class="me-5">
                            <span>
                                <svg id="icon-caja" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5777 4.43152L15.5777 3.38197C13.8221 2.46066 12.9443 2 12 2C11.0557 2 10.1779 2.46066 8.42229 3.38197L8.10057 3.5508L17.0236 8.64967L21.0403 6.64132C20.3941 5.90949 19.3515 5.36234 17.5777 4.43152Z"
                                        fill="#ffffff" />
                                    <path
                                        d="M21.7484 7.96434L17.75 9.96353V13C17.75 13.4142 17.4142 13.75 17 13.75C16.5858 13.75 16.25 13.4142 16.25 13V10.7135L12.75 12.4635V21.904C13.4679 21.7252 14.2848 21.2965 15.5777 20.618L17.5777 19.5685C19.7294 18.4393 20.8052 17.8748 21.4026 16.8603C22 15.8458 22 14.5833 22 12.0585V11.9415C22 10.0489 22 8.86557 21.7484 7.96434Z"
                                        fill="#ffffff" />
                                    <path
                                        d="M11.25 21.904V12.4635L2.25164 7.96434C2 8.86557 2 10.0489 2 11.9415V12.0585C2 14.5833 2 15.8458 2.5974 16.8603C3.19479 17.8748 4.27062 18.4393 6.42228 19.5685L8.42229 20.618C9.71524 21.2965 10.5321 21.7252 11.25 21.904Z"
                                        fill="#ffffff" />
                                    <path
                                        d="M2.95969 6.64132L12 11.1615L15.4112 9.4559L6.52456 4.37785L6.42229 4.43152C4.64855 5.36234 3.6059 5.90949 2.95969 6.64132Z"
                                        fill="#ffffff" />
                                </svg>
                            </span>
                        </div>
                        <div id="cont-texto-audiencia" class="d-flex align-items-center justify-content-center">
                            <span id="texto-audiencia">Empresas generadoras de carga.</span>
                        </div>
                    </div>
                    <div class="d-flex pb-5 justify-content-start" id="cont-logo-texto">
                        <div id="cont-svg-audiencia" class="me-5">
                            <span>
                                <svg id="icon-compania" fill="#ffffff" viewBox="-2 0 16 16" id="company-16px"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path id="Path_133" data-name="Path 133"
                                        d="M323.5-192h-9a1.5,1.5,0,0,0-1.5,1.5V-176h12v-14.5A1.5,1.5,0,0,0,323.5-192ZM318-177v-3h2v3Zm6,0h-3v-3.5a.5.5,0,0,0-.5-.5h-3a.5.5,0,0,0-.5.5v3.5h-3v-13.5a.5.5,0,0,1,.5-.5h9a.5.5,0,0,1,.5.5Zm-8-12h2v2h-2Zm4,0h2v2h-2Zm-4,4h2v2h-2Zm4,0h2v2h-2Z"
                                        transform="translate(-313 192)" />
                                </svg>
                            </span>
                        </div>
                        <div id="cont-texto-audiencia" class="d-flex align-items-center justify-content-center">
                            <span id="texto-audiencia">Proveedores de productos y servicios del sector.</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start" id="cont-logo-texto">
                        <div id="cont-svg-audiencia" class="me-5">
                            <span>
                                <svg id="icon-herramientas" viewBox="0 0 16 16" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    class="si-glyph si-glyph-hammer-and-wrench">

                                    <title>Hammer-and-wrench</title>

                                    <defs>

                                    </defs>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(0.000000, 1.000000)" fill="#ffffff">
                                            <g>
                                                <path
                                                    d="M14.217,14.949 C14.748,15.482 15.076,15.103 15.512,14.668 C15.948,14.233 16.326,13.904 15.795,13.372 C15.795,13.372 8.393,5.977 6.565,4.154 L4.987,5.731 L14.217,14.949 L14.217,14.949 Z"
                                                    class="si-glyph-fill">

                                                </path>
                                                <path
                                                    d="M2.048,7.015 L2.662,6.411 C2.662,6.411 2.391,5.668 2.788,5.312 C3.185,4.956 3.855,5.176 3.855,5.176 L6.01,3.093 C6.01,3.093 5.859,2.01 6.059,1.81 C6.259,1.61 8.494,0.521 8.71,0.303 L8.251,-0.156 C8.251,-0.156 5.123,0.22 4.784,0.558 C4.585,0.758 3.096,2.262 2.034,3.324 C2.034,3.324 2.3,4.083 1.95,4.433 C1.599,4.784 0.809,4.533 0.809,4.533 C0.436,4.906 0.186,5.155 0.186,5.155 C-0.077,5.42 0.078,5.792 0.401,6.115 L1.087,6.801 C1.412,7.125 1.785,7.278 2.048,7.015 L2.048,7.015 Z"
                                                    class="si-glyph-fill">

                                                </path>
                                            </g>
                                            <path
                                                d="M11.733,5.515 C12.81,6.026 14.161,5.869 15.055,4.975 C15.745,4.285 16.019,3.336 15.872,2.444 L14.351,3.963 L13.057,4.284 L11.595,2.842 L11.938,1.505 L13.445,0.017 C12.552,-0.129 11.543,0.082 10.853,0.773 C9.958,1.668 9.836,3.052 10.347,4.13 L9.353,5.123 C9.79,5.558 10.257,6.025 10.741,6.508 L11.733,5.515 L11.733,5.515 Z"
                                                class="si-glyph-fill">

                                            </path>
                                            <path
                                                d="M7.432,10.119 L5.927,8.615 L4.619,9.924 C4.537,10.004 4.479,10.095 4.438,10.19 C4.361,10.16 4.318,10.159 4.291,10.17 C4.041,10.087 3.777,10.031 3.5,10.031 C2.119,10.031 1,11.136 1,12.5 C1,13.864 2.119,14.969 3.5,14.969 C4.881,14.969 6,13.864 6,12.5 C6,12.217 5.941,11.949 5.854,11.696 C5.849,11.672 5.848,11.65 5.834,11.615 C5.938,11.572 6.036,11.514 6.122,11.427 L7.432,10.119 L7.432,10.119 Z M3.5,13.938 C2.688,13.938 2.031,13.295 2.031,12.5 C2.031,11.705 2.687,11.062 3.5,11.062 C4.313,11.062 4.969,11.705 4.969,12.5 C4.969,13.295 4.312,13.938 3.5,13.938 L3.5,13.938 Z"
                                                class="si-glyph-fill">

                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div id="cont-texto-audiencia" class="d-flex align-items-center justify-content-center">
                            <span id="texto-audiencia">Empresas de logística y RRHH.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Seccion Audiencia -->
        <!-- Servicios Destacados -->
        <section id="Servicios" class="d-flex flex-column justify-content-center align-items-center">
            <div class="text-center pb-5" id="cont-titulo-servicio">
                <h1 id="titulo-servicios">Accedé a nuestras secciones principales</h1>
            </div>
            <div class="d-flex  justify-content-center">
                <div>
                    <div class="d-flex pb-5" id="cont-logo-texto">
                        <div id="cont-svg-servicio" class="me-5">
                            <span>
                                <svg fill="#fedd00" id="icon-camion" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 512.001 512.001" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M498.837,342.944L458.56,326.24l-10.795-73.365c-1.536-10.453-10.517-18.219-21.099-18.219H384v-85.333
                    c0-11.776-9.536-21.333-21.333-21.333h-66.432c1.429-6.976,2.432-14.08,2.432-21.333c0-32.64-14.656-63.04-40.171-83.413
                    C232.96,2.87,199.701-4.597,167.253,2.806c-39.211,8.896-70.272,40.107-79.168,79.488c-3.477,15.424-3.435,30.891-0.384,45.696
                    H21.333C9.536,127.99,0,137.547,0,149.323v192V447.99c0,11.776,9.536,21.333,21.333,21.333h46.592
                    c8.832,24.768,32.299,42.667,60.075,42.667s51.243-17.899,60.075-42.667h135.851c8.832,24.768,32.299,42.667,60.075,42.667
                    s51.243-17.899,60.075-42.667h46.592c11.797,0,21.333-9.557,21.333-21.333v-85.333C512,354.038,506.816,346.251,498.837,342.944z
                    M128,469.323c-11.776,0-21.333-9.579-21.333-21.333c0-11.755,9.557-21.333,21.333-21.333s21.333,9.579,21.333,21.333
                    C149.333,459.744,139.776,469.323,128,469.323z M341.333,320.246l-298.667-0.235V170.656h64.107l1.728,2.539
                    c14.848,21.909,28.885,42.603,40.085,65.003l24.32,48.661c3.605,7.232,11.008,11.797,19.093,11.797s15.467-4.565,19.093-11.797
                    l24.384-48.789c2.624-5.248,5.461-10.56,8.491-15.979c0.875-1.557,1.92-3.2,2.837-4.779c2.24-3.883,4.48-7.765,6.955-11.776
                    c1.472-2.368,3.136-4.864,4.672-7.275c2.133-3.328,4.224-6.613,6.528-10.069c2.325-3.477,4.907-7.125,7.424-10.752
                    c1.579-2.261,3.072-4.459,4.736-6.784h64.213v85.334h0.001V320.246z M384,469.323c-11.776,0-21.333-9.579-21.333-21.333
                    c0-11.755,9.557-21.333,21.333-21.333s21.333,9.579,21.333,21.333C405.333,459.744,395.776,469.323,384,469.323z" />
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div id="cont-texto-servicio" class="d-flex align-items-center">
                            <span id="texto-servicio">Ofrecé o encontrá cargas para tu flota.</span>
                        </div>
                    </div>
                    <div class="d-flex pb-5" id="cont-logo-texto">
                        <div id="cont-svg-servicio" class="me-5">
                            <span>
                                <svg fill="#fedd00" id="icon-rrhh" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 453.193 453.193" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M300.459,273.347l-32.152-14.805l-15.447-13.025l-24.318,24.189l11.518,76.994c0.041,0.273-0.027,0.553-0.19,0.775
                l-7.401,10.129c36.303-1.635,68.742-18.342,91.197-44.004c-5.596-16.367-11.395-30.18-11.395-30.18
                C310.199,278.47,305.217,275.298,300.459,273.347z" />
                                            <path d="M213.136,346.701l11.518-76.995l-24.318-24.188l-15.447,13.024l-32.152,14.804c-4.758,1.953-10.241,6.362-11.811,10.076
                c0,0-5.8,13.812-11.393,30.18c22.454,25.662,54.895,42.367,91.195,44.004l-7.4-10.129
                C213.164,347.253,213.095,346.974,213.136,346.701z" />
                                            <path d="M226.597,245.048c32.883,0,57.424-30.639,57.981-82.02c0.357-35.652-16.622-56.99-57.981-56.99
                c-41.361,0-58.344,21.338-57.98,56.99C169.173,214.41,193.712,245.048,226.597,245.048z" />
                                            <path
                                                d="M450.693,222.269l-40.174-23.198c-13.379-78.3-75.705-140.106-154.266-152.707L230.93,2.501
                c-0.895-1.547-2.545-2.5-4.331-2.5c-1.786,0-3.437,0.953-4.33,2.5L196.94,46.364C118.38,58.965,56.055,120.77,42.674,199.07
                L2.5,222.265c-1.547,0.894-2.5,2.544-2.5,4.33c0,1.787,0.953,3.438,2.5,4.33l38.891,22.457
                c10.285,84.104,76.742,151.092,160.596,162.189l20.278,35.121c0.894,1.547,2.544,2.5,4.33,2.5c1.786,0,3.436-0.953,4.331-2.5
                l20.28-35.121c83.854-11.098,150.312-78.085,160.597-162.188l38.891-22.455c1.547-0.894,2.5-2.543,2.5-4.33
                C453.193,224.813,452.24,223.162,450.693,222.269z M226.597,377.196c-80.835,0-146.6-65.764-146.6-146.6
                c0-80.834,65.765-146.6,146.6-146.6c80.834,0,146.6,65.765,146.6,146.6C373.197,311.433,307.432,377.196,226.597,377.196z" />
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div id="cont-texto-servicio" class="d-flex align-items-center">
                            <span id="texto-servicio">Publicá o buscá oportunidades laborales en el rubro.</span>
                        </div>

                    </div>
                    <div class="d-flex" id="cont-logo-texto">
                        <div id="cont-svg-servicio" class="me-5">
                            <span>
                                <svg fill="#fedd00" viewBox="0 0 48 48" id="icon-megaphono"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>megaphone</title>
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="invisible_box" data-name="invisible box">
                                            <rect width="48" height="48" fill="none" />
                                        </g>
                                        <g id="Layer_6" data-name="Layer 6">
                                            <g>
                                                <path
                                                    d="M34,6h-.6l-30,8.8A2,2,0,0,0,2,16.8v9a2.2,2.2,0,0,0,1.4,2l4.7,1.3L9.7,39.4A2.9,2.9,0,0,0,12.6,42h4.5a3.2,3.2,0,0,0,2.2-1,3.3,3.3,0,0,0,.6-2.6l-1.1-6.1,14.6,4.3H34a2,2,0,0,0,2-2V8A2,2,0,0,0,34,6ZM15.8,38H13.5l-1.2-7.6,2.1.6ZM32,32,6,24.3v-6l26-7.6Z" />
                                                <path
                                                    d="M40,15.3a1.5,1.5,0,0,0,.9-.2l4-2a2,2,0,0,0-1.8-3.6l-4,2a2,2,0,0,0-.9,2.7A2.1,2.1,0,0,0,40,15.3Z" />
                                                <path
                                                    d="M44.9,29.6l-4-2a2.1,2.1,0,0,0-2.7.8,2,2,0,0,0,.9,2.7l4,2a1.5,1.5,0,0,0,.9.2,2.1,2.1,0,0,0,1.8-1.1A1.9,1.9,0,0,0,44.9,29.6Z" />
                                                <path d="M40,23.3h4a2,2,0,0,0,0-4H40a2,2,0,0,0,0,4Z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div id="cont-texto-servicio" class="d-flex align-items-center">
                            <span id="texto-servicio">Publicá y difundí unidades nuevas y usadas.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fin Servicios Destacados -->
        <!-- Noticias -->
        <section id="Seccion-Noticias"
            class="d-flex flex-column justify-content-center align-items-center text-center py-5">
            <h1 id="titulo-noticias">Noticias y actualidad del transporte</h1>
            <p id="texto-noticias" class="mt-1">
                Enterate de lo último del sector, análisis, entrevistas y novedades de la industria.
            </p>
            <a href="https://blog.stylocamion.com/" target="_self" id="cta-noticias" class="mt-4">
                Ver noticias
            </a>
        </section>
        <!-- Fin Noticias -->
    </main>
    <footer class="d-flex justify-content-center align-items-center gap-5">
        <span id="texto-footer">¿Quieres estar al día?</span>
        <div class="gap-5">
            <a href="" target="_self">
                <span title="Siguenos en TikTok">
                    <svg title="Siguenos en TikTok" fill="#fedd00" id="icon-footer" viewBox="0 0 24 24"
                        aria-label="TikTok" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.5 3c.29 1.95 1.44 3.62 3.19 4.55 1.02.54 2.2.79 3.31.72v2.48c-1.43-.05-2.86-.4-4.14-1.02-.49-.24-.95-.52-1.37-.84v6.4c0 2.92-2.37 5.28-5.3 5.28-2.26 0-4.25-1.46-4.96-3.6-.22-.67-.29-1.38-.22-2.08.22-2.21 1.79-4.08 3.96-4.64.58-.15 1.2-.19 1.8-.13v2.64c-.25-.05-.51-.05-.76 0-1.15.18-2.06 1.11-2.25 2.27-.03.19-.03.39 0 .58.18 1.19 1.23 2.08 2.43 2.08 1.37 0 2.48-1.11 2.48-2.48V3h2.53z" />
                    </svg>
                </span>
                <span title="Contactanos por correo">
                    <svg title="Contactanos por correo" fill="#fedd00" id="icon-footer" viewBox="0 0 24 24"
                        aria-label="Email" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m0 4-8 5-8-5V6l8 5 8-5z" />
                    </svg>
                </span>
                <span title="Siguenos en Instagram">
                    <svg title="Siguenos en Instagram" fill="#fedd00" id="icon-footer" viewBox="0 0 24 24"
                        aria-label="Instagram" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3z" />
                    </svg>
                </span>
                <span title="Siguenos en Facebook">
                    <svg title="Siguenos en Facebook" fill="#fedd00" id="icon-footer" viewBox="0 0 24 24"
                        aria-label="Facebook" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2m13 2h-2.5A3.5 3.5 0 0 0 12 8.5V11h-2v3h2v7h3v-7h3v-3h-3V9a1 1 0 0 1 1-1h2V5z" />
                    </svg>
                </span>
                <span title="Siguenos en YouTube">
                    <svg title="Siguenos en YouTube" fill="#fedd00" id="icon-footer" viewBox="0 0 24 24"
                        aria-label="YouTube" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 15l5.19-3L10 9v6m11.56-7.83c.13.47.22 1.1.28 1.9.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83-.25.9-.83 1.48-1.73 1.73-.47.13-1.33.22-2.65.28-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44-.9-.25-1.48-.83-1.73-1.73-.13-.47-.22-1.1-.28-1.9-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83.25-.9.83-1.48 1.73-1.73.47-.13 1.33-.22 2.65-.28 1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44.9.25 1.48.83 1.73 1.73z" />
                    </svg>
                </span>
            </a>
        </div>
    </footer>
</body>

</html>