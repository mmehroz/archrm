<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/login.css') !!}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{!! asset('public/images/favicon.ico') !!}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('assets/css/font-awesome.min.css') !!}" />
    <title>Arc Inventador</title>
</head>
<body>
    <div class="mainlogindiv">
        <video
          src="{!! asset('assets/arcassets/bgvideo.mp4') !!}"
          style="
            position: absolute;
            z-index: -1;
            width:100%;
            object-fit:cover;
            height:100%;
          "
        >
        </video>

        <div class="container">
          <div class="row mt-5 mb-5">
            <div class="text-center">
              <img
                class="logo-img"
                src="{!! asset('assets/arcassets/logo.gif') !!}"
                style="width:15%"
              />
            </div>
          </div>
          <div class="row" style=" margin-top:100px">
            <div class="col-lg-1"></div>
            <div class="col-lg-4 logimgdiv">
              <img
                src="{!! asset('assets/arcassets/minibot.png') !!}"
                class="img-fluid"
                style="height:400px;padding:40px"
              />
            </div>
            <div class="col-lg-6 formdiv">
              <form class="loginform" method="Post" action="{{url('/mylogin')}}" style="margin-top: 30px;">
                {{ csrf_field() }}
                <div class="row mt-5">
                  <div class="col-lg-12">
                    <h5 class="text-center loginsigninheading">
                      <span style="color:white;font-weight:300;padding-right:10px;font-family:system-ui">
                        Welcome To The
                      </span>
                      ARC-PORTAL
                    </h5>
                  </div>
                </div>
                @if(session('message'))
                <div class="account-title">   <p class="alert alert-success" >{{session('message')}}</p>
                </div>
              	@endif
                <div class="row">
                  <div class="col-lg-10">
                    <div style="margin-left:60px" class="mt-4">
                      <label class="inputlabel">Email</label>
                      <Input
                        style="width:100%;font-weight:300"
                        type="email"
                        class="inputfield"
                        name="username"
                        placeholder="Enter Email" required
                      />
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-lg-10">
                    <div style="margin-left:60px">
                      <label class="inputlabel">Password</label>
                      <input
                        style="font-weight:300;width:100%"
                        type="password"
                        class="inputfield"
                        name="pass" placeholder="Enter Password"
                        id="password-field" required
                      />
                      <div><span toggle="#password-field" style="color: #fff; top: 7px; right: px; right: 7px;" class="fa fa-fw fa-eye field-icon toggle-password"  id="pass-status" onclick="viewPassword()"></span></div>
                    </div>
                  </div>
                </div>

                <div class="row mt-4">
                  <div class="col-lg-10">
                    <div style="margin-left:60px">
                      <div class="text-center">
                        <Button
                          class="loginbtn"
                           type="submit"
                        >
                          Login
                        </Button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
 <script type="text/javascript">
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
</script>
</html>