@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Order a New Pizza</h1>
    <form action="{{ route('pizzas.store') }}" method="post">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror">
        <span class="invalid-feedback">@error('name') {{ $message }} @enderror</span>

        <label for="type">Choose type of pizza:</label>
        <select id="type" name="type" class="@error('type') is-invalid @enderror">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <span class="invalid-feedback">@error('type') {{ $message }} @enderror</span>

        <label for="base">Choose crust:</label>
        <select name="base" id="base" class="@error('base') is-invalid @enderror">
            <option value="thick">Thick</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="cheese crust">Cheese Crust</option>
            <option value="garlic crust">Garlic Crust</option>
        </select>
        <span class="invalid-feedback">@error('base') {{ $message }} @enderror</span>

        <fieldset>
            <label>Extra toppings:</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
            <input type="checkbox" name="toppings[]" value="olives">Olives<br />
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection
