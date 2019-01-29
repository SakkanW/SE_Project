@extends('layouts.nisit_main')

@section('page_title', 'Home')

@section('content')


   

@if(Auth::user())
          
           @if($information !=null)
           <div class="container">  
               
          <div class="card mb-3">
            <div class="card-header" id="color2">
                <div id="lamoon">
                <img src="{{ url('template/img/contact-information.png') }}" class="img-responsive"width="100" height="100" id="home_left">
                    <h1 class="text-center breadcrumb" id="color1">ข้อมูลผู้รับคำปรึกษา</h1><br>
                   
                </div> 
                
                <form>
             
                <div class="row" id="lamoon">
                    <div class="col">
                        
                        <label>ชื่อ: </label>
                        <input type="text" class = "form-control" name="fname"  value="{{$information->firstname}}" disabled>
                       
                    </div>
                    <div class="col">
                        
                        <label>นามสกุล: </label>
                        <input  type="text" class = "form-control" name="lname" value="{{$information->lastname}}" disabled>
                        
                    </div>
                </div>
                <div class="row" id="lamoon">
                    <div class="col">
                        <label>เลขประจำตัวประชาชน: </label>
                        <input  type="text" class = "form-control" name="idcard" value="{{$information->id_card}}" disabled>
                        
                    </div>
                    <div class="col">
                        <label>เพศ: </label>
                        <select class="form-control" name = "sexx"  disabled >
                            <option  value= "" @if($information->sex=="") selected='selected' @endif>กรุณาเลือก</option>
                            <option  value="ชาย" @if($information->sex=="ชาย") selected='selected' @endif>ชาย</option>
                            <option  value="หญิง" @if($information->sex=="หญิง") selected='selected' @endif>หญิง</option>
                        </select>
                        <!-- <input   type="text" class = "form-control" name="sexx" value=""> -->
                       
                    </div>
                </div>

                <div class="row" id="lamoon">
                
                    <div class="col">
                    <label>สถานภาพ: </label>
                    <select class="form-control" name = "stat" disabled>
                        <option  value= "" @if($information->status=="") selected='selected' @endif>กรุณาเลือก</option>
                        <option  value="นิสิต" @if($information->status=="นิสิต") selected='selected' @endif>นิสิต</option>
                        <option  value="บุคคลากร"@if($information->status=="บุคคลากร") selected='selected' @endif>บุคคลากร</option>
                    </select>
                    <!-- <input  type="text" class = "form-control" name="stat" value="" > -->
                    
                    
                    </div>
                    <div class="col">
                    <label>ชั้นปี: </label>
                    <input  type="text" class = "form-control" name="year" value="{{$information->years}}" disabled>
    
                    </div>
                    
                </div>
                
                <div class="row" id="lamoon">
                    <div class="col">
                    <label>เบอร์ติดต่อ: </label>
                    <input  type="text" class = "form-control" name="num" value="{{$information->tel}}" disabled>
                    
                    </div>
                    <div class="col">
                       
                        <label>คณะ: </label>
                        <select class="form-control" name = "fac" disabled>
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

                <div class="row" id="lamoon">
                    <div class="col">
                      
                        <label>เบอร์บุคคลติดต่อฉุกเฉิน: </label>
                        <input  type="text" class = "form-control" name="numemer" value="{{$information->person_tel}}" disabled>
                        
                    </div>
                    <div class="col">
                        <label>ชื่อบุคคลบุคคลติดต่อฉุกเฉิน: </label>
                        <input type="text" class = "form-control" name="nameemer" value="{{$information->person_name}}" disabled>
                       
                    </div>
                </div>

                <div class="row" id="lamoon">
                    <div class="col">
                       
                        <label>เบอร์เพื่อนสนิท: </label>
                        <input  type="text" class = "form-control"  name="numfri" value="{{$information->closefriend_tel}}" disabled>
                        
                    </div>
                    <div class="col">
                        <label>ชื่อเพื่อนสนิท: </label>
                        <input type="text" class = "form-control" name="namefri" value="{{$information->closefriend_name}}" disabled>
                        
                    </div>
                </div>
                <div class="row" id="lamoon">
                    <div class="col">
                        <label>เคยรับการรักษาทางจิตเวช: </label>
                        <select class="form-control" name = "his" disabled>
                            <option  value= "" @if($information->his_psychiatry=="") selected='selected' @endif>กรุณาเลือก</option>
                            <option  value="เคย" @if($information->his_psychiatry=="เคย") selected='selected' @endif>เคย</option>
                            <option  value="ไม่เคย" @if($information->his_psychiatry=="ไม่เคย") selected='selected' @endif>ไม่เคย</option>
                        </select>
                        
                    </div>
                </div>

                <br><br>
                <br>
                <div class="text-center">
                    <div class="card">
                    </div>
                    <!-- <button type="button" class="btn btn-danger">ยกเลิก</button> -->
                    <a href =  "{{url('/nisitinfos/'.$information->id.'/edit')}}"><button type="button" class="btn btn-primary" id="lamoon">แก้ไขข้อมูลส่วนตัว</button></a>
                    <a href =  "{{url('/nisitinfos/'.$information->id.'/appointments/create')}}"><button type="button" class="btn btn-danger" id="lamoon">จองเวลา</button></a>
                </div>
                <br><br><br>
                </div>
                @endif  

                @if($information == null)
                
                <div class="container">
                <div class="jumbotron jumbotron-fluid" id="color3">
                    <div class="container">
                        <div class="text-center">
                            <img src="{{ url('template/img/question.png') }}" class="img-responsive"width="200" height="200" id="home_left">
                            <h1 class="display-4" id="lamoon_head">ไม่พบข้อมูลผู้ใช้งาน</h1>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <div class="card">
                                    <a href =  "{{url('/nisitinfos/create')}}"><button type="button" class="btn btn-primary btn-lg btn-block" id="lamoon_head">สร้างข้อมูล</button></a>
                                </div>      
                            </div>
                        </div>
                    </div>
                </div>
                    
                   
                @endif
         

         
           
@endif
        
   
@stop