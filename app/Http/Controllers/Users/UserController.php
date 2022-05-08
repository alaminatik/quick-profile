<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        try {

            $request->validate([
                'name' => 'required',  
                'email' => 'required|unique:users,email',  
                'username' => 'required|unique:users,username',  
                'mobile' => 'required|max:11',                      
                'about_me' => 'nullable|string|max:500',             
                'password' => 'required|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',             
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

         } catch (\Exception $e) {

            Log::error($e->getFile(). ' '. $e->getLine(). ' '. $e->getMessage());
            return redirect()->back()->withErrors([
                'errorMsg' => 'Something went wrong. Please try again later.'
            ]);
         }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        try {

            $title = 'Profile View';
            $users = User::where('username',$username)->first();
            return view('users.show',compact('users','title'));

         } catch (\Exception $e) {

            Log::error($e->getFile(). ' '. $e->getLine(). ' '. $e->getMessage());
            return redirect()->back()->withErrors([
                'errorMsg' => 'Something went wrong. Please try again later.'
            ]);
         }
    }

}
