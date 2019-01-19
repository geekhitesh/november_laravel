<html>


<h1> Student Form</h1>

<form action="create" method="POST">
	Name:<input id="name" name="name" value="" /><br/>
	Age:<input id="age" name="age" value="" /><br/>
	City:<input id="city" name="city" value="" /><br/>
	College:<input id="college" name="college" value="" /><br/>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="submit" value="Register" /><br/>	
</form>

</html>