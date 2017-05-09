<?php
$menus = [
    'addRecipe' => 'Добавить рецепт',
    'allRecipes' => 'Все рецепты',
    'allIngredients' => 'Все ингридиенты',
//    'shopping_list' => 'Список покупок'
]; ?>
<nav>
    <ul>
        <?php foreach ($menus as $key => $menu): ?>
            <li>
                <a href="index.php?id=<?php echo $key; ?>"><?php echo $menu; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
