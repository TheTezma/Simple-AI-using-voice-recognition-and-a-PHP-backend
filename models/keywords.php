<?php
session_start();
date_default_timezone_set($_COOKIE['timezone']);

$DailySchedule = "";

function DailySchedule($Day) {
	switch ($Day) {
		case 'Monday':
			echo "<span id='result'>PE and Music</span>";
			break;
												 	
		case 'Tuesday':
			echo "<span id='result'>Nothing</span>";
			break;

		case 'Wednesday':
			echo "<span id='result'>Science</span>";
			break;

		case 'Thursday':
			echo "<span id='result'>Soccer at 5pm</span>";
			break;

		case 'Friday':
			echo "<span id='result'>Science and Library</span>";
			break;

		case 'Saturday':
			echo "<span id='result'>It's the weekend, you have no plans!</span>";
			break;

		case 'Sunday':
			echo "<span id='result'>It's the weekend, you have no plans!</span>";
			break;

		default:
			# code...
			break;
	};
}

function TimeOfDay() {
	echo "<span id='result'>".date('h:i A')."</span>";
}

function SoccerSchedule() {
	echo "<span id='result'>Soccer is on Thursday at 5pm</span>";
}
?>