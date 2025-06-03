<nav class="navbar navbar-expand-lg navi-bg fixed-top shadow-sm">
  <div class="container-fluid mx-lg-5 mx-3 py-2">
    <a class="navbar-brand" href="#"><img src="{{ asset('CBL1.svg') }}" alt="costobrew" class="img-fluid"></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/community">Community</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#contact">Contact</a>
        </li>
      </ul>

      <!-- Desktop cart and user buttons -->
      <div class="navbar-actions d-flex align-items-center">
        <button class="me-3 px-3 py-2 fs-6 btn-offwhite text-dark rounded rounded-pill" type="button">
            <i class="bi bi-cart-fill"></i> - 0
        </button>

        <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn-offwhite px-3 py-2 rounded rounded-pill text-black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-fill"></i> Harleyyu
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Report an issue</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </div>
      </div>

      <!-- Mobile cart and user buttons -->
      <div class="navbar-actions-mobile">
        <div class="d-flex flex-column gap-2">
          <button class="btn btn-offwhite text-dark rounded rounded-pill" type="button">
              <i class="bi bi-cart-fill"></i> Cart - 0
          </button>
          <div class="dropdown">
            <a class="btn btn-offwhite rounded rounded-pill text-black dropdown-toggle w-100" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-fill"></i> Harleyyu
            </a>
            <ul class="dropdown-menu w-100">
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Report an issue</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
