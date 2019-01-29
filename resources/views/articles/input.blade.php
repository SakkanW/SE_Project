@extends('layouts.master')

@section('page_title','Hello Page')

@section('content')
@if($errors->any())
<ul class="alert alert-danger">

    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<form  action="{{ url('/input') }}" enctype="multipart/form-data" method="post" >
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="container">

    <div class="col">

      <div class="card border-info">
        <h5 class="card-header bg-gradient-info text-center text-dark">ประกาศข่าวสาร</h5>
        <div class="card-body">

      <label for="title">หัวข้อประกาศ</label>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">title</span>
        </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name = 'title'>
      </div>



      <label for="title">เนื้อหา</label>
      <div class="input-group mb-3">
        <!-- <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">body</span>
        </div> -->
          <textarea class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" rows="10" name = 'body'></textarea>
      </div>


          <label for="url">ลิ้งค์ที่เกี่ยวข้อง</label>
          <div class="input-group  mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon3">link</span>
            </div>
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name='url' >
            </div>

            <label for="url">แนบไฟล์</label>
          <div class="input-group  mb-3">
            <input type="file" name="image" id="fileToUpload">
            </div>
            <div class="row">
                    <div class="col">
                        <label>สถานะการประกาศ </label>
                        <select class="form-control" name = "status">
                          <option  value="publish" default = "true">publish</option>
                            
                            <option  value="hide">hide</option>
                        </select>
                        <!-- <input  type="text" class = "form-control" class = "from-control" name="his" value=""> -->
                    </div>
                </div>
                <br>

          




      <button type="submit" class="btn btn-primary">ยืนยัน</button>


            </div>

          </div>
    </div>


</div>
</form>

@stop
