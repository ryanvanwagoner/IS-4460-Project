<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light" style="font-family: 'Lato', sans-serif !important;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="mainpage.php">
        <img src="../img/studenteats.png" style="width: 125px; height: auto;" alt="" class="nav-image">
    </a>

    <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
        <span class="navbar-text">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <?php echo ($active == 'index') ? '<li class="nav-item active">' : '<li class="nav-item">' ?>
                    <a class="nav-link header-link" href="mainpage.php">Home</a>
                </li>
                <?php echo ($active == 'categories') ? '<li class="nav-item active">' : '<li class="nav-item">' ?>
                    <a class="nav-link header-link" href="categories.php">Categories</a>
                <?php echo ($active == 'login') ? '<li class="nav-item active">' : '<li class="nav-item">' ?>
                    <a class="nav-link header-link" href="login.php">Sign Up</a>
                </li>
            </ul>
        </span>
    </div>
</nav>