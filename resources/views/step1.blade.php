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
        <form action="/register/step2" method="POST">
            @csrf
            <h1 class="display-1">Inscription - Etape 1</h1>
            <hr/>
            <div class="mb-5">
                <label class="form-label">Nom de l'équipe</label>
                <input class="form-control" type="text" value="{{$team_name}}" name="team_name"/>
            </div>
            <h3>Joueur 1</h3>
            <div class="row">
                <div class="col mb-5">
                    <label class="form-label">Nom</label>
                    <input class="form-control" type="text" name="player[0][name]"/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Prénom</label>
                    <input class="form-control" type="text" name="player[0][surname]"/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Pseudo</label>
                    <input class="form-control" type="text" name="player[0][username]"/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="player[0][email]"/>
                </div>
            </div>
            <h3>Joueur 2</h3>
            <div class="row">
                <div class="col mb-5">
                    <label class="form-label">Nom</label>
                    <input class="form-control" type="text" name="player[1][name]"/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Prénom</label>
                    <input class="form-control" type="text" name="player[1][surname]"/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Pseudo</label>
                    <input class="form-control" type="text" name="player[1][username]"/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="player[1][email]"/>
                </div>
            </div>
            <h3>Joueur 3</h3>
            <div class="row">
                <div class="col mb-5">
                    <label class="form-label">Nom</label>
                    <input class="form-control" type="text" name="player[2][name]"/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Prénom</label>
                    <input class="form-control" type="text" name="player[2][surname]"/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Pseudo</label>
                    <input class="form-control" type="text" name="player[2][username]"/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="player[2][email]"/>
                </div>
            </div>
            <h3>Joueur 4</h3>
            <div class="row">
                <div class="col mb-5">
                    <label class="form-label">Nom</label>
                    <input class="form-control" type="text" name="player[3][name]"/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Prénom</label>
                    <input class="form-control" type="text" name="player[3][surname]"/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Pseudo</label>
                    <input class="form-control" type="text" name="player[3][username]"/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="player[3][email]"/>
                </div>
            </div>
            <h3>Joueur 5</h3>
            <div class="row">
                <div class="col mb-5">
                    <label class="form-label">Nom</label>
                    <input class="form-control" type="text" name="player[4][name]"/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Prénom</label>
                    <input class="form-control" type="text" name="player[4][surname]"/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Pseudo</label>
                    <input class="form-control" type="text" name="player[4][username]"/>
                </div>
                <div class="col mb-5">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="player[4][email]"/>
                </div>
            </div>
            <div class="row">
                <div class="mb-5 d-inline-block">
                    <input type="checkbox" class="form-check-input" name="rules">
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