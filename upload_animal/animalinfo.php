<?php
//connect to database
	$conn = mysqli_connect('localhost','root','','animal_bazaar');
	
if(isset($_POST['submit'])) {
	 //or die('Error connecting to MySQL server.');
	//Step2 get values in variables
	$animal_ID = $_POST["animalID"];
	$animal_name = $_POST['name'];
	$animal_price = $_POST['price'];
	$animal_photo1 = $_POST['photo1'];
    $animal_photo2 = $_POST['photo2'];
    $animal_photo3 = $_POST['photo3'];
    $animal_photo4 = $_POST['photo4'];
    $animal_video = $_POST['video'];
    $animal_description=$_POST['description'];
    //query for insert dta in database
    $sql ="INSERT INTO animal_details(animal_ID,animal_name,animal_price,animal_photo1,animal_photo2,animal_photo3,animal_photo4,animal_video,animal_description) VALUES ('".$animalID."',' ".$name."','".$price."','".$photo1."','".$photo2." ','".$photo3."','".$photo4."','".$video."','".$description."')";
    $sql_insert = mysqli_query($conn,$sql);
    echo"<br/>";
    if($sql_insert) {
    	echo"inserted";
    } else {
    	echo "not inserted";
    }
}
?>