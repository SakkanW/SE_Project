@extends('layouts.main')

@section('page_title','Hello Page')


@section('content')
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #e3f2fd;" id="mainNav">
  <a class="navbar-nav" href="https://getbootstrap.com/docs/4.1/components/navbar/">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/67/KU_SubLogo.png" width="100" height="100" alt="">
  </a>
  <div class="container">

    <a class="navbar-brand js-scroll-trigger" href="hello">หน้าแรก</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </div>
</nav>
<br><br><br><br><br><br><br><br>

<div class="card">

<div class="card text-center">
  <div class="card-header">
    ระบบจองเวลาสำหรับห้องให้คำปรึกษา
  </div>
  <div class="card-body">
    <h5 class="card-title">ระบบได้ทำการนัดหมายให้สำเร็จ</h5>
    <p class="card-text">โปรดมาก่อนเวลา 15 นาที</p>
    <a href="hello" class="btn btn-primary">กลับสู่หน้าแรก</a>
  </div>

</div>
</div>
@stop
