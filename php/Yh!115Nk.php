<?php
if (isset($_POST["upload"])) {
    
    $allowed_file_extension = array(
        "pdf",
        "doc",
        "jpg",
        "jpeg",
        "php",
        "png"
    );
    
    
    $file_extension = pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION);
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["file-input"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "Choose file to upload."
        );
    }    // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_file_extension)) {
        $response = array(
            "type" => "error",
            "message" => "Upload valiid files. Only doc and pdf are allowed."
        );
    } else {
        $target = "/var/www/html/share/" . basename($_FILES["file-input"]["name"]);
        if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target)) {
            $response = array(
                "type" => "success",
                "message" => "You've successfully uploads your file to share"
            );
        } else {
            $response = array(
                "type" => "error",
                "message" => "Problem in uploading file."
            );
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Upload</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        .pt{
            padding-top: 15px;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                <h2>Submit Report Into Share</h2>
                </div>
                <form id="frm-upload" action="Yh!115Nk.php" name='img' method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div>Choose file:</div>
                        <div class="pt">
                            <input type="file" class="file-input" name="file-input">
                        </div>
                    </div>

                    <div class="button-row pt">
                        <input type="submit" class="btn btn-primary" id="btn-submit" name="upload" value="Upload">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </div>
                </form>
                <div class="pt">
                    <?php if(!empty($response)) { ?>
                        <div class="alert alert-success response <?php echo $response["type"]; ?>"><?php echo $response["message"]; ?></div>
                    <?php }?>
                </div>
            <div>
        </div>
    <div>
</body>
</html>