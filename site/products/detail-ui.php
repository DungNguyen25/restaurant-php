<div class="news">

    <div class="news-news1 ">
        <div class="news1-container">
            <div class="zoom-img">
                <img src="<?= $IMAGE_URL ?>/products/<?= $products['image'] ?>" alt="" class="m-auto news1-img content-img">
            </div>
            <div class="my-auto">
                <h3 class="news1-title"><?= $products['name_product'] ?></h3>
                <a class="news1-more">15 calories</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-3">
                <div class="card">
                    <?php require 'comments.php'; ?>
                </div>
            </div>
            <form class="col-md-6 p-3" action="../carts/carts.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="name_product" value="<?= $products['name_product']; ?>">
                <input type="hidden" name="price" value="<?= $products['price']; ?>">
                <input type="hidden" name="image" value="<?= $products['image']; ?>">
                <h3 class="border-bottom border-4 border-success">Size options</h3>
                <div class="btn-group p-5" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                    <label class="btn btn-outline-success " for="btnradio1">
                        <img class="m-auto px-3" src="https://www.starbucks.com/app-assets/0295bad53506b2b3c22b7e5a16fd1554.svg" alt="">
                        <h5 class="text-xs text-center text-semibold m-0 text-black">Short</h5>
                        <h5 class="text-xs text-center text-semibold m-0"><?= $products['price'] ?>$</h5>
                    </label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" checked>
                    <label class="btn btn-outline-success" for="btnradio2">
                        <img class="m-auto px-3 " src="https://www.starbucks.com/app-assets/d57860098a9c7cb67f0d3f83bb851eb6.svg" alt="">
                        <h5 class="text-xs text-center text-semibold m-0 text-black">Tall</h5>
                        <h5 class="text-xs text-center text-semibold m-0"><?= $products['price'] ?>$</h5>
                    </label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-success" for="btnradio3">
                        <img class="m-auto px-3" src="https://www.starbucks.com/app-assets/a35163e609f2058eee276482e80dc491.svg" alt="">
                        <h5 class="text-xs text-center text-semibold m-0 text-black">Grande</h5>
                        <h5 class="text-xs text-center text-semibold m-0"><?= $products['price'] ?>$</h5>
                    </label>
                </div>
                <div class="">
                    <button name="btn_insert" class="btn btn-success">Add to order</button>
                </div>
            </form>
        </div>
    </div>
</div>