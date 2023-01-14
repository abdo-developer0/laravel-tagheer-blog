@extends('layouts.front')

@section('content')
<div class="bg-white vh-100 d-flex justify-content-center align-items-center">
    <div style="max-width: 350px;">
        <h2 class="text-center py-2">Login</h2>

        <form action="{{ route('authenticate') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="control-group">
                <label for="E">Type your email</label>
                <input type="text" class="form-control" required name="email"  />
            </div>

            <div class="control-group">
                <label for="E">Type your password</label>
                <input type="password" class="form-control" required name="password"  />
            </div>

            <div class="mt-3">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection