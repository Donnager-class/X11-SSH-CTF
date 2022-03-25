<html>  
<head>  
    <title>PHP login system</title>  
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
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "Ar!301Gf.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> Username: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>     
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  