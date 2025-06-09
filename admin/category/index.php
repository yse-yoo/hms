<?php
require_once '../../app.php';
if (isset($_SESSION[APP_NAME]['category'])) {
    unset($_SESSION[APP_NAME]['category']);
}

$category = new Category();
$category->get();
?>

<!DOCTYPE html>
<html lang="ja">

<?php include('../../components/admin_head.php') ?>

<body class="bg-gray-100">
    <?php include('../../components/admin_nav.php') ?>

    <main class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">カテゴリ一覧</h1>

        <div class="mt-3 mb-3">
            <a href="admin/category/new.php" class="bg-blue-500 text-white py-2 px-4 rounded">新規カテゴリ追加</a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="py-2 px-4 text-left">操作</th>
                        <th class="py-2 px-4 text-left">カテゴリ名</th>
                        <th class="py-2 px-4 text-left">作成日</th>
                        <th class="py-2 px-4 text-left">更新日</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($category->values): ?>
                        <?php foreach ($category->values as $value): ?>
                            <tr class="border-b">
                                <td class="py-2 px-4">
                                    <a href="admin/category/edit.php?id=<?= $value['id'] ?>" class="text-blue-500 hover:underline">編集</a>
                                </td>
                                <td class="py-2 px-4"><?= htmlspecialchars($value['name']) ?></td>
                                <td class="py-2 px-4"><?= $value['created_at'] ?></td>
                                <td class="py-2 px-4"><?= $value['updated_at'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>