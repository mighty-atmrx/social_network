@extends('layouts.main')
@section('content')

    <div class="container mt-5">
        <div class="fs-5">{{ $post->id }}. {{ $post->title }}</div>
        <div class="fs-5">{{ $post->description }}</div>
    </div>
    <p>
        <a class="link-primary link-underline-opacity-0 ms-2 fs-5" href="{{ route('posts') }}"><< Back</a>
        <a class="link-primary link-underline-opacity-0 ms-5 fs-5" href="{{ route('post.edit', $post->id) }}">Edit >> </a>
    </p>
    <div class="ms-2">
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
@endsection