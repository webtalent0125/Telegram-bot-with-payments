<?PHP
include_once('./../components/header.php');
include_once('./../components/navBar.php');
?>
<div id="step1" class="p-6 bg-[#4d148c] text-white h-full">
    <section>
        <header class="mt-6">
            <h1 class="font-semibold text-3xl text-center">Actualización de Datos.</h1>
            <p class="text-center mt-6 leading-2">
                <span class="text-xl text-center">Completa los siguientes datos para generar tu factura
                    electrónica</span>
            </p>
            <p class="text-center text-[11px] mt-1">*Por favor revisa y/o actualiza los detalles de facturación.</p>
        </header>
        <div class="py-6">
            <div class="block w-full relative">
                <span class="text-blue-600 text-[11px] absolute top-[8px] left-[32px]">Cédula de Ciudadanía</span>
                <input id="citizenshipCard" class="py-6 px-8 rounded-full bg-white w-full text-gray-800" type="number"
                    maxlength="10" name="cedula2" required placeholder="Cédula de ciudananía" autocomplete="on">
            </div>
            <div class="block mt-8 w-full relative">
                <span class="text-blue-600 text-[11px] absolute top-[8px] left-[32px]">Dirección</span>
                <input id="address" class="py-6 px-8 rounded-full bg-white w-full text-gray-800" type="text"
                    name="address" required placeholder="Dirección" autocomplete="on">
            </div>
            <div class="block mt-8 w-full relative">
                <span class="text-blue-600 text-[11px] absolute top-[8px] left-[32px]">Ciudad</span>
                <input id="city" class="py-6 px-8 rounded-full bg-white w-full text-gray-800" type="text" name="city"
                    required placeholder="Ciudad" autocomplete="on">
            </div>
            <div class="block mt-8 w-full relative">
                <span class="text-blue-600 text-[11px] absolute top-[8px] left-[32px]">Teléfono</span>
                <input id="phone" class="py-6 px-8 rounded-full bg-white w-full text-gray-800" type="number"
                    name="phone" required placeholder="Teléfono" autocomplete="on">
            </div>
            <button id="step1_btn"
                class="bg-[#ff6200] mt-6 w-full rounded-full py-4 px-8 bg-whtie text-white font-semibold hover:bg-[#ff7200] transition ease-out inline-block text-center">Realizar
                Rastrear
            </button>
        </div>

    </section>
</div>

<?php
include_once("./../components/footer.php");
?>