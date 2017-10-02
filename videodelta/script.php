<?php /*script*/ ?>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/jquery-1.11.3.js"></script>
		<script src="js/jquery.lazyload.js"></script>
		
		
		<script>
			$(document).ready(function(){
				
				$("img.lazy").lazyload({
					effect : "fadeIn",
					effect_speed:1000
				});
				
				$("#button3").click(function(){
        			$("#demo3").fadeToggle("slow");
    			});
				$("#button1").click(function(){
        			$("#demo1").toggle("slow");
    			});
    			$('[data-toggle="tooltip"]').tooltip();
    			
    			
    		});
		</script>
