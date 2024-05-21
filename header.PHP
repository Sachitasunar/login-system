<?php      
include('connection.php');

echo '
<!DOCTYPE html>
<html>
<head>
<title>ONLINE HOSTEL Management System
</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="header">
<div class ="title">
<img src="res/images/logo.png" height = "50" width="45" align="top">
&nbsp;
ONLINE HOSTEL MANAGEMENT SYSTEM

</div><br>
<a href="logout.php">
<button class="btn logout">
Logout
</button></a>
</div>

<div class="container">
<center>
<ul class="tabsWraper">
<li class="tabs">';

if  ($_SESSION["tab"] == "Home")
	echo'<a href="Home.php" class = "active">Home</a>';
else
	echo'<a href="Home.php">Home</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "ADD ROOM")
	echo'<a href="ADD ROOM.php" class = "active">ADD ROOM</a>';
else
	echo'<a href="ADD ROOM.php">ADD Person</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "CREATE ROOM")
	echo'<a href="CREATE ROOM.php" class = "active">CREATE ROOM</a>';
else
	echo'<a href="CREATE ROOM.php".>CREATE ROOM</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] ="course creation")
	echo'<a href="course creation.php" class = "active"><course creation/a>';
else
    echo '<a href="course creation.php".>course creation</a>';
echo '</li><li class="tabs">';


if  ($_SESSIO"N["tab"] == "dashbord")
echo'<a href="dashbord.php" class = "active">dashbord</a>';
else 
	echo'<a href="dashbord.php">dashbord</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "manage student")
	echo'<a href="manage student.php" class = "active">manage student</a>';
else
	echo'<a href="manage student.php">manage student</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "change password")
	echo'<a href="change password.php" class = "active">change password</a>';
else
	echo'<a href="change password.php">change password</a>';
echo '</li><li class="tabs">';
</ul>
</center>

<div class="contents">