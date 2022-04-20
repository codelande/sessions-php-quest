<?php

session_start();


if (!isset($_SESSION['user'])) {
    header("Location: /login.php");
    exit();
}
?>
<?php require 'inc/head.php';
include  'inc/data/products.php';
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                echo $catalog[(int)$item]['name'];
                echo  $catalog[(int)$item]['description'];
            }
        } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>