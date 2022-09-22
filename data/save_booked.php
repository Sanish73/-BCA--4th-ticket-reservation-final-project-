<?php
require_once('../database/Database.php');
$db = new Database(); 

if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}


if(isset($_POST['bookBy'])){
	// echo 'yes';
	$bookBy = $_POST['bookBy'];
	$cont = $_POST['cont'];
	$address = $_POST['address'];
	$fN = $_POST['fN'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];


	$origin = $_SESSION['origin'];
	$dest = $_SESSION['destination'];
	$deptDate = $_SESSION['departure_date'];
	$acc = $_SESSION['accomodation'];

	$tracker = $_SESSION['tracker'];



	$sql = "INSERT INTO booked (book_by, book_contact, book_address, book_name, book_age, book_gender,
			 book_departure, dest_id, acc_id, origin_id, book_tracker)
			 VALUES(?,?,?,?,?,?,?,?,?,?,?);
	";

$result = $db->insertRow($sql, [$bookBy, $cont, $address, $fN, $age, $gender, $deptDate, $dest, $acc, $origin, $tracker]);

$return['valid'] = true;
$return['url'] = "payment.php";

if(isset($_POST['totalpass']) && isset($_POST['acc'])){
	include('../database/Connection2.php');

	$totalpass =  $_POST['totalpass'];
	$acc       =  $_POST['acc'];

	$sql = "UPDATE accomodation SET acc_slot = acc_slot - $totalpass WHERE acc_id = $acc"; 
	$qry = mysqli_query($conn, $sql) or die ("wrong ");

}	

echo json_encode($return);

}//if isset

					// bookBy : bookBy,
					// 	email : email,
					// 	address : address,
					// 	fN : fN,
					// 	age : age 

$db->Disconnect();
 ?>

