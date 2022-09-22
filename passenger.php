<?php 

if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

if(isset($_SESSION['accomodation'])){
?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Medallion</title>

		<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet"  href="assets/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css"> -->

	</head>
<body style="background-color: #90DCD0;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="accomodation.php">Back</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">
      	<a href="#">Passanger_INFO
      
      	</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"></span> Back To Home</a></li>
    </ul>
  </div>
</nav>


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
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">3. PASSENGER INFO
							
								</h3>
							</div>
							<div class="panel-body">
								PASSENGER DETAILS
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>

<div class="container-fluid">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Message!</strong> Please Check your passenger information Twice.
			You cannot change your reservation once you proceed. 
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>PASSENGER INFO</center>
			 </h2>
				<div class="container-fluid">
					<form class="form-horizontal" role="form" id="form-pass">

					  <input type="hidden" id="totalpass" value="<?=(isset($_GET['totalpass']) ?  $_GET['totalpass'] : '' )?>"/>
					  <input type="hidden" id="acc" value="<?=(isset($_GET['acc']) ?  $_GET['acc'] : '' )?>"/>
						
					  <div class="form-group">
					    <label for="">Booked By:</label>
					    <input type="text" class="form-control" id="book-by" placeholder="Enter Name"
					    autofocus="" required="" autocomplete="off">
					  </div>
					  <div class="form-group">
					    <label for="">Contact:</label>
					    <input type="number" class="form-control" min="1" id="cont" placeholder="Enter Contact" required="" autocomplete="off">
					  </div>
					  <div class="form-group">
					    <label for="">Address:</label>
					    <input type="text" class="form-control" id="address" placeholder="Enter Address" required="" autocomplete="off">
					  </div>
					  <div class="form-group">
					    <label for="">Email:</label>
					    <input type="email" class="form-control" id="address" placeholder="Enter Email" required="" autocomplete="off">
					  </div>
					<br />
					<?php 
						$tb = $_SESSION['totalPass'];	
						
					 	$count = 1;
					 	for($i = 0; $i < $tb; $i++){
					?>
					  <div class="panel panel-primary">
					  	<div class="panel-heading">
					  		<h3 class="panel-title">Booked(<?= $count; ?>)</h3>
					  	</div>
					  	<div class="panel-body">
					  		<div class="container-fluid">
					  			<div class="form-group">
								    <label for="">Full Name (<?= $tb; ?>):</label>
								    <input type="text" class="form-control" id="fN<?php echo $i; ?>"
								    placeholder="Enter Fullname" required autocomplete="off">
								  </div>

								  <div class="form-group">
								    <label for="">Age: (<?= $count; ?>):</label>
								    <input type="number" min="1" class="form-control" id="age<?php echo $i; ?>"
								    placeholder="Enter Age" >
								  </div>
								  <div class="form-group">
								    <label for="">Gender: (<?= $count; ?>):</label>
								    <select class="btn btn-default" id="gender<?php echo $i; ?>">
								    	<option value="Male">Male</option>
								    	<option value="Female">Female</option>
								    </select>
								  </div>
					  		</div>
					  	</div>
					  </div>
					<?php
					$count++;
					 	}//end for
					 ?>
					  <button type="submit" class="btn btn-success">NEXT
					  </span>
					  </button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>

<?php require_once('admin/modal/message.php'); ?>

<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).on('submit', '#form-pass', function(event) {
		event.preventDefault();
		/* Act on the event */
		var bookBy = $('#book-by').val();
		var cont = $('#cont').val();
		var address = $('#address').val();
		var totalpass = $('#totalpass').val();
		var acc       =  $('#acc').val();
	
		var counter = <?= $i; ?>;
		for(var i = 0; i < counter; i++){
			var fN = $('#fN'+i).val();
			var age = $('#age'+i).val();
			var gender = $('#gender'+i).val();
			var flag = false;
			if(i == counter){
				flag = true;
			}
			$dataSet =  {
				bookBy : bookBy,
				cont : cont,
				address : address,
				fN : fN,
				age : age,
				gender : gender
			};
			if(flag){
				$dataSet['totalpass'] = totalpass;
				$dataSet['acc'] = totalpass;
			}
			$.ajax({
					url: 'data/save_booked.php',
					type: 'post',
					dataType: 'json',
					data:$dataSet,
					success: function (data) {
						// console.log(data);
						if(data.valid == true){
							window.location = data.url;	
						}
					},
					error: function(){
						alert('Error: L192+');
					}
				});
		}//end for


		//////////////////////////////////////
		// alert("hey");
		// alert('Booked Successfully!');	
	});

</script>


</body>
</html>

<?php
}else{
	echo '<strong>';
	echo 'Page Not Exist';
	echo '</strong>';
}//end if else isset

 ?>