<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'User Registration';

        return view('users.create',compact('title'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'name' => 'required',  
            'email' => 'required',  
            'username' => 'required',  
            'mobile' => 'required',                      
            'about_me' => 'string|max:500',             
            'password' => 'numeric|string',             
        ]);
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->mobile = $request->mobile;
        $user->password = bcrypt($request->password);
        $user->about_me = $request->about_me;
        $user->save();

        return redirect()->route('user.create')->with('success', 'User is successfully Register');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $title = 'Profile View';
        $users = User::where('username',$username)->first();
        return view('users.show',compact('users','title'));
    }

}
