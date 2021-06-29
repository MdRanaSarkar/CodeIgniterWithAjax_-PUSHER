<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>datas</title>
  </head>
  <body>
     <div class="container" style="padding-top:10px;">
	 <div class="row">
	 <div class="col-md-12">
	 <?php
	 $success=$this->session->userdata('success');
	 if($success!=""){
		?>
		<div class="alert alert-success"><?php echo $success?></div>
	 <?php
	 } ?>
	 <?php
	 $failure=$this->session->userdata('failure');
	 if($failure!=""){
		?>
		<div class="alert alert-danger"><?php echo $failure?></div>
	 <?php
	 } ?>



	 
	 </div>
	 </div>
	 	<h3><a href="<?php echo base_url();?>mailbox">Send Me Mail</a></h3>
		 <h1>View User</h1> 
		 <div class="row">
		 	<div class="col-md-12">
			 <table class="table table-striped">
			 	<thead>
			 	 <tr>
					<th>Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Action</th>
					</tr>
				</thead>
					<tbody id="studentd">
					<div></div>
					<?php if(!empty($users)){ foreach($users as $user){?>
					<tr>
					<td>
					   <?php echo $user['id'] ?>
					</td>
					<td>
					   <?php echo $user['Name'] ?>
					</td>
					<td>
					   <?php echo $user['Gmail'] ?>
					</td>
					<td><a href="<?php echo base_url().'delete/'.$user['id']?>">Delete</a>|<a href="<?php echo base_url().'update/'.$user['id']?>">Update</a></td>
					</tr>
					<?php }} else{ ?>
					<tr>
					<td><?php echo "records not found";?> </td>
					</tr>
					<?php }?>
					
					</tbody>
					
			 </table>
			 </div>
		 </div>
	 </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
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
		alert(JSON.stringify(data));
		$("#studentd").append('<tr><td>'+data.id+'</td><td>'+data.Name+'</td><td>'+data.Gmail+'</td></tr>');
    });
  </script>
  </body>
</html>
