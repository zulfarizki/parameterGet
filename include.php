<?php
$page = (isset($_GET['page']))? $_GET['page'] : '';

switch ($page) {
	case 'home':
		include 'indextext.php';
		break;
		
	case 'tentang':
		include 'tentang.php';
		break;
		
	case 'hubungi':
		include 'hubungi.php';
		break;
	
	default:
		include 'indextext.php';
		break;
}
?>