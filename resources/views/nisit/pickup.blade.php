@extends('layouts.nisit_main')

@section('page_title','Hello Page')


@section('content')

@if($errors->any())
<ul class="alert alert-danger">

    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 4 DatePicker</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />



      <!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
      <!-- <script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script> -->

      <!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
      <!-- <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> -->

      <!--Font Awesome (added because you use icons in your prepend/append)-->
      <!-- <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" /> -->

      <!-- Inline CSS based on choices in "Settings" tab -->
      <!-- <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style> -->

      <!-- HTML Form (wrapped in a .bootstrap-iso div) -->

@if(Auth::user()->id_card == $informations->id_card)
<div class="card mb-3">
    <div class="alert alert-info">
        <div class="float-right">
            <h3 class="text-right">{{ $informations->firstname }}  {{ $informations->lastname }}</h3>
        </div>
    </div>
</div>
<form  action="{{ url('/nisitinfos/'.$informations->id.'/appointments') }}" enctype="multipart/form-data" method="post" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="container">
  <div class="jumbotron jumbotron-fluid" id="color1">
    <div class="text-center">
  <div class="container" >
  <img src="{{ url('template/img/booking.png') }}" class="img-responsive"width="100" height="100" id="home_left">
    <h1 class="display-4" id="lamoon_head">ระบบจองเวลาเพื่อขอรับคำปรึกษา</h1>
    </div>
  </div>
</div>

<div class="card mb-3">
    <div class="alert alert-info">
        <div class="float-left">
            <h3 class="text-left">ตารางเวลาทั้งหมด</h3>
        </div> 
    </div>

    <div class="card" id="color2">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">วันที่นัดหมาย</th>
      <th scope="col">เวลาที่นัดหมาย</th>
      
    </tr>
  </thead>
  <tbody>
  
    @foreach($appoints as $appoint)
    <tr>
      
      <th scope="row">{{++$count}}</th>
      <td>{{ \Carbon\Carbon::parse($appoint->date_appointment)->format('d-m-Y')}}</td>
      <td>{{ \Carbon\Carbon::parse($appoint->start_time)->format('H:i')}}-{{ \Carbon\Carbon::parse($appoint->end_time)->format('H:i')}}</td>
      
    </tr>
  @endforeach


  </tbody>
</table>

</div>
</div>



<div class="card mb-3">
    <div class="alert alert-info">
        <div class="float-left">
            <h3 class="text-left">เวลาการจองของฉัน</h3>
        </div> 
    </div>

    <div class="card" id="color2">
  
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">วันที่นัดหมาย</th>
      <th scope="col">เวลาที่นัดหมาย</th>
      <th scope="col">การดำเนินการ</th>
    </tr>
  </thead>
  <tbody>
  
    @foreach($appoints as $appoint)
    <tr>
      @if($informations->id == $appoint->informations_id)   
      <th scope="row">{{++$count1}}</th>
      <td>{{ \Carbon\Carbon::parse($appoint->date_appointment)->format('d-m-Y')}}</td>
      <td>{{ \Carbon\Carbon::parse($appoint->start_time)->format('H:i')}}-{{ \Carbon\Carbon::parse($appoint->end_time)->format('H:i')}}</td>
      <td>
     

        
        <a href="{{url('/nisitinfos/'.$informations->id.'/appointments/'.$appoint->id)}}">
                          <button type="button" class="btn btn-danger">ยกเลิก</button>
                        </a>
        
     
      </td> 
      
      @endif

    </tr>
  @endforeach


  </tbody>
</table>

</div>
</div>
</div>






<br>
  <div class="row justify-content-md-center">
    <div class="col-md-5">
      <div class="card">
        <div class="text-center">
          <div class="card-header" id="color1">
            <div id="lamoon">
              จองเวลา
            </div>
          </div>
        <div>
          <div class="card-body" id="color2">
            <div class="bootstrap-iso">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-230 col-sm-230 col-xs-12">
                    <form action="https://formden.com/post/MlKtmY4x/" class="form-horizontal" method="post">
                      <div class="form-group " >
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon" >
               
                            </div>
                           
                            <input id="datepicker" name="date_appointment" placeholder="DD-MM-YYYY" type="text"/>
                         
                              @if(Session::has('flash_message'))
                                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('flash_message') }}</p>
                              @endif
                              @if(Session::has('flash_message2'))
                                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('flash_message2') }}</p>
                              @endif
                              @if(Session::has('flash_message3'))
                                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('flash_message3') }}</p>
                              @endif
                              @if(Session::has('flash_message4'))
                                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('flash_message4') }}</p>
                              @endif
                    
                            </div>
       
              
          
            
             <select class="form-control" name = 'apptime'>
                <option value="">เวลาที่ต้องการเข้ารับการปรึกษา</option>
                <option value="09:00:00-12:00:00">เช้า 9.00-12.00</option>
                <option value="13:00:00-16:00:00">บ่าย 13.00-16.00</option>
              </select>
              @if(Session::has('flash_message1'))
                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('flash_message1') }}</p>
              @endif
            

              
         
           <select class="form-control" name="prob">
              <option value=" " >ปัญหาที่ต้องการปรึกษา</option>
              <option value = "ปัญหาด้านครอบครัว">ปัญหาด้านครอบครัว</option>
              <option value = "ปัญหาด้านความรัก">ปัญหาด้านความรัก</option>
              <option value= "ปัญหาด้านการเรียน">ปัญหาด้านการเรียน</option>
              <option value = "ปัญหาด้านเพื่อน">ปัญหาด้านเพื่อน</option>
              <option value= "ปัญหาอื่นๆ">ปัญหาอื่นๆ</option>
          </select>
         
          </div>
          


           </div>
           </div>
           </div>
           <br>
           <div class="text-center">
           <div class="container">
             <div class="row">
               <div class="col-sm">
               <button type="submit" class="btn btn-primary" id="lamoon">ยืนยันการขอเข้ารับคำปรึกษา</button>
           <!-- <a href="info" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">ยืนยันการขอเข้ารับคำปรึกษา</a> -->
           </div>
           </div>
           </div>
         </div>
          </form>
         </div>
        </div>
       </div>
      </div>
  </div>
  </div>

  </div>

</div>


</div>

</form>

@endif



      <!-- Extra JavaScript/CSS added manually in "Settings" tab -->
      <!-- Include jQuery -->
      <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script> -->

      <!-- Include Date Range Picker -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script> -->
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> -->

      <!-- <script>
      	$(document).ready(function(){
      		var date_input=$('input[name="date"]'); //our date input has the name "date"
      		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      		date_input.datepicker({
      			format: 'mm/dd/yyyy',
      			container: container,
      			todayHighlight: true,
      			autoclose: true,
      		})
      	})
      </script> -->
      <script>
        $('#datepicker').datepicker({
            //uiLibrary: 'bootstrap4'
            format: 'dd-mm-yyyy'
        });
    </script>
@stop







      <!-- Extra JavaScript/CSS added manually in "Settings" tab -->
      <!-- Include jQuery -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

      <!-- Include Date Range Picker -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

      
@stop
