@extends('layouts.dashbord')

@section('content')
<div class="bg-white  d-flex justify-center">
    <div style="max-width: 350px;" class="mx-auto">
        <h1 class="display-4 text-center py-5">Edit User</h1>
        
        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
            <div class="alert alert-danger mb-4">{{$errors->first()}}</div>
            @endif

            <div class="control-group mb-2">
                <label for="name">Name</label>
                <input required name="name" value="{{ old('name', $user->name) }}" id="name" type="text" class="form-control">
            </div>

            <div class="control-group mb-2">
                <label for="email">Email</label>
                <input required name="email" value="{{ old('email', $user->email) }}"  id="email" type="text" class="form-control">
            </div>

            <div class="control-group mb-2">
                <label for="password">Password</label>
                <input required name="password"  id="password" type="password" class="form-control">
            </div>

            <div class="control-group mb-2">
                <label for="confirm">Confirm password</label>
                <input  required name="password_confirmation"  id="confirm" type="password" class="form-control">
            </div>

            <div class="control-group mb-2">
                <label for="access">Access</label>
                <select name="access" required id="access" class="form-control">
                    <option value="1" @if(old("access", $user->access) == 1) selected @endif>Reader</option>
                    <option value="2" @if(old("access", $user->access) == 2) selected @endif>Other</option>
                    <option value="3" @if(old("access", $user->access) == 3) selected @endif>Admin</option>
                </select>
            </div>
            
            <div class="control-group">
                <input type="checkbox" id="need_veryfiy" name="need_veryfiy" checked>
                <label for="need_veryfiy">Need to veryfication</label>
            </div>

            <div class="mt-3">
                <button class="btn btn-primary" type="submit">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection