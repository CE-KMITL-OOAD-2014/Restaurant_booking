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

	<p> Area : </p>
	<p> {{ $data->area }} </p>
	<p>ที่ว่าง : </p>
	<p> {{ $data->seat }} </p>

	{{"<a href=\"http://localhost/ResBook/public/index.php/book/$data->id\">book</a>"}}

</body>
</html>

