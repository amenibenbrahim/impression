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
                    <h1 class="text-center pt-5"> User data </h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr> 
                                <th> ID </th>
                                <th> Nom </th>
                                <th> Prenom </th>
                                <th> Adresse</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $n=1;
                                $sql="SELECT * from user ";
                                $res=mysqli_query($myConnection,$res);

                                while($row=mysqli_fetch_assoc($res))
                                {
                            ?>
                            <tr> 
                                <td><?php echo $n; ?> </td>
                                <td><?php echo $row['nom']; ?></td>
                                <td><?php echo $row['prenom']; ?></td>
                                <td><?php echo $row['adress']; ?></td>
                            </tr>
                            <?php
                            $n++;
                                }
                            ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <button onclick="window.print()" class="btn btn-primary"> Print </button>
                    </div>
                </div>
            </div>    
        </div>

    </body>
</html>
