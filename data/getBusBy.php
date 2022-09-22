<?php 
require_once('../class/Bus.php');

if(isset($_POST['tracker'])){
	$tracker= $_POST['tracker'];

	$busBy = $bus->getBusBy($tracker);
	echo json_encode($busBy);
}

$bus->Disconnect();