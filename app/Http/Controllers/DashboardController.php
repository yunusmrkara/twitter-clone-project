<?php

namespace App\Http\Controllers;

use App\Models\Idea;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function create(){

        return view('dashboard',[
            'ideas'=>Idea::OrderBy('created_at','desc')->paginate(5)
        ]);
    }
}
