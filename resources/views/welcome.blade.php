<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    
<form action="/checkpost" method="post">
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="text" name="name" value="suresh">
<input type="submit">
</form>
</body>
</html>