@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2 class="panel-heading py-2">Update review</h2>
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
						<form action="{{ route('review.update', $review->id) }}" method="POST">
				        <div class="col-xs-12 col-sm-12 col-md-12">
	                        {!! csrf_field() !!}
    						@method('PUT')
			           		<div class="form-group">
				            	<label for="name">Оценка</label>
		                		<input type="text" name="rating" value="{{ $review->rating }}" class="form-control">
		                	</div>
				            <div class="form-group">
				            	<label for="text">Текст</label>
				                <input type="text" name="text" value="{{ $review->text }}" class="form-control">
				            </div>
				        </div>
				        <button type="submit" name="submit" class="btn btn-primary">Обновить</button>
			        </div>
				    </div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
