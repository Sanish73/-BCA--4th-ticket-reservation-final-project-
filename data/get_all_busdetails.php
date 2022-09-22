<?php
require_once('../class/Bus.php');
$bus = $bus->getAllAccomodation();

// echo '<pre>';
// 	print_r($books);
// echo '</pre>';
?>

<table id="myTable-book" class="table table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Acc ID</th>
			<th>Names</th>
			<th>Price</th>
			<th>Total Slotes</th>
			<!-- <th>Departure Date</th> -->
			<th>
				<center>Action</center>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($bus as $b) : ?>
			<tr>
				<td><?= $b['acc_id']; ?></td>
				<td><?= ucwords($b['acc_type']); ?></td>
				<td><?= $b['acc_price']; ?></td>
				<td><?= $b['acc_slot']; ?></td>
				<!-- <td><?= $b['book_departure']; ?></td> -->
				<td>
					<center>
					<button type="button"  onclick="editBus('<?= $b['acc_id']; ?>')" class="btn btn-danger btn-xs">Edit
					</button></a>
						&nbsp;
						<button type="button" onclick="delBus('<?= $b['acc_id']; ?>')" class="btn btn-success btn-xs">Remove

						</button>
					</center>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>


<!-- for the datatable of employee -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable-book').DataTable();
	});
</script>
<!-- to show next -->