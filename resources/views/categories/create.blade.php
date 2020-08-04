@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">{{ isset($category)? 'Update category' : 'Create category' }}</div>
        <div class="card-body">
            @include('partials.errors')
            <form action="{{ isset($category)? route('categories.update', $category->id) : route('categories.store') }}" method="POST">
                @csrf
                @if (isset($category))
                    @method('PUT')
                @endif
                <div class="from-group">
                    <label for="name">Name</label>
                    <input 
                        type="text"
                        id="name"
                        class="form-control mb-2" 
                        name="name"
                        value="{{ isset($category)? $category->name : '' }}"
                     />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        {{ isset($category)? 'Update category' : 'Add category' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection