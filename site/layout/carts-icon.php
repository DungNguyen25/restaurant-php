<div class="">
    <form action="<?= $SITE_URL ?>/carts/carts.php" method="POST" class="toggle-container-2 m-auto dropdown d-flex gap-2">
        <?php
        if (isset($_SESSION['user']['user_name'])) {
            $id_user = $_SESSION['user']['id_user'];
            $total_cart_items = 0;
        ?>
            <?php
            require '../../dao/carts-icon.php';
            $total_cart_items = 0;
            $user_name = $_SESSION['user']['user_name'];
            $total_cart_items = count(carts_icon_select_by_user_name($user_name));
            ?>
            <button name="btn_select_user" class="text-white text-decoration-none bg-black">
                <i class="fas fa-shopping-cart"></i>
                <p class="btn btn-success rounded-circle">
                    <?= $total_cart_items; ?>
                </p>
            </button>
        <?php
        } else {
        ?>
            <button name="btn_select_user" class="text-white text-decoration-none bg-black">
                <i class="fas fa-shopping-cart"></i>
                <p class="btn btn-success rounded-circle">
                    0
                </p>
            </button>
        <?php
        }
        ?>
    </form>
</div>