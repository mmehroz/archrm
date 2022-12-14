

@if(empty($data))
	
	<h2>No Data Found Of This Month</h2>
	
@else 

<!-- <style type="text/css">
	.dt-buttons{
		margin-top: 1%;
		margin-bottom: 0.5%;
	}
</style> -->
<!-- Candidates Tab -->

		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-striped custom-table mb-0 datatable" id="pad">
						<thead>
							<tr class="bg-teal-400" style="white-space : nowrap; color:#fff;">
								<th>S.no</th>
							  	<th>Batch id</th>
								<th>Name</th>
								<th>Start time</th>
								<th>End time</th>
								<th>Date</th>
								<th>Day</th>
								<th>Arrival</th>
								<th>Departure</th>
								<th>Request Discrepancy</th>
							</tr>
						</thead>
						<tbody>
						<?php $dateindex=1;?>
						@foreach ($data as $val)
								<?php
									$dt = $val['emp_date'];
									$emptimeinfo = DB::connection('mysql')->table('elsemployeestiming')
					                ->where('elsemployeestiming.emptime_batchid','=',$val['emp_batchid'])
					                ->select('elsemployeestiming.*')
					                ->get();
					                $todaytime = $emptimeinfo->where('emptime_startdate', '<=', $dt)->sortByDesc('emptime_id')->first();
					                if($todaytime){
                    					if($dt >= $todaytime->emptime_startdate){
			                                $checkintime = date("h:i:sa",strtotime($todaytime->emptime_start));
			                            }else{
			                                $checkintime = "09:05:59pm";
			                            }
			                            if ($val['emp_departid'] == 15) {
			                            if ($dateindex <= 9) {
			                            $checkdate = "2022-01-0".$dateindex;	
			                            }else{
			                            $checkdate = "2022-01-".$dateindex;
			                            }
			                            if ($val['emp_date'] == $checkdate) {
			                            $halfdaytime = date('h:i:sa',strtotime('+1 minutes',strtotime($checkintime)));
			                            }else{
			                            $halfdaytime = date('h:i:sa',strtotime('+1 hour +26 minutes',strtotime($checkintime)));
			                        	}
			                            $dateindex++;
			                            }else{
			                            $halfdaytime = date('h:i:sa',strtotime('+1 hour +26 minutes',strtotime($checkintime)));
			                        	}
			                            // dd($checkintime);
				                    }
								?>
								<tr>
									<td>{{$val['s.no']}}</td>
									<td>{{$val['emp_batchid']}}</td>
									<td>{{$val['emp_name']}}</td>
									<td>{{$val['emp_checkin']}}</td>
									<td>{{$val['emp_checkout']}}</td>
									<td>{{$val['emp_date']}}</td>
									<td>{{$val['emp_day']}}</td>
									<td>
									@if($val['emp_labelin'] == 1 )
									<?php $attresult = "Present"?>
									<h4><span class='badge badge-success'>On Time</span></h4>
									@elseif($val['emp_labelin'] == 0) 
									@if($val['emp_checkin'] >= $halfdaytime)
									<?php $attresult = "Half Day"?>
									<h4><span class='badge badge-danger'>Half Day</span></h4>
									@else
									<?php $attresult = "Late"?>
									<h4><span class='badge badge-danger'> Late Arrival</span></h4>
									@endif
									@elseif($val['emp_labelout'] == 2)
									<?php $attresult = "Absent"?>
										<h4><span class='badge badge-info'>Off Day</span></h4>
									@else
									<?php $attresult = "Absent"?>
										<h4><span class='badge badge-warning'>Miss In</span></h4>
									@endif
											
										<!-- @if($val['emp_batchid'] == 11599 && $val['emp_date'] == "2020-10-19" )
											<h4><span class='badge badge-danger'> Late Arrival</span></h4>
										@else -->
										<!-- @endif -->
									</td>
									<td>
										@if($val['emp_labelout'] == 1)
											<h4><span class='badge badge-success'>On Time</span></h4>
										@elseif($val['emp_labelout'] == 0) 
											<h4><span class='badge badge-danger'>Early Departure</span></h4>
										@elseif($val['emp_labelout'] == 2) 
											<h4><span class='badge badge-info'>Off Day</span></h4>
										@elseif($val['emp_labelout'] == 3) 
											<h4><span class='badge badge-warning'>Miss Out</span></h4>
										@endif
									</td>
									<?php
									if (isset($cmonth)) {
										$newdate = $cmonth;
									}else{
										$newdate = date('Y').'-'.$month;
										// $newdate = date("Y-m", strtotime ( '-1 month' , strtotime ($yearandmonth) ));
									}
									$getcorrection = DB::connection('mysql')->table('attendancecorrection')
									->where('created_by','=',$val['emp_batchid'])
									->where('attendancecorrection_affdate','=',$val['emp_date'])
									->where('status_id','=',2)
									->select('attendancecorrection_status','attendancecorrection_title')
									->first();
									$getleave = DB::connection('mysql')->table('elsleaverequests')
									->where('elsleaverequests_empid','=',$val['emp_id'])
									->where('elsleaverequests_leavestartdate','=',$val['emp_date'])
									->select('elsleaverequests_status')
									->first();
									$getholiday = DB::connection('mysql')->table('holidays')
									->where('HOLI_DATE','=',$val['emp_date'])
									->select('HOLI_DATE','HOLI_TITLE')
									->first();	
									$getacknowledged = DB::connection('mysql')->table('acknowledgedpay')
									->where('created_by','=',$val['emp_batchid'])
									->where('acknowledgedpay_month','=',$newdate)
									->select('acknowledgedpay_month')
									->first();	
									$getdepartid = DB::connection('mysql')->table('elsemployees')
									->where('elsemployees_batchid','=',$val['emp_batchid'])
									->select('elsemployees_departid')
									->first();
									$getonday = DB::connection('mysql')->table('onday')
									->where('DEPT_ID','=',$getdepartid->elsemployees_departid)
									->where('onday_date','=',$val['emp_date'])
									->where('onday_type','=',"OFF")
									->select('onday_date')
									->first();
									?>
									@if(isset($getcorrection))
									<td>{{$getcorrection->attendancecorrection_status}} As {{$getcorrection->attendancecorrection_title}}</td>
									@elseif($val['emp_labelout'] == 0 && $val['emp_labelin'] == 1)
									<td  style="font-weight: 700">-</td>
									@elseif($val['emp_labelin'] == 1)
									<td style="font-weight: 700">-</td>
									@elseif($val['emp_day'] == "Sunday" || $val['emp_day'] == "Saturday")
									<td style="font-weight: 700">Holiday</td>
									@elseif(isset($getonday))
									<td style="font-weight: 700">Holiday</td>
									@else
									@if(isset($getholiday))
									<td style="font-weight: 700">{{$getholiday->HOLI_TITLE}}</td>
									@else
									@if(isset($getacknowledged))
									@if(isset($getleave->elsleaverequests_status))
									<td>{{$getleave->elsleaverequests_status}}</td>
									@else
									<td>-</td>
									@endif
									@else
									@if($attresult == "Absent")
									@if(isset($getleave->elsleaverequests_status))
									<td>{{$getleave->elsleaverequests_status}}</td>
									@else
									@if($val['emp_departid'] == 15)
									<td><a href="#" title="Add Correction Request" id="{{$val['emp_date']}}_{{$attresult}}" onclick="addcorrection(this.id)" data-toggle="modal" data-target="#add_correction"><i class="fa fa-plus-square"></i></a><label id="span_{{$val['emp_date']}}_{{$attresult}}" style="display: none;">Keep Submiting</label></td>
									@else
									<td><a href="#" title="Add Leave Request" id="{{$val['emp_date']}}~{{$val['emp_labelout']}}" onclick="addrequest(this.id)" data-toggle="modal" data-target="#add_correction"><i class="fa fa-plus-square"></i></a><label id="span_{{$val['emp_date']}}" style="display: none;">Keep Submiting</label></td>
									@endif
									@endif
									@else
									<td><a href="#" title="Add Correction Request" id="{{$val['emp_date']}}_{{$attresult}}" onclick="addcorrection(this.id)" data-toggle="modal" data-target="#add_correction"><i class="fa fa-plus-square"></i></a><label id="span_{{$val['emp_date']}}_{{$attresult}}" style="display: none;">Keep Submiting</label></td>
									@endif
									@endif
									@endif
									@endif
									
								</tr>
								
						@endforeach
						</tbody>
						
					</table>
				</div>
				<center>
						<div class="row">
							<div class="col-md-4">
								{{ $data->links() }}
							</div>
						</div>
						</center>
				<div id ='modals'></div>
			</div>
		</div>
