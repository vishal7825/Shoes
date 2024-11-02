<?php
include ("connection.php");

function getAllActive($table)
{
    global $link;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($link,$query);
}



function getSlugActive($table, $slug)
{
    global $link;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($link,$query);
}


function getProductByCategory($cid)
{
    global $link;
    $query = "SELECT * FROM product WHERE cid='$cid' ";
    return $query_run = mysqli_query($link,$query);
}



function getIDActive($table ,$id)
{
    global $link;
    $query = "SELECT * FROM $table WHERE id='$id' ";
    return $query_run = mysqli_query($link,$query);
}





?>