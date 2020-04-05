<?php
	error_reporting(0);
	$con = mysqli_connect('localhost','root','','laravel');
?>
	
<!DOCTYPE html>
<html>
<head>
	<title>Performance Evaluation</title>
    <link rel="stylesheet" href="bootstrap.min.css">

		<script src="bootstrap.min.js"></script>
	<style>
		td,table{
			border:solid 2px white;
            
		}
        table{
            width:50%;
        }
        body{
            background-color:black;
            color:whitesmoke;
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
<body>
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
  <div class="jumbotron text-primary">
  <h2 align="center"><b>Performance Evaluation</b></h2>

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
<tr>
		<td>Email</td> 
		<td> <input type="text" name="Mail" value="<?php echo $_GET['e']; ?>"> </td>
</tr>
<tr>
		<td>Mobile</td> 
		<td><input type="number" name="mobile" value="<?php echo $_GET['m']; ?>"></td>
</tr>
<tr>
		<td>Task</td>
		<td><input type="text" name="task" value="<?php echo $_GET['t']; ?>"> </td>
</tr> 
<tr>
<td>Performance</td>
<td><input type="number" name="performance" value="<?php echo $_GET['p'];?>"> </td>


</tr>
<tr>
	<td><input type="submit" name="submit" value="result"/> </td>
	<td><a href="db.php"><input type="button" value="Previous page"></a></td>
</tr>
</table>
	</form>
	<?php
		if($_GET['submit']){
			
			
			$performance=$_GET['performance'];
			
			if($performance>=1 && $performance <=5){
                
                echo "<ul>
                <b><ins>Employee's performance is not upto the mark</ins></b> 
                <li>Set comprehensible and achievable goals and expectations.</li>
                <li>Value and encourage open communication.</li>
                <li>Establish trust</li>
                <li>Encourage employees to share their innovative ideas.</li>
                <li>Give consistent positive feedback.</li>
                </ul>";
			}else{
                echo "<ul><b><ins>Performance is upto the mark</ins></b>
                <li>Make your business a pleasant place to be</li>
                <li>Be a respectful, honest, and supportive manager</li>
                <li>Offer flexible scheduling</li>
                <li>Recognize their achievements</li>
                <li>Provide training in required technologies</li></ul>";
			}
		}
		else{
			echo "<font color='blue'>~Click on result button to see result!<br>";
			echo "<font color='blue'>~Click on side button to go to the previous page";
		}
	?>
    </div>
    </div>
    </div>
</body>
</html>