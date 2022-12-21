<div class="container-fluid p-5 cart-container">
    <div class="card">
        <div class="row my-4 h-100 ">
            <h3 class="fs-4 mb-3">Danh sách sản phẩm</h3>
            <div class="col overflow-auto">
                <table class="table bg-white rounded shadow-sm  table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($items as $item) {
                            extract($item);
                        ?>
                            <form action="carts.php" method="post">
                                <input type="hidden" name="id_cart" value="<?= $id_cart ?>">
                                <tr>
                                    <td>
                                        <img src="<?= $IMAGE_URL ?>/products/<?= $image ?>" alt="" width="50px" class="m-auto">
                                    </td>
                                    <th scope="row"><?= $name_product ?></th>
                                    <td><?= $price ?>$</td>
                                    <td>
                                        <div class="flex">
                                            <input type="number" name="quantity" class="form-control" min="1" max="99" placeholder="<?= $quantity ?>" maxlength="2">
                                        </div>
                                    </td>
                                    <td><button name="btn_update" class="btn btn-success">update</button></td>
                                    <td><button name="btn_delete" class="btn btn-danger">delete</button></td>
                                </tr>
                            </form>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="w-100 text-center">
        <a href="carts.php?btn_checkout" class="btn btn-warning ">Continue Shopping</a>
    </div>
</div>