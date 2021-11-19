<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InterLan 2022 - Etape 2</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body class="bg-dark text-white">
    <div class="container">
        <h1 class="display-1">Inscription - Récapitulatif</h1>
        <p>Assurez-vous de la conformiter des informations présentent ci-dessous.</p>
        <hr/>
        <h2 class="display-2">{{ $team_name }}</h2>
        <div class="row">
            @foreach ($players as $player)
            <div class="col-lg-4 mb-4">
                <div class="card text-dark">
                    <div class="card-header">
                        <h4 class="card-title">{{ $player['username'] }}</h4> 
                    </div>
                    <div class="card-body">
                        <p>Nom: {{ $player['name'] }}</p>
                        <p>Prénom: {{ $player['surname'] }}</p>
                        <p>Email: {{ $player['email'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-inline">
            <a href="/register/step1" class="btn btn-danger float-start">Précédent</a>
            <a href="/register/validate" class="btn btn-success float-end">Valider</a>
        </div>
    </div>
</body>
</html>