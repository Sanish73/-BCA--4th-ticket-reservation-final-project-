<?php 
require_once('../class/User.php');
if(session_status() == PHP_SESSION_NONE)
{
	session_start();
}


if(isset($_POST['un']) && isset($_POST['pwd']) ){
	$un = $_POST['un'];
	$pwd = $_POST['pwd'];

	// $pwd = ($pwd);

	$result = $user->loginUser($un, $pwd);
	if($result > 0){
		$return['valid'] = true;
		$return['url'] = "reservation.php";
		$_SESSION['logged'] = $result['user_id'];
	}else{
		$return['valid'] = false;
		$return['msg'] = "Invalid Username / Password!";
	}
	echo json_encode($return);
}

$user->Disconnect();