@extends('layouts.base')

@section('content')
    <h1>Movie List</h1>

    <table class="table" style="border: 1px solid cornflowerblue;">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Original Title</th>
            <th>Nationality</th>
            <th>Date</th>
            <th>Vote</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->id }}</td>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->original_title }}</td>
                <td>{{ $movie->nationality }}</td>
                <td>{{ $movie->date }}</td>
                <td>{{ $movie->vote }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
