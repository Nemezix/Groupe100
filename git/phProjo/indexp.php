<?php
#starting & setting session
session_start();

#setting CONSTANTS
define('VIEWS','views/');
define('CONTROLLERS', 'controllers/');

#autloading CLASS
function chargerClasse($classe){
	require_once('models/'.$classe.'class.php');
}
spl_autoload_register('chargerClasse');

#require HEADER
require_once(VIEWS.'header.php');

#switch on ACTION to get INSTANCE of CONTROLLERS
$action = (isset($_GET['action'])) ? htmlentities($_GET['action']) : 'default'; 
switch($action){
	#managing users before going into HUB
	case 'home' :
		require_once(CONTROLLERS.'HomeController.php');
		$controller = new homeController();
	break;

	case 'register' :
		require_once(CONTROLLERS.'RegisterController.php');
		$controller = new registerController();
	break;
	
	case 'login' :
		require_once(CONTROLLERS.'LoginController.php');
		$controller = new loginController();
	break;

	case 'logout' :
		require_once(CONTROLLERS.'LogoutController.php');
		$controller = new LogoutController();
	break;	
	#HUB access and contents
	case 'hub' : 
		require_once(CONTROLLERS.'HubController.php');
		$controller = new hubController();
	break;
	
	case 'profil' :
		require_once(CONTROLLERS.'ProfilController.php');
		$controller = new profilController();
	break;

	case 'training' :
		require_once(CONTROLLERS.'TrainingController.php');
		$controller = new trainingController();
	break;
	
	case 'events' :
		require_once(CONTROLLERS.'EventsController.php');
		$controller = new eventsController();
	break;

	case 'members' :
		require_once(CONTROLLERS.'MembersController.php');
		$controller = new membersController();
	break;
	#default step
	default : 
		require_once(CONTROLLERS.'HomeController.php');
		$controller = new homeController();
	break;
}

#function RUN on CONTROLLER
$controller->run();

#require FOOTER
require_once(VIEWS.'footer.php');

?>