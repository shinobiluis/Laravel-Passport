<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
</head>
<body>
    <form action="{{url('/oauth/clients')}}" method="POST">
        @csrf
        <p>
            <input type="text" name="name">
        </p>
        <p>
            <input type="text" name="redirect">
        </p>
        <p>
            <input type="submit" name="send" value="Enviar">
        </p>
    </form>
    {{-- Mostramos los datos de la consulta --}}
    {{-- {{ $clients }} --}}
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>REDIRECT</td>
                <td>SECRET</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->redirect}}</td>
                    <td>{{$client->secret}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>