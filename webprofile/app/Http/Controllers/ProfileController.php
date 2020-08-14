<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('profile');

    }

    public function store()
    {
        $data = request()->validate([
            'fullname' => 'required',
            'gender' => 'required',
            'address'=> 'required',
            'skill' => 'required',
            'phonenumber' => 'required',
            'programminglanguage' => 'required',
            'aboutyou' => 'required',
            'expectation' => 'required'
        ]); 
        
        $user_id = auth()->user()->id;

        if(Profile::where('user_id', '=', $user_id)->exists())
        {
            Profile::where('user_id', '=', $user_id)->update($data);
        }
        else {
          auth()->user()->profile()->create($data);
        }
        
        return redirect('/home');

    }

}
