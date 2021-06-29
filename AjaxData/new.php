<?php


echo "On process<br>";

$conn=mysqli_connect('localhost','root','','easycse');

if (isset($_POST['name'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    echo 'POST : Your name is'.$_POST['name'];
    $query="INSERT into user(name) VALUES ('$name')";

    if(mysqli_query($conn,$query)){
            echo "User added ...";
    }
    else{
        echo "Error:".mysqli_error($conn);
    }
}





if(isset($_GET['name'])){
    echo "your  name is ".$_GET['name'];
}


?>