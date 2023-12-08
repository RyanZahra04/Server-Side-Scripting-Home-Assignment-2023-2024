<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        return view('cars.index');
    }

    public function create(){
        return view('cars.create');
    }

    public function details(){
        return view('cars.details');
    }

    public function edit(){
        return view('cars.edit');
    }
}
