@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="container">
            <h1>Comics : {{count($comics)}}</h1>

            <a class="btn btn-primary" href="">Create</a>
            <br>
            <br>

            <ol>
                @foreach ($comics as $comic )


                <li>
                    <a href="{{ route ('users.show', $comic -> id)}}">
                        {{ $comic -> title }}
                    </a>
                </li>

                @endforeach
            </ol>
        </div>
    </div>
@endsection
