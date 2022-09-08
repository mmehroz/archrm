<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arc-Inventador</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::to('public/images/favicon.ico')}}" />
     <style>
#container {
  height: 458px;
  border-radius: 6px;
}
#container1 {
  height: 458px;
  border-radius: 6px;
}
#container2 {
  height: 458px;
  border-radius: 6px;
}
.desb {
  width: 100%;
}
 input {width:400px; height:30px;}
input,textarea,button {padding:5px 10px; font-family:"Helvetica Neue", "Helvetica", "Arial", sans-serif; font-size:24px; font-weight:300; outline:none; border:none;}
#emojiPickerWrap {margin:10px 0 0 0;}
.field { padding: 20px 0; }
textarea { width: 400px; height: 200px; }
*{
    box-sizing: border-box;
}
.cp{
    width: 100%;
}
.cp .emojiPickerIconWrap{
    width: 83%;
}
.cp .emojiPickerIconWrap input{
    /* width: 100%; */
    outline: none;  
    border: 1px solid #f3f3f3;
    border-radius: 4px;
    background-color: #f3f3f3;
}
.cp .emojiPickerIconWrap input:focus{
    border: none;
    outline: none;
}
.cp button{
width: 45px; 
background-color: #5069e7;
color: white;
height: 40px;
border-radius: 6px;
}
/* REPLY COMMENT */
.reply__box{
    /* display: none; */
    width: 300px;
    padding: 0px 5px;
    height: 40px;
    outline: none;
    background-color: #fff;
    border-radius: 5px;
    resize:none;
    padding-top: 5px;
}

.reply__text{
    cursor: pointer;
    color: #5069e7;
    font-size: 11px;
    font-weight: bold;
    font-size: 13px;
    transition: all 0.3s;
}

.reply__text:hover{
    text-decoration: underline;
}

.view__reply{
    cursor: pointer;
    color: #5069e7;
    font-size: 11px;
    font-weight: bold;
    display: block;
    text-align: right;
    transition: all 0.3s;
}
.view__reply:hover{
    text-decoration: underline;
}

.reply__btn{
    cursor: pointer;
    background-color: #5069e7;
    color: white;
    font-size: 10px;
    padding: 10px 15px;
    border-radius: 5px;
}

.reply__section{
    display: none;
    align-items: center;
}

.replied__cmmnt{
    background-color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    width: 100%;
    margin-bottom: 10px;
    margin-left: 5px;
}

.userName__here{
    font-weight: bold;
    font-size: 12px;
    margin-bottom: 5px;
}

.main__rpSec{
    display: flex;
    margin-left: 10px;
}

.show__replied{
    margin-bottom: 5px;
}






@media screen and (max-width: 1900px) {
  .modal{
      left: 470px !important;
      width:50% !important;
  }
}
@media screen and (max-width: 1800px) {
  .modal{
      left: 450px !important;
      width:50% !important;
  }
}
@media screen and (max-width: 1700px) {
  .modal{
      left: 420px !important;
      width:50% !important;
  }
}
@media screen and (max-width: 1600px) {
  .modal{
      left: 395px !important;
      width:50% !important;
  }
}
@media screen and (max-width: 1500px) {
  .modal{
      left: 375px !important;
      width:50% !important;
    }
}
@media screen and (max-width: 1400px) {
  .modal{
      left: 350px !important;
      width:50% !important;
    }
}
@media only screen and (max-width: 1345px){
    .modal{
        width: 50% !important;
        left: 320px !important;
    }
}
@media screen and (max-width: 1300px){
    .modal{
        width: 50% !important;
        left: 320px !important;

    }
}
</style>
</head>
<!-- Css -->
<link rel="stylesheet" href="{!! asset('public/assets/css/bizzstyle.css') !!}">
<link rel="stylesheet" href="{!! asset('public/assets/css/main.css') !!}">
<!-- bootstrap -->
<link rel="stylesheet" href="{!! asset('public/bizzmain/cdns/bootstrap.min.css') !!}">
<link rel="stylesheet" href="{!! asset('public/bizzmain/fontawsm/fontawesome-free-5.15.3-web/css/all.css') !!}">
<link rel="stylesheet" href="{!! asset('public/bizzmain/fontawsm/fontawesome-free-5.15.3-web/css/all.min.css') !!}">
<link rel="stylesheet" href="{!! asset('public/bizzmain/fontawsm/fontawesome-free-5.15.3-web/css/fontawesome.css') !!}">
<link rel="stylesheet" href="{!! asset('public/bizzmain/fontawsm/fontawesome-free-5.15.3-web/css/fontawesome.min.css') !!}">
<!-- jwquerry -->
<script src="{!! asset('public/bizzmain/cdns/jquery.min.js') !!}"></script>
<script src="{!! asset('public/bizzmain/cdns/popper.min.js') !!}"></script>
<script src="{!! asset('public/bizzmain/cdns/bootstrap.min.js') !!}"></script>

<script src="{!! asset('public/bizzmain/cdns/sweetalert.min.js') !!}"></script>
<link rel="stylesheet" type="text/css" href="{!! asset('public/assets/css/jquery.emojipicker.css') !!}">
<script type="text/javascript" src="{!! asset('public/assets/js/jquery.emojipicker.js') !!}"></script>
<link rel="stylesheet" type="text/css" href="{!! asset('public/assets/css/jquery.emojipicker.tw.css') !!}">
<script type="text/javascript" src="{!! asset('public/assets/js/jquery.emojis.js') !!}"></script>
<style>
    body {
        background-color: #ebebeb;
        font-size: 12px;
    }
    
 /*   .dark-mode {
        background: linear-gradient(to right bottom, #6416ec, #33e0e0);
    }*/
    #upload{
        display: none;
    }
     .comment{
       width: 15%;
       height: 40px;
       outline: none;
       border: none;
       margin-left: 0px !important;
       margin-bottom: 20px;
       margin-right: 8px;


   }
    .comment1{
background-color:#f3f3f3;
padding: 10px;
border-radius: 5px;
width: 99%;
    }
    .comment:hover{
        background-color: white;
        color: #5069e7;
        border: 1px solid #5069e7;
        font-weight: 700;
    }
    .aqua51{
        background-color: rgba(100, 13, 29, 1);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 90%, from (rgba(56, 0, 0, 1)), to (rgba(100, 13, 29, 1)));
    border-top-color: #963d44;
    border-right-color: #5069e7;
    border-bottom-color: #30080881;
    border-left-color: #5069e7;
    }
    .time51{
        /* width: 85px; */
    height: 31px;
    /* padding-bottom: 35px; */
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    /* border: 1px solid #ccc; */
    position: relative;
    line-height: 32px;
    /* padding-left: 16px; */
    font-family: Lucida Sans, Helvetica, sans-serif;
    font-weight: 800;
    color: white;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    
    }
    .time51 .glare51 {
    position: absolute;
    opacity: 0.9;
    top: 0;
    left: 0px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    height: 2px;
    width: 100%;
    padding: 9px;
    background-color: rgba(255, 255, 255, 0.22);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 95%, from(rgba(255, 255, 255, 0.6)), to(rgba(255, 255, 255, 0)));
}
.emojiPickerIcon{
    position: relative;

    top: -38px;
    right: -400px;

}
.scroll2 .emojiPickerIconWrap input {
    position: relative !important;
    top: -36px !important;
    left: 70px !important;
    width: 136% !important;
    background-color: rgb(238, 238, 238) !important;
    color: black !important;
}

.scroll2 .BA  button{
    position: absolute !important;
    top: -112px !important;
    left: 263px !important;
    height: 38px !important;
    background-color: #5069e7!important;
    color: white !important;
    border-radius: 5px;
}

    .BA .emojiPickerIcon {
    height: 38px;
    width: 38px;
    background-color: rgb(238, 238, 238);
    position: relative;
    right: -218px;
    top: -74px;
    }
    @media screen and (min-width: 1201px){
        .cp .emojiPickerIconWrap input{
        position: relative;
    left: 64px !important;
    background: rgb(238, 238, 238) !important;
    border: 1px solid rgb(238, 238, 238) !important;
    width: 108% !important;
    }
    .scroll .cp button {
    background-color: #5069e7!important;
    color: white !important;
    width: 65%;
    position: absolute;
    right: 0px;
    top: -38px;
    left: 578px;
}
.scroll2 .emojiPickerIconWrap input {
    position: relative !important;
    top: -36px !important;
    left: 70px !important;
    width: 110% !important;
    background-color: rgb(238, 238, 238) !important;
    color: black !important;
}
.scroll .vc2 {
    color: #5069e7!important;
    position: absolute;
    top: -8px;
    left: 43px;
}
.scroll2 .BA button {
    position: absolute !important;
    top: -112px !important;
    left: 234px !important;
    height: 38px !important;
    background-color: #5069e7!important;
    color: white !important;
    border-radius: 5px;
    width: 44px;
}
.BA .emojiPickerIcon{
    right: -191px !important; 
}
    }
