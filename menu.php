<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホテルの食事メニュー</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-6">
            <h1 class="text-3xl font-bold text-gray-800">ラグジュアリーホテル</h1>
            <nav class="mt-4">
                <ul class="flex space-x-4">
                    <li><a href="./" class="text-gray-600 hover:text-gray-800">ホーム</a></li>
                    <li><a href="menu.php" class="text-gray-600 hover:text-gray-800">メニュー</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-800">予約</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-800">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">ホテルの食事メニュー</h1>
        <div class="menu-category mb-8">
            <h2 class="text-2xl font-semibold mb-4">フード</h2>
            <div class="menu-item mb-4">
                <h3 class="text-xl font-semibold mb-2">朝食</h3>
                <ul class="list-disc list-inside">
                    <li><a href="detail.php" class="text-blue-500 hover:underline">パンケーキ</a></li>
                    <li><a href="detail.php" class="text-blue-500 hover:underline">和朝食セット</a></li>
                </ul>
            </div>
            <div class="menu-item mb-4">
                <h3 class="text-xl font-semibold mb-2">昼食</h3>
                <ul class="list-disc list-inside">
                    <li><a href="detail.php" class="text-blue-500 hover:underline">シーフードパスタ</a></li>
                    <li><a href="detail.php" class="text-blue-500 hover:underline">サンドイッチセット</a></li>
                </ul>
            </div>
            <div class="menu-item mb-4">
                <h3 class="text-xl font-semibold mb-2">夕食</h3>
                <ul class="list-disc list-inside">
                    <li><a href="detail.php" class="text-blue-500 hover:underline">ステーキディナー</a></li>
                    <li><a href="detail.php" class="text-blue-500 hover:underline">寿司セット</a></li>
                </ul>
            </div>
        </div>
        <div class="menu-category mb-8">
            <h2 class="text-2xl font-semibold mb-4">ドリンク</h2>
            <div class="menu-item mb-4">
                <h3 class="text-xl font-semibold mb-2">朝食</h3>
                <ul class="list-disc list-inside">
                    <li><a href="detail.php" class="text-blue-500 hover:underline">オレンジジュース</a></li>
                    <li><a href="detail.php" class="text-blue-500 hover:underline">コーヒー</a></li>
                </ul>
            </div>
            <div class="menu-item mb-4">
                <h3 class="text-xl font-semibold mb-2">昼食</h3>
                <ul class="list-disc list-inside">
                    <li><a href="detail.php" class="text-blue-500 hover:underline">アイスティー</a></li>
                    <li><a href="detail.php" class="text-blue-500 hover:underline">レモネード</a></li>
                </ul>
            </div>
            <div class="menu-item mb-4">
                <h3 class="text-xl font-semibold mb-2">夕食</h3>
                <ul class="list-disc list-inside">
                    <li><a href="detail.php" class="text-blue-500 hover:underline">赤ワイン</a></li>
                    <li><a href="detail.php" class="text-blue-500 hover:underline">ビール</a></li>
                </ul>
            </div>
        </div>
    </main>
</body>

</html>