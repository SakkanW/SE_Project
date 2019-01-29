@extends('layouts.main')

@section('page_title','home')

@section('content')

{!!HTML::script('template/vendor/jquery/jquery.min.js')!!}

<section id=page_top>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-nav" href="#page_top">
        <img src="{{ url('template/img/KU.png') }}" width="100" height="100" alt="">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#problem">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{url('/news')}}">News</a>
          </li>
          @if(Auth::guest())
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/auth/login" id="lamoon">login</a>
          </li>
          @else

              @if(Auth::user()->status == 'admin')
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger"  id="lamoon" >{{Auth::user()->name}}</a>
              </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger"  id="lamoon" href="{{url('/dashboards')}}">dashboards</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{url('/auth/logout')}}" id="lamoon">logout</a>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger"  id="lamoon" href="{{url('/nisitinfos')}}">{{Auth::user()->name}}</a>
              </li>
                
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{url('/auth/logout')}}" id="lamoon">logout</a>
              </li>
            @endif
          @endif
        </ul>
      </div>
    </div>
  </nav>
</section>


@if(Auth::guest())
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px" id="lamoon_head">คุณสามารถจองเวลาเพื่อเข้าพบ</h1>
    <p id="lamoon">ทุกวัน จันทร์ - ศุกร์</p>
    <a href="{{url('/nisitinfos')}}" class="btn btn-info btn-lg" role="button" aria-pressed="true" id="lamoon">จองเวลาเพื่อเข้ารับการปรึกษา</a>
  </div>
</div>
@else
  @if(Auth::user()->status == 'user')
  <div class="hero-image">
    <div class="hero-text">
      <h1 style="font-size:50px" id="lamoon_head">คุณสามารถจองเวลาเพื่อเข้าพบ</h1>
      <p id="lamoon">ทุกวัน จันทร์ - ศุกร์</p>
      <a href="{{url('/nisitinfos')}}" class="btn btn-info btn-lg" role="button" aria-pressed="true" id="lamoon">จองเวลาเพื่อเข้ารับการปรึกษา</a>
    </div>
  </div>
  @endif
  @if(Auth::user()->status == 'admin')
  <div class="hero-image">
    <div class="hero-text">
      <h1 style="font-size:50px" id="lamoon_head">ไปยังหน้า Dashboard</h1>
      
      <a href="{{url('/dashboards')}}" class="btn btn-info btn-lg" role="button" aria-pressed="true" id="lamoon">ไปยังหน้า Dashboard</a>
    </div>
  </div>
  @endif
@endif


<div class="hero-image2">

</div>


<section class="bg-primary" id="about">
<div class="card mb-3">

  <img class="card-img-top" src= "{{ url('template/img/counseling.jpg') }}" height="300" width="auto" alt="Card image cap">

  <div class="card-body" id="color1">

    <h1 style="color:DodgerBlue; text-align: center; padding: 5px 0;"class="display-4" id="lamoon_head">ห้องให้คำปรึกษา</h1>
    <h2 style="color:MediumSeaGreen; text-align: center;" class="card-text" id="lamoon">อาคาร 9 ศูนย์กิจกรรม(ข้างห้องพยาบาล)</h2  >
    <h3 style="color:DodgerBlue;text-align: center;" class="card-text" id="lamoon">เปิดบริการ จันทร์-ศุกร์ 8.30-16.30</h3>


</div>
</div>
</section>

<section id="service">
  <div class="jumbotron" id="color1">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">

            <h1 class="section-heading" id="lamoon_head">บริการฟรี</h1>

            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <img class="card-img-top" src="{{ url('template/img/exam.png') }}"  id="service-box1"  alt="Card image cap">

              <h3 class="mb-3" id="lamoon">แบบทดสอบทางจิตวิทยา</h3>
              <p class="text-muted mb-0"  id="lamoon">เราให้บริการทดสอบทางจิตวิทยา</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <img class="card-img-top" src=" {{ url('template/img/passion.png') }}" id="service-box1" alt="Card image cap">
              <h3 class="mb-3" id="lamoon">ห้องฟังเพลง</h3>
              <p class="text-muted mb-0" id="lamoon">เราให้บริการห้องฟังเพลง เพื่อความผ่อนคลาย</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <img class="card-img-top" src="{{ url('template/img/love.png') }}" id="service-box1"  alt="Card image cap">
              <h3 class="mb-3" id="lamoon">ให้คำปรึกษา</h3>
              <p class="text-muted mb-0" id="lamoon">เราให้บริการให้คำปรึกษารายบุคคลและรายกลุ่ม</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <img class="card-img-top" src="{{ url('template/img/disabled.png') }}" id="service-box1"  alt="Card image cap">
              <h3 class="mb-3" id="lamoon">บริการนิสิตพิการ</h3>
              <p class="text-muted mb-0" id="lamoon">ให้บริการสำหรับนิสิตพิการ</p>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>



