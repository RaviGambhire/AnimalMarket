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
     <link rel="stylesheet" href="../CSS/bootstrap.min.css">
  <!--<link rel='stylesheet' href='bootstrap.min.css'>-->
<link rel='stylesheet' style type='text/css' href='css/index1.css'>
 <script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
<?php include('../header.php') ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="jumbotron">
          <form method="POST" id="form" action="animalinfo.php">
            <h3>Upload Animal Detais</h3>
            <div class="form-group">
			  <label for="sel1">Select list:</label>
			  <select class="form-control" id="sel1">
			    <option>Cow</option>
			    <option>Buffalo</option>
			    <option>Ox</option>
			    <option>Sheep</option>
			    <option>Goat</option>
			    <option>Dog</option>
			    <option>Cat</option>
			    <option>Chicken</option>
			    <option>Horse</option>
			    <option>Donkey</option>
			    <option>Camel</option>
			  </select>
			</div>
			<div class="form-group">
				<label for="usr">Animal Price</label>
				<input type="text" class="form-control" name="price">
			</div> 

                <div class="form-group">
				  <label for="usr">Animal Photo 1:</label>
				  <input type="file" class="form-control" name="photo1">
				</div> 
				<div class="form-group">
				  <label for="usr">Animal Photo 2:</label>
				  <input type="file" class="form-control" name="photo2">
				</div> 
				<div class="form-group">
				  <label for="usr">Animal Photo 3:</label>
				  <input type="file" class="form-control" name="photo3">
				</div> 
				<div class="form-group">
				  <label for="usr">Animal Photo 4:</label>
				  <input type="file" class="form-control" name="photo4">
				</div> 
				<div class="form-group">
				  <label for="usr">Animal Video:</label>
				  <input type="file" class="form-control" name="video">
				</div>        
				<div class="form-group">
				   <label for="usr">Animal Description:</label>
                    <textarea rows="4" cols="50" placeholder="Enter animal description" name="description"></textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-success btn-large" value="UPLOAD">
               <!--<a href="../sell/sell2.php" class="btn btn-success btn-large"> UPLOAD</a>  -->
                  
               <input type="reset" value="RESET" onclick="novalidate()" 
                       class="btn btn-success btn-large">
          </form>
  
        </div>
    </div>
    <div class="col-sm-2"></div>
  </div>
</div>
</body>
</html>