@extends('layouts.app')

@section('content')
<div class="flip-container">
  <div class="flipper">
    <div class="front">
      <div class="card">
        <div class="card__sim"></div>
        <div class="card__number">
          XXXXXXXXXXXXXXXX
        </div>
        <div class="card__little-number">
          1234
        </div>
        <div class="card__little-letter">
          Good Thru
        </div>
        <div class="card__expiration">
          <div class="card__month">
            XX
          </div>
          <span>/</span>
          <div class="card__year">
            XX
          </div>
        </div>
        <div class="card__name">
          XXXXXX XXXXXX
        </div>
        <div class="card__type">
          <img id="card__image"></img>
        </div>
      </div>
    </div>
    <div class="back">
      <div class="card">
        <div class="card__black"></div>
        <div class="card__skyblue"></div>
        <div class="card__cvv">
          XXX
        </div>
      </div>
    </div>
  </div>
</div>
<form class="credit-card">
  <div id="front">
    <div class="block">
      <label for="number">Number</label><br>
      <input id="number" type="text" maxlength="16" />
    </div>
    <div class="block">
      <label for="name">Name</label><br>
      <input id="name" type="text" maxlength="24" />
    </div>
    <div class="block">
      <label for="month">Expiration date</label><br>
      <input id="month" type="text" maxlength="2" />
      <span>/</span>
      <input id="year" type="text" maxlength="2" />
    </div>
  </div>
  <div id="back">
    <div class="block">
      <label for="cvv">CVV</label><br>
      <input id="cvv" type="text" maxlength="3" />
    </div>
  </div>
  <div class="block">
    <button class="btn btn-md btn-block">Pay</button>
  </div>
</form>

@endsection