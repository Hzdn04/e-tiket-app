@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
            <a href="{{ route('travel-package.index') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-pencil fa-sm text-white-50"></i> Edit Paket Travel {{ $item->title }}
            </a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('travel-package.update', $item->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" placeholder="location" value="{{ $item->location }}">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" class="d-block w-100 form-control" rows="10">{{ $item->about }}</textarea>
                </div>
                <div class="form-group">
                    <label for="event">Event</label>
                    <input type="text" class="form-control" name="event" placeholder="event" value="{{ $item->event }}">
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" class="form-control" name="language" placeholder="language" value="{{ $item->language }}">
                </div>
                <div class="form-group">
                    <label for="foods">Foods</label>
                    <input type="text" class="form-control" name="foods" placeholder="foods" value="{{ $item->foods }}">
                </div>
                <div class="form-group">
                    <label for="departure_date">Departure Date</label>
                    <input type="date" class="form-control" name="departure_date" placeholder="departure_date" value="{{ $item->departure_date }}">
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" name="duration" placeholder="duration" value="{{ $item->duration }}">
                </div>
                <div class="form-group">
                    <label for="type">Tipe</label>
                    <input type="text" class="form-control" name="type" placeholder="type" value="{{ $item->type }}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" placeholder="price" value="{{ $item->price }}">
                </div>
                <button class="btn btn-primary btn-block">Ubah</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection