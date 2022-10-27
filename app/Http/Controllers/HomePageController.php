<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;

class HomePageController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }
    public function admin_login (){
        return view('auth.admin_login');
    }

    public function member_login(Request $request)
    {
        $this->validate($request, [
            'membership_id' => 'exists:users,membership_id'
        ]);
        
        $input = $request->only(['membership_id', 'password']);
        
        $user = User::query()->where('membership_id', $request->membership_id)->first();
        // dd($user);
        // authentication attempt
        if (auth()->attempt($input)) {
            if($user->user_type == 'Member'){
                return redirect()->route('home');
            }
           
            // return back()->with('failure_report', 'You are not a Member');
        } 
        // else {
        //     return back()->with('failure_report', 'User authentication failed.');
        // }
    }
}
