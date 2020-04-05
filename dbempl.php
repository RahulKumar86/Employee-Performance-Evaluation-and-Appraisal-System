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
 <a href="registeremp.php">
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
	 <div class="containerr">
	 <img src="pr5.jpg" class="img-fluid rounded-circle image">
	 <div class="middle">
     <div class="text">About organisation</div>
     </div>
     </div><br>
	 <div class="containerr">
	 <img src="pr6.jpg" class="img-fluid rounded-circle image">
	 <div class="middle">
     <div class="text">Query</div>
     </div>
     </div>
	
	
	</div>

			<div class="col-md-11">
				<div class="jumbotron jumbotron-fluid text-primary">
 <h1 align="center"><b>WELCOME</b> </h1><br>
 
 <form action="" method="GET">
  <pre>  UID<input type="number" name="uid">&nbsp;  Ogranisation Name:<input type="text" name="NN" value="">&nbsp; Branch:<input type="text">&nbsp; </pre>
  <input type="submit" name="submit"> 
</form>
</div>
<?php
if($_GET['submit']){
	$xy=$_GET['uid'];
}
?>
Show/Hide:<input type="checkbox" ng-model="shw">
<div ng-show="shw">
<?php
	$con = mysqli_connect('localhost','root','','laravel');
    
	$query = "SELECT * from employ where employ.id=$xy";
	$run = mysqli_query($con,$query);
	$total = mysqli_num_rows($run);

	if($total != 0){

		?>

	<table class="table table-dark table-hover table-striped">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Organisation</th>
			<th>Performance</th>
			<th colspan="3">Operations</th>
		</tr>
		<?php
			while($data = mysqli_fetch_assoc($run)){
				echo "<tr>
						<td>".$data['id']."</td>
						<td>".$data['name']."</td>
						<td>".$data['Email']."</td>
						<td>".$data['contact']."</td>
						<td>".$data['organisation']."</td>
						<td>".$data['Performance']."</td>
						
						
						
                        <td>  <a href='knowemp.php?i=$data[id]&n=$data[name]&m=$data[contact]&e=$data[Email]&p=$data[Performance]&t=$data[organisation]'>Start Test</a>  
                                                                     </td>
                                                                     <td><a href='deleteemp.php?i=$data[id]'>Delete</a></td>
					</tr>";

			}
		}else{
			echo "no recod found";
		}
		?>
	</table>	
	</div>
	</div>
	
	</div>
	</div>
	</body>
	</html>
