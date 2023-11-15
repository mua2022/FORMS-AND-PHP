<?php
include('connect.php');
$Admno=$_POST['Admno'];
$Sname=$_POST['Sname'];
$Gender=$_POST['Gender'];
$Course=$_POST['Course'];
$Year=$_POST['Year'];
$sql="Insert into students Values('$Admno','$Sname','$Gender','$Course','$Year')";



if ($conn->query($sql)) {
	echo "<script> window.alert('Record added successfully!')</script>";

	// code...
}else
{
	echo "Error:" .$sql." " .$conn->error ;

}

mysqli_close($conn);

?>

<a href='display.php'><button>DISPLAY RECORDS</button> </a>