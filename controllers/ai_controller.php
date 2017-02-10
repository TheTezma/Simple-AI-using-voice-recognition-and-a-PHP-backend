<?php

class AIController {

	public static function timezone() {
		require_once 'models/components.php';
		$AI = new Components();
		$AI->GetTimezone();
	}

}

?>