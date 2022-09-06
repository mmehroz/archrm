@extends('layout.apptheme')
@section('hr-HRM')
<!-- <body>
	

<div class="row">
	<div class="col-md-12">
		<h1 >Preface</h1>0000
	</div>
</div>
</body> -->
<div class="page-wrapper ">
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title text-center">Training Manual PDF</h3>
					<ul class="breadcrumb">
						<!-- <li class="breadcrumb-item active">Add Employee</li> -->
					</ul>
				</div>
			</div>
		</div>
				<!-- <ul id="" class="alert alert-info mt-3" style="display : none">
					<p>{{session('message')}}</p>
				</ul> -->
		@if(session('message'))
			<div><p class="alert alert-info mt-3" >{{session('message')}}</p> </div>
		@endif
		<!-- /Page Header -->
		
		<!-- <div class="row">
			@if(session()->get('role') == 4)
			@if(session()->get('dptid') != 15)
			<div class="col-md-4">
				<div class="bd">
					<h4>BWC -HR Policy Manual</h4>
					<a href="{{URL::to('public/pdf/BWC -HR Policy Manual.pdf')}}" class="btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="bd">
					<h4>Debt Validation Program</h4>
					<a href="{{URL::to('public/pdf/Debt Validation Program.pdf')}}"  class="text-center btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="bd">
					<h4>Script New</h4>
					<a href="{{URL::to('public/pdf/Script New.pdf')}}" class="btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="bd">
					<h4>Why you should select Debt Validation Program</h4>
					<a href="{{URL::to('public/pdf/Why you should select Debt Validation Program.pdf')}}" class="btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="bd">
					<h4>10 tips for better telemaketing-converted</h4>
					<a href="{{URL::to('public/pdf/10 tips for better telemaketing-converted.pdf')}}" class="btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="bd">
					<h4>Global Sales call pitch-converted</h4>
					<a href="{{URL::to('public/pdf/Global Sales call pitch-converted.pdf')}}" class="btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="bd">
					<h4>Presentation1-converted</h4>
					<a href="{{URL::to('public/pdf/Presentation1-converted.pdf')}}" class="btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="bd">
					<h4>Rebuttals which gona help you</h4>
					<a href="{{URL::to('public/pdf/Rebuttals which gona help you.pdf')}}" class="btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			@else
			<div class="col-md-4 mt-3">
				<div class="bd">
					<h4>DME Script</h4>
					<a href="{{URL::to('public/pdf/DME-script.pdf')}}" class="btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="bd">
					<h4>DME Competitive Bid Zip Codes</h4>
					<a href="{{URL::to('public/pdf/WEBpg/txt.html')}}" class="btn btn-primary">To View This Click on it</a>
				</div>
			</div>
			@endif
			@else
			<div class="col-md-4">
				<div class="bd">
					<h4>BWC -HR Policy Manual</h4>
					<a href="{{URL::to('public/pdf/BWC -HR Policy Manual.pdf')}}" class="btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="bd">
					<h4>Debt Validation Program</h4>
					<a href="{{URL::to('public/pdf/Debt Validation Program.pdf')}}"  class="text-center btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="bd">
					<h4>Script New</h4>
					<a href="{{URL::to('public/pdf/Script New.pdf')}}" class="btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="bd">
					<h4>Why you should select Debt Validation Program</h4>
					<a href="{{URL::to('public/pdf/Why you should select Debt Validation Program.pdf')}}" class="btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="bd">
					<h4>10 tips for better telemaketing-converted</h4>
					<a href="{{URL::to('public/pdf/10 tips for better telemaketing-converted.pdf')}}" class="btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="bd">
					<h4>Global Sales call pitch-converted</h4>
					<a href="{{URL::to('public/pdf/Global Sales call pitch-converted.pdf')}}" class="btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="bd">
					<h4>Presentation1-converted</h4>
					<a href="{{URL::to('public/pdf/Presentation1-converted.pdf')}}" class="btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="bd">
					<h4>Rebuttals which gona help you</h4>
					<a href="{{URL::to('public/pdf/Rebuttals which gona help you.pdf')}}" class="btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="bd">
					<h4>DME Script</h4>
					<a href="{{URL::to('public/pdf/DME-script.pdf')}}" class="btn btn-primary">To View This Pdf Click on it</a>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="bd">
					<h4>DME Competitive Bid Zip Codes</h4>
					<a href="{{URL::to('public/pdf/WEBpg/txt.html')}}" class="btn btn-primary">To View This Click on it</a>
				</div>
			</div>
			@endif
		</div>	 -->		
</div>
<style>
.bd a {
	font-size: 14px;
	color: white;
	text-align: right !important;
	border-radius: 20px;
	

}
h4{
	margin-left: 0px !important;
	text-decoration: none !important;
	text-align: center;
	color: black;
}
.bd{
border: 1px solid Lightgray;
border-radius: 4px;
padding: 5px;
text-align: center;

}

</style>
@endsection