<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Portal</title>
    <link rel="icon" href="{{URL::to('/')}}/public/images/favicon.ico" type="image/gif" sizes="16x16">
    <!-- <link rel="stylesheet" href="{!! asset('public/assets/css/food.css') !!}" /> -->
    <link rel="stylesheet" href="{!! asset('public/bizzmain/cdns/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('public/bizzmain/fontawsm/fontawesome-free-5.15.3-web/css/fontawesome.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('public/bizzmain/fontawsm/fontawesome-free-5.15.3-web/css/all.min.css') !!}">
    <script src="{!! asset('public/bizzmain/cdns/jquery.min.js') !!}"></script>
    <script src="{!! asset('public/bizzmain/cdns/bootstrap.min.js') !!}"></script>
</head>
<style>
    .navbar .fa-cart-arrow-down {
        font-size: 1.5rem;
        color: #ffffff;
    }
    
    nav {
        text-shadow: 0 10px 15px 0 rgb(0 0 0 / 20%), 0 10px 20px 0 rgb(0 0 0 / 19%);
        /* background-color: rgba(87, 190, 107, 0.7); */
        background:linear-gradient(to right bottom, #6416ec, #33e0e0);
    }
    
    nav a {
        color: #ffffff;
        font-weight: 600;
    }
    
    nav a:hover {
        color: #ffffff;
    }
    .main-drop .user-img img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-top: -10px;
    }
    
    .banner {
        margin-top: 100px;
    }
    
    .banner h1 {
        font-size: 3.4rem;
        color: #000000;
        padding-top: 50px;
        line-height: 4.3rem;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 600;
        text-transform: capitalize;
    }
    
    .banner .sub-h {
        font-size: 3.3rem;
    }
    
    .banner p {
        font-size: 1.1rem;
        color: #b4b4b4;
        line-height: 1.5rem;
        text-align: justify;
        padding-top: 1.5rem;
    }
    
    .banner .button {
        width: 250px;
        height: 60px;
        font-size: 1.2rem;
        background-color: #5069e7;
        color: white;
        border: 1px solid #5069e7;
        border-radius: 26px;
        padding-bottom: 5px;
        letter-spacing: 1px;
        text-transform: uppercase;
        font-weight: 500;
        margin-top: 30px;
    }
    
    .banner input {
        width: 100%;
        height: 80px;
        border: 1px solid lightgray;
        border-radius: 5px;
        outline: none;
        padding-left: 5px;
    }
    
    .banner input::placeholder {
        font-size: 17px;
    }
    
    /* .rest {
        margin-top: 70px;
    } */
    
    .rest .fr {
        color: #0c4aaf;
    }
    
    .rest h1 {
        color: #000000;
        font-size: 2rem;
        text-transform: capitalize;
    }
    
    .rest .as {
        font-size: 1.5rem;
        font-weight: 600;
        color: #5069e7;
        text-decoration: none;
    }
    
    .rest img {
        border: 1px solid transparent;
        border-radius: 10px;
        height: 200px;
        width: 100%;
        /* pointer: cursor; */
        cursor: pointer;

    }
    
    .rest .fa-pencil-alt,
    .fa-trash-alt {
        color: #5069e7;
    }
    
    .rest h5 {
        color: #000000;
    }
    .trash{
color: red;
    }
    .pencil{
color: green;
    }

    .addresturantbtn{
        color: white;
        background:linear-gradient(to right bottom, #6416ec, #33e0e0);
        border:none;
        border-radius: 5px;
        font-size: 15px;
        padding:10px
    }
    .footer {
        color: white;
        background:linear-gradient(to right bottom, #6416ec, #33e0e0);
        font-size: 1.1rem;
        font-weight: 600;
        width: 100%;
        bottom: 0px;
        position: fixed;


  
    }
    #restaurant{
        /* border: 1px solid black; */
        border-radius: 10px;
        width: 97% !important;
        box-shadow: 0px 6px 6px rgba(0, 0, 0, 0.12);
        /* margin-left:5px;
        margin-right: 5px; */
    }
    @media only screen and (max-width: 1000px) {
        .des {
            font-size: 14px;
        }
    }
</style>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 300) {
                $(".navbar").css("background", "#5069e7");
            } else {
                $(".navbar").css("background", "");
            }
        })
    })
