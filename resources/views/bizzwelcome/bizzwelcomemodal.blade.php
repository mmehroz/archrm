<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="{!! asset('public/assets/css/welcome.css') !!}" rel="stylesheet" type="text/css">
<div class="container" id="bizzwelcomemodal" style="position: absolute;top: 35%;left: 15%;">
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="text-center">
              <h4 class="welcomeheading">
              @if($type == 0)
              <span class="spanheading">Welcome To</span>
              @else
              <span class="spanheading">Welcome To</span>
              @endif
              Arc Inventador</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="d-flex mt-5">
                <div>
                    <img style="width: 60%;" class="rounded-circle" alt="100x100"
                        src="{!! asset('public/img/no_image.jpg') !!}"{
                        data-holder-rendered="true">
                </div>
                <div>
                    <h3 class="title">{{$info->elsemployees_name}}</h3>
                    <h4 class="designation">{{$info->DESG_NAME}}</h4>
                    <h5 class="company">{{$info->dept_name}}</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <hr style="background:#fff;font-weight: bold;width: 55%;">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6">
            <div class="d-flex">
                <div>
                    <h6 class="empidheading">Emp ID:<span class="empid">{{$info->elsemployees_batchid}}</span></h6>
                </div>
                <div class="" style="position: absolute;right:0">
                    <h6 class="empidheading">Check in:<span class="empid">{{$time}}</span></h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
