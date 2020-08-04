@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            {{ isset($post)? 'Edit post' : 'Create post' }}
        </div>
        <div class="card-body">
            @include('partials.errors')
            <form action="{{ isset($post)? route('posts.update', $post->id) : route('posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if (isset($post))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name='title' id='title' value="{{ isset($post)? $post->title : '' }}" />
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" cols="5" rows="5">{{ isset($post)? $post->description : '' }}</textarea>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input id="content" type="hidden" name="content" value="{{ isset($post)? $post->content : '' }}">
                    <trix-editor input="content"></trix-editor>
                </div>
                <div class="form-group">
                    <label for="published_at">Published at</label>
                    <input name="published_at" id="published_at" class="form-control" type="date" value="{{ isset($post)? $post->published_at : '' }}" />
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    @if (isset($post))
                        <img src="/storage/{{ $post->image }}" width="100%" class="mb-4" />
                    @endif
                    <input name="image" id="image" class="form-control" type="file" />
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                    @if (isset($post))
                                        @if ($category->id == $post->category_id)
                                            selected
                                        @endif
                                    @endif
                                >
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                @if ($tags->count() > 0)
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <select name="tags[]" id="tags" class="form-control tags-selector" multiple>
                            @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}"
                                    @if (isset($post))
                                        @if (in_array($tag->id, $post->tags->pluck('id')->toArray()))
                                            selected
                                        @endif
                                    @endif
                                >
                                {{$tag->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>                    
                @endif

                <div class="form-group">
                    <button type="submit" class="btn btn-success">{{ isset($post)? 'Edit post' : 'Create post' }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        flatpickr("#published_at", {
            enableTime: true
        });

        $(document).ready(function() {
            $('.tags-selector').select2();
        });
    </script>
@endsection