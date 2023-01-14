@extends('layouts.dashbord')

@section('content')
<div class="bg-white">
    @if($errors->any())
    <div class="alert alert-danger my2">{{ $errors->first() }}</div>
    @endif
    
    <div class="w-75 mx-auto pb-3">
        <h1 class="display-3 text-center py-5">Settings</h1>

        <form action="{{ route('settings.update') }}">
            @csrf

            <h3 class="h3 py-2">contact informations</h3>
            <div class="card p-3">
                <div class="input-group mb-2">
                    <label for="address" class="col-3 text-center">address:</label>
                    <input
                        required 
                        class="form-control col-9 rounded" 
                        type="text"  id="address" 
                        name="address" 
                        value="{{ $settings->address }}" 
                    >
                </div>

                <div class="input-group mb-2">
                    <label for="phone" class="col-3 text-center">phone:</label>
                    <input
                        required 
                        class="form-control col-9 rounded" 
                        type="text"  id="phone" 
                        name="phone" 
                        value="{{ $settings->phone }}" 
                    >
                </div>

                <div class="input-group mb-2">
                    <label for="email" class="col-3 text-center">email:</label>
                    <input
                        required 
                        class="form-control col-9 rounded" 
                        type="text"  id="email" 
                        name="email" 
                        value="{{ $settings->email }}" 
                    >
                </div>
            </div>

            <h3 class="h3 py-2">website informations</h3>
            <div class="card p-3">
                <div class="input-group mb-2">
                    <label for="site_name" class="col-3 text-center">Site Name:</label>
                    <input
                        required 
                        class="form-control col-9 rounded" 
                        type="text"  id="site_name" 
                        name="site_name" 
                        value="{{ $settings->site_name }}" 
                    >
                </div>

                <div class="input-group mb-2">
                    <label for="logo_path" class="col-3 text-center">Logo:</label>
                    <input
                        required 
                        class="form-control col-9 rounded" 
                        type="text"  id="logo_path" 
                        name="logo_path" 
                        value="{{ $settings->logo_path }}" 
                    >
                </div>

                <div class="control-group mb-2">
                    <label for="about_content" class="col-3 text-center">Cbout Content:</label>
                    <textarea
                        required 
                        class="form-control col-9 rounded" 
                        type="text"  id="about_content" 
                        name="about_content" 
                        rows="8"
                    >{{ $settings->about_content }}</textarea>
                </div>

                <div class="control-group mb-2">
                    <label for="is_open" class="col-3 text-center">Site Status:</label>
                    <select
                        required 
                        class="form-control col-9 rounded" 
                        type="text"  id="is_open" 
                        name="is_open" 
                    >
                        <option value="1">Open</option>
                        <option value="0" @if(!$settings->is_open) selected @endif >Closed</option>
                    </select>
                </div>
            </div>

            <div class="mt-3">
                <button class="btn btn-primary col-4" type="submit">
                    <i class="fas fa-save"></i>
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
@endsection