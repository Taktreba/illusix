<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        div.container {
            width: 100%;
            border: 1px solid gray;
        }

        header, footer {
            padding: 1em;
            color: white;
            background-color: #931ac7;
            clear: left;
            text-align: center;
        }

        header {
            text-align: left;
        }

        header a {
            color: white;
            text-decoration: none;
        }

        nav {
            float: left;
            max-width: 160px;
            margin: 0;
            padding: 25px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            padding-bottom: 20px;
        }

        nav ul a {
            text-decoration: none;
        }

        article {
            margin-left: 170px;
            border-left: 1px solid gray;
            padding: 1em;
            overflow: hidden;
        }
    </style>
</head>
<body>
<?php
$id = '';
if (!empty($_GET)) {
    $id = empty($_GET['id']) ? '' : trim(strip_tags($_GET['id']));
}
$blocks = ['header', 'content', 'footer'];

?>
<div class="container">
    <?php foreach ($blocks as $block): ?>
        <?php if ($block == 'header'): ?>
            <?php include 'header.php'; ?>
        <?php elseif ($block == 'content'): ?>
            <?php include 'menu.php'; ?>
            <article>
                <?php
                switch ($id) {
                    case 'allRecipes':
                        include 'allRecipes.php';
                        break;
                    case 'allIngredients':
                        include 'allIngredients.php';
                        break;
                    case 'addRecipe':
                        include 'addRecipe.php';
                        break;
                    case 'shopping_list':
                        include 'shopping_list.php';
                        break;
                    case 'showRecipe':
                        include 'showRecipe.php';
                        break;
                    case 'findRecipes':
                        include 'findRecipes.php';
                        break;
                    default:
                        include 'default.php';
                        break;
                }
                ?>
            </article>
        <?php elseif ($block == 'footer'): ?>
            <?php include 'footer.php'; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
</body>
</html>