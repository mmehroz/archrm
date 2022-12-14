<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="robots" content="noindex, nofollow">
        <title>INTERVIEW ASSESSMENT FORM - HRMS</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{!! asset('public/assets/img/favicon.ico') !!}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{!! asset('public/assets/css/bootstrap.min.css') !!}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{!! asset('public/assets/css/font-awesome.min.css') !!}">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{!! asset('public/assets/css/line-awesome.min.css') !!}">
		
		<!-- Datatable CSS -->
		<link rel="stylesheet" href="{!! asset('public/assets/css/dataTables.bootstrap4.min.css') !!}">
		
		<!-- Select2 CSS -->
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{!! asset('public/assets/css/bootstrap-datetimepicker.min.css') !!}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{!! asset('public/assets/css/style.css') !!}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>	
		<!-- Main Wrapper -->
        <div class="main-wrapper">		
			<!-- Header -->
            <div class="header">			
				<!-- Logo -->
                <div class="header-left">
                    <a href="{{url('/')}}" class="logo">
						<img src="{!! asset('public/assets/img/final-logo.png') !!}" width="120" height="60" alt="">
					</a>
                </div>
				<!-- /Logo -->				
				<!-- Header Title -->
                <div class="page-title-box float-left">
					<h3>Human Resource Management</h3>
                </div>
				<!-- /Header Title -->				
				<!-- Header Menu -->
				<ul class="nav user-menu">				
					<!-- Search -->					
					<!-- /Search -->				
					<!-- Flag -->					
					<!-- /Flag -->					
					<li class="nav-item">
						<a class="nav-link" href="{{url('/')}}">LogOut</a>
					</li>
				</ul>
				<!-- /Header Menu -->
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="{{url('/')}}">LogOut</a>
					</div>
				</div>
				<!-- /Mobile Menu -->				
            </div>
			<!-- /Header -->			
            <div class="content container-fluid">
            	<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title" style="padding-top: 70px; font-size: 36px; font-weight: 900; text-align: center;">Arc-Inventador</h3>
							@if(session('message'))
								<div class="alert alert-success" ><h4>{!!session('message')!!}</h4></div> 
						  
							@endif
							
							@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
										<div><h4><li>{{ $error }}</li></h4> </div>
									@endforeach
								</ul>
							</div>
							@endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="card flex-fill">
							<div class="card-header">
								<h4 class="card-title mb-0 text-center">INTERVIEW ASSESSMENT & RECOMMENDATION FORM</h4>
							</div>
							<div class="card-body">
								<form class="user" action="{{ URL::to('/submithrevucanform')}}" id="" enctype="multipart/form-data" method="post">
		                            {{csrf_field()}}
									
									<input type="hidden" name="can_job_id" value="{{ $data->jobapplicant_id }}" />
									<input type="hidden" name="can_evu_id" value="{{ $data->can_evu_id }}" />
									<h4 class="card-title mb-0 text-left" style="color: #000000; background-color: #bfbfbf; text-align: center !important;">Candidate Personal Data</h4>
									<div class="row">
									    <div class="col-md-2">
											<div class="form-group">
												<label class="col-form-label">Name</label>
												<input type="text" class="form-control"  value="{{old('can_name', @$data->jobapplicant_name )  }}" readonly />
											</div>
										</div>
									    <div class="col-md-2">
											<div class="form-group">
												<label class="col-form-label">Company</label>
												<input type="text" class="form-control" name="can_company" value="Arc-Inventador" readonly />
											</div>
										</div>
									
									    <div class="col-md-3">
											<div class="form-group">
												<label class="col-form-label">Position Title</label>
												<select class="form-control selectpicker form-control" placeholder="Select Store Name" data-live-search ="true"  readonly >
												<option value="" >Select the Following</option>
											   <option value="hrheadus" @if( $data->jobapplicant_postionapppliedform == "hrheadus") {{ "selected"}} @endif >Head of HR (US Operation)</option>
											   <option value="manhrus" @if( $data->jobapplicant_postionapppliedform == "manhrus") {{ "selected"}} @endif >Manager HR (US Operation)</option>
											   <option value="shapoidev" @if( $data->jobapplicant_postionapppliedform == "shapoidev") {{ "selected"}} @endif >Share Point Developer</option>
											   <option value="dotnetdev" @if( $data->jobapplicant_postionapppliedform == "dotnetdev") {{ "selected"}} @endif >Dot Net Developer</option>
											   <option value="axdyndev" @if( $data->jobapplicant_postionapppliedform == "axdyndev") {{ "selected"}} @endif >AX Dynamic Developer</option>
											   <option value="fiexe" @if( $data->jobapplicant_postionapppliedform == "fiexe") {{ "selected"}} @endif >Finance Executive</option>
											   <option value="fiaman" @if( $data->jobapplicant_postionapppliedform == "fiaman") {{ "selected"}} @endif >Finance Manager</option>
											   <option value="treamana" @if( $data->jobapplicant_postionapppliedform == "treamana") {{ "selected"}} @endif >Treasury Manager</option>
											   <option value="intaudmana" @if( $data->jobapplicant_postionapppliedform == "intaudmana") {{ "selected"}} @endif >Internal Audit Manager</option>
											   <option value="hrexe" @if( $data->jobapplicant_postionapppliedform == "hrexe") {{ "selected"}} @endif >HR Executive</option>
											   <option value="recurus" @if( $data->jobapplicant_postionapppliedform == "recurus") {{ "selected"}} @endif >Recruiter (US Operation)</option>
											   <option value="mainsup" @if( $data->jobapplicant_postionapppliedform == "mainsup") {{ "selected"}} @endif >Maintenance & Support Executive</option>
											   <option value="hedsur" @if( $data->jobapplicant_postionapppliedform == "hedsur") {{ "selected"}} @endif >Head of Surveillance </option>
											   <option value="hdofad" @if( $data->jobapplicant_postionapppliedform == "hdofad") {{ "selected"}} @endif >Head of Administration</option>
											   <option value="genecvsub" @if( $data->jobapplicant_postionapppliedform == "genecvsub") {{ "selected"}} @endif >General/ CV Submission</option>
												</select>
											</div>
										</div>
									    <div class="col-md-3">
											<div class="form-group">
												<label class="col-form-label">Sub Department</label>
												<input type="text" class="form-control"  value="{{old('can_dept', @$data->sd_name ) }}" readonly  />
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label class="col-form-label">Department</label>
												
												<input type="text" class="form-control"  value="{{old('can_dept', @$data->dept_name ) }}" readonly  />
												 
											</div>
										</div>
									</div>
									<div class="row">
									    <div class="col-md-3">
											<div class="form-group">
												<label class="col-form-label">Reports to</label>
												<input type="text" class="form-control" name="can_report" value="{{old('can_report', @$data->can_evu_reportsto ) }}" required  />
											</div>
										</div>
									    <div class="col-md-3">
											<div class="form-group">
												<label class="col-form-label">Location</label>
												<input type="text" class="form-control" name="can_loc" value="{{old('can_loc', @$data->can_evu_location ) }}" required  />
											</div>
										</div>
									    <div class="col-md-3">
											<div class="form-group">
												<label class="col-form-label">Job Grade</label>
												<input type="number" min="0" class="form-control" name="can_grade" value="{{old('can_grade', @$data->can_evu_grade ) }}" required  />
											</div>
										</div>
									    <div class="col-md-3">
											<div class="form-group">
												<label class="col-form-label">Reference</label>
												<input type="text" class="form-control" name="can_ref" value="{{old('can_ref', @$data->jobapplicant_reference ) }}" readonly  />
											</div>
										</div>
									</div>
									<div class="row">
									    <div class="col-md-3">
											<div class="form-group">
												<label class="col-form-label">Job Type</label>
												<select class="form-control" name="can_job_type"  required >
													<option value="" selected="" disabled="">Select Job Type</option>
													<option value="1" @if(old('can_job_type', @$data->can_evu_job_type == 1 )) {{ "selected" }} @endif >Permanent</option>
													<option value="2" @if(old('can_job_type', @$data->can_evu_job_type == 2 )) {{ "selected" }} @endif >Contract</option>
													<option value="3" @if(old('can_job_type', @$data->can_evu_job_type == 3 )) {{ "selected" }} @endif >Consultant</option>
													<option value="4" @if(old('can_job_type', @$data->can_evu_job_type == 4 )) {{ "selected" }} @endif >Trainee</option>
													<option value="5" @if(old('can_job_type', @$data->can_evu_job_type == 5 )) {{ "selected" }} @endif >Internee</option>
													<option value="6" @if(old('can_job_type', @$data->can_evu_job_type == 6 )) {{ "selected" }} @endif >MTO</option>
												</select>
											</div>
										</div>
									    <div class="col-md-3">
											<div class="form-group">
												<label class="col-form-label">Relative in Arc-Inventador </label>
												<input type="text" class="form-control" name="can_relative" value="{{old('can_relative', @$data->can_evu_relativename ) }}" required />
											</div>
										</div>
									    <div class="col-md-3">
											<div class="form-group">
												<label class="col-form-label">BUDGETED in Business Plan</label>
												<div class="col-lg-9">
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="can_BPN" value="Yes" value="option1" required checked @if(old('can_BPN', @$data->can_evu_budget == "Yes")) checked @endif />
														<label class="form-check-label" for="Yes">
														Yes
														</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="can_BPN" value="No" required @if(old('can_BPN', @$data->can_evu_budget == "No")) checked @endif />
														<label class="form-check-label" for="No">
														No
														</label>
													</div>
												</div>
											</div>
										</div>
									    <div class="col-md-3">
											<div class="form-group">
												<label class="col-form-label">Dependents</label>
												<input type="number" min="0" class="form-control" name="can_depends" value="{{old('can_relative', @$data->can_evu_depends ) }}" required />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label class="col-form-label">Current Benefit</label>
												<input type="text" class="form-control" name="can_exp_benefit" value="{{old('can_exp_benefit', @$data->jobapplicant_remarksofleave ) }}" readonly />
											</div>
										</div>
									    <div class="col-md-3">
											<div class="form-group">
												<label class="col-form-label">Expected Salary</label>
												<input type="number" min="0" class="form-control" value="{{old('can_relative', @$data->jobapplicant_monthlyexpectedsalary ) }}" readonly />
											</div>
										</div>
									    
										<div class="col-md-3">
											<div class="form-group">
												<label class="col-form-label">Offered Salary</label>
												<input type="number" class="form-control" name="can_off_salary" value="{{old('can_off_salary', @$data->can_evu_off_salary ) }}"  />
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label class="col-form-label">Offered Designation</label>
												<input type="text" class="form-control" name="can_off_desg" value="{{old('can_off_desg', @$data->can_evu_off_desg ) }}"  />
											</div>
										</div>
									</div>										
									<div class="row">
									    <div class="col-md-12">
											<div class="form-group">
												<label class="col-form-label">JOB SUMMARY</label>
												<textarea rows="4" cols="5" class="form-control" name="can_job_summary" placeholder="Enter message"  >{{old('can_job_summary', @$data->can_evu_job_sum ) }}</textarea>
											</div>
										</div>
									</div>
									<br>
									<h4 class="card-title mb-0 text-left" style="color: #000000; background-color: #bfbfbf; text-align: center !important;">HR Department Assessment</h4>
									<p style="color:#f90202;">Filled by HR Department</p>
									<div class="table-responsive">
							            <table class="table table-bordered">
											<p>Total Marks: Qualification=3  Professional Training=4  Computer Skill=5 <br> AVG Marks Obtained=3.13</p>
							                <thead>
							                  <tr>
							                    <th  style="white-space: nowrap;"></th>
							                    <th  style="white-space: nowrap;">Qualification</th>
							                    <th  style="white-space: nowrap;">Professional Training</th>
							                    <th  style="white-space: nowrap;">Computer Skill</th>
							                    <th  style="white-space: nowrap;">Obtained Marks</th>
							                  </tr>
							                  <tr>
							                  </tr>
							                </thead>
							                <tbody>
							                	<td>Academic</td>
							                	<td><select class="form-control"  name="can_hr_qua" id="mySelect1" required >
													<option value="0"  @if(old('can_hr_qua', @$data->can_evu_hr_qua == 0 )) {{ "selected" }} @endif >Satisfactory</option>
													<option value="1"  @if(old('can_hr_qua', @$data->can_evu_hr_qua == 1 )) {{ "selected" }} @endif >1</option>
													<option value="2"  @if(old('can_hr_qua', @$data->can_evu_hr_qua == 2 )) {{ "selected" }} @endif >2</option>
													<option value="3"  @if(old('can_hr_qua', @$data->can_evu_hr_qua == 3 )) {{ "selected" }} @endif >3</option>
													<option value="4"  @if(old('can_hr_qua', @$data->can_evu_hr_qua == 4 )) {{ "selected" }} @endif >4</option>
													<option value="5"  @if(old('can_hr_qua', @$data->can_evu_hr_qua == 5 )) {{ "selected" }} @endif >5</option>
												</select></td>
							                	<td><select class="form-control"  name="can_hr_per_tra" id="mySelect2"  required >
													<option value="0" @if(old('can_hr_per_tra',@$data->can_evu_hr_per_tra == 0 )) {{ "selected" }} @endif >Satisfactory</option>
													<option value="1" @if(old('can_hr_per_tra',@$data->can_evu_hr_per_tra == 1 )) {{ "selected" }} @endif >1</option>
													<option value="2" @if(old('can_hr_per_tra',@$data->can_evu_hr_per_tra == 2 )) {{ "selected" }} @endif >2</option>
													<option value="3" @if(old('can_hr_per_tra',@$data->can_evu_hr_per_tra == 3 )) {{ "selected" }} @endif >3</option>
													<option value="4" @if(old('can_hr_per_tra',@$data->can_evu_hr_per_tra == 4 )) {{ "selected" }} @endif >4</option>
													<option value="5" @if(old('can_hr_per_tra',@$data->can_evu_hr_per_tra == 5 )) {{ "selected" }} @endif >5</option>
												</select></td>
							                	<td><select class="form-control"  name="can_hr_com_ski" id="mySelect3"  required >
													<option value="0" @if(old('can_hr_com_ski',@$data->can_evu_hr_com_ski == 0 )) {{ "selected" }} @endif >Satisfactory</option>
													<option value="1" @if(old('can_hr_com_ski',@$data->can_evu_hr_com_ski == 1 )) {{ "selected" }} @endif >1</option>
													<option value="2" @if(old('can_hr_com_ski',@$data->can_evu_hr_com_ski == 2 )) {{ "selected" }} @endif >2</option>
													<option value="3" @if(old('can_hr_com_ski',@$data->can_evu_hr_com_ski == 3 )) {{ "selected" }} @endif >3</option>
													<option value="4" @if(old('can_hr_com_ski',@$data->can_evu_hr_com_ski == 4 )) {{ "selected" }} @endif >4</option>
													<option value="5" @if(old('can_hr_com_ski',@$data->can_evu_hr_com_ski == 5 )) {{ "selected" }} @endif >5</option>
												</select></td>
												<td><input class="form-control required_colom" type="number" id="total"  name="can_hr_obtai" value="{{old('can_hr_obtai', @$data->can_evu_hr_obtain ) }}" readonly ></td>
							              	</tbody>
							            </table>
						            </div>
									<div class="table-responsive">
							            <table class="table table-bordered">
												<p>Total Marks: Presentation=3  Communication-Verbal=2  Behaviour/Body Language=5  Manner=2  Reasoning=1 <br> AVG Marks Obtained=3.13</p>
							                <thead>
							                  <tr>
							                    <th  style="white-space: nowrap;"></th>
							                    <th  style="white-space: nowrap;">Presentation</th>
							                    <th  style="white-space: nowrap;">Communication - Verbal</th>
							                    <th  style="white-space: nowrap;">Behaviour / Body Language</th>
							                    <th  style="white-space: nowrap;">Manner</th>
							                    <th  style="white-space: nowrap;">Reasoning</th>
							                    <th  style="white-space: nowrap;">Obtained Marks</th>
							                  </tr>
							                  <tr>
							                  </tr>
							                </thead>
							                <tbody>
							                	<td>Personal</td>
							                	<td><select class="form-control" name="can_hr_pre" id="mySelect4" required >
													<option value="0" @if(old('can_hr_pre',@$data->can_evu_hr_pre == 0 )) {{ "selected" }} @endif >Satisfactory</option>
													<option value="1" @if(old('can_hr_pre',@$data->can_evu_hr_pre == 1 )) {{ "selected" }} @endif >1</option>
													<option value="2" @if(old('can_hr_pre',@$data->can_evu_hr_pre == 2 )) {{ "selected" }} @endif >2</option>
													<option value="3" @if(old('can_hr_pre',@$data->can_evu_hr_pre == 3 )) {{ "selected" }} @endif >3</option>
													<option value="4" @if(old('can_hr_pre',@$data->can_evu_hr_pre == 4 )) {{ "selected" }} @endif >4</option>
													<option value="5" @if(old('can_hr_pre',@$data->can_evu_hr_pre == 5 )) {{ "selected" }} @endif >5</option>
												</select></td>
							                	<td><select class="form-control" name="can_hr_verbal_ski" id="mySelect5"  required >
													<option value="0" @if(old('can_hr_verbal_ski',@$data->can_evu_hr_ver_ski == 0 )) {{ "selected" }} @endif >Satisfactory</option>
													<option value="1" @if(old('can_hr_verbal_ski',@$data->can_evu_hr_ver_ski == 1 )) {{ "selected" }} @endif >1</option>
													<option value="2" @if(old('can_hr_verbal_ski',@$data->can_evu_hr_ver_ski == 2 )) {{ "selected" }} @endif >2</option>
													<option value="3" @if(old('can_hr_verbal_ski',@$data->can_evu_hr_ver_ski == 3 )) {{ "selected" }} @endif >3</option>
													<option value="4" @if(old('can_hr_verbal_ski',@$data->can_evu_hr_ver_ski == 4 )) {{ "selected" }} @endif >4</option>
													<option value="5" @if(old('can_hr_verbal_ski',@$data->can_evu_hr_ver_ski == 5 )) {{ "selected" }} @endif >5</option>
												</select></td>
							                	<td><select class="form-control" name="can_hr_body" id="mySelect6" required >
													<option value="0" @if(old('can_hr_body',@$data->can_evu_hr_body == 0 )) {{ "selected" }} @endif >Satisfactory</option>
													<option value="1" @if(old('can_hr_body',@$data->can_evu_hr_body == 1 )) {{ "selected" }} @endif >1</option>
													<option value="2" @if(old('can_hr_body',@$data->can_evu_hr_body == 2 )) {{ "selected" }} @endif >2</option>
													<option value="3" @if(old('can_hr_body',@$data->can_evu_hr_body == 3 )) {{ "selected" }} @endif >3</option>
													<option value="4" @if(old('can_hr_body',@$data->can_evu_hr_body == 4 )) {{ "selected" }} @endif >4</option>
													<option value="5" @if(old('can_hr_body',@$data->can_evu_hr_body == 5 )) {{ "selected" }} @endif >5</option>
												</select></td>
							                	<td><select class="form-control" name="can_hr_manner" id="mySelect7"  required >
													<option value="0" @if(old('can_hr_manner',@$data->can_evu_hr_manner == 0 )) {{ "selected" }} @endif >Satisfactory</option>
													<option value="1" @if(old('can_hr_manner',@$data->can_evu_hr_manner == 1 )) {{ "selected" }} @endif >1</option>
													<option value="2" @if(old('can_hr_manner',@$data->can_evu_hr_manner == 2 )) {{ "selected" }} @endif >2</option>
													<option value="3" @if(old('can_hr_manner',@$data->can_evu_hr_manner == 3 )) {{ "selected" }} @endif >3</option>
													<option value="4" @if(old('can_hr_manner',@$data->can_evu_hr_manner == 4 )) {{ "selected" }} @endif >4</option>
													<option value="5" @if(old('can_hr_manner',@$data->can_evu_hr_manner == 5 )) {{ "selected" }} @endif >5</option>
												</select></td>
							                	<td><select class="form-control" name="can_hr_rea"  id="mySelect8" required >
													<option value="0" @if(old('can_hr_rea',@$data->can_evu_hr_reson == 0 )) {{ "selected" }} @endif >Satisfactory</option>
													<option value="1" @if(old('can_hr_rea',@$data->can_evu_hr_reson == 1 )) {{ "selected" }} @endif >1</option>
													<option value="2" @if(old('can_hr_rea',@$data->can_evu_hr_reson == 2 )) {{ "selected" }} @endif >2</option>
													<option value="3" @if(old('can_hr_rea',@$data->can_evu_hr_reson == 3 )) {{ "selected" }} @endif >3</option>
													<option value="4" @if(old('can_hr_rea',@$data->can_evu_hr_reson == 4 )) {{ "selected" }} @endif >4</option>
													<option value="5" @if(old('can_hr_rea',@$data->can_evu_hr_reson == 5 )) {{ "selected" }} @endif >5</option>
												</select></td>
												<td><input class="form-control required_colom" type="number"  min='0' id="total2" name="can_hr_obtainedmarks" value="{{old('can_hr_obtainedmarks', @$data->can_evu_hr_obtain_mark ) }}" readonly  /></td>
							              	</tbody>
							            </table>
						            </div>	
									<div class="row">
									    <div class="col-md-4">
											<div class="form-group">
												<label class="col-form-label">Interviewer Name</label>
												<input type="text" class="form-control" name="can_hr_intname" value="{{ session()->get('name') }}" readonly />
											</div>
										</div>
									    <div class="col-md-4">
											<div class="form-group">
												<label class="col-form-label">Date</label>
												<input type="date" class="form-control" name="can_hr_intdate" value="<?php echo date('Y-m-d'); ?>"  readonly />
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="col-form-label">Expected Date of Joining</label>
												<input type="date" class="form-control" name="can_hr_expdate" value="{{old('can_hr_expdate', @$data->can_evu_hr_expdate ) }}"  required />
											</div>
										</div>
									</div>
									<div class="row">
									    <div class="col-md-12">
											<div class="form-group">
												<label class="col-form-label">HR Comments</label>
												<textarea rows="2" cols="5" class="form-control" placeholder="Enter Your Comment" name="can_hr_commets" required >{{old('can_hr_commets', @$data->can_evu_hr_comments ) }}</textarea>
											</div>
										</div>
									</div>
									<br>
									
						            <div class="table-responsive">
							            <table class="table table-bordered">
												<p>Piont from 0 to 1.5 = Unsatisfactory, 1.6 to 2.5 = Average, 2.6 to 3.5 = Satisfactory, 3.6 to 4.5 = Good, 4.6 to 5 = Excellent</p>
							                <thead>
							                  <tr>
							                    <th  style="white-space: nowrap;"></th>
							                    <th  style="white-space: nowrap;">HR Department</th>
							                    <th  style="white-space: nowrap;">Departmental Head</th>
							                  </tr>
							                  <tr>
							                  </tr>
							                </thead>
							                <tbody>
							                	<td>Candidate Results</td>
							                	<td><input class="form-control required_colom" type="text" id="hrscore" name="can_hr_cand" value="{{old('can_hr_cand', @$data->can_evu_hr_cand ) }}" readonly required /></td>
							                	<td><input class="form-control required_colom" type="text" name="can_hod_cand" value="{{old('can_hod_obtain', @$data->can_evu_hod_cand ) }}"  /></td>
							              	</tbody>
							            </table>
						            </div>
									<br>
						            <br>
									<div class="text-right">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>						
            </div>
              <!-- <div class="text-center">
                <div class="credits"> -->
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                  -->
                  <!-- Designed by <a href="http://www.level3bos.com/">Level3BOS</a>
                </div>
              </div> -->
            <!--main content end-->
			<!-- /Page Wrapper -->
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="https://dreamguys.co.in/smarthr/maroon/assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="https://dreamguys.co.in/smarthr/maroon/assets/js/popper.min.js"></script>
        <script src="https://dreamguys.co.in/smarthr/maroon/assets/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/jquery.slimscroll.min.js"></script>
		

		
		<!-- Datatable JS -->
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/jquery.dataTables.min.js"></script>
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/moment.min.js"></script>
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- Mask JS -->
		<script type="text/javascript" src="{{ URL::asset('public/js/jquery.maskedinput.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('public/js/mask.js') }}"></script>


		<!-- <script src="https://dreamguys.co.in/smarthr/maroon/assets/js/jquery.maskedinput.min.js"></script>
        <script src="https://dreamguys.co.in/smarthr/maroon/assets/js/mask.js"></script> -->
        
		<!-- Custom JS -->
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/app.js"></script>


		<script type="text/javascript">
			
			
			setInterval( function () {
			
			
			//var arr = document.getElementsByName('DirecTVNow');
			var arr1 = parseInt(document.getElementById("mySelect1").value);
			
			var arr2 = parseInt(document.getElementById("mySelect2").value);
			
			var arr3 = parseInt(document.getElementById("mySelect3").value);
			
			var arr4 = parseInt(document.getElementById("mySelect4").value);
			
			var arr5 = parseInt(document.getElementById("mySelect5").value);
			
			var arr6 = parseInt(document.getElementById("mySelect6").value);
			
			var arr7 = parseInt(document.getElementById("mySelect7").value);
			
			var arr8 = parseInt(document.getElementById("mySelect8").value);
			

			
			var addtot = (arr1 + arr2  + arr3 );
			
			var tot = addtot / 3;
			
			var secaddtot = (arr4 + arr5  + arr6 + arr7  + arr8 );
			
			var sectot = secaddtot / 5;
			
			console.log(tot);
			
			if(  ( sectot >= 4.6 )  ){
				
				var score = "Excellent";
				console.log(score);
				
				
			}else if( ( sectot >= 3.6 )  ){
				
				
				var score = "Good";
				console.log(score);
				
				
				
			}else if(  ( sectot >= 2.6 )    ){
				
				var score = "Satisfactory";
				console.log(score);
				
				
			}else if( (sectot >= 1.6)  ){
				
				var score = "Average";
				console.log(score);
				
				
			}else if( ( sectot >= 1 ) ){
				
				var score = "Unsatisfactory";
				console.log(score);
				
				
			}else{
				var score = "";

				
			}
			/* var tot=0;
			for(var i=0;i<arr.length;i++){
				if(parseInt(arr[i].value))
					tot6 = parseInt(arr[i].value);
			} 
			for(var i=0;i<arr1.length;i++){
				if(parseInt(arr1[i].value))
					tot = parseInt(arr1[i].value);
					tot = tot/e;
					//tot = tot/tot6;
					tot = tot.toFixed(2);
			}*/
			document.getElementById('total').value = tot;
			
			document.getElementById('total2').value = sectot;
			
			document.getElementById('hrscore').value = score;
			
		
		
		}, 2000);
		
			$('#datetimepicker-default').datetimepicker();
    	</script>
		
    </body>

</html>