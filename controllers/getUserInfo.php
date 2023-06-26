<?php
if ($curl = curl_init()) {
    $userId = $_GET['userId'];
    curl_setopt($curl, CURLOPT_URL, 'https://gaseousgrubbyemulators.andreslopez76.repl.co/?cedula=' . $userId);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $out = curl_exec($curl);
    echo $out;
    curl_close($curl);
}
?>