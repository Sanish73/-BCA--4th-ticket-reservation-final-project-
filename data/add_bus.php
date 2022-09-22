<div class="modal fade" id="modal-view-pass-bus">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Insert New Data</h4>
			</div>
			<div class="modal-body">
			<center>
				<strong>hames: </strong><span id="acc_type"></span> <br />
				<strong>Price: </strong><span id="acc_price"></span> <br />
				<strong>Total Slots: </strong><span id="acc_slot"></span> <br />
				<!-- <strong>Address: </strong><span id="address"></span><br /> -->
			</center>
				<br />
				<div id="Bus-list">
					<!-- ////////////////////getBusForUpdate.php//////////// -->
					
				</div>
			</div>
			<!-- <div class="modal-footer">
				<button type="button" onclick="acceptPayment();" class="btn btn-primary accept-pay">Save
				</button>

				<button type="button" onclick="addTransaction();" class="btn btn-success accept-pay">Cancel
				</button>
			</div> -->
		</div>
	</div>
</div>


<script>
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
	</script>