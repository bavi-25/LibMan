
        <form class="form-inline mr-auto">
          

        </form>
        <ul class="navbar-nav navbar-right">

 <div class="dropdown-menu dropdown-list dropdown-menu-right">


              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi,
                {{-- {{ auth()->user()->name }} --}}
             </div></a>
            <div class="dropdown-menu dropdown-menu-right">

              <a href="#" class="dropdown-item has-icon text-danger"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                <i class="fas fa-sign-out-alt"></i> Logout </a>
              <form id="logout-form" action="
              {{-- {{route('logout')}} --}}
              " method="post">
                @csrf
            </form>
            </div>
          </li>
        </ul>
      </nav>
