<style>
    .sidebar {
        margin: 0;
        padding: 0;
        width: 250px;
        background-color: white;
        height: 100%;
        overflow: auto;
        margin-top: 20px;
        }
        .sidebar footer{
            color: white;
            font-family: "Libre Franklin";
            font-size: 10px;
            margin: 5px;
        }

        .sidebar a {
        margin: 5px;
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
        font-size: 15px;
        font-family: "Libre Franklin";
        border-radius:5px;
        }

        .sidebar h4{
            margin: 10px;
            text-align: center;
            color: white;
            font-family: "Libre Franklin";
            font-size: 15px;
        }

        .sidebar a.active {
        background-color: beige;
        color: black;
        }

        .sidebar a:hover:not(.active) {
        background-color: rgba(192,229,247,255);
        color: black;
        }

        div.content {
        margin-left: 250px;
        padding: 1px 16px;
        height: 1000px;
        }

        @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }
        .sidebar a {float: left;}
        div.content {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
        }
        ::-webkit-scrollbar {
        width: 10px;
        height: 10px;
        }
        ::-webkit-scrollbar-track {
        background-color: transparent;
        border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
        background-color: rgba(0, 0, 0, 0.4);
        border-radius: 10px;
        }
    </style>


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
