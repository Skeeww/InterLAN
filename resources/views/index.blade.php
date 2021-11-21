<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTERLAN 2022 - INSCRIPTIONS</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
    <meta property="og:title" content="InterLAN 2022 - LAN Multigaming">
    <meta property="og:description" content="1ère édition de la LAN Multigaming organisé par l'InterAsso à Lannion aux Ursulines">
    <meta property="og:image" content="./logo.png">
    <meta property="og:url" content="https://inter-lan.fr">
    <link rel="icon" type="image/png" href="{{asset('img/logo.png')}}">
</head>
<body>
    <p class="alert-info">
        Désolé le site n'est pas encore prêt pour un affichage mobile, si vous voulez la meilleur expérience possible inscrivez-vous depuis un PC.
    </p>
    <div class="sides">
        <svg class="shape" viewBox="0 0 1215 1080" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1215 0V1080H476L0 0H1215Z" fill="#261838"/>
        </svg>
        <div class="left-side">
            <img class="logo" src="{{asset('img/Interlan_logo.svg')}}"/>
        </div>
        <div class="right-side">
            <div class="text-info">
                <p>Première édition du tournoi organisé par l'InterAsso</p>
                <p>Une LAN multigaming en plein cœur de Lannion aux Ursulines le 10 mars 2022 !</p>
                <p class="text-bold font-weight-lighter">{{ $nb_inscrits }}/{{ $MAX_MEMBERS }} PREINSCRITS</p>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if ($nb_inscrits >= $MAX_MEMBERS)
                    <p>Désolé le nombre de joueurs maximum a été atteints, mais ne désespérez pas, des places peuvent toujours ce libérer alors restez à l'affût</p>
                @endif
            </div>
            @if ($nb_inscrits < $MAX_MEMBERS)
                <div class="sign-up-form">
                    <form method="POST" action="/register">
                        @csrf
                        <fieldset>
                            <p>Le nom de votre équipe</p>
                            <input required placeholder="GameMasterz" name="team_name" type="text">
                        </fieldset>
                        <div id="button">
                            <button type="submit">S'INSCRIRE</button>
                        </div>
                    </form>
                </div>
            @endif
        </div>
    </div>
    <div class="games">
        <p class="under-text">Interlan mais genre pas comme intermarché fin bref cringe. Sinon aujourd'hui j'ai mangé des pâtes aux jambons tout en jouant au super jeu crab game fait par le youtubeur Dany. Fin voilà et vous sinon ça va bien ?</p>
        <h2 class="title">LES JEUX</h2>
        <hr/>
        <div class="game-list">
            <div class="game">
                <img class="cover" src="img/games/tf2.jpg"/>
                <p>Vous vous foutez sur la gueule mais cette fois de 9 manières différentes</p>
            </div>
            <div class="game">
                <img class="cover" src="img/games/tm.jpg"/>
                <p>VROOM VROOM mais sans le ballon (attention à la glace)</p>
            </div>
            <div class="game">
                <img class="cover" src="img/games/minecraft.jpg"/>
                <p>Duel de construction associez vous à des pros de la brique si vous souhaitez gagner</p>
            </div>
            <div class="game">
                <img class="cover" src="img/games/dbdl.jpg"/>
                <p>Un tueur, 4 survivants, 5 générateurs, beaucoup de coups de couteau</p>
            </div>
            <div class="game">
                <img class="cover" src="img/games/speedrunners.jpg"/>
                <p>C’est la course avec les grapins et autres dashs</p>
            </div>
            <div class="game">
                <img class="cover" src="img/games/csgo.jpg"/>
                <p>RUSH B P90 ONLY</p>
            </div>
            <div class="game">
                <img class="cover" src="img/games/l4d2.jpg"/>
                <p>Encore 4 survivants mais là c’est contre des zombies et faut s’enfuir</p>
            </div>
            <div class="game">
                <img class="cover" src="img/games/gmod.jpg"/>
                <p>Oh bordel encore des textures roses</p>
            </div>
            <div class="game">
                <img class="cover" src="img/games/portal2.jpg"/>
                <p>Un rond bleu où quand tu passes dedans tu arrives dans le rond orange sauf que là c’est à deux et faut aller fast as fok</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Réalisé avec le 💖 par Léo, Mattys, <a href="https://noan.dev">Noan</a>, Loic, Alan, Chloé, Mathieu, Hugues et Dany. En partenariat avec l'InterAsso</p>
    </div>
</body>
</html>