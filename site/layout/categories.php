<div class="list">
    <a href="<?= $SITE_URL ?>/products/list.php" class='list-a content-zoom text-center'>
        Drinks
    </a>
    <?php
    require '../../dao/categories.php';
    $categories_array = categories_select_all();
    foreach ($categories_array as $categories) {
        $href = "$SITE_URL/products/list.php?name_category=$categories[name_category]";
        echo "
        <a href='$href' class='list-a content-zoom text-center'> 
            $categories[name_category]
        </a>
    ";
    }
    ?>
</div>