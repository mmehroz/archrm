@extends('layout.apptheme')
@section('hr-HRM')
			
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-10">
					<h3 class="page-title">Monthly Petty Cash Report</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/mainDashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Expense</li>
					</ul>
				</div>
				<div class="col-sm-2"><?php $ym = $yearandmonth;?>
					<a href="#" class="btn add-btn" onclick="addexpense({{'"'.$yearandmonth.'"'}})" data-toggle="modal" data-target="#add_expense"><i class="fa fa-plus"></i> Add Expense</a>
				</div>
			</div>
		</div>
		@if(session('message'))
      		<div><p class="alert alert-success" >{{session('message')}}</p> </div>
    	@endif
		<div class="panel-body">
		    <div class="row">
	            <div class="col-lg-12">
	            	<div class="table-responsive">
						<table class="table table-striped custom-table mb-0 datatable dataTable no-footer" style="transform: translateY(17px);">
							<thead>	
								<tr>
									<?php
									$yearandmonth = explode('-', $yearandmonth);
									$monthNum  = $yearandmonth[1];
									$dateObj   = DateTime::createFromFormat('!m', $monthNum);
									$month = $dateObj->format('F');
									$year = $yearandmonth[0];
									?>
	                				<th style="font-size: 18px;text-align: center;color: #fff;background: #0F5298;border: 1px solid lightgray;font-weight: bold;padding: 10px 8px;">{{$month}} {{$year}}</th>
									<th style="font-size: 18px;text-align: center;color: #fff;background: #0F5298;border: 1px solid lightgray;font-weight: bold;padding: 10px 8px;">Opening Balance</th>
									<th style="font-size: 18px;text-align: center;color: #fff;background: #0F5298;border-top:1px solid #0F5298;border-bottom:1px solid #0F5298;border-left:none;border-right:none;font-weight: bold;padding: 10px 8px;">PKR {{$openingbalance}}</th>
									<th style="    background: #0F5298; border: 1px solid #0F5298;"></th>
								</tr>
							</thead>
						</table>
						<table class="table table-striped custom-table mb-0 datatable dataTable no-footer" id="sreq">
		
							
							<tbody style="">
								<?php 
									$index=0;
									$debit=0;
									$closing=0;
								?>
								@foreach ($data as $val)
								<tr>
		        					<?php
									if($index == 0){
										$debit = $val->expense_amount;
									}else{
										$debit  = $debit + $val->expense_amount;
									}
									$closing = $openingbalance-$debit;
									?>
				                	<td style="text-transform: capitalize;font-size: 15px;text-align: center;border-left: 1px solid lightgray !important;border-right: 1px solid #fff;border-top: 1px solid lightgray;border-bottom: 1px solid lightgray;">{{$val->expense_title}}</td>
									<td style="text-transform: capitalize;font-size: 15px;text-align: right;border-left: 1px solid lightgray !important;border-right: 1px solid #fff;border-top: 1px solid lightgray;border-bottom: 1px solid lightgray;"><span>PKR </span><span>{{$val->expense_amount}}</span></td>
								
								  <td style="text-transform: capitalize;font-size: 15px;text-align: right;border-left: 1px solid lightgray !important;border-right: 1px solid #fff;border-top: 1px solid lightgray;border-bottom: 1px solid lightgray;"><span>PKR </span><span>{{$closing}}</span></td>
								  <td class="text-right d-flex justify-content-end" style="text-transform: capitalize;font-size: 18px;text-align: right;border-left: 1px solid lightgray !important;border-right: 1px solid #fff;border-top: 1px solid lightgray;border-bottom: 1px solid lightgray !important;">
									<div class="dropdown dropdown-action">
								  <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
								  <div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#" onclick="editexpense({{$val->expense_id}})"><i class="fa fa-pencil m-r-5"></i> Edit</a>
								  </div>
									</div>
							  </td>
									<td style="    border-right: 1px solid lightgray;    border-bottom: 1px solid lightgray;"></td>
									
								</tr>
								<?php $index++;?>
								@endforeach
							</tbody>
							
						</table>
						<table class="table table-striped custom-table mb-0 datatable dataTable no-footer" style="transform: translateY(-17px);">
							<thead style="">	
								<tr>
	                				<th style="font-size: 18px;text-align: center;color: #fff;background: #0F5298;border: 1px solid lightgray;font-weight: bold;padding: 10px 8px;">Total Expenses</th>
	                				<th style="font-size: 18px;text-align: center;color: #fff;background: #0F5298;border: 1px solid lightgray;font-weight: bold;">PKR {{$debit}}</th>
									<th style="font-size: 18px;text-align: center;color: #fff;background: #0F5298;border: 1px solid lightgray;font-weight: bold;">Closing Balance</th>
									<th style="font-size: 18px;text-align: center;color: #fff;background: #0F5298;border: 1px solid lightgray;font-weight: bold;">PKR {{$closing}}</th>
								</tr>
							</thead>
						</table>
					</div>
	            </div>
	        </div>
        </div>
    </div>				
</div>
<div id ='modals'></div>
<script type="text/javascript">
function addexpense($id){
	$.get('{{ URL::to("/addexpense")}}/'+$id,function(data){
	$('#modals').empty().append(data);
	$('#addexpense').modal('show');
	});
}
function editexpense($id){
	$.get('{{ URL::to("/editexpense")}}/'+$id,function(data){
	$('#modals').empty().append(data);
	$('#editexpense').modal('show');
	});
}
</script>
@endsection