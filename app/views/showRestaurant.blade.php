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
	<p> DAY OPEN : {{$data->day}} </p>
	<p> OPEN : {{$data->time_open}} </p>
	<p> CLOSE : {{$data->time_close}} </p>
	<p> Area : {{ $data->area }} </p>
	<p>ที่นั่งทั้งหมด : {{ $data->seat }} </p>
	<p> เบอร์โทรศัพท์ : {{$data->tel}} </p>

	{{"<a href=\"http://localhost/ResBook/public/index.php/book/$data->id\">book</a>"}}

</body>
</html>

