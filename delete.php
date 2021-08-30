<?php

//hold the value
$x=$_POST['a'];
$y=$_POST['b'];

$connect = mysqli_connect("localhost","root","");

mysqli_select_db($connect, "netcamp");
$query="DELETE FROM student WHERE name='$x' AND password='$y'";
mysqli_query($connect, $query);

echo "Database Updated Successfully";

?>