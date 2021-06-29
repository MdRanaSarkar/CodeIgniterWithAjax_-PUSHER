<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:57:00 GMT -->
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Metro Admin Template - Metro UI Style Bootstrap Admin Template</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="frontend/css/bootstrap.min.css" rel="stylesheet">
	<link href="frontend/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="frontend/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="frontend/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="frontend/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="frontend/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="frontend/img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(frontend/img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h2>Give gmail for password change</h2>
					<p>
					<?php
					$msg=$this->session->userdata('msg');
					if($msg){
						echo "<span class='alert alert-success'>$msg </span>";
						$this->session->unset_userdata('msg');
					}
					
					?>
					</p>

					<form class="form-horizontal" action="<?php echo base_url();?>sendmail" method="post">
					
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="username_my" id="useremail" type="email" placeholder="type your Email"/>
							</div>
							<div class="clearfix"></div>
							<div class="input-prepend" title="textdata">
								<span class="add-on"><i class="halflings-icon envelope-open-text"></i></span>
								<textarea name="mymsg" placeholder="enter your mailing messsge" id="" class="input-large span10" cols="30" rows="10"></textarea>
							</div>
							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Send Reset Link</button>
							</div>
							<div class="clearfix"></div>
					</form>
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

		<script src="frontend/js/jquery-1.9.1.min.js"></script>
	<script src="frontend/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="frontend/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="frontend/js/jquery.ui.touch-punch.js"></script>
	
		<script src="frontend/js/modernizr.js"></script>
	
		<script src="frontend/js/bootstrap.min.js"></script>
	
		<script src="frontend/js/jquery.cookie.js"></script>
	
		<script src='frontend/js/fullcalendar.min.js'></script>
	
		<script src='frontend/js/jquery.dataTables.min.js'></script>

		<script src="frontend/js/excanvas.js"></script>
	<script src="frontend/js/jquery.flot.js"></script>
	<script src="frontend/js/jquery.flot.pie.js"></script>
	<script src="frontend/js/jquery.flot.stack.js"></script>
	<script src="frontend/js/jquery.flot.resize.min.js"></script>
	
		<script src="frontend/js/jquery.chosen.min.js"></script>
	
		<script src="frontend/js/jquery.uniform.min.js"></script>
		
		<script src="frontend/js/jquery.cleditor.min.js"></script>
	
		<script src="frontend/js/jquery.noty.js"></script>
	
		<script src="frontend/js/jquery.elfinder.min.js"></script>
	
		<script src="frontend/js/jquery.raty.min.js"></script>
	
		<script src="frontend/js/jquery.iphone.toggle.js"></script>
	
		<script src="frontend/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="frontend/js/jquery.gritter.min.js"></script>
	
		<script src="frontend/js/jquery.imagesloaded.js"></script>
	
		<script src="frontend/js/jquery.masonry.min.js"></script>
	
		<script src="frontend/js/jquery.knob.modified.js"></script>
	
		<script src="frontend/js/jquery.sparkline.min.js"></script>
	
		<script src="frontend/js/counter.js"></script>
	
		<script src="frontend/js/retina.js"></script>

		<script src="frontend/js/custo0m.js"></script>
	<!-- end: JavaScript-->
	
</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:57:01 GMT -->
</html>
