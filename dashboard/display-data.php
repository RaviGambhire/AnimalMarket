<?php
$conn = mysqli_connect('localhost','root','','animalbazar');
$sqlget="SELECT*FROM animalbazar";
$db= mysql_connect($sqlget);
$sqldata=mysqli_quary($dbcon,$sqlget) or die (error getting));
echo"<table>";
echo"<tr><th> farmerID</th><th>Farmar name</th></tr>"
while($row=mysql_fetch_array($sqldata,mysql_fetch_assoc(result)))
 mysqli_fetch_assoc() 
{
echo"<tr><td>";
echo $row['farmerID'];---------> is FarmerID spelling same as per database column?
echo "</td><td>";
echo$ row['Farmer name'];
echo "</td><td>";
}
echo"</table>";
?>