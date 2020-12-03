<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@foreach ($formula as $form)
			<p>
				<a href="{{route('nome-ind', ['nome'=>$form])}}"> 
					{{$form}}
				</a>
			</p>
 	@endforeach
</body>
</html>