 <nav class="sidebar sidebar-offcanvas" id="sidebar" style="z-index: 10000;width:350px;">
        <div class="user-profile">
          <div class="user-image">
            <img src="files/{{$user->photo}}">
          </div>
          <div class="user-name">
             UniversityDorm
          </div>
          <div class="user-designation">
             Admin
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item @if($route == 'home') active @endif">
            <a class="nav-link" href="/">
              <i class="mdi mdi-home  menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="/reservation">
              <i class="mdi mdi-hospital-building menu-icon"></i>
              <span class="menu-title">Reservation</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/residence">
              <i class="mdi mdi-hospital-building menu-icon"></i>
              <span class="menu-title">Residence </span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/block">
              <i class="mdi mdi-hospital-building menu-icon"></i>
              <span class="menu-title">Block</span>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="/chambre">
              <i class="mdi mdi-hotel menu-icon"></i>
              <span class="menu-title">Room</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-human-greeting  menu-icon"></i>
              <span class="menu-title">Profil</span>
            </a>
          </li>
          

          <li class="nav-item">
            <a class="nav-link" href="{{ url('logout') }}">
              <i class="mdi mdi-power-settings menu-icon"></i>
              <span class="menu-title">Quitter</span>
            </a>
          </li>
         
        </ul>
      </nav>