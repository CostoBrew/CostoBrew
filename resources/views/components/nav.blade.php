<nav class="navbar navbar-expand-lg navi-bg">
  <div class="container-fluid mx-5 py-2">
    <a class="navbar-brand" href="#"><img src="{{ asset('CBL1.svg') }}" alt="costobrew" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Community</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Contact</a>
        </li>
      </ul>
    </div>

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
</nav>
