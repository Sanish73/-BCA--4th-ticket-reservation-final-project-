<?php 

if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

if(isset($_SESSION['departure_date'])){
	include_once('database/Connection2.php');
	
?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Accomodation</title>

		<!-- Bootstrap CSS -->
		
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet"  href="assets/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css"> -->




	</head>
<body style="background-color: lightblue;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="reserved.php">Back</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">
      	<a href="#">Accomodation
      
      	</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"></span> Back To Home</a></li>
    </ul>
  </div>
</nav>


<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->


<div class="container-fluid">
	<div class="col-md-4"></div>
	<div class="col-md-3">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">STEPS FOR BOOKING</h3>
			</div>
			<div class="panel-body">
				<div class="row">






					<div class="col-md-10">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">2. ACCOMODATION
								<!-- <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> -->
								</h3>
							</div>
							<div class="panel-body">
								ACCOMODATION TYPE
							</div>
						</div>
					</div>
				


				</div>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->



<div class="container-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>ACCOMODATION</center>
			 </h2>
				<div class="container-fluid">
					<form  method="POST" class="form-horizontal" role="form" id="form-acc" >
					  <table id="myTable-party" class="table table-bordered table-hover" cellspacing="0" width="100%">
							<thead>
							    <tr>
							        <th> <span class="glyphicon glyphicon-record" aria-hidden="true"></span> 
							        Accomodation
							        </th>
							        <th>
							        	<center>
							        		Slots
							        	</center>
						        	</th>
							        <th>
							        	<center>
							        		Fare
							        	</center>
						        	</th>
							    </tr>
							</thead>
						    <tbody>
						   		<?php require_once('data/get_all_accomodations.php'); ?>
						   		<tr>
						   			<td>
						   				<input value="<?= $getSit['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getSit['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?php
										$show =  $getSit['acc_slot'] - $totalSit['sit'];
										 echo $show;
										 ?>
										
						   			</td>
									   <!-- <input type="hidden" name="totalslots" value="<?php //echo $show ?>" id="totalslot"> -->
						   			<td align="center"><?= $getSit['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getEcoA['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getEcoA['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?php
										$show = $getEcoA['acc_slot'] - $totalEcoA['ecoA'];
										echo $show; ?>
									
						   			</td>
									   <!-- <input type="hidden" name="totalslots" value="<?php //echo $show ?>" id="totalslot"> -->
						   			<td align="center"><?= $getEcoA['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getEcoB['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getEcoB['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?php
										$show =  $getEcoB['acc_slot'] - $totalEcoB['ecoB'];
										echo $show;
										  ?>
																				 
						   			</td>
									   <!-- <input type="hidden" name="totalslots" value="<?php //echo $show ?>" id="totalslot"> -->
						   			<td align="center"><?= $getEcoB['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getTour['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getTour['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?php
										 $show = $getTour['acc_slot'] - $totalTour['ecoT']; 
										 echo $show; ?>
										
										
						   			</td>
									   <!-- <input type="hidden" name="totalslots" value="<?php //echo $show ?>" id="totalslot"> -->
						   			<td align="center"><?= $getTour['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getCab['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getCab['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?php $show = $getCab['acc_slot'] - $totalCab['ecoC'];
										echo $show; ?>
										
						   				
									
						   			</td>
									   <!-- <input type="hidden" name="totalslots" value="<?php //echo $show ?>" id="totalslot"> -->
						   			<td align="center"><?= $getCab['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getDel['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getDel['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?php 
										$show = $getDel['acc_slot'] - $totalDel['ecoD'];
										echo $show;
										 ?>
									
						   			</td>
									   <!-- <input type="hidden" name="totalslots" value="<?php //echo $show ?>" id="totalslot"> -->
						   			<td align="center"><?= $getDel['acc_price']; ?></td>
						   		</tr>
						    </tbody>
					    </table>
				      <div class="form-group">
					    <label for="">Total Passenger:</label>
					    <input type="number" name="totalPass"  min="1" class="form-control" plactreholder="Total # of Passenger" autocomplete="off">
					  </div>
				
					  <button type="submit" name="submit" 

					  class="btn btn-success">NEXT </button>
					 <!-- <input link type="submit" name="submit" class="btn btn-success" value="NEXT" > -->
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>

<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


<script type="text/javascript">
	$(document).on('submit', '#form-acc', function(event) {
		event.preventDefault();
		/* Act on the event */
		var acc = $('input[name="acc"]:checked').val();
		var totalPass = $('input[name="totalPass"]').val();
		var totalslots = $('input[name="totalslots"]').val();
		// var totalslot = $('#totalslot').val();
		var one = $('input[name="1"]').val();
		var two = $('input[name="2"]').val();
		var three = $('input[name="3"]').val();
		var four = $('input[name="4"]').val();
		var five = $('input[name="5"]').val();
		var six = $('input[name="6"]').val();

	// alert(totalPass);
		
	
		
		if(acc == null){
			alert('Please Select Accomodation!');
		}
		// else if{
		// 		alert('Slots are Full');
		// }
		else{
			// console.log(acc);
			if(totalPass.length == 0){
				alert('Please Enter Number of Passenger!');
			}else{
				
				$.ajax({
						url: 'data/session_accomodation.php',
						type: 'post',
						dataType: 'json',
						data: {
							acc : acc,
							tp : totalPass
						},
						success: function (data) {
							
							// window.location = "first.php?totalpass="+totalPass+"&acc="+acc;
							// window.location = "passenger.php?totalpass="+totalPass+"&acc="+acc;
							// console.log(data.slot);
								window.location = "passenger.php";
							if(data.slot >= 0){

								if(acc ==1){//sitting ko 
								// alert(data.slot);




						

								}







								// window.location = "passenger.php";
							}else{
								alert('Not Enough Slot!');
							}
						},
						error: function(){
							alert('Error: L175+');
						}
					});
			}//end totalPass
		}//end acc == null





	});

</script>

</body>
</html>


<?php
}else{
	// echo '<strong>';
	// echo 'Page Not Exist';
	// echo '</strong>';
}//end if else isset

 ?>

<?php
// if(isset($_POST['submit'])){
	// $totalpass = $_POST['totalPass'];
	// $acc = $_POST['acc'];

	// echo ("ji");
	
	echo ("<script>document.writeln(acc);</script>");
// }
?>