@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>Lista dei fumetti</h1>
<ul>
    @foreach($comics as $comic)
        <li>
            <h2>{{ $comic['title'] }}</h2>
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <p>{{ $comic['description'] }}</p>
            <p>Price: {{ $comic['price'] }}</p>
            <p>Series: {{ $comic['series'] }}</p>
            <p>Sale Date: {{ $comic['sale_date'] }}</p>
            <p>Type: {{ $comic['type'] }}</p>
            <p>Artists: {{ implode(', ', $comic['artists']) }}</p>
            <p>Writers: {{ implode(', ', $comic['writers']) }}</p>
        </li>
    @endforeach
</ul>
@endsection
