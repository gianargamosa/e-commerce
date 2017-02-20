@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Book Shelf</div>

                <div class="panel-body">
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
                                        <h4 class="media-heading">{{ $product->product_name }} <small>{{ $product->category }}</small></h4>
                                        {{ $product->product_description }}<br>
                                        Price: {{ number_format($product->amount, 2) }}<br>
                                        Poser: {{ $product->user->name }}<br>
                                        <!-- <a href="/products/{{ $product->id }}" class="btn btn-warning">Edit</a>
                                        <form method="POST" action="/products/{{ $product->id }}">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form> -->
                                        <a href="{{ route('product.addtocart', ['id' => $product->id]) }}" class="btn btn-warning">Add to Cart</a>
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