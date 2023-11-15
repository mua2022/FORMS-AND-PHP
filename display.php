<?php
include('connect.php');
$sql="Select * FROM  students where Admno='227-011' ";
$result=mysqli_query($conn, $sql);
print "<p> <h1> RECORDS FROM STUDENTS TABLE </h1> </p>";
?>
<table border="5">
	<tr> <th>Admission Number</th> <th>Student Name</th><th> Gender</th> <th> Course</th> <th>Admission year</th>  </tr> 

<?php
if (mysqli_num_rows($result)>0)
{
	while ($row=mysqli_fetch_assoc($result) ) {
		// code...
		echo "<tr> <td> ".$row['Admno'] ."</td> <td> " .$row['Sname'] ."</td> <td> " .$row['Gender'] ."</td> <td> " .$row['Course'] ."</td> <td> " .$row['Year']."</td> </tr> ";
		
	}
} else{
echo "No  records";
}
mysqli_close($conn);
?>
</table>