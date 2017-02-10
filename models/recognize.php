<?php
require_once 'keywords.php';

$myString = $_GET['query'];

switch ($myString) {
	case 'what time is it':
		TimeOfDay();
		break;

	case 'what do i have on today':
		DailySchedule(date("l"));
		break;

	case 'when do i have soccer':
		SoccerSchedule();
		break;
	
	default:
		# code...
		break;
}
?>