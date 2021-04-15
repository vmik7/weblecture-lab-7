<?php 
    $data = file_get_contents("data/items.json");
    $data = json_decode($data, true);
    foreach ($data as $item) {
        echo '
            <div class="card" data-id="' . $item["id"] . '">
                <img src="' . $item["img"] . '" alt="' . $item["title"] . '" class="card__img">
                <div class="card__info">
                    <div class="card__title">' . $item["title"] . '</div>
                    <div class="card__row">
                        <div class="card__price rub">' . $item["price"] . '</div>
                        <button class="button button_type_submit">В корзину</button>
                    </div>
                </div>
            </div>
        ';
    }
?>