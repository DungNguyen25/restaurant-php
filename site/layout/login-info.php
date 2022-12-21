    <form action="<?= $TK_URL ?>/login.php" method="POST" class="toggle-container-2 m-auto dropdown d-flex gap-2">
        <?php
        if (isset($_SESSION['user']['user_name'])) {
        ?>
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $_SESSION['user']['user_name'] ?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <?php
                if ($_SESSION['user']['part'] == TRUE) {
                    echo "<li><a  href='$ADMIN_URL/statistical' class='dropdown-item fw-bold'>Admin</a></li>";
                } else {
                }
                ?>
                <li>
                    <a href="<?= $TK_URL ?>/change-pass.php" class="dropdown-item">Change password</a>
                </li>
                <li>
                    <a href="<?= $TK_URL ?>/update-accounts.php" class="dropdown-item">Edit accounts</a>
                </li>
                <li>
                    <button name="btn_logoff" onclick="return confirm('logout from this website?');" class="dropdown-item">Log out</button>
                </li>
                <li>
                    <div class="toggle-container-2 dropdown-item">
                        <input onclick="myFunction()" type="checkbox" id="toggle">
                        <label id="mode" class="toggle" for="toggle">
                            <i id="icon" class="bx bx-sun"></i>
                            <i ic="icon" class="bx bxs-moon"></i>
                            <span class="ball"></span>
                        </label>
                    </div>
                </li>
            </ul>
        <?php
        } else {
        ?>
            <a href="<?= $SITE_URL ?>/accounts/login.php" class="btn btn-light w-100">Login</a>
        <?php
        }
        ?>
    </form>