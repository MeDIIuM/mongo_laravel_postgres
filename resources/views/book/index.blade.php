@extends('layouts.main')
@section('title')Все книги@endsection
@section('content')
<div class="container">
    <div class="col-md-8 offset-2">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>
    <h3>Книги</h3>
    <table class="table table-striped">
        <thead>
            <th>Название</th>
            <th>Автор</th>
            <th></th>
        </thead>
        <tbody>
        @foreach($book as $book)
            <tr>
                <td>{{ $book->name }}</td>
                <td>{{ $book->author }}</td>
                <td>
                    <a href="/book/{{ $book->id }}" class="btn btn-primary">Открыть</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
