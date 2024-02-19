@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="container">
            <h1>New Comic</h1>
            <br> <br> <br>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form
             action="{{route('users.store')}}"
             method="POST">

                @csrf
                @method('POST')

                <label for="title">Titolo</label>
                <input type="text" name="title" id="title">
                <br> <br>
                <label for="release_date">Data di rilascio</label>
                <input type="date" name="release_date" id="release_date">
                <br> <br>
                <label for="price">Prezzo</label>
                <input type="text" name="price" id="price">
                <br> <br>
                <input class="btn btn-danger" type="submit" value="Crea">

            </form>


        </div>
    </div>
@endsection
