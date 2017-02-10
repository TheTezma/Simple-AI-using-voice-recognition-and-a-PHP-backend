<?php
session_start();
date_default_timezone_set($_COOKIE['timezone']);

$DailySchedule = "";

function DailySchedule($Day) {
	switch ($Day) {
		case 'Monday':
			echo $Day." PE and Music";
			break;
												 	
		case 'Tuesday':
			echo $Day." Nothing";
			break;

		case 'Wednesday':
			echo $Day." Science";
			break;

		case 'Thursday':
			echo $Day." Soccer at 5pm";
			break;

		case 'Friday':
			echo $Day." Science and Library";
			break;

		case 'Saturday':
			echo "It's the weekend, you have no plans!";
			break;

		case 'Sunday':
			echo "It's the weekend, you have no plans!";
			break;

		default:
			# code...
			break;
	};
}

function TimeOfDay() {
	echo "<span id='timeofday'>The time is: " . date('h:i:s A')."</span>";
}

function SoccerSchedule() {
	echo "Soccer is on Thursday at 5pm";
}
?>