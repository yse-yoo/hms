<?php
require_once '../app.php';
?>

<!DOCTYPE html>
<html lang="ja">

<?php include COMPONENT_DIR . 'head.php' ?>

<body class="bg-gray-100">
    <?php include COMPONENT_DIR . 'nav.php' ?>

    <main class="container mx-auto px-4 py-8">
        <section class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Menu</h2>
            <p class="text-gray-600">ラグジュアリーホテルが誇る贅沢な食事をお楽しみください。</p>
        </section>


        <section id="menu">
        </section>
    </main>

    <footer class="bg-white shadow mt-12">
        <div class="container mx-auto px-4 py-6 text-center">
            <p class="text-gray-600">© 2024 ラグジュアリーホテル. All rights reserved.</p>
        </div>
    </footer>

    <script>
        renderMenusByCategory('menu');
    </script>
</body>

</html>