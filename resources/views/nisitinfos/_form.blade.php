
     <div class="card mb-3">
        <div class="card-header">
            <div>
                <h1 class="text-center breadcrumb">ข้อมูลผู้รับคำปรึกษา</h1><br>
            </div> 
               
            <form>
            
            <div class="row">
                <div class="col">
                    {!! Form::label('firstname', 'ชื่อ: ') !!}
                    {!! Form::text('firstname', null, ['class'=>'form-control'  , 'placeholder'=>'ชื่อ']) !!}
                </div>
                <div class="col">
                    {!! Form::label('lastname', 'นามสกุล: ') !!}
                    {!! Form::text('lastname', null, ['class'=>'form-control'  , 'placeholder'=>'นามสกุล']) !!}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    {!! Form::label('id_card', 'เลขประจำตัวประชาชน: ') !!}
                    {!! Form::text('id_card', null, ['class'=>'form-control'  , 'placeholder'=>'เลขประจำตัวประชาชน']) !!}
                </div>
                <div class="col">
                    {!! Form::label('sex', 'เพศ: ') !!}
                   
                    {!! Form::select('sex', [null=>'กรุณาเลือก']+['ชาย' => 'ชาย', 'หญิง' => 'หญิง'], null, ['class' => 'form-control chosen-type', 'placeholder' => 'กรุณาเลือก']) !!}
                </div>
            </div>

            <div class="row">
            
                <div class="col">
                {!! Form::label('status', 'สถานภาพ: ') !!}
                <!--{!! Form::text('status', null, ['class'=>'form-control'  , 'placeholder'=>'บุคลลากร/นิสิต']) !!}-->
                {!! Form::select('status', [null=>'กรุณาเลือก']+['บุคลลากร' => 'บุคลลากร', 'นิสิต' => 'นิสิต'] , null, ['class' => 'form-control chosen-type','placeholder' => 'กรุณาเลือก'],null) !!}
                
                </div>
                <div class="col">
                {!! Form::label('years', 'ชั้นปี: ') !!}
                {!! Form::select('years', [null=>'กรุณาเลือก']+['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12'], null, ['placeholder' => 'กรุณาเลือก', 'class' => 'form-control chosen-type']) !!}
               
                </div>
                
            </div>
            
            <div class="row">
                <div class="col">
                {!! Form::label('tel', 'เบอร์ติดต่อ: ') !!}
                {!! Form::text('tel', null, ['class'=>'form-control'  ]) !!}
                </div>
                <div class="col">
                    {!! Form::label('faculty', 'คณะ: ') !!}
                    {!! Form::text('faculty', null, ['class'=>'form-control'  , 'placeholder'=>'คณะ']) !!}
                </div>
            </div>

            <div class="row">
                <div class="col">
                    {!! Form::label('person_tel', 'เบอร์บุคคลติดต่อฉุกเฉิน: ') !!}
                    {!! Form::text('person_tel', null, ['class'=>'form-control'  , 'placeholder'=>'']) !!}
                </div>
                <div class="col">
                    {!! Form::label('person_name', 'ชื่อบุคคลบุคคลติดต่อฉุกเฉิน: ') !!}
                    {!! Form::text('person_name', null, ['class'=>'form-control'  , 'placeholder'=>'']) !!}
                </div>
            </div>

            <div class="row">
                <div class="col">
                    {!! Form::label('closefriend_tel', 'เบอร์เพื่อนสนิท: ') !!}
                    {!! Form::text('closefriend_tel', null, ['class'=>'form-control'  , 'placeholder'=>'']) !!}
                </div>
                <div class="col">
                    {!! Form::label('closefriend_name', 'ชื่อเพื่อนสนิท: ') !!}
                    {!! Form::text('closefriend_name', null, ['class'=>'form-control'  , 'placeholder'=>'']) !!}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    {!! Form::label('his_psychiatry', 'เคยรับการรักษาทางจิตเวช: ') !!}
                   
                    {!! Form::select('his_psychiatry', [null=>'กรุณาเลือก']+['เคย' => 'เคย', 'ไม่เคย' => 'ไม่เคย'], null, ['placeholder' => 'กรุณาเลือก','class' => 'form-control']) !!}
                </div>
            </div>
            </form>
            
            
            <br><br>
            <div class="text-center">
                {!! Form::button($submitButtonText,['class'=>'btn btn-primary','type'=>'submit']) !!}
                <button type="button" class="btn btn-danger">ยกเลิก</button>
            </div>
            <br><br><br>
            </div>

