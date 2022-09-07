<!DOCTYPE html>
<html lang="en">
<head>
  <style>
     .modal-backdrop {
         background-color: transparent !important;
    }
  </style>
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
    <div id ='modals'></div>
  </section>
</body>
<script>
window.setInterval('bizzwelcomemodal()', 500);  
// $( document ).ready(function() {
// bizzwelcomemodal();
// });
function bizzwelcomemodal(){
  $('.modal-backdrop.show').remove();
  $.get('{{ URL::to("/bizzwelcomemodal")}}',function(data){
  $('#modals').empty().append(data);
  $('#bizzwelcomemodal').modal('show');
  });
}
</script>
</html>