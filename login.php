<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<style>
    body{
        background-color: #d9dfeb;
    }
    .logo {
        font-family:arial,sans-serif;
        font-sixe:10px;
        font-weight:bold;
        color: #00fff0;
        display:flex;
        flex-direction:column;
        align-item:center;
        justify-content: center;
        gap:10px;
        height:80px;
        width: 80px;
        background-color:#191f2a;
        border-radius:50%;
        text-align:center;
        position: relative;
        margin-left:10px;
        }

      .logo span{
        color : #ffcc00;

      }
    .bar{ 
        display: flex;
        background-color: blue;
        color: #d9dfeb;
        padding: 4px;
    }
    .bar ul{
        display: flex;
        gap: 5%;
        position: right;
        padding-left: 40%px;
        padding-top: 20%px;
    }
    h1{
        padding-left: 10%;
    }
    ul li a{
        text-decoration: none;
        color: white;
        font-size: 20px;
    }
    ul li {
        list-style-type: none;

    }
    
    .login-container{
        background-color: #fdfffd;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgb(150, 148, 148);
        width: 100%;
        max-width: 400px;
        margin-left: 30%;
        margin-top: 100px;

    }
 
    .input-group{
        margin-bottom: 20px;

    }
    .input-group label{
        display: block;
        font-family: 14px;
        margin-bottom: 5px;
        color: #555555;

    }
    .input-group input{
        width: 96%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #cccc;
        border-radius: 4px;
        outline: none;
    }
    .input-group input:focus{
        border-color: #007bff;
        box-shadow:0 0 5px rgb(0,123,0.5);


    }
    .login-btn{
        width: 100%;
        padding: 8px;
        font-size: 16px;
        color: #ffffff;
        background-color:rgb(54,163,59);
        border:none;
        border-radius: 4px;
               cursor: pointer;
               transition: background-color 0.3 ease;
               height: 35px;
    } 
    
    .btn{
        padding-left: 3%;

    }
    .login-btn:hover{
        background-color: rgb(99, 100, 99);
        color: blue;

    }
    #label{
        color: black;
        font-family: rgb(99,100,99);
        font-size: 17px;
        
    }
    .foot{
        background-color: blue;
        padding: 10px;
        text-align: center;
        color: white;

    }
 h3{
    font-size:26px;
 }
</style>
<?php
include "connection.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Correct SQL with variables
    $sql = "SELECT * FROM signup2 WHERE username = '$username' AND password = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: gps.php");
        exit;
    } else {
        echo "<h3 style='color:red; font-size:20px;'>Invalid username or password</h3>";
    }
}
?>



  

    <div class="bar">
    <div class ="logo">
            <span class ="code-symbol">&lt;/&gt;</span>
            Tech <span> Man</span>
        </div>
        <h1>Tech Man</h1>
        <ul>
            <li> <a href="index.php">homepage</a></li>
            <li> <a href="">Aboutus</a></li>
            <li> <a href="">Contact</a></li>
            <li><a href="signup.php" style="background-color: rgb(54, 163, 59); padding: 5px 15px;">Login</a></li>
            <li><a href="login.php" style="background-color: rgb(54, 163, 59); padding: 5px 15px;">signup</a></li>
        </ul>

    </div>
    <body>
        
    

       <div class="main"> 
      <div class="login-container">
        <h2 style="font-family: 'Times New Roman', Times, serif;color: rgb(54, 163, 59);">login form</h2>
        
        <form action=""method="post">
            <div class="input-group">
                <label for="username" id="label">user name</label>
                <input type="text" id="username" name="username" required>

                 </div>
                 <div class="main">

        <div class="input-group">
                <label for="password" id="label">password</label>
                <input type="password" id="password" name="password" required>

            </div>

            <div class="btn">
                <button type="submit" class="login-btn" name="login">login</button>

            </div>
        </form>
      </div> 
      </div> 
    
    <div class="foot">

        <h3>Tech Man Acadamy &copy; 2025 reserved</h3>
    </div>
</body>
</html>