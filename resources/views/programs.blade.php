<!DOCTYPE html>
<html>
<head>
    <title>Programs</title>
</head>
<body>
    <h1>List of Programs:</h1>
    <ul>
        @foreach($programs as $program)
            <li>{{ $program }}</li>
        @endforeach
    </ul>
</body>
</html>
