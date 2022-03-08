@extends('layouts.main')

@section('content')

<section class="page-header padding">
<div class="container">
<div class="page-content text-center">
<h2>Specialized projects</h2>
<p>Construction & Building Html Template.</p>
</div>
</div>
</section>
<section class="projects-section padding">
<div class="container">
<div class="row">
<div class="col-lg-4 col-sm-6 padding-15">
<div class="project-item">
<img src="{{asset('img/buildings/11.jpg')}}" alt="projects">
<div class="overlay"></div>
<a href="{{asset('img/buildings/11.jpg')}}" class="view-icon ajax-popup-link"> <i class="fas fa-expand"></i></a>
<div class="projects-content">
<a href="project-single" class="category">Interior</a>
<h3><a href="project-single" class="tittle">Rectangular house near italy</a></h3>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 padding-15">
<div class="project-item">
<img src="{{asset('img/buildings/12.jpg')}}" alt="projects">
<div class="overlay"></div>
<a href="{{asset('img/buildings/12.jpg')}}" class="view-icon"> <i class="fas fa-expand"></i></a>
<div class="projects-content">
<a href="project-single" class="category">Architecture</a>
<h3><a href="project-single" class="tittle">Cathedral of brasilia brasilia</a></h3>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 padding-15">
<div class="project-item">
<img src="{{asset('img/buildings/13.jpg')}}" alt="projects">
<div class="overlay"></div>
<a href="{{asset('img/buildings/13.jpg')}}" class="view-icon"> <i class="fas fa-expand"></i></a>
<div class="projects-content">
<a href="project-single" class="category">Design</a>
<h3><a href="project-single" class="tittle">Harpa concert hall reykjavik</a></h3>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 padding-15">
<div class="project-item">
<img src="{{asset('img/buildings/14.jpg')}}" alt="projects">
<div class="overlay"></div>
<a href="{{asset('img/buildings/14.jpg')}}" class="view-icon"> <i class="fas fa-expand"></i></a>
<div class="projects-content">
<a href="project-single" class="category">Architecture</a>
<h3><a href="project-single" class="tittle">Milwauke museum wisconsin</a></h3>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 padding-15">
<div class="project-item">
<img src="{{asset('img/buildings/9.jpg')}}" alt="projects">
<div class="overlay"></div>
<a href="{{asset('img/buildings/9.jpg')}}" class="view-icon"> <i class="fas fa-expand"></i></a>
<div class="projects-content">
<a href="project-single" class="category">Design</a>
<h3><a href="project-single" class="tittle">The dancing house prague</a></h3>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 padding-15">
<div class="project-item">
<img src="{{asset('img/buildings/10.jpg')}}" alt="projects">
<div class="overlay"></div>
<a href="{{asset('img/buildings/10.jpg')}}" class="view-icon"> <i class="fas fa-expand"></i></a>
<div class="projects-content">
<a href="project-single" class="category">Design</a>
<h3><a href="project-single" class="tittle">The dancing house prague</a></h3>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="sponsor-section bg-grey">
<div class="dots"></div>
<div class="container">
<div id="sponsor-carousel" class="sponsor-carousel owl-carousel">
<div class="sponsor-item">
<img src="img/sponsor1.png" alt="sponsor">
</div>
<div class="sponsor-item">
<img src="img/sponsor2.png" alt="sponsor">
</div>
<div class="sponsor-item">
<img src="img/sponsor3.png" alt="sponsor">
</div>
<div class="sponsor-item">
<img src="img/sponsor4.png" alt="sponsor">
</div>
<div class="sponsor-item">
<img src="img/sponsor5.png" alt="sponsor">
</div>
<div class="sponsor-item">
<img src="img/sponsor6.png" alt="sponsor">
</div>
<div class="sponsor-item">
<img src="img/sponsor7.png" alt="sponsor">
</div>
<div class="sponsor-item">
<img src="img/sponsor8.png" alt="sponsor">
</div>
</div>
</div>
</div>

@endsection
