
     <div class="card mb-3">
        <div class="card-header">
            <div>
                <h1 class="text-center breadcrumb">ข้อมูลผู้รับคำปรึกษา</h1><br>
            </div> 
               
            <form>
            
            <div class="row">
                <div class="col">
                    {!! Form::label('fname', 'ชื่อ: ') !!}
                    {!! Form::text('fname', null, ['class'=>'form-control'  , 'placeholder'=>'ชื่อ']) !!}
                </div>
                <div class="col">
                    {!! Form::label('lname', 'นามสกุล: ') !!}
                    {!! Form::text('lname', null, ['class'=>'form-control'  , 'placeholder'=>'นามสกุล']) !!}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    {!! Form::label('idcard', 'เลขประจำตัวประชาชน: ') !!}
                    {!! Form::text('idcard', null, ['class'=>'form-control'  , 'placeholder'=>'เลขประจำตัวประชาชน']) !!}
                </div>
                <div class="col">
                    {!! Form::label('sexx', 'เพศ: ') !!}
                   
                    {!! Form::select('sexx', [null=>'กรุณาเลือก']+['ชาย' => 'ชาย', 'หญิง' => 'หญิง'], null, ['class' => 'form-control chosen-type', 'placeholder' => 'กรุณาเลือก']) !!}
                </div>
            </div>

            <div class="row">
            
                <div class="col">
                {!! Form::label('stat', 'สถานภาพ: ') !!}
                <!--{!! Form::text('status', null, ['class'=>'form-control'  , 'placeholder'=>'บุคลลากร/นิสิต']) !!}-->
                {!! Form::select('stat', [null=>'กรุณาเลือก']+['บุคลลากร' => 'บุคลลากร', 'นิสิต' => 'นิสิต'] , null, ['class' => 'form-control chosen-type','placeholder' => 'กรุณาเลือก'],null) !!}
                
                </div>
                <div class="col">
                {!! Form::label('year', 'ชั้นปี: ') !!}
                {!! Form::select('year', [null=>'กรุณาเลือก']+['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12'], null, ['placeholder' => 'กรุณาเลือก', 'class' => 'form-control chosen-type']) !!}
               
                </div>
                
            </div>
            
            <div class="row">
                <div class="col">
                {!! Form::label('num', 'เบอร์ติดต่อ: ') !!}
                {!! Form::text('num', null, ['class'=>'form-control'  ]) !!}
                </div>
                <div class="col">
                    {!! Form::label('fac', 'คณะ: ') !!}
                    {!! Form::text('fac', null, ['class'=>'form-control'  , 'placeholder'=>'คณะ']) !!}
                </div>
            </div>

            <div class="row">
                <div class="col">
                    {!! Form::label('numemer', 'เบอร์บุคคลติดต่อฉุกเฉิน: ') !!}
                    {!! Form::text('numemer', null, ['class'=>'form-control'  , 'placeholder'=>'']) !!}
                </div>
                <div class="col">
                    {!! Form::label('nameemer', 'ชื่อบุคคลบุคคลติดต่อฉุกเฉิน: ') !!}
                    {!! Form::text('nameemer', null, ['class'=>'form-control'  , 'placeholder'=>'']) !!}
                </div>
            </div>

            <div class="row">
                <div class="col">
                    {!! Form::label('numfri', 'เบอร์เพื่อนสนิท: ') !!}
                    {!! Form::text('numfri', null, ['class'=>'form-control'  , 'placeholder'=>'']) !!}
                </div>
                <div class="col">
                    {!! Form::label('namefri', 'ชื่อเพื่อนสนิท: ') !!}
                    {!! Form::text('namefri', null, ['class'=>'form-control'  , 'placeholder'=>'']) !!}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    {!! Form::label('his', 'เคยรับการรักษาทางจิตเวช: ') !!}
                   
                    {!! Form::select('his', [null=>'กรุณาเลือก']+['เคย' => 'เคย', 'ไม่เคย' => 'ไม่เคย'], null, ['placeholder' => 'กรุณาเลือก','class' => 'form-control']) !!}
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
</div>
</div>

