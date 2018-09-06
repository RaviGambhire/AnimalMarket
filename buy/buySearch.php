<!doctype html>
<html lang='en-IN'>
  <head>
    <title>Animal Bazar</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/buy1.css">
    <style type="text/css">
      .color {
        background-color: black;
        color: white;
      }
    </style>
</head>
<body>  
  <?php 
     //create connection
     //fetch  data from database
    //assign to variables
  
  ?>
    <div class="container-fluid">
  <?php include('../header.php') ?>
  <div class="jumbotron">
    <div class="color">
    <form method="POST" action = "save.php">
    <div class="row">
      <div class="col-sm-3">
        <div class="form-group">
          <label for="email">State:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name" required>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label for="email">District:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name" required>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label for="email">Block:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name" required>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label for="email">Animal Type:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name" required>
        </div>
      </div>
    </div>                            
    </form>
  </div>
   <br/><br/>  
  <div class="row">
     <div class="col-sm-3">
        <div class="card">
          <a href="details.php">
            <img src="images\12.jpg" alt="Avatar" style="width:60%">
            <h4><b>Name</b></h4> 
            <p>Madhav</p>
          </a>  
        </div>
      </div>
      <div class="col-sm-3">
         <div class="card">
          <a href="details.php">
            <img src="images\8.jpg" alt="Avatar" style="width:60%">
            <h4><b>Name</b></h4> 
            <p>Krishna</p>
          </a>         
         </div>
      </div>
      <div class="col-sm-3"> 
        <div class="card">
          <a href="details.php">
            <img src="images\download.jpg" alt="Avatar" style="width:60%">
            <h4><b>Name</b></h4> 
            <p>Ram</p>
          </a>  
        </div>
      </div>
      <div class="col-sm-3"> 
        <div class="card">
          <a href="details.php">
            <img src="images\12.jpg" alt="Avatar" style="width:60%">
            <h4><b>Name</b></h4> 
            <p>Shyam</p>
          </a>  
        </div>
      </div> 
  </div>
  <br>
  <div class="row">
     <div class="col-sm-3">
        <div class="card">
          <a href="details.php">
            <img src="images\57.jpg" alt="Avatar" style="width:60%">
            <h4><b>Name</b></h4> 
            <p>Ramesh</p>
          </a>  
        </div>
      </div>
      <div class="col-sm-3">
         <div class="card">
          <a href="details.php">         
            <img src="images\ima.jpg" alt="Avatar" style="width:60%">
            <h4><b>Name</b></h4> 
            <p>Maroti</p>
          </a>  
         </div>
      </div>
      <div class="col-sm-3"> 
        <div class="card">
          <a href="details.php">
            <img src="images\ge.jpg" alt="Avatar" style="width:60%">
            <h4><b>Name</b></h4> 
            <p>Gangaram</p>
          </a>  
        </div>
      </div>
      <div class="col-sm-3"> 
        <div class="card">
          <a href="details.php">         
            <img src="images\du.jpg" alt="Avatar" style="width:60%">
            <h4><b>Name</b></h4> 
            <p>Kishan</p>
          </a>  
        </div>
      </div> 
  </div>
  <br>
  <div class="row">
     <div class="col-sm-3">
        <div class="card">
          <a href="details.php">
            <img src="images\57.jpg" alt="Avatar" style="width:60%">
            <h4><b>Name</b></h4> 
            <p>Ramesh</p>
          </a>  
        </div>
      </div>
      <div class="col-sm-3">
         <div class="card">
          <a href="details.php">
            <img src="images\ima.jpg" alt="Avatar" style="width:60%">
            <h4><b>Name</b></h4> 
            <p>Maroti</p>
          </a>  
         </div>
      </div>
      <div class="col-sm-3"> 
        <div class="card">
          <a href="details.php">
            <img src="images\ge.jpg" alt="Avatar" style="width:60%">
            <h4><b>Name</b></h4> 
            <p>Gangaram</p>
          </a>  
        </div>
      </div>
      <div class="col-sm-3"> 
        <div class="card">
          <a href="details.php"> 
            <img src="images\du.jpg" alt="Avatar" style="width:60%">
            <h4><b>Name</b></h4> 
            <p>Kishan</p>
          </a>  
        </div>
      </div> 
  </div>
