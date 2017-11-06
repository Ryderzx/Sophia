 <?php
if ($_POST) {
require ('core/core.php');

	switch (isset($_GET['mode']) ? $_GET['mode']: null) {
		case 'login':
			require ('core/bin/ajax/goLogin.php');
			break;
		case 'close':
			session_destroy();
			echo 1;
			break;	
		
		default: 
	
			echo "<script type='text/javascript'> window.location.href('index.php');</script>";
			break;
	}
}else{
	header('location:index.php');
}
 
 ?>