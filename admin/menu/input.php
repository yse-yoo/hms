<?php
require_once '../../app.php';
$menu = [];
if (isset($_SESSION[APP_NAME]['menu'])) {
    $menu = $_SESSION[APP_NAME]['menu'];
}

$category = new Category();
$category->get();

?>
<!DOCTYPE html>
<html lang="ja">

<?php include('../../components/admin_head.php') ?>

<body class="bg-gray-100">
    <?php include('../../components/admin_nav.php') ?>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">New menu</h1>
        <form method="POST" enctype="multipart/form-data" action="admin/menu/add.php" class="bg-white p-6 rounded shadow-md">
            <div class="mb-4">
                <label class="block text-gray-700">Name</label>
                <input type="text" name="name" value="<?= @$menu['name'] ?>" class="mt-1 block p-2 w-full border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">category</label>
                <select name="category_id" class="mt-1 p-2 block w-full border">
                    <option value="0">-- Category --</option>
                    <?php foreach ($category->values as $category_value) : ?>
                        <option value="<?= $category_value['id'] ?>"><?= $category_value['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Price</label>
                <input type="number" name="price" value="<?= @$menu['price'] ?>" class="mt-1 block p-2 w-full border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Stock</label>
                <input type="number" name="stock" value="<?= @$menu['stock'] ?>" class="mt-1 block p-2 w-full border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Calorie</label>
                <input type="number" name="calories" value="<?= @$menu['calories'] ?>" class="mt-1 block p-2 w-full border rounded" required>
            </div>
            <label class="block text-gray-700 mb-2">Room Service</label>
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2">
                    <input id="is_room_service_0" type="radio" name="is_room_service" value="0" class="form-radio" required>
                    <label for="is_room_service_0">なし</label>
                </div>
                <div class="flex items-center space-x-2">
                    <input id="is_room_service_1" type="radio" name="is_room_service" value="1" class="form-radio" required>
                    <label for="is_room_service_1">あり</label>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Summary</label>
                <textarea name="summary" class="mt-1 block p-2 w-full border rounded" required><?= @$menu['summary'] ?></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Description</label>
                <textarea name="description" class="mt-1 block p-2 w-full border rounded" required><?= @$menu['description'] ?></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Image</label>
                <input type="file" name="image" class="mt-1 block p-2 w-full border rounded">
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Create</button>
                <a href="admin/menu/" class="text-blue-500 border border-blue-500 py-2 px-4 rounded">Back</a>
            </div>
        </form>
    </div>
</body>

</html>