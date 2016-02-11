<?php
    if (isset($_FILES["UploadFileField"])) {
        $UploadName = $_FILES['UploadFileField']['name'];
        $UploadTemp = $_FILES['UploadFileField']['temp_name'];
        $UploadType = $_FILES['UploadFileField']['type'];

        $UploadName = preg_replace("#[^a-z0-9.]#i", "", $UploadName);

        if (!$UploadTemp) {
            die ("No file selected.");
        } else {
            move_uploaded_file($UploadTemp, "Upload/$UploadName");
        }

    }
?>

<!DOCTYPE html>
<html xmlns = "htpp://wwww.w3.org/1999/xhtml">
<head>
    <style>
    body {margin: 0; padding: 0; background-color: #CCC;}
    .fileUploadHolder {
        width:  400px;
        height: 200px;
        margin: 60px auto 0px auto;
        background-color: #FFF;
        border: 1px solid #CCC;
        padding: 6px;
    }
    </style>

<meta http-equiv="Content-Type" content = "text/html; charset=ytf-8" />
<title>File Upload</title>
</head>

<body>
<div class = "fileUploadHolder"></div>
    <form action = "FileUpload.php" method = "post" enctype = "multipart/form-data" name = "FileUploadForm" id = "FileUploadForm">
        <label for = "UploadFileField"></label>
        <input type = "file" name = "UploadFileField" id = "UploadFileField" />
        <input type = "submit" name = "UploadButton" id = "UploadButton" value = "Upload"/>
    </form>




</body>

</html>

