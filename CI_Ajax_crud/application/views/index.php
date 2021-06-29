<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  		

  <div class="row">
            <div class="col-md-12 mt-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                    data-target="#exampleModal">
                    Add Records
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="usesrform" action= "">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="username" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Message</label>
                                        <textarea name="messagetext" class="form-control" id="messages" cols="50" rows="10"></textarea>
                                    </div>
									<div class="form-group">
                                        <label for="">age</label>
                                        <input type="number" name="age" class="form-control" id="age">
                                    </div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary" >Add</button>
                        			</div>
                                </form>
								
                            </div>
							
							
                          
                        </div>
                    </div>
                </div>

                <!-- Edit Modal -->
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" id="update_form">
                                    <input type="hidden" id="edit_modal_id">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" id="edit_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" id="edit_email">
                                    </div>
									<div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="update">Update</button>
                           		 </div>
                                </form>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

  <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">Codeigniter Ajax Crud Tutorial</h1>
                <hr style="background-color: black; color: black; height: 1px;">
            </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">SL no.</th>
      <th scope="col">Name</th>
      <th scope="col">Message</th>
      <th scope="col">Age</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

	<script type="text/javascript">

	$('#usesrform').submit(function(event){
		event.preventDefault();
		var name=$('#name').val();
		var msg=$('#messages').val();
		var age=$('#age').val();
		$.ajax({
			url:"<?php echo base_url('my_controller/create'); ?>",
			data: {
				'name':name,
				'msg':msg,
				'age':age
			},
			type:'POST',
			async:false,
			contentType: "application/json; charset=utf-8",
			dataType:'json',
			success:function(data){
				alert('data successfully saved');
			},
			error:function(){
					alert('Upset you are wrong!');
					console.log(data);
			}
		});

	});
	</script>
  </body>
</html>
