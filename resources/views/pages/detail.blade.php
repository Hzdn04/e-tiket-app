@extends('layouts.app')

@section('title', 'Detail Travel')
    
@section('content')

{{-- style --}}

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

{{-- Main --}}

<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Paket Travel</li>
                            <li class="breadcrumb-item active">Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Malang</h1>
                        <p>Indonesia</p>
                        <div class="galery">
                            <div class="xzoom-container">
                                <img src="frontend/images/bengkung.jpg" class="xzoom" id="xzoom-default" xoriginal="frontend/images/bengkung.jpg">
                            </div>
                            <div class="zoom-thumbs">
                                <a href="frontend/images/bengkung.jpg">
                                    <img src="frontend/images/bengkung.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/bengkung.jpg">
                                </a>
                                <a href="frontend/images/pantai.jpg">
                                    <img src="frontend/images/pantai.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/pantai.jpg">
                                </a>
                                <a href="frontend/images/bengkung.jpg">
                                    <img src="frontend/images/bengkung.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/bengkung.jpg">
                                </a>
                                <a href="frontend/images/bengkung.jpg">
                                    <img src="frontend/images/bengkung.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/bengkung.jpg">
                                </a>
                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsa corrupti, id eaque exercitationem, fugiat cum quod quo laborum magnam aspernatur nobis reiciendis, distinctio nesciunt facere voluptatem dolores quae recusandae?
                        </p>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus nobis, impedit explicabo, asperiores recusandae inventore animi ex doloremque minus est esse officiis tempore atque? Consectetur dolorum voluptas numquam quasi praesentium.
                            Veritatis explicabo, reiciendis voluptatibus inventore quasi neque voluptatem ducimus ad in blanditiis voluptate est. Cupiditate, optio? Reprehenderit a aut ut sunt, vitae non perferendis similique qui provident perspiciatis soluta! Placeat.
                            Aspernatur molestias aliquam iure deserunt et quibusdam quis soluta distinctio adipisci necessitatibus laudantium exercitationem fuga, quidem excepturi modi, minima eius voluptatum accusantium nulla est quo. Laboriosam itaque reprehenderit soluta maiores.
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                <img class="features-image" src="frontend/images/icon/ticket.png" alt="">
                                <div class="description">
                                    <h3>Feature Event</h3>
                                    <p>Kuda Lumping</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img class="features-image" src="frontend/images/icon/translating.png" alt="">
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>East Java</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img class="features-image" src="frontend/images/icon/fast-food.png" alt="">
                                <div class="description">
                                    <h3>Foods</h3>
                                    <p>Rujak</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members Are Going</h2>
                        <div class="members my-2">
                            <img src="frontend/images/icon/member1.png" alt="" class="member-image mr-1">
                            <img src="frontend/images/icon/member2.png" alt="" class="member-image mr-1">
                            <img src="frontend/images/icon/member3.png" alt="" class="member-image mr-1">
                            <img src="frontend/images/icon/member4.png" alt="" class="member-image mr-1">
                        </div>
                        <hr>
                        <h2>Trip Information</h2>
                        <table class="trip-info">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">21 January 2021</td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">4D 3N</td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">Open Trip</td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">Rp.100/person</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
    
@endsection


@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth : 500,
            title: false,
            tint:'#333',
            xoffset: 15,
        });
    });
</script>
@endpush