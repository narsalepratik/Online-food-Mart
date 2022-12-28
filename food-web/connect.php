<?php  
$yourname=$_POST['yourname'];
$yournumber=$_POST['yournumber'];
$yourorder=$_POST['yourorder'];
$additionalfood=$_POST['additionalfood'];
$yourmuch=$_POST['yourmuch'];
$dateandtime=$_POST['dateandtime'];
$youraddress=$_POST['youraddress'];
$yourmessage=$_POST['yourmessage'];

$conn = new mysqli("localhost:3307","root","","pp" ); 

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo " Database Connected";
echo "<br>";



$query = "INSERT INTO tan (yourname,yournumber,yourorder,additionalfood,yourmuch,dateandtime,youraddress,yourmessage) VALUES ('$yourname','$yournumber','$yourorder','$additionalfood','$yourmuch','$dateandtime','$youraddress','$yourmessage' )";

$result = mysqli_query($conn,$query);

if($result==True){
	echo "order successfully placed";
}
else
{
	echo "error";
}


?>

