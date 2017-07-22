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
			<h2>Urer vf zl dhrfgvba: I2uuqPO3LKZtERITD09BW3ZtMzylp3DtpKIiqTHtLJqunJ4/Cj==</h2>
			<?php
				$bam = "QSBnbGltcHNlIGludG8gbWFuJ3MgZGFyayBwYXN0LCBhbmQgYSBsb29rIGludG8gdGhlIGZ1dHVyZSBvZiBjb21wdXRpbmcu";

				$ans = "";

				if (isset($_POST['answer'])) {
					$ans = $_POST['answer'];
					if ($ans == base64_decode($bam)) {
						echo "flag: Time_is_Money_so_is_ATM_a_TimeMachine?";
					} else {
						echo "Try harder! :)";
					}
				}
			?>

			<h3>Answer:</h3>
			<form action="#" method="POST">
				<input type="text" name="answer" value="<?php echo htmlspecialchars($ans); ?>" autocomplete="off">
				<input type="submit">
			</form>

			<img src="./css/timeMachine.png" alt="timeMachine">
		 </div>
	</body>
</html>

