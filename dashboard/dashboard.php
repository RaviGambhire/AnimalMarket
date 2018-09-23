<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset='utf-8'>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
</head>
<body>
<?php 
$conn = mysqli_connect('localhost','root','','animalbazar');
              session_start();
              $email = $_SESSION['email'];

              echo $email;
              $query = "SELECT * FROM regist WHERE email = '".$email."'";
              $sql_get_data =mysqli_query($conn, $query) or die('Error querying database.');
              while($row = mysqli_fetch_assoc($sql_get_data)) {
                $query2 = "SELECT * FROM farmer_details WHERE FarmerPhone = '".$row["phone_no"]."'";
                $sql_get_data2 =mysqli_query($conn, $query2) or die('Error querying database.');
                while($row2 = mysqli_fetch_assoc($sql_get_data2)) {
                  
                }
              }
           ?>
<?php include('header.php') ?>
<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-sm-8">
			    <div class="row">
			    	<div class="col-sm-6"><h3>Name : </h3></div>
			    	<div class="col-sm-6"><h3>Anand</h3></div>
			    </div>
				<div class="row">
			    	<div class="col-sm-6"><h3>Phone : </h3></div>
			    	<div class="col-sm-6"><h3>9669696996</h3></div>
			    </div>
				<div class="row">
			    	<div class="col-sm-6"><h3>Address : </h3></div>
			    	<div class="col-sm-6"><h3>At Kumbhargaon Tq Biloli,Dist Nanded</h3></div>
			    </div>	
			</div>
			<div class="col-sm-4">
				<img src="../images/download.jpg" class="img-responsive img-circle" alt="Responsive image">
			</div>
		</div>
		<div class="row">
		     <h3>My Animals</h3>
			<h3>To Buy</h3>
			<div class="row">
			   <?php 
                	//query to retrieve data from dtabase
					$query = "SELECT * FROM animal_details";
					$sql_get_data =mysqli_query($conn, $query) or die('Error querying database.');
				    echo "<br/>";
					//Step3 display data
					if (mysqli_num_rows($sql_get_data) > 0) {
				    // output data of each row
					    while($row = mysqli_fetch_assoc($sql_get_data)) {
					    	echo $row['animalPhoto1'];
					    	$photo = $row['animalPhoto1'];
					    	$src = "../images/farmer_animal_photo/".$photo;
					    	echo $src;
					    	$image ='<img src= "'.$src.'" class="img-responsive img-circle" alt="Responsive image">';
					    	?>
					       <div class="col-sm-3"><a href="../sell/animalDetails.php"><?php $image;?></a></div>
					    <?php }
					}

			   ?>
				
				<!--<div class="col-sm-3"><a href="../sell/animalDetails.php"><img src="../images/ox.jpg" class="img-responsive img-circle" alt="Responsive image"></a></div>
				<div class="col-sm-3"><a href="../sell/animalDetails.php"><img src="../images/ox.jpg" class="img-responsive img-circle" alt="Responsive image"></a></div>
				<div class="col-sm-3"><a href="../sell/animalDetails.php"><img src="../images/ox.jpg" class="img-responsive img-circle" alt="Responsive image"></a></div>-->
			</div>
			
		</div>
		<div class="row">
			<h3>To sell</h3>
			<div class="row">
				<div class="col-sm-3"><a href="../sell/animalDetails.php"><img src="../images/ox.jpg" class="img-responsive img-circle" alt="Responsive image"></a></div>
				<div class="col-sm-3"><a href="../sell/animalDetails.php"><img src="../images/ox.jpg" class="img-responsive img-circle" alt="Responsive image"></a></div>
				<div class="col-sm-3"><a href="../sell/animalDetails.php"><img src="../images/ox.jpg" class="img-responsive img-circle" alt="Responsive image"></a></div>
				<div class="col-sm-3"><a href="../sell/animalDetails.php"><img src="../images/ox.jpg" class="img-responsive img-circle" alt="Responsive image"></a></div>
			</div>
		</div>
	</div>	
</div>
</body>
</html>