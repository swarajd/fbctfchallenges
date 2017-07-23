<html lang="en">
    <head>
        <title>WhereItAt</title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <link rel="stylesheet" media="all" href="./css/style.css" />
    </head>
    <body>
        <div class="page">
            <h2>Detective's files</h2>

            <?php

            // Check if $uploadOk is set to 0 by an error
            // var_dump($_POST);
            if (isset($_POST["submit"]) && isset($_FILES["fileToUpload"])) {

                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;

                // Check if a file was uploaded
                if ($_FILES["fileToUpload"]["name"] == "") { 
                    echo '<font color="red"><h3>Sorry, you must upload a file</h3></font>';
                    $uploadOk = 0;
                }

                // Check if file already exists
                if (file_exists($target_file) && $uploadOk != 0) {
                    echo '<font color="red"><h3>Sorry, file already exists.</h3></font>';
                    $uploadOk = 0;
                }

                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000 && $uploadOk != 0) {
                    echo '<font color="red"><h3>Sorry, your file is too large.</h3></font>';
                    $uploadOk = 0;
                }

                // Allow certain file formats
                $uploaded_type = $_FILES[ 'fileToUpload' ][ 'type' ];

                if (!( $uploaded_type == "image/jpeg" || $uploaded_type == "image/png") && $uploadOk != 0) {
                    echo '<font color="red"><h3>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</h3></font>';
                    $uploadOk = 0;
                }

                if ($uploadOk == 0) {
                    // echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        echo '<font color="green"><h3>The file ' . $target_file . ' has been uploaded.</h3></font>';
                    } else {
                        echo '<font color="red"><h3>Sorry, there was an error uploading your file.</h3></font>';
                    }
                }
            }
            ?>

            <form action="index.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </form>
            <img src="./css/picture.jpg" alt="picture">
        </div>
    </body>
</html>