@extends('layouts.main')

@section('content')

<style>

.lightbox-gallery {
    background-image: linear-gradient(to right, #fc6076, #ff9a44, #ef9d43, #e75516);
    background-repeat: no-repeat;
    color: #000;
    overflow-x: hidden
}

.lightbox-gallery p {
    color: #fff
}

.lightbox-gallery h2 {
    font-weight: bold;
    margin-bottom: 40px;
    padding-top: 40px;
    color: #fff
}

@media (max-width:767px) {
    .lightbox-gallery h2 {
        margin-bottom: 25px;
        padding-top: 25px;
        font-size: 24px
    }
}

.lightbox-gallery .intro {
    font-size: 16px;
    max-width: 500px;
    margin: 0 auto 40px
}

.lightbox-gallery .intro p {
    margin-bottom: 0
}

.lightbox-gallery .photos {
    padding-bottom: 20px
}

.lightbox-gallery .item {
    padding-bottom: 30px
}

</style>

    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

    <div class="lightbox-gallery">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Gallery</h2>
            {{-- <p class="text-center">Find the lightbox gallery for your project. click on any image to open gallary</p> --}}
        </div>
        <div class="row photos">
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/1.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/1.jpg')}}">

            </a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/2.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/2.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/19.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/19.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/4.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/4.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/5.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/5.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/16.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/16.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/7.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/7.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/8.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/8.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/9.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/9.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/10.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/10.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/11.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/11.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/12.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/12.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/13.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/13.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/14.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/14.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/5.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/5.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/16.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/16.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/17.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/17.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/1.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/1.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/19.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/19.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{asset('img/buildings/4.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('img/buildings/4.jpg')}}"></a></div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

@endsection
