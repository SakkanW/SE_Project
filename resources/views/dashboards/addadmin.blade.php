@extends('layouts.master')

@section('page_title', 'Home')

@section('content')
   

        <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              รายชื่อผู้ใช้ระบบทั้งหมด</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     
                      <th><center>ลำดับ</center></th>
                      <th><center>ชื่อ</center></th>
                      <th><center>อีเมล</center></th>
                      <th><center>สถานะ</center></th>
                       <th><center>การดำเนินการ</center></th>
                      <!-- <th><center>สถานภาพ</center></th>
                      <th><center>สังกัด-คณะ</center></th>
                      -->
                      <!-- <th><center>นัดเวลาจอง</center></th> -->
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                   @foreach($all_users as $all_user)
                    <tr>
                      <td><center>{{ $all_user->id }}</center></td>
                      <td><center>{{ $all_user->name }}</center></td>
                      <td>{{$all_user->email}}</td>
                      <td><center>{{ $all_user->status }}</center></td>
                      <td>
                        <center>
                       @if($all_user->status == 'user')
                        <a href="{{url('/addadmin/'.$all_user->id)}}">
                          <button type="button" class="btn btn-info">เพิ่มแอดมิน</button>
                        </a>
                        @endif
                        <!-- <a href="#">
                          <span class="fa fa-eraser"></span>
                        </a> -->
                      
                        @if($all_user->id != 1)
                        <a href="{{url('/addadmin/cancle/'.$all_user->id)}}">
                        <button type="button" class="btn btn-danger">ยกเลิกแอดมิน</button>
                        </a>
                        @endif
                      </center>
                      </td>
                      
                    </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
          </div>
        </div>
        
   
@stop