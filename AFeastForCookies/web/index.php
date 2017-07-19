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
		$message = 'WW91IGdvdCBpdCEgRmxhZzogc2Vzc2lvbl9jb29raWVzX3dpdGhfcmFpc2lucw==';
		setcookie("ruh_roh_session", $message, time() + 7200);
	?>

    <body>

    	<p>
    		Shaggy and Scooby ate all of the Scooby Snacks and are still hungry. Let's see what kind of other snacks they can find!
	    </p>
		<h3>What kind of snacks did they find?</h3>
	    <form action="" method="post">
			<input type="text" name="cookies" value="<?php echo $val; ?>">
			<input type="submit" value="Submit">
		</form>

    </body>

</html>
