@extends('layouts.app')

@section('content')
<post-view inline-template>
    <div class="container">
        <div class="columns">
            <div class="column is-8">
                @foreach ($posts as $post)
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
                <hr>
                @endforeach
            </div>

            <div class="column is-4">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Total Posts: {{$posts->count()}}
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            Something to show
                            <hr>
                            <div class="field has-addons">
                                <div class="control">
                                    <input v-model="email" class="input" type="text" placeholder="Your Email">
                                </div>
                                <div class="control">
                                    <a @click="subscribe" class="button is-info">
                                        Subscribe
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</post-view>
@endsection
