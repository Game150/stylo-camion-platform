        <div class="row justify-content-start ">
            <form action="" method="post" class="d-flex col-12 gap-5">
                <div id="searchbar" class=" d-flex gap-3">
                    <svg class="col-2" id="searchbar-svg" xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 -960 960 960" width="36px" fill="#292828">
                        <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                    </svg>
                    <input type="search" list="busqueda-resultados" name="inputKeywords" class="inputBuscador col" placeholder="Buscar cargas...">
                </div>
                <button type="button" class="btn d-none d-md-block text-nowrap" id="btn-subirCargas" title="Sube nuevas cargas al sistema" data-bs-placement="bottom" data-bs-toggle="tooltip">Subir Cargas</button>
            </form>
            <div >

            </div>
            <div class=" mt-3 d-flex flex-wrap gap-3">
                <select name="nacionalidad-carga" id="" class=" form-select">
                    <optgroup label="País">
                        <option value="">Uruguay</option>
                    </optgroup>
                </select>
                <select name="estado-carga" id="" class=" form-select">
                    <optgroup label="Estado">
                        <option value="">Abierto</option>
                    </optgroup>
                </select>
                <input type="date" name="fecha-carga" id="" class=" form-control" value="<?php echo date('Y-m-d'); ?>">
            </div>
        </div>
        <section id="resultados-cargas" class=" mt-4">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi consequuntur odit, beatae quas illum dolor impedit dolore consectetur saepe dolorum, ipsam velit corporis ea. Quo, vitae tenetur. Nisi, blanditiis dolorem?</p>
        </section>