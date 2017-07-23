
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

			function isValidPHP($code) {
				$code = escapeshellarg('<?php ' . $code . ' ?>');

				$lint = `echo $code | php -l`; // command-line PHP

				// maybe there are other messages for good code?
				return (preg_match('/No syntax errors detected in -/', $lint));
			}

			$form_pass = isset($_POST['form_pass']) ? $_POST['form_pass'] : "\"\"";
			$to_be_executed = "if (\"super_secret\" == {$form_pass}) { echo \"flag is: I_aint_got_sql<br>\"; }";
			if(strrpos($to_be_executed, '=') != 20) {
			    echo('<font color="red"><h3>ahh you thought you could inject like that</h3></font>');
			} else {
				if (isValidPHP($to_be_executed)) {
					eval($to_be_executed);
				} else {
					echo('<font color="red"><h3>looks like an error occured!</h3></font>');
				}
			}
			?>

			<h2>This system doesn't have SQL. Try and hack it regardless!</h2>
			<form action="#" method="POST">
			    <input type="text" name="form_pass" autocomplete="off">
			    <input type="submit">
			</form>
			<img src="./css/picture.jpg" alt="picture">
		</div>
	</body>
</html>