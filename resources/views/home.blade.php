@extends('layouts.app')

@section('content')

    <div class="container">

        <div id="myCarousel" class="carousel slide mg_40" data-ride="carousel">
            <!-- Indicators -->
            @php($i = 0)

            <ol class="carousel-indicators">

                @foreach($slader_images as $img)
                    <li data-target="#myCarousel" data-slide-to="{{$i}}"
                        class={{$i == 0 ? "active" : ""}}>
                    </li>
                    @php($i++)
                @endforeach

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @php($i = 0)
                @foreach($slader_images as $img)
                    <div class="item {{$i == 0 ? "active" : ""}} ">
                        <img src="{{asset( 'image/slider/' . $img->image)}}" alt="Los Angeles" style="width:100%;">
                    </div>
                    <div class="carousel-caption">
                        <h1>{{$img->translate(session('locale'))->title}}</h1>
                        <h4>{{$img->translate(session('locale'))->header}}</h4>
                        <p>{{$img->translate(session('locale'))->description}}</p>
                    </div>
                    @php($i++)
                @endforeach

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

@endsection
