<style>
	.modal-dialog {
    max-width: 800px;
    margin: 1.75rem auto;
}

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
		.modal-content{
			width: 100% !important;
			/*white-space: nowrap;*/
			padding: 2px;
		}
		.modal-body{
			padding: 0px !important;
			overflow-x: auto;
		}
		.submit-section{
			justify-content: center;
			text-align: center;
			margin-top: 8px;
		}
		.submit-section button{
		/* background-color: #D0202E; */
		color: white;
		outline: none;
		/* border: 1px solid #d0202e; */
		width: 150px;
		height: 40px;

		}
		.submit-section button:hover{
			background-color: white;
			color: #d0202e;
			font-weight: 500;
			outline: none;
			border: 1px solid #d0202e;
			
		}
		.order{
			color: black;
			font-weight: 700;
		}
		.modal-title{
			
			color: #D0202E;
			font-weight: 600;
		}
		.modal-header{
			text-align: center;
			justify-content: center;
			margin: 0 auto;
			background:none !important;
		}
		table thead {
			background-color:  #5069e7 !important;
			color: white;
			/*font-size: 11px;*/}

			.table thead th{
				font-size:14px;
			}
			
		
		table{
			/* border: 1px solid #D0202E; */
			white-space: nowrap;
			/*font-size: 10px;*/
		}
		.close {
			position: absolute;
    		top: 0;
    		right: 0px;
			color:red;
		}

		#restaurant{
			margin:0 auto;
		}
</style>
<div id="userorderlist" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">

				<h5 class="modal-title"><span class="order">Order List</span> </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form action="{{ URL::to('/proceedorder')}}" id="editsubmitannou" method="POST"  enctype="multipart/form-data">
			{{ csrf_field() }} 
			<table class="table table-striped custom-table mb-0 datatable dataTable no-footer" id="restaurant">
				<thead>
					<tr>
        				<th>Restaurant Name</th>
						<th>Product Name</th>
						<th>Amount</th>
						<th>Unit</th>
						<th>Quantity</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					@if($ordercount > 0)
					@foreach ($data as $val)
					<tr>
    					<td>{{$val->restaurant_name}}</td>
						<td>{{$val->product_name}}</td>
						<td>{{$val->order_productprice}}</td>
						<td>{{$val->product_unit}}</td>
						<td>{{$val->order_productquantity}}</td>
						<td>{{$val->order_status}}</td>
					</tr>
					@endforeach
					@endif
				</tbody>
			</table>
			@if($proceedordercount > 0)
			<br>
			<div class="submit-section">
				<button id="proceedorder" class="btn btn-primary submit-btn">Proceed</button>
			</div>
			<br>
			@endif
		</form>
	</div>
</div>
</div>
</div>