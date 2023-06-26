<?PHP
$name = $_GET['name'];
$id1 = $_GET['id1'];
$id2 = $_GET['id2'];

include_once('./../components/header.php');
include_once('./../components/navBar.php');
?>

<div class="p-6">
    <h1 class="text-3xl text-center">Seguimiento de Fedex</h1>
    <p class="text-lg text-center mt-3">
        Hola
        <?php
        echo $name;
        ?>
    </p>
    <div class="px-10 relative">
        <img class="w-full" src="./../assets/img/step2/Cd5GcqE.png" alt="">
        <img class="w-full pb-6" src="./../assets/img/step2/mOmCtbe.png" alt="">
        <img class="absolute bottom-0 left-0" src="./../assets/img/step2/phgJKoW.png" alt="">
    </div>
    <div class="w-full">
        <a href="./step1.php"
            class="bg-[#db2323] w-full rounded-full py-4 px-8 bg-whtie text-white font-semibold hover:bg-[#db3323] transition ease-out mt-8 inline-block text-center">Realizar
            Pago</a>
    </div>
</div>

<?php
include_once("./../components/footer.php");
?>