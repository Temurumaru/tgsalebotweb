@extends('layouts.admin')


@section('title', $data -> title)
@section('header_title', APP_NAME)
@section('sub_title', '')

@section('username', 'Admin Name')
@section('usersubname', 'Admin')

@section('content')

<div class="col-lg-12">

  @php
    use ThreadBeanPHP\C as C;

    $cards = C::find('earn_mess', "name != 'main'");
  @endphp

  @foreach ($cards as $val)

  <div class="card mb-3">
    
    <div class="row g-0">
      <div class="col-md-4">
        <img src="/assets/img/video-prev.png" class="img-fluid rounded-start" >
        {{-- <video muted="muted" class="col-md-12" controls>
          <source src="/uploads/videos/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video> --}}
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$val -> title}}</h5>
          <p class="card-text">{{$val -> text}}</p>
          
          <hr>
          <form class="row g-3" method="post" enctype="multipart/form-data" action="{{route('UpdateEarnMess')}}">
            @csrf
            <input type="hidden" name="id" value="{{$val -> id}}">
            <div class="col-md-6">
              <label for="validationDefault01" class="form-label">Title </label>
              <input disabled type="text" class="form-control" name="title" id="validationDefault01" value="{{$val -> title}}" required>
            </div>
          
            <div class="col-md-6">
                <label for="validationDefault05" class="form-label">Video</label>
                <input type="file" name="video" class="form-control" id="validationDefault05" >
            </div>
            <div class="col-md-12">
              <textarea class="form-control" style="height:12rem;" placeholder="Bu yerda fikr qoldiring" id="floatingTextarea" style="height: 100px;" name="text">{{$val -> text}}</textarea>
            </div>
            
           
        
           
            <div class="col-12">
          {{-- <button class="btn btn-danger" type="submit">Delete  Card</button> --}}

              <button class="btn btn-primary" type="submit">Yuklash</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @endforeach


</div>



{{-- <div class="col-lg-3">

  <!-- Card with an image overlay -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yangi qowiw</font></font></h5>

      <form class="row g-3">
        <div class="col-md-6">
          <label for="validationDefault01" class="form-label">Title </label>
          <input type="text" class="form-control" id="validationDefault01" value="John" required>
        </div>
      
        <div class="col-md-6">
            <label for="validationDefault05" class="form-label">Rasm yoki video</label>
            <input type="file" class="form-control" id="validationDefault05" required>
        </div>
        <div class="col-md-12">
          <textarea class="form-control" placeholder="Bu yerda fikr qoldiring" id="floatingTextarea" style="height: 100px;"></textarea>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Create Card</button>
        </div>
      </form>

    </div>
  </div><!-- End Card with an image overlay -->
  
  
  
</div> --}}

@endsection