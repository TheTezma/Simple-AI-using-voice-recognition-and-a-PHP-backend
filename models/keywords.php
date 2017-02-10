<?php
session_start();
date_default_timezone_set($_COOKIE['timezone']);

$Commands = array("what" => ['time is it']);

$Results = array("time is it" => date('h:i:s A'));
?>