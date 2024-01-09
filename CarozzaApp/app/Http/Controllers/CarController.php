<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){

        if(request('manufacturer_id') == null){
            $cars = Car::all();
        }else{
            $cars = Car::where('manufacturer_id', request('manufacturer_id'))->get();
        }

        $allManufacturers = Manufacturer::orderBy('name')->pluck('name','id')->prepend('All Manufacturers', '');
        return view('cars.index', compact('cars', 'allManufacturers'));
    }

    public function create(){

        $allManufacturers = Manufacturer::orderBy('name')->pluck('name','id');
        return view('cars.create', compact('allManufacturers'));
    }

    public function save(Request $request){

        $request->validate([
            'model'=>'required',
            'year'=>'required',
            'email'=>'required|email',
            'manufacturer_id'=>'required|exists:manufacturers,id'
        ]);

        Manufacturer::find($request->manufacturer_id)->cars()->save(new Car(["model"=>$request->model,"year"=>$request->year,"salesperson_email"=>$request->email]));

        return redirect()->route('cars.index')->with('message', 'Car added successfully');
    }

    public function details($id){

        $car = Car::find($id);
        return view('cars.details', compact('car'));
    }

    public function edit(){
        return view('cars.edit');
    }
}
