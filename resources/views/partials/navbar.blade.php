<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li>
          <a class="nav-link px-2 text-secondary text-white {{ Request::is('/') ? 'active' : '' }}" href="/">Profile</a>
        </li>
        <li>
          <a class="nav-link px-2 text-secondary text-white {{ Request::is('ecertificate') ? 'active' : '' }}" href="/ecertificate">E-Certificate</a>
        </li>
        <li>
          <a class="nav-link px-2 text-secondary text-white {{ Request::is('krs') ? 'active' : '' }}" href="/krs">KRS</a>
        </li>
        <li>
          <a class="nav-link px-2 text-secondary text-white {{ Request::is('faq') ? 'active' : '' }}" href="/faq">FAQ</a>
        </li>
        <li>
          <a href="/validation" target="_blank" rel="nofollow" class="nav-link px-2 text-white {{ Request::is('validation') ? 'active' : '' }}">Validation</a>
        </li>
      </ul>

      {{-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form> --}}

      {{-- <div class="dropdown text-end">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul>
      </div> --}}
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown text-end">
          <a class="nav-link dropdown-toggle px-2 text-secondary text-white" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Log Out</button>
              </form>
            </li>
          </ul>
        </li>
        @else
        {{-- <li class="nav-item">
              <a href="/login" class="nav-link px-2 text-secondary text-white" {{ ($title === "Login") ? 'active' : '' }}><i class="bi bi-box-arrow-in-right"></i>
               Login</a>
        </li> --}}
        @endauth
      </ul>
    </div>
  </div>
</header>