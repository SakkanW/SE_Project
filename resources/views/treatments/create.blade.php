@extends('layouts.master')

@section('page_title', 'treatment')

@section('content')
@if($errors->any())
<ul class="alert alert-danger">

    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<div class="card mb-3">
    <div class="alert alert-info">
        <div class="float-right">
            <h3 class="text-right">{{ $Information->firstname }}  {{ $Information->lastname }}</h3>
        </div>
    </div>
</div>
<form  action="{{ url('/informations/'.$Information->id.'/treatments') }}" enctype="multipart/form-data" method="post" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="card mb-3">
            <div class="card-header">
                <div>
                    <h1 class="text-center breadcrumb">การให้คำปรึกษา(Conseling)</h1><br>
                </div> 
                
                <form>
                <div class="card border-dark mb-3">
                    <div class="card-header"><h4>ประเภทที่มารับบริการห้องให้คำปรึกษา</h4></div>
                    <div class="card-body text-dark">
                        <div class="row">
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="type_service" value="การปรึกษาเดี่ยว">การปรึกษาเดี่ยว</label>
                            </div>
                            
                            </div>
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="type_service" value="การปรึกษากลุ่ม">การปรึกษากลุ่ม</label>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="type_service" value="การใช้ห้องผ่อนคลาย">การใช้ห้องผ่อนคลาย</label>
                            </div>
                            </div>
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="type_service" value="บริการหนังสือสารสนเทศ">บริการหนังสือสารสนเทศ</label>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-dark mb-3">
                    <div class="card-header"><h4>ประเภทนิสิตที่มารับการปรึกษา</h4></div>
                    <div class="card-body text-dark">
                        <div class="row">
                            <div class="col">
                           
                            <div class="radio">
                                <label><input type="radio" name="type_nisit" value="New">New</label>
                            </div>
                            </div>
                            <div class="col">
                           
                            <div class="radio">
                                <label><input type="radio" name="type_nisit" value="Follow">Follow</label>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-dark mb-3">
                    <div class="card-header"><h4>ประเภทนิสิตที่มารับการปรึกษา</h4></div>
                    <div class="card-body text-dark">
                        <div class="row">
                            <div class="col">
                           
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Home">Home/ปรับตัว</label>
                            </div>
                            </div>
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Education">Education/การเรียน</label>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Love">Love or Sexuality/ความรักหรือเพศ</label>
                            </div>
                            </div>
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Stress">Stress and Emotion/การจัดการอารมณ์</label>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Drug">Drug Additions/ติดยาเสพติด</label>
                            </div>
                            </div>
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Health">Health/สุขภาพ</label>
                            </div>
                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="col">
                            <!-- {!! Form::radio('consult_prob', 'Family') !!} Family/ครอบครัว เศรษฐกิจ -->
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Family">Family/ครอบครัว เศรษฐกิจ</label>
                            </div>
                            </div>
                            <div class="col">
                            <!-- {!! Form::radio('consult_prob', 'Friend') !!} Friend/เพื่อน -->
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Friend">Friend/เพื่อน</label>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <!-- {!! Form::radio('consult_prob', 'Suicide') !!} <font color="red">Suicide/ฆ่าตัวตาย</font> -->
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Suicide"><font color="red">Suicide/ฆ่าตัวตาย</font></label>
                            </div>
                            </div>
                            <div class="col">
                            <!-- {!! Form::radio('consult_prob', 'Depress') !!} Depress/ซึมเศร้า -->
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Depress">Depress/ซึมเศร้า</label>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <!-- {!! Form::radio('consult_prob', 'Self') !!} Self esteem/บุคคลิกภาพ -->
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Self">Self esteem/บุคคลิกภาพ</label>
                            </div>
                            </div>
                            <div class="col">
                            <!-- {!! Form::radio('consult_prob', 'Sleep') !!} Sleeping/นอนไม่หลับ -->
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Sleep">Sleeping/นอนไม่หลับ</label>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-dark mb-3">
                    <div class="card-header"><h4>ระดับปัญหา</h4></div>
                    <div class="card-body text-dark">
                        <div class="row">
                            <div class="col">
                            <!-- {!! Form::radio('consult_level', 'ปกติ') !!} ปกติ -->
                            <div class="radio">
                                <label><input type="radio" name="consult_level" value="ปกติ">ปกติ</label>
                            </div>
                            </div>
                            <div class="col">
                            <!-- {!! Form::radio('consult_level', 'มีปัญหา') !!} มีปัญหา -->
                            <div class="radio">
                                <label><input type="radio" name="consult_level" value="มีปัญหา">มีปัญหา</label>
                            </div>
                            </div>
                            <div class="col">
                            <!-- {!! Form::radio('consult_level', 'รุนแรง') !!} รุนแรงต้องช่วยเหลือด่วน -->
                            <div class="radio">
                                <label><input type="radio" name="consult_level" value="รุนแรง">รุนแรงต้องช่วยเหลือด่วน</label>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-dark mb-3">
                    <div class="card-header"><h4>การช่วยเหลือในการแก้ปัญหา</h4></div>
                    <div class="card-body text-dark">
                        <div class="row">
                            <div class="col">
                            <!-- {!! Form::radio('helping', 'ให้คำปรึกษา') !!} ให้คำปรึกษา -->
                            <div class="radio">
                                <label><input type="radio" name="helping" value="ให้คำปรึกษา">ให้คำปรึกษา</label>
                            </div>
                            </div>
                            <div class="col">
                            <!-- {!! Form::radio('helping', 'ส่งต่อผู้เชี่ยวชาญ') !!} ส่งต่อผู้เชี่ยวชาญ -->
                            <div class="radio">
                                <label><input type="radio" name="helping" value="ส่งต่อผู้เชี่ยวชาญ">ส่งต่อผู้เชี่ยวชาญ</label>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-dark mb-3">
                    <div class="card-header"><h4>ผลการปรึกษา</h4></div>
                    <div class="card-body text-dark">
                        <div class="row">
                            <div class="col">
                            <!-- {!! Form::radio('result', 'นัดต่อ') !!} นัดต่อ -->
                            <div class="radio">
                                <label><input type="radio" name="result" value="นัดต่อ">นัดต่อ</label>
                            </div>
                            </div>
                            <div class="col">
                            <!-- {!! Form::radio('result', 'ยุติ') !!} ยุติการให้คำปรึกษา -->
                            <div class="radio">
                                <label><input type="radio" name="result" value="ยุติ">ยุติการให้คำปรึกษา</label>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-dark mb-3">
                    <div class="card-header"><h4>Conseling/Technique</h4></div>
                    <div class="card-body text-dark">
                       
                        <label>บันทึกการให้คำปรึกษา:</label>
                        <textarea  name="technique" value="" class = "form-control" rows="20"></textarea>
                    </div>
                </div>
                
                
                
                <br><br>
                <div class="text-center">
                  
                    <button type="submit" class="btn btn-primary">ยืนยัน</button>
                    <a href =  "{{url('/dashboards')}}"><button type="button" class="btn btn-danger">ยกเลิก</button></a>
                </div>
                <br><br><br>
                </div>
    </form>
        
    
@stop