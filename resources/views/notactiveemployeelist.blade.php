@extends('layout.apptheme')
@section('hr-HRM')

<style>
	.view-icons .btn.active {
	    color: #333;
	}

</style>>

<!-- Page Wrapper -->
<div class="page-wrapper">

	<!-- Page Content -->
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Not Active Employee List</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/mainDashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Employee List</li>
					</ul>
				</div>
			</div>
		</div>
		@if(session('message'))
			<div><p class="alert alert-success mt-3" >{{session('message')}}</p> </div>
		@endif
		<!-- /Page Header -->
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-striped custom-table datatable" id="el">
						<thead>
							<tr class="bg-teal-400" style="white-space : nowrap;">
							   @if( session()->get("role") <=	 2)
								<th>Action</th>
								@endif
								<th>Name</th>
								<th>Father Name</th>
								<th>Login Status</th>
								<th style="display: none;">Email</th>
								<th>CNIC No.</th>
								<th>Role</th>
								<th>Department</th>
								<th>Designation</th>
								<th>Reporting To</th>
							   	@if( session()->get("role") <=	 2)
								<th style="display: none;">Sick Leaves</th>
								<th style="display: none;">Annual Leaves</th>
								@endif
								<th>Status</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach ($data as $val)
								<tr>
								 	@if( session()->get("role") <=	 2 )
									<td ><span><i style="cursor: pointer;" class="fa fa-pencil" onclick="getedit({{'"'.$val->elsemployees_empid.'"'}})" ></i>&nbsp;</span></td>
									@endif
									<td>
										<h2 class="table-avatar">
											<a href="{{url('/employeeprofile')}}/{{$val->elsemployees_empid}}">
												<img  style="cursor: pointer;" alt="" title="Click To View Profile" class="avatar" src="{{URL::to('public/img/')}}/{{$val->elsemployees_image}}">
											</a>
											<!-- <a href="{{url('/employeeprofile')}}"> -->
											{{$val->elsemployees_name}}
											<!-- <span></span></a> -->
										</h2>
										</td>
									<td>{{$val->elsemployees_fname}}</td>
									@if($val->user_loginstatus == "Online")
									<td style="text-align: center;"><span class="status online"></span></td>
									@else
									<td style="text-align: center;"><span class="status online" style="background-color: red !important"></span></td>
									@endif
									<td style="display: none;">{{$val->elsemployees_email}}</td>
									<td>{{$val->elsemployees_cnic}}</td>
									<td>{{$val->rolename}}</td>
									<td>{{$val->dept_name}}</td>
									<td>{{$val->DESG_NAME}}</td>
									<td>
									
									<?php 
										
										// dd($val->elsemployees_batchid);
									
									$reportemail = DB::connection('mysql')->table('elsemployees')
									->where('elsemployees.elsemployees_empid','=',$val->elsemployees_reportingto)
									->select('elsemployees.*')
									->first();
									$reportingtoname;
									if (isset($reportemail->elsemployees_name)) {
										$reportingtoname = $reportemail->elsemployees_name;
									}else{
										$reportingtoname = "-";
									}
									?>{{$reportingtoname}}</td>

									@if( session()->get("role") <=	 2)
									<td style="display: none;">{{$val->elsemployees_sickleaves}}</td>
									<td style="display: none;">{{$val->elsemployees_casualleaves}}</td>
									@endif

									@if ($val->elsemployees_status == 2)
									<td>Active</td>
									@else
									<td>Not Active</td>
									@endif
								
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </div>
	<!-- /Page Content -->
</div>
<div id ='modals'></div>
<!-- /Page Wrapper -->	
<script>
    function getedit($id){
		window.location.replace('{{ URL::to("/editemployee")}}/'+$id);
		// window.location.replace('{{ URL::to("/editemployee")}}/'+$id);
	}
	function changepicture($id){
	  $.get('{{ URL::to("/changepicturemodal")}}/'+$id,function(data){
	  $('#modals').empty().append(data);
	  $('#changepicture').modal('show');
	  });
	}
    // function viewprofile($id){
    // 	window.open('{{ URL::to("/employeeprofile")}}/'+$id,'_blank');
    //     // return true or false, depending on whether you want to allow the `href` property to follow through or not
    // }

    if($('.datetimepicker').length > 0) {
		$('.datetimepicker').datetimepicker({
			format: 'YYYY-MM-DD',
			icons: {
				up: "fa fa-angle-up",
				down: "fa fa-angle-down",
				next: 'fa fa-angle-right',
				previous: 'fa fa-angle-left'
			}
		});
	}

</script>

<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection