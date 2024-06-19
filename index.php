<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ラグジュアリーホテル -お食事メニュー-</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
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
    <section class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">特選メニュー</h2>
      <p class="text-gray-600">ラグジュアリーホテルが誇る贅沢な食事をお楽しみください。</p>
    </section>

    <section>
      <h3 class="text-2xl font-bold text-gray-800 mb-6">メニュー一覧</h3>
      <div id="menu" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- メニューがここに動的に追加されます -->
        <div class="bg-white rounded-lg shadow-lg p-6"><img class="w-full h-48 object-cover rounded-t-lg mb-4" src="images/0001.jpg" alt="シーフードパスタ">
          <h4 class="text-xl font-bold text-gray-800">シーフードパスタ</h4>
          <p class="text-gray-600 mt-2">新鮮なシーフードを使用した特製パスタ。</p>
          <p class="text-gray-800 font-bold mt-2">¥2,500</p><a class="text-blue-800 font-bold mt-2" href="detail.php">More...</a>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6"><img class="w-full h-48 object-cover rounded-t-lg mb-4" src="https://via.placeholder.com/300" alt="ステーキ">
          <h4 class="text-xl font-bold text-gray-800">ステーキ</h4>
          <p class="text-gray-600 mt-2">最高級の和牛を使用したジューシーなステーキ。</p>
          <p class="text-gray-800 font-bold mt-2">¥5,000</p><a class="text-blue-800 font-bold mt-2" href="detail.php">More...</a>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6"><img class="w-full h-48 object-cover rounded-t-lg mb-4" src="https://via.placeholder.com/300" alt="寿司セット">
          <h4 class="text-xl font-bold text-gray-800">寿司セット</h4>
          <p class="text-gray-600 mt-2">旬の魚を使用した贅沢な寿司セット。</p>
          <p class="text-gray-800 font-bold mt-2">¥3,800</p><a class="text-blue-800 font-bold mt-2" href="detail.php">More...</a>
        </div>
      </div>
    </section>
  </main>

  <footer class="bg-white shadow mt-12">
    <div class="container mx-auto px-4 py-6 text-center">
      <p class="text-gray-600">© 2024 ラグジュアリーホテル. All rights reserved.</p>
    </div>
  </footer>
</body>

</html>