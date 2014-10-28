<!DOCTYPE html>
<html>
<head>
	<title>Restaurant {{ $data->id }}</title>
</head>
<body>

	<p> ID : {{ $data->id }} </p>
	<p> Owner : {{ $data->id_owner }} </p>
	<p> Name : {{ $data->name }} </p>
	<p> Addr : {{ $data->addr }} </p>
	<p> Blah Blah Blah  </p>

	{{"<a href=\"http://localhost/ResBook/public/index.php/book/$data->id\">book</a>"}}

</body>
</html>

