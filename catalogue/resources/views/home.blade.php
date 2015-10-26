@extends('app')

@section('title')
Home Page
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="row sale-products">
				@foreach ($list as $product)
						<div class="col-sm-4">
							<a href="#" class="thumbnail">
								<span>Hello! I am a product</span>
							</a>
							<h3>{{$product->name}}</h3>
							<p>{{$product->description}}</p>
						</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection
