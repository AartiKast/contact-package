<!DOCTYPE html>
<html>
<head>
	<title>Demo Users</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

</head>
<body>
	<h1 align="center">Records:</h1>
		<table border="2" align="center">
			<tr>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Action</td>
			</tr>
			@foreach($users as $user)
			<tr>
				<td>{{ $user->first_name }}</td>
				<td>{{ $user->last_name }}</td>
				<td><a href="{{ route('list.edit', $user->id) }}">Update</a>
				<form method="post" action="{{ route('list.destroy',$user->id) }}">
					@csrf
					@method('DELETE')
						<input type="submit" name="delete" value="Delete">
				</form>
				</td>
			</tr>
			@endforeach
		</table>
		<hr>
	<a href="{{ route('list.create') }}" class="btn btn-success">Add New Record</a>
	
</body>
</html>