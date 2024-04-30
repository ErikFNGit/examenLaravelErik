<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>LogIn</title>
</head>
<body>
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('login.auth')}}" method="post">
            @csrf
            <table>
                <h1>Iniciar sesión: </h1>
                <tr>
                    <td>
                        <label for="userName">Nombre</label>
                    </td>
                    <td>
                        <input type="text" name="userName" id="userName">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="userPass">Contraseña: </label>
                    </td>
                    <td>
                        <input type="password" name="userPass" id="userPass">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Iniciar Sesion">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>