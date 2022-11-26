@extends('layout.apptheme')
@section('hr-HRM')
			
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-10">
					<h3 class="page-title">Monthly Expense Report</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/mainDashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Expense Report</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="panel-body">
	        <div class="row">
	            <div class="col-lg-12">
	            	<div class="table-responsive">
						<table class="table table-striped custom-table mb-0 datatable dataTable no-footer" id="sreq">
							<thead style="color: white; background-color: #640d1d">	
								<tr>
	                				<th>Type</th>
									<th>Title</th>
									<th>Amount</th>
									<th>Month</th>
									<th>Comment</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($data as $val)
								<tr>
		        					<td>{{$val->expensetype_name}}</td>
									<td>{{$val->expense_title}}</td>
									<td><div class="d-flex justify-content-between"><span></span><span>PKR {{$val->expense_amount}}</span></div></td>
									<td>{{$val->expense_yearandmonth}}</td>
									<td>{{$val->expense_comment}}</td>
								</tr>
								@endforeach
								@foreach ($fixed as $fixeds)
								<tr>
		        					<td>{{$fixeds->expensetype_name}}</td>
									<td>{{$fixeds->expense_title}}</td>
									<td><div class="d-flex justify-content-between"><span></span><span>PKR {{$fixeds->expense_amount}}</span></div></td>
									<td>{{$fixeds->expense_yearandmonth}}</td>
									<td>{{$fixeds->expense_comment}}</td>
								</tr>
								@endforeach
							</tbody>
							<tfoot>
								<tr>
									<td></td>
									<td></td>
									<td><div class="d-flex justify-content-between"><span>Total</span><span>PKR {{$totalsum}}</span></div></td>
									<td></td>
									<td></td>
								</tr>
							</tfoot>
						</table>
					</div>
	            </div>
	        </div>
        </div>
        <p>{{$totalsum}}</p>
    </div>				
</div>
@endsection