<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $this->authorize('admin');

        return view('users.index')->with('users', User::all());
    }

    public function create()
    {
        $this->authorize('admin');

        return view('users.create');
    }

    public function store(Request $request)
    {
        $this->authorize('admin');

        $this->validateUserCredentials($request);

        $credentials = $this->userCredentials($request);

        User::create($credentials);

        return redirect()
            ->route('dashbord.users')
                ->with('success', 'User Created , Successfuliy.');
    }

    public function edit($id)
    {
        $this->authorize('admin');

        return view('users.update')->with('user', User::findOrFail($id));
    }

    public function update(Request $request)
    {
        $this->authorize('admin');

        $this->validateUserCredentials($request);

        $credentials = $this->userCredentials($request);

        $user = User::findOrFail($request->id);
        foreach($credentials as $name => $value) {
            $user->$name = $value;
        }
        $user->save();

        return redirect()
            ->route('dashbord.users')
                ->with('success', 'User Updated , Successfuliy.');
    }

    public function validateUserCredentials($request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|min:4|confirmed'
        ]);
    }

    public function userCredentials($request)
    {
        return [
            'name'  => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'access' => $request->access,
            'activation'  => $request->need_veryfiy? true: false
        ];
    }

    public function delete(User $user)
    {
        $this->authorize('admin');

        $user->delete();
        return back()
                ->with('success', "User Deleted , Successfuliy.");
    }
}
