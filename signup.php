
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
    .bar{ 
        display: flex;
        background-color: rgb(99, 100, 99);
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
        background-color: rgb(99, 100, 99);
        padding: 10px;
        text-align: center;
        color: white;
    }

</style>
<body>

    <div class="bar">
        <h1>GUST TECH </h1>
        <ul>
            <li> <a href="">homepage</a></li>
            <li> <a href="">Aboutus</a></li>
            <li> <a href="">Contact</a></li>
            <li><a href="signup.php" style="background-color: rgb(54, 163, 59); padding: 5px 15px;">signup</a></li>
            <li><a href="login.php" style="background-color: rgb(54, 163, 59); padding: 5px 15px;">Login</a></li>
        </ul>

    </div>
   
        <div id="frm">
            <h2 style="font-family: 'Times New Roman', Times, serif;color: rgb(54, 163, 59);">signup form</h2>
            <br>
           <form action="" method="post">

            <input type="text" id="text" name="username" placeholder="user name" required><br><br>
            <input type="email" id="text" name="email" placeholder="email" required><br><br>

            <span style="font-weight: normal;">Gender</span><br>
            <select name="Gender" id="text">
                <option value="">male</option>
                <option value="">female</option>

            </select><br><br>
            <input type="password" id="text" name="password" placeholder="password" required><br><br>
            <input type="password" id="text" name="password" placeholder="retype password" required><br><br>

            <input type="submit" id="button" name="register" value="signup">
           </form>
        </div>

    </div>
    <div class="foot">
        <h2>GUSTTECH ACADAMY &copy; 2025 reserved</h2>
    </div>
</body>
</html>