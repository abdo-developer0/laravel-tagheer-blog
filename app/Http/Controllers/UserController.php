<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
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

    public function store(StoreUser $user)
    {
        User::create( $user->validated() );

        return redirect()
            ->route('dashbord.users')
            ->with('success', 'User Created , Successfuliy.');
    }

    public function edit($id)
    {
        $this->authorize('admin');

        return view('users.update')->with('user', User::findOrFail($id));
    }

    public function update(StoreUser $user)
    {
        $model = User::findOrFail($user->id);

        foreach($user->validated() as $attribute => $value) {
            $model->$attribute = $value;
        }

        $model->save();

        return redirect()
            ->route('dashbord.users')
            ->with('success', 'User Updated , Successfuliy.');
    }

    public function delete(User $user)
    {
        $this->authorize('admin');

        $user->delete();

        return back()->with('success', "User Deleted , Successfuliy.");
    }
}
