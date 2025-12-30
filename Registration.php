<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Form</title>
  <style>
    body {
      background-color: #d9dfeb;
      margin: 0;
      font-family: Arial, sans-serif;
    }
    
    #signup_button {
      background-color: #42b72a;
      width: 70px;
      text-align: center;
      padding: 4px;
      border-radius: 4px;
      float: right;
    }
    
    #bar {
      display: flex;
      height: auto;
      min-height: 80px;
      background-color: rgb(40, 141, 248);
      color: #d9dfeb;
      padding: 4px;
      flex-wrap: wrap;
    }
    
    ul {
      display: flex;
      gap: 4%;
      padding: 20px;
      margin: 0;
      width: 100%;
      justify-content: center;
      padding-left: 55%;
      flex-wrap: wrap;
    }
    
    ul li a {
      text-decoration: none;
      color: white;
      font-size: clamp(16px, 2vw, 20px);
      font-family: 'Times New Roman', Times, serif;
      font-size: 24px;
      
    }
    
    ul li {
      list-style-type: none;
    }
    
    .form-container {
      max-width: 90%;
      width: 800px;
      height: 100vh;
      margin: 30px auto;
      background: white;
      padding: 20px 5%;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    
    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
      font-size: clamp(24px, 3vw, 32px);
    }
    
    .form-group {
      margin-bottom: 15px;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      align-items: center;
    }
    
    input, select {
      flex: 1;
      min-width: 200px;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      border-color: rgb(176, 173, 173);
      box-sizing: border-box;
    }
    
    label {
      font-weight: bold;
      min-width: 120px;
    }
    
    input:focus, select:focus, button:focus {
      border-color: #007bff;
      outline: none;
    }
    
    .buttons-container {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      justify-content: center;
      margin-top: 20px;
    }
    
    button {
      background-color: rgb(54, 163, 59);
      min-width: 120px;
      padding: 8px 15px;
      height: auto;
      border: 1px solid #ddd;
      border-radius: 8px;
      color: #ffffff;
      cursor: pointer;
      font-size: clamp(16px, 2vw, 20px);
      font-family: 'Times New Roman', Times, serif;
      flex: 1;
    }
    
    button:hover {
      background-color: #05fc05;
      color: #0a51f5;
    }
    
    .form-row {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-bottom: 15px;
    }
    
    .form-field {
      flex: 1;
      min-width: 250px;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 10px;
    }
    
    @media (max-width: 768px) {
      ul {
        justify-content: center;
        padding: 10px;
      }
      
      .form-field {
        min-width: 100%;
      }
      
      input, select {
        min-width: 100%;
      }
      
      button {
        min-width: 100%;
      }
      
      label {
        min-width: 100px;
      }
    }
    
    @media (max-width: 480px) {
      .form-container {
        padding: 15px;
      }
      
      ul {
        flex-direction: column;
        align-items: center;
        gap: 10px;
      }
      
      .form-row {
        flex-direction: column;
        gap: 10px;
      }
    }
  th{
    background-color:rgb(144, 143, 143);
  }
  </style>
</head>
<body>
  <div id="bar">   
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="">AboutUs</a></li>
      <li><a href="">Contact</a></li>
      <li><a href="login.php" style="background-color: rgb(54, 163, 59); padding: 5px 15px;">Logout</a></li>
    </ul>    
  </div>
  
  <div class="form-container">
    <h1 style="font-family: 'Times New Roman', Times, serif; color: rgb(54, 163, 59);">Student Registration System</h1>
    <form action="#" method="post">
      <div class="form-row">
        <div class="form-field">
          <label for="ID">ID:</label>
          <input type="text" id="sid" name="sid">       
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-field">
          <label for="fname">First Name:</label>
          <input type="text" id="fname" name="fname">  
        </div>
        
        <div class="form-field">
          <label for="lname">Last Name:</label>
          <input type="text" id="lname" name="lname">
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-field">
          <label for="age">Age:</label>
          <input type="text" id="age" name="age">     
        </div>
        
        <div class="form-field">
          <label for="sex">Sex:</label>
          <input type="text" id="sex" name="sex"> 
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-field">
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email">    
        </div>
        
        <div class="form-field">
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone"> 
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-field">
          <label for="course">Select Course:</label>
          <select id="course" name="course">
            <option value="">--Select a Course--</option>
            <option value="web-development">Web Development</option>
            <option value="data-science">Data Science</option>
            <option value="graphic-design">Graphic Design</option>
          </select>
        </div>
        
        <div class="form-field">
          <label for="dob">Date of Birth:</label>
          <input type="date" id="dob" name="birth_date">
        </div>
      </div>
      
      <div class="buttons-container">
        <button type="submit" name="register">Register</button>
        <button type="submit" name="update">Update</button>
        <button type="submit" name="delete">Delete</button>
        <button type="submit" name="search">Search</button>
        <button type="submit" name="view">View records</button>
      </div><br><br>
      
    </form>
  </div>
</body>
</html>