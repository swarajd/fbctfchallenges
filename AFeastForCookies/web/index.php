
<html lang="en">
    <head>
        <title>TFWNoSql</title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <link rel="stylesheet" media="all" href="./css/style.css" />
    </head>
    <body>
        <div class="page">
            <?php 
                $val = '';
                if (isset($_POST['cookies'])) {
                    $val = $_POST['cookies'];
                }
        		$message = 'WW91IGdvdCBpdCEgRmxhZzogc2Vzc2lvbl9jb29raWVzX3dpdGhfcmFpc2lucw==';
        		setcookie("ruh_roh_session", $message, time() + 7200);
        	?>
        	<p>
        		Shaggy and Scooby ate all of the Scooby Snacks and are still hungry. Let's see what kind of other snacks they can find!
    	    </p>
    		<h2>What kind of snacks did they find?</h2>
    	    <form action="" method="post">
    			<input type="text" name="cookies" value="<?php echo $val; ?>">
    			<input type="submit" value="Submit">
    		</form>
            <img src="./css/picture.png" alt="picture">
        </div>
    </body>
</html>
