<?php

$db = mysqli_connect("localhost","root",getenv("DB_PASSWORD"));

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
