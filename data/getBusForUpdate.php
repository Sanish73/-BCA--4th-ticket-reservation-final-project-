<?php
require_once('../class/Bus.php');









if (isset($_POST['tracker'])) {
	$tracker = $_POST['tracker'];

	$list = $bus->getPassengers($tracker);
	// echo '<pre>';
	// 	print_r($list);
	// echo '</pre>';

?>
<form action="" method="POST">
	<table id="Bus-list" class="table table-bordered table-hover" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Name</th>
				<th>
					<center>Price</center>
				</th>
				<th>
					<center>Total Slots</center>
				</th>
	

			</tr>
		</thead>
		<tbody>

			
				<?php
				$i = 0;
				$total = 0;
				foreach ($list as $l) :
					$total += $l['acc_price'];
				?>
					<tr>
					<input type="hidden" value="<?= $l['acc_id']; ?>" id="name<?= $i; ?>" name="acc_ID">
						<td>

							<input type="" value="<?= $l['acc_type']; ?>" id="name<?= $i; ?>" name="type">
						</td>

						<td>
							<input type="" value="<?= $l['acc_price']; ?>" id="name<?= $i; ?>" name="price">
						</td>

						<td>
							<input type="text" value="<?= $l['acc_slot']; ?>" id="name<?= $i; ?>" name="slot">
						</td>


					</tr>
					<td>

					<td>

					
					</td>
					<td>

						<input type="submit" value="Submit" id="submit" name="submitupdate">
					</td>
					<tr>

		

			<?php $i++; ?>
		<?php endforeach; ?>
	
		</tbody>
	</table>
	</form>
</html>

<?php
} //end isset
$bus->Disconnect();
?>