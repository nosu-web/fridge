<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/"><?=SITE_NAME?></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Поиск рецептов" aria-label="Поиск рецептов">
    <ul class="navbar-nav px-3">
        <?php if($_SESSION["name"]): ?>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Выход</a>
            </li>
        <? else: ?>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Авторизация</a>
            </li>
        <? endif; ?>
    </ul>
  </header>
  