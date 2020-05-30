@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create product</div>
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
							<form action="{{ route('product_store') }}" method="POST">
					        <div class="col-xs-12 col-sm-12 col-md-12">
		                        {!! csrf_field() !!}
					           
					            <div class="form-group">
					            	<label for="name">Название</label>
					                <input type="text" name="name" class="form-control" placeholder="Имя">
					            </div>
					            <div class="form-group">
					            	<label for="price">Стоимость </label>
					                <input type="text" name="price" class="form-control">
					            </div>
								{{-- <div class="form-group">
					                <input type="checkbox" value="1" checked name="status">
					            	<label for="status">Опубликовать</label>
					            </div> --}}

					        </div>
					        <button type="submit" name="submit" class="btn btn-primary">Отправить</button>
				        </div>
					    </div>
					   
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection