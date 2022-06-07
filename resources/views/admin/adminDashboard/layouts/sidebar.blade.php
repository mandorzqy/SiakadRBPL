<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ ($title==="Dashboard") ? 'active': '' }}" aria-current="page" href="/admin">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('/biodata'?'active':'')}}" href="/admin/biodata">
            <span data-feather="file"></span>
            Biodata
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/transkrip">
            <span data-feather="file"></span>
            Transkrip
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin-kurikulum">
            <span data-feather="file"></span>
            Mata Kuliah
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/jadwal">
            <span data-feather="file"></span>
            Jadwal
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/kelas">
            <span data-feather="file"></span>
            Kelas
          </a>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
    </div>
  </nav>


  {{-- <div class="sidebar">
    <a class="nav-link {{ ($title==="Dashboard") ? 'active': '' }}" aria-current="page" href="/">
          <span data-feather="home"></span>
          Dashboard
        </a>
    <a class="nav-link {{Request::is('/biodata'?'active':'')}}" href="/biodata">
          <span data-feather="file"></span>
          Biodata
        </a>
    <a class="nav-link {{Request::is('/biodata'?'active':'')}}" href="/kurikulum">
          <span data-feather="file"></span>
          Kurikulum
        </a>
  <a class="nav-link {{Request::is('/biodata'?'active':'')}}" href="/jadwal">
          <span data-feather="file"></span>
          Jadwal Kuliah
        </a>

  <a class="nav-link {{Request::is('/biodata'?'active':'')}}" href="/frs">
          <span data-feather="file"></span>
          FRS
  </a>
</div>

 --}}
