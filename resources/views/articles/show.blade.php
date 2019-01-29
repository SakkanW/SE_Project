@extends('layouts.master')

@section('content')


<div class = "card">
  <div class = "card-header">
    <h1>ข่าวสารที่ประกาศ</h1>
  </div>
</div>



<!-- <div class="jumbotron">
  <h1 class="display-4">ประกาศข่าวสาร!</h1>
  <p class="lead">สามารถติดตามข่าวสารประกาศของทางห้องให้คำปรึกษาได้อย่างใกล้ชิด</p>

  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="/input/create" role="button">เพิ่มข่าวสาร</a>
</div> -->



@foreach($articles as $article)



<div class="card card mb-3">
  <div class="card-header">

    {{ $article->title }}
    </a>
  </div>


  <div class="card-body">

    <p class="card-text">{{ $article->body }}</p>

    @if($article->url != null)
      <a href="{{ $article->url }}"  class="btn btn-outline-info">GO TO URL</a>
    @endif

    @if($article->image != null)
      <a href="{{ $article->image }}"  class="btn btn-outline-info">โหลดไฟล์แนบ</a>
    @endif
  </div>


  <div class="card-footer text-muted">
    ประกาศข่าวสารเมื่อ
    
    {{  \Carbon\Carbon::parse($article->created_at)->diffForHumans() }}

    <form action="{{ url('/delete/'.$article->id) }}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="_method" value="DELETE">


      <a href="{{url('/input/'.$article->id.'/edit')}}" class="btn btn-info">แก้ไขประกาศ</a>
      <button type="submit" class="btn btn-danger">ยกเลิกประกาศ</button>

    </form>
  </div>

  

  
  <!-- <a href="{{url('/input/'.$article->id.'/edit')}}" class="btn btn-danger">ยกเลิกประกาศ</a> -->
</div>


@endforeach
@stop
