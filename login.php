
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
        height: 55vh;
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
 h2{
    text-align: center;
    color: rgb(150, 148, 148);
    margin-bottom: 20px;
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
            <li><a href="" style="background-color: rgb(54, 163, 59); padding: 5px 15px;">Login</a></li>
            <li><a href="" style="background-color: rgb(54, 163, 59); padding: 5px 15px;">signup</a></li>
        </ul>

    </div>
       <div class="main"> 
      <div class="login-container">
        <h2 style="font-family: 'Times New Roman', Times, serif;color: rgb(54, 163, 59);">login form</h2>
        
        <form action=""method="post">
            <div class="input-group">
                <label for="username" id="label">user name</label>
                <input type="text" id="username" name="username" required>

                 </div>

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

        <h2>GUSTTECH ACADAMY &copy; 2025 reserved</h2>
    </div>
</body>
</html>