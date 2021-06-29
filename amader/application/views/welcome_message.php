<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>ci_pusher</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
<?php 
$this->load->helper('form');
?>
<div class="spinner-border jadu"  role="status">
  <span class="sr-only">Loading...</span>
</div>
	<a class="mona" href="#">Load More</a>
	<div id="ghira"></div>
	<div id="fhira"></div>
	<div id="ehira"></div>
	<div id="dhira"></div>
	<div id="chira"></div>
	<div id="demo"></div>
	
	<div style="display:hidden" id="rr"></div>
	<form method="post"  id="xin-form" action="<?php echo base_url()?>/welcome/inp">
	<input type="text" class="categories" name="categories"/>
	<input type="submit" />
	</form>
	
	
	<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

	<script type="text/javascript">
	
	$(document).ready(function(){
		function jeno(){
			$.ajax({
				url: '<?php echo base_url("welcome/test"); ?>',
				cache: false,
				type: 'get',
				contentType: false,
				processData: false,
				success: function(data){
					
				}
				
				
			});
		}
		jeno();
		var jila = 0;
		
		jQuery('.mona').click(function(){
			jila= jila+5;
			$.ajax({
			type: "POST",
			dataType: 'json',
			url: '<?php echo base_url("welcome/tanjina"); ?>',
			data: {
							'jib':1,
							'categories':jila,
						},
			cache: false,
			success: function (data) {
				var jula = data
				data = JSON.stringify(data);
				data = JSON.parse(data);

				if(data != ''){
					if(jila == 5){
				data.forEach(myFunction1);
			}
			if(jila == 10){
				data.forEach(myFunction2);
			}
			if(jila == 15){
				data.forEach(myFunction3);
			}
			if(jila == 20){
				data.forEach(myFunction4);
			}
			if(jila == 25){
				data.forEach(myFunction5);
			}
			function myFunction1(item, index) {
			  document.getElementById("chira").innerHTML += item.id + ":" + item.name + "<br>"; 
			  
			}
			function myFunction2(item, index) {
			  document.getElementById("dhira").innerHTML += item.id + ":" + item.name + "<br>"; 
			  
			}
			function myFunction3(item, index) {
			  document.getElementById("ehira").innerHTML += item.id + ":" + item.name + "<br>"; 
			  
			}
			function myFunction4(item, index) {
			  document.getElementById("fhira").innerHTML += item.id + ":" + item.name + "<br>"; 
			  
			}
			function myFunction5(item, index) {
			  document.getElementById("ghira").innerHTML += item.id + ":" + item.name + "<br>"; 
			  
			}
				}
				else{
					jila = jila-5;
					
					
				}
            
				
				
				
			}
		});
			return false;
		});	
		
		

        $("#xin-form").submit(function(e){
			jQuery('.jadu').show();
			var categories = $('.categories').val();
			$.ajax({
			type: "POST",
			cache: false,
			url: '<?php echo base_url("welcome/inp"); ?>',
			data: {
							'jib':1,
							'categories':categories
						},
			cache: false,
			success: function (JSON) {
				jeno();
				jQuery('.jadu').hide();
				
			}
		});
	      return false;
		
	});		
			
		
			
			
			
			
		
		
		
		// Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('110d0cbea269c523cd61', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('amader');
    channel.bind('pusher:subscription_succeeded', function(data) {
      
    });
	channel.bind('activity-updated', function(data) {
	 
jQuery('.jadu').hide();
var nina = jQuery('#demo').html();
if(nina == ''){
	data.forEach(myFunction1);
}
else{
	jQuery('#demo').html('');
	data.forEach(myFunction2);
}	  

function myFunction1(item, index) {
		document.getElementById("demo").innerHTML += item.id + ":" + item.name + "<br>";
		
		jQuery('.categories').val('');
}
function myFunction2(item, index) {
		document.getElementById("demo").innerHTML += item.id + ":" + item.name + "<br>";
		
		jQuery('.categories').val('');
		
}



	  
	  
	  
    });
	
	
	});
	</script>
</body>
</html>