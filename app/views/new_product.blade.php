<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VGG | Admin - New Product</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);
	</style>
	{{ HTML::script('dist/js/bootstrap.min.js'); }}
	{{ HTML::style('dist/css/bootstrap.min.css'); }}
</head>
<body>
	<h1>NEW PRODUCT</h1>
	{{Form::open()}}

	<div>
		{{Form::label('new_product_name', 'Name:')}}
		{{Form::text('new_product_name')}}
	</div>
		
	<div>
		{{Form::label('new_product_description', 'Description:')}}
		{{Form::textarea('new_product_description')}}
	</div>

	<div>
		{{Form::label('new_product_price', 'Price:')}}
		{{Form::number('new_product_price')}}
	</div>

	<div>
		{{Form::label('new_product_quantity', 'Quantity:')}}
		{{Form::number('new_product_quantity')}}
	</div>

	<ul>
		@foreach($tags as $tag)
			<li>
				{{Form::label($tag->name, $tag->name)}}
				{{Form::checkbox("tags[]", $tag->id)}}
			</li>
		@endforeach
	</ul>

	{{Form::submit('Sauvegarder')}}

	{{Form::close()}}
</body>
</html>
