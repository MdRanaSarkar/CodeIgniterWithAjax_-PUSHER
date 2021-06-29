<?php
include 'dbc.php';
?>
<?php
            $faqa=$_POST['faqa'];
            $sql="SELECT * FROM faq LIMIT $faqa";
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