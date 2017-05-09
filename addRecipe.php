<style>
    table, tr, td {
        border: 1px solid black;
        border-collapse: collapse;
        margin: auto;
        text-align: center;
    }
</style>
<form action="handler/add_recipe_handler.php" method="post">
    <table>
        <tr>
            <td><label for="name_dishes">Название блюда</label></td>
            <td><input id="name_dishes" type="text" name="name_dishes"></td>
        </tr>
        <tr>
            <td><label for="desc">Краткое описание</label></td>
            <td><input type="text" id="desc" name="desc"></td>
        </tr>
        <tr>
            <td><label for="recipe">Описание рецепта</label></td>
            <td><textarea rows="5" cols="50" id="recipe" name="recipe"></textarea></td>
        </tr>
        <tr>
            <th>Ингридиенты</th>
            <th>Количество</th>
        </tr>
        <tr>
            <td><input type="text" name="Ingredients1" placeholder="мясо"></td>
            <td><input type="text" name="quantity1"  ></td>
        </tr>
        <tr>
            <td><input type="text" name="Ingredients2" placeholder="рыба"></td>
            <td><input type="text" name="quantity2"  ></td>
        </tr>
        <tr>
            <td><input type="text" name="Ingredients3" placeholder="мазик"></td>
            <td><input type="text" name="quantity3"  ></td>
        </tr>
        <tr>
            <td><input type="text" name="Ingredients4" placeholder="яйки"></td>
            <td><input type="text" name="quantity4"  ></td>
        </tr>
        <tr>
            <td><input type="submit" value="Сохранить рецепт"></td>
        </tr>

    </table>
</form>