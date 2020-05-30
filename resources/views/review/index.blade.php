@extends('layouts.main')
@section('title')Все продукты@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <h2 class="panel-heading">Комментарии</h2>
                <div class="panel-body row">
                    @foreach($reviews as $review)
                        <div class="card col-md-4 p-2 m-3">
                            <div class="card-body">
                                <h3 class="card-title">{{ $review->rating }}</h3>
                                <p class="card-text">{{ $review->text }}</p>
                                <a href="/review/{{ $review->id }}" class="btn btn-primary stretched-link">Просмотреть</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
