@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="" method="post">
        <label for="name">Your name:</label>
        <input type="text" id="name" required>
        <label for="type">Choose type of pizza:</label>
        <select id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base">Choose crust:</label>
        <select name="base" id="base">
            <option value="thick">Thick</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="cheese crust">Cheese Crust</option>
            <option value="garlic crust">Garlic Crust</option>
        </select>
        <fieldset>
            <label>Extra toppings:</label>
            <input type="checkbox" value="mushrooms">Mushrooms<br />
            <input type="checkbox" value="peppers">Peppers<br />
            <input type="checkbox" value="garlic">Garlic<br />
            <input type="checkbox" value="olives">Olives<br />
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection
