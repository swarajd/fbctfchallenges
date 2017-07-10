<?php
$form_pass = $_POST['form_pass'] ? $_POST['form_pass'] : "\"\"";
$to_be_executed = "if ('super_secret' == {$form_pass}) { echo \"flag is: I_aint_got_sql<br>\"; }";
if(strrpos($to_be_executed, '=') != 20) {
    echo("ahh you thought you could inject like that");
} else {
    eval($to_be_executed);
}
?>

<p>This system doesn't have SQL. Try and hack it regardless!</p>
<form action="#" method="POST">
    <input type="text" name="form_pass">
    <input type="submit">
</form>