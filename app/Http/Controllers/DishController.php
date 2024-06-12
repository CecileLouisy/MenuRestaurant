<?php

namespace App\Http\Controllers;

use App\Http\Requests\DishRequest;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function create() {
        return view("ajout");
    }
    public function save(DishRequest $request) {
        $dish = Dish::create($request->all());
        return redirect('/');
    }

    public function viewMenu() {
        $dishes = Dish::orderBy('category')->orderBy('name')->get();
        return view("index")->with('dishes',$dishes);
    }
    public function viewDetails($id) {   
        $details=Dish::find($id);
        return view('details')->with('details',$details);
    }
    
    public function update($id) {
        return view("update")->with('dish',Dish::find($id));
    }
    public function saveUpdate(DishRequest $request, $id) {
        $dish = Dish::find($id);

        $dish->name = $request->name;
        $dish->category = $request->category;
        $dish->ingredients = $request->ingredients;
        $dish->price = $request->price;     
        $dish->description = $request->description;    
                
        $dish->save();
        
        return redirect('/');
    }
    public function delete($id) {
        $dish = Dish::find($id);
        $dish->delete();

        return redirect('/');
    }
    
}
