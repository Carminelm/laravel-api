@extends('layouts.app')

@section('content')
    <h1>Elenco progetti</h1>
    @dump($posts)

    @if (session('cancelled'))
        <p class="text-success">L'elemento è stato eliminato correttamente</p>
    @endif


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
