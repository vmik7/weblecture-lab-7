<?php 
    $result = 0;
    if (isset($_COOKIE["basket"])) {
        foreach ($_COOKIE["basket"] as $id => $cnt) {
            $result += $cnt;
        }
    }

    $sum = 0;
    $rows = "";

    if ($result) {
        $data = file_get_contents("data/items.json");
        $data = json_decode($data, true);

        
        foreach ($_COOKIE["basket"] as $id => $cnt) {
            $item = 0;
            foreach ($data as $cur) {
                if ($cur["id"] == $id) {
                    $item = $cur;
                    break;
                }
            }
            if ($cnt) {
                $rows = $rows . '
                    <tr class="table__row">
                        <td class="table__cell">' . $item["title"] . '</td>
                        <td class="table__cell rub">' . $item["price"] . '</td>
                        <td class="table__cell">' . $cnt . '</td>
                    </tr>
                ';
                $sum += $cnt * $item["price"];
            }
        }        
    }

    echo '
        <table class="table">
            <tr class="table__row">
                <th class="table__cell table__cell_header table__cell_title">Название</th>
                <th class="table__cell table__cell_header table__cell_cost">Цена за штуку</th>
                <th class="table__cell table__cell_header table__cell_cnt">Количество</th>
            </tr>' . $rows . ' 
            <tr class="table__row">
                <td class="table__cell">Итого</td>
                <td class="table__cell rub"><strong>' . $sum . '</strong></td>
                <td class="table__cell"></td>
            </tr>
        </table>
        <button class="button button_type_clear"' . ($result ? '' : 'disabled') . '>Очистить корзину</button>
    ';
?>