<?php


class Tokenn {

    public static function tokenin() {
        for($i =0;$i>1;$i++){
        $tokenn = fopen('updatetoken.txt', "r");
        while (!feof($tokenn)) {
            $linha = fgets($tokenn, 4096);
        }
            return $linha;
            print_r($linha);
        }
    }

}
