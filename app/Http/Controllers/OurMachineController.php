<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OurMachine;
use App\MachineType;


class OurMachineController extends Controller
{
     public function index()
    {
    	$our_machines = OurMachine::latest('id')->get();
    	$machine_types = MachineType::latest('id')->get();
        return view('our_machines.index',compact('our_machines','machine_types'));
    }

    public function create(Request $request)
    {
    	return $request->machine_type;
    }
}
