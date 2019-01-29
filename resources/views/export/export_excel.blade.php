@extends('layouts.master')

@section('page_title', 'report')

@section('content')


<div class ="row">
    <div class ="col-xs-12 col-sm-12 col-md-12">
    
       
       
       <select class= "form-control"name="year" style="width: 150px;">
        <@for ($year=2018; $year <= 2200; $year++):>
            <option value="<?=$year;?>"><?=$year;?></option>
        <@endfor;>
        </select>
        <br>
        <a href ="{{url('/excel_export_year/xlsx')}}" class="btn 
            btn-primary" style = "margin-right: 15px"> นำออกข้อมูลประจำปี
        </a> 
        <a href ="{{url('/excel_export/xlsx')}}" class="btn 
            btn-primary" style = "margin-right: 15px"> นำออกข้อมูลทั้งหมด
        </a> 
     
    </div>


</div>



    
@stop