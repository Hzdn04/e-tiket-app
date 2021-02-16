@extends('layouts.app')

@section('title', 'E-TIKET')
    

@section('content')
        <!-- Header -->
        <header class="text-center">
            <h1>Explore The Beautiful World
                <br>
                As Easy On Click
            </h1>
            <h6 class="mt-3">
                You Will See Beautiful
                <br>
                You Never Walk Alone
            </h6>
            <a href="#" class="btn btn-get-started px-4 mt-4">
                <h6>Get Started</h6>
            </a>
        </header>
    
        <!-- Main -->
    
    <main>
            <div class="container">
                <section class="section-stats row justify-content-center" id="stats">
                    <div class="col-3 col-md-2 stats-detail">
                        <h2>20k</h2>
                        <p>Members</p>
                    </div>
                    <div class="col-3 col-md-2 stats-detail">
                        <h2>12</h2>
                        <p>Countries</p>
                    </div>
                    <div class="col-3 col-md-2 stats-detail">
                        <h2>3k</h2>
                        <p>Hotel</p>
                    </div>
                    <div class="col-3 col-md-2 stats-detail">
                        <h2>69</h2>
                        <p>Partners</p>
                    </div>
                </section>
            </div>
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>
                            somthing that you never try
                            <br>
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-popular-content" id="popularcontent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/bali.jpg')">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">DERATAN, BALI</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/gunung.jpg')">
                            <div class="travel-country">JAPAN</div>
                            <div class="travel-location">HOKAIDO, FUJI</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/pantai.jpg')">
                            <div class="travel-country">HAWAI</div>
                            <div class="travel-location">Kepulauan, Maria</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/coban.jpg')">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">MALANG, Coban Sewu</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Network</h2>
                        <p>
                            companies and trusted us
                            <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="frontend/images/slides.png" alt="" class="img-partner">
                    </div>
                </div>
            </div>
        </section>
        <section class="section-testimonial-heading" id="testimonialheading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>
                            Moment were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div> 
            </div>
        </section>
        <div class="section section-testimonial-content" id="testimonialcontent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/foto_mhs.jpg" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Hafizzudin</h3>
                                <p class="testimonial">
                                    saya sangat suka dengan website ini,
                                    selain aksesnya yang mudah dan juga fitur2nya yang menarik. 
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Coban sewu
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/kaew.jpg" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Kaew</h3>
                                <p class="testimonial">
                                    saya sangat suka dengan website ini,
                                    selain aksesnya yang mudah dan juga fitur2nya yang menarik. 
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Bali
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/anya.jpg" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Anya</h3>
                                <p class="testimonial">
                                    saya sangat suka dengan website ini,
                                    selain aksesnya yang mudah dan juga fitur2nya yang menarik. 
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Hawai
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
                        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection