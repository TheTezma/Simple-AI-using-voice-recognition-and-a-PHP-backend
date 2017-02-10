<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript" src="index.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/SpeechKITT/0.3.0/speechkitt.min.js"></script>
<script>
if (annyang) {
  // Let's define a command.
  var commands = {

    'what time is it': function() { 
    	window.location.href = "?controller=question&action=ask&query=what+time+is+it"; 
    },

    'what do i have on today': function() {
    	window.location.href = "?controller=question&action=ask&query=what+do+i+have+on+today";
    },

    'when do i have soccer': function() {
    	window.location.href = "?controller=question&action=ask&query=when+do+i+have+soccer";
    }

  };

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening.
  annyang.start();
}
</script>
</head>
<body>

<?php require_once 'routes.php'; ?>

</body>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js">
</script>
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
	    })

	    var speech = $("#timeofday").html();
	    speak();
  	});
</script>
</html>