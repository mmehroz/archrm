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
			<form action="{{ URL::to('/submitexpense')}}" id="submitexpense" method="POST"  enctype="multipart/form-data">
			{{ csrf_field() }}
					<div class="form-group">
						<div class="row">
							<div class="col-lg-12">
								<label class="col-form-label">Type<span class="text-danger"></span></label>
								<select name="expensetype_id" class="form-control selectpicker" data-live-search="true" required>
									<option selected="" value="">Select Expense Type</option>
									@foreach($data as $val)
		                            <option value="{{$val->expensetype_id}}">{{$val->expensetype_name}}</option>
		                        	@endforeach 
		                        </select>
	                    	</div>
	                    </div>
					</div> 
					<div class="form-group">
						<div class="row">
							<div class="col-lg-12">
								<label class="col-form-label">For<span class="text-danger"></span></label>
								<select class="form-control selectpicker" name="expense_for[]"  multiple data-live-search="true" required>
									<option value="All">All</option>
									@foreach($depart as $departs)
		                            <option value="{{$departs->dept_name}}">{{$departs->dept_name}}</option>
		                        	@endforeach 
		                        </select>
	                    	</div>
	                    </div>
					</div> 
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
						<div class="col-lg-6">
							<div class="form-group">
								<label>Month<span class="text-danger"></span></label>
								<input type="text" name="expense_yearandmonth" class="form-control" value="{{$yearandmonth}}" required readonly>
							</div> 
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Day<span class="text-danger"></span></label>
								<select name="expense_day" class="form-control selectpicker" data-live-search="true" required>
								 	<option selected="" value="">Select Day</option>
								    <option value="01">01</option>
								    <option value="02">02</option>
								    <option value="03">03</option>
								    <option value="04">04</option>
								    <option value="05">05</option>
								    <option value="06">06</option>
								    <option value="07">07</option>
								    <option value="08">08</option>
								    <option value="09">09</option>
								    <option value="10">10</option>
								    <option value="11">11</option>
								    <option value="12">12</option>
								    <option value="13">13</option>
								    <option value="14">14</option>
								    <option value="15">15</option>
								    <option value="16">16</option>
								    <option value="17">17</option>
								    <option value="18">18</option>
								    <option value="19">19</option>
								    <option value="20">20</option>
								    <option value="21">21</option>
								    <option value="22">22</option>
								    <option value="23">23</option>
								    <option value="24">24</option>
								    <option value="25">25</option>
								    <option value="26">26</option>
								    <option value="27">27</option>
								    <option value="28">28</option>
								    <option value="29">29</option>
								    <option value="30">30</option>
								    <option value="31">31</option>
								</select>
							</div> 
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
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