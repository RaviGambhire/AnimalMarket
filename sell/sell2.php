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
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/
     css/bootstrap.min.css">
  <link rel='stylesheet' href='../CSS/bootstrap.min.css'>
<link rel='stylesheet' style type='text/css' href='css/index1.css'>
 <script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
<?php include('../dashboard/header.php') ?>
<!--<div class="jumbotron">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-3">
            <form method="POST">
               Name:<input type="text" id="name" name="name"
                         placeholder="Enter Name">
                         <br/><br/>
              Village:<input type="text" id="name" name="name" 
                         placeholder="Enter Name">
                         <br/><br/>
              Dist.:  <input type="text" id="name" name="name"
                         placeholder="Enter Name">
                         <br/><br/>
               State:  <input type="text" id="name" name="name"
                         placeholder="Enter Name">          
            </form>
          </div>
          <div class="col-md-3"></div>
          <div class="col-md-3"></div>
          <div class="col-md-3"></div>
      </div>
  </div>
</div>-->
<div class="jumbotron">
  <div class="container-fluid">
    <div class="text-left">
      <h3>My Animals</h3>
      <a href="../upload_animal/upload_animal.php" id='b1' class='btn btn-primary btn-lg'>
             <b>Upload Animal Details</b>
             </a>
    </div>
    <br/>
      <div class="row">
        <div class="col-md-3">
          <div class="card">
           <img src="picture/img (40).jpg" >
           <h3><b>Owner Name:Kishna</b></h3>
           <h4>Category: Cow</h4>
           <p>Contact No.:+91 1234567890</p>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="card">
           <img src="picture/img (61).jpg" >
           <h3><b>Owner Name:Ganesh</b></h3>
           <h4>Category: Buffalo</h4>
           <p>Contact No.:+91 1234567890</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
           <img src="picture/img(50).jpg" style=
          'width:300px;height:185px;'>
           <h3><b>Owner Name:Gangaram</b></h3>
           <h4>Category: Ox</h4>
           <p>Contact No.:+91 1234567890</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
           <img src="picture/img.jpg" style=
          'width:300px;height:185px;'>
           <h3><b>Owner Name:Rama</b></h3>
           <h4>Category: Cow</h4>
           <p>Contact No.:+91 1234567890</p>
          </div>
        </div>
      </div>
  </div>
</div>
<div class="jumbotron">
  <div class="container-fluid">
    <div class="text-left">
      <h3>Peoples intrested to buy</h3>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-3">
          <div class="card">
              <img src="picture/d (3).jpg">
              <h4><b>Name</b></h4>
              <p>Kishna</p>
            </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="picture/img (1).jpg" style="width:295px;height:185px">
            <h4><b>Name</b></h4>
              <p>Shyam</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="picture/images (0).jpg" style="width:300px;height:185px">
            <h4><b>Name</b></h4>
              <p>Sudhakar</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="picture/imgs (6).jpg">
            <h4><b>Name</b></h4>
              <p>Balram</p>
          </div>
        </div>
    </div>
  </div>
</div>
<div class="row">
	<div class="col-sm-12">
		<h1>Some news are here</h1>
	</div>
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