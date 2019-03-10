<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="parking";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
	
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql= "COUNT * FROM slots where (booked= no)";
$out = $conn.exec($sql);

$count = $out

$sql= "COUNT * FROM slots where (booked= yes)";
$out=$conn.exec($sql1);

$reserved=$out;
?>
<!DOCTYPE html>
<html>
<head>
<link href ="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
<style type="text/css">
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
font-size:14px;
font-weight: 100;
}


</style>
</head>
<body>

<div id="navbar">
<ul>

  <li><a href="book.html">2 wheelers</a></li>
  <li><a href="booked.html">4 wheelers</a></li>
  <li><a href="home.html">Logout</a></li>
  </ul>
</div>

<p>Hello! The available spaces are shown below:</p>
<center>
<table>
  <tr bgcolor="#FF0000">
    <th>Open spaces</th>
    <th>Taken spots</th>
 
  </tr>
  <tr>
  <td><?php echo $count ?></td>
  <td><?php echo $reserved ?></td>
   </tr>
  <p> Select your choice of vehicle on the navigation bar and book your spot. </p>
</body>
</html>