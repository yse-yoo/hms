<?php
require_once '../../app.php';

$menu = new Menu();
$menu->get();

$category = new Category();
$categories = $category->pluck();

if (!$menu->values) return;

$menus = [];
foreach ($menu->values as $value) {
    $menus[$value['category_id']][] = $value;
}

$values = [
    'menus' => $menus,
    'categories' => $categories,
];

$json = json_encode($values);
echo $json;
