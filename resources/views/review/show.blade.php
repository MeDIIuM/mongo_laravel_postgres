@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <h2 class="panel-heading py-2">Show review</h2>
                    <div class="card p-4">
                        <div class="col-md-12">
                            <p>Отзыв о товаре <a href="{{ route('book.show', $book->id) }}">{{ $book->name }}</a></p>
        					<h3>Оценка: {{ $review->rating }}</h3>
                            <h4>Текст: {{ $review->text }}</h4>
                        </div>
                        <form action="{{ route('review.destroy', $review->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-block btn-outline-danger my-2">Удалить</button>
                        </form>
                        <a href="{{ route('review.edit', $review->id) }}" class="btn btn-block btn-outline-primary my-2">Редактировать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
