<?php
	require('core/core.php');

	if (isset($_GET['view'])) {
		if (file_exists('core/controllers/'.strtolower($_GET['view']).'/controller.php')) {
			include('core/controllers/'.strtolower($_GET['view']).'/controller.php');
		}else{
			include('core/controllers/errorcontroller.php');
		}
	}else{
		include('core/controllers/indexcontroller.php');
}
?> 