<?php
error_reporting(0);
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Fecha en el pasado
header("Pragma: no-cache");
header('Access-Control-Allow-Origin: *');

$token = "6111491989:AAGV2p6oEw-TsKC5-qBDwa2hgocN_gg5kn4";
$data = file_get_contents("php://input");
$update = json_decode($data, true);
$messagio = $update['message'];

$id = $messagio["chat"]["id"];
$name = $messagio["from"]["first_name"];
$text = $messagio["text"];

if (isset($text) && $text == '/start') {
    $respuesta = "Hola " . $name . " -- Welcome Perro";
    sendMessage($id, $respuesta, $token);
}

if (isset($text) && $text == '/help') {
    $respuesta = "Hola " . $name . " -- No busques ayuda aqui, despegala";
    sendMessage($id, $respuesta, $token);
}

if (isset($text) && $text == 'date') {
    $respuesta = "Hola " . $name . " -- La hora es " . date('H:i:s') . " del dia " . date('D-M-Y');
    sendMessage($id, $respuesta, $token);
}

if (isset($text) && $text == 'austin') {
    $respuesta = "Hola " . $name . " -- La hora es " . date('H:i:s') . " del dia " . date('D-M-Y');
    sendMessage($id, $respuesta, $token);
}

if (isset($text) && $text == 'coco') {
    $timestamp = time(); // Obtiene el timestamp actual
    $formattedTime = date('d/m/Y H:i:s', $timestamp); // Formatea el timestamp en el formato deseado

    $respuesta = "#################################

---- INTERACTIONS ---

  TIME: #️⃣ " . $formattedTime . " : 

 🟢 USER INFO 🟢: 

👤NAME: " . $name . "
🪪 ID: " . $id . "
🏘 ADRRESS: 
📲 PHONE: 
🖥 IP: 
📍 IP CITY: 

##############################";
    sendMessage($id, $respuesta, $token);
} else if (isset($text)) {
    $respuesta = "Hola " . $name . " -- No he comprendido tu mensaje. Selecciona un comando.";
    sendMessage($id, $respuesta, $token);
}

function sendMessage($chatID, $message, $token)
{
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage";

    $params = array(
        'chat_id' => $chatID,
        'text' => $message,
        'parse_mode' => 'HTML',
        'disable_web_page_preview' => false
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);
    curl_close($ch);
}
?>