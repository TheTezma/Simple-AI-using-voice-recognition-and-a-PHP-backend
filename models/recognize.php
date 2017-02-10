<?php
require_once 'keywords.php';

$myString = " " . $_GET['query'];

$strArray = explode(' ',$myString);
$definingVariable = $strArray[1];
$secondaryVariable = $strArray[2];
$thirdVariable = $strArray[3];
$fourthVariable = $strArray[4];

$SearchString = $secondaryVariable." ".$thirdVariable." ".$fourthVariable;

switch ($definingVariable) {
	case 'what':
		echo "you asked what ".$SearchString;
		if(in_array($SearchString, $Commands['what'])) {
			echo "<br>	the result is: ".$Results[$SearchString];
			?>
			<script>
				
			</script>
    		<?php
		}
		break;

	case 'who':
		echo "you asked who";
		break;

	case 'when':
		echo "you asked when";
		break;
	
	default:
		# code...
		break;
}
?>