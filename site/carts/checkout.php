<section class="h-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-10 col-xl-8">
                <form action="../orders/orders.php" method="POST" class="card" style="border-radius: 10px;">
                    <div class="card-header px-4 py-5">
                        <h5 class="text-muted mb-0">ORDER <span class="text-success"><?= $users['user_name'] ?></span>!</h5>
                    </div>
                    <div class="card-body p-4">
                        <?php
                        $grand_total = 0;
                        foreach ($items as $item) {
                            extract($item);
                            $grand_total += ($price * $quantity);
                            $cart_items[] = '';
                            $cart_items[] = $name_product . ' (' . $price . ' x ' . $quantity . ') - ';
                            $total_products = implode($cart_items);
                        ?>
                            <input name="total_price" type="hidden" value="<?= $grand_total ?>">
                            <input name="total_products" type="hidden" value="<?= $total_products ?>">
                            <div class="card shadow-0 border mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="<?= $IMAGE_URL ?>/products/<?= $image ?>" class="img-fluid" alt="Phone">
                                        </div>
                                        <div class="col-md-4 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0"><?= $name_product ?></p>
                                        </div>
                                        <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0 small">Qty: <?= $quantity ?></p>
                                        </div>
                                        <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0 small"><?= $price ?>$</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php
                        }
                        ?>

                        <p class="text-muted mb-0"><span class="fw-bold me-4">Total:</span><?= $total_products ?></p>
                        <div class="d-flex justify-content-between pt-4">
                            <p class="fw-bold mb-0">Your info</p>
                            <p class="text-muted mb-0"><span class="fw-bold me-4">Total:</span><?= $grand_total ?>$</p>
                        </div>

                        <div class="d-flex justify-content-between pt-2">
                            <p class="text-muted mb-0">User Name : <?= $users['user_name'] ?></p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <p class="text-muted mb-0">Number : <?= $users['number'] ?></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted mb-0">Email : <?= $users['email'] ?></p>
                        </div>

                        <div class="d-flex justify-content-between mb-4">
                            <p class="text-muted mb-0">Address : <?php if ($users['address'] == '') {
                                                                        echo 'please enter your address';
                                                                    } else {
                                                                        echo $users['address'];
                                                                    } ?></p>

                        </div>
                        <select name="method" class="form-select" aria-label="Default select example" required>
                            <option value="" disabled selected>Select payment method</option>
                            <option value="cash on delivery">Cash on delivery</option>
                            <option value="credit card">Credit card</option>
                            <option value="paytm">Paytm</option>
                            <option value="paypal">Paypal</option>
                        </select>

                    </div>
                    <button name="btn_insert" class="btn btn-success py-3">
                        <h5 class="h5 mb-0 ms-2">ORDER</h5>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>