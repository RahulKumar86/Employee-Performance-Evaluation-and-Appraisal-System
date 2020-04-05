<?php
$con = mysqli_connect('localhost','root','','laravel');
$id = $_GET['i'];
$query = "DELETE FROM project WHERE ID = '$id'";
$data = mysqli_query($con,$query);
if($data){
	echo "<script>alert('record deleted')</script>";
	echo "Record deleted from table";
?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/db.php">
	<?php
}
	else{
		echo "Sorry, delete process failed";
	}
?>