<?php

$w=$_POST['a'];
$x=$_POST['b'];
$y=$_POST['c'];

$connect = mysqli_connect("localhost","root","");


mysqli_select_db($connect, "netcamp");
$query="UPDATE student SET phone='$y' WHERE name='$w' AND password='$x'";
mysqli_query($connect, $query);

echo "Database Updated Successfully";

?>