<?php
function encrypt($str) {

    $str = strtolower($str);

    $sessid = "c353936a6883a66379f45404fb048c92";
    $strln = strlen($str);

    //I can do this because the str is always the sessid lol
    for ($i = 0; $i < $strln; $i++) {
        $encordval = 0;
        $strordval = 0;

        $cur_enc_char = substr($sessid, $i, 1);
        if (is_numeric($cur_enc_char)) {
            $encordval = (((int)$cur_enc_char + 26) % 26) + 97;
        } else {
            $encordval = ord($cur_enc_char);
        }


        $cur_str_char = substr($str, $i, 1);
        if (is_numeric($cur_str_char)) {
            $strordval = (((int)$cur_str_char + 26) % 26) + 97;
        } else {
            $strordval = ord($cur_str_char);
        }

        $newchar = ((($encordval - 97) + ($strordval - 97)) % 26) + 97;
        // echo(($encordval - 97) . " . " . ($strordval - 97) . " . " . chr($newchar) . "<br/>");
        $str[$i] = chr($newchar);
    }
    return $str;
}

setcookie("helping_hand", "c353936a6883a66379f45404fb048c92");

echo("flag is: " . encrypt("61f6933f179df0c61cba100995e7ebea"));
?>