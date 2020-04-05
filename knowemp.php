<?php
	error_reporting(0);
	$con = mysqli_connect('localhost','root','','laravel');
?>
	
<!DOCTYPE HTML>
<html>
	<head>
		<title>Display</title>
		<link rel="stylesheet" href="bootstrap.min.css">

		<script src="bootstrap.min.js"></script>
		<script src="angular.min.js"></script>
		<style>
		body{
			background-color:black;
			text:white;
			color:whitesmoke;
		}
			th,td,table{
				border:3px double lightgrey;
				padding:2px;
				
			}

			.containerr {
  position: relative;
  width: 100%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.containerr:hover .image {
  opacity: 0.3;
}

.containerr:hover .middle {
  opacity: 1;
}

.textt {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
	  </style>
	  </head>
<body ng-app>
	<div class="container">
		<div class="row">
		<div class="col-md-1">
		<h3 align="center"><b>Quick Links</b></h3>
     <div class="containerr">
	 <img src="pr1.jpg" class="img-fluid rounded-circle image">
	 <div class="middle">
     <div class="text">Home Page</div>
     </div>
     </div><br>
	
	 <div class="containerr">
	 <img src="pr2.jpg" class="img-fluid rounded-circle image">
	 <div class="middle">
     <div class="text">Performance Checkup</div>
     </div>
     </div><br>
 <a href="form11.php">
	 <div class="containerr">
	 <img src="pr3.jpg" class="img-fluid rounded-circle image">
	 <div class="middle">
     <div class="text">Insert data</div>
     </div>
     </div></a>
	<br>
	<div class="containerr">
	 <img src="pr4.jpg" class="img-fluid rounded-circle image">
	 <div class="middle">
     <div class="text">Report a bug</div>
     </div>
     </div><br>
	 <a href="aboutus.php">
	 <div class="containerr">
	 <img src="pr5.jpg" class="img-fluid rounded-circle image">
	 <div class="middle">
     <div class="text">About organisation</div>
     </div>
     </div></a><br>
	 <div class="containerr">
	 <img src="pr6.jpg" class="img-fluid rounded-circle image">
	 <div class="middle">
     <div class="text">Query</div>
     </div>
     </div>
	
	
	</div>

			<div class="col-md-11">

            <div class="jumbotron jumbotron-fluid text-primary">
 <h1 align="center"><b>Performance Test</b> </h1><br>
 </div>

 <form action="" method="GET">

<table class="table table-dark table-hover table-striped">
    <tr>
<td>ID </td> 
<td><input type="number" name="id" value="<?php echo $_GET['i']; ?>"> </td>
</tr>
<tr>
<td>Name </td> 
<td><input type="text" name="Name" value="<?php echo $_GET['n']; ?>"></td>
</tr>
</form><br>
<a href="performtest.php">Share this link to start an performance test</a>



            </div>
    </div>
    </div>
    </body>
    </html>