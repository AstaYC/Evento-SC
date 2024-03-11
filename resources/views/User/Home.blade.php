@extends('layout.layout')
@section('content')

<div class="performar_area black_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title mb-80">
                    <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Performer</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row">
                    @foreach($events as $event)
                    <div class="col-lg-6 col-md-6">
                        <div  class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div data-tilt class="thumb">
                                {{-- {{dd(isset($event->images))}} --}}
                                <a href="{{ url('/home/eventDetail/' . $event->id) }}"><img src="{{ isset($event->images) ? asset('img/'.$event->images) : 'placeholder_image_url' }}"></a>
                            </div>
                            <div class="performer_heading">
                                <h4>{{$event->titre}}</h4>
                                <span><b>Organizated By : </b>{{$event->organization}}</span>
                                <br>
                                <span><b>Categorie : </b>{{$event->nom}}</span>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection