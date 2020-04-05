<?php 

$conn = mysqli_connect("localhost", "root", "", "laravel");
 
$id=$mob=$name=$organisation=$email=$performance="";
if($conn === false){
   // die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$id = mysqli_real_escape_string($conn, $_REQUEST['id']);
$mob = mysqli_real_escape_string($conn, $_REQUEST['mob']);
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$organisation = mysqli_real_escape_string($conn, $_REQUEST['organisation']);
$performance = mysqli_real_escape_string($conn, $_REQUEST['performance']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);

 

$sql = "INSERT INTO employ (id,name,contact,organisation,Performance,Email) VALUES ('$id', '$name', '$mob', '$organisation', '$performance', '$email')";
if(mysqli_query($conn, $sql)){
    echo "Record added successfully.";
} 
 

mysqli_close($conn);
?>