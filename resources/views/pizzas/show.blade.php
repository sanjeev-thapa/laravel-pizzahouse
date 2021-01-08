@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order for ...</h1>
    <p class="type">Type - ...</p>
    <p class="base">Base - ...</p>
    <p class="toppings">Extra toppings:</p>
    <ul>
        <li>...</li>
        <li>...</li>
    </ul>
    <form action="" method="post">
        <button>Complete Order</button>
    </form>
</div>
<a href="{{ route('pizzas.index') }}" class="back">
    <- Back to all pizzas</a> @endsection
