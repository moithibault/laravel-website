<h1> News :</h1>
@foreach ($news as $new)
	<p>
	{{$new->content}}
	</p>
@endforeach
