<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Cassals</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            @include('user.header')
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <form action="{{route('saveUpdateCasalFrom')}}" method="post">
                @csrf
                <table>
                    <input type="hidden" name="id" value="{{$casal->id}}">
                    <tr>
                        <td>
                            <label for="nom">Nom: </label>
                        </td>
                        <td>
                            <input type="text" name="nom" id="nom" value="{{$casal->nom}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="dataInici">Data inici: </label>
                        </td>
                        <td>
                            <input type="date" name="dataInici" id="dataInici" value="{{$casal->dataInici}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="dataFi">Data final: </label>
                        </td>
                        <td>
                            <input type="date" name="dataFi" id="dataFi" value="{{$casal->dataFinal}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nPlaces">Places maxim: </label>
                        </td>
                        <td>
                            <input type="number" name="nPlaces" id="nPlaces" value="{{$casal->nPlaces}}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ciutat">Ciutat: </label>
                        </td>
                        <td>
                            <select name="ciutat" id="ciutat">
                                @foreach($ciutats as $ciutat)
                                    @if($ciutat->id == $casal->ciutatId)
                                        <option value="{{$ciutat->id}}">{{$ciutat->nom}}</option>
                                    @endif
                                @endforeach
                                @foreach($ciutats as $ciutat)
                                    <option value="{{$ciutat->id}}">{{$ciutat->nom}}</option>   
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Guardar">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="row">
            @include('user.footer')
        </div>
    </div>
</body>
</html>