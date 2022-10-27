<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard');
    }

    public function addmember()
    {
        return view('admin.addmember');
    }

    public  function store(Request $request) {
        $data = $request->validate([
          'title'  =>  'required|string',
          'surname'  =>  'required|string',
          'first_name'  =>  'required|string',
          'second_name'  =>  'required|string',
          'phone_number'  =>  'required|numeric',
          'whatsapp_number'  =>  'required|numeric',
          'email'  =>  'required|string|unique:users',
          'state_of_origin'  =>  'required|string',
          'graduation_set_class'  =>  'required|string',
          'occupation'  =>  'required|string',
        ]);

        user::create([
            'membership_id' => 'CSS-'.$this->membership_code(4),
            'title' => $request->title,
            'surname' => $request->surname,
            'first_name' => $request->first_name,
            'second_name' => $request->second_name,
            'phone_number' => $request->phone_number,
            'whatsapp_number' => $request->whatsapp_number,
            'email' => $request->email,
            'state_of_origin' => $request->state_of_origin,
            'graduation_set_class' => $request->graduation_set_class,
            'occupation' => $request->occupation,
        ]);
    
        return redirect()->route('admin.viewmember');
        //   ->with('success','Product created successfully.');
    
      }

      function membership_code($input, $strength = 4) {
          $input = '0123456789';
          $input_length = strlen($input);
          $random_string = '';
          for($i = 0; $i < $strength; $i++) {
              $random_character = $input[mt_rand(0, $input_length - 1)];
              $random_string .= $random_character;
          }

          return $random_string;
      }

    public function viewmember()
    {
        $users = User::latest()->get();

        return view('admin.viewmember',[
            'users' => $users
        ]);
    }

    public function suspended()
    {
        return view('admin.suspended');
    }

    public function createmessage()
    {
        return view('admin.createmessage');
    }

    public function viewreply()
    {
        return view('admin.viewreply');
    }

    public function createpayment()
    {
        return view('admin.createpayment');
    }

    public function viewpayment()
    {
        return view('admin.viewpayment');
    }

    public function notification()
    {
        return view('admin.notification');
    }
}
