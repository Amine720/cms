@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('posts.create') }}" class="btn btn-success">Add Post</a>
    </div>
    <div class="card card-default">
        <div class="card-header">Posts</div>
        <div class="card-body">
            @if ($posts->count() === 0)
                <h1 class="text-center">No posts yet</h1>
            @else
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td><img src="storage/{{ $post->image }}" width="100px" /></td>
                                <td>{{ $post->title }}</td>
                                <td><a href="{{ route('categories.edit', $post->category->id) }}">{{ $post->category->name }}</a></td>
                                @if (!$post->trashed())
                                    <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                                @else
                                <td>
                                    <form action="{{ route('restorepost.restore', $post->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-info btn-sm">Restore</button>                                        
                                    </form>
                                </td>
                                @endif
                                <td>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        @if (!$post->trashed())
                                            <button class="btn btn-danger btn-sm">Trash</button>
                                        @else
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        @endif
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection