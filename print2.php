<?php
    require'database.php';
?>
<!DOCTYPE html lang="fr">
<html>
    <head>
        <title> Impression</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.css" 
        rel="stylsheet" id="bootstrap-css">
        <script src="maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="text-center pt-5"> Notre Text Français </h1><br>
                    <h3>Je m'appelle Angélica Summer, j'ai 12 ans et je suis canadienne. 
                        Il y a 5 ans, ma famille et moi avons déménagé dans le sud de la France.
                        Mon père, Frank Summer, est mécanicien ; il adore les voitures anciennes et collectionne les voitures miniatures.
                        Ma mère s'appelle Emilie Summer ; elle est infirmière dans un hôpital non loin de notre maison.
                         Nous avons déménagé en France, parce qu'elle a toujours aimé la culture de ce pays.
                        La vie en France est très différente de celle au Canada. Ici, il fait toujours chaud.
                         Chaque dimanche, nous allons à la magnifique plage de Biarritz et nous achetons des glaces après avoir nagé dans la mer.
                        Les Français sont très sympathiques et accueillants. Nous parlons français lorsque nous sommes dehors,
                         à l'école ou au marché. Cependant, nous continuons de parler anglais à la maison, 
                         car mes parents ne veulent pas que je perde ma langue natale</h3>
                    <div class="text-center">
                        <button onclick="window.print()" class="btn btn-primary"> Print </button>
                    </div>
                </div>
            </div>    
        </div>

    </body>
</html>
