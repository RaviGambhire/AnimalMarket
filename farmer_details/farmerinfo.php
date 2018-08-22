<?php
//connect to database
	$conn = mysqli_connect('localhost','root','','animal_bazaar');
	
if(isset($_POST['submit'])) {
	 //or die('Error connecting to MySQL server.');
	//Step2 get values in variables
	$name = $_POST['name'];
	//$phone = $_POST[''];
	$villageorcity = $_POST['villageorcity'];
	$taluka = $_POST['taluka'];
    $district = $_POST['district'];
    $password = $_POST['pwd'];
    //query for insert dta in database
    $sql = "INSERT INTO farmer_details(FarmerName,FarmerVillageOrCity,FarmerTaluka,FarmerDistrict,password) VALUES ('".$name."','".$villageorcity."','".$taluka."','".$district."','".$password."')";
    $sql_insert = mysqli_query($conn,$sql);
    print_r($sql_insert);
    echo"<br/>";
    if($sql_insert) {
    	 header('location:../sell/sell2.php');
    } else {
    	echo "not inserted";
    }
}
echo print_r($_POST);
?>