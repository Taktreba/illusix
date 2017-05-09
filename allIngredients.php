<?php

$dbc = mysqli_connect('localhost', 'root', '', 'lllusix')
or die('проблемы к подключению к БД');

$arr = [];
$query = "SELECT * FROM ingredients";

$result = mysqli_query($dbc, $query)
or die('Ошибка выполнения запроса');

while ($row = mysqli_fetch_array($result)) {
//            echo $row[1] . ' - ' . $row[2] . '<br>';
    $arr[$row[1]] = $row[2];

}

mysqli_close($dbc);

foreach ($arr as $k => $v)
{
    echo $k . '<br>';
}