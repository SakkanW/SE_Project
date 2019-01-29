@extends('layouts.master')

<script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light2", "dark1", "dark2"
	animationEnabled: false, // change to true
	title:{
		text: ""
	},
	data: [
	{
		// Change type to "bar", "area", "spline", "pie",etc.
		type: "column",
		dataPoints: [
			{ label: "วิศวกรรมศาสตร์ศรีราชา",  y: {{$count_eng}}  },
			{ label: "วิทยาการจัดการ", y: {{$count_scima}}  },
			{ label: "เศรษฐศาสต์ศรีราชา", y: {{$count_econ}}  },
			{ label: "พาณิชยนาวีนานาชาติ",  y: {{$count_marin}}  },
			{ label: "วิทยาศาสตร์ศรีราชา",  y: {{$count_sci}}  }
		]
	}
	]
});
chart.render();


var chart1 = new CanvasJS.Chart("chartContainer1", {
	theme: "light2", // "light2", "dark1", "dark2"
	animationEnabled: false, // change to true
	title:{
		text: ""
	},
	data: [
	{
		// Change type to "bar", "area", "spline", "pie",etc.
		type: "column",
		dataPoints: [
			{ label: "ชาย",  y: {{$count_men}}  },
			{ label: "หญิง",  y: {{$count_women}}  }
		]
	}
	]
});
chart1.render();


}
</script>



   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart for Sarah's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawSarahChart);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawAnthonyChart);

      // Callback that draws the pie chart for Sarah's pizza.
      function drawSarahChart() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['ปรับตัว',{{$count_Home}}],
          ['ฆ่าตัวตาย', {{$count_Suicide}}],
          ['การเรียน', {{$count_Education}}],
          ['ความรักหรือเพศ',{{$count_Love}}],
          ['ติดยาเสพติด', {{$count_Drug}}],
          ['สุขภาพ', {{$count_Health}}],
          ['ครอบครัว เศรษฐกิจ',{{$count_Family}}],
          ['เพื่อน',{{$count_Friend}}],
          ['ซึมเศร้า', {{$count_Depress}}],
          ['บุคคลิกภาพ', {{$count_Depress}}],
          ['นอนไม่หลับ', {{$count_Sleep}}]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'จำนวนประเภทนิสิตที่มารับการปรึกษา',
                       width:400,
                       height:300};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart_div'));
        chart.draw(data, options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
      function drawAnthonyChart() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['มีปัญหา', {{$count_pr}}],
          ['รุนแรง', {{$count_hi}}],
          ['ปกติ', {{$count_gen}}]
        ]);

        // Set options for Anthony's pie chart.
        var options = {title:'จำนวนของระดับปัญหา',
                       width:400,
                       height:300};

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Anthony_chart_div'));
        chart.draw(data, options);
      }
    </script>



@section('page_title', 'Dashboards')

@section('content')

  <div class="row">
  
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-10" >
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">{{$count_persons}} Persons!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{url('informations')}}">
                  <span class="float-left">รายชื่อทั้งหมด</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-10">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">{{$count_appointments}} New Tasks!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" >
                  <span class="float-left">งานใหม่</span>
                  <!-- <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span> -->
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-10">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">{{$count_stop}} Good!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" >
                  <span class="float-left">ปิดเคสไปแล้ว</span>
                  <!-- <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span> -->
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-10">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">{{$count_con}} Stay!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" >
                  <span class="float-left">นัดต่อ</span>
                  <!-- <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span> -->
                </a>
              </div>
            </div>
          </div>
          </div >
<center>
<div class="card mb-3 ">
<div class="card-header">
<table class="columns">
      <tr>
        <td><div id="Sarah_chart_div" style="border: 5px solid #ccc"></div></td>

        <td><div id="Anthony_chart_div" style="border: 5px solid #ccc"></div></td>
      </tr>
    </table>
</div>
</div>
</center>
          
  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">จำนวนนิสิตแต่ละคณะ</h4>
  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
  <hr>
</div>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">จำนวนผู้คนแบ่งแยกตามเพศ</h4>
  <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
  <hr>
</div>


         <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              ตารางการจองเวลาทั้งหมด</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     
                     
                      <!-- <th>หมายเลขประจำตัว</th> -->
                      <th><center>ชื่อ</center></th>
                      <!-- <th>เพศ</th> -->
                      <th><center>สถานภาพ</center></th>
                      <th><center>ปัญหาที่พบ</center></th>
                      <th><center>วันที่จอง</center></th>
                      <th><center>เวลาจอง</center></th>
                      <th><center>ยกเลิกการจอง</center></th>
                      <!-- <th>แก้ไข</th> -->
                      <!-- <th>นัดเวลาจอง</th> -->
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                   @foreach($appointments as $appointment)
                    <tr>
                      
                      <td><center><a href="{{url('informations/'.$appointment->information->id.'/treatments/create')}}">{{$appointment->information->firstname}}  {{$appointment->information->lastname}}</a></center></td>
                      <td><center>{{$appointment->information->status}}</center></td>
                      <td><center>{{$appointment->prob}}</center></td>
                      <td><center>{{ \Carbon\Carbon::parse($appointment->date_appointment)->format('d-m-Y')}}</center></td>
                      <td><center>{{ \Carbon\Carbon::parse($appointment->start_time)->format('H:i')}}-{{ \Carbon\Carbon::parse($appointment->end_time)->format('H:i')}}</center></td>
                      
                      <td>
                        <center>
                        <form  action="{{ url('/informations/'.$appointment->id.'/appointments') }}" enctype="multipart/form-data" method="post" >
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">ยกเลิก</button>
                          </form>
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

@endsection


