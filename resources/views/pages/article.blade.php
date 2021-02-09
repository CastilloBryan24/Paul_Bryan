@extends('template.main')

@section('content')
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">
            <div class="row">
            @foreach ($articledb as $item)  
            <div class="col-lg-4">
                <div class="box">
                <h3>{{$item->title}}</h3>
                <span>{{$item->number}}</span>
                <h4>{{$item->subtitle}}</h4>
                <p>{{$item->paragraph}}</p>
                </div>
            </div>
            @endforeach   
            </div>
        </div>
    </section><!-- End Why Us Section -->      
@endsection