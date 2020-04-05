<?php 

$conn = mysqli_connect("localhost", "root", "", "laravel");
 
$xx=$punctuality=$appearance=$quality=$subordination=$habits="";
if($conn === false){
   // die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$xx = mysqli_real_escape_string($conn, $_REQUEST['id']);
$punctuality = mysqli_real_escape_string($conn, $_REQUEST['punctuality']);
$appearance = mysqli_real_escape_string($conn, $_REQUEST['appearance']);
$quality = mysqli_real_escape_string($conn, $_REQUEST['quality']);
$subordination = mysqli_real_escape_string($conn, $_REQUEST['subordination']);
$habits = mysqli_real_escape_string($conn, $_REQUEST['habits']);

 

$sql = "UPDATE employ SET Performance='$subordination' WHERE id='$xx'";
if(mysqli_query($conn, $sql)){
    echo "Record added successfully.";
} 
 

mysqli_close($conn);
?>