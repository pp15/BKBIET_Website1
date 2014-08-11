    <?php
    // On définit un prenom et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
    $prenom_valide = "dinesh";
    $pwd_valide = "dinesh";

    // on teste si nos variables sont définies
    if (isset($_POST['prenom']) && isset($_POST['pwd'])) {

    // on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
    if ($prenom_valide == $_POST['prenom'] && $pwd_valide == $_POST['pwd']) {
    // dans ce cas, tout est ok, on peut démarrer notre session

    // on la démarre :)
    session_start ();
    // on enregistre les paramètres de notre visiteur comme variables de session ($prenom et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['pwd'] = $_POST['pwd'];

    // on redirige notre visiteur vers une page de notre section membre
    header ('location: light.php');
    }
    else {
    // puis on le redirige vers la page d'accueil
    header ('location: light.php');
    }
    }
    else {
    header ('location: light.php');
    }
    ?>