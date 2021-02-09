@extends('template.main')

@section('content')
     <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>{{$homedb[0]->title}}</h1>
          <ul>
            @foreach ($homeLidb as $item)
            <li><i class="{{$item->icone}}"></i> {{$item->paragraph}}</li>
            @endforeach
          </ul>
          <div class="mt-3">
            <a href="#about" class="btn-get-started scrollto">{{$homedb[0]->btn1}}</a>
            <a href="" class="btn-get-quote">{{$homedb[0]->btn1}}</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{asset('img/'.$homedb[0]->src)}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>{{$home2db[0]->title}}</h2>
            <h3>{{$home2db[0]->subtitle}}</h3>
            <img src="{{asset($home2db[0]->src)}}" alt="" class="w-25">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>{{$home2db[0]->paragraph1}}</p>
            <ul>
              @foreach ($homeLi2db as $item)
              <li><i class="{{$item->icone}}"></i>{{$item->paragraph}}</li>
              @endforeach
            </ul>
            <p class="font-italic">{{$home2db[0]->paragraph2}}</p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

@endsection