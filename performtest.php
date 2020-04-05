
	
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
<div class="jumbotron text-primary">
<h2 align="center"><b> Performance Test </b>
</h2>
</div>

<form action="insertemptestt.php" method="post">
<table class="table table-dark table-hover table-striped">
<tr>
    <th>
    <label for="id">Id:</label></th>
    <td><input type="number" name="id" id="id"></td>
    </tr>



    
    <tr>
       <th> <label for="punctuality">punctuality</label></th>
      <td>  <input type="text" name="punctuality" id="punctuality"></td>
    </tr>
     <tr>
        <th><label for="appearance">appearance</label></th>
       <td> <input type="number" name="appearance" id="appearance"></td>
    </tr>
    <tr>
    <th> <label for="quality">quality</label></th>
      <td>  <input type="text" name="quality" id="quality"></td>
    </tr>
    <tr>
       <th><label for="subordination">subordination</label></th>
       <td><input type="number" name="subordination" id="subordination"></td>
    </tr>
    <tr>
       <th> <label for="habits">habits</label></th>
       <td> <input type="text" name="habits" id="habits"></td>
    </tr>
    <tr>

    <td><input type="submit" value="Submit"></td>
    <td> <a href="dbempl.php">RETURN  </a>   </td>
    </tr>
    </table>
    </div>
    </div>
    </div>
</form>
</body>
</html>
