<?php
    require'database.php';
?>
<!DOCTYPE html>
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
                    <h1 class="text-center pt-5"> Notre Text Anglais </h1><br>
                    <h3>Sandra and Betty are sitting in the park, Sandra asks Betty:' Tell me about your family'
                    Betty:' My family is a rather small one, with only three people, my father, my mother and me.
                     My father is a doctor. My mother is a middle-school teacher. I am still a student.
                      My mother is very gentle and soft while my father is a little bit hot-tempered.
                       We love each other very much. Although sometimes we might become angry at one another, 
                       very soon we will forget the unpleasant things. We're a happy family, how about you?'
                    Sandra:' I have a big family with seven people, my grandparents, parents, two brothers and me. 
                    We take care of one another, share housework, and often communicate all together.'</h3>
                    <div class="text-center">
                        <button onclick="window.print()" class="btn btn-primary"> Print </button>
                    </div>
                </div>
            </div>    
        </div>

    </body>
</html>