<script>
function addrequest($date){
	$.get('{{ URL::to("/addrequest")}}/'+$date,function(data){
	$('#modals').empty().append(data);
	$('#addleaverequest').modal('show');
	$("#"+$date).remove();
	document.getElementById('span_'+$date).style.display = "block";
	});
}
function addcorrection($date){
	$.get('{{ URL::to("/addcorrectionmodal")}}/'+$date,function(data){
	$('#modals').empty().append(data);
	$('#addcorrection').modal('show');
	$("#"+$date).remove();
	document.getElementById('span_'+$date).style.display = "block";
	});
}
		var absentdays = {{ $absentday }} ; 
		$('#absdays').html(absentdays);
</script>

<script>

		var presentdays = {{ $presentday }} ; 
		$('#predays').html(presentdays);
</script>

<script>

		var leavesdays = {{ $empleavedays }} ; 
		$('#levdays').html(leavesdays);
</script>

<!-- <script type="text/javascript">
	$('document').ready(function(){
	
		$('#pad').DataTable( {
				
	        // dom: 'lBfrtip',
	        // buttons: [
	        //     'copy', 'csv', 'excel', 'pdf', 'print'
	        // ]
	        aLengthMenu: [
				[15,25, 50,100,500, 2800, -1],
				[15,25, 50,100,500, 2800 ,	"All"]
			],
			iDisplayLength: 31,
			dom: 'B',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			],
			responsive: {
				details: {
					type: 'column'
				}
			},
				order: [1, 'asc']
	    } );
    } );
</script> -->



@endif