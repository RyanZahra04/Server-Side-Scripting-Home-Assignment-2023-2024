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
        return view('cars.create');
    }

    public function details($id){

        $car = Car::find($id);
        return view('cars.details', compact('car'));
    }

    public function edit(){
        return view('cars.edit');
    }
}