</script>
<body>
    <section class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg fixed-top">
                        <a class="navbar-brand"><img src="{{URL::to('public/bizzmain/logo-03.svg')}}" alt="" width="100px"></a>
                        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="my-nav" class="collapse navbar-collapse">
                            <ul class="navbar-nav ml-auto  text-right pr-5">
                                <li class="nav-item">
                                    <a class="nav-link " href="#" onclick="userorderlist()"><i class="fa fa-shopping-cart" style="color: #ffffff;"></i></a>
                                </li>
                                <li class="nav-item dropdown has-arrow main-drop">
                                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                        <span class="user-img">
                                <img src="{{URL::to('/')}}/public/img/{{session()->get("image")}}" alt="">
                                        <span class="status online"></span></span>
                                        <span>{{session()->get("name")}}</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" style="color: black;" href="{{url('/')}}"><i class="fa fa-power-off" style="padding-right: 7px;  font-size: 12px; color: #5069e7;"></i>Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </section>
    <!-- banner -->
    <section class="banner">
        <div class="container">
            <div class="row" style="align-items: baseline;">
      
                @if(session('message'))
                <div><p class="alert alert-success" >{{session('message')}}</p> </div>
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
    </section>
    <!-- Restaurant -->
    <section class="rest">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <h1>Keep Calm & Order Your Food</h1>
                    <p>Oops we can't order outside from Bahria</p>
                </div>
                <div class="col-6 pt-3 text-right">
                    @if(session()->get("role") <= 2)
                    <a  onclick="addrestaurant()" class="as">
                        <button class="addresturantbtn">Add Restaurant</button>
                    </a>
                    @endif
                </div>
                @foreach ($data as $val)
                <div class="col-3  " >
                <div id="restaurant" class="container pt-3">
        
                    <a onclick="productlist({{$val->restaurant_id }})">
                     <img src="{{URL::to('public/restaurant/')}}/{{$val->restaurant_picture}}" alt="" width="100%">
                    </a>
                    <div class="row">
                        <div class="col-6 pt-3">
                            <h5>{{$val->restaurant_name}}</h5>
                        </div>
                        @if(session()->get("role") <= 2)
                        <div class="col-6 text-right pt-3">
                            <a href="#" onclick="editrestaurant({{$val->restaurant_id }})"> <i class="fas pencil fa-pencil-alt"></i></a>
                            <a href="{{url('/deleterestaurant')}}/{{$val->restaurant_id }}"> <i class="fas trash fa-trash-alt"></i></a>
                        </div>
                        @endif
                        <div class="col-12">
                            <p class="des pt-1">
                                {{$val->restaurant_otherdetails}}
                            </p>
                        </div>
                    </div>
                </div>
                </div>
                @endforeach
                
            </div>
        </div>
         <div id ='modals'></div>
    </section>
    <section class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pb-1 pt-1" style="font-size:12px;">
                    © <?php echo(date('Y'));?> Copyright: Arc Inventador All Rights Reserved
                </div>
            </div>
        </div>

    </section>
    <script type="text/javascript">
        $(document).ready(function(){
             $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#restaurant span").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        function addrestaurant(){
        	$.get('{{ URL::to("/addrestaurantmodal")}}',function(data){
            $('#modals').empty().append(data);
            $('#addrestaurant').modal('show');
            });
        }
        function editrestaurant($id){
            $.get('{{ URL::to("/editrestaurantmodal")}}/'+$id,function(data){
            $('#modals').empty().append(data);
            $('#editrestaurant').modal('show');
            });
        }
        function productlist($id){
            window.location.replace('{{ URL::to("/productlist")}}/'+$id);
        }
        function userorderlist($id){
            $.get('{{ URL::to("/userorderlist")}}',function(data){
            $('#modals').empty().append(data);
            $('#userorderlist').modal('show');
            });
        }
        </script>
</body>
</html>