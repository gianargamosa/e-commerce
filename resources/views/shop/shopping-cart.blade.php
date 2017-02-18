@extends('layouts.app')

@section('content')
    @if(Session::has('cart'))
        <div class="receipt">
            <header class="header">
                <div class="header__top">
                    <div class="header__logo">
                        
                    </div>
                    <div class="header__meta">
                        <span class="header__date">25.04.2016</span>
                        <span class="header__serial">0f-113</span>
                        <span class="header__number">25042016</span>
                    </div>
                </div>
                <div class="header__greeting">
                    <span class="header__name">Hi, {{ Auth::user()->name }}</span>
                    <span class="header__count">You've purchased this items in our store.</span>
                    <span class="header__border"></span>
                </div>
                <div class="header__spacing"></div>
            </header>
            
            <section class="cart">
                <h2 class="cart__header">Cart:</h2>
                <ul class="list">
                    @foreach($products as $product)
                        <li class="list__item">
                            <span class="list__name">{{ $product['products']['product_name'] }}</span>
                            <span class="list__price">PHP {{ number_format($product['products']['amount'], 2) }} x {{ $product['quantity'] }}</span>
                        </li>
                    @endforeach
                </ul>   
                <hr class="cart__hr" />
                <footer class="cart__total">
                    <h3 class="cart__total-label">Total</h3>
                    <span class="cart__total-price">PHP {{ number_format($total_price, 2) }}</span>
                </footer>
            </section>
            
            <footer class="bar-code">
                <div class="bar-code__code">
                    <a href="/checkout" class="btn btn-md btn-success btn-block">Proceed to checkout</a>
                </div>
            </footer>
    
        </div>
    @else
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Shopping Cart</div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    No Items
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection