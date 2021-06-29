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
                <h1 class="text-center">Codeigniter  Crud Tutorial</h1>
                <hr style="background-color: black; color: black; height: 1px;">
            </div>
        </div>
		 <form action="<?php echo base_url()?>create" method="POST" name="createUser">
		 <input type="hidden" value="" class="input" name="id" placeholder="Enter your name">
		 <div class="col-md-12 mb-3 row">
			<label for="inputPassword" name="Name" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-8">
				<input type="text" name="name" class="form-control" id="inputPassword">
				<?php echo form_error('name'); ?>
			</div>
  	</div>
		 <div class=" col-md-12 mb-3 row">
		 
			<label for="staticEmail" name="Email" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-8">
				<input type="email" name="email" class="form-control" id="staticEmail" >
				<?php echo form_error('email'); ?>
			</div>
  </div>
	<div class="col-sm-10">
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary" id="add">Add</button>
		</div>
	</div>
	</form>
	 </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>



