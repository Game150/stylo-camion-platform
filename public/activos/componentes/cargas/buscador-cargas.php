<section class=" seccion-cargas d-flex justify-content-center align-items-center flex-column gap-5">
    <form action="POST" id="buscador-cargas" class=" bg-light rounded rounded-5 p-3 border border-1 border-light shadow-sm">
        <div class=" d-flex justify-content-center align-items-center d-flex gap-2 mb-2">
            <span class=" d-flex justify-content-center align-items-center border rounded rounded-5 bg-white p-2 gap-2 shadow-sm span-contenedor-searchbar">
                <svg class=" ms-2" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#9e9d9d">
                    <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                </svg>
                <input type="search" name="busqueda" id="input-busqueda" placeholder="¿Qué quieres transportar hoy?" class=" m-0  w-100 input-busqueda">
            </span>
        </div>
        <div class=" row gap-2">
            <div class=" w-auto h-100">
                <div class="p-2 d-flex align-items-center gap-2 border rounded bg-white shadow-sm">
                    <input type="date" name="fecha" value="<?php echo date('Y-m-d'); ?>" class="form-control form-control-sm  border-0 bg-light">
                </div>
            </div>

            <div class=" w-auto h-100">
                <div class="p-2 d-flex align-items-center gap-2 border rounded bg-white shadow-sm">
                    <select name="select-pais" class="form-select form-select-sm border-0 bg-light ">
                        <option value="">Seleccione un país</option>
                    </select>
                </div>
            </div>

            <div class=" w-auto h-100">
                <div class="p-2 d-flex align-items-center gap-2 border rounded bg-white shadow-sm">
                    <select name="select-estado" class="form-select form-select-sm border-0 bg-light ">
                        <option value="">Seleccione un estado</option>
                    </select>
                </div>
            </div>
            <div class=" w-auto h-auto">
                <button class=" btn btn-cargaup h-100" type="button">Subir Cargas</button>
            </div>
        </div>
    </form>
    <div class=" w-100 bg-light border-light rounded rounded-2 p-3 shadow-sm d-flex flex-column justify-content-start justify-content-md-start">
        <h2 class="titulo-cantidad-cargas w-100">Cargas encontradas <span id="cantidad-cargas" class="cantidad-cargas">0</span></h2>
        <div id="resultados" class=" gap-3 d-flex flex-wrap w-100">
            <div class=" gap-2 w-100 mb-3">
                <h1 class="sec-promo-h1 w-100">Recomendados para vos</h1>
                <div class="sec-promo rounded rounded-1 shadow-sm gap-3 p-3">

                    <div class="carga-promocionada shadow-sm">
                        <span class="d-flex align-items-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#FFC107">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z" />
                            </svg>
                            <h3 class="promocionado-carga-promocionada m-0">
                                Promocionado
                            </h3>
                        </span>
                        <div class=" d-flex p-2 justify-content-between align-content-center gap-1">
                            <p class="indicadores-carga-promocionada m-0">Carga General</p>
                            <p class="indicadores-estado-carga-promocionada m-0">Abierta</p>
                        </div>
                        <div class=" d-grid p-2">
                            <p class="ubicacion-carga-promocionada d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Salto Nuevo, Salto, Uruguay
                            </p>
                            <p class="ubicacion-carga-promocionada d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Minas, Lavalleja, Uruguay
                            </p>
                        </div>
                        <div class=" d-flex">
                            <div class=" w-50 p-2 bg-light border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-promocionada m-0">Carga</h3>
                                <p class="texto-informacion-carga-promocionada m-0">Arroz en Bolsa</p>
                            </div>
                            <div class=" w-50 p-2 bg-light border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-promocionada m-0">Peso Total</h3>
                                <p class="texto-informacion-carga-promocionada m-0">20 TN</p>
                            </div>
                        </div>
                        <div class=" d-flex mb-3">
                            <div class=" w-50 p-2 bg-white border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-promocionada m-0">Volumen</h3>
                                <p class="texto-informacion-carga-promocionada m-0">38 M³</p>
                            </div>
                            <div class=" w-50 p-2 bg-white border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-promocionada m-0">Equipo</h3>
                                <p class="texto-informacion-carga-promocionada m-0">Semi Estandar</p>
                            </div>
                        </div>
                        <div class=" p-2 bg-white border border-2 border-end-0 border-start-0 mb-2 d-grid gap-2">
                            <p class="m-0 importante-carga-promocionada pago-promocionada">USD 480:000</p>
                            <p class="m-0 importante-carga-promocionada"><span>Pago:</span> Transferencia Bancaria</p>
                            <p class="m-0 importante-carga-promocionada">Pago dentro de las 48hs del viaje</p>
                        </div>
                        <div class=" p-2 d-grid gap-3">
                            <p class="m-0 fecha-carga-promocionada">Publicada: 06/02/2026</p>
                            <button type="button" class=" btn btn-carga-promocionada" value="id-carga">Ofertar Ahora</button>
                        </div>

                    </div>

                    <div class="carga-verificada shadow-sm">
                        <span class="d-flex align-items-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#004aad">
                                <path d="m344-60-76-128-144-32 14-148-98-112 98-112-14-148 144-32 76-128 136 58 136-58 76 128 144 32-14 148 98 112-98 112 14 148-144 32-76 128-136-58-136 58Zm34-102 102-44 104 44 56-96 110-26-10-112 74-84-74-86 10-112-110-24-58-96-102 44-104-44-56 96-110 24 10 112-74 86 74 84-10 114 110 24 58 96Zm102-318Zm-42 142 226-226-56-58-170 170-86-84-56 56 142 142Z" />
                            </svg>
                            <h3 class="verificado-carga-verificada m-0">
                                Verificado
                            </h3>
                        </span>
                        <div class=" d-flex p-2 justify-content-between align-content-center gap-1">
                            <p class="indicadores-carga-verificada m-0">Carga General</p>
                            <p class="indicadores-estado-carga-verificada m-0">Abierta</p>
                        </div>
                        <div class=" d-grid p-2">
                            <p class="ubicacion-carga-verificada d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Salto Nuevo, Salto, Uruguay
                            </p>
                            <p class="ubicacion-carga-verificada d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Minas, Lavalleja, Uruguay
                            </p>
                        </div>
                        <div class=" d-flex">
                            <div class=" w-50 p-2 bg-light border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-verificada m-0">Carga</h3>
                                <p class="texto-informacion-carga-verificada m-0">Arroz en Bolsa</p>
                            </div>
                            <div class=" w-50 p-2 bg-light border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-verificada m-0">Peso Total</h3>
                                <p class="texto-informacion-carga-verificada m-0">20 TN</p>
                            </div>
                        </div>
                        <div class=" d-flex mb-3">
                            <div class=" w-50 p-2 bg-white border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-verificada m-0">Volumen</h3>
                                <p class="texto-informacion-carga-verificada m-0">38 M³</p>
                            </div>
                            <div class=" w-50 p-2 bg-white border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-verificada m-0">Equipo</h3>
                                <p class="texto-informacion-carga-verificada m-0">Semi Estandar</p>
                            </div>
                        </div>
                        <div class=" p-2 bg-white border border-2 border-end-0 border-start-0 mb-2 d-grid gap-2">
                            <p class="m-0 importante-carga-verificada pago-verificada">USD 480:000</p>
                            <p class="m-0 importante-carga-verificada"><span>Pago:</span> Transferencia Bancaria</p>
                            <p class="m-0 importante-carga-verificada">Pago dentro de las 48hs del viaje</p>
                        </div>
                        <div class=" p-2 d-grid gap-3">
                            <p class="m-0 fecha-carga-promocionada">Publicada: 06/02/2026</p>
                            <button type="button" class=" btn btn-carga-verificada" value="id-carga">Ofertar Ahora</button>
                        </div>

                    </div>

                    <div class="carga-promocionada shadow-sm">
                        <span class="d-flex align-items-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#FFC107">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z" />
                            </svg>
                            <h3 class="promocionado-carga-promocionada m-0">
                                Promocionado
                            </h3>
                        </span>
                        <div class=" d-flex p-2 justify-content-between align-content-center gap-1">
                            <p class="indicadores-carga-promocionada m-0">Carga General</p>
                            <p class="indicadores-estado-carga-promocionada m-0">Abierta</p>
                        </div>
                        <div class=" d-grid p-2">
                            <p class="ubicacion-carga-promocionada d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Salto Nuevo, Salto, Uruguay
                            </p>
                            <p class="ubicacion-carga-promocionada d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Minas, Lavalleja, Uruguay
                            </p>
                        </div>
                        <div class=" d-flex">
                            <div class=" w-50 p-2 bg-light border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-promocionada m-0">Carga</h3>
                                <p class="texto-informacion-carga-promocionada m-0">Arroz en Bolsa</p>
                            </div>
                            <div class=" w-50 p-2 bg-light border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-promocionada m-0">Peso Total</h3>
                                <p class="texto-informacion-carga-promocionada m-0">20 TN</p>
                            </div>
                        </div>
                        <div class=" d-flex mb-3">
                            <div class=" w-50 p-2 bg-white border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-promocionada m-0">Volumen</h3>
                                <p class="texto-informacion-carga-promocionada m-0">38 M³</p>
                            </div>
                            <div class=" w-50 p-2 bg-white border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-promocionada m-0">Equipo</h3>
                                <p class="texto-informacion-carga-promocionada m-0">Semi Estandar</p>
                            </div>
                        </div>
                        <div class=" p-2 bg-white border border-2 border-end-0 border-start-0 mb-2 d-grid gap-2">
                            <p class="m-0 importante-carga-promocionada pago-promocionada">USD 480:000</p>
                            <p class="m-0 importante-carga-promocionada"><span>Pago:</span> Transferencia Bancaria</p>
                            <p class="m-0 importante-carga-promocionada">Pago dentro de las 48hs del viaje</p>
                        </div>
                        <div class=" p-2 d-grid gap-3">
                            <p class="m-0 fecha-carga-promocionada">Publicada: 06/02/2026</p>
                            <button type="button" class=" btn btn-carga-promocionada" value="id-carga">Ofertar Ahora</button>
                        </div>

                    </div>

                    <div class="carga-verificada shadow-sm">
                        <span class="d-flex align-items-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#004aad">
                                <path d="m344-60-76-128-144-32 14-148-98-112 98-112-14-148 144-32 76-128 136 58 136-58 76 128 144 32-14 148 98 112-98 112 14 148-144 32-76 128-136-58-136 58Zm34-102 102-44 104 44 56-96 110-26-10-112 74-84-74-86 10-112-110-24-58-96-102 44-104-44-56 96-110 24 10 112-74 86 74 84-10 114 110 24 58 96Zm102-318Zm-42 142 226-226-56-58-170 170-86-84-56 56 142 142Z" />
                            </svg>
                            <h3 class="verificado-carga-verificada m-0">
                                Verificado
                            </h3>
                        </span>
                        <div class=" d-flex p-2 justify-content-between align-content-center gap-1">
                            <p class="indicadores-carga-verificada m-0">Carga General</p>
                            <p class="indicadores-estado-carga-verificada m-0">Abierta</p>
                        </div>
                        <div class=" d-grid p-2">
                            <p class="ubicacion-carga-verificada d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Salto Nuevo, Salto, Uruguay
                            </p>
                            <p class="ubicacion-carga-verificada d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Minas, Lavalleja, Uruguay
                            </p>
                        </div>
                        <div class=" d-flex">
                            <div class=" w-50 p-2 bg-light border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-verificada m-0">Carga</h3>
                                <p class="texto-informacion-carga-verificada m-0">Arroz en Bolsa</p>
                            </div>
                            <div class=" w-50 p-2 bg-light border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-verificada m-0">Peso Total</h3>
                                <p class="texto-informacion-carga-verificada m-0">20 TN</p>
                            </div>
                        </div>
                        <div class=" d-flex mb-3">
                            <div class=" w-50 p-2 bg-white border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-verificada m-0">Volumen</h3>
                                <p class="texto-informacion-carga-verificada m-0">38 M³</p>
                            </div>
                            <div class=" w-50 p-2 bg-white border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-verificada m-0">Equipo</h3>
                                <p class="texto-informacion-carga-verificada m-0">Semi Estandar</p>
                            </div>
                        </div>
                        <div class=" p-2 bg-white border border-2 border-end-0 border-start-0 mb-2 d-grid gap-2">
                            <p class="m-0 importante-carga-verificada pago-verificada">USD 480:000</p>
                            <p class="m-0 importante-carga-verificada"><span>Pago:</span> Transferencia Bancaria</p>
                            <p class="m-0 importante-carga-verificada">Pago dentro de las 48hs del viaje</p>
                        </div>
                        <div class=" p-2 d-grid gap-3">
                            <p class="m-0 fecha-carga-promocionada">Publicada: 06/02/2026</p>
                            <button type="button" class=" btn btn-carga-verificada" value="id-carga">Ofertar Ahora</button>
                        </div>

                    </div>

                    <div class="carga-promocionada shadow-sm">
                        <span class="d-flex align-items-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#FFC107">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z" />
                            </svg>
                            <h3 class="promocionado-carga-promocionada m-0">
                                Promocionado
                            </h3>
                        </span>
                        <div class=" d-flex p-2 justify-content-between align-content-center gap-1">
                            <p class="indicadores-carga-promocionada m-0">Carga General</p>
                            <p class="indicadores-estado-carga-promocionada m-0">Abierta</p>
                        </div>
                        <div class=" d-grid p-2">
                            <p class="ubicacion-carga-promocionada d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Salto Nuevo, Salto, Uruguay
                            </p>
                            <p class="ubicacion-carga-promocionada d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Minas, Lavalleja, Uruguay
                            </p>
                        </div>
                        <div class=" d-flex">
                            <div class=" w-50 p-2 bg-light border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-promocionada m-0">Carga</h3>
                                <p class="texto-informacion-carga-promocionada m-0">Arroz en Bolsa</p>
                            </div>
                            <div class=" w-50 p-2 bg-light border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-promocionada m-0">Peso Total</h3>
                                <p class="texto-informacion-carga-promocionada m-0">20 TN</p>
                            </div>
                        </div>
                        <div class=" d-flex mb-3">
                            <div class=" w-50 p-2 bg-white border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-promocionada m-0">Volumen</h3>
                                <p class="texto-informacion-carga-promocionada m-0">38 M³</p>
                            </div>
                            <div class=" w-50 p-2 bg-white border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-promocionada m-0">Equipo</h3>
                                <p class="texto-informacion-carga-promocionada m-0">Semi Estandar</p>
                            </div>
                        </div>
                        <div class=" p-2 bg-white border border-2 border-end-0 border-start-0 mb-2 d-grid gap-2">
                            <p class="m-0 importante-carga-promocionada pago-promocionada">USD 480:000</p>
                            <p class="m-0 importante-carga-promocionada"><span>Pago:</span> Transferencia Bancaria</p>
                            <p class="m-0 importante-carga-promocionada">Pago dentro de las 48hs del viaje</p>
                        </div>
                        <div class=" p-2 d-grid gap-3">
                            <p class="m-0 fecha-carga-promocionada">Publicada: 06/02/2026</p>
                            <button type="button" class=" btn btn-carga-promocionada" value="id-carga">Ofertar Ahora</button>
                        </div>

                    </div>

                    <div class="carga-verificada shadow-sm">
                        <span class="d-flex align-items-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#004aad">
                                <path d="m344-60-76-128-144-32 14-148-98-112 98-112-14-148 144-32 76-128 136 58 136-58 76 128 144 32-14 148 98 112-98 112 14 148-144 32-76 128-136-58-136 58Zm34-102 102-44 104 44 56-96 110-26-10-112 74-84-74-86 10-112-110-24-58-96-102 44-104-44-56 96-110 24 10 112-74 86 74 84-10 114 110 24 58 96Zm102-318Zm-42 142 226-226-56-58-170 170-86-84-56 56 142 142Z" />
                            </svg>
                            <h3 class="verificado-carga-verificada m-0">
                                Verificado
                            </h3>
                        </span>
                        <div class=" d-flex p-2 justify-content-between align-content-center gap-1">
                            <p class="indicadores-carga-verificada m-0">Carga General</p>
                            <p class="indicadores-estado-carga-verificada m-0">Abierta</p>
                        </div>
                        <div class=" d-grid p-2">
                            <p class="ubicacion-carga-verificada d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Salto Nuevo, Salto, Uruguay
                            </p>
                            <p class="ubicacion-carga-verificada d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Minas, Lavalleja, Uruguay
                            </p>
                        </div>
                        <div class=" d-flex">
                            <div class=" w-50 p-2 bg-light border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-verificada m-0">Carga</h3>
                                <p class="texto-informacion-carga-verificada m-0">Arroz en Bolsa</p>
                            </div>
                            <div class=" w-50 p-2 bg-light border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-verificada m-0">Peso Total</h3>
                                <p class="texto-informacion-carga-verificada m-0">20 TN</p>
                            </div>
                        </div>
                        <div class=" d-flex mb-3">
                            <div class=" w-50 p-2 bg-white border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-verificada m-0">Volumen</h3>
                                <p class="texto-informacion-carga-verificada m-0">38 M³</p>
                            </div>
                            <div class=" w-50 p-2 bg-white border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-verificada m-0">Equipo</h3>
                                <p class="texto-informacion-carga-verificada m-0">Semi Estandar</p>
                            </div>
                        </div>
                        <div class=" p-2 bg-white border border-2 border-end-0 border-start-0 mb-2 d-grid gap-2">
                            <p class="m-0 importante-carga-verificada pago-verificada">USD 480:000</p>
                            <p class="m-0 importante-carga-verificada"><span>Pago:</span> Transferencia Bancaria</p>
                            <p class="m-0 importante-carga-verificada">Pago dentro de las 48hs del viaje</p>
                        </div>
                        <div class=" p-2 d-grid gap-3">
                            <p class="m-0 fecha-carga-promocionada">Publicada: 06/02/2026</p>
                            <button type="button" class=" btn btn-carga-verificada" value="id-carga">Ofertar Ahora</button>
                        </div>

                    </div>

                    <div class="carga-promocionada shadow-sm">
                        <span class="d-flex align-items-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#FFC107">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z" />
                            </svg>
                            <h3 class="promocionado-carga-promocionada m-0">
                                Promocionado
                            </h3>
                        </span>
                        <div class=" d-flex p-2 justify-content-between align-content-center gap-1">
                            <p class="indicadores-carga-promocionada m-0">Carga General</p>
                            <p class="indicadores-estado-carga-promocionada m-0">Abierta</p>
                        </div>
                        <div class=" d-grid p-2">
                            <p class="ubicacion-carga-promocionada d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Salto Nuevo, Salto, Uruguay
                            </p>
                            <p class="ubicacion-carga-promocionada d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Minas, Lavalleja, Uruguay
                            </p>
                        </div>
                        <div class=" d-flex">
                            <div class=" w-50 p-2 bg-light border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-promocionada m-0">Carga</h3>
                                <p class="texto-informacion-carga-promocionada m-0">Arroz en Bolsa</p>
                            </div>
                            <div class=" w-50 p-2 bg-light border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-promocionada m-0">Peso Total</h3>
                                <p class="texto-informacion-carga-promocionada m-0">20 TN</p>
                            </div>
                        </div>
                        <div class=" d-flex mb-3">
                            <div class=" w-50 p-2 bg-white border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-promocionada m-0">Volumen</h3>
                                <p class="texto-informacion-carga-promocionada m-0">38 M³</p>
                            </div>
                            <div class=" w-50 p-2 bg-white border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-promocionada m-0">Equipo</h3>
                                <p class="texto-informacion-carga-promocionada m-0">Semi Estandar</p>
                            </div>
                        </div>
                        <div class=" p-2 bg-white border border-2 border-end-0 border-start-0 mb-2 d-grid gap-2">
                            <p class="m-0 importante-carga-promocionada pago-promocionada">USD 480:000</p>
                            <p class="m-0 importante-carga-promocionada"><span>Pago:</span> Transferencia Bancaria</p>
                            <p class="m-0 importante-carga-promocionada">Pago dentro de las 48hs del viaje</p>
                        </div>
                        <div class=" p-2 d-grid gap-3">
                            <p class="m-0 fecha-carga-promocionada">Publicada: 06/02/2026</p>
                            <button type="button" class=" btn btn-carga-promocionada" value="id-carga">Ofertar Ahora</button>
                        </div>

                    </div>

                    <div class="carga-verificada shadow-sm">
                        <span class="d-flex align-items-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#004aad">
                                <path d="m344-60-76-128-144-32 14-148-98-112 98-112-14-148 144-32 76-128 136 58 136-58 76 128 144 32-14 148 98 112-98 112 14 148-144 32-76 128-136-58-136 58Zm34-102 102-44 104 44 56-96 110-26-10-112 74-84-74-86 10-112-110-24-58-96-102 44-104-44-56 96-110 24 10 112-74 86 74 84-10 114 110 24 58 96Zm102-318Zm-42 142 226-226-56-58-170 170-86-84-56 56 142 142Z" />
                            </svg>
                            <h3 class="verificado-carga-verificada m-0">
                                Verificado
                            </h3>
                        </span>
                        <div class=" d-flex p-2 justify-content-between align-content-center gap-1">
                            <p class="indicadores-carga-verificada m-0">Carga General</p>
                            <p class="indicadores-estado-carga-verificada m-0">Abierta</p>
                        </div>
                        <div class=" d-grid p-2">
                            <p class="ubicacion-carga-verificada d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Salto Nuevo, Salto, Uruguay
                            </p>
                            <p class="ubicacion-carga-verificada d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Minas, Lavalleja, Uruguay
                            </p>
                        </div>
                        <div class=" d-flex">
                            <div class=" w-50 p-2 bg-light border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-verificada m-0">Carga</h3>
                                <p class="texto-informacion-carga-verificada m-0">Arroz en Bolsa</p>
                            </div>
                            <div class=" w-50 p-2 bg-light border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-verificada m-0">Peso Total</h3>
                                <p class="texto-informacion-carga-verificada m-0">20 TN</p>
                            </div>
                        </div>
                        <div class=" d-flex mb-3">
                            <div class=" w-50 p-2 bg-white border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-verificada m-0">Volumen</h3>
                                <p class="texto-informacion-carga-verificada m-0">38 M³</p>
                            </div>
                            <div class=" w-50 p-2 bg-white border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-verificada m-0">Equipo</h3>
                                <p class="texto-informacion-carga-verificada m-0">Semi Estandar</p>
                            </div>
                        </div>
                        <div class=" p-2 bg-white border border-2 border-end-0 border-start-0 mb-2 d-grid gap-2">
                            <p class="m-0 importante-carga-verificada pago-verificada">USD 480:000</p>
                            <p class="m-0 importante-carga-verificada"><span>Pago:</span> Transferencia Bancaria</p>
                            <p class="m-0 importante-carga-verificada">Pago dentro de las 48hs del viaje</p>
                        </div>
                        <div class=" p-2 d-grid gap-3">
                            <p class="m-0 fecha-carga-promocionada">Publicada: 06/02/2026</p>
                            <button type="button" class=" btn btn-carga-verificada" value="id-carga">Ofertar Ahora</button>
                        </div>

                    </div>

                </div>
            </div>
            <div class=" gap-2 w-100">
                <h1 class="sec-comunes-h1 w-100">Cargas disponibles</h1>
                <div class="sec-comunes rounded rounded-1 shadow-sm gap-3 p-3">

                    <div class="carga-comun d-grid justify-content-center p-2 gap-2">
                        <div class="cont-carga-comun d-grid p-3">
                            <h3 class="titulo-carga-comun">Carga de transporte nacional - Montevideo</h3>
                            <div>
                                <p class="ubicacion-carga-comun d-inline-flex align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                            <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                        </svg>
                                    </span>
                                    Salto Nuevo, Salto, Uruguay
                                </p>
                                <p class="ubicacion-carga-comun d-inline-flex align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                            <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                        </svg>
                                    </span>
                                    Minas, Lavalleja, Uruguay
                                </p>
                            </div>
                            <div class=" d-flex flex-wrap gap-1">
                                <p class="info-carga-comun">USD 480.000</p>
                                <p class="info-carga-comun">Abierta</p>
                                <p class="info-carga-comun">Transgerencia Bancaria</p>
                                <p class="info-carga-comun">Carga Nacional</p>
                            </div>
                        </div>
                        <button type="button" class=" btn btn-carga-comun" value="id-carga">Ofertar Ahora</button>
                    </div>

                    <div class="carga-comun d-grid justify-content-center p-2 gap-2">
                        <div class="cont-carga-comun d-grid p-3">
                            <h3 class="titulo-carga-comun">Carga de transporte nacional - Montevideo</h3>
                            <div>
                                <p class="ubicacion-carga-comun d-inline-flex align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                            <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                        </svg>
                                    </span>
                                    Salto Nuevo, Salto, Uruguay
                                </p>
                                <p class="ubicacion-carga-comun d-inline-flex align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                            <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                        </svg>
                                    </span>
                                    Minas, Lavalleja, Uruguay
                                </p>
                            </div>
                            <div class=" d-flex flex-wrap gap-1">
                                <p class="info-carga-comun">USD 480.000</p>
                                <p class="info-carga-comun">Abierta</p>
                                <p class="info-carga-comun">Transgerencia Bancaria</p>
                                <p class="info-carga-comun">Carga Nacional</p>
                            </div>
                        </div>
                        <button type="button" class=" btn btn-carga-comun" value="id-carga">Ofertar Ahora</button>
                    </div>

                    <div class="carga-comun d-grid justify-content-center p-2 gap-2">
                        <div class="cont-carga-comun d-grid p-3">
                            <h3 class="titulo-carga-comun">Carga de transporte nacional - Montevideo</h3>
                            <div>
                                <p class="ubicacion-carga-comun d-inline-flex align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                            <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                        </svg>
                                    </span>
                                    Salto Nuevo, Salto, Uruguay
                                </p>
                                <p class="ubicacion-carga-comun d-inline-flex align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                            <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                        </svg>
                                    </span>
                                    Minas, Lavalleja, Uruguay
                                </p>
                            </div>
                            <div class=" d-flex flex-wrap gap-1">
                                <p class="info-carga-comun">USD 480.000</p>
                                <p class="info-carga-comun">Abierta</p>
                                <p class="info-carga-comun">Transgerencia Bancaria</p>
                                <p class="info-carga-comun">Carga Nacional</p>
                            </div>
                        </div>
                        <button type="button" class=" btn btn-carga-comun" value="id-carga">Ofertar Ahora</button>
                    </div>

                    <div class="carga-comun d-grid justify-content-center p-2 gap-2">
                        <div class="cont-carga-comun d-grid p-3">
                            <h3 class="titulo-carga-comun">Carga de transporte nacional - Montevideo</h3>
                            <div>
                                <p class="ubicacion-carga-comun d-inline-flex align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                            <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                        </svg>
                                    </span>
                                    Salto Nuevo, Salto, Uruguay
                                </p>
                                <p class="ubicacion-carga-comun d-inline-flex align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                            <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                        </svg>
                                    </span>
                                    Minas, Lavalleja, Uruguay
                                </p>
                            </div>
                            <div class=" d-flex flex-wrap gap-1">
                                <p class="info-carga-comun">USD 480.000</p>
                                <p class="info-carga-comun">Abierta</p>
                                <p class="info-carga-comun">Transgerencia Bancaria</p>
                                <p class="info-carga-comun">Carga Nacional</p>
                            </div>
                        </div>
                        <button type="button" class=" btn btn-carga-comun" value="id-carga">Ofertar Ahora</button>
                    </div>

                    <div class="carga-comun d-grid justify-content-center p-2 gap-2">
                        <div class="cont-carga-comun d-grid p-3">
                            <h3 class="titulo-carga-comun">Carga de transporte nacional - Montevideo</h3>
                            <div>
                                <p class="ubicacion-carga-comun d-inline-flex align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                            <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                        </svg>
                                    </span>
                                    Salto Nuevo, Salto, Uruguay
                                </p>
                                <p class="ubicacion-carga-comun d-inline-flex align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                            <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                        </svg>
                                    </span>
                                    Minas, Lavalleja, Uruguay
                                </p>
                            </div>
                            <div class=" d-flex flex-wrap gap-1">
                                <p class="info-carga-comun">USD 480.000</p>
                                <p class="info-carga-comun">Abierta</p>
                                <p class="info-carga-comun">Transgerencia Bancaria</p>
                                <p class="info-carga-comun">Carga Nacional</p>
                            </div>
                        </div>
                        <button type="button" class=" btn btn-carga-comun" value="id-carga">Ofertar Ahora</button>
                    </div>

                    <div class="carga-comun d-grid justify-content-center p-2 gap-2">
                        <div class="cont-carga-comun d-grid p-3">
                            <h3 class="titulo-carga-comun">Carga de transporte nacional - Montevideo</h3>
                            <div>
                                <p class="ubicacion-carga-comun d-inline-flex align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                            <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                        </svg>
                                    </span>
                                    Salto Nuevo, Salto, Uruguay
                                </p>
                                <p class="ubicacion-carga-comun d-inline-flex align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                            <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                        </svg>
                                    </span>
                                    Minas, Lavalleja, Uruguay
                                </p>
                            </div>
                            <div class=" d-flex flex-wrap gap-1">
                                <p class="info-carga-comun">USD 480.000</p>
                                <p class="info-carga-comun">Abierta</p>
                                <p class="info-carga-comun">Transgerencia Bancaria</p>
                                <p class="info-carga-comun">Carga Nacional</p>
                            </div>
                        </div>
                        <button type="button" class=" btn btn-carga-comun" value="id-carga">Ofertar Ahora</button>
                    </div>

                    <div class="carga-comun d-grid justify-content-center p-2 gap-2">
                        <div class="cont-carga-comun d-grid p-3">
                            <h3 class="titulo-carga-comun">Carga de transporte nacional - Montevideo</h3>
                            <div>
                                <p class="ubicacion-carga-comun d-inline-flex align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                            <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                        </svg>
                                    </span>
                                    Salto Nuevo, Salto, Uruguay
                                </p>
                                <p class="ubicacion-carga-comun d-inline-flex align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                            <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                        </svg>
                                    </span>
                                    Minas, Lavalleja, Uruguay
                                </p>
                            </div>
                            <div class=" d-flex flex-wrap gap-1">
                                <p class="info-carga-comun">USD 480.000</p>
                                <p class="info-carga-comun">Abierta</p>
                                <p class="info-carga-comun">Transgerencia Bancaria</p>
                                <p class="info-carga-comun">Carga Nacional</p>
                            </div>
                        </div>
                        <button type="button" class=" btn btn-carga-comun" value="id-carga">Ofertar Ahora</button>
                    </div>

                    <div class="carga-comun d-grid justify-content-center p-2 gap-2">
                        <div class="cont-carga-comun d-grid p-3">
                            <h3 class="titulo-carga-comun">Carga de transporte nacional - Montevideo</h3>
                            <div>
                                <p class="ubicacion-carga-comun d-inline-flex align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                            <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                        </svg>
                                    </span>
                                    Salto Nuevo, Salto, Uruguay
                                </p>
                                <p class="ubicacion-carga-comun d-inline-flex align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                            <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                        </svg>
                                    </span>
                                    Minas, Lavalleja, Uruguay
                                </p>
                            </div>
                            <div class=" d-flex flex-wrap gap-1">
                                <p class="info-carga-comun">USD 480.000</p>
                                <p class="info-carga-comun">Abierta</p>
                                <p class="info-carga-comun">Transgerencia Bancaria</p>
                                <p class="info-carga-comun">Carga Nacional</p>
                            </div>
                        </div>
                        <button type="button" class=" btn btn-carga-comun" value="id-carga">Ofertar Ahora</button>
                    </div>
                </div>
                <div class="sec-condicionales gap-3 p-3">
                    <div class="carga-mayorpaga shadow-sm">
                        <div class=" d-flex p-2 justify-content-between align-content-center gap-1">
                            <p class="indicadores-carga-mayorpaga m-0">Carga General</p>
                            <p class="indicadores-estado-carga-mayorpaga m-0">Abierta</p>
                        </div>
                        <div class=" d-grid p-2">
                            <p class="ubicacion-carga-mayorpaga d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Salto Nuevo, Salto, Uruguay
                            </p>
                            <p class="ubicacion-carga-mayorpaga d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Minas, Lavalleja, Uruguay
                            </p>
                        </div>
                        <div class=" d-flex">
                            <div class=" w-50 p-2 bg-light border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-mayorpaga m-0">Carga</h3>
                                <p class="texto-informacion-carga-mayorpaga m-0">Arroz en Bolsa</p>
                            </div>
                            <div class=" w-50 p-2 bg-light border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-mayorpaga m-0">Peso Total</h3>
                                <p class="texto-informacion-carga-mayorpaga m-0">20 TN</p>
                            </div>
                        </div>
                        <div class=" d-flex mb-3">
                            <div class=" w-50 p-2 bg-white border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-mayorpaga m-0">Volumen</h3>
                                <p class="texto-informacion-carga-mayorpaga m-0">38 M³</p>
                            </div>
                            <div class=" w-50 p-2 bg-white border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-mayorpaga m-0">Equipo</h3>
                                <p class="texto-informacion-carga-mayorpaga m-0">Semi Estandar</p>
                            </div>
                        </div>
                        <div class=" p-2 bg-white border border-2 border-end-0 border-start-0 mb-2 d-grid gap-2">
                            <p class="m-0 importante-carga-mayorpaga pago-mayorpaga">USD 480:000</p>
                            <p class="m-0 importante-carga-mayorpaga"><span>Pago:</span> Transferencia Bancaria</p>
                            <p class="m-0 importante-carga-mayorpaga">Pago dentro de las 48hs del viaje</p>
                        </div>
                        <div class=" p-2 d-grid gap-3">
                            <p class="m-0 fecha-carga-promocionada">Publicada: 06/02/2026</p>
                            <button type="button" class=" btn btn-carga-mayorpaga" value="id-carga">Ofertar Ahora</button>
                        </div>

                    </div>
                    
                    <div class="carga-avencer shadow-sm">
                        <div class=" d-flex p-2 justify-content-between align-content-center gap-1">
                            <p class="indicadores-carga-avencer m-0">Carga General</p>
                            <p class="indicadores-estado-carga-avencer m-0">Abierta</p>
                        </div>
                        <div class=" d-grid p-2">
                            <p class="ubicacion-carga-avencer d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#004aad">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Salto Nuevo, Salto, Uruguay
                            </p>
                            <p class="ubicacion-carga-avencer d-inline-flex align-items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#009739">
                                        <path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg>
                                </span>
                                Minas, Lavalleja, Uruguay
                            </p>
                        </div>
                        <div class=" d-flex">
                            <div class=" w-50 p-2 bg-light border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-avencer m-0">Carga</h3>
                                <p class="texto-informacion-carga-avencer m-0">Arroz en Bolsa</p>
                            </div>
                            <div class=" w-50 p-2 bg-light border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-avencer m-0">Peso Total</h3>
                                <p class="texto-informacion-carga-avencer m-0">20 TN</p>
                            </div>
                        </div>
                        <div class=" d-flex mb-3">
                            <div class=" w-50 p-2 bg-white border border-2 border-start-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-avencer m-0">Volumen</h3>
                                <p class="texto-informacion-carga-avencer m-0">38 M³</p>
                            </div>
                            <div class=" w-50 p-2 bg-white border border-2 border-end-0 d-grid gap-1">
                                <h3 class="titulo-informacion-carga-avencer m-0">Equipo</h3>
                                <p class="texto-informacion-carga-avencer m-0">Semi Estandar</p>
                            </div>
                        </div>
                        <div class=" p-2 bg-white border border-2 border-end-0 border-start-0 mb-2 d-grid gap-2">
                            <p class="m-0 importante-carga-avencer pago-avencer">USD 480:000</p>
                            <p class="m-0 importante-carga-avencer"><span>Pago:</span> Transferencia Bancaria</p>
                            <p class="m-0 importante-carga-avencer">Pago dentro de las 48hs del viaje</p>
                        </div>
                        <div class=" p-2 d-grid gap-3">
                            <p class="m-0 fecha-carga-promocionada">Publicada: 06/02/2026</p>
                            <button type="button" class=" btn btn-carga-avencer" value="id-carga">Ofertar Ahora</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>