<section id="problem">
<div class="jumbotron jumbotron-fluid" id="color1">
  <div class="container">

    <img id="home_right" src="{{ url('template/img/stress.png') }}" height="300" width="auto">

    <h1 class="display-4" id="lamoon_head">Got Problem</h1>
    <p class="lead" id="lamoon">ทุกปัญหามีทางออก ???</p>
    <p class="lead" id="lamoon">แค่คุณกล้า</p>
    <p class="lead" id="lamoon">ห้องนี้มีอะไรดีๆ</p>
    <p class="lead"id="lamoon">มอบให้ > ที่คุณคิด</p>

  </div>
</div>
</section>



<div class="jumbotron" id="color1">

  <div class="row">
    <div class="col">
      <div class="text-center">
        <img src=" {{ url('template/img/app.png') }}" class="img-responsive" alt="Cinque Terre" width="150" height="150">
         <div class="w-100"></div>
        <a href="https://itunes.apple.com/us/app/sabaijai/id1259096089?mt=8">
          <img src="{{ url('template/img/appstore.png') }}" class="img-responsive"width="300" height="90">
        </a>
         <div class="w-100"></div>
        <a href="https://play.google.com/store/apps/details?id=com.phonegap.sabaijai&hl=th">
          <img src=" {{ url('template/img/playstore.png') }}" class="img-responsive" width="300" height="90">
        </a>
        </div>
    </div>

    <div class="col">
      <h1 class="display-4" id="lamoon_head">แอปพลิเคชัน Sabaijai (สบายใจ)</h1>
      <p class="lead" id="lamoon">แอปพลิเคชัน Sabaijai (สบายใจ) มีวัตถุประสงค์เพื่อช่วยในการประเมินสภาวะทางด้านจิตใจของบุคคลว่ามีภาวะที่เสี่ยงต่อการทำร้ายตนเองหรือไม่ โดยมีแบบคัดกรองให้ทำเพื่อประเมิน ภายในแอปพลิเคชันมีคำแนะนำที่จำแนกตามความเหมาะสมกับเพศและอายุ โดยอายุแบ่งออกเป็น 3 ช่วง คือ 15-24 ปี อายุ 25-59 ปี และอายุ 60-65 ปี </p>

    </div>
    </div>


</div>


<section id="contact">
<div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading" id="lamoon_head">ห้องให้คำปรึกษา</h2>
          <h2 class="section-heading" id="lamoon_head">Counseling room</h2>
          <hr class="my-">
          <p class="mb-5" id="lamoon">
            มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตศรีราชา<br>ให้บริการทุกวันจันทร์ - ศุกร์
            เวลา 8.30 - 16.30 ยกเว้นวันหยุดราชการ
          </p>

        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          <a href="https://www.facebook.com/counselinglearning12">
          <img class="card-img-top" src=" {{ url('template/img/facebook.png') }}" id="service-box1"  alt="Card image cap">
        </a>
          <p>
            <a href="https://www.facebook.com/counselinglearning12" id="lamoon">ห้องให้คำปรึกษา มก.ศรีราชา</a>
          </p>
        </div>
        <div class="col-lg-4 ml-auto text-center">
          <a href="#">
          <img class="card-img-top" src="{{ url('template/img/schedule.png') }}" id="service-box1"  alt="Card image cap">
        </a>
          <p>
            <a href="#" id="lamoon">จองเวลาเพื่อเข้ารับการปรึกษา</a>
          </p>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <a href="https://www.dmh.go.th/">
          <img class="card-img-top" src="{{ url('template/img/medicine.png') }}" id="service-box1"  alt="Card image cap">
        </a>
          <p>
            <a href="https://www.dmh.go.th/" id="lamoon">กรมสุขภาพจิต</a>
          </p>
        </div>
      </div>
    </div>
</section>







  <!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "counselinglearning12", // Facebook page ID
            call_to_action : "เขียนอะไรถึงกันหน่อย", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();

$(document).ready(function() {
        window.history.pushState(null, "", window.location.href);        
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
    });

</script>

<!-- /WhatsHelp.io widget -->


@stop
