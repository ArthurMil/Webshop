@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1> Admin Panel </h1>
            <hr>
            <h2>Orders Made</h2>
            @foreach($orders as $order)
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($order->cart->items as $item)
                        <li class="list-group-item">
                            <span class="badge">{{ $item['price'] }}&euro;</span>
                            <strong>{{ $item['item']['title'] }} | {{ $item['qty'] }} Units </strong>
                            <hr>
                            <p><strong>Created At: </strong>{{ $order->created_at }}</p>
                            <p> <strong>Name: </strong>{{ $order->name }}</p>
                            <p><strong>Address: </strong>{{ $order->address }}</p>
                            <p><strong>Payment_Id: </strong> {{ $order->payment_id }}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="panel-footer">
                    <strong>Total Price: {{ $order->cart->totalPrice }}&euro;</strong>
                </div>
            </div>
            @endforeach
            {{ $orders->links() }}
        </div>
    </div>
@endsection