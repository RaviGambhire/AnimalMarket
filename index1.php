<!doctype html>
<html lang='en-IN'>
<head>
<title>Animal_Bazar</title>
<meta charset='utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device- width, initial-scale=1">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
 </script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
     </script>
     <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel='stylesheet' href='bootstrap.min.css'>
<link rel='stylesheet' style type='text/css' href='css/index1.css'>
 <script type="text/javascript" src="jquery.min.js"></script>
<style type="text/css">
  .image{
    background-image: url("images/home.jpg");
    background-size: cover;
  }
</style>
</head>
<body>

<?php include('header.php') ?>
<div class="container">
  <div class="jumbotron image" id="jumbotron-back">
      <div class="text-center" id="txt">
        <h1 style="color: white">Animal Bazar</h1>
      </div>
      <br/><br/><br/>
      <div class="container-fluid">
        <div class="row">
             <div class="col-md-3"></div>
          <div class="col-md-3">
           <a href='buy/buySearch.php' class="btn btn-danger btn-block" id='btn3'><b>BUY</b>
           </a><br/>
          </div>
          <div class="col-md-3">
           <a href='sell/sellRegister.php' class="btn btn-primary btn-block" id='btn4'><b>SELL</b>
           </a>
          </div>
          <div class="col-md-3"></div>
        </div>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
      </div>
  </div>
</div>
<div class="container" id="img2" align="center" style='margin-left:100px;'>
        <img src="images/images (5).jpg" class="img-thumbnail" alt="Boot" width="250px"
          height="300px">
        <img src="images/images.jpg" class="img-thumbnail" alt="Boot" width="250px"
         height="300px">
        <img src="images/1.jpg" class="img-thumbnail" alt="Boot" width="300px"
         height="350px">
        <img src="images/images.jpg" class="img-thumbnail" alt="Boot" width="250px"
         height="300px">
</div>
<nav class="navbar navbar-inverse">
    <div class='container-fluid'>
      <div class="navbar-footer">
        <button type="button" class="navbar-toggle" data-toggle="collapse" 
              data-target="#Navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
      <a class="navbar-brand" href="#">Copyright &copy;</a>
    </div>
    <div class="collapse navbar-collapse" id="Navbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Facebook</a></li>
      <li><a href="#">Google Plus</a></li>
    </ul>  
      </div>
    </div>
</nav>
</body>
</html>