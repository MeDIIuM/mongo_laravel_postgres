@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Добавить книгу</h2></div>
                <div class="panel-body">
					     <div class="row">
					     	@if($errors->any())
					     	<div class="alert alert-danger">
					     		<ul>
					     			@foreach($errors->all() as $error)
					     			<li>{{ $error }}</li>
					     			@endforeach
					     		</ul>
					     	</div>
					     	@endif
							<form action="{{ route('book_store') }}" method="POST">
					        <div class="col-xs-12 col-sm-12 col-md-12">
		                        {!! csrf_field() !!}

					            <div class="form-group">
					            	<label for="name">Название книги</label>
					                <input type="text" name="name" class="form-control" placeholder="Название книги">
					            </div>
					            <div class="form-group">
					            	<label for="price">Автор</label>
					                <input type="text" name="author" class="form-control" placeholder="Автор">
					            </div>
					        </div>
					        <button type="submit" name="submit" class="btn btn-primary">Добавить</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
