<?
require_once 'src/Mustache/Autoloader.php';
Mustache_Autoloader::register();
$Mustache = new Mustache_Engine;
?>
<!DOCTYPE html>
<html>
<head>
	<title>AI</title>
<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/SpeechKITT/0.3.0/speechkitt.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="index.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="Absolute-Center">
<?php
require_once 'routes.php'; 
$Mustache->render('{{ test }}', array("test" => "w"));
?>
</div>

<span id="result" style="display:none"></span>
<span id="pagedisplay"></span>

</body>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.4/jstz.min.js">
</script>
<script>
	$(document).ready(function(){
	    var tz = jstz.determine(); // Determines the time zone of the browser client
	    var timezone = tz.name(); //'Asia/Kolhata' for Indian Time.
	    $.ajax({
	    	url: '/AI/?controller=ai&action=timezone',
	    	type: 'POST',
	    	data: "timezone=" + timezone,
	    	success: function(data) {
	    		console.log(timezone);
	    	}
	    });

      speak($("#result").html());

      $("#result").fadeIn(1500);

    });
</script>
</html>