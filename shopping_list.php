<?php
echo '<h2>Список покупок</h2>';
$dbc = mysqli_connect('localhost', 'root', '', 'lllusix')
or die('проблемы к подключению к БД');

$arr = [];

foreach ($_POST as $k => $v) {
    if ($v == 'buy') {
        $query = "SELECT * FROM ingredients WHERE id_recipe='$k'";

        $result = mysqli_query($dbc, $query)
        or die('Ошибка выполнения запроса');

        while ($row = mysqli_fetch_array($result)) {
//            echo $row[1] . ' - ' . $row[2] . '<br>';
            $arr[$row[1]] = $row[2];
        }
    }
}
foreach ($arr as $k => $v)
{
    echo $k . ' - ' . $v . '<br>';
}