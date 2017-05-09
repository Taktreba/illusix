<?php
function clear($post)
{
    return strip_tags(trim($post));
}

$name_dishes = clear($_POST['name_dishes']);
$desc = clear($_POST['desc']);
$recipe = clear($_POST['recipe']);

$name_ingr1 = mb_strtolower(clear($_POST['Ingredients1']));
$quantity1 = clear($_POST['quantity1']);
$name_ingr2 = mb_strtolower(clear($_POST['Ingredients2']));
$quantity2 = clear($_POST['quantity2']);
$name_ingr3 = mb_strtolower(clear($_POST['Ingredients3']));
$quantity3 = clear($_POST['quantity3']);
$name_ingr4 = mb_strtolower(clear($_POST['Ingredients4']));
$quantity4 = clear($_POST['quantity4']);


$dbc = mysqli_connect('localhost', 'root', '', 'lllusix')
or die('проблемы к подключению к БД');

$query = "INSERT INTO dish (name_dish, desc_dish, recipe) VALUES ('$name_dishes', '$desc', '$recipe')";

$result = mysqli_query($dbc, $query)
or die('Ошибка выполнения запроса БЛЮДО');


$query_ingr = "INSERT INTO ingredients (name_ingr, quantity, id_recipe) VALUES ('$name_ingr1','$quantity1', LAST_INSERT_ID()),".
    "('$name_ingr2','$quantity2', LAST_INSERT_ID()),".
    "('$name_ingr3','$quantity3', LAST_INSERT_ID())," .
    "('$name_ingr4','$quantity4', LAST_INSERT_ID())";
$result = mysqli_query($dbc, $query_ingr)
or die('Ошибка выполнения запроса ИНГРИДИЕНТЫ');

mysqli_close($dbc);

header('location: http://lllusix/index.php?id=allRecipes');