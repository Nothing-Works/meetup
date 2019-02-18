@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-8">
            @foreach ($posts as $post)
            <div class="card">
                <header class="card-header">
                    <a href="/posts/{{$post->id}}" class="card-header-title">
                        {{$post->title}}
                    </a>
                </header>
                <div class="card-content">
                    <div class="content">
                        {{$post->body}}
                    </div>
                </div>
            </div>
            <hr>
            @endforeach
        </div>

        <div class="column is-4">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Total Posts
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        Something to do
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
