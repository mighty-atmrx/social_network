@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Dashboard') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <a href="{{ route('posts') }}">
                <button style="margin-left: 380px; width: 100px" class="btn btn-primary mt-2">Start</button>
            </a>
        </div>
    </div>
</div>
@endsection
