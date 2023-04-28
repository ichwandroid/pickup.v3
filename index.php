<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dist/css/headers.css" rel="stylesheet">
    <script src="assets/dist/js/color-modes.js"></script>
</head>
<body>
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (dark)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="dark" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>
    <main>
      <header class="py-3 mb-3 border-bottom">
        <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <ul class="dropdown-menu text-small shadow" style="">
              <li><a class="dropdown-item active" href="#" aria-current="page">Overview</a></li>
              <li><a class="dropdown-item" href="#">Inventory</a></li>
              <li><a class="dropdown-item" href="#">Customers</a></li>
              <li><a class="dropdown-item" href="#">Products</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Reports</a></li>
              <li><a class="dropdown-item" href="#">Analytics</a></li>
            </ul>
          </div>

          <div class="d-flex align-items-center">
            <form class="w-100 me-3" role="search">
              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>

            <div class="flex-shrink-0 dropdown">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" width="32" height="32">
              </a>
              <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <div class="container-fluid pb-3">
    <div class="d-grid gap-3" style="grid-template-columns: 1fr 2fr;">
      <div class="bg-body-tertiary border rounded-3">
        <br><br><br><br><br><br><br><br><br><br>
      </div>
      <div class="bg-body-tertiary border rounded-3">
        <br><br><br><br><br><br><br><br><br><br>
      </div>
    </div>
  </div>
    </main>
</body>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</html>