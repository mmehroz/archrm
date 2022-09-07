<!DOCTYPE html>
<html lang="en">
<head>
  <title>Arc Inventador</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="{!! asset('assets/css/arcstyle.css') !!}" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="icon" href="{!! asset('public/images/favicon.ico') !!}">
</head>
<body>
  <div class="hdr">
    <img class="logo-img" src="{!! asset('assets/arcassets/logo.gif') !!}" alt="">
  </div>
  <video autoplay="" muted="" loop="" id="myVideo">
      <source src="{!! asset('assets/arcassets/bgvideo.mp4') !!}" type="video/mp4">
  </video>
  <section >
    <div class="container">
      <div class="row">
        <div class="col-12" id="hdrtxt">
        Welcome to <b>Arc Inventador</b>
      </div>
    </div>
    <div class="row">
      <div class="col-1" id="probox"> 
          <p style="opacity: 0;">HRM</p>
      </div>
      <a href="{{URL('/arclogin')}}" target="_blank">
      <div class="col-2" id="probox">
        <img src="{!! asset('assets/arcassets/1.png') !!}" >
          <p>HRM</p>
      </div>
      </a>
      <a href="http://80.240.16.149:3000" target="_blank">
      <div class="col-2" id="probox">
        <img src="{!! asset('assets/arcassets/2.png') !!}" >
          <p>CHAT</p>
      </div>
      </a>
      <a href="http://80.240.16.149:5000" target="_blank">
      <div class="col-2" id="probox">
        <img src="{!! asset('assets/arcassets/3.png') !!}" >
          <p>EMAIL</p>
      </div>
      </a>
      <a href="http://80.240.16.149:4000" target="_blank">
      <div class="col-2" id="probox">
        <img src="{!! asset('assets/arcassets/4.png') !!}" >
          <p>CRM</p>
      </div>
      </a>
      <a href="https://arcinventador.com/" target="_blank">
      <div class="col-2" id="probox">
        <img src="{!! asset('assets/arcassets/5.png') !!}" >
          <p>WEBSITE</p>
      </div>
    </a>
    </div>
    <div class="row" id="gifboxmain">
      <div class="col-12" id="gifbox">
        <!-- <img src="images/1robot.gif" > --> 
      </div>
    </div>
  </section>
  <footer>
    <p><?php echo(date('Y'))?> Arc-Inventador. All rights reserved</p>
  </footer>
</body>
</html>