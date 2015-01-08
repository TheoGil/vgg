<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			padding: 10px;
			font-family:'Lato', sans-serif;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<h1>Single product page</h1>
	<h2>{{$product->name}}</h2>
	<h3>Product n°{{$product->id}}</h3>
	<p>{{$product->description}}</p>
	<strong>Tags:</strong>
	<ul>
		@foreach ($product->tags as $tag)
			<li>{{$tag->name}}</li>
		@endforeach
	</ul>
</body>
</html>
