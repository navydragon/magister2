<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calculation;

class CalculationsController extends Controller
{
    public function index()
    {
    	$calculations = Calculation::all();
    	return view('calculations.index');
    }

    public function show(Calculation $calculation)
    {
    	//$calculation = 	Calculation::find($id);
    	return $calculation;
    }
}
