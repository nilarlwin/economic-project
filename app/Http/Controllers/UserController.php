<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $users = User::all();
        return view('backends.users.index',['users'=> $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backends.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' =>'required|confirmed',
            'image' =>'required'
        ]);
        $file = $request->file('image');
        $fileName =rand().$file->getClientOriginalName();
        $file -> move(public_path('assets/user-profile'),$fileName);
        User::create([
            'name' =>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'profile'=>$fileName
        ]);
        return redirect()->back()->with('status','User Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view ('backends.users.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    
        if($id == auth()->id()){
        $user = User::find($id);
        return view ('backends.users.profile',['user'=>$user]);
        }
        else{
            return redirect('/users');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' =>'required',
            'image' =>'required'
        ]);
        $file = $request->file('image');
        $fileName =rand().$file->getClientOriginalName();
        $file -> move(public_path('assets/user-profile'),$fileName);
        User::find($id)->update([
            'name' =>$request->input('username'),
            'email' =>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
            'profile' =>$fileName
        ]);
        return redirect('users')->with('status','User Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()->with('status','User Deleted Successfully');
    }
}
