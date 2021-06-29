<?php

$conn=mysqli_connect('localhost','root','','ajax_practise');

$query='SELECT * FROM users';

$result=mysqli_query($conn,$query);

$user=mysqli_fetch_all($result,MYSQLI_ASSOC);

echo json_encode($user);

?>