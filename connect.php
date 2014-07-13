<?php

$con=mysql_connect("localhost", "root", "");
if(!$con)
        header("location:index.php");
if(!mysql_select_db("insurance management"))
    header("location:index.php");
?>
