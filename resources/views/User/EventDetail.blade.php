@extends('layout.layout')
@section('content')
@foreach($events as $event)
<div class="about_area black_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_title text-center mb-80">
                    <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" >About "{{$event->titre}}" Event</h3>
                    <br><br>
                    <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" >Organization</h4>
                    <p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" >{{$event->organization}}</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="about_thumb">
                    <div class="thumb_inner  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <img src="{{ isset($event->images) ? asset('img/'.$event->images) : 'placeholder_image_url' }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="about_info pl-68">
                    <h4 class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">C'est Quoi "{{$event->titre}}" Event</h4>
                    <p  class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">{{$event->description}}</p>
                    <a href="#" class="boxed-btn3  wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".7s">Buy Tickets</a>
                </div>
            </div>
        </div>
    </div>
</div>  


<!-- about_area_end  -->

<div class="program_details_area detials_bg_1 overlay2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-80  wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                    <h3>Event Details</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="program_detail_wrap">
                    <div class="single_propram">
                        <div class="inner_wrap">
                            <div class="circle_img"></div>
                            <div class="porgram_top">
                                <span class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Le (a) Créateur</span>
                                <h4 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">- {{$event->username}}</h4>
                            </div>
                            <div class="thumb wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                <img src="img/program_details/1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="single_propram">
                        <div class="inner_wrap">
                            <div class="circle_img"></div>
                            <div class="porgram_top">
                                <span class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">La date</span>
                                <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">- {{$event->date}}</h4>
                            </div>
                            <div class="thumb wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                <img src="img/program_details/2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="single_propram">
                        <div class="inner_wrap">
                            <div class="circle_img"></div>
                            <div class="porgram_top">
                                <span class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">L'Heure</span>
                                <h4 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">- {{$event->heure}}</h4>
                            </div>
                            <div class="thumb  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                <img src="img/program_details/3.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="single_propram">
                        <div class="inner_wrap">
                            <div class="circle_img"></div>
                            <div class="porgram_top">
                                <span class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Lieu d'Event</span>
                                <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">- {{$event->lieu}}</h4>
                            </div>
                            <div class="thumb wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                <img src="img/program_details/4.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="single_propram">
                        <div class="inner_wrap">
                            <div class="circle_img"></div>
                            <div class="porgram_top">
                                <span class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Nombre des places</span>
                                <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">- {{$event->places}} places</h4>
                            </div>
                            <div class="thumb wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                <img src="img/program_details/4.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="single_propram">
                        <div class="inner_wrap">
                            <div class="circle_img"></div>
                            <div class="porgram_top">
                                <span class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Categorie</span>
                                <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">- {{$event->nom}}</h4>
                            </div>
                            <div class="thumb wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                <img src="img/program_details/4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection