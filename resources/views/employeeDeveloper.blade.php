<html>

<h1>Hi, my role is {{$emp["role"]}}</h1>

<p>Welcome {{$emp["name"]}}</p>

<u>Hobbies:</u>
	<ul>
	@foreach ($emp["hobbies"] as $hobby)
		@if($hobby == "writing")
			<li><b>{{$hobby}}</b></li>
		@else
			<li>{{$hobby}}</li>
		@endif
	@endforeach
	</ul>
</html>