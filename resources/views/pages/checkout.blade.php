@extends('layouts.checkout')

@section('title', 'Checkout')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Paket Travel</li>
                            <li class="breadcrumb-item">Details</li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Who is Going</h1>
                        <p>Trip to Malang</p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>Name</td>
                                        <td>Nasionality</td>
                                        <td>Visa</td>
                                        <td>Passport</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{ url('frontend/images/anya.jpg') }}" height="60">
                                        </td>
                                        <td class="align-middle">
                                            Anya Geraldine
                                        </td>
                                        <td class="align-middle">
                                            IN
                                        </td>
                                        <td class="align-middle">
                                            20 Days
                                        </td>
                                        <td class="align-middle">
                                            Active
                                        </td>
                                        <td class="align-middle"> 
                                            <a href="#">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form action="" class="form-inline">
                                <label for="inputUsername" class="sr-only">Name</label>
                                <input type="text" name="inputUsername" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="username">
                                <label for="inputVisa" class="sr-only">Visa</label>
                                <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                    <option value="visa" selected>VISA</option>
                                    <option value="30 days">30 Days</option>
                                </select>

                                <label for="doePassport" class="sr-only">DOE Passport</label>
                                <div class="input-group mb-2 mr-sm 2">
                                    <input type="text" name="doePassport" id="doePassport" class="form-control datepicker" placeholder="DOE Passport">
                                </div>
                                <button type="submit" class="btn btn-add-now btn-primary mb-2 ml-3 px-4">Add Now</button>
                            </form>

                            <h3 class="mt-2 mb-0">Note</h3>
                            <p class="disclainer mb-0">
                                You are able to invite member that has registered in E-tiket.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        
                        <h2>Checkout Information</h2>
                        <table class="trip-info">
                            <tr>
                                <th width="50%">Members</th>
                                <td width="50%" class="text-right">1 Person</td>
                            </tr>
                            <tr>
                                <th width="50%">Additional VISA</th>
                                <td width="50%" class="text-right">Rp.190k</td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">Rp.80k/Person</td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td width="50%" class="text-right">Rp.270k/person</td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+Unique)</th>
                                <td width="50%" class="text-right text-total">
                                    <span class="text-blue">Rp.270.</span><span class="text-red">500</span>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <h2>Payment Instruction</h2>
                        <p class="payment-instruction">
                            plice complate your payment, before to continue the your trip
                        </p>
                        <div class="bank">
                            <div class="bank-item pb-2">
                                <img src="{{ url('frontend/images/icon/card.png') }}" class="bank-image">
                                <div class="description">
                                    <h3>PT E-TIKET ID</h3>
                                    <p>
                                        0876 5323 65350
                                        <br>
                                        Bank Central Asia
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bank-item pb-2">
                                <img src="{{ url('frontend/images/icon/card.png') }}" class="bank-image">
                                <div class="description">
                                    <h3>PT E-TIKET ID</h3>
                                    <p>
                                        0876 7368 69350
                                        <br>
                                        Bank Syariah
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="join-container">
                        <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join-now mt-3 py-2">I Have Made Payment</a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('detail') }}" class="text-muted">Cancel Boking</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

@push('prepend-style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="{{ url('frontend/libraries/combined/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<script src="{{ url('frontend/libraries/combined/js/gijgo.min.js') }}"></script>
<script>
    $(document).ready(function() {
        
    
    $('.datepicker').datepicker({
        uilibrary: 'bootstrap4',
        icons: {
            rightIcon: '<img src="{{ url('frontend/images/icon/calendar.png') }}">'
        }
    })
});
</script>
@endpush
    