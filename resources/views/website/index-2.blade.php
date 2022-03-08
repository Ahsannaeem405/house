@extends('layouts.main')

@section('content')

<style>

.cards {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}

.card-c {
  margin: 40px;
  position: relative;
  max-width: 250px;
  max-height: 350px;
  box-shadow: 0 40px 60px -6px black;
}

.card-c-title {
  display: block;
  text-align: center;
  color: #fff;
  background-color: #6184a8;
  padding: 2%;
  border-top-right-radius: 4px;
  border-top-left-radius: 4px;
}

.card-c img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  position: relative;
}

.card-c-desc {
  display: block;
  font-size: 1.2rem;
  position: absolute;
  height: 0;
  top: 0;
  opacity: 0;
  padding: 18px 8%;
  background-color: white;
  /* overflow-y: scroll; */
  transition: 0.8s ease;
}

.card-c:hover .card-c-desc {
  opacity: 1;
  height: 100%;
}

.btn-hover {
    width: 200px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin: 20px;
    height: 55px;
    text-align:center;
    border: none;
    background-size: 300% 100%;

    border-radius: 50px;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:hover {
    background-position: 100% 0;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:focus {
    outline: none;
}

.btn-hover.color-4 {
    background-image: linear-gradient(to right, #fc6076, #ff9a44, #ef9d43, #e75516);
    box-shadow: 0 4px 15px 0 rgba(252, 104, 110, 0.75);
}

</style>


<div id="main-slider" class="dl-slider">
<div class="single-slide">
<div class="bg-img kenburns-top-right" style="background-image: url(img/slider-1.jpg);"></div>
<div class="overlay"></div>
<div class="slider-content-wrap d-flex align-items-center text-left">
<div class="container">
<div class="slider-content">
<div class="dl-caption medium"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="1s">Residencial</div></div></div>
<div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2s">We provide outstanding</div></div>
</div>
<div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2.5s">construction services.</div></div></div>
<div class="dl-caption small"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="3s">We have provided complete remodeling and construction solutions for <br>residential and commercial properties in cities.</div></div></div>
<div class="dl-btn-group">
<div class="inner-layer">
<a href="#" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">View Projects <i class="arrow_right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="single-slide">
<div class="bg-img kenburns-top-right" style="background-image: url(img/slider-2.jpg);"></div>
<div class="overlay"></div>
<div class="slider-content-wrap d-flex align-items-center text-center">
<div class="container">
<div class="slider-content">
<div class="dl-caption medium"><div class="inner-layer"><div data-animation="fade-in-top" data-delay="1s">Residencial</div></div></div>
<div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-bottom" data-delay="2s">We are professional</div></div>
</div>
<div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-bottom" data-delay="2.5s">for building construction.</div></div></div>
<div class="dl-caption small"><div class="inner-layer"><div data-animation="fade-in-bottom" data-delay="3s">We have provided complete remodeling and construction solutions for <br>residential and commercial properties in cities.</div></div></div>
<div class="dl-btn-group">
<div class="inner-layer">
<a href="#" class="dl-btn" data-animation="fade-in-bottom" data-delay="3.5s">View Projects <i class="arrow_right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="single-slide">
<div class="bg-img kenburns-top-right" style="background-image: url(img/slider-3.jpg);"></div>
<div class="overlay"></div>
<div class="slider-content-wrap d-flex align-items-center text-right">
<div class="container">
<div class="slider-content">
<div class="dl-caption medium"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="1s">Residencial</div></div></div>
<div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="2s">We will be happy to take care</div></div>
</div>
<div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="2.5s">of your construction works.</div></div></div>
<div class="dl-caption small"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="3s">We have provided complete remodeling and construction solutions for <br>residential and commercial properties in cities.</div></div></div>
<div class="dl-btn-group">
<div class="inner-layer">
<a href="#" class="dl-btn" data-animation="fade-in-right" data-delay="3.5s">View Projects <i class="arrow_right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<section class="promo-section padding">
<div class="container">
<div class="row promo-wrap">
<div class="col-lg-3 col-sm-6 sm-padding">
<div class="promo-item box-shadow text-center wow fadeInUp" data-wow-delay="100ms">
<i class="flaticon-factory"></i>
<h3>Professional Liability</h3>
<p>A portable, demountable or transportable building is a building designed and built to be movable rather than permanently located.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 sm-padding">
<div class="promo-item box-shadow text-center wow fadeInUp" data-wow-delay="300ms">
<i class="flaticon-worker"></i>
<h3>Dedicated To Clients</h3>
<p>Design your own storage building, shed, barn, or cabin. Rent to own, plus FREE delivery & setup. Find an Portable Buildings Dealer near you!</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 sm-padding">
<div class="promo-item box-shadow text-center wow fadeInUp" data-wow-delay="400ms">
<i class="flaticon-gear"></i>
<h3>Outstanding Services</h3>
<p>Derksen offers the nation's best value in portable buildings, with great prices, outstanding service and the option to buy or rent to own with no credit.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 sm-padding">
<div class="promo-item box-shadow text-center wow fadeInUp" data-wow-delay="500ms">
<i class="flaticon-worker-1"></i>
<h3>Clients Satisfaction</h3>
<p>Portable Buildings is your source for portable storage buildings. Visit our website for more ... For us, what is important is our clients and their satisfaction.</p>
</div>
</div>
</div>
</div>
</section>

<section class="popular-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="text-center text-uppercase">Our Most Popular Styles</h1>

                <div class="cards">
                    <div class="card-c">
                      {{-- <h2 class="card-title">Seal</h2> --}}
                      <img src="{{asset('img/buildings/20.jpg')}}" alt="">
                      <div class="card-c-desc text-center">
                          <h3>Metal Carports</h3>
                          <p>Order a custom metal carport from our wide variety – one-car carport, two-car carport, multiple car carports, and many more!</p>
                          <a href="#" class="btn btn-danger">See More</a>
                      </div>
                    </div>

                    <div class="card-c">
                        {{-- <h2 class="card-title">Seal</h2> --}}
                        <img src="{{asset('img/buildings/3.jpg')}}" alt="">
                        <div class="card-c-desc text-center">
                            <h3>Metal Garages</h3>
                            <p>Privacy and security built from the ground up, order your Custom Garage today!</p>
                            <a href="#" class="btn btn-danger">See More</a>
                        </div>
                      </div>

                      <div class="card-c">
                        {{-- <h2 class="card-title">Seal</h2> --}}
                        <img src="{{asset('img/buildings/11.jpg')}}" alt="">
                        <div class="card-c-desc text-center">
                            <h3>Metal Barns</h3>
                            <p>Custom-built steel barns constructed with high-quality materials for the protection of your livestock and equipment!</p>
                            <a href="#" class="btn btn-danger">See More</a>
                        </div>
                      </div>

                </div>

                <div class="cards">
                    <div class="card-c">
                      {{-- <h2 class="card-title">Seal</h2> --}}
                      <img src="{{asset('img/buildings/13.jpg')}}" alt="">
                      <div class="card-c-desc text-center">
                          <h3>Metal RV Covers</h3>
                          <p>Safeguard your RV with a sturdy RV Shelter from elements when you take a break from adventure

</p>
                          <a href="#" class="btn btn-danger">See More</a>
                      </div>
                    </div>

                    <div class="card-c">
                        {{-- <h2 class="card-title">Seal</h2> --}}
                        <img src="{{asset('img/buildings/15.jpg')}}" alt="">
                        <div class="card-c-desc text-center">
                            <h3>Metal Workshop Buildings</h3>
                            <p>Are you in need of a place for your tools, equipment, and space to work? You should consider a custom built, durable and affordable steel workshop to suit your needs and budget!</p>
                            <a href="#" class="btn btn-danger">See More</a>
                        </div>
                      </div>

                      <div class="card-c">
                        {{-- <h2 class="card-title">Seal</h2> --}}
                        <img src="{{asset('img/buildings/17.jpg')}}" alt="">
                        <div class="card-c-desc text-center">
                            <h3>Utility Carports and Storage Buildings</h3>
                            <p>Prefabricated custom metal buildings, Clear Span Metal Buildings, Utility Carports and Metal Sheds - Custom built just for you, Order Now!!</p>
                            <a href="#" class="btn btn-danger">See More</a>
                        </div>
                      </div>

                </div>

                <div class="button text-center">
                    <button type="button" class="btn-hover color-4">View All Styles</button>
                </div>
        </div>
    </div>
</section>

<section class="blog-section padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">

                        <form class="form-horizontal" method="post" action="#">

                            <div class="form-group">
                                <label for="name" class="cols-sm-2 control-label">Your Name</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username" class="cols-sm-2 control-label">City</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="city" id="username" placeholder="Enter your City" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">Phone</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="phone" id="password" placeholder="Enter your Phone" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirm" class="cols-sm-2 control-label">Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="password" placeholder="Enter your Password" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <button type="button" class="btn btn-warning btn-lg btn-block login-button">Register</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-md-6">

                <h2>Featured News & Promotions</h2>

                    <div class="card">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="text-left" href="#">
                                    <img class="h-100" src="{{asset('img/buildings/9.jpg')}}">
                                  </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><span><i class="fa fa-calendar"></i> 2 days, 8 hours </span></li>
                                        <li class="list-inline-item">|</li>
                                        <li class="list-inline-item">Special Holidays</li>
                                      </ul>
                                    <h3 class="card-heading">Metal Carports</h3>
                          <p>Order a custom metal carport from our wide variety – one-car carport, two-car carport, multiple car carports, and many more!</p>

                               </div>
                            </div>
                        </div>
                  </div>

                  <div class="card my-3">
                    <div class="row">
                        <div class="col-md-4">
                            <a class="text-left" href="#">
                                <img class="h-100" src="{{asset('img/buildings/7.jpg')}}">
                              </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><span><i class="fa fa-calendar"></i> 2 days, 8 hours </span></li>
                                    <li class="list-inline-item">|</li>
                                    <li class="list-inline-item">Special Holidays</li>
                                  </ul>
                                <h3 class="card-heading">Metal Barns</h3>
                            <p>Custom-built steel barns constructed with high-quality materials for the protection of your livestock and equipment!</p>

                           </div>
                        </div>
                    </div>
              </div>

              <div class="card my-3">
                <div class="row">
                    <div class="col-md-4">
                        <a class="text-left" href="#">
                            <img class="h-100" src="{{asset('img/buildings/3.jpg')}}">
                          </a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="list-inline">
                                <li class="list-inline-item"><span><i class="fa fa-calendar"></i> 2 days, 8 hours </span></li>
                                <li class="list-inline-item">|</li>
                                <li class="list-inline-item">Special Holidays</li>
                              </ul>
                            <h3 class="card-heading">Metal RV Covers</h3>
                          <p>Safeguard your RV with a sturdy RV Shelter from elements when you take a break from adventure


                       </div>
                    </div>
                </div>
          </div>

            </div>
        </div>
    </div>
</section>

<section class="video-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--Carousel Wrapper-->
<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
    <li data-target="#video-carousel-example2" data-slide-to="1"></li>
    
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!-- First slide -->
    <div class="carousel-item active">
      <!--Mask color-->
      <div class="view">
        <!--Video source-->
        <video class="video-fluid" autoplay loop muted controls>
          <source src="{{asset('img/buildings/video1.mp4')}}" type="video/mp4" />
        </video>
        <div class="mask rgba-indigo-light"></div>
      </div>

      <!--Caption-->
     <!--  <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive">Light mask</h3>
        </div>
      </div> -->
      <!--Caption-->
    </div>
    <!-- /.First slide -->

    <!-- Second slide -->
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <!--Video source-->
        <video class="video-fluid" autoplay loop muted>
          <source src="{{asset('img/buildings/video2.mp4')}}" type="video/mp4" />
        </video>
        <div class="mask rgba-purple-slight"></div>
      </div>

      <!--Caption-->
     <!--  <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive">Super light mask</h3>
        </div>
      </div> -->
      <!--Caption-->
    </div>
    <!-- /.Second slide -->

  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--Carousel Wrapper-->
            </div>
        </div>
    </div>
    
</section>

<section class="service-section section-2 bg-grey padding">
<div class="dots"></div>
<div class="container">
<div class="row d-flex align-items-center">
<div class="col-lg-6 sm-padding">
<div class="service-content wow fadeInLeft">
<span>Explore The Features</span>
<h2>Offering the most complete integrated package!</h2>
<p>We are committed to building a sustainable future by fostering a collaborative spirit that creates exceptional experiences, balanced relationships, and community built environment. Building isn’t just job. It's our passion. With every project we undertake, we set the bar high and provide the best industry.</p>
<p>Building isn’t just job. It's our passion. With every project we undertake, we set the bar high and provide the best industry.</p>
<a href="#" class="default-btn">Our All Services</a>
</div>
</div>
<div class="col-lg-6 sm-padding">
<div class="row services-list">
<div class="col-md-6 padding-15">
<div class="service-item box-shadow wow fadeInUp" data-wow-delay="100ms">
<i class="flaticon-loader"></i>
<h3>General Building</h3>
<p>One of the great things about metal buildings is their customizable nature. When you order from American Carports, Inc., you are not limited to our pre-designed building options!</p>
</div>
</div>
<div class="col-md-6 padding-15 offset-top">
<div class="service-item box-shadow wow fadeInUp" data-wow-delay="300ms">
<i class="flaticon-tanks"></i>
<h3>Building Construction</h3>
<p>The main motivation to opt for a custom building is to create a structure that will perfectly fit your needs. While you might have similar needs to some of our other customers, it’s unlikely that you require exactly the same things as everyone else.</p>
</div>
</div>
<div class="col-md-6 padding-15">
<div class="service-item box-shadow wow fadeInUp" data-wow-delay="400ms">
<i class="flaticon-refinery"></i>
<h3>Refurbishments</h3>
<p>Portable Refurbished Buildings stock a wide variety of pre-owned modular buildings and used portable cabins to suit all applications</p>
</div>
</div>
<div class="col-md-6 padding-15 offset-top">
<div class="service-item box-shadow wow fadeInUp" data-wow-delay="500ms">
<i class="flaticon-control-system"></i>
<h3>Building Renovation</h3>
<p>You have your own vision for how your building will be used, and only a custom structure will be able to match up perfectly with what you hope to achieve. Since metal buildings are so easy to customize when you work with an experienced supplier like Portable Buildings, Inc.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="counter-section padding">
<div class="container">
<div class="row counter-wrap">
<div class="col-lg-3 col-sm-6 padding-15">
<div class="counter-content wow fadeInUp" data-wow-delay="100ms">
<div class="counter"><span class="odometer" data-count="100">00</span></div>
<h4>Partners Worldwide</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 padding-15">
<div class="counter-content wow fadeInUp" data-wow-delay="200ms">
<div class="counter"><span class="odometer" data-count="325">00</span></div>
<h4>Employees and Stuffs</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 padding-15">
<div class="counter-content wow fadeInUp" data-wow-delay="300ms">
<div class="counter"><span class="odometer" data-count="10">00</span></div>
<h4>Year Of Experience</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 padding-15">
<div class="counter-content wow fadeInUp" data-wow-delay="400ms">
<div class="counter"><span class="odometer" data-count="554">00</span></div>
<h4>Projects Completed</h4>
</div>
</div>
</div>
</div>
</section>
<section class="projects-section padding">
<div class="container">
<div class="row d-flex align-items-center">
<div class="col-lg-8 col-md-6 sm-padding">
<div class="section-heading mb-40">
<span>Projects</span>
<h2>Discover the most fascinating <br>projects for our clients</h2>
</div>
</div>
<div class="col-lg-4 col-md-6 sm-padding text-right">
<a href="#" class="default-btn">View All Projects</a>
</div>
</div>
<div id="projects-carousel" class="projects-carousel box-shadow owl-carousel">
<div class="project-item">
<img src="{{asset('img/buildings/9.jpg')}}" alt="projects">
<div class="overlay"></div>
<a href="{{asset('img/buildings/9.jpg')}}" class="view-icon img-popup" data-gall="project"> <i class="fas fa-expand"></i></a>
<div class="projects-content">
<a href="project-single" class="category">Interior</a>
<h3><a href="project-single" class="tittle">Rectangular house near italy</a></h3>
</div>
</div>
<div class="project-item">
<img src="{{asset('img/buildings/10.jpg')}}" alt="projects">
<div class="overlay"></div>
<a href="{{asset('img/buildings/10.jpg')}}" class="view-icon img-popup" data-gall="project"> <i class="fas fa-expand"></i></a>
<div class="projects-content">
<a href="project-single" class="category">Architecture</a>
<h3><a href="project-single" class="tittle">Cathedral of brasilia brasilia</a></h3>
</div>
</div>
<div class="project-item">
<img src="{{asset('img/buildings/11.jpg')}}" alt="projects">
<div class="overlay"></div>
<a href="{{asset('img/buildings/11.jpg')}}" class="view-icon img-popup" data-gall="project"> <i class="fas fa-expand"></i></a>
<div class="projects-content">
<a href="project-single" class="category">Design</a>
<h3><a href="project-single" class="tittle">Harpa concert hall reykjavik</a></h3>
</div>
</div>
<div class="project-item">
<img src="{{asset('img/buildings/12.jpg')}}" alt="projects">
<div class="overlay"></div>
<a href="{{asset('img/buildings/12.jpg')}}" class="view-icon img-popup" data-gall="project"> <i class="fas fa-expand"></i></a>
<div class="projects-content">
<a href="project-single" class="category">Architecture</a>
<h3><a href="project-single" class="tittle">Milwauke museum wisconsin</a></h3>
</div>
</div>
<div class="project-item">
<img src="{{asset('img/buildings/13.jpg')}}" alt="projects">
<div class="overlay"></div>
<a href="{{asset('img/buildings/13.jpg')}}" class="view-icon img-popup" data-gall="project"> <i class="fas fa-expand"></i></a>
<div class="projects-content">
<a href="project-single" class="category">Design</a>
<h3><a href="project-single" class="tittle">The dancing house prague</a></h3>
</div>
</div>
</div>
</div>
</section>
<section class="team-section bg-gray padding">
<div class="dots"></div>
<div class="container">
<div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
<span>Team</span>
<h2>Speciallized team</h2>
</div>
<div class="row team-wrap box-shadow">
<div class="col-lg-3 col-sm-6 padding-15">
<div class="team-item">
<div class="overlay"></div>
<img src="img/Worker-1.jpg" alt="team">
<div class="team-content">
<h3>Jhon Castellon</h3>
<span>Architect</span>
</div>
<ul class="team-social">
<li><a href="#"><i class="ti-facebook"></i></a></li>
<li><a href="#"><i class="ti-twitter"></i></a></li>
<li><a href="#"><i class="ti-instagram"></i></a></li>
<li><a href="#"><i class="ti-youtube"></i></a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6 padding-15">
<div class="team-item">
<div class="overlay"></div>
<img src="img/Worker-2.jpg" alt="team">
<div class="team-content">
<h3>José Carpio</h3>
<span>Designer</span>
</div>
<ul class="team-social">
<li><a href="#"><i class="ti-facebook"></i></a></li>
<li><a href="#"><i class="ti-twitter"></i></a></li>
<li><a href="#"><i class="ti-instagram"></i></a></li>
<li><a href="#"><i class="ti-youtube"></i></a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6 padding-15">
<div class="team-item">
<div class="overlay"></div>
<img src="img/Worker-3.jpg" alt="team">
<div class="team-content">
<h3>Valentin Lacoste</h3>
<span>Developer</span>
</div>
<ul class="team-social">
<li><a href="#"><i class="ti-facebook"></i></a></li>
<li><a href="#"><i class="ti-twitter"></i></a></li>
<li><a href="#"><i class="ti-instagram"></i></a></li>
<li><a href="#"><i class="ti-youtube"></i></a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6 padding-15">
<div class="team-item">
<div class="overlay"></div>
<img src="img/Worker-4.jpg" alt="team">
<div class="team-content">
<h3>Kyle Frederick</h3>
<span>Marketer</span>
</div>
<ul class="team-social">
<li><a href="#"><i class="ti-facebook"></i></a></li>
<li><a href="#"><i class="ti-twitter"></i></a></li>
<li><a href="#"><i class="ti-instagram"></i></a></li>
<li><a href="#"><i class="ti-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</section>
<section class="content-section padding">
<div class="container">
<div class="row content-wrap">
<div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="100ms">
<img class="box-shadow" src="img/content-1.jpg" alt="img">
</div>
<div class="col-lg-6 sm-padding">
<div class="content-info wow fadeInRight" data-wow-delay="300ms">
<span>Explore The Features</span>
<h2>Offering the most complete integrated package!</h2>
<p>We are committed to building a sustainable future by fostering a collaborative spirit that creates exceptional experiences, balanced relationships, and community built environment. Building isn’t just job. It's our passion. With every project we undertake, we set the bar high and provide the best industry.</p>
<a href="#" class="default-btn">Get Free Quote</a>
</div>
</div>
</div>
</div>
</section>
<section class="testimonial-section bg-grey padding">
<div class="dots"></div>
<div class="container">
<div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
<span>Testimonial</span>
<h2>What people says</h2>
</div>
<div id="testimonial-carousel" class="testimonial-carousel box-shadow owl-carousel">
<div class="testi-item d-flex align-items-center">
<img src="img/testi-1.jpg" alt="img">
<div class="testi-content">
<p>"Thank you for guiding us through the construction process, understanding, and always ready to accommodate our needs. We love our new space and know that it was built by the very best!"</p>
<h3>Kyle Frederick</h3>
<ul class="rattings">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul>
<span>Director</span>
</div>
<i class="fa fa-quote-right"></i>
</div>
<div class="testi-item d-flex align-items-center">
<img src="img/testi-2.jpg" alt="img">
<div class="testi-content">
<p>"Thank you for guiding us through the construction process, understanding, and always ready to accommodate our needs. We love our new space and know that it was built by the very best!"</p>
<h3>Valentin Lacoste</h3>
<ul class="rattings">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul>
<span>Director</span>
</div>
<i class="fa fa-quote-right"></i>
</div>
<div class="testi-item d-flex align-items-center">
<img src="img/testi-3.jpg" alt="img">
<div class="testi-content">
<p>"Thank you for guiding us through the construction process, understanding, and always ready to accommodate our needs. We love our new space and know that it was built by the very best!"</p>
<h3>José Carpio</h3>
<ul class="rattings">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul>
<span>Director</span>
</div>
<i class="fa fa-quote-right"></i>
</div>
</div>
</div>
</section>
<section class="blog-section padding">
<div class="container">
<div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
<span>From Blog</span>
<h2>Speciallized news</h2>
</div>
<div class="row blog-wrap">
<div class="col-lg-4 col-sm-6 sm-padding">
<div class="blog-item box-shadow">
<div class="blog-thumb">
<img src="{{asset('img/buildings/8.jpg')}}" alt="post">
<span class="category"><a href="blog-single">interior</a></span>
</div>
<div class="blog-content">
<h3><a href="blog-single">Minimalist trending in modern architecture 2019</a></h3>
<p>Building first evolved out dynamics between needs means available building materials attendant skills.</p>
<a href="blog-single" class="read-more">Read More</a>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 sm-padding">
<div class="blog-item box-shadow">
<div class="blog-thumb">
<img src="{{asset('img/buildings/2.jpg')}}" alt="post">
<span class="category"><a href="blog-single">Architecture</a></span>
</div>
<div class="blog-content">
<h3><a href="blog-single">Terrace in the town yamazaki kentaro design workshop.</a></h3>
<p>Building first evolved out dynamics between needs means available building materials attendant skills.</p>
<a href="blog-single" class="read-more">Read More</a>
 </div>
</div>
</div>
<div class="col-lg-4 col-sm-6 sm-padding">
<div class="blog-item box-shadow">
<div class="blog-thumb">
<img src="{{asset('img/buildings/4.jpg')}}" alt="post">
<span class="category"><a href="blog-single">Design</a></span>
</div>
<div class="blog-content">
<h3><a href="blog-single">W270 house são paulo arquitetos fabio jorge architeqture.</a></h3>
<p>Building first evolved out dynamics between needs means available building materials attendant skills.</p>
<a href="blog-single" class="read-more">Read More</a>
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
