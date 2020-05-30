@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <h2 class="panel-heading py-2">Show product</h2>
                    <div class="card p-4">
                        <div class="col-md-12">
        					<h3>{{ $product->name }}</h3>
                            <p>{{ $product->price }}</p>
                        </div>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-block btn-outline-danger my-2">Удалить</button>
                        </form>
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-block btn-outline-primary my-2">Редактировать</a>
                    </div>
                        <form method="post" action="{{ route('review_store', $product->id) }}">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="rating">Оценка</label>
                                    <input type="text" name="rating" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="text">Отзыв </label>
                                    <textarea rows="3" cols="30" type="textarea" name="text" class="form-control" placeholder="Что понравилось, а что нет"></textarea>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    <h3 class="py-2"> Отзывы о товаре </h3>
                    <div class="p-3">
                        @foreach($reviews as $review)
                            <a href="/review/{{ $review->id }}">
                                <div class="card p-3">
                                    <h3>Оценка: {{ $review->rating }}</h3>
                                    <h4>{{ $review->text }}</h4>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection