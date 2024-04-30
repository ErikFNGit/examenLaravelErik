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
            <table class="table table-striped table-light">
                <thead>
                  <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Data Inici</th>
                    <th scope="col">Data Final</th>
                    <th scope="col">Num. Places</th>
                    <th scope="col">Ciutat</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($casals as $casal)
                    <tr>
                        <?php
                            $fechaIni = new DateTime($casal->dataInici);
                            $fechaIniFormateada = $fechaIni->format('d-m-Y');
                            $fechaFin = new DateTime($casal->dataFinal);
                            $fechaFinFormateada = $fechaFin->format('d-m-Y');
                        ?>
                        <td scope="row">{{$casal->nom}}</th>
                        <td><?php echo $fechaIniFormateada ?></td>
                        <td><?php echo $fechaFinFormateada ?></td>
                        <td>{{$casal->nPlaces}}</td>
                        @foreach($ciutats as $ciutat)
                            @if($ciutat->id == $casal->ciutatId)
                            <td>{{$ciutat->nom}}</td>
                            @endif
                        @endforeach
                        <td><a href="{{route('updateCasalForm', ['id' => $casal->id ])}}">Editar</a></td>
                        <td><a href="{{route('deleteCasal', ['id' => $casal->id ])}}">Eliminar</a></td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            @include('user.footer')
        </div>
    </div>
    
</body>
</html>