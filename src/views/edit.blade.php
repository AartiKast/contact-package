<!DOCTYPE html>
<html>
<head>
	<title>Update User Detail</title>
</head>
<body>
	<form method="post" action="{{ route('list.update',$user->id) }}">
		@csrf
		@method('PUT')
		<h1>Update User Detail:</h1>

		<label>First Name :</label>
		<input type="text" name="first_name" value="{{ $user->first_name }}">
		<label>Last Name :</label>
		<input type="text" name="last_name" value="{{ $user->last_name }}">
		<input type="submit" name="update" value="Update">
	</form>
</body>
</html>