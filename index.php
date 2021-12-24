<?php 

// Routeur

if (!isset($_SERVER['PATH_INFO'])) {
    $path="";
}

if (isset($_SERVER['PATH_INFO'])) {
    $path=$_SERVER['PATH_INFO'];
}

if ($path==''){
    include __DIR__.'/../src/Controller/HomeController.php';
    index(); //Renvoyer la vue de l'accueil
}

else if ($path=='/annonce'){ 
    include __DIR__.'/../src/Controller/ListeAnnonceController.php';
    index(); //Renvoyer la vue du formulaire d'ajout d'annonce'
}

else if ($path=='/favorite'){ 
    include __DIR__.'/../src/Controller/ListeAnnonceController.php';
    fav(); //Renvoyer la vue du formulaire d'ajout d'annonce'
}









//////////// Admin ajout d'annonce

/* Si la page est l'ajout d'une annonce pour un admin */
else if ($path=='/admin/annonce'){ 
    include __DIR__.'/../src/Controller/AdminAnnonceController.php';
    index(); //Renvoyer la vue du formulaire d'ajout d'annonce
}

/* Si la page est l'enregistrement d'un article */
else if ($path=='/admin/annonce/add'){ 
    include __DIR__.'/../src/Controller/AdminAnnonceController.php';
    save(); //Renvoyer la vue du formulaire d'ajout d'annonce
}



?>