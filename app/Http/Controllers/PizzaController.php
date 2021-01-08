<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        return view('pizzas.index');
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        
    }

    public function show($id){
        return view('pizzas.show');
    }

    public function destroy($id){

    }
}
