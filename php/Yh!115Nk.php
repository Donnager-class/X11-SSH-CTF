<php

?>
<html>  
<head>  
    <title>About</title>  
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
    <style>
        body{   
    background-color: rgb(254, 255, 255) !important;  
}  
#frm{  
    border: solid rgb(0, 0, 0) 1px;  
    width:25%;  
    border-radius: 2px;  
    margin: 120px auto;  
    background: rgb(114, 114, 114);  
    padding: 50px;  
}  
#btn{  
    color: rgb(255, 255, 255);  
    background: rgba(0, 0, 0, 0.795);  
    padding: 7px;  
    margin-left: 70%;  
}  
    </style>
</head>  
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>
</body>
</html>