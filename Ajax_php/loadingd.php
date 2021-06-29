<?php
include 'dbc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<div id="faqdata">
    <?php

            $sql="SELECT * FROM faq LIMIT 2";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                  echo '<p>';
                  echo $row['Author'];
                  echo '<br>';
                  echo $row['question'];
                  echo '<br>';
                  echo $row['answer'];
                  echo '</p>';

                }
                
            }
         
    ?>
</div>
<button>Press here</button>
<script>
    $(document).ready(function(){
        var faqa=2;
        $('button').click(function(){
            faqa=faqa+2
            $('#faqdata').load('loadquery.php',{
                faqa:faqa,
            });

        });
    });
</script>

</body>
</html>