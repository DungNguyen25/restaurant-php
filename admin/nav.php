<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
    <div class="d-flex align-items-center">
        <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
        <h2 class="fs-2 m-0">Admin</h2>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user me-2"></i> <?= $_SESSION['user']['user_name'] ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <?php
                    if ($_SESSION['user']['part'] == TRUE) {
                        echo "<li><a  href='$ADMIN_URL/main-page' class='dropdown-item fw-bold'>Admin</a></li>";
                    } else {
                    }
                    ?>
                    <li>
                        <a href="<?= $TK_URL ?>/doi-mk.php" class="dropdown-item">Change password</a>
                    </li>
                    <li>
                        <a href="<?= $TK_URL ?>/cap-nhat-tk.php" class="dropdown-item">Edit accounts</a>
                    </li>
                    <li>
                        <button name="btn_logoff" onclick="return confirm('logout from this website?');" class="dropdown-item">Log out</button>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>