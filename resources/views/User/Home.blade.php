@extends('layout.layout')
@section('content')

<div class="performar_area black_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title mb-80 d-flex justify-content-between">
                    <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Events</h3>
                    <div class="form-inline">
                        <input id="keyword" class="form-control mr-sm-2 bg-dark text-white" type="search" placeholder="Search with Title Or Categorys" aria-label="Search">
                        <button onclick="searchkey()" class="btn btn-outline-danger my-2 my-sm-0">Search</button>
                    </div>
                    <div class="form-inline">
                        <h4 class="">Filtre Par :</h4>
                    </div>

                    <div class="form-inline">
                        <select id="filtre" name="category" onchange="filtreKey()">
                            <option value="">Toutes les catégories</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->nom }}">
                                    {{ $category->nom }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div  id="divCont" class="row">

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function searchkey(){
       var xhr = new XMLHttpRequest();
       var keyword = document.querySelector('#keyword').value;
       xhr.open("GET", '/search/'+ keyword, true);
       xhr.onreadystatechange = function () {
        console.log(this.responseText);
        console.log('===========>');
        //    console.log(xhr.status);
           if (xhr.readyState === 4 && xhr.status === 200) {
               console.log(this.responseText);
               var responses = this.responseText;
               var tagContentElement = document.querySelector(`#divCont`);

               tagContentElement.innerHTML = responses;
           }
       };
       xhr.send();
    }
    
    searchkey();
</script>

<script>
    function filtreKey(){
       var xhr = new XMLHttpRequest();
       var filtre = document.querySelector('#filtre').value;
       console.log(filtre);
       xhr.open("GET", '/filtre/'+ filtre, true);
       xhr.onreadystatechange = function () {
           if (xhr.readyState === 4 && xhr.status === 200) {
               console.log('===========>');

               var responses = this.responseText;
               var tagContentElement = document.querySelector(`#divCont`);

               tagContentElement.innerHTML = responses;
           }
       };
       xhr.send();
    }
    filtreKey();
</script>
@endsection

