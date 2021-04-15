<?php
    if (isset($_GET["id"])) {
        $key = "basket[" . $_GET["id"] ."]";
        if (isset($_COOKIE["basket"][$_GET["id"]])) {
            setCookie($key, $_COOKIE["basket"][$_GET["id"]] + 1);
            $_COOKIE["basket"][$_GET["id"]] = $_COOKIE["basket"][$_GET["id"]] + 1;
        }
        else {
            setCookie($key, 1);
            $_COOKIE["basket"][$_GET["id"]] = 1;
        }
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню</title>

    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="page page_fullscrean">
    <?php include 'php/header.php' ?>
    <main class="page__content content">
        <div class="page__container center-wrapper">
            <div class="success">
                <div class="success__img">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <g> <path d="M458.737,422.218l-22.865-288.116c-1.425-18.562-17.123-33.103-35.739-33.103H354.97v-2.03 C354.97,44.397,310.573,0,256.001,0s-98.969,44.397-98.969,98.969v2.03H111.87c-18.617,0-34.316,14.54-35.736,33.064 L53.262,422.257c-1.77,23.075,6.235,46.048,21.961,63.026C90.949,502.261,113.242,512,136.385,512h239.231 c23.142,0,45.436-9.738,61.163-26.717C452.505,468.304,460.509,445.332,458.737,422.218z M187.022,98.969 c0-38.035,30.945-68.979,68.979-68.979s68.979,30.945,68.979,68.979v2.03H187.022V98.969z M414.776,464.905 c-10.218,11.03-24.124,17.105-39.16,17.105h-239.23c-15.036,0-28.942-6.075-39.16-17.105 c-10.217-11.031-15.211-25.363-14.063-40.315l22.87-288.195c0.232-3.032,2.796-5.406,5.837-5.406h45.162v36.935 c0,8.281,6.714,14.995,14.995,14.995c8.281,0,14.995-6.714,14.995-14.995v-36.935H324.98v36.935 c0,8.281,6.714,14.995,14.995,14.995s14.995-6.714,14.995-14.995v-36.935h45.163c3.04,0,5.604,2.375,5.84,5.446l22.865,288.115 C429.988,439.542,424.993,453.873,414.776,464.905z"/> </g> </g> <g> <g> <path d="M323.556,254.285c-5.854-5.856-15.349-5.856-21.204,0l-66.956,66.956l-25.746-25.746c-5.855-5.856-15.35-5.856-21.206,0 c-5.856,5.856-5.856,15.35,0,21.206l36.349,36.349c2.928,2.928,6.766,4.393,10.602,4.393s7.675-1.464,10.602-4.393l77.558-77.558 C329.412,269.635,329.412,260.141,323.556,254.285z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
                </div>
                <div class="success__label">Товар успешно добавлен!</div>
            </div>
        </div>
    </main>
</body>
</html>