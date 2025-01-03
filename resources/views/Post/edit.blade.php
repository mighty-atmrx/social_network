@extends('layouts.main')
@section('content')

    <div>
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" placeholder="Description">{{ $post->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Image" value="{{ $post->image }}">
            </div>
            <label for="category"></label>
            <select multiple class="form-select" id="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option
                        @foreach($post->tags as $PostTag)
                            {{ $tag->id === $PostTag->id ? ' selected' : ''}}
                        @endforeach
                        value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
            <p class="mt-3">
                <button class="btn btn-primary ">
                    <a class="text-light link-primary link-underline-opacity-0" href="{{ route('posts') }}">Back</a>
                </button>
                <button type="submit" class="btn btn-primary ms-3">Update</button>
            </p>
        </form>
    </div>


@endsection
