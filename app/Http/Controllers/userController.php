<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        if(strlen($keyword)){
            $data = user::where('map','like',"$keyword")
            ->orWhere("agent","like","$keyword")
            ->orWhere("kill","like","$keyword")
            ->orWhere("death","like","$keyword")
            ->orWhere("assist","like","$keyword")
            ->orWhere("win","like","$keyword")
            ->paginate(10);
        } else {

        }
        $data = User::orderBy('agent','desc')->paginate();
    
        return view('user.main')->with('data', $data); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->session()->flash('agent', $request->agent);
        $request->session()->flash('map', $request->map);
        $request->session()->flash('kill', $request->kill);
        $request->session()->flash('death', $request->death);
        $request->session()->flash('assist', $request->assist);
        $request->session()->flash('win', $request->win);

        $request->validate([
            'agent' => 'required',
            'map' => 'required',
            'kill' => 'required|numeric',
            'death' => 'required|numeric',
            'assist' => 'required|numeric',
            'win' => 'required',
        ]);
        $data =[
            'agent'=> $request->agent,
            'map'=> $request->map,
            'kill'=> $request->kill,
            'death'=> $request->death,
            'assist'=> $request->assist,
            'win'=> $request->win,
        ];
        user::create($data);
        return redirect()->to('user')->with('success','Successfully saved data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = user::where('agent',$id)->first();
        return view('user.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'agent' => 'required',
            'map' => 'required',
            'kill' => 'required|numeric',
            'death' => 'required|numeric',
            'assist' => 'required|numeric',
            'win' => 'required',
        ]);
        $data =[
            'agent'=> $request->agent,
            'map'=> $request->map,
            'kill'=> $request->kill,
            'death'=> $request->death,
            'assist'=> $request->assist,
            'win'=> $request->win,
        ];
        user::where('agent', $id)->update($data);
        return redirect()->to('user')->with('success','Successfully saved data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        user::where('agent',$id)->delete();
        return redirect()->to('user')->with('success','Successfully deleted data');
    }
}
