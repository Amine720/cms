@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('tags.create') }}" class="btn btn-success">Add tag</a>
    </div>
    <div class="card card-default">
        <div class="card-header">tags</div>
        <div class="card-body">
            @if ($tags->count() === 0)
                <h1 class="text-center">No tags yet</h1>
            @else
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Posts Count</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tags as $tag)
                            <tr>
                                <td>{{ $tag->name }}</td>
                                <td>{{ $tag->posts->count() }}</td>
                                <td><a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                                <td>
                                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" onclick="handleDelete({{$tag->id}})">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody> 
                </table>
            @endif
            
            <form action="" method="post" id="deleteForm">
                @method('DELETE')
                @csrf
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Delete tag</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center">Are you sure you want to delete this tag</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
                                <button type="submit" class="btn btn-danger">Yes, delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function handleDelete(id){
            $('#deleteModal').show();
            const form = document.querySelector('#deleteForm');
            form.action = `/tags/${id}`;
        }
    </script>
@endsection