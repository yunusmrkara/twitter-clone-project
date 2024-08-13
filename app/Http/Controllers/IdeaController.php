<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store(){

        request()->validate([
            'content'=>'required|min:1',
        ]);

        $idea =Idea::create([
            'content'=> request()->get('content',''),
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
    public function show($idea){
        $idea = Idea::where('id',$idea)->firstOrFail();
        return view('ideas.show',compact('idea'));
    }
    public function edit(Idea $idea){

        $editing = true;

        return view('ideas.show',compact('idea','editing'));
    }
    public function update(Idea $idea){

        request()->validate([
            'content'=>'required|min:1',
        ]);

        $idea->content=request()->get('content','');
        $idea->save();

        return redirect()->route('ideas.show',$idea->id)->with('success','Idea updated successfully!');
    }
}
