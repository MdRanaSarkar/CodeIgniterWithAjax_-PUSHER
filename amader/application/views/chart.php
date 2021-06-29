<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
<script type="text/javascript">

jQuery(document).ready(function(){
	function jeno(){
			$.ajax({
				url: '<?php echo base_url("welcome/test"); ?>',
				type: 'get',
				contentType: false,
				processData: false,
				
				
			});
		}
		jeno();
	Pusher.logToConsole = true;

    var pusher = new Pusher('110d0cbea269c523cd61', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('amader');
    channel.bind('pusher:subscription_succeeded', function(data) {
      
    });
	channel.bind('chart-data', function(data) {
		
	 	var chart = new CanvasJS.Chart("chartContainer", {
	theme: "dark1", // "light2", "dark1", "dark2"
	animationEnabled: false, // change to true		
	title:{
		text: "Basic Column Chart"
	},
	data: [
	{
		// Change type to "bar", "area", "spline", "pie",etc.
		type: "column",
		dataPoints: [
			{ label: "database value",  y: data  },
			{ label: "pusher value",  y: 12  },
			{ label: "minara value",  y: 21  },
			
		]
	}
	]
});
chart.render();
});
});




</script>
</body>
</html>