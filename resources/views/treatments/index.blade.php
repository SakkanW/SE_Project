@extends('layouts.master')

@section('page_title', 'Home_treatment')

@section('content')
   

        <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              รายชื่อผู้รับคำปรึกษาคำปรึกษา</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     
                      <th>หมายเลขประจำตัว</th>
                      <th>ชื่อ</th>
                      <th>เพศ</th>
                      <th>แก้ไข</th>
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                  
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
        
   
@stop