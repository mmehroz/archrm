<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="Register Your Self In Our Recruitment Portal For Your Dream Job | Arc-Inventador">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
<meta name="author" content="Register Your Self In Our Recruitment Portal For Your Dream Job | Arc-Inventador">
<meta name="robots" content="noindex, nofollow">
<title>HRMS</title>
<link rel="shortcut icon" type="image/x-icon" href="{!! asset('public/assets/img/favicon.ico') !!}" />
<!-- <link rel="stylesheet" href="style.scss"> -->

<link rel="stylesheet" href="{!! asset('public/assets/css/logincss/style.css') !!}" />
<link rel="stylesheet" href="{!! asset('public/assets/css/font-awesome.min.css') !!}" />
</head>
<style>
video {
object-fit: cover;
width: 100vw;
height: 100vh;
position: fixed;
top: 0;
left: 0;
}
.field-icon {
float: right;
color: #6f8c51;
font-size: 20px;
margin-left: -25px;
margin-top: -36px;
position: relative;
z-index: 2;
}
</style>

<body>
<section>
<!-- <video width="100%" autoplay muted loop>
<source src="" type="video/mp4" />
<source src="public/kw_assets/1.ogg" type="video/ogg" />
Your browser does not support the video tag.
</video> -->


<div class="form-structor">
<div>
<img src="{!! asset('public/images/arcinventadorLogo-05.png') !!}" alt="" style="margin-left: 50px">
</div>
@if(session('message'))
<div class="account-title" style="color: #fbaa1a;text-align: center;font-size: 24px;font-weight: bold;">{{session('message')}}</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<div> <p><li>{{ $error }}</li></p> </div>
@endforeach
</ul>
</div>
@endif
<form action="{{ URL::to('/candidatelogin')}}" id="frmimage" method="post">
{{ csrf_field() }}
<div class="signup">
<h2 class="form-title" id="signup"><span>or</span>Login</h2>
<div class="form-holder">
<input type="email" class="input" name="username" placeholder="Email" required />
<input type="password" class="input" placeholder="Password" name="pass" id="password-field" required/>
<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" style="color: #0059ef" id="pass-status" onclick="viewPassword()"></span>
</div>
<button class="submit-btn sign-btn">Login</button>
</div>
</form>
<form method="Post" action="{{url('/saveJobee')}}">
{{ csrf_field() }}
<div class="login slide-up">
<div class="center">
<h2 class="form-title" id="login"><span>or</span>Register</h2>
<div class="form-holder">
<input type="email" class="input" name="email" placeholder="Email" />
<input type="password" class="input" placeholder="Password" name="password" id="password-fieldr" min="8" title="Must contain at least eight number" required/>
<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" style="color: #0059ef" id="pass-statusr" onclick="viewPasswordr()"></span>
<input type="password" class="input" placeholder="Confirm Password" name="password_confirmation" min="8" title="Must contain at least eight number" required/>
</div>
<button type="submit" class="submit-btn">Register</button>
</div>
</div>
</form>
</div>
</section>
</body>
<script>
console.clear();

const loginBtn = document.getElementById('login');
const signupBtn = document.getElementById('signup');

loginBtn.addEventListener('click', (e) => {
let parent = e.target.parentNode.parentNode;
Array.from(e.target.parentNode.parentNode.classList).find((element) => {
if (element !== "slide-up") {
parent.classList.add('slide-up')
} else {
signupBtn.parentNode.classList.add('slide-up')
parent.classList.remove('slide-up')
}
});
});

signupBtn.addEventListener('click', (e) => {
let parent = e.target.parentNode;
Array.from(e.target.parentNode.classList).find((element) => {
if (element !== "slide-up") {
parent.classList.add('slide-up')
} else {
loginBtn.parentNode.parentNode.classList.add('slide-up')
parent.classList.remove('slide-up')
}
});
});
function viewPassword()
{
var passwordInput = document.getElementById('password-field');
var passStatus = document.getElementById('pass-status');

if (passwordInput.type == 'password'){
passwordInput.type='text';
passStatus.className='fa fa-fw fa-eye-slash field-icon toggle-password';

}
else{
passwordInput.type='password';
passStatus.className='fa fa-fw fa-eye field-icon toggle-password';
}
}
function viewPasswordr()
{
var passwordInput = document.getElementById('password-fieldr');
var passStatus = document.getElementById('pass-statusr');

if (passwordInput.type == 'password'){
passwordInput.type='text';
passStatus.className='fa fa-fw fa-eye-slash field-icon toggle-password';

}
else{
passwordInput.type='password';
passStatus.className='fa fa-fw fa-eye field-icon toggle-password';
}
}
</script>

</html>