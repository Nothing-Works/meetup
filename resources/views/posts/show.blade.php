@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-half is-centered">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        {{$post->title}}
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        {{$post->body}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
