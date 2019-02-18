@extends('layouts.app')

@section('content')

<posts-view :items="{{$posts}}"></posts-view>

@endsection
