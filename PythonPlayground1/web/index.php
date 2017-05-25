<!DOCTYPE html>
<html>

<link rel="stylesheet" href="lib/codemirror.css">

<body>

<h3>Python Playground</h3>


<textarea id="myTextarea"></textarea>

<script src="lib/codemirror.js"></script>
<script src="mode/python/python.js"></script>
<script>
    var myTextarea   = document.getElementById("myTextarea");
    var editor       = CodeMirror.fromTextArea(myTextarea, {
        lineNumbers: true
    });
</script>

</body>
</html>