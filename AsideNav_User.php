<hr class="hr hr-blurry" />
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarLeftAlignExample"
      aria-controls="navbarLeftAlignExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
        <i class="fas fa-clipboard-list"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href='EditProfile.php?id=<?php echo "{$_SESSION['uid']}"; ?>'>ویرایش اطلاعات</a>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            خرید
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="ViewBasket.php">سبد خرید</a>
            </li>
            <li>
              <a class="dropdown-item" href="PurchaseInformation.php">خرید ها</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            لایک و بوکمارک
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="ViewLikeProduct.php">لایک ها</a>
            </li>
            <li>
              <a class="dropdown-item" href="ViewBookmarkProduct.php">بوکمارک ها</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>