<?php      
 include('De@125Lp.php');  
 $username = $_POST['user'];  
 $password = $_POST['pass'];  
   
     //to prevent from mysqli injection  
     $username = stripcslashes($username);  
     $password = stripcslashes($password);  
     $username = mysqli_real_escape_string($con, $username);  
     $password = mysqli_real_escape_string($con, $password);  
   
     $sql = "select * from credentials where username = '$username' and password = '$password'";  
     $result = mysqli_query($con, $sql);  
     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
     $count = mysqli_num_rows($result);  
       
     if($count == 1){  
        header("Location: Uy$990In.php");
     }  
     else{  
         echo "<h1> Login failed. Invalid username or password.</h1>";  
     }         
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
</html>