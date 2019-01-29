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
            <h3 class="text-right">{{ $information->firstname }}  {{ $information->lastname }}</h3>
        </div>
    </div>
</div>
<form  action="{{ url('/informations/'.$information->id.'/treatments/'.$treatment->id) }}" enctype="multipart/form-data" method="post" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="PUT">
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
                                <label><input type="radio" name="type_service" value="การปรึกษาเดี่ยว" {{ $treatment->type_service == 'การปรึกษาเดี่ยว' ? 'checked' : '' }}>การปรึกษาเดี่ยว</label>
                            </div>
                            
                            </div>
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="type_service" value="การปรึกษากลุ่ม" {{ $treatment->type_service == 'การปรึกษากลุ่ม' ? 'checked' : '' }}>การปรึกษากลุ่ม</label>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="type_service" value="การใช้ห้องผ่อนคลาย" {{ $treatment->type_service == 'การใช้ห้องผ่อนคลาย' ? 'checked' : '' }}>การใช้ห้องผ่อนคลาย</label>
                            </div>
                            </div>
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="type_service" value="บริการหนังสือสารสนเทศ" {{ $treatment->type_service == 'บริการหนังสือสารสนเทศ' ? 'checked' : '' }}>บริการหนังสือสารสนเทศ</label>
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
                                <label><input type="radio" name="type_nisit" value="New" {{ $treatment->type_nisit == 'New' ? 'checked' : '' }}>New</label>
                            </div>
                            </div>
                            <div class="col">
                           
                            <div class="radio">
                                <label><input type="radio" name="type_nisit" value="Follow" {{ $treatment->type_nisit == 'Follow' ? 'checked' : '' }}>Follow</label>
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
                                <label><input type="radio" name="consult_prob" value="Home" {{ $treatment->consult_prob == 'Home' ? 'checked' : '' }}>Home/ปรับตัว</label>
                            </div>
                            </div>
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Education" {{ $treatment->consult_prob == 'Education' ? 'checked' : '' }}>Education/การเรียน</label>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Love" {{ $treatment->consult_prob == 'Love' ? 'checked' : '' }}>Love or Sexuality/ความรักหรือเพศ</label>
                            </div>
                            </div>
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Stress" {{ $treatment->consult_prob == 'Stress' ? 'checked' : '' }}>Stress and Emotion/การจัดการอารมณ์</label>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Drug" {{ $treatment->consult_prob == 'Drug' ? 'checked' : '' }}>Drug Additions/ติดยาเสพติด</label>
                            </div>
                            </div>
                            <div class="col">
                            
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Health" {{ $treatment->consult_prob == 'Health' ? 'checked' : '' }}>Health/สุขภาพ</label>
                            </div>
                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="col">
                            <!-- {!! Form::radio('consult_prob', 'Family') !!} Family/ครอบครัว เศรษฐกิจ -->
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Family" {{ $treatment->consult_prob == 'Family' ? 'checked' : '' }}>Family/ครอบครัว เศรษฐกิจ</label>
                            </div>
                            </div>
                            <div class="col">
                            <!-- {!! Form::radio('consult_prob', 'Friend') !!} Friend/เพื่อน -->
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Friend" {{ $treatment->consult_prob == 'Friend' ? 'checked' : '' }}>Friend/เพื่อน</label>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <!-- {!! Form::radio('consult_prob', 'Suicide') !!} <font color="red">Suicide/ฆ่าตัวตาย</font> -->
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Suicide" {{ $treatment->consult_prob == 'Suicide' ? 'checked' : '' }}><font color="red">Suicide/ฆ่าตัวตาย</font></label>
                            </div>
                            </div>
                            <div class="col">
                            <!-- {!! Form::radio('consult_prob', 'Depress') !!} Depress/ซึมเศร้า -->
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Depress" {{ $treatment->consult_prob == 'Depress' ? 'checked' : '' }}>Depress/ซึมเศร้า</label>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <!-- {!! Form::radio('consult_prob', 'Self') !!} Self esteem/บุคคลิกภาพ -->
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Self" {{ $treatment->consult_prob == 'Self' ? 'checked' : '' }}>Self esteem/บุคคลิกภาพ</label>
                            </div>
                            </div>
                            <div class="col">
                            <!-- {!! Form::radio('consult_prob', 'Sleep') !!} Sleeping/นอนไม่หลับ -->
                            <div class="radio">
                                <label><input type="radio" name="consult_prob" value="Sleep" {{ $treatment->consult_prob == 'Sleep' ? 'checked' : '' }}>Sleeping/นอนไม่หลับ</label>
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
                                <label><input type="radio" name="consult_level" value="ปกติ" {{ $treatment->consult_level == 'ปกติ' ? 'checked' : '' }}>ปกติ</label>
                            </div>
                            </div>
                            <div class="col">
                            <!-- {!! Form::radio('consult_level', 'มีปัญหา') !!} มีปัญหา -->
                            <div class="radio">
                                <label><input type="radio" name="consult_level" value="มีปัญหา" {{ $treatment->consult_level == 'มีปัญหา' ? 'checked' : '' }}>มีปัญหา</label>
                            </div>
                            </div>
                            <div class="col">
                            <!-- {!! Form::radio('consult_level', 'รุนแรง') !!} รุนแรงต้องช่วยเหลือด่วน -->
                            <div class="radio">
                                <label><input type="radio" name="consult_level" value="รุนแรง" {{ $treatment->consult_level == 'รุนแรง' ? 'checked' : '' }}>รุนแรงต้องช่วยเหลือด่วน</label>
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
                                <label><input type="radio" name="helping" value="ให้คำปรึกษา" {{ $treatment->helping == 'ให้คำปรึกษา' ? 'checked' : '' }}>ให้คำปรึกษา</label>
                            </div>
                            </div>
                            <div class="col">
                            <!-- {!! Form::radio('helping', 'ส่งต่อผู้เชี่ยวชาญ') !!} ส่งต่อผู้เชี่ยวชาญ -->
                            <div class="radio">
                                <label><input type="radio" name="helping" value="ส่งต่อผู้เชี่ยวชาญ" {{ $treatment->helping == 'ส่งต่อผู้เชี่ยวชาญ' ? 'checked' : '' }}>ส่งต่อผู้เชี่ยวชาญ</label>
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
                                <label><input type="radio" name="result" value="นัดต่อ"  {{ $treatment->result == 'นัดต่อ' ? 'checked' : '' }}>นัดต่อ</label>
                            </div>
                            </div>
                            <div class="col">
                            <!-- {!! Form::radio('result', 'ยุติ') !!} ยุติการให้คำปรึกษา -->
                            <div class="radio">
                                <label><input type="radio" name="result" value="ยุติ"  {{ $treatment->result == 'ยุติ' ? 'checked' : '' }}>ยุติการให้คำปรึกษา</label>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-dark mb-3">
                    <div class="card-header"><h4>Conseling/Technique</h4></div>
                    <div class="card-body text-dark">
                       
                        <label>บันทึกการให้คำปรึกษา:</label>
                        <textarea  name="technique" value="" class = "form-control" rows="20"> {{$treatment->technique}}</textarea>
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