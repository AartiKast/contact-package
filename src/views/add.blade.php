<!DOCTYPE html>
<html>
<head>
	<title>Add Users</title>
</head>
<body>
	<form method="post" action="{{route('list.store')}}">
		@csrf
		<h1>Add New Record:</h1>
		<label>First Name : </label>
		<input type="text" name="first_name" placeholder="First Name">
		<label>Last Name : </label>
		<input type="text" name="last_name" placeholder="Last Name">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>