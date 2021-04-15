<?php
    if (isset($_POST["clear"])) {
        foreach ($_COOKIE["basket"] as $id => $cnt) {
            setCookie("basket[$id]", "0");
            $_COOKIE["basket"][$id] = 0;
        }
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>

    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="page">
    <?php include 'php/header.php' ?>
    <main class="page__content content">
        <div class="page__container">
            <?php include 'php/basket_table.php' ?>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>