<?php
//connect to database
	$conn = mysqli_connect('localhost','root','','registration');
	
if(isset($_POST['submit'])) {
	 //or die('Error connecting to MySQL server.');
	//Step2 get values in variables
	$name = $_POST["name"];
	$email = $_POST['email'];
	$phone_no = $_POST['phone'];
	$password = $_POST['pwd'];
   
    //query for insert dta in database
    $sql ="INSERT INTO regist(name,email,phone_no,password) VALUES ('".$name."','".$email."','".$phone_no."','".$password."')";
    $sql_insert = mysqli_query($conn,$sql);
    echo"<br/>";
    if($sql_insert) {
    	echo"inserted";
    } else {
    	echo "not inserted";
    }
}
if(isset($_POST['show']))  {   
    //query to retrieve data from dtabase
	$query = "SELECT * FROM regist";
	$sql_get_data =mysqli_query($conn, $query) or die('Error querying database.');
    echo "<br/>";
	//Step3 display data
	if (mysqli_num_rows($sql_get_data) > 0) {
    // output data of each row
	    while($row = mysqli_fetch_assoc($sql_get_data)) {
	        echo "id: " . $row["Name"]. " - Name: " . $row["email"]. " " . $row["phone_no"]. "<br>";
	    }
	}
}
if(isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$query = "SELECT * FROM regist WHERE email = '".$email."' AND password = '".$password."'";
	$sql_get_data =mysqli_query($conn, $query) or die('Error querying database.');
    
   
		//Step3 display data
		if (mysqli_num_rows($sql_get_data) > 0) {
			 header('location:../sell/sell2.php');
	    // output data of each row
		    while($row = mysqli_fetch_assoc($sql_get_data)) {
		    	echo "<br/>";
		    	echo "Login successful";
		    	echo "<br/>";
		        echo "id: " . $row["Name"]. " - Name: " . $row["email"]. " " . $row["phone_no"]. "<br>";
		    }
		}
		else {
			echo"You are not authorized user";
		}

    
}	
?>