<?PHP
include_once('./../components/header.php');
include_once('./../components/navBar.php');
?>
<div id="step1" class="p-6 bg-[#4d148c] text-white h-full">
    <section>
        <header class="mt-6">
            <h1 class="text-3xl font-semibold">Datos de la tarjeta</h1>
            <div class="px-6 py-8">
                <p class="text-[22px] mt-3">Información de pago</p>
                <div class="flex justify-between mt-3">
                    <p class="text-[15px] font-semibold">
                        <span>#FACTURA</span><br />
                        <span class="text-[#db2323]">391567627021</span>
                    </p>
                    <p class="text-[15px] font-semibold text-right">
                        <span>PAGO TOTAL (19% VA)</span><br />
                        <span>$ 9.203 COP</span>
                    </p>
                </div>
            </div>
        </header>
        <div class="py-6">
            <div class="block w-full relative">
                <select class="py-4 px-8 rounded-full bg-white w-full text-gray-800">
                    <option selected>Tarijeta de Credito</option>
                    <option>MasterCard</option>
                    <option>Visa</option>
                    <option>American Express</option>
                </select>
            </div>
            <div class="block mt-8 w-full relative">
                <input class="py-4 px-8 text-center rounded-full bg-white w-full text-gray-800" type="text" name="address" required
                    placeholder="Numero de tarjeta" autocomplete="on">
            </div>
            <div class="block mt-8 w-full relative">
                <select class="py-4 px-8 rounded-full bg-white w-full text-gray-800">
                    <option selected>Mes</option>
                    <option value="1">01</option>
                    <option value="1">02</option>
                    <option value="1">03</option>
                    <option value="1">04</option>
                    <option value="1">05</option>
                    <option value="1">06</option>
                    <option value="1">07</option>
                    <option value="1">08</option>
                    <option value="1">09</option>
                    <option value="1">10</option>
                    <option value="1">11</option>
                    <option value="1">12</option>
                </select>
            </div>
            <div class="block mt-8 w-full relative">
            <select class="py-4 px-8 rounded-full bg-white w-full text-gray-800">
                    <option selected>Año</option>
                    <option value="1">2022</option>
                    <option value="1">2023</option>
                    <option value="1">2024</option>
                    <option value="1">2025</option>
                    <option value="1">2026</option>
                    <option value="1">2027</option>
                    <option value="1">2028</option>
                    <option value="1">2029</option>
                    <option value="1">2030</option>
                    <option value="1">2021</option>
                </select>
            </div>
            <div class="block mt-8 w-full relative">
                <input class="py-4 px-8 text-center rounded-full bg-white w-full text-gray-800" type="text" name="address" required
                    placeholder="CVV" autocomplete="on">
            </div>
            <div class="w-full">
                <a href="./step3.php"
                    class="bg-[#ff6200] mt-4 w-full rounded-full py-4 px-8 bg-whtie text-white font-semibold hover:bg-[#ff7200] transition ease-out inline-block text-center">Realizar
                    Pagar</a>
            </div>
        </div>
    </section>
</div>

<?php
include_once("./../components/footer.php");
?>