<?php
include_once('./components/header.php');
?>

<div id="content">
    <div class="p-10 relative bg-[#4d148c]">
        <img class="mx-auto" src="./../assets/img/logo.png" alt="">
        <div class="py-10">
            <h1 class="text-[32px] text-white font-bold text-center leading-[33px]">Envío, gestión, rastreo,
                </br>entrega
            </h1>
            <p class="text-white text-center py-3 text-[14px]">Ingrese su numero de identificación para consultar el
                estado
                de
                su envío.</p>
        </div>
        <input id="userId" class="w-full rounded-full bg-white py-4 px-8 bg-whtie"
            placeholder="Ingrese su cédula de ciudananía"></input>
        <div class="px-10 absolute bottom-[-28px] left-[50%] translate-x-[-50%] w-full">
            <button id="getUserInfo"
                class="bg-[#ff6200] w-full rounded-full py-4 px-8 bg-whtie text-white font-semibold hover:bg-[#ff7200] transition ease-out">Rastrear</button>
        </div>
    </div>
    <div>
        <img class="w-full" src="./../assets/img/O35t61T.png" alt="O35t61T">
        <img class="w-full" src="./../assets/img/lXFkWZM.png" alt="lXFkWZM">
        <img class="w-full" src="./../assets/img/xTlfQ0w.png" alt="xTlfQ0w">
    </div>
</div>

<!-- loading -->
<?php
include_once('./components/loading.php');
?>
<!-- loading -->

<?php
include_once('./components/footer.php');
?>