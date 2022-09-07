<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/smarthr/maroon/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Mar 2020 18:49:56 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Declined ELS Request</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{!! asset('assets/img/favicon.ico') !!}" />
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}" />
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{!! asset('assets/css/font-awesome.min.css') !!}" />
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}" />
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			a:hover, a:active, a:focus {
			    text-decoration: none;
			    outline: none;
			    color: #4a4a4a!important;
			}
		</style>
    </head>
    <!-- <body class="account-page"  style="background-color: #e9ecef;"> -->
    <body class="account-page" >
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<div class="account-content">
				<div class="container">
					<!-- <div class="account-box"> -->
						<div class="account-wrapper">
							<!-- start preheader -->
							<div class="preheader" style="display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0;">
							A preheader is the short summary text that follows the subject line when an email is viewed in the inbox.
							</div>
							<!-- end preheader -->
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<!-- start logo -->
							    <tr>
						      		<td align="center" bgcolor="#e9ecef">
							        	<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
								          	<tr>
								            	<td align="center" valign="top" style="padding: 20px 24px;">
								            		<a href="https://www.arcinventadorcommunications.com/" target="_blank" style="display: inline-block;">
								                		<img src="{{asset('public/assets/img/logo22.png')}}" alt="BWC" border="0" width="48" style="display: block; width: 278px; max-width: 100%; min-width: 48px;">
								            		</a>
								            	</td>
								          	</tr>
							        	</table>
							    	</td>
							    </tr>
							    <!-- end logo -->


							    <!-- start hero -->
							    <tr>
							      <td align="center" bgcolor="#e9ecef">
							        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
							          <tr>
							            <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
							              <h1 style="text-align: center; font-size: 45px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">Done</h1>
							            </td>
							          </tr>
							        </table>
							      </td>
							    </tr>
							    <!-- end hero -->


								

							   <!--content 1 -->
	<tr><td align="center" bgcolor="#fbfcfd">
		<table width="90%" border="0" cellspacing="0" cellpadding="0">
			<tr><td align="center">
				<div style="line-height: 70px;">
					<span><img src="{{ URL::asset('public/images/add.png')}}" style="height:55px;margin-top: 20px;position: relative;margin-bottom:20px;" /></span>
				</div>
				<!-- padding --><!--<div style="height: 20px; line-height: 40px; font-size: 10px;"> </div>-->
			</td></tr>
			<tr><td align="center">
				<div style="line-height: 24px;">
					<font face="Arial, Helvetica, sans-serif" size="4" color="#000000" style="font-size: 15px;">
					<span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #000000;">
						<b style="font-variant: small-caps;color: #f44336;">{{ $datas['data']->elsemployees_name }}</b> request for @if($datas['data']->elsleaverequests_leavetypeid == 1) Annual @elseif ($datas['data']->elsleaverequests_leavetypeid == 2) Sick @else Correction @endif Leave Date : <b style="color: red;">{{$datas['data']->elsleaverequests_leavestartdate}} to {{$datas['data']->elsleaverequests_leaveenddate}}</b> request has been done, Details are shown below.
					</span></font>
				</div>
				<!-- padding --><!--<div style="height: 40px; line-height: 40px; font-size: 10px;"> </div>-->
			</td></tr>
		</table>		
	</td></tr>
	<!--content 1 END-->
	<!--content 2 -->
	<tr><td align="center" bgcolor="#ffffff" style="border-bottom-width: 0px; border-bottom-style: solid; border-bottom-color: #eff2f4;">
		<table width="94%" border="0" cellspacing="0" cellpadding="0">
			<tr><td align="center">

				<div class="mob_100" style="float: left; display: inline-block; width: 50%;">
					<table class="mob_100" width="100%" border="0" cellspacing="0" cellpadding="0" align="left" style="border-collapse: collapse;">
						<tr><td align="center" style="line-height: 14px; padding: 0 27px;">
							<!-- padding --><div style="height: 20px; line-height: 40px; font-size: 10px;"> </div>
							<div style="line-height: 14px;">
								<font face="Arial, Helvetica, sans-serif" size="3" color="#77b43f" style="font-size: 14px;">
								<strong style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #77b43f;">
									<a href="#"style="color: #77b43f; text-decoration: none;font-variant: small-caps; font-size:16px;">Approved By</a>
								</strong></font>
							</div>
							<!-- padding --><div style="height: 10px; line-height: 18px; font-size: 10px;"> </div>
							<div style="line-height: 21px;">
								<font face="Arial, Helvetica, sans-serif" size="3" color="#98a7b9" style="font-size: 14px;">
								<span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #98a7b9;text-transform:capitalize;">
									{{ $datas['report']->elsemployees_name }}
								</span>
								
								</font>
							</div>
						</td></tr>
					</table>
				</div>
				
				<div class="mob_100" style="float: left; display: inline-block; width: 50%;">
					<table class="mob_100" width="100%" border="0" cellspacing="0" cellpadding="0" align="left" style="border-collapse: collapse;">
						<tr><td align="center" style="line-height: 14px; padding: 0 27px;">
							<!-- padding --><div style="height: 20px; line-height: 40px; font-size: 10px;"> </div>
							<div style="line-height: 14px;">
								<font face="Arial, Helvetica, sans-serif" size="3" color="#77b43f" style="font-size: 14px;">
								<strong style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #77b43f;">
									<a href="#" style="color: #77b43f; text-decoration: none; font-variant: small-caps; font-size:16px;">Done By</a>
								</strong></font>
							</div>
							<!-- padding --><div style="height: 10px; line-height: 18px; font-size: 10px;"> </div>
							<div style="line-height: 21px;">
								<font face="Arial, Helvetica, sans-serif" size="3" color="#98a7b9" style="font-size: 12px;">
								<span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #98a7b9;text-transform:capitalize;">
								{{ session()->get("name") }}
								</span>
								
								</font>
							</div>
						</td></tr>
					</table>
				</div>								
			</td></tr>
			<tr><td><!-- padding --><div style="height: 40px; line-height: 80px; font-size: 10px;"> </div></td></tr>
		</table>		
	</td></tr>
	<!--content 2 END-->
							          <!-- start button -->
							          <tr>
							            <td align="left" bgcolor="#ffffff">
							              <table border="0" cellpadding="0" cellspacing="0" width="100%">
							                <tr>
							                  <td align="center" bgcolor="#ffffff" style="padding: 12px;">
							                    <table border="0" cellpadding="0" cellspacing="0">
							                      <tr>
							                        <td align="center" bgcolor="#1a82e2" style="border-radius: 6px;">
							                          <a href="https://www.arcinventadorcommunications.com/" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; background-color: #678c40;text-decoration: none; border-radius: 6px;">Click to visit the portal</a>
							                        </td>
							                      </tr>
							                    </table>
							                  </td>
							                </tr>
							              </table>
							            </td>
							          </tr>
							          <!-- end button -->
							          
							          <!-- start copy -->
							          <tr>
							            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
							              <p style="margin: 0;"><b>Thank you!</b><br> </p>
							            </td>
							          </tr>
							          <!-- end copy -->
							        </table>
							      </td>
							    </tr>
							    <!-- end copy block -->
								



							    <!-- start footer -->
							    <tr>
							      <td align="center" bgcolor="#e9ecef" style="padding: 24px;">
							        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
							          <!-- start unsubscribe -->
							          <tr>
							            <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
							              <!-- <p style="margin: 0;">To stop receiving these emails, you can <a href="https://sendgrid.com" target="_blank">unsubscribe</a> at any time.</p> -->
							              <p style="margin: 0;">&copy; <b>Arc-Inventador</b> 2021. All Right Reserved. </p>
							            </td>
							          </tr>
							          <!-- end unsubscribe -->
							        </table>
							      </td>
							    </tr>
							    <!-- end footer -->
							</table>
						</div>
					<!-- </div> -->
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="https://dreamguys.co.in/smarthr/maroon/assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="https://dreamguys.co.in/smarthr/maroon/assets/js/popper.min.js"></script>
        <script src="https://dreamguys.co.in/smarthr/maroon/assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/app.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/maroon/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Mar 2020 18:49:56 GMT -->
</html>