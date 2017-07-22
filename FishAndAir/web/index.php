<html lang="en">
    <head>
        <title>FishAndAir</title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <link rel="stylesheet" media="all" href="./css/style.css" />
    </head>
    <body>
        <div class="page">
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

                if ($base == "vigenere") {
                    echo('<font color="green"><h3>Flag: ' . $base . '</h3></font>');
                } else{
                    echo('<font color="red"><h3>Wrong: ' . $base . '</h3></font>');
                }
            }
            ?>
            <h2>Enter an 8 digit alphabetic password</h2>
            <form action="#" method="POST">
                <input type="text" name="layer" placeholder="ex.abcdefgh">
                <input type="submit">
            </form>
            <img src="./css/picture.png" alt="picture">
        </div>
    </body>
</html>