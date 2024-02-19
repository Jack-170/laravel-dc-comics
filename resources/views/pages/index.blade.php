@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

    <main>
        <div class="container-fluid">
            <div class="container">
                <h1>Comics : {{count($comics)}}</h1>

                <a class="btn btn-primary" href="{{route('users.create')}}">Create</a>
                <br>
                <br>

                <ol>
                    @foreach ($comics as $comic )


                    <li class="p-2" >
                        <a href="{{ route ('users.show', $comic -> id)}}">
                            {{ $comic -> title }}
                        </a>

                        <a class="btn btn-primary text-light mx-2" href="{{route('users.edit',  $comic -> id)}}">
                            EDIT
                        </a>

                        <form class="d-inline p-2"
                         action="{{route('users.destroy',$comic -> id )}}"
                         method="POST"
                         onsubmit="return confirm('Confermare?');">


                         @csrf
                         @method('DELETE')

                            <input  class="btn btn-danger text-light" type="submit" value="X">
                        </form>
                    </li>

                    @endforeach
                </ol>
            </div>
        </div>

    </main>

@endsection
