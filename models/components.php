<?php

class Components {

	public function timezone() {
		setcookie("timezone", $_POST['timezone'], time() + (86400 * 30), "/"); // 86400 = 1 day
	}

}

?>