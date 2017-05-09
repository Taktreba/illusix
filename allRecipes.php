<?php

$dbc = mysqli_connect('localhost', 'root', '', 'lllusix')
or die('проблемы к подключению к БД');

$query = "SELECT * FROM dish";

$result = mysqli_query($dbc, $query)
or die('Ошибка выполнения запроса');

?>
<style>
    table, td, tr {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<form action="index.php?id=shopping_list" method="post">
<table>
    <tr>
        <th>Название</th>
        <th>Краткое описание</th>
        <th>Поиск рецепта</th>
        <th>Купить продукты</th>
    </tr>
    <?php
    $buyCount = 0;
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><a href="index.php?id=showRecipe&recipe=<?php echo $row[0] ?>">Найти рецепт</a></td>
            <td style="text-align: center"><input type="checkbox" name="<?php echo $row[0] ?>" value="buy"></td>
        </tr>
        <?php
    }
    mysqli_close($dbc);
    ?>
    <tr>
        <td style="text-align: center" colspan="4"><input type="submit" name="submit" value="Сформировать покупку"></td>
    </tr>
</table>
</form>