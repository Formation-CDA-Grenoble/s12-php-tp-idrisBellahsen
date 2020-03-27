<?php

// Lit les variables d'environnement
$_ENV = parse_ini_file('.env');

// Charge les fonctions permettant d'exploiter l'API de The Movie DB
include 'api/tmdb.php';

// Récupère les informations d'une série télévisée
$tvShow = getTvShow(MY_TV_SHOWS[0]);
?>
    <div class="container">
        <form method="post" action="serie.php">
            <div class="form-group">
                <label for="serieid">Serie</label>
                <select name="serie" id="serieid">
                    <option value=0>Heroes</option>
                    <option value=1>Real Humans</option>
                    <option value=2>Doctor Who</option>
                    <option value=3>Sailor Moon Crystal</option>
                    <option value=4>The Witcher</option>
               </select>       
               </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

<a href="serie.php">serie</a>
<?php

// Permet de visualiser le nom de la série télévisée choisie
// Décommenter le code ci-dessous pour visualiser
    // var_dump($tvShow->name); die();

// Permet de visualiser toutes les saisons de la série télévisée choisie
// Décommenter le code ci-dessous pour visualiser
    // var_dump($tvShow->seasons); die();
    