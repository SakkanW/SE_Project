@extends('layouts.master')

@section('page_title', 'Edit')

@section('content')
@if($errors->any())
<ul class="alert alert-danger">

    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif


<form  action="{{ url('/informations/'.$information->id) }}" enctype="multipart/form-data" method="post" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="PUT">
        <div class="card mb-3">
            <div class="card-header">
                <div>
                    
                    <h1 class="text-center breadcrumb">ข้อมูลผู้รับคำปรึกษา</h1><br>
                </div> 
                
                <form>
                
                <div class="row">
                    <div class="col">
                        
                        <label><font style="color: red">*</font>ชื่อ: </label>
                        <input type="text" class = "form-control" name="fname"  value="{{$information->firstname}}" >
                       
                    </div>
                    <div class="col">
                        
                        <label><font style="color: red">*</font>นามสกุล: </label>
                        <input  type="text" class = "form-control" name="lname" value="{{$information->lastname}}">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label><font style="color: red">*</font>เลขประจำตัวประชาชน: </label>
                        <input  type="text" class = "form-control" name="idcard" value="{{$information->id_card}}">
                        
                    </div>
                    <div class="col">
                        <label><font style="color: red">*</font>เพศ: </label>
                        <select class="form-control" name = "sexx"  >
                            <option  value= "" @if($information->sex=="") selected='selected' @endif>กรุณาเลือก</option>
                            <option  value="ชาย" @if($information->sex=="ชาย") selected='selected' @endif>ชาย</option>
                            <option  value="หญิง" @if($information->sex=="หญิง") selected='selected' @endif>หญิง</option>
                        </select>
                        <!-- <input   type="text" class = "form-control" name="sexx" value=""> -->
                       
                    </div>
                </div>

                <div class="row">
                
                    <div class="col">
                    <label><font style="color: red">*</font>สถานภาพ: </label>
                    <select class="form-control" name = "stat">
                        <option  value= "" @if($information->status=="") selected='selected' @endif>กรุณาเลือก</option>
                        <option  value="นิสิต" @if($information->status=="นิสิต") selected='selected' @endif>นิสิต</option>
                        <option  value="บุคคลากร"@if($information->status=="บุคคลากร") selected='selected' @endif>บุคคลากร</option>
                    </select>
                    <!-- <input  type="text" class = "form-control" name="stat" value="" > -->
                    
                    
                    </div>
                    <div class="col">
                    <label><font style="color: red">*(นิสิต)</font>ชั้นปี: </label>
                    <input  type="text" class = "form-control" name="year" value="{{$information->years}}">
    
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col">
                    <label><font style="color: red">*</font>เบอร์ติดต่อ: </label>
                    <input  type="text" class = "form-control" name="num" value="{{$information->tel}}">
                    
                    </div>
                    <div class="col">
                       
                        <label><font style="color: red">*(นิสิต)</font>คณะ: </label>
                        <select class="form-control" name = "fac">
                            <option  value= "" @if($information->faculty=="") selected='selected' @endif>กรุณาเลือก</option>
                            <option  value="คณะวิศวกรรมศาสตร์ศรีราชา" @if($information->faculty=="คณะวิศวกรรมศาสตร์ศรีราชา") selected='selected' @endif>คณะวิศวกรรมศาสตร์ศรีราชา</option>
                            <option  value="คณะวิทยาศาสตร์ศรีราชา" @if($information->faculty=="คณะวิทยาศาสตร์ศรีราชา") selected='selected' @endif>คณะวิทยาศาสตร์ศรีราชา</option>
                            <option  value="คณะพาณิชยนาวีนานาชาติ" @if($information->faculty=="คณะพาณิชยนาวีนานาชาติ") selected='selected' @endif>คณะพาณิชยนาวีนานาชาติ</option>
                            <option  value="คณะวิทยาการจัดการ" @if($information->faculty=="คณะวิทยาการจัดการ") selected='selected' @endif>คณะวิทยาการจัดการ</option>
                            <option  value="คณะเศรษฐศาสตร์ศรีราชา" @if($information->faculty=="คณะเศรษฐศาสตร์ศรีราชา") selected='selected' @endif>คณะเศรษฐศาสตร์ศรีราชา</option>
                        </select>
                        <!-- <input  type="text" class = "form-control" name="fac" value=""> -->
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                      
                        <label><font style="color: red">*</font>เบอร์บุคคลติดต่อฉุกเฉิน: </label>
                        <input  type="text" class = "form-control" name="numemer" value="{{$information->person_tel}}">
                        
                    </div>
                    <div class="col">
                        <label><font style="color: red">*</font>ชื่อบุคคลบุคคลติดต่อฉุกเฉิน: </label>
                        <input type="text" class = "form-control" name="nameemer" value="{{$information->person_name}}">
                       
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                       
                        <label>เบอร์เพื่อนสนิท: </label>
                        <input  type="text" class = "form-control"  name="numfri" value="{{$information->closefriend_tel}}">
                        
                    </div>
                    <div class="col">
                        <label>ชื่อเพื่อนสนิท: </label>
                        <input type="text" class = "form-control" name="namefri" value="{{$information->closefriend_name}}">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label><font style="color: red">*</font>เคยรับการรักษาทางจิตเวช: </label>
                        <select class="form-control" name = "his">
                            <option  value= "" @if($information->his_psychiatry=="") selected='selected' @endif>กรุณาเลือก</option>
                            <option  value="เคย" @if($information->his_psychiatry=="เคย") selected='selected' @endif>เคย</option>
                            <option  value="ไม่เคย" @if($information->his_psychiatry=="ไม่เคย") selected='selected' @endif>ไม่เคย</option>
                        </select>
                        <!-- <input  type="text" class = "form-control" class = "from-control" name="his" value=""> -->
                    </div>
                </div>
                
                
                
                <br><br>
                <div class="text-center">
                    
                    <button type="submit" class="btn btn-primary">ยืนยัน</button>
                    <!-- <button type="button" class="btn btn-danger">ยกเลิก</button> -->
                    <a href =  "{{url('/dashboards')}}"><button type="button" class="btn btn-danger">ยกเลิก</button></a>
                </div>
                <br><br><br>
                </div>
            </form>
            
            
