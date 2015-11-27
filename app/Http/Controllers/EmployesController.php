<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmployesController extends Controller
{
    public function index()
    {
    	return view('Employes.employes');
    }

    public function add()
    {
    	return view('Employes.add');
    }
}
