<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = Pizza::latest()->get();

        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'base' => 'required|max:255'
        ]);

        $pizza = new Pizza();
        $pizza->name = ucfirst(strtolower(request('name')));
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        $pizza->save();

        return redirect('/')->with('message', 'Thanks for your order!');
    }

    public function show($id){
        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);

        $pizza->delete();
        return redirect()->route('pizzas.index')->with('message', $this->alert('success', 'Order Completed!'));
    }
}
