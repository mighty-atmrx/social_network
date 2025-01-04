@extends('layouts.admin')
@section('content')

    <a style="margin-left: 20px" href="{{ route('admin.post.create') }}">
        <button class="btn btn-outline-dark mt-3">+</button>
    </a>
    <div style="margin-left: 10px" class="container mt-3 fs-6">
        @foreach($posts as $post)
            <div>
                <a class=" link-dark link-underline-opacity-0" href="{{ route('admin.post.show', $post->id) }}">
                    {{ $post->id }}. {{ $post->title }}
                </a>
            </div>
        @endforeach
        <div class="mt-3">
            {{ $posts->withQueryString()->links() }}
        </div>
    </div>

@endsection
