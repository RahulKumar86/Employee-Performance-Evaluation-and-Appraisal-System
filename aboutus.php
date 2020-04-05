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
 <h1 align="center"><b>About Us!</b> </h1><br> 
 </div>
 

<p>
This Company brings affordable solutions to people everywhere in order to help them achieve their dreams and change the world

Whether it be an annual appraisal or simply a one-to-one conversation,
 using an innovative management system to track your staff’s performance can tailor the HR processes involved and save a lot of time and hassle.
</p>
<p>
Offering real-time notifications, our website keeps all information in one place, and makes it easier to pinpoint employees who are going above and beyond at work.
 This, in turn, gives managers the opportunity to offer support or reward employees at the most influential time.<br>
<br>
<ins>The importance of tracking performance:-</ins><br>
<ul><li>
Keeping on top of each employee’s performance enables companies and organisations to monitor, manage and improve their business strategy and the results they achieve. 
In doing so, this helps employers shape their success and keep ahead of their competitors.</li>
<li>
Analysing the performances of staff can also make it easy to identify employees who are readily engaged with their work, while also pinpointing those who aren’t. 
As a result of this, employers will be able to see where they need to spend their time and resources, to either get specific staff members back to working at their
 full potential or reduce the likelihood of burning themselves out.</li>
</ul>

<ins>What are the benefits of tracking employee performance?</ins><br>

<ul>

<li>It’s easy to use.</li>
<li>It can save time.</li>
<li>It can identify potential issues sooner rather than later.</li>
<li>It offers the opportunity for real-time feedback.</li>
<li>It accounts for all members of staff.</li>
<li>It can help everyone involved in the workplace.</li>
<li>It can be used regardless of the work sector.</li>
<li>It helps employees engage with a business’ overall goals.</li>
<li>It supports positive relationships between managers and their employees.</li>
<li>It ensures performance reviews are fair, and highlights cases where it isn’t.</li>
<li>It allows employees to see how their role fits into the organisation’s overarching strategy.</li>
</ul></p>
 </div>
 </div>
 </div>
 </body>
 </html>
