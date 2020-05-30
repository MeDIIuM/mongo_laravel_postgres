@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2 class=" py-2 panel-heading">Create review</h2>
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
						<form action="{{ route('review_store') }}" method="POST">
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
			        </div>
			    </div>
            </div>
        </div>
    </div>
</div>
@endsection
