@extends('layouts.main')
@section('content')

    <a href="{{ route('post.create') }}">
        <button class="btn btn-outline-primary mt-5">+</button>
    </a>
    <div class="container mt-3 fs-6">
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
