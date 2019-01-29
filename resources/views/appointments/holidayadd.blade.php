@extends('layouts.master')

@section('page_title','Hello Page')


@section('content')


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


    <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              ตารางวันหยุด</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     
                      <th><center>#</center></th>
                      <th><center>วันที่</center></th>
                      <th><center>คำอธิบาย</center></th>
                      <th><center>การดำเนินการ</center></th>
                      <!-- <th><center>นัดเวลาจอง</center></th> -->
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                   @foreach($holidays as $holiday)
                    <tr>
                      <td><center>{{ ++$count }}</center></td>
                      <td><center>{{ \Carbon\Carbon::parse($holiday->date_holiday)->format('d-m-Y')}}</center></td>
                      <td><center>{{ $holiday->description}}</center></td>
                      <td>
                        <center>
                       
                        <a href="{{url('/addholidays/cancle/'.$holiday->id)}}">
                          <button type="button" class="btn btn-danger">ยกเลิก</button>
                        </a>
                      </center>
                      </td>
                      
                    </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
          </div>
        </div>

<form  action="{{ url('/addholidays') }}" enctype="multipart/form-data" method="post" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="row justify-content-md-center">
    <div class="col-md-5">

<div class="card">
  <div class="card-header">
    เพิ่มวันหยุด
  </div>
  <div class="card-body">
      <div class="bootstrap-iso">
       <div class="container-fluid">
        <div class="row">
         <div class="col-md-230 col-sm-230 col-xs-12">
          <form action="https://formden.com/post/MlKtmY4x/" class="form-horizontal" method="post">
           <div class="form-group ">

            <div class="col-sm-10">
             <div class="input-group">
              <div class="input-group-addon">
               
              </div>
              <input class="form-control" id="datepicker" name="date_holiday" placeholder="DD-MM-YYYY" type="text" >
              @if(Session::has('flash_message'))
                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('flash_message') }}</p>
              @endif
              @if(Session::has('flash_message1'))
                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('flash_message1') }}</p>
              @endif
             </div>
             <label>คำอธิบายวันหยุด: </label>
              <input type="text" class = "form-control" name="description"  value="{{ old('description') }}" >
              
          
            
             


            </div>


           </div>
           </div>
           </div>
           <br>
           <div class="container">
             <div class="row">
               <div class="col-sm">
               <button type="submit" class="btn btn-primary">เพิ่มวันหยุด</button>
           <!-- <a href="info" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">ยืนยันการขอเข้ารับคำปรึกษา</a> -->
           </div>
           </div>
         </div>
         
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