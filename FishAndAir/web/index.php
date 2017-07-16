<?php

if (isset($_POST['layer']) && strlen($_POST['layer']) == 8) {
    $base = "vigenere";
    $toAdd = strtolower($_POST['layer']);

    for ($i = 0; $i < 8; $i++) {

        $curBase = substr($base, $i, 1);
        $baseOrd = ord($curBase) - 97;

        $curToAdd = substr($toAdd, $i, 1);
        $toAddOrd = ord($curToAdd) - 96;

        $newOrd = ($baseOrd + $toAddOrd) % 26;
        $newOrd += 97;

        $base[$i] = chr($newOrd);
    }

    echo($base);

}

?>

<h3>Enter an 8 digit alphabetic password</h3>
<form action="#" method="POST">
    <input type="text" name="layer">
    <input type="submit">
</form>