@extends('layout.apptheme')
@section('hr-HRM')
<div id="filteration">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<style>
	a {
		text-decoration: none !important;
	}
	.toast{
		max-width: 100% !important;
		margin-bottom: 10px
	}
	.highcharts-figure,
	.highcharts-data-table table {
	    min-width: 310px;
	    max-width: 800px;
	    margin: 1em auto;
	}

	#container {
	    height: 400px;
	}

	.highcharts-data-table table {
	    font-family: Verdana, sans-serif;
	    border-collapse: collapse;
	    border: 1px solid #ebebeb;
	    margin: 10px auto;
	    text-align: center;
	    width: 100%;
	    max-width: 500px;
	}

	.highcharts-data-table caption {
	    padding: 1em 0;
	    font-size: 1.2em;
	    color: #555;
	}

	.highcharts-data-table th {
	    font-weight: 600;
	    padding: 0.5em;
	}

	.highcharts-data-table td,
	.highcharts-data-table th,
	.highcharts-data-table caption {
	    padding: 0.5em;
	}

	.highcharts-data-table thead tr,
	.highcharts-data-table tr:nth-child(even) {
	    background: #f8f8f8;
	}

	.highcharts-data-table tr:hover {
	    background: #f1f7ff;
	}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<div class="welcome-box">
									<div class="welcome-img" onclick="getimage()">
										<script>
											$(document).ready(function(){
											  $('.toast').toast('show');
											});
												function getimage(){
													$.get('{{ URL::to("/getimage")}}',function(data){
												    $('#modals').empty().append(data);
												    $('#getimage').modal('show');
												    });
												}
										</script>
										<img alt="" title="Click To Change Image" src="{{URL::to('public/img/')}}/{{$data['empdata']->elsemployees_image}}">
									</div>
									<div class="welcome-det">
										<h3 class="page-title">Welcome HR!</h3>
										<ul class="breadcrumb">
											<li class="breadcrumb-item active">Dashboard</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome HR!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div> -->
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-users"></i></span>
									<div class="dash-widget-info">
										<h3>{{$data['emptota']}}</h3>
										<span>No Of Employees</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
									<div class="dash-widget-info">
										<h3>{{$data['countdpt']}}</h3>
										<span>No Of Departments</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
									<div class="dash-widget-info">
										<h3>{{$data['desgc']}}</h3>
										<span>No Of Designations</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-8">
									<div class="card">
										<div class="card-body">
											
										
                                <!-- <form> -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="Arc-Inventador">
                                            </div>
                                        </div>
                                   
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" disabled placeholder="email" value="{{$data['empdata']->elsemployees_email}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                             <div class="form-group">
                                                <label>User Id</label>
                                                <input type="text" class="form-control" disabled placeholder="Username" value="{{$data['empdata']->elsemployees_batchid}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                       <div class="form-group">
                                                <label>Employee Name</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="{{$data['empdata']->elsemployees_name}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Role</label>
                                                <input type="text" class="form-control" disabled placeholder="Home Address" value="{{$data['empdata']->rolename}}">
                                            </div>
                                        </div>
                                             <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <input type="text" class="form-control" disabled placeholder="Home Address" value="Active"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                    			<input type="month" class="form-control" name="filter" id="filter">
                                    		</div>
                                    	</div>
                                    	<div class="col-md-2">
                                            <div class="form-group">
                                    			<input type="button" class="btn form-control" name="btnfilter" value="Submit" onclick="filteradminDashboard();" style="color: #0c0c0c;background-color: #ebebeb; border-color: #5069e7;">
                                    		</div>
                                    	</div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            	<figure class="highcharts-figure">
													<div id="container"></div>
												</figure>
											</div>
										</div>
									</div>
                            	<div class="clearfix"></div>
                            </div>
                        </div>
					</div>
								<div class="col-md-4">
									<div class="card" >
										<div class="card-body">
											 <div class="container">
 											<div class="toast" data-autohide="false">
											    <div class="toast-header" style="background: #ebebeb; color: #000000 !important;">
											      <strong class="mr-auto text-primary" style="color: #000000 !important;"><i class="fa fa-bell mr-2"></i> Pending Complains</strong>
											      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" style="color: white !important; font-weight: 700">&times;</button>
											    </div>
											    <div class="toast-body" style="height: 240px; overflow-x: hidden;">
											    	<?php $getcomplains = DB::connection('mysql')->table('complain')
											    	->join ('elsemployees','elsemployees.elsemployees_batchid', '=','complain.created_by')
													->where('complainstatus_id','=', 1) 
													->orderBy('complain_id','DESC') 
													->select('complain.*','elsemployees_empid','elsemployees_name','elsemployees_image')
													->get();?>
												
													@foreach ($getcomplains as $complains)
													@if(isset($complains->complain_id))
													<div class="row pt-2">
													<div class="col-8"><h6 style="font-size: 0.79rem; color: black; font-weight: 550; letter-spacing: 1px">{{$complains->elsemployees_name}}</h6></div>
													<div class="col-4 text-right"><h6 style="font-size: 0.79rem !important; color: black; font-weight: 550">{{$complains->complain_date}}</h6></div>
													<div class="col-12">
														<div class="divider" style="width: 100%; border-bottom: 1px solid lightgray; margin-bottom: 5px"></div>
													</div>
													
													<div class="col-12">
														<a href="{{url('/complainreport')}}">
														<p class="pt-3" style="text-align: justify; word-break: break-all; color: darkgray; font-weight: 550; font-size: 0.85rem;">
															{{$complains->complain_note}}
														</p>
														</a>
													</div>
													</div>
													@endif
													@endforeach
											    </div>
											  </div>
											</div>
										<ul class="breadcrumb">
											<li class="breadcrumb-item active" style="color: #000000">Up Comming Employee Birthday</li>
										</ul>
											<div class="table-responsive" style="height: auto !important;">
					<table class="table table-striped custom-table datatable"  id="bd">
						<thead>
							<tr class="bg-teal-400" style="white-space : nowrap; color: white">
							 	<th>Name</th>
								<th>Department</th>
								<th>DOB</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($data['bddata'] as $val)
							@if(isset($val->elsemployees_empid))
								<tr>
								 	<td>
										<h2 class="table-avatar">
											<a href="{{url('/employeeprofile')}}/{{$val->elsemployees_empid}}" target="_blank">
												<img  style="cursor: pointer;" alt="" title="Click To View Profile" class="avatar" src="{{URL::to('public/img/')}}/{{$val->elsemployees_image}}">
											</a>
											<!-- <a href="{{url('/employeeprofile')}}"> -->
											{{$val->elsemployees_name}}
											<!-- <span></span></a> -->
										</h2>
										</td>
									<td>{{$val->dept_name}}</td>
									<td>{{$val->elsemployees_dofbirth}}</td>
								</tr>
								@endif
							@endforeach
						</tbody>
					</table>
				</div>
				
										</div>
										<div class="card-body">
										<ul class="breadcrumb">
											<li class="breadcrumb-item active" style="color: #000000">Up Comming Payroll Employee</li>
										</ul>
											<div class="table-responsive" style="height: auto !important;">
											<table class="table table-striped custom-table datatable"  id="bd">
												<thead>
													<tr class="bg-teal-400" style="white-space : nowrap; color: white">
													 	<th>Name</th>
														<th>Department</th>
														<th>DOJ</th>
													</tr>
												</thead>
												<tbody>
													@foreach ($data['pdata'] as $val)
													@if(isset($val->elsemployees_empid))
														<tr>
														 	<td>
																<h2 class="table-avatar">
																	<a href="{{url('/employeeprofile')}}/{{$val->elsemployees_empid}}" target="_blank">
																		<img  style="cursor: pointer;" alt="" title="Click To View Profile" class="avatar" src="{{URL::to('public/img/')}}/{{$val->elsemployees_image}}">
																	</a>
																	<!-- <a href="{{url('/employeeprofile')}}"> -->
																	{{$val->elsemployees_name}}
																	<!-- <span></span></a> -->
																</h2>
																</td>
															<td>{{$val->dept_name}}</td>
															<td>{{$val->elsemployees_dofjoining}}</td>
														</tr>
														@endif
													@endforeach
												</tbody>
											</table>
										</div>
									</div>
										<div class="card-body">
										<ul class="breadcrumb">
											<li class="breadcrumb-item active" style="color: #000000">Up Comming Employee Anniversary</li>
										</ul>
											<div class="table-responsive" style="height: auto !important;">
					<table class="table table-striped custom-table datatable" id="bd">
						<thead>
							<tr class="bg-teal-400" style="white-space : nowrap; color: white">
							 	<th>Name</th>
								<th>Department</th>
								<th>DOJ</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($data['jdata'] as $val)
							@if(isset($val->elsemployees_empid))
								<tr>
								 	<td>
										<h2 class="table-avatar">
											<a href="{{url('/employeeprofile')}}/{{$val->elsemployees_empid}}" target="_blank">
												<img  style="cursor: pointer;" alt="" title="Click To View Profile" class="avatar" src="{{URL::to('public/img/')}}/{{$val->elsemployees_image}}">
											</a>
											<!-- <a href="{{url('/employeeprofile')}}"> -->
											{{$val->elsemployees_name}}
											<!-- <span></span></a> -->
										</h2>
										</td>
									<td>{{$val->dept_name}}</td>
									<td>{{$val->elsemployees_dofjoining}}</td>
								</tr>
								@endif
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
		</div>
	</div>
</div>				
		</div>
	</div>
</div>
<div id ='modals'></div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
	function filteradminDashboard(){
		var filter = document.getElementById('filter').value;
		$.get('{{ URL::to("/filteradminDashboard")}}/'+filter,function(data){
		$('#filteration').empty().append(data);
		});
	}
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Department Wise Attendance Correction'
    },
    subtitle: {
        text: 'Monthly Counts'
    },
    xAxis: {
        categories: [
        <?php 
        $filter = $data['filtermonth'];
        $depart = DB::connection('mysql')->table('hrm_Department')
		->select('dept_id','dept_name')
		->get();
		$nooflate = array();
		$noofhalf = array();
		$noofabsent = array();
		$sortemployees = array();
		$index=0;
		foreach ($depart as $departs) {
			$employee = DB::connection('mysql')->table('elsemployees')
	        ->where('elsemployees_departid','=',$departs->dept_id)
	        ->where('elsemployees_status','=',2)
	        ->select('elsemployees_empid','elsemployees_batchid')
	        ->get();	
			foreach ($employee as $employees) {
				$sortemployees[] = $employees->elsemployees_batchid;
			}
			$nooflate[$index] = DB::connection('mysql')->table('attendancecorrection')
	        ->whereIn('created_by',$sortemployees)
	        ->where('attendancecorrection_title','=',"Late")
	        ->where('attendancecorrection_affdate','like',"$filter".'%')
	        ->where('status_id','=',2)
	        ->select('attendancecorrection_id')
	        ->count();
	    	$noofhalf[$index] = DB::connection('mysql')->table('attendancecorrection')
	        ->whereIn('created_by',$sortemployees)
	        ->where('attendancecorrection_title','=',"Half Day")
	        ->where('attendancecorrection_affdate','like',"$filter".'%')
	        ->where('status_id','=',2)
	        ->select('attendancecorrection_id')
	        ->count();
	        $noofabsent[$index] = DB::connection('mysql')->table('attendancecorrection')
	        ->whereIn('created_by',$sortemployees)
	        ->where('attendancecorrection_title','=',"Absent")
	        ->where('attendancecorrection_affdate','like',"$filter".'%')
	        ->where('status_id','!=',1)
	        ->select('attendancecorrection_id')
	        ->count();
		?>
			'{{$departs->dept_name}}',
		<?php
		$index++;
		}
		?>
        
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'No. Of Days'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Late',
        data: [<?php foreach ($nooflate as $nooflates) {
        	print_r($nooflates)
        ?>,<?php } ?>]

    }, {
        name: 'Absent',
        data: [<?php foreach ($noofabsent as $noofabsents) {
        	print_r($noofabsents)
        ?>,<?php } ?>]

    },  {
        name: 'Half Day',
        data: [<?php foreach ($noofhalf as $noofhalfs) {
        	print_r($noofhalfs)
        ?>,<?php } ?>]

    }]
});
</script>
</div>
@endsection