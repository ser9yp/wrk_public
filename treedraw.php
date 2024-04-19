<?php

// Чтение JSON файла
$json = file_get_contents('data.json');
$data = json_decode($json, true);

// Функция для построения дерева, одинаковые имена не обрабатываются))0
function treeDraw($data, $parent = null) {
    $html = '<ul>';
    foreach ($data as $item) {
        if ($item['parent'] == $parent) {
            $html .= '<li>' . $item['fio'];
            $html .= treeDraw($data, $item['fio']);
            $html .= '</li>';
        }
    }
    $html .= '</ul>';

    return $html;
}

// Вывод дерева в HTML
echo treeDraw($data);
?>