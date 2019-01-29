@extends('layouts.main')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container">
      <a class="navbar-nav" href="/">
        <img src="{{ url('template/img/KU.png') }}" width="100" height="100" alt="">
        <a href="/" id="lamoon">หน้าแรก</a>
        
      </a>
    </div>
    

  </nav><br>


<div class = "card">
  <div class = "card-header">
        <div class="text-center">
            <img src=" {{ url('template/img/smartphone.png') }}" class="img-responsive" width="150" height="150">
            <h1 id="lamoon_head">ประกาศข่าวสารจากห้องให้คำปรึกษา</h1>

        </div>
    </div>
</div>



<!-- <div class="jumbotron">
  <h1 class="display-4">ประกาศข่าวสาร!</h1>
  <p class="lead">สามารถติดตามข่าวสารประกาศของทางห้องให้คำปรึกษาได้อย่างใกล้ชิด</p>

  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="/input/create" role="button">เพิ่มข่าวสาร</a>
</div> -->

<div class="container">

    @foreach($articles as $article)

        @if($article->status == 'publish')

            <div class="card card mb-3" id="lamoon">
                <div class="card-header" >
                    <img src=" {{ url('template/img/announcement.png') }}" class="img-responsive" width="90" height="90">
                    {{ $article->title }}
                        
                </div>


                <div class="card-body" id="color1">
                    <div class="row align-items-center">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img src=" {{ url('template/img/newspaper.png') }}" class="img-responsive" width="90" height="90">
                                
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <p class="card-text">{{ $article->body }}</p>
                        </div>
                    </div>

                    <div class="text-center">
                        @if($article->url != null)
                            <a href="{{ $article->url }}"  class="btn btn-outline-success" id="lamoon_low">GO TO URL</a>
                        @endif

                        @if($article->image != null)
                            <a href="{{ $article->image }}"  class="btn btn-outline-success"id="lamoon_low">โหลดไฟล์แนบ</a>
                        @endif
                    </div>

                </div>
  
  
                <div class="card-footer text-muted" >
                    <img src=" {{ url('template/img/hourglass.png') }}" class="img-responsive" width="90" height="90">
                    ประกาศข่าวสารเมื่อ
                    {{  \Carbon\Carbon::parse($article->created_at)->diffForHumans() }}
                </div>

  

  
  <!-- <a href="{{url('/input/'.$article->id.'/edit')}}" class="btn btn-danger">ยกเลิกประกาศ</a> -->
</div>

<!-- <div class="footer">
  <p><div>Icons made by <a href="https://www.flaticon.com/authors/roundicons" title="Roundicons">Roundicons</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div></p>
  <div>Icons made by <a href="https://www.flaticon.com/authors/vectors-market" title="Vectors Market">Vectors Market</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
  <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
</div> -->


@endif
@endforeach
@stop