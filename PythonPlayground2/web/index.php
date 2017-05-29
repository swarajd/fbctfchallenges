<!DOCTYPE html>
<html>

<link rel="stylesheet" href="lib/codemirror.css">
<style>
    .CodeMirror {
        line-height: 1.2em;
        height: 6.0em;
        white-space: pre-wrap;
        /*max-height: 50px;*/
    }
</style>

<body>

<h3>Python Playground</h3>

<p>determine this machine's hostname!</p>

<form action="index.php" method="post">
    <textarea id="myTextareaFirst" name="first"></textarea>
    <textarea id="myTextareaMiddle" name="middle"></textarea>
    <textarea id="myTextareaLast" name="last"></textarea>

    <button id="submitCode">submit</button>
</form>

<?php

if (isset($_POST["middle"])) {
    $code = $_POST["first"] . $_POST["middle"] . $_POST["last"];

    $valid = 1;

    if (strpos($code, 'import') !== false) {
        echo "You can't import!";
        $valid = 0;
    }

    if (strpos($code, 'exec') !== false) {
        echo "You can't exec!";
        $valid = 0;
    }

    if ($valid === 1) {
        $dir = getcwd();
        $file = $dir . '/' . hash('md5', time()) . 'test.py';
        file_put_contents($file, $code);

        $cmd = 'python \'' . $file . '\'';
        $out = `python '{$dir}/run.py' 0.5 {$cmd}`;

        unlink($file);

        echo 'the output is: ' . $out;
    }
}

?>

<script src="lib/codemirror.js"></script>
<script src="mode/python/python.js"></script>
<script>
    var myTextareaFirst   = document.getElementById("myTextareaFirst");
    var myTextareaMiddle  = document.getElementById("myTextareaMiddle");
    var myTextareaLast    = document.getElementById("myTextareaLast");
    var submitButton      = document.getElementById("submitCode");
    var editorFirst       = CodeMirror.fromTextArea(myTextareaFirst, {
        lineNumbers: true,
        readOnly: true,
    });

    editorFirst.setValue(`sum = 0
a = 6
b = 7
for i in range(0, a * b):
    sum += i
    `);

    var editorMiddle      = CodeMirror.fromTextArea(myTextareaMiddle, {
        lineNumbers: true,
        autofocus: true,
    });

    var editorLast        = CodeMirror.fromTextArea(myTextareaLast, {
        lineNumbers: true,
        readOnly: true,
    });

    editorLast.setValue(`
print(sum)`);

    // submitButton.onclick = function() {
    //     console.log(editorMiddle.getValue());
    // }

</script>


</body>
</html>