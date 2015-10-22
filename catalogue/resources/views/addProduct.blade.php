@extends('app')

@section('title')
Add a product
@endsection

@section('content')
<div class="col-sm-6">
<form method="POST" action="store">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="name">NAME</label>
		<input type="text" name="name" id="name" class="form-control">
	</div>
	<div class="form-group">
		<label for="description">Description</label>
		<textarea name="description" id="description" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label>
			<input type="checkbox" name="in_stock"/>
			Is it in in stock?
		</label>
	</div>
	<input type="submit" class="btn btn-success">
</form>
</div>
@endsection