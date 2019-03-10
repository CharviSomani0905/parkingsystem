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
<p>PARKING AVAILABLE FOR FOUR WHEELERS ARE: <br>
<table style="width:100%;background-color:black; border: none; text-align:center; ">
	<tr>
		<td style="background-color:red;color:white; height:20px "><?php $f1 ?>f1 </td>
        <td style="background-color:red;color:white; height:20px" ><?php $f2 ?>f2 </td>
      	<td style="background-color:blue;color:white; height:20px"><a href="insert4.php?slot=3&booked=yes"><?php $f3 ?>f3 Empty</a></td>	
      	<td style="background-color:red;color:white; height:20px"><?php $t4 ?>f4</td>
      	<td style="background-color:red;color:white; height:20px" ><?php $f5 ?>f5 </td>
     	</tr>
	<tr>
		<td style="background-color:red;color:white; height:20px" ><?php $f6 ?>f6 </td>
		<td style="background-color:red;color:white; height:20px "><?php $f7 ?>f7</td>
      	<td style="background-color:red;color:white; height:20px"><?php $f8 ?>f8</td>
      	<td style="background-color:red;color:white; height:20px"><?php $f9 ?>f9</td>
      	<td style="background-color:blue;color:white; height:20px"><a href="insert4.php?slot=10&booked=yes"><?php $f10 ?>f10 Empty</a></td>
	</tr>
	<tr>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px" > </td>
	</tr>
	<tr>
		<td style="background-color:red;color:white; height:20px "><?php $f11 ?>f11</td>
        <td style="background-color:red;color:white; height:20px" ><?php $f12 ?>f12</td>
      	<td style="background-color:blue;color:white; height:20px"><a href="insert4.php?slot=13&booked=yes"><?php $f13 ?>f13 Empty</a></td>	
      	<td style="background-color:blue;color:white; height:20px"><a href="insert4.php?slot=14&booked=yes"><?php $f14 ?>f14 Empty</td>
     	<td style="background-color:red;color:white; height:20px" ><?php $f15 ?>f15</td>
		</tr>
	<tr>
		<td style="background-color:red;color:white; height:20px" ><?php $f16 ?>f16 </td>
		<td style="background-color:red;color:white; height:20px" ><?php $f17 ?>f17</td>
		<td style="background-color:red;color:white; height:20px" ><?php $f18 ?>f18</td>
		<td style="background-color:red;color:white; height:20px" ><?php $f19 ?>f19</td>
      	<td style="background-color:blue;color:white; height:20px "><a href="insert4.php?slot=20booked=yes"><?php $f20 ?>f20 Empty</td>
	</tr>
	<tr>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px" > </td>
	</tr>
	<tr>
		<td style="background-color:blue;color:white; height:20px "><a href="insert4.php?slot=21&booked=yes"><?php $f21 ?>f21 Empty</td>	
		<td style="background-color:red;color:white; height:20px" ><?php $f22 ?>f22</td>
        <td style="background-color:red;color:white; height:20px" ><?php $f23 ?>f23</td>
      	<td style="background-color:red;color:white; height:20px" ><?php $t24 ?>f24</td>
      	<td style="background-color:blue;color:white; height:20px "><a href="insert4.php?slot=25&booked=yes"><?php $f25 ?>f25 Empty</td>
     	</tr>
	<tr>
		<td style="background-color:red;color:white; height:20px" ><?php $f26 ?>f26</td>
		<td style="background-color:red;color:white; height:20px" ><?php $f27 ?>f27</td>
      	<td style="background-color:red;color:white; height:20px" ><?php $f28 ?>f28</td>
      	<td style="background-color:red;color:white; height:20px" ><?php $f29 ?>f29</td>
      	<td style="background-color:red;color:white; height:20px" ><?php $f30 ?>f30</td>
	</tr>
	<tr>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px "> </td>
		<td style="background-color: white;color:white; height:20px" > </td>
	</tr>
	<tr>
		<td style="background-color:red;color:white; height:20px" ><?php $f31 ?>f31</td>
      	<td style="background-color:blue;color:white; height:20px "><a href="insert4.php?slot=32&booked=yes"><?php $f32 ?>f32 Empty</td>	
        <td style="background-color:red;color:white; height:20px" ><?php $f33 ?>f33</td>
      	<td style="background-color:red;color:white; height:20px" ><?php $f34 ?>f34</td>
      	<td style="background-color:blue;color:white; height:20px "><a href="insert4.php?slot35&booked=yes"><?php $f35 ?>f35 Empty</td>
     	</tr>
</table>
<br><br>
</body>
</html>

