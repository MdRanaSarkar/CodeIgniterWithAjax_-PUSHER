<?php
require_once "conn.php";
$sql ="SELECT * FROM crud ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows >0) {
           
    while($row = $result->fetch_assoc()) {
      ?>
      <tr>
      <td><?php echo $row["Name"] ?> </td>
      <td><?php echo $row["Gmail"] ?> </td>
      </tr>
   <?php
    }
  } else {
    echo "no data fetching , 0 results";
  }
?>