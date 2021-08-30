<?php

$w=$_POST['a'];
$x=$_POST['b'];
$y=$_POST['c'];
$z=$_POST['d'];

$connect = mysqli_connect("localhost","root","");


mysqli_select_db($connect, "netcamp");
$query="INSERT INTO student VALUES ('$w','$x','$y','$z')";
mysqli_query($connect, $query);

echo "Database Updated Successfully";

?>