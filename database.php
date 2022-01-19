<?php

    $myConnection= mysqli_connect("localhost","root","") or die ("could not connect to mysql"); 

    mysqli_select_db($myConnection, "data") or die ("no database");
   
    $req ="SELECT * from user";
    $res = mysqli_real_escape_string($myConnection,$req);
?>