@extends('layout.apptheme')
@section('hr-HRM')



<style>

        #loader{
            display:none;
            position: fixed;
            height: 100%;
            width: 100%;
            top: 10px;
            bottom: 80px;
            left: 80px;
            background:url("https://mobilelinkusa.com/callingtree/public/images/loader1.gif");
            background-size: 10%;
            z-index: 1;
            background-color: #ffffff5c;
            background-repeat: no-repeat;
            background-position: 60% 80%;
        }


</style>
<!-- Page Wrapper -->
<div class="page-wrapper">
	<!-- Page Content -->
    <div class="content container-fluid">

				<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">BioMetric</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/mainDashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Monthly Attendance Log</li>
					</ul>
				</div>
 			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
				<div class="card dash-widget">
					<div class="card-body">
						<span class="dash-widget-icon"><i class="fa fa-check-square-o"></i></span>
						<div class="dash-widget-info">
							<h4 id='predays'>0</h4>
							<span>Present Days</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
				<div class="card dash-widget">
					<div class="card-body">
						<span class="dash-widget-icon"><i class="fa fa-window-close"></i></span>
						<div class="dash-widget-info">
							<h4 id='absdays'>0
								<!-- <script>
									var d = new Date();
									var getTot = daysInMonth(d.getMonth(),d.getFullYear()); //Get total days in a month
									var sat = new Array();   //Declaring array for inserting Saturdays
									var sun = new Array();   //Declaring array for inserting Sundays

									for(var i=1;i<=getTot;i++){    //looping through days in month
									    var newDate = new Date(d.getFullYear(),d.getMonth(),i)
									    if(newDate.getDay()==0){   //if Sunday
									        sun.push(i);
									    }
									    if(newDate.getDay()==6){   //if Saturday
									        sat.push(i);
									    }

									}
									// console.log(sat);
									// console.log(sun);
									var totalsat = Object.keys(sat).length;
									var totalsun = Object.keys(sun).length;
									var totalsatandsun = totalsat+totalsun;
									// console.log(totalsat);
									// console.log(totalsun);
									// console.log(totalsatandsun);
									function daysInMonth(month,year) {
									    return new Date(year, month, 0).getDate();
									}
											document.write(totalsatandsun);
								</script> -->
							</h4>
							<span>OFF Days</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
				<div class="card dash-widget">
					<div class="card-body">
						<span class="dash-widget-icon"><i class="fa fa-star"></i></span>
						<div class="dash-widget-info">
						<?php
							// $currentmonth = date('m');
							// $currentyear = date('Y');
							// $empleavedays = DB::connection('mysql')->table('elsleaverequests')
							// ->where('elsleaverequests.elsleaverequests_empid','=',session()->get("id"))
							// ->where('elsleaverequests.elsleaverequests_leavestartdate','Like',$currentyear.'-'.$currentmonth.'-'.'%')
							// ->where('elsleaverequests.elsleaverequests_status','=','Done')
							// ->select('elsleaverequests.elsleaverequests_totalleavedays')
							// // ->count();
							// ->sum('elsleaverequests.elsleaverequests_totalleavedays');
						?>
							<h4 id='levdays'>0</h4>
							<span>Leaves</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		@if(session('message'))
			<div><p class="alert alert-success" >{{session('message')}}</p> </div>
		@endif
		<!-- /Page Header -->
		<div class="row" id="modals">
			<div class="col-sm-12 col-md-12">
				<form id="frmeditstore"  >
					<div class="row filter-row" style="display: flex!important;">
						<div class="col-sm-3 col-md-3">
				        		<label for="attyear">Select Year</label>
				        		<select id="attendanceyear" name="attendanceyear"   class="form-control" required >
									<option value="" selected="" disabled="">Select Year</option>
									<option value="2020">2020</option>
									<option value="2021">2021</option>
									<option value="2022" selected>2022</option>
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
						<div class="col-sm-3 col-md-3">  
							<label class="focus-label">Select Month</label>
							<br>
							<select class="selectpicker show-tick" name="mydata" id="searchdrop">
								<option value="" selected="" disabled="">Select</option>
								<option value="01">January</option>
								<option value="02">Feburary</option>
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
						
						<?php
						if(session()->get("role") <= 2){
						$task =  DB::connection('mysql')->table('elsemployees')
						->where('elsemployees.elsemployees_status','=',2)
						->select('elsemployees.*')
						->get();
						// dd($task);
						}
						elseif(session()->get("role") == 4){
						$task =  DB::connection('mysql')->table('elsemployees')
						->where('elsemployees.elsemployees_status','=',2)
						->where('elsemployees.elsemployees_empid','=',session()->get("id"))
						->select('elsemployees.*')
						->get();
						// dd($task);
						}else{
						$task = DB::connection('mysql')->table('elsemployees')
						->where('elsemployees.elsemployees_status','=',2)
						->where('elsemployees.elsemployees_reportingto','=',session()->get("id"))
						->select('elsemployees.*')
						->get();
					
						}
						?>
								<div class="col-sm-3 col-md-3">
								<label class="focus-label">Select Employee</label>
								<br>
									<select class="selectpicker show-tick " data-width="fit" id="addtm1" data-live-search="true" placeholder="Enter TM Name" name="emp_report"  required>
										@if(session()->get('role') == 3)
		                            	<option value={{session()->get('batchid')}}>{{session()->get('name')}}-{{session()->get('batchid')}}</option>
		                            	@endif
		                            	@foreach($task as $mnger)
		                                <option value={{$mnger->elsemployees_batchid}}>{{$mnger->elsemployees_name}}-{{$mnger->elsemployees_batchid}}</option>
		                            	@endforeach 
	                                </select>
							</div>
						
						<div id="field" class="col-sm-3 col-md-3">
						</div>
					</div>
				</form>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<div id="loader"></div>		
					<div id="dynamicdata">
						
					</div>
				</div>
			</div>
		</div>		
		</div>
		<!-- /Page Content -->

    </div>
	<!-- /Page Wrapper -->

