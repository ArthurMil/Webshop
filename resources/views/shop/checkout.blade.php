@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <h1>CheckOut</h1>
                <h4>Your Total: {{ $total }}&euro;</h4>
            <div id="charge-error" class="alert alert-danger" {{ !Session::has('error') ? 'hidden' : '' }}>
                {{ Session::get('error') }}
            </div>
            <form action="{{ route('checkout') }}" method="post" id="checkout-form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" required name="name">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" class="form-control" required name="address">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-name">Card Holder Name</label>
                            <input type="text" id="card-name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-number">Credit Card Number</label>
                            <input type="text" id="card-number" class="form-control" required>
                        </div>
                    </div>
                    {{--<div class="col-xs-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="card-expiry-month">Expiration Month</label>--}}
                            {{--<input type="text" id="card-expiry-month" class="form-control" required>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="card-expiry-year">Expiration Year</label>--}}
                            {{--<input type="text" id="card-expiry-year" class="form-control" required>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                        <div class="col-xs-12">
                            <div class="form-group">
                            <label class="control-label" for="expiry-month">Expiration Date: </label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <select class="form-control" name="card-expiry-month" id="card-expiry-month">
                                        <option>Month</option>
                                        <option value="01">Jan  (01)</option>
                                        <option value="02">Feb  (02)</option>
                                        <option value="03">Mar  (03)</option>
                                        <option value="04">Apr  (04)</option>
                                        <option value="05">May  (05)</option>
                                        <option value="06">June (06)</option>
                                        <option value="07">July (07)</option>
                                        <option value="08">Aug  (08)</option>
                                        <option value="09">Sep  (09)</option>
                                        <option value="10">Oct  (10)</option>
                                        <option value="11">Nov  (11)</option>
                                        <option value="12">Dec  (12)</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="form-control" name="card-expiry-year" id="card-expiry-year">
                                        <option value="16">2016</option>
                                        <option value="17">2017</option>
                                        <option value="18">2018</option>
                                        <option value="19">2019</option>
                                        <option value="20">2020</option>
                                        <option value="21">2021</option>
                                        <option value="22">2022</option>
                                        <option value="23">2023</option>
                                        <option value="23">2024</option>
                                        <option value="23">2025</option>
                                        <option value="23">2026</option>
                                        <option value="23">2027</option>
                                        <option value="23">2028</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-cvc">CVC</label>
                            <input type="text" id="card-cvc" class="form-control" required>
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">Order Now</button>
                <a href="{{ route('product.shoppingCart') }}" type="submit" class="btn btn-danger">Back</a>
            </form>
        </div>
    </div>
@endsection

@section('footer')
    <div class="footerOk">
        <div class="container">
            <nav class="footerAlign">
                <ul>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Sales</a></li>
                    <li><a href="#">Follow us on Facebook <img src="{{ URL::to('images/facebooklogo.png') }}"
                                                               width="15px" height="15px"></a></li>
                </ul>
            </nav>
            <nav class="footerCopy">
                <p>&copy; 2016 Miles Beauty Supplies</p>
            </nav>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ URL::to('src/js/checkout.js') }}"></script>
@endsection