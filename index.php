<?php
require_once 'app.php';

$menu = new Menu();
$menu->get();

?>

<!DOCTYPE html>
<html lang="ja">

<?php include COMPONENT_DIR . 'head.php' ?>

<body class="bg-gray-100">
  <?php include COMPONENT_DIR . 'nav.php' ?>

  <main class="container mx-auto px-4 py-8">
    <section class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">特選メニュー</h2>
      <p class="text-gray-600">ラグジュアリーホテルが誇る贅沢な食事をお楽しみください。</p>
    </section>

    <section>
      <div id="menu" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php if ($menu->values) : ?>
          <?php foreach ($menu->values as $value) : ?>
            <div class="bg-white rounded-lg shadow-lg p-6">
              <img class="w-full h-48 object-cover rounded-t-lg mb-4" src="<?= MENUS_IMAGE_BASE_URL . $value['image_name'] ?>" alt="<?= $value['name'] ?> ">
              <h4 class="text-xl font-bold text-gray-800"><?= $value['name'] ?></h4>
              <p class="text-gray-600 mt-2"><?= nl2br($value['summary']) ?></p>
              <p class="text-gray-800 font-bold mt-2">&yen;<?= $value['price'] ?></p>
              <a class="text-blue-800 font-bold mt-2" href="menu/detail.php?id=<?= $value['id'] ?>">More...</a>
            </div>
          <?php endforeach ?>
        <?php endif ?>
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