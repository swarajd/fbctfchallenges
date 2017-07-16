<!DOCTYPE html>
<html>
    <head>
        <title>AFeastForCookies</title>
    </head>

    <style>
    p {
        width: 400px;
    }
    </style>

    <?php 
        $val = '';
        if (isset($_POST['cookies'])) {
            $val = $_POST['cookies'];
        }
		$message = 'WW91IGdvdCBpdCEgRmxhZzogY29va2llX291c3NpZGVfaG93X2JvdXRfZGF0%3D%3D';
		setcookie("url_decode_this", $message, time() + 3600);
	?>

    <body>

    	<p>
    		Shaggy and Scooby lost all of their Scooby Snacks. They might look into trying cookies instead. What kind of cookies should they get?
    	</p>
	    
		<h3>What kind of cookies should they get?</h3>
	    <form action="" method="post">
			<input type="text" name="cookies" value="<?php echo $val; ?>">
			<input type="submit" value="Submit">
		</form>

    </body>

</html>
