<?php

$recipe = $_GET['recipe'];

$dbc = mysqli_connect('localhost','root','','lllusix')
    or die('Проблема соединения с БД');

$query = "SELECT * FROM dish WHERE id_recipe='$recipe'";

$result = mysqli_query($dbc, $query);

while($row = mysqli_fetch_array($result))
{
    echo $row[1] . '<br>'. '<hr>';
    echo $row[2] . '<br>'. '<hr>';
    echo $row[3] . '<br>'. '<hr>';
    echo '<b>Ингридиенты:</b> ' . '<br>';
}

$query = "SELECT * FROM ingredients WHERE id_recipe='$recipe'";

$result = mysqli_query($dbc, $query);

while($row = mysqli_fetch_array($result)){
    echo $row[1] . ' - ' . $row[2] . '<br>';
}