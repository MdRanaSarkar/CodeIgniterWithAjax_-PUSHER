<?php



$conn=mysqli_connect('localhost','root','','easycse');

$query="SELECT * FROM user";

$rrr=mysqli_query($conn,$query);

$uu=mysqli_fetch_all($rrr,MYSQLI_ASSOC);

echo json_encode($uu);

?>