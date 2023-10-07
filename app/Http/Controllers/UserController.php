<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

// the controller class
class UserController extends Controller
{
    public function login(Request $req) {
        $data = $req->validate([
            'name'=> 'required',
            'password'=> 'required',
        ]);
        if (auth()->attempt([
            'name' => $data['name'], 
            'password' => $data['password']])) {
                $req->session()->regenerate();
            }            
            return redirect('/');
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }
    // the function name of the controller is `register`
    public function register(Request $req) {
        
        // request body validation
        $data = $req->validate([
            'name' => ['required',
                 'min:3', 
                 'max:10', 
                 /* add the rule for check is the inserted value -
                  is that unique inside databasees -
                  with table `users` in the filed `name`
                 */
                 Rule::unique('users', 'name')],
            'email' => ['required', 'email',],
            'password' => 'required'
        ]);

        // using $data['password'] to acces the varibel data
        $data['password'] = bcrypt($data['password']);

        // user models and create function to insert query
        $user = User::create($data);
        
        // login the user into cookies
        auth()->login($user);
        return redirect('/');
    }
}
