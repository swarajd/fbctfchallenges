
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
			$form_pass = isset($_POST['form_pass']) ? $_POST['form_pass'] : "\"\"";
			$to_be_executed = "if ('super_secret' == {$form_pass}) { echo \"flag is: I_aint_got_sql<br>\"; }";
			if(strrpos($to_be_executed, '=') != 20) {
			    echo('<font color="red"><h3>ahh you thought you could inject like that</h3></font>');
			} else {
			    eval($to_be_executed);
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