@extends('layouts.master')

@section('page_title', 'Home')

@section('content')
   

        <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              รายชื่อผู้รับคำปรึกษา</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     
                      <th><center>ลำดับ</center></th>
                      <th><center>เลขประจำตัวประชาชน</center></th>
                      <th><center>ชื่อ</center></th>
                      <th><center>เพศ</center></th>
                      <th><center>สถานภาพ</center></th>
                      <th><center>สังกัด-คณะ</center></th>
                      <th><center>การดำเนินการ</center></th>
                      <!-- <th><center>นัดเวลาจอง</center></th> -->
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                   @foreach($informations as $information)
                    <tr>
                      <td><center>{{ $information->id }}</center></td>
                      <td><center>{{ $information->id_card }}</center></td>
                      <td><a href="{{url('informations/'.$information->id.'/edit')}}">{{ $information->firstname }}  {{ $information->lastname }}</td>
                      <td><center>{{ $information->sex }}</center></td>
                      <td><center>{{$information->status}}</center></td>
                      <td>{{$information->faculty}}</td>
                      <td>
                        <!-- <center> -->
                       
                        <a href="{{url('informations/'.$information->id.'/treatments'.'/create')}}">
                          <button type="button" class="btn btn-info">ปรึกษา</button>
                        </a>
                        <!-- <a href="#">
                          <span class="fa fa-eraser"></span>
                        </a> -->
                      
                     
                        <a href="{{url('informations/'.$information->id.'/appointments'.'/create')}}">
                        <button type="button" class="btn btn-primary">นัด</button>
                        </a>

                        <a href="{{url('/informations/delete/'.$information->id)}}">
                        <button type="button" class="btn btn-danger">ลบ</button>
                        </a>
                      <!-- </center> -->
                      </td>
                      
                    </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
        
   
@stop