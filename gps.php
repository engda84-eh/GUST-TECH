<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gps based data resource collection</title>
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
      <li><a href="index.php">Home</a></li>
      <li><a href="">AboutUs</a></li>
      <li><a href="">Contact</a></li>
      <li><a href="login.php" style="background-color: rgb(54, 163, 59); padding: 5px 15px;">Logout</a></li>
    </ul>    
  </div>
  
  <div class="form-container">
    <h1 style="font-family: 'Times New Roman', Times, serif; color: rgb(54, 163, 59);">Gps based resorce data collection </h1>
    <form action="#" method="post">
      <div class="form-row">
        <div class="form-field">
          <label for="ID">ID:</label>
          <input type="text" id="sid" name="sid">       
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-field">
          <label for="regino">Region:</label>
          <input type="text" id="region" name="region">  
        </div>
        
        <div class="form-field">
          <label for="fromne">FROM NE:</label>
          <input type="text" id="fromne" name="FROM_NE">
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-field">
          <label for="tone">TO NE:</label>
          <input type="text" id="tone" name="TO_NE">     
        </div>
        
        <div class="form-field">
          <label for="ofctype">OFC Type:</label>
          <input type="text" id="ofctype" name="ofc_type"> 
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-field">
          <label for="metroringno">metro ring no:</label>
          <input type="metroringno" id="metroringno" name="metro_ring_no">    
        </div>
        
        <div class="form-field">
          <label for="long">long:</label>
          <input type="long" id="long" name="longitude"> 
        </div>
      </div>
      
       
      <div class="form-row">
        <div class="form-field">
          <label for="lat">lat:</label>
          <input type="lat" id="lat" name="latitude">
            
        </div>
        
        <div class="form-field">
          <label for="passiveresource">passive resource:</label>
          <input type="passiveresource" id="passiveresource" name="passive_resource">
        </div>
      </div>

      <div class="form-row">
        <div class="form-field">
          <label for="remark">Remark:</label>
          <input type="remark" id="remark" name="remark">
            
        </div>
      
      <div class="buttons-container">
        <button type="submit" name="register">Register</button>
        <button type="submit" name="update">Update</button>
        <button type="submit" name="delete">Delete</button>
        <button type="submit" name="search">Search</button>
        <button type="submit" name="view">veiw records</button>
      </div><br><br>

      <?php
include "connection.php";

