<?php
require_once "conn.php";
$sql ="SELECT * FROM crud ORDER BY id DESC";
$result = $conn->query($sql);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
<h1>View User</h1> 
		 <div class="row">
		 	<div class="col-md-12">
			 <table class="table table-striped">
       <thead>
			 	 <tr>
				
					<th>Name</th>
					<th>Email</th>
					</tr>
          </thead>
          <tbody id="studentd">
          <?php
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
          </tbody>
			 </table>
			 </div>
		 </div>

         </div>



    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('dafd7b56816a9c95f6e2', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      $.ajax({url: "user.php", success: function(result){
    $("#studentd").html(result);
      }});
      
    });
  </script>
</body>
</html>