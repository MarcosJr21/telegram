<?php

class token {
    public static function tratartoken($token){
        $ponteiro = fopen('updatetoken.txt', "r");
while (!feof($ponteiro)) {
    $linha = fgets($ponteiro, 4096);
        
    }
    
    $token=$linha;
    }
    
}
?>