<?php
require_once '../app.php';

if (empty($_GET['id'])) {
    header('Location: ../');
}

$menu = new Menu();
$menu->findByID($_GET['id']);

$category = new Category();
$categories = $category->pluck();
?>

<!DOCTYPE html>
<html lang="ja">

<?php include COMPONENT_DIR . 'head.php' ?>

<body class="bg-gray-100">
    <?php include COMPONENT_DIR . 'nav.php' ?>

    <div class="bg-white shadow-lg p-6 flex justify-center">
        <div class="w-full max-w-2xl">
            <img src="<?= MENUS_IMAGE_BASE_URL . $menu->value['image_name'] ?>" alt="" class="mb-4 rounded mx-auto">
            <h2 class="text-2xl font-bold text-gray-800 text-center">
                <?= $menu->value['name']  ?>
            </h2>
            <div class="text-right mb-6">
                <label for="" class="bg-green-500 text-white p-2 rounded">
                    <?= $categories[$menu->value['category_id']] ?>
                </label>
            </div>
            <p class="text-gray-600 mt-2 text-left">
                <?= nl2br($menu->value['summary'])  ?>
            </p>
            <p class="text-gray-600 mt-2 text-left mb-6">
                <?= nl2br($menu->value['description'])  ?>
            </p>

            <?php if ($menu->value['calories'] > 0) : ?>
                <p class="mb-6 text-left">
                    <strong>カロリー:</strong>
                    <?= $menu->value['calories'] ?>kcal
                </p>
            <?php endif ?>
            <p class="mb-6 text-left">
                ルームサービス:
                <?php if ($menu->value['is_room_service']) : ?>
                    あり
                <?php else : ?>
                    なし
                <?php endif ?>
            </p>

            <p class="text-gray-800 text-xl font-bold mt-2 text-left">
                Price: &yen;<?= number_format($menu->value['price']) ?>
            </p>

            <div class="mt-5 text-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Order
                </button>
                <a href="./" class="border border-blue-700 text-blue-500 py-2 px-4 rounded hover:underline">Back</a>
            </div>
        </div>
    </div>
</body>

</html>