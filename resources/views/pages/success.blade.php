@extends('layouts.success')

@section('title', 'Checkout Success')

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{ url('frontend/images/icon/mailbox.png') }}" width="230" height="230" alt="">
            <h1>Succes Bosku !</h1>
            <p>
                we've sent you email for trip instruction
                <br>
                please read at well
            </p>
            <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">Home Page</a>
        </div>
    </div>
</main>
@endsection

    