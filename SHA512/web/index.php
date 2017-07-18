<!DOCTYPE html>
<!-- 
    Created by Jinwoo Yom
-->
<html lang="en">
    <head>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body>
    	<div class="page">
			<h2>Vi|l^~t@gjhsRC=be\Jbf\hbViBSf7NtRCQ9</h2>
			<?php
				$text = "";
				$key = "";
				$result = "";
				if (isset($_POST['text'])) {
					$text = $_POST['text'];
					$key = $_POST['key'];
					$strlen = strlen($text);
					for ($i = 0; $i < $strlen; $i++) {
						$result = $result . chr((ord($text[$i]) ^ ord($key[0])) ^ ord($key[1]));
					}
				}
			?>

			<h3>Try out my custom-made encryption algorithm :)</h3>
			<form action="#" method="POST">
				<input type="text" name="text" value="<?php echo $text; ?>" placeholder="Text" required>
				<input type="text" name="key" value="<?php echo htmlspecialchars($key); ?>" minlength="2" maxlength="2" placeholder="Key" style="width: 30px;"required>
				<input type="submit">
			</form>

			<?php
				if ($text != "") {
					echo $text;
					echo '<br/>';
					echo "Encodes to";
					echo '<br/>';
					echo $result;
					echo '<br/><br/>';
				}
			?>

			<img src="./css/encryption.jpg" alt="Encryption">
		 </div>
	</body>
</html>

