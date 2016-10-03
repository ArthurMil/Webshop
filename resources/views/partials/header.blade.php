<div class="headerbanner">
    <div class="container">
        <a id="FreeShipping" class="ship-promo">Free Shipping On Any 100 &euro; Purchase</a>
    </div>
</div>
<div class="headerbanner-promo">
    <h2>Save 20% when buying 4 or more products!</h2>
</div>
<div class="container">
    <a class="navbar-brand Mbeauty" href="{{ route('product.index') }}"><img src="{{ URL::to('images/MBeauty.png') }}" width="200px" height="40px"></a>
</div>

<div class="container">
{{--START HEADER--}}
    <div id="nav">
<nav class="navbar navbar-default  header_default">
    <div class="container-fluid full_nav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" id="col_nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li id="navbarItem"><a href="#">MAKEUP</a></li>
                <li class="dropdown" id="navbarItem">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCTS<b class="caret"></b></a>
                    <ul class="dropdown-menu multi-column columns-3">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <li><a href="#" class="Products_header"><strong>Product 1</strong></a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <li><a href="#" class="Products_header"><strong>Product 2</strong></a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <li><a href="#" class="Products_header"><strong>Product 3</strong></a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>
                <li id="navbarItem"><a href="#">NAILS</a></li>
                <li id="navbarItem"><a href="#">SPA & BODY</a></li>
                <li id="navbarItem"><a href="#">SKINCARE</a></li>
                <li id="navbarItem"><a href="#">ACCESSORIES</a></li>
                <li id="navbarItem"><a href="#">CONTACT</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="cartHeader">
                    <a href="{{ route('product.shoppingCart') }}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
                        <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQuantity : ''}}</span>
                    </a>
                </li>
            </ul>
            <!-- Collect the nav links, forms, and other content for toggling -->
        </div><!-- /.container-fluid -->
    </div>
</nav>
    </div>
</div>





{{--END HEADER--}}

{{--<nav class="navbar navbar-default">--}}
    {{--<div class="container-fluid">--}}
        {{--<!-- Brand and toggle get grouped for better mobile display -->--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<a class="navbar-brand" href="{{ route('product.index') }}">Brand</a>--}}
        {{--</div>--}}

        {{--<!-- Collect the nav links, forms, and other content for toggling -->--}}
        {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<li>--}}
                    {{--<a href="{{ route('product.shoppingCart') }}">--}}
                        {{--<i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart--}}
                        {{--<span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Account<span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="#">User Account</a></li>--}}
                        {{--<li role="separator" class="divider"></li>--}}
                        {{--<li><a href="{{ route('admin.logout') }}">Logout</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div><!-- /.navbar-collapse -->--}}
    {{--</div><!-- /.container-fluid -->--}}
{{--</nav>--}}