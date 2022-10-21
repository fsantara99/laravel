
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse px-1">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
             Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('User View') ? 'active' : '' }}" aria-current="page" href="/">
            <span data-feather="user"></span>
             User View
          </a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-item-center px-3 mt-3 mb-1 text-muted">
          <span>DATA PENDAFTARAN</span>
        </h6>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text"></span>
            Data Peserta
          </a>
        </li>
      </ul>

      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="clipboard"></span>
             Pelatihan
          </a>
        </li>
      </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-item-center px-3 mt-3 mb- 0 text-muted">
          <span>DATA PENILAIAN</span>
        </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="edit-3"></span>
             Input Data
          </a>
        </li>
      </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-item-center px-3 mt-3 mb- 0 text-muted">
          <span>E-SERTIFIKAT</span>
        </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="printer"></span>
             Cetak Sertifikat
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="edit-3"></span>
             Edit Sertifikat
          </a>
        </li>
      </ul>
      
  </div>
</nav>
