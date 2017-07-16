<!DOCTYPE html>
<html>
    <head>
        <title>MouseAndWire</title>
    </head>

    <style>
    p {
        width: 400px;
    }
    </style>

    <body>

    <p>Shaggy and Scooby lost all of their Scooby Snacks. They might look into trying cookies instead. What kind of cookies should they get?</p>

    <?php 

    	$message = "WW91IGdvdCBpdCEgRmxhZzogY29va2llX291c3NpZGVfaG93X2JvdXRfZGF0=="

		setcookie("use_this", $message, time() + 3600);
    
    ?>
    
    <form action="index.php">
		What kind of cookies should they get? <input type="text" name="cookies" placeholder="enter here"><br>
		<input type="submit" value="Submit">
	</form>

    </body>

</html>
