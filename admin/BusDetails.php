<?php 
require_once('session_login.php');

// if (isset($_POST['submitupdate'])) {
// 	$name = $_POST['type'];

// 	echo $name;
// 	die;
// }

if(isset($_POST["submitupdate"])){

    $get_ID = $_POST["acc_ID"];
	$acc_SLOT = $_POST["slot"];
	$acc_PRICE = $_POST["price"];
	$name = $_POST['type'];



	include_once("../database/Connection2.php");
	$sql = "UPDATE accomodation SET acc_slot= $acc_SLOT , acc_price = $acc_PRICE , acc_type = '$name' where acc_id=$get_ID";
	

	$qry = mysqli_query($conn, $sql);

	if($qry){
		
	}
	

    // $sql = "DELETE FROM users WHERE id= $deleted";

    // include_once("connection.php");

    // $qry = mysqli_query($conn, $sql) or die(" not deleted");


    // if($qry){
        
    //     echo "location:../users.php?msg=record deleted";
    //     header ("location:../users.php");
        
    // }
}


 ?>

 <!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Admin Panel </title>

		<!-- Bootstrap CSS -->
   	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.min.css">

     <!-- Custom CSS -->
    <link href="../assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

	</head>
<body>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<a class="navbar-brand" href="index.php">Back</a>
		<ul class="nav navbar-nav">
			<li ><a href="reservation.php">Reserved
			</a></li>
			
			<li class=""><a href="transaction.php">Transaction
			</a></li>

			<li class="active"><a href="BusDetails.php">Bus Details
			</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
	      <li><a href="../admin/logout.php"><span class=""></span> Logout</a></li>
	    </ul>
		
	</div>
</nav>
<br />
<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div id="book-table">
		<!-- //////////////////////////////get_all_busdetails.php[h[//////////////	 -->
		</div>
	</div>
	<div class="col-md-1"></div>
</div>



<?php require_once('modal/view_bus.php'); ?>
<?php require_once('modal/message.php'); ?>
<?php require_once('modal/confirmation.php'); ?>

<script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../assets/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
	function showAllBook(){
		$.ajax({
				url: '../data/get_all_busdetails.php',
				type: 'post',
				// data: {},
				success: function (data) {
					// console.log(data);
					$('#book-table').html(data);
				},
				error: function(){
					alert('Error: L54+');
				}
			});
	}//end showAllBook
	showAllBook();

/////////////////////////////////////////////////////////////////////////////////////////////

	function displayPassenger(tracker){
		// console.log(tracker);
		$.ajax({
				url: '../data/getBusForUpdate.php',
				type: 'post',
				// dataType: 'json',
				data: {
					tracker : tracker	
				},
				success: function (data) {
					// console.log(data);
					$('#Bus-list').html(data);////////////getBusForUpdate.php
					// alert("hello sanish displaypassanger wala");
				},
				error: function(){
					alert('Error: display passenge walaL113+');
				}
			});
	}//end displayPassenger

	
	
	function editBus(tracker){
		$.ajax({
				url: '../data/getBusBy.php',
				type: 'post',
				dataType: 'json',
				data: {
					tracker : tracker	
				},
				success: function (data) {
					// console.log(data);
					$('#acc_type').text(data.acc_type);
					$('#acc_price').text(data.acc_price);
					$('#acc_slot').text(data.acc_slot);
					// $('#address').text(data.book_address);
					$('#modal-view-pass-bus').modal('show');
				
				},
				error: function(){
					alert('Error: L113+ edit bus wala');
				
				}
			});
		displayPassenger(tracker);
	}

	function acceptPayment(){
		var counter = $('#i').val();
		var tot = 0;
		for(var i = 0; i < counter; i++){
			var name = $('#name'+i).val();
			var disc = $('#disc'+i).val();
			var price = $('#price'+i).val();
			var discounted = price * disc;
			$('#pri'+i).text(discounted);
			tot += Number(discounted);
	
		}
		$('#total').text(tot);

	}
	
	

</script>

</body>
</html>