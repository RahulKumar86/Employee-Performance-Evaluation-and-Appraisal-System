<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap.min.css">

		<script src="bootstrap.min.js"></script>
<meta charset="UTF-8">
<title>Register</title>
<style>
th,td,table{
    border:2px double black;
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
	

<div class="col-md-12">
<div class="jumbotron text-primary">
<h2 align="center"><b> Registration Form  </b>
</h2>
</div>

<form action="insertreg.php" method="post">
<table class="table table-dark table-hover table-striped">
<tr>
    <th>
    <label for="id">Id:</label></th>
    <td><input type="number" name="id" id="id"></td>
    </tr>


    
    <tr>
       <th> <label for="Name">Name:</label></th>
      <td>  <input type="text" name="name" id="Name"></td>
    </tr>
     
    <tr>
        <th><label for="Organisation">Organisation:</label></th>
        <td><input type="text" name="organisation" id="organisation"></td>
    </tr>
    
    <tr>
       <th> <label for="Password">Password:</label></th>
       <td> <input type="text" name="password" id="password"></td>
    </tr>
    <tr>

    <td colspan="2"><input type="submit" value="Submit"></td>
    </tr>
    </table>
    </div>
    </div>
    </div>
</form>
</body>
</html>
