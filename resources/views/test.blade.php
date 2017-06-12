<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>

</head>
<body>
<form action="{{action('TestController@test')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p><input type="number" name="A[]"></p>
    <p><input type="number" name="A[]"></p>
    <p><input type="number" name="A[]"></p>
    <p><input type="number" name="A[]"></p>

    <p><input type="submit" value="Missing Number"></p>
</form>
</body>
</html>