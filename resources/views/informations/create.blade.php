@extends('layouts.master')

@section('page_title', 'information')

@section('content')
@if($errors->any())
<ul class="alert alert-danger">

    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
   

     <form  action="{{ url('/informations') }}" enctype="multipart/form-data" method="post" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
        <div class="card mb-3">
            <div class="card-header">
                <div>
                    <h1 class="text-center breadcrumb">ข้อมูลผู้รับคำปรึกษา</h1><br>
                </div> 
                
                <form>
                
                <div class="row">
                    <div class="col">
                        
                        <label><font style="color: red">*</font>ชื่อ: </label>
                        <input type="text" class = "form-control" name="fname"  value="{{ old('fname') }}" >
                       
                    </div>
                    <div class="col">
                        
                        <label><font style="color: red">*</font>นามสกุล: </label>
                        <input  type="text" class = "form-control" name="lname" value="{{ old('lname') }}">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label><font style="color: red">*</font>เลขประจำตัวประชาชน: </label>
                        <input  type="text" class = "form-control" name="idcard" value="{{ old('idcard') }}">
                        
                    </div>
                    <div class="col">
                        <label><font style="color: red">*</font>เพศ: </label>
                        <select class="form-control" name = "sexx">
                            <option  value= "" {{ old('sexx') == "" ? 'selected' : '' }}>กรุณาเลือก</option>
                            <option  value="ชาย" {{ old('sexx') == "ชาย" ? 'selected' : '' }}>ชาย</option>
                            <option  value="หญิง" {{ old('sexx') == "หญิง" ? 'selected' : '' }}>หญิง</option>
                        </select>
                        <!-- <input   type="text" class = "form-control" name="sexx" value=""> -->
                       
                    </div>
                </div>

                <div class="row">
                
                    <div class="col">
                    <label><font style="color: red">*</font>สถานภาพ: </label>
                    <select class="form-control" name = "stat"  >
                        <option  value= "" {{ old('stat') == "" ? 'selected' : '' }}>กรุณาเลือก</option>
                        <option  value="นิสิต" {{ old('stat') == "นิสิต" ? 'selected' : '' }}>นิสิต</option>
                        <option  value="บุคคลากร" {{ old('stat') == "บุคคลากร" ? 'selected' : '' }}>บุคคลากร</option>
                    </select>
                    <!-- <input  type="text" class = "form-control" name="stat" value="" > -->
                    
                    
                    </div>
                    <div class="col">
                    <label><font style="color: red">*(นิสิต)</font>ชั้นปี: </label>
                    
                    <input  type="text" class = "form-control" name="year" value="{{ old('year') }}">
    
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col">
                    <label><font style="color: red">*</font>เบอร์ติดต่อ: </label>
                    <input  type="text" class = "form-control" name="num" value="{{ old('num') }}">
                    
                    </div>
                    <div class="col">
                       
                        <label><font style="color: red">*(นิสิต)</font>คณะ: </label>
                        <select class="form-control" name = "fac">
                            <option  value= "" {{ old('fac') == "" ? 'selected' : '' }}>กรุณาเลือก</option>
                            <option  value="คณะวิศวกรรมศาสตร์ศรีราชา" {{ old('fac') == "คณะวิศวกรรมศาสตร์ศรีราชา" ? 'selected' : '' }}>คณะวิศวกรรมศาสตร์ศรีราชา</option>
                            <option  value="คณะวิทยาศาสตร์ศรีราชา" {{ old('fac') == "คณะวิทยาศาสตร์ศรีราชา" ? 'selected' : '' }}>คณะวิทยาศาสตร์ศรีราชา</option>
                            <option  value="คณะพาณิชยนาวีนานาชาติ" {{ old('fac') == "คณะพาณิชยนาวีนานาชาติ" ? 'selected' : '' }}>คณะพาณิชยนาวีนานาชาติ</option>
                            <option  value="คณะวิทยาการจัดการ" {{ old('fac') == "คณะวิทยาการจัดการ" ? 'selected' : '' }}>คณะวิทยาการจัดการ</option>
                            <option  value="คณะเศรษฐศาสตร์ศรีราชา" {{ old('fac') == "คณะเศรษฐศาสตร์ศรีราชา" ? 'selected' : '' }}>คณะเศรษฐศาสตร์ศรีราชา</option>
                        </select>
                        <!-- <input  type="text" class = "form-control" name="fac" value=""> -->
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                      
                        <label><font style="color: red">*</font>เบอร์บุคคลติดต่อฉุกเฉิน: </label>
                        <input  type="text" class = "form-control" name="numemer" value="{{ old('numemer') }}">
                        
                    </div>
                    <div class="col">
                        <label><font style="color: red">*</font>ชื่อบุคคลบุคคลติดต่อฉุกเฉิน: </label>
                        <input type="text" class = "form-control" name="nameemer" value="{{ old('nameemer') }}">
                       
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                       
                        <label>เบอร์เพื่อนสนิท: </label>
                        <input  type="text" class = "form-control"  name="numfri" value="{{ old('numfri') }}">
                        
                    </div>
                    <div class="col">
                        <label>ชื่อเพื่อนสนิท: </label>
                        <input type="text" class = "form-control" name="namefri" value="{{ old('namefri') }}">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label><font style="color: red">*</font>เคยรับการรักษาทางจิตเวช: </label>
                        <select class="form-control" name = "his">
                            <option  value= "" {{ old('his') == "" ? 'selected' : '' }}>กรุณาเลือก</option>
                            <option  value="เคย" {{ old('his') == "เคย" ? 'selected' : '' }}>เคย</option>
                            <option  value="ไม่เคย" {{ old('his') == "ไม่เคย" ? 'selected' : '' }}>ไม่เคย</option>
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
@stop