<?php
require_once '../../app.php';
$category = [];
if (isset($_SESSION[APP_NAME]['category'])) {
    $category = $_SESSION[APP_NAME]['category'];
}
?>

<!DOCTYPE html>
<html lang="ja">

<?php include('../../components/admin_head.php') ?>

<body class="bg-gray-100">
    <?php include('../../components/admin_nav.php') ?>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">New Category</h1>
        <form method="POST" action="admin/category/add.php" class="bg-white p-6 rounded shadow-md">
            <div class="mb-4">
                <label class="block text-gray-700">Category Name</label>
                <input type="text" name="name" value="<?= @$category['name'] ?>" class="mt-1 block p-2 w-full border rounded" required>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded">Create</button>
                <a href="admin/category/" class="text-green-500 border border-green-500 py-2 px-4 rounded">Back</a>
            </div>
        </form>
    </div>
</body>

</html>