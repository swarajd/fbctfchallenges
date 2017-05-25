<!DOCTYPE html>
<html>

<link rel="stylesheet" href="lib/codemirror.css">
<style>
    .CodeMirror {
        line-height: 1.2em;
        height: 6.0em;
        /*max-height: 50px;*/
    }
</style>

<body>

<h3>Python Playground</h3>

<p>determine this machine's hostname!</p>

<textarea id="myTextareaFirst"></textarea>
<textarea id="myTextareaMiddle"></textarea>
<textarea id="myTextareaLast"></textarea>

<script src="lib/codemirror.js"></script>
<script src="mode/python/python.js"></script>
<script>
    var myTextareaFirst   = document.getElementById("myTextareaFirst");
    var myTextareaMiddle  = document.getElementById("myTextareaMiddle");
    var myTextareaLast  = document.getElementById("myTextareaLast");
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

    editorLast.setValue(`print(sum)`);
</script>


</body>
</html>