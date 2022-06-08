
<div class="sidebar">
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
  
