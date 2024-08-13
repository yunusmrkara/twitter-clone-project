<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store(){

        request()->validate([
            'idea'=>'required|min:1',
        ]);

        $idea =Idea::create([
            'content'=> request()->get('idea',''),
        ]);

        return redirect()->route('/')->with('success','Idea created successfully!');
    }
    public function destroy(Idea $idea){

        //$idea = Idea::find($id);
        //$idea->delete();

        //Idea::where('id',$id)->firstOrFail()->delete();

        $idea->delete();

        return redirect()->route('/')->with('success','Idea deleted successfully!');
    }
    public function show($id){
        $idea = Idea::where('id',$id)->firstOrFail();
        return view('ideas.show',compact('idea'));
    }
}
