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
        </div>
    </form>
    <div id="resultados" class=" w-100 bg-light border-light rounded rounded-2 p-3 shadow-sm">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit exercitationem nihil tempora recusandae aspernatur veniam laudantium voluptatem ratione delectus. A quaerat fuga ut dolorum. Ex pariatur sint quis accusantium voluptates?</p>
    </div>
</section>