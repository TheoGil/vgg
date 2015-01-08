<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VGG | Admin</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);
	</style>
	{{ HTML::script('dist/js/bootstrap.min.js'); }}
	{{ HTML::style('dist/css/bootstrap.min.css'); }}
</head>
<body>
	<h1>Admin</h1>
	<div>
		<h2>Liste des Produits</h2>
		<a href="{{route('new_product')}}">
			<button type="button" class="btn btn-success">Ajouter</button>
		</a>
		<ul>
			@foreach ($products as $product)
				<li>

					<strong>{{$product->name}}</strong>
					
					<a href="{{route('edit_product', $product->id);}}">
						<button type="button" class="btn btn-success btn-xs">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</button>
					</a>

					<a href="{{route('delete_product', $product->id);}}">
						<button type="button" class="btn btn-danger btn-xs">
							<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</button>
					</a>
				</li>
			@endforeach
		</ul>
		
		<h2>Liste des Tags</h2>
		<ul>
			@foreach ($tags as $tag)
				<li>
					{{$tag->name}}
				</li>
			@endforeach
		</ul>
		
	</div>
</body>
</html>
