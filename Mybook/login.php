<?php


session_start();
include("classes/config.php");
include("classes/login.php");
$email = "";
$password = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $login = new Login();
     $result = $login->evaluate($_POST);

     if($result != ""){
        echo "<div style = 'text-align:center;font-size:12px;color:white;background:grey;'
        >";
        echo "the following errors occured: <br><br>";
        echo $result;
        echo "</div>";
        
     }else{
         header("Location: profile.php");
         die;
     }
     $password = $_POST['password'];
     $email = $_POST['email'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mybook | Login</title>
</head>
<style>
     #bar{
       height:130px; 
       background-color:rgb(59,89,152);
       color:#d9dfeb; 
       padding: 4px;
     }
     #signup_button{
         background-color: #42b72a;
         width: 70px;
         text-align: center;
         padding: 4px;
         border-radius: 4px;
         float: right;
     }
     #signup{
        color:#fff;
     }
     #signup:hover{
        cursor:pointer;
     }
    
    #bar2{
        background-color: white;
         width: 400px;
         height: auto;
        margin: auto;
        margin-top: 50px;
        margin-bottom:20px;
        padding: 10px;
        padding-top: 50px;
        text-align: center;
        font-weight: bold;
        
    }

    #text{
        height: 40px;
        width: 300px;
        border-radius: 4px;
        border: solid 1px #ccc;
        padding: 4px;
        font-size: 14px;

    }
    #button{
        width:300px;
        height: 40px;
        border-radius: 4px;
        font-weight:  bold;
        border:none;
        background-color:blue;
        color: white;
    }
    
   

</style>
<body style="font-family: tahoma; background-color:floralwhite;">
    <div  id="bar">
        <div style="font-size:40px;">Mybook</div>
        <div id="signup_button"><a id="signup" href="singup.php">  Signup <a></div>
    </div>
<form action="" method = "post">
 
    <div id="bar2">
        Log in to Mybook<br><br>
        <input type="email" value = "<?php echo $email?>"
        name = "email"  id="text" placeholder="Email address" ><br><br>
        <input type="password" 
        value = "<?php echo $password ?>"
        name = "password"  id="text" placeholder="Password" ><br><br>
        <input type="submit" id="button" value="Log in">
    </div>
 </form>

</body>
</html>
