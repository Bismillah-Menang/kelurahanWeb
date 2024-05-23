<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d->name }}</td>
                <td>{{ $d->email }}</td>
                <td>{{ $d->role }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>