@media screen and (min-width: 1260px) {
.rounded-circle{
    width: 40px;
    height: 40px;
    position: relative;
    left: 25px;
}
    .cp .emojiPickerIconWrap input{
        position: relative;
    left: 59px;
    background: rgb(238, 238, 238) !important;
    border: 1px solid rgb(238, 238, 238) !important;
    width: 108% !important;
    }
    .emojiPickerIcon{
        height: 38px;
    width: 38px;
    background-color: rgb(238, 238, 238);
    position: relative;
    right: -495px;
    }
    .cp button {
    top: -2px;
    width: 55px;
    background-color: #5069e7;
    color: white;
    height: 40px;
    border-radius: 6px;
    position: relative;
    right: 13px;
}

}
.cp .emojiPickerIconWrap input {

    color: black !important;
}
@media screen and (max-width: 1259px){
    .cp button {
    width: 51px;
    background-color: #5069e7;
    color: white;
    height: 40px;
    border-radius: 6px;
    position: relative;
    right: 9px;
    top: -2px;
            }
            .cp .emojiPickerIconWrap input {
    /* width: 100%; */
    outline: none;
    border: 1px solid #f3f3f3;
    border-radius: 4px;
    background-color: #f3f3f3;
    position: relative;
    left: 16px;
                }
                .rounded-circle{
                    width: 40px;
                    height: 40px;
                    position: absolute;
                    left: 23px;
                }

}
@media screen and (max-width: 1200px){
    .cp .emojiPickerIconWrap input{
        position: relative;
    left: 59px;
    background: rgb(238, 238, 238) !important;
    border: 1px solid rgb(238, 238, 238) !important;
    width: 108% !important;
    }
    .scroll .cp button {
    background-color: #5069e7!important;
    color: white !important;
    width: 65%;
    position: absolute;
    right: 0px;
    top: -38px;
    left: 538px;
}
.scroll2 .rounded-circle {
    width: 40px !important;
    height: 40px !important;
    position: absolute !important;
    left: 23px !important;
}
}
@media screen and (max-width: 1000px){
.scroll .cp button {
    background-color: #5069e7!important;
    color: white !important;
    width: 42%;
    position: absolute;
    right: 0px;
    top: -38px;
    left: 467px;
}
}
@media screen and (min-width: 1300px){
    .cp .emojiPickerIconWrap input{
        position: relative;
    left: 64px;
    background: rgb(238, 238, 238) !important;
    border: 1px solid rgb(238, 238, 238) !important;
    width: 108% !important;
    }
    .scroll .cp button {
    background-color: #5069e7!important;
    color: white !important;
    width: 65%;
    position: absolute;
    right: 0px;
    top: -38px;
    left: 583px;
}.scroll .vc2 {
    color: #5069e7!important;
    position: absolute;
    top: -8px;
    left: 43px;
}
.scroll2 .BA button {
    position: absolute !important;
    top: -110px !important;
    left: 263px !important;
    height: 38px !important;
    background-color: #5069e7!important;
    color: white !important;
    border-radius: 5px;
    width: 44px;
}
.BA .emojiPickerIcon{
    right: -219px !important; 
}
}
@media screen and (min-width: 1400px){
    .scroll2 .BA button{
        position: absolute !important;
        top: -112px !important;
        left: 283px !important;
        height: 38px !important;
        background-color: #5069e7!important;
        color: white !important;
        border-radius: 5px;
    }
        .cp .emojiPickerIconWrap input{
        position: relative;
        left: 73px;
        background: rgb(238, 238, 238) !important;
        border: 1px solid rgb(238, 238, 238) !important;
        width: 108% !important;
        }
        .scroll .cp button {
        background-color: #5069e7!important;
        color: white !important;
        width: 65%;
        position: absolute;
        right: 0px;
        top: -38px;
        left: 630px;}

    .scroll .cp .emojiPickerIcon {
        position: absolute;
        top: 0px;
        right: -124px;
                        }
    .scroll .vc2 {
        color: #5069e7!important;
        position: absolute;
        top: -8px;
        left: 52px;
                }
     .BA .emojiPickerIcon {
        right: -236px !important;
    }
    
}

@media screen and (min-width: 1500px){
    .cp .emojiPickerIconWrap input{
        position: relative;
    left: 70px;
    background: rgb(238, 238, 238) !important;
    border: 1px solid rgb(238, 238, 238) !important;
    width: 110% !important;
    }
    .scroll .cp button {
    background-color: #5069e7!important;
    color: white !important;
    width: 65%;
    position: absolute;
    right: 0px;
    top: -38px;
    left: 676px;
}
.scroll .cp .emojiPickerIcon {
    position: absolute;
    top: 0px;
    right: -138px;
}
.scroll .vc2 {
    color: #5069e7!important;
    position: absolute;
    top: -8px;
    left: 52px;
}
.scroll2 .emojiPickerIconWrap input {
    position: relative !important;
    top: -36px !important;
    left: 70px !important;
    width: 170% !important;
    background-color: rgb(238, 238, 238) !important;
    color: black !important;
}
.scroll2 .BA button {
    position: absolute !important;
    top: -112px !important;
    left: 306px !important;
    height: 38px !important;
    background-color: #5069e7!important;
    color: white !important;
    border-radius: 5px;
}
.BA .emojiPickerIcon {
    right: -263px !important;
}
}
/* @media screen and (min-width: 1500px){
    .scroll .cp button {
    background-color: #5069e7!important;
    color: white !important;
    width: 65%;
    position: absolute;
    right: 0px;
    top: -38px;
    
}
} */
/* .BA .emojiPickerIconWrap input{
    position: relative !important;
    top: -36px !important;
    left: 72px !important;
    width: 110% !important;
    background-color: rgb(238, 238, 238) !important;
    color: black !important;
}
.BA .emojiPickerIcon {
    height: 38px;
    width: 38px;
    background-color: rgb(238, 238, 238);
    position: relative;
    right: -222px;
    top: -73px;
}
.BA button{
    position: absolute !important;
    top: -110px;
    left: 263px;
    height: 38px;
    background-color: #5069e7!important;
    color: white !important;
    border-radius: 5px;
} */
.scroll .vc {
    cursor: pointer;
    color: #5069e7!important;
    font-weight: bold !important;
    
}

@media screen and (min-width: 1600px){
    .cp .emojiPickerIconWrap input{
        position: relative;
    left: 70px;
    background: rgb(238, 238, 238) !important;
    border: 1px solid rgb(238, 238, 238) !important;
    width: 110% !important;
    }
    .scroll .cp button {
    background-color: #5069e7!important;
    color: white !important;
    width: 65%;
    position: absolute;
    right: 0px;
    top: -38px;
    left: 719px;
}
.scroll2 .BA button {
    position: absolute !important;
    top: -112px !important;
    left: 332px !important;
    height: 38px !important;
    background-color: #5069e7!important;
    color: white !important;
    border-radius: 5px;
}
.scroll2 .emojiPickerIconWrap input {
    position: relative !important;
    top: -36px !important;
    left: 70px !important;
    width: 185% !important;
    background-color: rgb(238, 238, 238) !important;
    color: black !important;
}
.BA .emojiPickerIcon {
    right: -284px !important;
}
}

</style>
<script>
 $(function() {
    $("#upload_link ").on('click', function(e) {
     e.preventDefault();
     $("#upload:hidden ").trigger('click');
     });
});
</script>

<?php
$chaturl = "http://80.240.16.149:3000";
$crmurl = "http://80.240.16.149:4000";
$emailurl = "http://80.240.16.149:5000";
?>

