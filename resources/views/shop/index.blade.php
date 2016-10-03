@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection
@section('content')
    <div class="carousel slide" id="myCarousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
            <li data-slide-to="1" data-target="#myCarousel"></li>
            <li data-slide-to="2" data-target="#myCarousel"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active" id="slide1">
                <img src="{{ URL::to('images/AdSlide1.jpg') }}">
                <div class="carousel-caption">
                    <h4>Text HERE</h4>
                    <p>Bla bla bla bla bla</p>
                </div>
            </div>
            <div class="item" id="slide2">
                <img src="{{ URL::to('images/AdSlide2.jpg') }}">
                <div class="carousel-caption">
                    <h4>Coded web by Bla Bla</h4>
                    <p>HTML5 CSS3 BootStrap3 JQuery Laravel Ajax</p>
                </div>
            </div>
            <div class="item" id="slide3">
                <img src="{{ URL::to('images/AdSlide3.jpg') }}">
                <div class="carousel-caption">
                    <h4>Web hosting 404</h4>
                    <p>Learn how to host your website and get your website running!</p>
                </div>
            </div>
        </div>
        <!-- Controls carousel -->
        <a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
        <a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>
    </div>


    @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-messsage" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    <div class="productDisplay">
        <div class="CustFav">
            <h4>Customer Favorites</h4>
            <hr>
        </div>

    @foreach($products->chunk(4) as $productChunk)

        <div class="row">
            @foreach($productChunk as $product)
                <form action=" {{ route('product.addToCart', ['id' => $product->id]) }}" method="get">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail productImage">
                        <img src="{{ $product->imagePath }}" width="150px" height="150px" class="image-responsive">
                        <div class="caption">
                            <h3>{{ $product->title }} </h3>
                            <p class="description">{{ $product->description }}</p>
                            <div class="quantprod pull-right">
                                <label for="quantity">Quantity:</label>
                                <input type="number" name="quantity" id="quantity" class="quatimp"
                                       min="1" max="10" step="1" value="1">
                            </div>
                            <div class="clearfix">
                                <div class="pull-left price">{{ $product->price }} &euro;</div>
                                {{--<input type="number" step="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" min="1" max="12">--}}
                                <button type="submit" class="btn btn-success pull-right" role="button">Add to Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                <input type="hidden" name="_token" value="{{Session::token()}}">
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            @endforeach
        </div>
        @endforeach
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