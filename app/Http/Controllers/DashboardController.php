<?php

namespace App\Http\Controllers;

use App\Models\Idea;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function create(){

        $ideas=Idea::OrderBy('created_at','desc');

        if(request()->has('search')){
           $ideas=$ideas->where('content','like','%'.request()->get('search','').'%');
        }

        return view('dashboard',[
            'ideas'=>$ideas->paginate(5)
        ]);
    }
}