<div class="card">
<h1 class="text-center breadcrumb">ประวัติการรักษา</h1><br>
    
</div>          


@foreach($treatments as $treatment)


@if($treatment->informations_id == $information->id)
<div class="card">
  <div class="card-header">
    เข้าพบเมื่อ :{{ \Carbon\Carbon::parse($treatment->created_at)->format('d-m-Y h:i A')}}
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>ปัญหาที่มารับการปรึกษา</p>
      <footer class="blockquote-footer"> {{$treatment->consult_prob}} <cite title="Source Title"></cite></footer>
    </blockquote>
    <blockquote class="blockquote mb-0">
      <p>ระดับปัญหา</p>
      <footer class="blockquote-footer">{{$treatment->consult_level}} <cite title="Source Title"></cite></footer>
    </blockquote>
    <blockquote class="blockquote mb-0">
      <p>บันทึกการให้คำปรึกษา</p>
      <footer class="blockquote-footer">{{$treatment->technique}} <cite title="Source Title"></cite></footer>
    </blockquote>
    <p>ประเภทนิสิตที่มารับการปรึกษา</p>
      <footer class="blockquote-footer">{{$treatment->type_nisit}} <cite title="Source Title"></cite></footer>
    </blockquote>
     <a href="{{url('/informations/'.$treatment->informations_id.'/treatments/'.$treatment->id.'/edit')}}" target="_top">
        <button type="button" class="btn btn-info" style="float: right;">ดูรายละเอียดการรักษาหรือแก้ไข</button>
    </a>
   
  </div>
</div>
@endif

@endforeach

@stop




