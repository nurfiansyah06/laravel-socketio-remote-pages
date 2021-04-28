<nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                @auth
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                @else
                <span class="hidden-xs">Tamu</span>
                @endauth
            </a>
            <ul class="dropdown-menu" style="width: auto">

              <!-- Menu Footer-->
              <li class="user-footer" >
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary" style="width: 100%">Keluar</button>
                   </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
