@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection
@section('content')
    @if(Session::has('cart'))
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <ul class="list-group">
                        @foreach($products as $product)
                            <li class="list-group-item shopcart">
                                <strong class="shopunder">{{ $product['item']['title'] }}</strong>
                                <span class="priceqt">{{ $product['item']['price'] }}&euro; x {{ $product['qty'] }}</span>
                                <div class="btn-group">
                                    <a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}" type="button" class="btn btn-danger btn-xs">Remove</a>
                                </div>
                                <div class="imgProduct">
                                     <img src="{{ $product['item']['imagePath'] }}" height="100" width="100">
                                </div>
                                <p class="shopcartdesc">{{ $product['item']['description'] }}</p>
                                <label for="totalItem">Total for this product: <span class="producttotal">{{ $product['price'] }}&euro;</span></label>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-5 col-sm-offset-5">
                    <strong>Total price: {{ $totalPrice }} &euro;</strong>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-4 col-sm-offset-4">
                    <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Proceed to Checkout</a>
                    <a href="{{ route('back.shop') }}" type="button" class="btn btn-danger">Back to the shop</a>
                </div>
            </div>
        @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Cart</h2>
            </div>
        </div>
    @endif
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