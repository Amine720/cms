@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">Users</div>
        <div class="card-body">
            @if ($users->count() === 0)
                <h1 class="text-center">No Users yet</h1>
            @else
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    {{-- <img src="storage/{{ $post->image }}" width="100px" /> --}}
                                    <img width="50px" style="border-radius: 50%" src="{{ Gravatar::src($user->email) }}" />
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if (!$user->isAdmin())
                                        <form action="{{ route('users.make-admin', $user->id) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-sm">Make admin</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection