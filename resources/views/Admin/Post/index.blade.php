@extends('layouts.admin')
@section('content')

    <a style="margin-left: 20px" href="{{ route('post.create') }}">
        <button class="btn btn-outline-primary mt-3">+</button>
    </a>
    <div style="margin-left: 10px" class="container mt-3 fs-6">
        @foreach($posts as $post)
            <div>
                <a class=" link-primary link-underline-opacity-0" href="{{ route('post.show', $post->id) }}">
                    {{ $post->id }}. {{ $post->title }}
                </a>
            </div>
        @endforeach
        <div class="mt-3">
            {{ $posts->withQueryString()->links() }}
        </div>
    </div>

@endsection
