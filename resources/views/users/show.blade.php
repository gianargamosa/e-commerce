@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="..." alt="..." width="62px" height="62px">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">{{ $users_data->name }}</h4>
                            <button class="btn btn-md">Connect</button>
                        </div>
                    </div>
                    <h3>My Items</h3>
                    <ul class="list-group">
                        @foreach($products as $product)
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="{{ $product->product_image }}" alt="{{ $product->product_name }}" width="100px">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <span class="pull-right">
                                            <a href="{{ route('notification.requesttoresell', ['product_id' => $product->id, 'user_id' => $product->user->id]) }}" class="btn btn-warning">Request To Re-sell</a>
                                        </span>
                                        {{ $product->product_name }} <small>{{ $product->category }}</small></h4>
                                        {{ $product->product_description }}<br>
                                        Price: {{ number_format($product->amount, 2) }}<br>
                                        Poser: {{ $product->user->name }}<br>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection