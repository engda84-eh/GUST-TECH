<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
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
    .main{
        height: 70vh;
    }

    #frm{
        background-color: white;
        width: 800px;
        margin: auto;
        padding: 10px;
        padding-top: 30px;
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
        width: 300px;
        height: 40px;
        border-radius: 4px;
        cursor: pointer;
        border: none;
        background-color: rgb(54, 163, 59);
        font-weight: bold;
    }
    img{
        width: 100%;
        height: 70vh;
    }
    .foot{
        background-color: blue;
        padding: 10px;
        text-align: center;
        color: white;
    }

</style>
<body>
<?php
include "connection.php";

if(isset($_POST['register'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    $rpassword=$_POST['rpassword'];
     
    $sql="insert into signup2(username,email,gender,password,rpassword)values
    ('$username', '$email', '$gender', '$password', '$rpassword')";
    $result=$conn->query($sql);
    #$conn = new mysqli('localhost','root','','eer');
    if($result){
        echo "user acount successfully created";
    }else{
        echo "user acount not created";
    }
    
    }
    



?>



        <div class="bar">
            <div class ="logo">
                    <span class ="code-symbol">&lt;/&gt;</span>
                    OFC <span>data</span>
                </div>
        <h1> EER</h1>
        <ul>
            <li> <a href="index.php">homepage</a></li>
            <li> <a href="">Aboutus</a></li>
            <li> <a href="">Contact</a></li>
            <li><a href="login.php" style="background-color: rgb(54, 163, 59); padding: 5px 15px;">Login</a></li>
            <li><a href="signup2.php" style="background-color: rgb(54, 163, 59); padding: 5px 15px;">signup</a></li>
        </ul>

    </div>
   
        <div id="frm">
            <h2 style="font-family: 'Times New Roman', Times, serif;color: rgb(54, 163, 59);">signup form</h2>
            <br>
           <form action="" method="post">

            <input type="text" id="text" name="username" placeholder="user name" required><br><br>
            <input type="email" id="text" name="email" placeholder="email" required><br><br>

            <span style="font-weight: normal;">Gender</span>
            <select name="Gender" id="text">
                <option value="">male</option>
                <option value="">female</option>

            </select><br><br>
            <input type="password" id="text" name="password" placeholder="password" required><br><br>
            <input type="password" id="text" name="rpassword" placeholder="retype password" required><br><br>

            <input type="submit" id="button" name="register" value="signup">
           </form>
        </div>

    </div>
    <div class="foot">
        <h2>metro data collection&copy; 2025 reserved</h2>
    </div>
</body>
</html>