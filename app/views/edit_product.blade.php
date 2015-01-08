<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VGG | Admin - Edit {{$product->name}}</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);
	</style>
	{{ HTML::script('dist/js/bootstrap.min.js'); }}
	{{ HTML::style('dist/css/bootstrap.min.css'); }}
</head>
<body>
	<h1>EDIT PRODUCT</h1>
	<h2>{{$product->name}}</h2>

	{{Form::open()}}
		<div>
			{{Form::label('product_name', 'Name:')}}
			{{Form::text('product_name', $product->name)}}
		</div>
			
		<div>
			{{Form::label('product_description', 'Description:')}}
			{{Form::textarea('product_description', $product->description)}}
		</div>

		<div>
			{{Form::label('product_price', 'Price:')}}
			{{Form::number('product_price', $product->price)}}
		</div>

		<div>
			{{Form::label('product_quantity', 'Quantity:')}}
			{{Form::number('product_quantity', $product->quantity)}}
		</div>

		{{Form::hidden($product->id)}}

		{{Form::submit('Sauvegarder')}}
		
	{{Form::close()}}
</body>
</html>
