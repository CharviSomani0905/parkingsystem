<!DOCTYPE html>
<html>
<head>
<title>Availabe spaces</title>
<style>
body {
background-color:#D3D3D3;
}
p{
text-align:center;
text-decoration:bold;
font-size:50px;
font-family: sans-serif;
font-weight:50px;
}
a{
text-decoration:underline;
text-transform: uppercase;
color: white;
}
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
<p>PARKING AVAILABLE FOR TWO WHEELERS ARE: <br>
<table style="width:100%;background-color:black; border: none; text-align:center; ">
	<tr>
		<td style="background-color:red;color:white; height:20px "><?php $t1 ?>t1 </td>
        <td style="background-color:red;color:white; height:20px" ><?php $t2 ?>t2 </td>
      	<td style="background-color:blue;color:white; height:20px"><a href="insert.php?slot=3&booked=yes"><?php $t3 ?>t3 Empty</a></td>	
      	<td style="background-color:red;color:white; height:20px"><?php $t4 ?>t4</td>
      	<td style="background-color:blue;color:white; height:20px"><a href="insert.php?slot=5&booked=yes"><?php $t5 ?>t5 Empty</a></td>
     	</tr>
	<tr>
		<td style="background-color:blue;color:white; height:20px "><a href="insert.php?slot=6&booked=yes"><?php $t6 ?>t6 Empty</a></td>
		<td style="background-color:red;color:white; height:20px "><?php $t7 ?>t7</td>
      	<td style="background-color:red;color:white; height:20px"><?php $t8 ?>t8</td>
      	<td style="background-color:red;color:white; height:20px"><?php $t9 ?>t9</td>
      	<td style="background-color:blue;color:white; height:20px"><a href="insert.php?slot=10&booked=yes"><?php $t10 ?>t10 Empty</a></td>
	</tr>
	<tr>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px" > </td>
	</tr>
	<tr>
		<td style="background-color:red;color:white; height:20px "><?php $t11 ?>t11</td>
        <td style="background-color:red;color:white; height:20px" ><?php $t12 ?>t12</td>
      	<td style="background-color:blue;color:white; height:20px"><a href="insert.php?slot=13&booked=yes"><?php $t13 ?>t13 Empty</a></td>	
      	<td style="background-color:red;color:white; height:20px"><?php $t14 ?>t14</td>
      	<td style="background-color:blue;color:white; height:20px"><a href="insert.php?slot15&booked=yes"><?php $t15 ?>t15 Empty</td>
     	</tr>
	<tr>
		<td style="background-color:blue;color:white; height:20px "><a href="insert.php?slot16&booked=yes"><?php $t16 ?>t16 Empty</td>
		<td style="background-color:red;color:white; height:20px" ><?php $t17 ?>t17</td>
		<td style="background-color:red;color:white; height:20px" ><?php $t18 ?>t18</td>
		<td style="background-color:red;color:white; height:20px" ><?php $t19 ?>t19</td>
      	<td style="background-color:blue;color:white; height:20px "><a href="insert.php?slot20booked=yes"><?php $t20 ?>t20 Empty</td>
	</tr>
	<tr>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px" > </td>
	</tr>
	<tr>
		<td style="background-color:red;color:white; height:20px" ><?php $t21 ?>t21</td>
        <td style="background-color:red;color:white; height:20px" ><?php $t22 ?>t22</td>
		<td style="background-color:blue;color:white; height:20px "><a href="insert.php?slot23&booked=yes"><?php $t23 ?>t23 Empty</td>	
      	<td style="background-color:red;color:white; height:20px" ><?php $t24 ?>t24</td>
      	<td style="background-color:blue;color:white; height:20px "><a href="insert.php?slot25&booked=yes"><?php $t25 ?>t25 Empty</td>
     	</tr>
	<tr>
		<td style="background-color:red;color:white; height:20px" ><?php $t26 ?>t26</td>
		<td style="background-color:red;color:white; height:20px" ><?php $t27 ?>t27</td>
      	<td style="background-color:red;color:white; height:20px" ><?php $t28 ?>t28</td>
      	<td style="background-color:red;color:white; height:20px" ><?php $t29 ?>t29</td>
      	<td style="background-color:red;color:white; height:20px" ><?php $t30 ?>t30</td>
	</tr>
	<tr>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px" > </td>
	</tr>
	<tr>
		<td style="background-color:red;color:white; height:20px" ><?php $t31 ?>t31</td>
        <td style="background-color:red;color:white; height:20px" ><?php $t32 ?>t32</td>
      	<td style="background-color:blue;color:white; height:20px "><a href="insert.php?slot33&booked=yes"><?php $t33 ?>t33 Empty</td>	
      	<td style="background-color:red;color:white; height:20px" ><?php $t34 ?>t34</td>
      	<td style="background-color:blue;color:white; height:20px "><a href="insert.php?slot35&booked=yes"><?php $t35 ?>t35 Empty</td>
     	</tr>
</table>
<br><br>
</body>
</html>