</div>
<script>
	
	$('document').ready(function(){
		function showdata(){
					$("#loader").show();
					
					$.get('{{ URL::to("/attendancedashboarddata")}}',function(data){
						
						$('#dynamicdata').empty().append(data);
						
						$("#loader").hide();
						
						});
				}
				
		showdata();
		
		$('#searchdrop').on('change',function(){
					var dropdown = $(this).attr('name');
					var dropdownval = $(this).val();
					
					if(dropdownval){
						$("#field").html("<div class='row filter-row'><div class='col-sm-5 col-md-5' style='margin-top: 5%;'><input class='btn btn-success btn-block' type='submit'></div></div>");
					}else{
						$("#field").html("<div><h2>Invalid Type</h2></div>");
					}
			});
		
		$('#modals').on('submit','#frmeditstore',function(e){
				
				$("#loader").show();
				e.preventDefault();
				
				
				var $inputs = $('#frmeditstore :input');
				
				
				
				var values = {};
				$inputs.each(function() {
					values[this.name] = $(this).val();
				});
				
				console.log(values['emp_report']);
				
				
				dampa=values['mydata'];
				yampa=values['attendanceyear'];

				vampa=values['emp_report'];
				
				// console.log($(this).serialize());
				
				$.get('{{ URL::to("/attendancedashboardsearchmonth")}}/'+yampa+'/'+dampa+'/'+vampa,function(data){
					
					$('#dynamicdata').empty().append(data);
					
					$("#loader").hide();
					
				})
			});
		
		$("#dynamicdata").on('click','.pagination a ',function(e){
					$("#loader").show();
                    e.preventDefault();
                    var url = $(this).attr('href');
                    $.get(url,function(data){
                    $('#dynamicdata').empty().append(data);
					$("#loader").hide();
					});
				});
		
	});
</script>	
<!-- /Main Wrapper -->

@endsection