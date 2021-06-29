<?php

require_once "conn.php";
require __DIR__ . '/vendor/autoload.php';
if($_SERVER['REQUEST_METHOD']=='POST'){

  $options = array(
    'cluster' => 'ap2',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    'dafd7b56816a9c95f6e2',
    'd64ab2399a649c0d3120',
    '1176840',
    $options
  );


$Name=$_POST['Name'];
$Email=$_POST['Email'];


$sql = "INSERT INTO crud (Name, Gmail) VALUES ('$Name', '$Email')";

if ($conn->query($sql) === TRUE) {
  $data['message'] = $Name.' '.$Email;
  $pusher->trigger('my-channel', 'my-event', $data);
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
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
		 <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">Pusher Testing form</h1>
                <hr style="background-color: black; color: black; height: 1px;">
            </div>
        </div>
		 <form action="" method="POST" name="createUser">
		 <div class="col-md-12 mb-3 row">
			<label for="inputPassword" name="Name" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-8">
				<input type="text" name="Name" class="form-control" id="inputPassword">
				
			</div>
  	</div>
		 <div class=" col-md-12 mb-3 row">
		 
			<label for="staticEmail" name="Email" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-8">
				<input type="text" name="Email" class="form-control" id="staticEmail" >
			
			</div>
  </div>
	<div class="col-sm-10">
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary" id="add">Add</button>
		</div>
	</div>
	</form>
	 </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>