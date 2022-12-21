<nav class=" nav--sp">
    <a href="" class="nav-a content-zoom">All products</a>
    <a href="" class="nav-a content-zoom">Outstanding</a>
    <a href="" class="nav-a content-zoom">Previous Orders</a>
    <a href="" class="nav-a content-zoom">Favorite product</a>
</nav>
<section class="section--sp">
    <?php require '../layout/categories.php' ?>
    <div class="product">
        <h3 class="title-menu">Menu</h3>
        <h3 class="title-water">Water</h3>
        <div class="product-menu" id="products">
            <?php
            foreach ($items as $item) {
                extract($item);
            ?>
                <form action="detail.php" method="POST">
                    <div class="">
                        <a href="detail.php?id_product=<?= $id_product ?>" class="product-water content-zoom p-3 text-decoration-none text-black">
                            <input name="id_product" type="hidden" value="<?= $id_products ?>">
                            <img src="<?= $IMAGE_URL ?>/products/<?= $image ?>" alt="" width="50px" class="water-img">
                            <!-- <div class="flex">
                                        <div class="category"><?= $category ?></div>
                                    </div> -->
                            <div class="">
                                <h4 class="text-center"><?= $name_product ?></h4>
                            </div>
                            <!-- <div class="flex-btn">
                                    <a href="update_product.php?update=<?= $id_products ?>" class="option-btn">update</a>
                                    <a href="products.php?delete=<?= $id_products ?>" class="delete-btn" onclick="return confirm('delete this product?');">delete</a>
                                </div> -->
                        </a>
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
      
    </div>

</section>