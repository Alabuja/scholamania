<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p><strong>NAME: </strong>{!!$sendMessage['name']!!}</p>
	<p><strong>EMAIL ADDRESS: </strong>{!!$sendMessage['email']!!}</p>
	<p><strong>PHONE NUMBER: </strong>{!!$sendMessage['phone_number'] or ''!!}</p>
	<p><strong>ADDRESS: </strong>{!!$sendMessage['address'] or ''!!}</p>
	<p><strong>USERNAME: </strong>{!!$sendMessage['username'] !!}</p>

</body>
</html>