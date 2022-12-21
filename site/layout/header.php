<a href="<?= $SITE_URL ?>/main-page/index.php" class="header-logo">Tocoto</a>
<nav id="myTopnav" class="header-nav">
    <a style="--i:1" href="<?= $SITE_URL ?>/main-page?about-us" class="nav-a">About</a>
    <a style="--i:2" href="<?= $SITE_URL ?>/products/list.php?all" class="nav-a dropdown">Menu <i class="fa-solid fa-caret-down"></i>
        <div class="dropdown-content">
            <p>All products</p>
            <p>Outstanding</p>
            <p>Previous Orders</p>
            <p>Favorite product</p>
        </div>
    </a>
    <a style="--i:3" href="<?= $SITE_URL ?>/main-page?agent" class="nav-a">Authorized dealer</a>
    <a style="--i:4" href="<?= $SITE_URL ?>/main-page?news" class="nav-a">News</a>
    <a style="--i:5" href="<?= $SITE_URL ?>/main-page?questions" class="nav-a">Questions</a>
</nav>
<div class="icons">
    <?php require 'carts-icon.php' ?>
</div>
<div class="login">
    <?php require 'login-info.php' ?>
</div>
<i class="fa-solid fa-bars text-black" onclick="nav()"></i>