if (isset($_POST['register'])) {

    $sid = $_POST['sid'];
    $region = $_POST['region'];
    $FROM_NE = $_POST['FROM_NE'];
    $TO_NE = $_POST['TO_NE'];
    $ofc_type = $_POST['ofc_type'];
    $metro_ring_no = $_POST['metro_ring_no'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $passive_resource = $_POST['passive_resource'];
    $remark = $_POST['remark'];

    $sql = "
        INSERT INTO gps 
        (sid, region, FROM_NE, TO_NE, ofc_type, metro_ring_no, longitude, latitude, passive_resource, remark)
        VALUES 
        ('$sid', '$region', '$FROM_NE', '$TO_NE', '$ofc_type', '$metro_ring_no', '$longitude', '$latitude', '$passive_resource', '$remark')
    ";

    $result = $conn->query($sql);

    if ($result) {

        $sqlDisplay = "SELECT * FROM gps";
        $resultDisplay = $conn->query($sqlDisplay);

        if (mysqli_num_rows($resultDisplay) > 0) {

            echo '<table width="100%" border="1" style="border-collapse: collapse;">
                <tr>
                    <th>ID</th>
                    <th>Region</th>
                    <th>FROM NE</th>
                    <th>TO NE</th>
                    <th>OFC Type</th>
                    <th>Metro Ring No</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <th>Passive Resource</th>
                    <th>Remark</th>
                </tr>';

            while ($row = $resultDisplay->fetch_assoc()) {
                
                        $sid=$row['sid'];
                        $region = $row['region'];
                        $FROM_NE = $row['FROM_NE'];
                        $TO_NE=$row['TO_NE'];
                        $ofc_type=$row['ofc_type'];
                        $metro_ring_no=$row['metro_ring_no'];
                        $longitude=$row['longitude'];
                        $latitude=$row['latitude'];
                        $passive_resource=$row['passive_resource'];
                        $remark=$row['remark'];

                      echo "<tr>
                      <td>$sid</td>
                      <td>$region</td>
                      <td>$FROM_NE</td>
                      <td>$TO_NE</td>
                      <td>$ofc_type</td>
                      <td>$metro_ring_no</td>
                      <td>$longitude</td>
                      <td>$latitude</td>
                      <td>$passive_resource</td>
                      <td>$remark</td>
                      </tr>";

            }


            echo '</table>';
        }

        echo "The data has been successfully inserted.";
    } else {
        echo "Data could not be inserted (maybe Duplicate ID). Please try again.";
    }
}
?>


<?php
      
      include "connection.php";
      
      if (isset($_POST['search'])) {
      
          $sid = $_POST['sid'];
      
          $sql = "SELECT * FROM gps WHERE sid='$sid'";
          $result = $conn->query($sql);
      
          if (mysqli_num_rows($result) > 0) {
      
              ?>
      
              <table border="1px" width="100%" style="border-collapse:collapse;">
                  <tr style="background-color:blue; color:white; font-weight:bold; font-size:20px;">
                      <th style="padding:6px;">ID</th>
                      <th>Region</th>
                    <th>FROM NE</th>
                    <th>TO NE</th>
                    <th>OFC Type</th>
                    <th>Metro Ring No</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <th>Passive Resource</th>
                    <th>Remark</th>
                </tr>';
                <?php
      while ($row = $result->fetch_assoc()) {
                
        $sid=$row['sid'];
        $region = $row['region'];
        $FROM_NE = $row['FROM_NE'];
        $TO_NE=$row['TO_NE'];
        $ofc_type=$row['ofc_type'];
        $metro_ring_no=$row['metro_ring_no'];
        $longitude=$row['longitude'];
        $latitude=$row['latitude'];
        $passive_resource=$row['passive_resource'];
        $remark=$row['remark'];

      echo "<tr>
      <td>$sid</td>
      <td>$region</td>
      <td>$FROM_NE</td>
      <td>$TO_NE</td>
      <td>$ofc_type</td>
      <td>$metro_ring_no</td>
      <td>$longitude</td>
      <td>$latitude</td>
      <td>$passive_resource</td>
      <td>$remark</td>
      </tr>";

}


echo '</table>';
}


} 

?>          
    <?php
include "connection.php";

if (isset($_POST['delete'])) {
    $sid = $_POST['sid'];
    $sql = "DELETE FROM gps WHERE sid='$sid'";
    $conn->query($sql);

    echo "Record deleted successfully!";
}
?>
<?php
include "connection.php";

if (isset($_POST['update'])) {

    $sid = $_POST['sid'];
    $region = $_POST['region'];
    $FROM_NE = $_POST['FROM_NE'];
    $TO_NE = $_POST['TO_NE'];
    $ofc_type = $_POST['ofc_type'];
    $metro_ring_no = $_POST['metro_ring_no'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $passive_resource = $_POST['passive_resource'];
    $remark = $_POST['remark'];

    $sql = "
        INSERT INTO gps 
        (sid, region, FROM_NE, TO_NE, ofc_type, metro_ring_no, longitude, latitude, passive_resource, remark)
        VALUES 
        ('$sid', '$region', '$FROM_NE', '$TO_NE', '$ofc_type', '$metro_ring_no', '$longitude', '$latitude', '$passive_resource', '$remark')
    ";

    $result = $conn->query($sql);

    $result =$conn->query($sql);
    if($result){
      echo "<h3 style ='color:green'> data successfuly updated.</h3>";

    }else{
      echo "<h3 style ='color:red'>data is not updated.</h3>";
    }
  }
     ?>
 <?php
      
      include "connection.php";
      
      if (isset($_POST['view'])) {
      
          $sql = "SELECT * FROM gps";
          $result = $conn->query($sql);
      ?>
 <table border="1px" width="100%" style="border-collapse:collapse;">
              <tr style="background-color:rgb(99,100,99); color:white; font-weight:bold; font-size:20px;">

              <th style="padding:6px;">ID</th>
                      <th>Region</th>
                    <th>FROM NE</th>
                    <th>TO NE</th>
                    <th>OFC Type</th>
                    <th>Metro Ring No</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <th>Passive Resource</th>
                    <th>Remark</th>
                </tr>';
                <?php
      while ($row = $result->fetch_assoc()) {
                
        $sid=$row['sid'];
        $region = $row['region'];
        $FROM_NE = $row['FROM_NE'];
        $TO_NE=$row['TO_NE'];
        $ofc_type=$row['ofc_type'];
        $metro_ring_no=$row['metro_ring_no'];
        $longitude=$row['longitude'];
        $latitude=$row['latitude'];
        $passive_resource=$row['passive_resource'];
        $remark=$row['remark'];

      echo "<tr style='background-color:white;'>
      <td>$sid</td>
      <td>$region</td>
      <td>$FROM_NE</td>
      <td>$TO_NE</td>
      <td>$ofc_type</td>
      <td>$metro_ring_no</td>
      <td>$longitude</td>
      <td>$latitude</td>
      <td>$passive_resource</td>
      <td>$remark</td>
      </tr>";

}


echo '</table>';
}





?>          
    </form>
  </div>
</body>
</html>