<?php 
$conn = mysqli_connect("localhost", "root", "", "laravel");
 
$id=$mob=$name=$task=$email=$performance="";
if($conn === false){
   // die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$id = mysqli_real_escape_string($conn, $_REQUEST['id']);
$mob = mysqli_real_escape_string($conn, $_REQUEST['mob']);
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$task = mysqli_real_escape_string($conn, $_REQUEST['task']);
$performance = mysqli_real_escape_string($conn, $_REQUEST['performance']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$sid= mysqli_real_escape_string($conn, $_REQUEST['uid']);
 

$sql = "INSERT INTO project (id,Sid,Name,mob,Task,Performance,Mail) VALUES ('$id','$sid','$name', '$mob', '$task','$performance', '$email')";
if(mysqli_query($conn, $sql)){
    echo "Record added successfully.";
} 
 

mysqli_close($conn);
?>