<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Collective\Html\Eloquent;
use App\Models\User;

class UserController extends Controller
{

    public function show($id)
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);
    }

    public function store(Request $request)
    {
    // validate the data
    $this->validate($request, [
        'name' => 'required|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|unique:users'
      ],
        $user = [
          'name.required' => 'This field cannot be empty!',
          'name.unique' => 'This name is already registered.',
          'email.required' => 'This field is required.',
          'email.unique' => 'This email has already been registered',
          'password.rquired' => 'You have already entered this color.',
        ]);

      // store in database
      $user = new User();
      $user -> name = $request -> input('name');
      $user -> email = $request -> input('email');
      $user -> password = $request -> input('password');

      $user -> save();

      $request->session()->flash('status', 'You have been registered successfully!');

      return redirect('auth/login');

  }


}