<body>
    <!-- nav bar -->
    <section class="nav1 ">
        <!-- Nav tabs -->
        <div class="time12 aqua12">
            <div class="glare12"></div>
            <nav class="navbar navbar-expand-lg">
                @if($data->roleid <= 2)
                <a href="{{URL::to('adminDashboard')}}">
                <img src="{{URL::to('public/bizzmain/logo-03.svg')}}" alt="">
                @elseif($data->roleid == 3)
                <a href="{{URL::to('managerDashboard')}}">
                <img src="{{URL::to('public/bizzmain/logo-03.svg')}}" alt="">
                @else
                <img src="{{URL::to('public/bizzmain/logo-03.svg')}}" alt="">
                @endif
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0 text-center">
                        <li class="nav-item active">
                            <a class="nav-link active" href="index.html">Time <p class="ctime"></p><span
                            class="sr-only">(current)</span></a>
                        </li>
                        <li class="vl"></li>

                        <li class="nav-item">
                            <a  class="nav-link" href="./Contact/contact.html">Date <p><?php echo(date('d-F-Y'))?></p></a>
                        </li>
                        
                        <li class="vl"></li>
                        <li class="nav-item">
                            <a id="toggle_btn" onclick="mydark()" class="nav-link">Mode <p><i class="fa fa-adjust" aria-hidden="true"></i></p></a>
                        </li>
                        @if(session()->get("dptid") == 4 AND session()->get("role") == 4)
                        <li class="nav-item">
                            <a href="{{url('/itticketrequest')}}" target="_blank" class="nav-link">IT Support <p><i class="fa fa-bell" aria-hidden="true"></i></p></a>
                        </li>
                        @endif
                        <li class="vl"></li>
                        <li class="nav-item dropdown has-arrow main-drop mt-2">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <span class="user-img">
            <!-- <img src="{!! asset('public/assets/img/profiles/avatar-00.jpg') !!}" alt=""> -->
            <img src="{{URL::to('public/img/')}}/{{session()->get("image")}}" alt="">
        <span class="status online"></span></span>
                                <span>{{session()->get("name")}}</span>
                            </a>
                            <div class="dropdown-menu">
                                <!--<a class="dropdown-item" href="{{url('/employeeprofile')}}">My Profile</a>-->
                                <a class="dropdown-item" style="color: black;" href="#" onclick="return viewprofile({{$data->elsemployees_empid}});"><i class="fa fa-user" style="padding-right: 7px; font-size: 12px;"></i>My Profile</a>
                                <?php 
                                if(date('h:i:s A') > "12:01:00 AM")
                                {
                                ?>
                                <a class="dropdown-item" style="color: black;" href="{{url('/usertimein')}}"><i class="fa fa-key" style="padding-right: 7px; font-size: 12px;"></i>Time In</a>
                                  <?php
                                }
                                //portal timein start
                                    $cdate = date('Y-m-d');
                                    $gettimeindate = date('Y-m-d', strtotime('-1 day', strtotime($cdate)));
                                    $gettodaystimein = DB::connection('mysql')->table('attendance')
                                    ->where('attendance.elsemployees_empid','=', session()->get('batchid')) 
                                    ->where('attendance.attendance_date','=', date('Y-m-d')) 
                                    ->orwhere('attendance.attendance_date','=', $gettimeindate) 
                                    ->select('attendance.*')
                                    ->first();
                                    $gettodaystimeout = DB::connection('mysql')->table('attendancetimeout')
                                    ->where('attendancetimeout.elsemployees_empid','=', session()->get('batchid')) 
                                    ->where('attendancetimeout.attendance_date','=', date('Y-m-d')) 
                                    ->select('attendancetimeout.*')
                                    ->first();
                                    // dd($gettodaysattendance);
                                    if (isset($gettodaystimein) != null && isset($gettodaystimeout) == null) {
                                    ?>
                                <a class="dropdown-item" style="color: black;" href="{{url('/usertimeout')}}"><i class="fa fa-key" style="padding-right: 7px; font-size: 12px;"></i>Time Out</a>
                            <?php }?>
                                <a class="dropdown-item" style="color: black;" href="{{url('/')}}"><i class="fa fa-power-off" style="padding-right: 7px;  font-size: 12px;"></i>Logout</a>
                                <a class="dropdown-item" style="color: black;" href="{{url('/chapass')}}"><i class="fa fa-key" style="padding-right: 7px; font-size: 12px;"></i>Change Password</a>
                                <!-- <a class="dropdown-item" href="{{url('/getimage')}}">Select Image</a> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>


    <!-- banner section
     -->
    <section class="main m-0 p-0">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-9 col-md-9 col-sm-12 ">
                    <div class="row ">
                        <div class="col-12 ">
                            <div class="banner ">
                                @if($data->elsemployees_coverimage == null)
                                <img src="{{URL::to('public/img/defaultcover.png')}}" alt=" ">
                                @else
                                <img src="{{URL::to('public/coverimage/')}}/{{$data->elsemployees_coverimage}}" alt=" ">
                                @endif
                            </div>
                        </div>
                        <div class="col-6" style="cursor: pointer;" onclick="getcover()">
                            <div style="opacity:0.7 ; border-radius: 4px; background: linear-gradient(to right bottom, #6416ec, #33e0e0); color: white; margin-top: -285px; padding-top: 2px; margin-left: 17px; width: 25px; height: 25px;border-radius: 50%;  text-align: center;">
                                <i class="fa fa-camera"></i>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row ">
                            <div class="col-lg-4 col-md-4 col-sm-12 ">
                                <div class="left-side ">
                                    <div class="row no-gutters ">
                                        <div class="col-6 ">
                                            <div class="profile">
                                            @if($data->elsemployees_image == null)
                                            <img src="{{URL::to('public/img/no_image.jpg')}}" alt=" ">
                                            @else
                                            <img src="{{URL::to('public/img/')}}/{{$data->elsemployees_image}}" alt=" ">
                                            @endif
                                            </div>
                                        </div>


                                        <div class="col-6 ">
                                            <div class="userd">

                                            <h6 style="color: #5069e7; font-weight: 700; ">{{$data->elsemployees_name}}</h6>
                                            <h6 class="pro ">{{$data->DESG_NAME}}</h6>
                                            <h6 class="pro " style="font-style: italic; ">{{$data->dept_name}}</h6>
                                            </div>
                                        </div>
                                        <div class="col-6" onclick="getimage()" style="cursor: pointer;">
                                            <!-- <div style="opacity:0.9 ; border-radius: 4px; background: linear-gradient(to right bottom, #6416ec, #33e0e0); color: white; font-size: 10px; margin-top: -27px; text-align: center; margin-left: 10px;    width: 101px;">
                                                Upload Profile Photo
                                            </div> -->
                                        </div>

                                    </div>
                                </div>
                                @if(session('message'))
                                  <div><p class="alert alert-success" >{{session('message')}}</p> </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <div>   <p><li>{{ $error }}</li></p> </div>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <!-- ID -->
                                <div class="id ">
                                    <div class="row ">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 font-weight-bold ">Batch ID:</div>
                                        <div class="col-lg-8 col-md-8 col-sm-6 col-6 d-flex ">{{$data->elsemployees_batchid}}</div>
                                        <div class=" hor ml-auto mr-auto "></div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-6 font-weight-bold ">CNIC:</div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-6 d-flex ">{{$data->elsemployees_cnic}}</div>
                                        <div class="hor ml-auto mr-auto "></div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-6 font-weight-bold ">Cell:</div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-6 d-flex ">{{$data->elsemployees_cno}}</div>
                                        <div class="hor ml-auto mr-auto "></div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-6 font-weight-bold ">Email</div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-6 d-flex ">{{$data->elsemployees_email}}</div>
                                        <div class="hor ml-auto mr-auto "></div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-6 font-weight-bold ">Department</div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-6 d-flex ">{{$data->dept_name}}</div>
                                        <div class="hor ml-auto mr-auto "></div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-6 font-weight-bold ">Designation</div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-6 d-flex ">{{$data->DESG_NAME}}</div>
                                        <div class="hor ml-auto mr-auto "></div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-6 font-weight-bold ">Joining Date:</div>
                                        <div class="col-lg-8 col-md-8 col-6 d-flex ">{{$data->elsemployees_dofjoining}}</div>
                                        <div class="hor ml-auto mr-auto "></div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-6 font-weight-bold ">Date Of Birth:</div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-6 d-flex ">{{$data->elsemployees_dofbirth}}</div>
                                        <div class="hor ml-auto mr-auto "></div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-6 font-weight-bold ">Reporting To:</div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-6 d-flex ">{{$data->reportingto}}</div>
                                    </div>
                                </div>
                                <!-- message -->
                                <div class="mess ">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 ">

                                            <!-- <div class="time15 aqua15 text-center "  >
                                                <div class="glare15"></div>
                                                
                                                <button type="button" name="rd" id="rd" value="1" checked>
                                                Mission</button>
                                            
                                            </div> -->
                                            <button class="time15 aqua15" type="button" name="rd" id="rd" value="1" checked style="padding:0px; color: white">
        
                                                <div class="glare15 "></div>
           
                                                 Mission
                                            </button>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 ">
                                            <!-- <div class="time15 aqua15 text-center ">
                                                <div class="glare15"></div>
                                             
                                                <button type="button" name="rd" id="rd" value="2">
                                                Vission</button>
                                              
                                            </div> -->
                                            <button class="time15 aqua15" type="button" name="rd" id="rd" value="2" style="color: white; padding: 0px;">
        
                                                <div class="glare15 "></div>
                                                Vision
        
                                            </button>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 ">
                                            <!-- <div class="time15 aqua15 text-center ">
                                                <div class="glare15"></div>
                                                <button type="button" name="rd" id="rd" value="3">
                                                value</button>
                                            </div> -->
                                            <button class="time15 aqua15" type="button" name="rd" id="rd" value="3" style="color: white; padding: 0px;">
        
                                                <div class="glare15 "></div>
                                                Value
        
                                            </button>
                                        </div>
                                    </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 desc" id="div1">
                                            <br>
                                            <p style="text-align: justify;">At Arc-Inventadors, Every person in our company is a member of the team and a team player with the expectation and need that they perform their duties to their fullest capacity and potential.Our objective is a commitment to the highest quality customer service. The client satisfaction is our main focus, reached through innovative and cost effective services.<span id="dots">...</span><span id="more" style="display: none"> We focus on creating the economic and social values for your business on global scale by providing a trustable workplace where you can connect, collaborate and attain the success.</span></p>
                                            <hr>
                                            <p style="font-style: italic; font-weight: bold; font-size: 16px; color: #5069e7; text-align: center; width: 100%; margin: 0 auto; " class="ml-auto mr-auto ">
                                                "Mission"
                                            </p>
                                            <br>
                                            <button onclick="mymission()" id="myBtn" class="readmore">Read more</button>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 desc" id="div2" style="display: none;">
                                            <br>
                                            <p style="text-align: justify;">Arc-Inventadors is an extremely innovative company that is always open to unique ideas. We are always looking at new ways to improve our operations and the process of customer services.<span id="dots">...</span><span id="more1" style="display: none">Arc-Inventadors difference is in the details. We take the time to understand the challenges that our clients are facing and then we assist them in developing a solution program that works for their unique needs that fits in their budget.</span></p>
                                            <hr>
                                            <p style="font-style: italic; font-weight: bold; font-size: 16px; color: #5069e7; text-align: center; width: 100%; margin: 0 auto; " class="ml-auto mr-auto ">
                                                "Vision"
                                            </p>
                                            <br>
                                            <button onclick="myvission()" id="myBtn1" class="readmore">Read more</button>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 desc" id="div3" style="display: none;">
                                            <br>
                                            <p style="text-align: justify;"><li>Honesty, Integrity & Fairness in all dealings 'Be passionate & determined</li><span id="dots">...</span><span id="more2" style="display: none"><li>Following the Highest Standard of Professionalism.</li>
                                                <li>Contributing to society and demonstrating corporate responsibility.</li>
                                                <li>Relentlessly strive to get better.</li>
                                                <li>Deliver 100% client satisfaction.</li></span></p>
                                            <hr>
                                            <p style="font-style: italic; font-weight: bold; font-size: 16px; color: #5069e7; text-align: center; width: 100%; margin: 0 auto; " class="ml-auto mr-auto ">
                                                "Value"
                                            </p>
                                            <br>
                                            <button onclick="myvalue()" id="myBtn2" class="readmore">Read more</button>
                                        </div>
                                    
                                </div>
                                <div class="bio bio1" style="height: 538px; overflow-y: scroll !important; background-color: white; margin-top: 15px; border-radius: 4px;">
                                        <div class="col-lg-12 col-md-12 col-sm-12 m-0 p-0">
                                <div class="ann">
                                    <div class="time11 aqua11">
                                        <div class="glare11"></div>
                                        <h5>Employee Birthday & Anniversary..</h5>

                                    </div>
                                    <div class="pt2" style="background-color: white; width: 100%; ; height: 35px; margin-bottom: -20px;"></div>
                                </div>
                            <div class="scroll" style="height: 1320px;">
                                @if(isset($data->bdannouncementtitle))
                                <?php
                                $indexannbd=0;
                                ?>
                                @foreach($data->bdannouncementtitle as $val)
                                    <div class="scroll1 scroll2">
                                        <div class="row py-1">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <img class="imgtog ann-logo" src="{{URL::to('public/bizzmain/logo-gray.svg')}}" alt="" style="width: 100px !important;">
                                                <img class="imgtog ann-logo" src="{{URL::to('public/bizzmain/logo-gray.svg')}}" alt="" style="display: none; width: 100px !important">
                                                
                                            </div>
                                            <div class="col-6 text-right">
                                                <div class="date">
                                                    <?php
                                                    $bdannouncementdate = explode(" ", $data->bdannouncementdate[$indexannbd]);
                                                    $formatedbdannouncementdate = date("d-F-Y", strtotime($bdannouncementdate[0]));  
                                                    ?>
                                                    <p>{{$formatedbdannouncementdate}}</p>
                                                </div>

                                            </div>
                                                 <div class="col-lg-12 col-md-12 col-sm-12 py-2">
                                                <h4>
                                                   {{$data->bdannouncementtitle[$indexannbd]}}
                                                </h4>    
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p class="para">
                                                   {!!$data->bdannouncementdesc[$indexannbd]!!}
                                                </p>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="sec">
                                                    <img src="{{URL::to('public/announcement/')}}/{{$data->bdannouncementimage[$indexannbd]}}" alt="">
                                                </div>
                                            </div>
                                           <!--  <div class="col-12 text-right">
                                                <button class="time51 aqua51 comment" onclick="submitcomment({{$data->bdannouncementid[$indexannbd]}})">
                                                    <div class="glare51"></div>
                                                    <i class="fas fa-comments"> Comment</i>
                                                </button>
                                            </div> -->
                                            <div class="row p-0 mt-3 d-flex justify-content-center">
                                                <div class="BA">
                                            <div class="col-2 p-0">
                                                <img class="rounded-circle" src="{{URL::to('public/img/')}}/{{session()->get("image")}}" alt="">
                                            </div>
                                            <div class="col-8 p-0">
                                                <div class="">
                                                <input type="text" class="form-control" name="" id="input-default{{$data->bdannouncementid[$indexannbd]}}" class="emojiable-option d-flex justify-content-center" placeholder="Type Comment" >

                                                </div>

                                                </div>
                                            <div class="col-2">
                                                <button onclick="submitcomment({{$data->bdannouncementid[$indexannbd]}})"><span><i class="fas fa-paper-plane"></i></span></button>
                                            </div>
                                            </div>
                                                <script>
                                                    $(document).ready(function () {
                                                    $('#input-default'+<?php echo ($data->bdannouncementid[$indexannbd]);?>).emojiPicker();
                                                    });
                                                </script>
                                            </div>
                                            <?php
                                            $getcommentall = DB::connection('mysql')->table('commentpost')
                                            ->join('elsemployees','elsemployees.elsemployees_empid', '=','commentpost.created_by')
                                            ->where('commentpost.announcement_id','=',$data->bdannouncementid[$indexannbd])
                                            ->whereIn('commentpost.commentpost_status',["Pending","Approved"])
                                            ->select('commentpost.commentpost_id','commentpost.commentpost_comment','commentpost.created_at','elsemployees.elsemployees_name','elsemployees.elsemployees_image')
                                            ->orderByDesc('commentpost_id')
                                            ->limit(0)
                                            ->get();
                                            ?>
                                            @foreach($getcommentall as $getcommentsalls)
                                            <?php
                                            $commentdate = explode(' ', $getcommentsalls->created_at);
                                            $formatedcommentdate = date("d-F-Y", strtotime($commentdate[0]));  
                                            ?>
                                            
                                            
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-xl-1 col-lg-2 col-md-1 col-1 pt-3">
            
                                                        <img src="{{URL::to('public/img/')}}/{{$getcommentsalls->elsemployees_image}}" class="rounded-circle" alt="" style="width: 40px; height: 40px;">
                                                    </div>
                                                    <div class="col-xl-11 col-lg-10 col-md-11 col-11">
                                                        <div class="comment1">
                                                            <div class="row no-gutters">
                                                                <div class="col-6"><h6>{{$getcommentsalls->elsemployees_name}}</h6></div>
                                                                <div class="col-6 text-right"><p>{{$formatedcommentdate}}</p></div>
                                                            </div>
                                                            <p style="padding-left: 0px !important;">
                                                                {{$getcommentsalls->commentpost_comment}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div style="color: white">.</div>
                                            @endforeach
                                        </div>
                                    </div>
                                     <div class="row cp d-flex ml-2 ">
                                    <div class="col-sm-8">
                                    <a class="vc" style="cursor: pointer; color: #5069e7; font-weight: bold;" onclick="viewdetails({{$data->bdannouncementid[$indexannbd]}})">Click To View Comments</a>
                                    </div>
                                    </div><br>
                                    <div class="hor ml-auto mr-auto mb-3" style="width: 95%; border-bottom: 2px solid #5069e7; margin-top: px;"></div>
                                <?php
                                $indexannbd++;
                                ?>
                                @endforeach
                                @endif
                                </div>
                            </div>
                                    </div>
                            </div>
                            <script>
                                function mymission() {
                                  var dots = document.getElementById("dots");
                                  var moreText = document.getElementById("more");
                                  var btnText = document.getElementById("myBtn");

                                  if (dots.style.display === "none") {
                                    dots.style.display = "inline";
                                    btnText.innerHTML = "Read more";
                                    moreText.style.display = "none";
                                  } else {
                                    dots.style.display = "none";
                                    btnText.innerHTML = "Read less";
                                    moreText.style.display = "inline";
                                  }
                                }
                                function myvission() {
                                  var dots = document.getElementById("dots");
                                  var moreText = document.getElementById("more1");
                                  var btnText = document.getElementById("myBtn1");

                                  if (dots.style.display === "none") {
                                    dots.style.display = "inline";
                                    btnText.innerHTML = "Read more";
                                    moreText.style.display = "none";
                                  } else {
                                    dots.style.display = "none";
                                    btnText.innerHTML = "Read less";
                                    moreText.style.display = "inline";
                                  }
                                }
                                function myvalue() {
                                  var dots = document.getElementById("dots");
                                  var moreText = document.getElementById("more2");
                                  var btnText = document.getElementById("myBtn2");

                                  if (dots.style.display === "none") {
                                    dots.style.display = "inline";
                                    btnText.innerHTML = "Read more";
                                    moreText.style.display = "none";
                                  } else {
                                    dots.style.display = "none";
                                    btnText.innerHTML = "Read less";
                                    moreText.style.display = "inline";
                                  }
                                }
                            </script>
                            <!-- AScroll -->
                            <div class="col-lg-8 col-md-8 col-sm-12 m-0 p-0">
                                <div class="ann ">
                                    <div class="time11 aqua11">
                                        <div class="glare11"></div>
                                        <h5>Announcement</h5>

                                    </div>
                                    <div class="pt2" style="background-color: white; width: 100%; ; height: 35px; margin-bottom: -20px;"></div>
                                </div>
                            <div class="scroll" style="height: 1374px;">
                                @if(isset($data->allannouncementtitle))
                                <?php
                                $indexannall=0;
                                ?>
                                @foreach($data->allannouncementtitle as $val)
                                    <div class="scroll1 scroll3">
                                        <div class="row py-3">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                <img class="imgtog ann-logo" src="{{URL::to('public/bizzmain/logo-gray.svg')}}" alt="" style="width: 100px !important;">
                                                <img class="imgtog ann-logo" src="{{URL::to('public/bizzmain/logo-gray.svg')}}" alt="" style="display: none; width: 100px !important;">
                                                <script>
                                                    $(document).ready(function() {
                                                        $("#toggle_btn").click(function() {
                                                            $(".imgtog").toggle();
                                                            
                                                        });
                                                    });
                                                </script>
                                            </div>
                                            <div class="col-6 text-right">
                                                <div class="date">
                                                    <?php
                                                    $allannouncementdate = explode(" ", $data->allannouncementdate[$indexannall]);
                                                    $formatedallannouncementdate = date("d-F-Y", strtotime($allannouncementdate[0]));  
                                                    ?>
                                                    <p>{{$formatedallannouncementdate}}</p>
                                                </div>

                                            </div>
                                                 <div class="col-lg-12 col-md-12 col-sm-12 py-2">
                                                <h4>
                                                   {{$data->allannouncementtitle[$indexannall]}}
                                                </h4>    
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p class="para">
                                                   {!!$data->allannouncementdesc[$indexannall]!!}
                                                </p>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="sec">
                                                    <?php
                                                    $getexplode = explode(".", $data->allannouncementimage[$indexannall]);
                                                    $getextension = end($getexplode);
                                                    $allowedimageext = array('jpeg','bmp','png','jpg','gif');
                                                    if (in_array($getextension, $allowedimageext)) {
                                                    ?>
                                                    @if($data->allannouncementimage[$indexannall] != "no_image.jpg")
                                                    <img src="{{URL::to('public/announcement/')}}/{{$data->allannouncementimage[$indexannall]}}" alt="">
                                                    @endif
                                                    <?php
                                                    }else{
                                                    ?>
                                                    <video width="100%" autoplay muted loop>
                                                    <source src="{{URL::to('public/announcement/')}}/{{$data->allannouncementimage[$indexannall]}}" type="video/mp4" />
                                                    </video>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                           <!--  <div class="col-12 text-right">
                                                <button class="time51 aqua51 comment" onclick="submitcomment({{$data->allannouncementid[$indexannall]}})">
                                                    <div class="glare51"></div>
                                                    <i class="fas fa-comments"> Comment</i>
                                                </button>
                                            </div> -->
                                            <div class="row cp p-0 mt-3 d-flex justify-content-center">
                                                <div class="cp">
                                            <div class="col-1 p-0">
                                                <img class="rounded-circle" style="width: 40px; height: 40px" src="{{URL::to('public/img/')}}/{{session()->get("image")}}" alt="">
                                            </div>
                                            <div class="col-10 p-0">
                                                <div class="cp cp2">
                                                <input type="text" class="form-control contr2" name="" id="input-default{{$data->allannouncementid[$indexannall]}}" class="emojiable-option d-flex justify-content-center" placeholder="Type Comment" >

                                                </div>

                                                </div>
                                            <div class="col-2">
                                                <button onclick="submitcomment({{$data->allannouncementid[$indexannall]}})"><span><i class="fas fa-paper-plane"></i></span></button>
                                            </div>
                                            </div>
                                                <script>
                                                    $(document).ready(function () {
                                                    $('#input-default'+<?php echo ($data->allannouncementid[$indexannall]);?>).emojiPicker();
                                                    });
                                                </script>
                                            </div>
                                            <?php
                                            $getcommentall = DB::connection('mysql')->table('commentpost')
                                            ->join('elsemployees','elsemployees.elsemployees_empid', '=','commentpost.created_by')
                                            ->where('commentpost.announcement_id','=',$data->allannouncementid[$indexannall])
                                            ->whereIn('commentpost.commentpost_status',["Pending","Approved"])
                                            ->select('commentpost.commentpost_id','commentpost.commentpost_comment','commentpost.created_at','elsemployees.elsemployees_name','elsemployees.elsemployees_image')
                                            ->orderByDesc('commentpost_id')
                                            ->limit(0)
                                            ->get();
                                            ?>
                                            @foreach($getcommentall as $getcommentsalls)
                                            <?php
                                            $commentdate = explode(' ', $getcommentsalls->created_at);
                                            $formatedcommentdate = date("d-F-Y", strtotime($commentdate[0]));  
                                            ?>
                                            
                                            
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-xl-1 col-lg-2 col-md-1 col-1 pt-3">
            
                                                        <img src="{{URL::to('public/img/')}}/{{$getcommentsalls->elsemployees_image}}" class="rounded-circle" alt="" style="width: 40px; height: 40px;">
                                                    </div>
                                                    <div class="col-xl-11 col-lg-10 col-md-11 col-11">
                                                        <div class="comment1">
                                                            <div class="row no-gutters">
                                                                <div class="col-6"><h6>{{$getcommentsalls->elsemployees_name}}</h6></div>
                                                                <div class="col-6 text-right"><p>{{$formatedcommentdate}}</p></div>
                                                            </div>
                                                            <p style="padding-left: 0px !important;">
                                                                {{$getcommentsalls->commentpost_comment}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div style="color: white">.</div>
                                            @endforeach
                                        </div>
                                    </div>
                                     <div class="row cp d-flex ml-2 ">
                                    <div class="col-sm-8">
                                    <a class=" vc2" style="cursor: pointer; color: #5069e7; font-weight: bold;" onclick="viewdetails({{$data->allannouncementid[$indexannall]}})">Click To View Comments</a>
                                    </div>
                                    </div><br>
                                    <div class="hor ml-auto mr-auto" style="width: 95%; border-bottom: 2px solid #5069e7; margin-top: 10px;"></div>
                                <?php
                                $indexannall++;
                                ?>
                                @endforeach
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- boxes -->
                    
                    
                    <!-- Score -->
                    
</div>
 <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="row1">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-6" style="cursor: pointer;">
                                <div class="time aqua">
                                    <div class="glare"></div>
                                        <a class="abc" href="#" style="text-decoration: none; "><span><i class=" abc fa fa-fingerprint"></i></span> <?php $year = date("Y");
                                        $month = date("m"); $timein = DB::connection('sqlsrv')->table('Checkinout')
                                        ->where('Checkinout.Userid','=',$data->elsemployees_batchid)
                                        ->where('Checkinout.CheckType','!=','2')
                                        ->where('Checkinout.CheckType','!=','1')
                                        ->whereYear('Checkinout.CheckTime', $year)
                                        ->whereMonth('Checkinout.CheckTime', $month)
                                        ->select('Checkinout.*')
                                        ->orderBy('Checkinout.CheckTime', 'DESC')
                                        ->first();
                                        if(isset($timein->CheckTime)){
                                        $explodetime = explode(' ', $timein->CheckTime);
                                        $fingertimein = date('h:i:s A', strtotime($explodetime[1]));
                                        }else{
                                        $fingertimein = "-";
                                        }
                                         echo($fingertimein)?></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6">
                                    <div class="time aqua " style="cursor: pointer;">
                                    <div class="glare "></div>
                                    <a class="abc" href="# " style="text-decoration: none;"><span><i class="abc fa fa-clipboard-check "></i></span><?php $year = date("Y"); $month = date("m"); $portalattendance = DB::connection('mysql')->table('attendance')
                                                ->where('attendance.elsemployees_empid','=',$data->elsemployees_batchid)
                                                ->where('attendance.attendance_month','=',$month)
                                                ->where('attendance.attendance_date','=',date('Y-m-d'))
                                                ->select('attendance.attendance_mark','attendance.attendance_date')
                                                ->first(); 
                                                if(isset($portalattendance->attendance_date)){
                                                if($portalattendance->attendance_date == date('Y-m-d')){
                                                $portaltime = date('h:i:s A', strtotime($portalattendance->attendance_mark));
                                                }}else{
                                                $portaltime = "-";
                                                }
                                                echo($portaltime)?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- remind -->
                    <div class="remind">
                        <div class="row">


                            <div class="col-6" style="cursor: pointer;" onclick="empreminder()">
                                <div class="time2 aqua2 ">
                                    <div class="glare2 "></div>
                                     <div class="row ">
                                        <div class="col-6">
                                            <a class="abc" href="# " style="text-decoration: none; color: rgba(255, 253, 253, 0.856);background-color: transparent; font-size: 12px"><span><i class="abc msgs fa fa-bell " style="background-color: transparent;"></i></span> Reminder</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-6" style="cursor: pointer;" onclick="complain()">
                                <div class="time2 aqua2 ">
                                    <div class="glare2 "></div>
                                     <div class="row ">
                                        <div class="col-6">
                                            <a class="abc" href="# " style="text-decoration: none; color: rgba(255, 253, 253, 0.856);background-color: transparent; font-size: 12px"><span><i class="abc msgs fas fa-mail-bulk " style="background-color: transparent; font-size: 15px"></i></span> Complain To HR</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="remind" style="cursor: pointer;">
                        <div class="row">
                            <div class="col-12" style="cursor: pointer;" onclick="itticket()">
                                <div class="time2 aqua2">
                                    <div class="glare2"></div>
                                     <div class="row">
                                        <div class="col-12">
                                            <div>
                                            <a class="abc" href="# " style="text-decoration: none; color: rgba(255, 253, 253, 0.856);background-color: transparent; font-size: 12px"><span><i class="abc msgs fas fa-mail-bulk " style="background-color: transparent; font-size: 15px"></i></span> Ticket To IT</a>
                                            </div>

                                            @if($checkreview != null)
                                            <div><p class="alert alert-success" style="position: absolute;top: 0px;height: 1px;background-color: transparent !important;border: none !important;">Please Submit Review</p> </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info ">
                        <div class="row ">
                          <!--   <div class="col-lg-6 col-md-6 col-sm-6  " onclick="bizzcall({{$data->elsemployees_ext}})"  style="cursor: pointer;" >
                                <a href="#" >
                                    <div class="time13 aqua13 ">
                                        <div class="glare13 "></div>
                                        <a class="abc" href="# " style="text-decoration: none;"><span><i class="abc msgs fa fa-phone-volume "></i></span> Phone</a>
                                    </div>
                                </a>
                            </div> -->
                            <!-- <div class="col-lg-6 col-md-6 col-sm-6" target="_blank" style="cursor: pointer;" >
                                <a href="{{url('/composeemail')}}" >
                                    <div class="time13 aqua13 ">
                                        <div class="glare13 "></div>
                                        <a class="abc" target="_blank" href="{{url('/composeemail')}}" style="text-decoration: none;"><span><i class="abc msgs fa fa-envelope-open-text "></i></span> Compose</a>
                                    </div>
                                </a>
                            </div> -->
                            <div class="col-lg-4 col-md-4 col-sm-4  " style="cursor: pointer;" onclick="commingsoon()">
                                <a href="#" >
                                <div class="time13 aqua13 ">
                                    <div class="glare13 "></div>
                                    <a class="abc" id="upload_link" target="_blank" href="#" style="text-decoration: none; color: rgba(255, 253, 253, 0.856); "><span><i class="abc msgs fa fa-envelope"></i></span> Email</a>
                                </div>
                                </a>
                            </div>
           
                            <!-- <div class="col-4 "> -->
                                <!-- <div class="time6 aqua5 ">
                                    <div class="glare5 "></div>
                                    <div class="dropdown1 ">
                                        <a class="dropbtn "><span><i class="msgs fa fa-folder "></i></span> Chat <span><i class="fa fa-caret-down "></i></span></a>
                                        <div class="dropdown-content ">
                                            <a href={{$chaturl}} target="_blank" style="text-decoration: none; "><span><i class="fa fa-file-pdf" style="padding-right: 8px;"></i></span> IP</a>
                                            <a href="https://chat.arcinventador.local" ><span><i class="fa fa-video" style="padding-right: 8px;"></i></span> Domain</a>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-lg-4 col-md-4 col-sm-4  " style="cursor: pointer;" onclick="commingsoon()">
                                <a href="#" >
                                <div class="time13 aqua13 ">
                                    <div class="glare13 "></div>
                                    <a class="abc" id="upload_link" target="_blank" href="#" style="text-decoration: none; color: rgba(255, 253, 253, 0.856); "><span><i class="abc msgs fa fa-envelope-open-text "></i></span> Chat</a>
                                </div>
                                </a>
                            <!-- </div> -->
                             </div>
              
                            <!-- <div class="col-4 "> -->
                                <!-- <div class="time6 aqua5 ">
                                    <div class="glare5 "></div>
                                    <div class="dropdown1 ">
                                        <a class="dropbtn "><span><i class="msgs fa fa-folder "></i></span> Chat <span><i class="fa fa-caret-down "></i></span></a>
                                        <div class="dropdown-content ">
                                            <a href={{$chaturl}} target="_blank" style="text-decoration: none; "><span><i class="fa fa-file-pdf" style="padding-right: 8px;"></i></span> IP</a>
                                            <a href="https://chat.arcinventador.local" ><span><i class="fa fa-video" style="padding-right: 8px;"></i></span> Domain</a>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-lg-4 col-md-4 col-sm-4  " style="cursor: pointer;" onclick="commingsoon()">
                                <a href="#" >
                                <div class="time13 aqua13 ">
                                    <div class="glare13 "></div>
                                    <a class="abc" id="upload_link" target="_blank" href="#" style="text-decoration: none; color: rgba(255, 253, 253, 0.856); "><span><i class="abc msgs fa fa-check-circle"></i></span> CRM</a>
                                </div>
                                </a>
                            <!-- </div> -->
                             </div>
                        </div>
                    </div>
                    <!-- <div class="info ">
                        <div class="row ">
                    <div class="col-lg-4 col-md-4 col-12 " style="cursor: pointer;">
                                <a href="{{$crmurl}}" target="_blank" >
                                <div class="time9 aqua9 ">
                                    <div class="glare13 "></div>
                                    <a class="abc "  href="{{$crmurl}}" target="_blank" style="text-decoration: none; color: rgba(255, 253, 253, 0.856); "><span><i class="abc msgs fa fa-handshake mt-2"></i></span> CRM</a>
                                </div>
                                </a>
                            </div>
                                            </div>
                                            </div> -->
                    <!-- Activity -->
                    <div class="act ">
                        <div class="time4 aqua4 ">
                            <div class="glare4 "></div>
                            <h5 class="text-left ">My Activities</h5>
                        </div>

                        <div class="row ">
                         <div class="col-lg-6 col-md-6 col-12  " style="cursor: pointer;">
                            <a href="{{URL::to('myforms')}}" target="_blank" style="text-decoration: none;">
                                <div class="time5 aqua5 ">
                                    <div class="glare5 "></div>
                                   
                                        <a class="abc  "   style="text-decoration: none; "><span><i class="abc msgs fa fa-file-signature" ></i></span> My Forms </a>
                                    
                                </div>
                            </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12"  style="cursor: pointer;">
                                <a href="{{URL::to('selectbioattendancemonth')}}" target="_blank">
                                <div class="time5 aqua5 ">
                                    <div class="glare5 "></div>
                                    <a class="abc" href="{{URL::to('selectbioattendancemonth')}}" target="_blank" style="text-decoration: none; color: rgba(255, 253, 253, 0.856); "><span><i class="abc msgs fa fa-file-invoice-dollar "></i></span> Pay Slips</a>
                                </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12" onclick="commingsoon()" style="cursor: pointer;">
                                <div class="time5 aqua5 ">
                                    <div class="glare5 "></div>
                                    <a class="abc" href="# "><span><i class="abc msgs fa fa-file-pdf "></i></span> HR-Policy</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12" style="cursor: pointer;" onclick="foodportal();">
                                <!-- <a href="{{URL::to('restaurantlist')}}" target="_blank"> -->
                                <div class="time5 aqua5 ">
                                    <div class="glare5 "></div>
                                    <a class="abc" href="#}" target="_blank" style="text-decoration: none; color: rgba(255, 253, 253, 0.856); "><span><i class="abc msgs fa fa-drumstick-bite "></i></span> Food Portal</a>
                                </div>
                                <!-- </a> -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-12" style="cursor: pointer;">
                                <a href="{{URL::to('games')}}" target="_blank">
                                <div class="time5 aqua5 ">
                                    <div class="glare5 "></div>
                                    <a class="abc"  style="text-decoration: none; color: rgba(255, 253, 253, 0.856); "><span><i class="abc msgs fa fa-gamepad "></i></span> Game</a>
                                </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12  " style="cursor: pointer;">
                                <a href="{{URL::to('employee_list')}}" target="_blank">
                                <div class="time5 aqua5 ">
                                    <div class="glare5 "></div>
                                    <a class="abc"  style="text-decoration: none; color: rgba(255, 253, 253, 0.856); "><span><i class="abc msgs fa fa-address-book "></i></span> ARC Directory</a>
                                </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12  " style="cursor: pointer;">
                                <a href="{{URL::to('bizzlibrary')}}" target="_blank">
                                <div class="time5 aqua5 ">
                                    <div class="glare5 "></div>
                                   
                                        
                                        <a  class="abc  " style="text-decoration: none; background-color: transparent; "><span><i style="background-color: transparent;" class="abc msgs fa fa-book-reader " ></i></span> Library <span><i class=" "></i></span></a>
                                        <!-- <div id="cd" class=" dropdown-content ">
                                            <a href="# " style="text-decoration: none; ">Link 1</a>
                                            <a href="# ">Link 2</a>
                                            <a href="# ">Link 3</a>
                                        </div> -->
                                    
                                </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12  " style="cursor: pointer;" onclick="commingsoon()">
                                <!-- <a href="{{URL::to('bizzlibrary')}}" target="_blank"> -->
                                <div class="time5 aqua5 ">
                                    <div class="glare5 "></div>
                                   
                                        
                                        <a  class="abc  " style="text-decoration: none; background-color: transparent; "><span><i style="background-color: transparent;" class="abc msgs fa fa-book-reader " ></i></span> ARC Kiosk <span><i class=" "></i></span></a>
                                        <!-- <div id="cd" class=" dropdown-content ">
                                            <a href="# " style="text-decoration: none; ">Link 1</a>
                                            <a href="# ">Link 2</a>
                                            <a href="# ">Link 3</a>
                                        </div> -->
                                    
                                </div>
                                <!-- </a> -->
                            </div>
                            <!-- <div class="col-lg-6 col-md-6 col-12  " style="cursor: pointer;">
                                <a href="{{URL::to('websites')}}" target="_blank">
                                <div class="time5 aqua5 ">
                                    <div class="glare5 "></div>
                                    
                                      <a class="abc " style="text-decoration: none; "><span><i class="abc msgs fa fa-globe "></i></span> Websites </a>
                                    
                                </div>
                                </a>
                            </div> -->
<!--                         
                            <div class="col-6" style="cursor: pointer;" onclick="commingsoon()">
                                <div class="time2 aqua2">
                                    <div class="glare2"></div>
                                     <div class="row">
                                        <div class="col-6">
                                            <a class="abc" href="# " style="text-decoration: none; color: rgba(255, 253, 253, 0.856);background-color: transparent; font-size: 12px"><span><i class="abc msgs fas fa-mail-bulk " style="background-color: transparent; font-size: 15px"></i></span> ARC Kiosk</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- salary -->
                        <div class="sal">
                        <div class="time7 aqua7 ">
                            <div class="glare7 "></div>
                            <h5 class="text-left ">My Attendance</h5>
                        </div>
                        <div class="row" style="margin-top: 5px">
                            <div class="col-12 ">
                                <div class="bio">
                                <table class="table table-striped custom-table datatable">
                        <thead>
                            <tr style="background-color: #5069e7; color: white; font-size: 10px; white-space: nowrap;">
                                <th>Date</th>
                                <th>Time In</th>
                                <th>Time Out</th>
                                <th>Result</th>
                                <!-- <th>Time Long</th> -->
                                <!-- <th>Discrepancy</th> -->
                            </tr>
                        </thead>
                        <tbody style="white-space: nowrap;">
                            @if($attendancedata != null)
                            @foreach($attendancedata as $attdata)
                            <tr>
                                <?php $splitattendancedate = explode("-",$attdata['emp_date']);?>
                               <td >{{$splitattendancedate[1]}}-{{$splitattendancedate[2]}}</td>
                               <td>{{$attdata['emp_checkin']}}</td>
                               <td>{{$attdata['emp_checkout']}}</td>
                               <?php
                                $cout_date = date('Y-m-d', strtotime($attdata['emp_date'] . ' +1 day'));
                                if($data->elsemployees_batchid == 1218 && $attdata['emp_checkin'] != "MissIn" && $attdata['emp_checkout'] != "MissOut"){
                                $time1 = strtotime($attdata['emp_date'].' '.$attdata['emp_checkin']);
                                $time2 = strtotime($cout_date.' '.$attdata['emp_checkout']);
                                $gettime = sprintf($hour = abs($time1 - $time2)/(60*60));
                                }else{
                                $time1 = strtotime($attdata['emp_date'].' '.$attdata['emp_checkin']);
                                $time2 = strtotime($attdata['emp_date'].' '.$attdata['emp_checkout']);
                                $gettime = sprintf(round($hour = abs($time1 - $time2)/(60*60)));
                                }
                                ?>
                               @if($attdata['emp_checkin'] == "MissIn" || $attdata['emp_checkout'] == "MissOut")
                               <?php $attresult = "Absent"?>
                               <td class="attt" style="background-color:#f8bfbf;">Absent</td>
                                @elseif($gettime < 7.56)
                                <?php $attresult = "Late"?>
                                <td class="attt" style="background-color: #fde3b0;">Late</td>
                                @elseif($gettime < 4)
                                <?php $attresult = "Half Day"?>
                                <td class="attt" style="background-color: #b7cefa;">Half Day</td>
                                @else
                                <?php $attresult = "Present"?>
                                <td class="attt" style="background-color: #b8e0b8;">Present</td>
                               @endif
                            <!--    @if($attdata['emp_checkin'] == "MissIn" || $attdata['emp_checkout'] == "MissOut")
                               <td>0</td>
                               @else
                               <td>{{$gettime}}</td>
                               @endif -->
                               <!-- <td><a href="#" title="Add Correction Request" id="{{$attdata['emp_date']}}~{{$attresult}}" onclick="addcorrection(this.id)" data-toggle="modal" data-target="#add_correction"><i class="fa fa-plus"></i></a></td> -->
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                         </div>
                         <div class="col-12" >
                                <a href="{{URL::to('dailyattendance')}}" target="_blank" style="cursor: pointer;">
                                <div class="time18 aqua15 text-center" style="cursor: pointer;" >
                                    <div class="glare18 " ></div>
                                    <a class="abc" style="text-decoration: none; color: #5069e7; width: 100%; ">View All Attendance</a>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- work -->
                    <!-- <div class="work mt-3 ">
                        <div class="time8 aqua8 ">
                            <div class="glare8 "></div>
                            <h5 class="text-left ">My Work</h5>
                        </div>
                        <div class="row" >
                            <div class="col-lg-6 col-md-6 col-12 " style="cursor: pointer;">
                                <a href="{{$crmurl}}" target="_blank" >
                                <div class="time9 aqua9 ">
                                    <div class="glare9 "></div>
                                    <a class="abc "  href="{{$crmurl}}" target="_blank" style="text-decoration: none; color: rgba(255, 253, 253, 0.856); "><span><i class="abc msgs fa fa-handshake mt-2"></i></span> CRM</a>
                                </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12  " style="cursor: pointer;">
                                <a href="file://192.168.0.9\arcinventador Agents" target="_blank">
                                <div class="time9 aqua9 ">
                                    <div class="glare9 "></div>
                                    <a class="abc " href="#" style="text-decoration: none; color: rgba(255, 253, 253, 0.856); "><span><i class="abc msgs fa fa-share-square "></i></span> My Sharing</a>
                                </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12  " style="cursor: pointer;">
                                <input type="file" name="" id="upload">
                                <a href="#" id="upload_link">
                                <div class="time9 aqua9 ">
                                    <div class="glare9 "></div>
                                    <a class="abc " id="upload_link" href="# " style="text-decoration: none; color: rgba(255, 253, 253, 0.856); "><span><i class="abc msgs fab fa-stripe-s mt-2"></i></span> My Softwares</a>
                                </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12  " style="cursor: pointer;">
                                <input type="file" name="" id="upload">
                                <a href="#" id="upload_link">
                                <div class="time9 aqua9 ">
                                    <div class="glare9 "></div>
                                    <a class="abc " id="upload_link" href="# " style="text-decoration: none; color: rgba(255, 253, 253, 0.856); "><span><i class="abc msgs fa fa-file-pdf-o "></i></span> My Documents</a>
                                </div>
                                </a>
                            </div>

                        </div>

                    </div> -->
                    <!-- training -->
                    <!-- <div class="train ">
                        <div class="row ">
                            <div class="col-12 ">
                                <div class="time6 aqua5 ">
                                    <div class="glare5 "></div>
                                    <div class="dropdown1 ">
                                        <a class="dropbtn "><span><i class="msgs fa fa-folder "></i></span> Training Manuals <span><i class="fa fa-caret-down "></i></span></a>
                                        <div class="dropdown-content ">
                                            <a href="{{URL::to('trainingmanualpdf')}}" target="_blank" style="text-decoration: none; "><span><i class="fa fa-file-pdf" style="padding-right: 8px;"></i></span> PDF</a>
                                            <a href="{{URL::to('trainingmanualvideo')}}" target="_blank"><span><i class="fa fa-video" style="padding-right: 8px;"></i></span> Video</a>
                                            <a href="{{URL::to('trainingmanualaudio')}}" target="_blank"><span><i class="fa fa-volume-up" style="padding-right: 8px;"></i></span> Audio</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div> -->
                    <div class="act ">
                        <div class="time4 aqua4 ">
                            <div class="glare4 "></div>
                            <h5 class="text-left ">Training Manuals</h5>
                        </div>

                        <div class="row ">
                         <div class="col-lg-6 col-md-6 col-12  " style="cursor: pointer;">
                            <a href="{{URL::to('trainingmanualpdf')}}" target="_blank" style="text-decoration: none;">
                                <div class="time5 aqua5 ">
                                    <div class="glare5 "></div>
                                   
                                        <a class="abc  "   style="text-decoration: none; "><span><i class="abc msgs fa fa-file-pdf" ></i></span> PDF </a>
                                    
                                </div>
                            </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12"  style="cursor: pointer;">
                                <a href="{{URL::to('trainingmanualvideo')}}" target="_blank">
                                <div class="time5 aqua5 ">
                                    <div class="glare5 "></div>
                                    <a class="abc" href="{{URL::to('trainingmanualvideo')}}" target="_blank" style="text-decoration: none; color: rgba(255, 253, 253, 0.856); "><span><i class="abc msgs fa fa-video "></i></span> Video</a>
                                </div>
                                </a>
                            </div>
                            </div>
                            <div class="row ">
                            <div class="col-lg-12 col-md-12 col-12"  style="cursor: pointer;">
                                <div class="time5 aqua5 ">
                                    <div class="glare5 "></div>
                                    <a class="abc" href="{{URL::to('trainingmanualaudio')}} "><span><i class="abc msgs fa fa-volume-up "></i></span> Audio</a>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-6 col-12" style="cursor: pointer;">
                                <a href="{{URL::to('restaurantlist')}}" target="_blank">
                                <div class="time5 aqua5 ">
                                    <div class="glare5 "></div>
                                    <a class="abc" href="{{URL::to('restaurantlist')}}" target="_blank" style="text-decoration: none; color: rgba(255, 253, 253, 0.856); "><span><i class="abc msgs fa fa-drumstick-bite "></i></span> Food Portal</a>
                                </div>
                                </a>
                            </div> -->
                       
                      
                         
                       
                        
                        </div>
                    </div>
                    <!-- Employee -->
                    <!-- <div class="train ">
                        <div class="row ">
                            <div class="col-12 " style="cursor: pointer;">
                                <div class="time31 aqua31 " onclick="commingsoon();">
                                    <div class="glare31 "></div>
                                    
                                        <a class="abc " ><span><i class="msgs fa fa-file-powerpoint " style="margin-left: -8px"></i></span>Company Policy </a>
                                       
                                    
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- slider -->
                    <div class="slider">
                        <div class="time17 aqua17 ">
                            <div class="glare17 "></div>
                            <h5 class="text-left ">My Gallery</h5>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div id="demo" class="carousel slide" data-ride="carousel">

                                    <!-- Indicators -->
                                    <ul class="carousel-indicators">
                                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                                        <li data-target="#demo" data-slide-to="1"></li>
                                        <li data-target="#demo" data-slide-to="2"></li>
                                    </ul>

                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        @if(isset($data->albumid))
                                        <?php
                                        $indexalbum=0;
                                        ?>
                                        @foreach($data->albumid as $val)
                                            @if($indexalbum==0)  
                                                <div class="carousel-item active">
                                            @else
                                            <div class="carousel-item">
                                            @endif
                                            <a href="{{URL::to('gallerylist/')}}/{{$val}}" target="_blank" class="avatar">
                                                <img src="{{URL::to('public/album/')}}/{{$data->albumimage[$indexalbum]}}" alt="Los Angeles" width="100%" >
                                            </a>
                                            </div>
                                        <?php
                                        $indexalbum++;
                                        ?>
                                        @endforeach
                                        @endif
                                    </div>

                                     <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#demo" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-12" >
                                <a href="{{URL::to('albumlist')}}" target="_blank" style="cursor: pointer;">
                                <div class="time18 aqua18 text-center" style="cursor: pointer;" >
                                    <div class="glare18 " ></div>
                                    <a class="abc" style="text-decoration: none; color: #5069e7; width: 100%; ">View Gallery</a>
                                </div>
                                </a>
                            </div>
                            
                        </div>
                    </div>


                </div>
                <div class="col-12 text-center">
                    <footer style="margin-top: 20px;">
                        © COPYRIGHT <?php echo(date('Y'))?> Arc-Inventadors ALL RIGHTS RESERVED.
                    </footer>
                </div>
            </div>
    </section>

<div id ='modals'></div>
</body>
<script>
function itticket() {
    $.get('{{ URL::to("/itticket")}}',function(data){
    $('#modals').empty().append(data);
    $('#itticket').modal('show');
    });
}
function viewdetails($id){
    $.get('{{ URL::to("/viewdetails")}}/'+$id,function(data){
    $('#modals').empty().append(data);
    $('#view').modal('show');
    console.log("test");
    });
}
function empreminder(){
    $.get('{{ URL::to("/empreminder")}}',function(data){
    $('#modals').empty().append(data);
    $('#empreminder').modal('show');
    });
}
function complain(){
    $.get('{{ URL::to("/complain")}}',function(data){
    $('#modals').empty().append(data);
    $('#complain').modal('show');
    });
}
function getimage(){
    $.get('{{ URL::to("/getimage")}}',function(data){
    $('#modals').empty().append(data);
    $('#getimage').modal('show');
    });
}
function getcover(){
    $.get('{{ URL::to("/getcover")}}',function(data){
    $('#modals').empty().append(data);
    $('#getcover').modal('show');
    });
}
function commingsoon(){
swal("ARC Launching", "...Coming Soon");
}
function foodportal(){
swal("ARC Launching", "Coming Soon Once Nearest Restaurant Added");
}
function bizzcall($id){
let newWindow = window.open("https://chat.arcinventador.local/dialpad?number="+$id, "mywindow","menubar=0,location=0,status=0,titlebar=0,toolbar=0,resizable=0,width=320,height=650");
console.log(newWindow);
}
function addcorrection($date){
    $.get('{{ URL::to("/addcorrectionmodal")}}/'+$date,function(data){
    $('#modals').empty().append(data);
    $('#addcorrection').modal('show');
    });
}
function viewprofile($id) {
    window.location.replace('{{ URL::to("/employeeprofile")}}/'+$id);
}
function addachieved($id){
    $.get('{{ URL::to("/addachievedmodal")}}/'+$id,function(data){
    $('#modals').empty().append(data);
    $('#addachieved').modal('show');
    });
}
function mydark() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}
function submitcomment($id){
      $comment = $("#input-default"+$id).val();
      $.get('{{ URL::to("/submitcomment")}}/'+$id+'/'+$comment);
      swal("Published", "Comment Submited Successfully!", "success");
      $("#input-default"+$id).val('');
}
$(document).ready(function () {
    currenttime();
    function currenttime() {
        var date = new Date
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12; // the hour '0' should be '12'
        minutes = minutes < 10 ? '0' + minutes : minutes;
        var strTime = hours + ':' + minutes + ' ' + ampm;

        var weekday = new Array(7);
        weekday[0] = "Sunday";
        weekday[1] = "Monday";
        weekday[2] = "Tuesday";
        weekday[3] = "Wednesday";
        weekday[4] = "Thursday";
        weekday[5] = "Friday";
        weekday[6] = "Saturday";

        var day = weekday[date.getDay()];
        strTime += ' ' + day;

        $('.ctime').html(strTime);
    }
    $(function () {
        setInterval(currenttime, 1000);
    });
        $("button[name$='rd']").click(function() {
            var test = $(this).val();

            $("div.desc").hide();
            $("#div" + test).show();
        });
        $("button[name$='sb']").click(function() {
            var test = $(this).val();

            $("div.desb").hide();
            $("#divsb" + test).show();
            $("section.score").hide();
            $("#divscore" + test).show();
            $("figure.highchart").hide();
            $("#high" + test).show();
        });
        <?php
        //portal timein start
            $gettodaysattendance = DB::connection('mysql')->table('attendance')
            ->where('attendance.elsemployees_empid','=', session()->get('batchid')) 
            ->where('attendance.attendance_date','=', date('Y-m-d')) 
            ->select('attendance.*')
            ->first();
            // dd($gettodaysattendance);
           
            if (isset($gettodaysattendance) == null && date('h:i:s A') < "12:01:00 AM" && date('h:i:s A') > "07:00:00 PM") {
            ?>
                    swal({
                  title: "Time In?",
                  text: "Once Time In, you will not be able to change!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: false,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    $.get('{{ URL::to("/usertimein")}}');
                    swal("Time In Successfully", {
                      icon: "success",
                    });
                    window.location.reload();
                  } else {
                    swal("No action applied");
                  }
                });
                <?php
                }
                //portal timein end
                ?>
});
</script>
</html>