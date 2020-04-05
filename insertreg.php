<?php 
$conn = mysqli_connect("localhost", "root", "", "laravel");
 
$id=$name=$organisation=$password="";
if($conn === false){
   // die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$id = mysqli_real_escape_string($conn, $_REQUEST['id']);

$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$organisation = mysqli_real_escape_string($conn, $_REQUEST['organisation']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

 

$sql = "INSERT INTO nam (ID,Namee,Organisation,Password) VALUES ('$id','$name', '$organisation','$password')";
if(mysqli_query($conn, $sql)){
    echo "Record added successfully.";
} 
 

mysqli_close($conn);
?>