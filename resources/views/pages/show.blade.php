@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Comic: {{ $comic->title }}</h5>
                <p class="card-text">Release date: {{ $comic->release_date }}</p>
                <p class="card-text">Price: {{ $comic->price }}$</p>
            </div>
        </div>
    </div>
</div>
@endsection
