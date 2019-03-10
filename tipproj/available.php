<!DOCTYPE html>
<html>
<head>
<style>
	body{
	margin=0;
	background-size: 100%;
	font-family:'Arvo';
	background-color: #D3D3D3;
	}
	#content{
		margin-top: 20px;
		margin-left: 50px;
		margin-right: 100px;
		padding: 300px;
		font-family: 'Arvo';
	}
	
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	font-family: 'Arvo';
}
li {
    float: left;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover {
    background-color: #111;
}
table, th, td {
  border: 1px solid black;
}
p {
text-align: center;
font-size:20px;
font-weight: 100;
}


</style>
</head>
<body>
<div id="navbar">
<ul>

  <li><a href="book.php">2 wheelers</a></li>
  <li><a href="booked.php">4 wheelers</a></li>
  <li><a href="home.html">Logout</a></li>
  </ul>
</div>
<br>
<p>Late for Exam?? Do not panic! BookMySpot is here to help you! :) </p>
<p> The table below will help you find the exact spot.</p>
<p> The available spaces for two wheelers are shown below:</p>
<center>
<table>
  <tr bgcolor="#FF0000">
    <th>Open spaces</th>
    <th>Taken spots</th>
    <th>Booked for faculty</th>
  </tr>

<?php
$conn=mysqli_connect("localhost","root","","parking");

if($conn->connect_error){
die("Connection failed:" .$conn->connect_error);
}

$sqla="SELECT * FROM slots WHERE open='yes'";
$sqlb="SELECT * FROM slots WHERE open='no'";
$sqlc="SELECT * FROM slots where faculty='yes'";

if ($result=mysqli_query($conn,$sqla))
  {
  $totala=mysqli_num_rows($result);
  
  }
  if ($result=mysqli_query($conn,$sqlb))
  {
  $totalb=mysqli_num_rows($result);
  
  }
  if ($result=mysqli_query($conn,$sqlc))
  {
  $totalc=mysqli_num_rows($result);
  
  }

  echo("<tr><td>".$totala."</td><td>".$totalb."</td><td>".$totalc."</td></tr>");


$conn-> close();

?>
  </table>
  
  <p>The available spaces for four wheelers are shown below:</p>
<center>
<table>
  <tr bgcolor="#FF0000">
    <th>Open spaces</th>
    <th>Taken spots</th>
    <th>Booked for faculty</th>
  </tr>

<?php
$conn=mysqli_connect("localhost","root","","parking");

if($conn->connect_error){
die("Connection failed:" .$conn->connect_error);
}

$sqla="SELECT * FROM slotfour WHERE open='yes'";
$sqlb="SELECT * FROM slotfour WHERE open='no'";
$sqlc="SELECT * FROM slotfour where faculty='yes'";

if ($result=mysqli_query($conn,$sqla))
  {
  $totala=mysqli_num_rows($result);
  
  }
  if ($result=mysqli_query($conn,$sqlb))
  {
  $totalb=mysqli_num_rows($result);
  
  }
  if ($result=mysqli_query($conn,$sqlc))
  {
  $totalc=mysqli_num_rows($result);
  
  }

  echo("<tr><td>".$totala."</td><td>".$totalb."</td><td>".$totalc."</td></tr>");


$conn-> close();

?>
  </table>
  
</center>			
  <p> Select your choice of vehicle on the navigation bar, reach the nearest location and book your spot. </p>
</body>
</html>

