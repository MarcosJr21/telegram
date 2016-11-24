<?php

class mensagem {
    public static function sendMessage($id, $texto) {
    $pon = fopen('updatetoken.txt', "r");
    while (!feof($pon)) {
        $linha = fgets($pon, 200);
    }
    try {
        $url1 = 'https://api.telegram.org/bot' . $linha . '/sendMessage?';
    file_get_contents($url1 . "chat_id=" . $id . "&text=" . $texto);
    
    } catch (Exception $ex) {
        print "Error message envie!: " . $ex->getMessage() . "<br/>";
    }
}
}
