<html>

<h1>Post List</h1>

<table border="1">
@foreach($posts as $post) {
	<tr>
		<td>{{$post->id}}</td>
		<td>{{$post->name}}</td>
	</tr>
}
@endforeach
</table>
</html>