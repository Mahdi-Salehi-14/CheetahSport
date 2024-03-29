<header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href = "index.php">خانه</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href = "ProductList.php">محصولات</a>
          </li>
        </ul>
      </div>
      <div class="d-flex align-items-center">
        <div class="container-fluid">
          <form action="Search.php" method="post" class="d-flex input-group w-auto">
            <input name="search" type="search" class="form-control" placeholder="جستجو" aria-label="Search"/>
            <button name="submit" type="submit" class="btn btn-outline-primary" data-mdb-ripple-color="dark"><i class="fas fa-search"></i></button>
          </form>
        </div>
        <?php if(isset($_SESSION['uid'])) {echo '
              <a class="text-reset me-3" href = "ViewBasket.php" data-mdb-toggle="tooltip" title="سبد خرید"><i class="fas fa-shopping-cart"></i></a>
        ';} ?>
        <a class="text-reset me-3" href = "<?php if(isset($_SESSION['uid'])) {echo 'ViewProfile.php';} else {echo 'Login.php';} ?>"><?php if(isset($_SESSION['uid'])) {echo '<i class="fas fa-user" data-mdb-toggle="tooltip" title="پروفایل کاربر"></i>';} else {echo '<i class="fas fa-user-plus" data-mdb-toggle="tooltip" title="ورود به حساب"></i>';} ?></a>
        <?php if(isset($_SESSION['uid']) && $user['role'] == 'adminuser') {echo '
              <a class="text-reset me-3" href = "AdminPanel.php" data-mdb-toggle="tooltip" title="پنل ادمین"><i class="fas fa-user-md"></i></a>
          ';} ?>
        <?php if(isset($_SESSION['uid'])) {echo '
              <a class="text-reset me-3" href = "Logout.php" data-mdb-toggle="tooltip" title="خروج از حساب"><i class="fas fa-power-off"></i></a>
        ';} ?>
      </div>
    </div>
  </nav>
</header>