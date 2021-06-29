<?php
$existdata=array('bjit','weldev','enosis');

if(isset($_POST['suggetion'])){
    $name=$_POST['suggetion'];
    if(!empty($name)){
        foreach($existdata as $exd){
            if(strpos($exd,$name)!==false){
                echo $exd;
                echo '<br>';
            }
        }
    }

}

?>