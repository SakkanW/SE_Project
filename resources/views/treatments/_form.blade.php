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
                        {!! Form::radio('type_service', 'การปรึกษาเดี่ยว') !!} การปรึกษาเดี่ยว
                        
                        </div>
                        <div class="col">
                        {!! Form::radio('type_service', 'การปรึกษากลุ่ม') !!} การปรึกษากลุ่ม
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        {!! Form::radio('type_service', 'การใช้ห้องผ่อนคลาย') !!} การใช้ห้องผ่อนคลาย
                        </div>
                        <div class="col">
                        {!! Form::radio('type_service', 'บริการหนังสือสารสนเทศ') !!} บริการหนังสือสารสนเทศ
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-dark mb-3">
                <div class="card-header"><h4>ประเภทนิสิตที่มารับการปรึกษา</h4></div>
                <div class="card-body text-dark">
                    <div class="row">
                        <div class="col">
                        {!! Form::radio('type_nisit', 'New') !!} New
                        </div>
                        <div class="col">
                        {!! Form::radio('type_nisit', 'Follow') !!} Follow
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-dark mb-3">
                <div class="card-header"><h4>ประเภทนิสิตที่มารับการปรึกษา</h4></div>
                <div class="card-body text-dark">
                    <div class="row">
                        <div class="col">
                        {!! Form::radio('consult_prob', 'Home') !!} Home/ปรับตัว
                        </div>
                        <div class="col">
                        {!! Form::radio('consult_prob', 'Education') !!} Education/การเรียน
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        {!! Form::radio('consult_prob', 'Love') !!} Love or Sexuality/ความรักหรือเพศ
                        </div>
                        <div class="col">
                        {!! Form::radio('consult_prob', 'Stress') !!} Stress and Emotion/การจัดการอารมณ์
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        {!! Form::radio('consult_prob', 'Drug') !!} Drug Additions/ติดยาเสพติด
                        </div>
                        <div class="col">
                        {!! Form::radio('consult_prob', 'Health') !!} Health/สุขภาพ
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        {!! Form::radio('consult_prob', 'Drug') !!} Drug Additions/ติดยาเสพติด
                        </div>
                        <div class="col">
                        {!! Form::radio('consult_prob', 'Health') !!} Health/สุขภาพ
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        {!! Form::radio('consult_prob', 'Family') !!} Family/ครอบครัว เศรษฐกิจ
                        </div>
                        <div class="col">
                        {!! Form::radio('consult_prob', 'Friend') !!} Friend/เพื่อน
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        {!! Form::radio('consult_prob', 'Suicide') !!} <font color="red">Suicide/ฆ่าตัวตาย</font> 
                        </div>
                        <div class="col">
                        {!! Form::radio('consult_prob', 'Depress') !!} Depress/ซึมเศร้า
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        {!! Form::radio('consult_prob', 'Self') !!} Self esteem/บุคคลิกภาพ
                        </div>
                        <div class="col">
                        {!! Form::radio('consult_prob', 'Sleep') !!} Sleeping/นอนไม่หลับ
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-dark mb-3">
                <div class="card-header"><h4>ระดับปัญหา</h4></div>
                <div class="card-body text-dark">
                    <div class="row">
                        <div class="col">
                        {!! Form::radio('consult_level', 'ปกติ') !!} ปกติ
                        </div>
                        <div class="col">
                        {!! Form::radio('consult_level', 'มีปัญหา') !!} มีปัญหา
                        </div>
                        <div class="col">
                        {!! Form::radio('consult_level', 'รุนแรง') !!} รุนแรงต้องช่วยเหลือด่วน
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-dark mb-3">
                <div class="card-header"><h4>การช่วยเหลือในการแก้ปัญหา</h4></div>
                <div class="card-body text-dark">
                    <div class="row">
                        <div class="col">
                        {!! Form::radio('helping', 'ให้คำปรึกษา') !!} ให้คำปรึกษา
                        </div>
                        <div class="col">
                        {!! Form::radio('helping', 'ส่งต่อผู้เชี่ยวชาญ') !!} ส่งต่อผู้เชี่ยวชาญ
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-dark mb-3">
                <div class="card-header"><h4>ผลการปรึกษา</h4></div>
                <div class="card-body text-dark">
                    <div class="row">
                        <div class="col">
                        {!! Form::radio('result', 'นัดต่อ') !!} นัดต่อ
                        </div>
                        <div class="col">
                        {!! Form::radio('result', 'ยุติ') !!} ยุติการให้คำปรึกษา
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-dark mb-3">
                <div class="card-header"><h4>Conseling/Technique</h4></div>
                <div class="card-body text-dark">
                    {!! Form::label('technique', 'บันทึกการให้คำปรึกษา: ') !!}
                    {!! Form::textarea('technique', null, ['class'=>'form-control']) !!}
                </div>
            </div>
            </form>
            
            
            <br><br>
            <div class="text-center">
                {!! Form::button($submitButtonText,['class'=>'btn btn-primary','type'=>'submit']) !!}
                <a href =  "{{url('/dashboards')}}"><button type="button" class="btn btn-danger">ยกเลิก</button></a>
            </div>
            <br><br><br>
            </div>