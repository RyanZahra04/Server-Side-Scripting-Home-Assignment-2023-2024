<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function index(){
        $allManufacturers = Manufacturer::all();
        return view('manufacturers.index', compact('allManufacturers'));
    }
}
