<?php

// Получаем offset и limit из GET параметров
$offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 1000;

// Общее количество операций
$total_operations = 10000;

// Массив для хранения результатов операций (в реальном приложении здесь будет обработка операций)
$results = [];

// Выполнение операций
for ($i = $offset; $i < $offset + $limit && $i < $total_operations; $i++) {
    // Здесь идет обработка каждой операции
    $results[] = "Operation $i completed.";
}

// Проверка, есть ли еще операции для выполнения
$has_more = $offset + $limit < $total_operations;

// Возврат результата в формате JSON
echo json_encode([
    'results' => $results,
    'has_more' => $has_more,
]);

?>