<?php 
    $got_it = false;
    if(array_key_exists("mouse_wants", $_COOKIE) && preg_match('/([Cc])(ookie)+/', $_COOKIE["mouse_wants"])){
        $got_it = true;
    } else{
        $got_it = false;
        if (time() % 60 == 0) {
            setcookie("mouse_wants", 'something', time()+1);
        }
    }
?>

<html lang="en">
    <head>
        <title>MouseAndWire</title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <link rel="stylesheet" media="all" href="./css/style.css" />
    </head>
    <body>
        <div class="page">
            <p>Scientists are running an experiment. In a room, there is a mouse and a screen with a wire coming into it. If the screen displays an item which the mouse does not want, then the mouse will chew through the wire! The problem is, the technician only comes once every 60 seconds, and we know he clocked in and fixed the wire at 1pm sharp! Help the scientists figure out what the mouse wants.</p>
            <?php
                if ($got_it) {
                    echo('<p>You got it! Flag: glass_of_milk</p>');
                } else {
                    echo("<p>What does the mouse want?</p>");
                    $t = date("h:i:sa", time());
                    echo("<div> it is now: $t </div>");
                }
            ?>
            
            <img src="./css/picture.jpg" alt="picture">
        </div>
    </body>
</html>