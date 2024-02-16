@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="container">
            <h1>Edit comic</h1>
            <br> <br> <br>
            <form
             action="{{route('users.update', $comic -> id)}}"
             method="POST">

                @csrf
                @method('PUT')

                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" value="{{$comic -> title}}">
                <br> <br>
                <label for="release_date">Data di rilascio</label>
                <input type="date" name="release_date" id="release_date" value="{{$comic -> release_date}}">
                <br> <br>
                <label for="price">Prezzo</label>
                <input type="text" name="price" id="price" value="{{$comic -> price}}">
                <br> <br>
                <input class="btn btn-danger" type="submit" value="UPDATE">

            </form>


        </div>
    </div>
@endsection
