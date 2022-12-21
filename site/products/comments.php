<?php
require '../../dao/comments.php';
if (exist_param("comments_insert")) {
    $user_name = $_SESSION['user']['user_name'];
    $image = $_SESSION['user']['image'];
    $date_comment = date_format(date_create(), 'Y-m-d');
    comments_insert($user_name, $id_product, $content, $date_comment, $image);
}

if (!isset($_SESSION['user'])) {
    echo '<b>Login in to comment</b>';
} else {
?>
    <form class="bg-wh p-4" action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
        <div class="form-outline">
            <label class="form-label" for="form2Example1">Comments</label>
            <input class="form-control" name="content" />
        </div>
        <button name="comments_insert" class="btn btn-dark w-100 mb-4">Send</button>
    </form>
<?php
}
?>
<?php
$comments_list = comments_select_by_products($id_product);
foreach ($comments_list as $bl) {
    extract($bl);
?>
    <div class="row p-3">
        <div class="col-md-2 ">
            <img src=" <?= $CONTENT_URL ?>/imgs/users/<?= $image ?>" class="img-thumbnail" alt="">
        </div>
        <div class="col-md-10 text-start">
            <p class="text-muted">
                <?= $id_user ?>
                <span>
                    <?= $date_comment ?>
                </span>
            </p>
            <p><?= $content ?></p>
        </div>
    </div>
<?php
}
?>