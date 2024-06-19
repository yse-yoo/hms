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
        <h1 class="text-2xl font-bold mb-6">フードメニューのデータ入力</h1>
        <form action="/submit-food" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">名前</label>
                <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label for="category" class="block text-gray-700">カテゴリー</label>
                <select id="category" name="category" class="w-full p-2 border border-gray-300 rounded" required>
                    <option value="">フード</option>
                    <option value="">ドリンク</option>
                    <option value="">デザート</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="category" class="block text-gray-700">時間帯</label>
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" id="breakfast" name="category[]" value="朝食" class="form-checkbox text-blue-600">
                        <span class="ml-2">朝食</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="checkbox" id="lunch" name="category[]" value="昼食" class="form-checkbox text-blue-600">
                        <span class="ml-2">昼食</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="checkbox" id="dinner" name="category[]" value="夕食" class="form-checkbox text-blue-600">
                        <span class="ml-2">夕食</span>
                    </label>
                </div>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">サマリー</label>
                <textarea id="description" name="description" class="w-full p-2 border border-gray-300 rounded" rows="2"></textarea>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">説明</label>
                <textarea id="description" name="description" class="w-full p-2 border border-gray-300 rounded" rows="4"></textarea>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700">価格</label>
                <input type="number" id="price" name="price" class="w-full p-2 border border-gray-300 rounded" step="1" required>
            </div>
            <div class="mb-4">
                <label for="calories" class="block text-gray-700">カロリー</label>
                <input type="number" id="calories" name="calories" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="imageURL" class="block text-gray-700">画像</label>
                <input type="file">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">ルームサービス</label>
                <div>
                    <label class="inline-flex items-center">
                        <input type="radio" id="room-service-yes" name="roomService" value="あり" class="form-radio text-blue-600">
                        <span class="ml-2">あり</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" id="room-service-no" name="roomService" value="なし" class="form-radio text-blue-600">
                        <span class="ml-2">なし</span>
                    </label>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">送信</button>
            </div>
        </form>
    </div>
</body>

</html>