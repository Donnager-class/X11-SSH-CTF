<?php      
        $host = "localhost";  
        $user = "root";  
        $password = 'secret';  
        $db_name = "credentials";  
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        } 
    ////Start php
//$host = 'db'; //service name for docker-compose.yml
//$user = 'devuser';
//$password = 'devpass';
//$db = 'test_db';
//
//$connection = new mysqli($host,$user,$password,$db);
//if($connection->connect_error)
//{
//    echo 'connection failed' . $connection->connect_error;
//}
//else
//{
//    echo 'Successfully connected web page';
//}
//----------------------------------------------------------
//$con = mysqli_connect($host, $user, $password, $db_name);  
//if(mysqli_connect_errno()) {  
//    die("Failed to connect with MySQL: ". mysqli_connect_error());  
//}  
////End of php
?>