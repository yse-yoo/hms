<?php
require_once '../../app.php';

// IDがなければ一覧にリダイレクト
if (empty($_GET['id'])) {
    header('Location: ./');
    exit;
}

// 指定IDのカテゴリ取得
$category = new Category();
$category->findByID($_GET['id']);

// 該当カテゴリが存在しない場合
if (empty($category->value)) {
    header('Location: ./');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">

<?php include('../../components/admin_head.php') ?>

<body class="bg-gray-100">
    <?php include('../../components/admin_nav.php') ?>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">カテゴリ編集</h1>
        <form method="POST" action="admin/category/update.php" class="bg-white p-6 rounded shadow-md">
            <input type="hidden" name="id" value="<?= $category->value['id'] ?>">

            <div class="mb-4">
                <label class="block text-gray-700">カテゴリ名</label>
                <input
                    type="text"
                    name="name"
                    value="<?= htmlspecialchars($category->value['name']) ?>"
                    class="mt-1 block p-2 w-full border rounded"
                    required>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">更新</button>
                <a href="admin/category/" class="text-blue-500 border border-blue-500 py-2 px-4 rounded">戻る</a>
            </div>
        </form>
    </div>
</body>

</html>