<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>ci_pusher</title>
</head>
<body>
<?php 
$this->load->helper('form');
?>
	
	
	<div id="rr"></div>
	
	
	
	<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script type="text/javascript">
	
	$(document).ready(function(){
		function jeno(){
			$.ajax({
				url: '<?php echo base_url("welcome/test"); ?>',
				type: 'get',
				contentType: false,
				processData: false,
				
				
			});
		}
		jeno();
		
		
	
			
			
			
			
			
			
		
		
		
		// Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('110d0cbea269c523cd61', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('amader');
    channel.bind('pusher:subscription_succeeded', function(data) {
      
    });
	channel.bind('count-data', function(data) {
	 jQuery('#rr').html(data);





	  
	  
	  
    });
	
	
	});
	</script>
</body>
</html>