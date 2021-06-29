<?php
include('vendor/autoload.php');

$name=$_POST['studentname'];
$email=$_POST['studentemail'];

$app_id = '1176358';
$app_key = 'f525a0d28bf2153e4083';
$app_secret = 'd0bd08cc2c027873521e';
$app_cluster = 'ap2';

$pusher = new Pusher\Pusher( $app_key, $app_secret, $app_id, array('cluster' => $app_cluster) );
$data['message']=array(
    'name'=>$name,
    'email'=>$email

);
$pusher->trigger( 'PHP_Pusher', 'student_add', $data);
echo "data added successfully";
?>