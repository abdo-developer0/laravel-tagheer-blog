@extends('layouts.dashbord')

@section('content')
<!-- start of content -->
<div class="container">
    <h1 class="display-3 text-center py-5">Users</h1>
    @if(session('success'))
    <div class="alert alert-success mb-4">{{ session('success') }}</div>
    @endif

    <div class="row py-5">
        <a href="{{ route('users.create') }}" class="btn btn-primary fw-bolder rounded-pill">
            <i class="fas fa-plus"></i> New
        </a>
    </div>

    <div class="card">
        @if($users->count() > 1)
        <table class="table-responsive w-full rounded">
            <thead>
                <tr>
                <th class="border w-1/6 px-4 py-2">Name</th>
                <th class="border w-1/6 px-4 py-2">Email</th>
                <th class="border w-1/6 px-4 py-2">Access</th>
                <th class="border w-1/5 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td class="border px-4 py-2">{{ $user->name }}</td>
                    <td class="border px-4 py-2">{{ $user->email }}</td>
                    <td class="border px-4 py-2">{{ $user->access() }}</td>
                    <td class="border px-4 py-2">
                        <form action="{{ route('users.delete', $user->id) }}" method="POST" onsubmit="return confirm('Are you want delete this')">
                            @csrf
                            <a href="{{ route('users.edit', $user->id) }}" class="btn rounded px-2 me-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="btn  rounded px-2" type="submit"><i class="fas fa-trash"></i></button>
                        </form>                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <dv class="display-5 my-5 py5 text-center">
            No Users.
        </dv>
        @endif
    </div>
</div>
<!-- end of content -->
@endsection