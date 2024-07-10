<?php
require_once '../../app.php';

$menu = new Menu();
$menu->get();

if (!$menu->values) return;

$category = new Category();
$categories = $category->pluck();

foreach ($menu->values as $value) {
    $value['category_name'] = $categories[$value['category_id']];
    $values[] = $value;
}

$json = json_encode($values);
echo $json;
