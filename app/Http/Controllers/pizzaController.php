<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
class pizzaController extends Controller
{
    public function index()
    {
//     $pizzas = Pizza::where('name' , 'yoshi')->get();
//     $pizzas = Pizza::orderby('name')->get();
//     $pizzas = Pizza::orderby('name', 'desc')->get();
       $pizzas = Pizza::all();

        return view('index', [ 'pizzas' => $pizzas ]);
    }

    public function show($id)
    {
      $pizza = Pizza::findOrFail($id);
      return view('show', ['pizza' => $pizza]);
    }

    public function create()
    {
      return view('create');
    }

    public function store()
    {
      $pizza = new Pizza();
      $pizza->name = request('name');
      $pizza->type = request('type');
      $pizza->base = request('base');
      $pizza->toppings = request('toppings');

      $pizza->save();

      return redirect ( '/')->with('msg','Thanks For Ordering Pizza');
    }

    public function destroy($id)
    {
      $pizza = Pizza::findOrFail($id);
      $pizza->delete();
      return redirect ( '/index');
    }
}
