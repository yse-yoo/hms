<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メニュー管理</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-6">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-6">メニュー管理</h1>
        <a href="./input.php" class="text-blue-500 hover:underline">New</a>
        <table class="table">
            <thead>
                <tr class="w-full bg-gray-200 text-gray-700">
                    <th></th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>朝・昼・夕</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td class="py-3 px-4 border-b border-gray-200">
                        <a href="edit.php">編集</a>
                    </td>
                    <td class="py-3 px-4 border-b border-gray-200">シーフードパスタ</td>
                    <td class="py-3 px-4 border-b border-gray-200">フード</td>
                    <td class="py-3 px-4 border-b border-gray-200">昼食、夕食</td>
                </tr>
            </tbody>
        </table>

    </div>
</body>

</html>