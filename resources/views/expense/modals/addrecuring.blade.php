<style>

 .leaveStyle{
	position : relative;
	left : 10px;
	margin-bottom : 12px;
 }

 #message {
   position :relative;
   font-size : 20px;
 }
.redborder{border:1px solid red;}
#loader-ajax2 {
		display:    none;
		position:   fixed;
		z-index:    1000;
		top:        0;
		left:       0;
		height:     100%;
		width:      100%;
		background: rgba( 255, 255, 255, .8 ) 
					url('http://zaradevelopment.com/els/assets/images/loading_bar.gif') 
					50% 50% 
					no-repeat;
	}
</style>
<div id="addexpense" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Expense</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form action="{{ URL::to('/submitrecuringexpense')}}" id="submitexpense" method="POST"  enctype="multipart/form-data">
			{{ csrf_field() }}
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Title<span class="text-danger"></span></label>
								<input class="form-control" name="expense_title" type="text" required>
							</div> 
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Amount<span class="text-danger"></span></label>
								<input class="form-control" name="expense_amount" type="number" required>
							</div> 
						</div>
					</div>
					<div class="row">
			        	<div class="col-md-6">
			        		<label for="attyear">Select Year</label>
			        		<select id="expenseyear" name="expenseyear"   class="form-control" required >
								<option value="" disabled="">Select Year</option>
								<option value="2021">2021</option>
								<option selected value="2022">2022</option>
								<option value="2023">2023</option>
								<option value="2024">2024</option>
								<option value="2025">2025</option>
								<option value="2026">2026</option>
								<option value="2027">2027</option>
								<option value="2028">2028</option>
								<option value="2029">2029</option>
								<option value="2030">2030</option>
							</select>
			        	</div>
			        	<div class="col-md-6">
					        <label for="attmonth">Select Month</label>
					       	<select id="expensemonth" name="expensemonth"   class="form-control" required >
							<option value="" selected="" disabled="">Select</option>
			                <option value="01">January</option>
			                <option value="02">February</option>
			                <option value="03">March</option>
			                <option value="04">April</option>
			                <option value="05">May</option>
			                <option value="06">June</option>
			                <option value="07">July</option>
			                <option value="08">August</option>
			                <option value="09">September</option>
			                <option value="10">October</option>
			                <option value="11">November</option>
			                <option value="12">December</option>
			                </select>
				    	</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Select Expense Type<span class="text-danger"></span></label>
								<select name="expensetype_id" class="form-control" class="form-control selectpicker" data-live-search="true" required>
									<option selected="" value="">Select Expense Type</option>
									@foreach($data as $val)
									<option value="{{$val->expensetype_id}}">{{$val->expensetype_name}}</option>
									@endforeach 
								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Comment<span class="text-danger"></span></label>
								<textarea name="expense_comment" class="form-control" type="text" rows="2"></textarea>
							</div> 
						</div>
					</div>
					<div class="submit-section">
						<button id="btnsubmit" class="btn btn-primary submit-btn">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('select').selectpicker();
	});			
</script>