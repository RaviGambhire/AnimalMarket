<!doctype html>
<html lang='en-IN'>
  <head>
    <title>Animal Bazar</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/buy.css">
</head>
<body> 
  <div class='container-fluid'>
<?php include('../header.php') ?> 

<div class="jumbotron">
  <div class="row">
    <?php 
      //connect to database
	    $conn = mysqli_connect('localhost','root','','animalBazaar');
         //query to retrieve data from database
        $query = "SELECT * FROM animal_details";
        $sql_get_data =mysqli_query($conn, $query) or die('Error querying database.');
          echo "<br/>";
        //Step3 display data
        if (mysqli_num_rows($sql_get_data) > 0) {
          // output data of each row
            while($row = mysqli_fetch_assoc($sql_get_data)) {
                echo "id: " . $row["Name"]. " - Name: " . $row["email"]. " " . $row["phone_no"]. "<br>";
            }
        }
    ?>
    <h3>Animal Photos</h3>
     <div class="col-sm-3">
        <div class="card">
          <img src="images/57.jpg" alt="Avatar" style="width:80%">
          <!--<h3><b>Name of owner</b></h3> 
          <p>Madhav</p>
          <p> Category:Buffalo</p>
          <p>Contact:1234567890</p>-->
        </div>
      </div>
      <div class="col-sm-3">
         <div class="card">
           <img src="images/du.jpg" alt="Avatar" style="width:80%">
           <!--<h3><b>Name of owner</b></h3> 
           <p>Krishna</p>
           <p>Category:Cow</p>
           <p>Contact:1234567890</p>-->
         </div>
      </div>
      <div class="col-sm-3"> 
        <div class="card">
            <img src="images\Jp.jpg" alt="Avatar" style="width:80%">
            <!--<h3><b>Name of owner</b></h3> 
            <p>Ram</p>
            <p>Category:Buffalo</p>
            <p>Contact:1234567890</p>-->
        </div>
      </div>
      <div class="col-sm-3"> 
        <div class="card"> 
           <img src="images\ge.jpg" alt="Avatar" style="width:80%">
           <!--<h3><b>Name of owner</b></h3> 
           <p>Shyam</p>
           <p>Category:Cow</p>
           <p>Contact:1234567890</p>-->
        </div>
      </div> 
  </div>
  <br><br><br>
  <div class="row">
  <h3>Animal videos</h3>
     <div class="col-sm-3">
        <div class="card">
          <img src="images\153.jpg" alt="Avatar" style="width:80%">
          <!--<h3><b>Name of owner</b></h3> 
          <p>Ramesh</p>
          <p>Category:Cow</p>
          <p>Contact:1234567890</p>-->
        </div>
      </div>
      <div class="col-sm-3">
         <div class="card">
           <img src="images\th.jpg" alt="Avatar" style="width:80%">
           <!--<h3><b>Name of owner</b></h3> 
           <p>Maroti</p>
          <p>Category:Cow</p>
          <p>Contact:1234567890</p>-->
         </div>
      </div>
      <div class="col-sm-3"> 
        <div class="card">
            <img src="images\8.jpg" alt="Avatar" style="width:80%">
            <!--<h3><b>Name of owner</b></h3> 
            <p>Gangaram</p>
            <p>Category:Buffalo</p>
            <p>Contact:1234567890</p>-->
        </div>
      </div>
      <div class="col-sm-3"> 
        <div class="card"> 
           <img src="images\Na.jpg" alt="Avatar" style="width:80%">
           <!--<h3><b>Name of owner</b></h3> 
           <p>Kishan</p>
           <p>Category:Buffalo</p>
            <p>Contact:1234567890</p>-->
        </div>
      </div> 
  </div>
  <br>
<div class="row">
    <div class="col-sm-4">
      <h2><b> Farmer Details</b></h2>
      <p>Name: Ramrao Patil   </p>
      <p>Village: Pimpalgaon  </p>
      <p>Taluka: Biloli       </p>
      <p>District: Nanded  </p>
      <p>State: Maharashtra </p>
    </div>
      <div class="col-sm-4">
      </div>
    <div class="col-sm-4">
      <div class="card">
      <br><br><br>
       <img src="images\83.jpg" alt="Avatar" style="width:80%" "height:70%">
       <br><br>
            <a href="../ownerDetails.php" id='b1' class='btn btn-primary btn-lg'>
             <b>Connect</b>
             </a>
      </div>
    </div>      
</div>
