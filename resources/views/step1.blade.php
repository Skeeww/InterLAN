<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InterLan 2022 - Inscription</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body class="bg-dark text-white">
    <div class="container">
        <h1 class="display-1">Inscription - Etape 1</h1>
        <hr/>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/register/validate" method="POST">
            @csrf
            <div class="mb-5">
                <label class="form-label">Nom de l'équipe</label>
                <input class="form-control" type="text" value="{{$team_name}}" name="team_name" required/>
            </div>
            <h3>Joueur 1</h3>
            <div class="row">
                <div class="col mb-5">
                    <label class="form-label">Nom</label>
                    <input class="form-control" type="text" name="player[0][name]" required/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Prénom</label>
                    <input class="form-control" type="text" name="player[0][surname]" required/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Pseudo</label>
                    <input class="form-control" type="text" name="player[0][username]" required/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="player[0][email]" required/>
                </div>
            </div>
            <h3>Joueur 2</h3>
            <div class="row">
                <div class="col mb-5">
                    <label class="form-label">Nom</label>
                    <input class="form-control" type="text" name="player[1][name]" required/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Prénom</label>
                    <input class="form-control" type="text" name="player[1][surname]" required/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Pseudo</label>
                    <input class="form-control" type="text" name="player[1][username]" required/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="player[1][email]" required/>
                </div>
            </div>
            <h3>Joueur 3</h3>
            <div class="row">
                <div class="col mb-5">
                    <label class="form-label">Nom</label>
                    <input class="form-control" type="text" name="player[2][name]" required/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Prénom</label>
                    <input class="form-control" type="text" name="player[2][surname]" required/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Pseudo</label>
                    <input class="form-control" type="text" name="player[2][username]" required/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="player[2][email]" required/>
                </div>
            </div>
            <h3>Joueur 4</h3>
            <div class="row">
                <div class="col mb-5">
                    <label class="form-label">Nom</label>
                    <input class="form-control" type="text" name="player[3][name]" required/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Prénom</label>
                    <input class="form-control" type="text" name="player[3][surname]" required/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Pseudo</label>
                    <input class="form-control" type="text" name="player[3][username]" required/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="player[3][email]" required/>
                </div>
            </div>
            <h3>Joueur 5</h3>
            <div class="row">
                <div class="col mb-5">
                    <label class="form-label">Nom</label>
                    <input class="form-control" type="text" name="player[4][name]" required/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Prénom</label>
                    <input class="form-control" type="text" name="player[4][surname]" required/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Pseudo</label>
                    <input class="form-control" type="text" name="player[4][username]" required/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="player[4][email]" required/>
                </div>
            </div>
            <div class="row">
                <div class="mb-5 d-inline-block">
                    <input type="checkbox" class="form-check-input" name="rules" required>
                    <label> En cochant cette case vous confirmez avoir lu et accepté <a target="reglement" href="/reglement">le règlement du tournoi</a></label>
                </div>
            </div>
            <div class="d-inline">
                <a href="/" class="btn btn-danger float-start">Précédent</a>
                <button type="submit" class="btn btn-success float-end">Suivant</button>
            </div>
        </form>
    </div>
</body>
</html>