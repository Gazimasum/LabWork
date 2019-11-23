    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="{{route('login')}}">Login</a>
          <a class="dropdown-item" href="{{route('register')}}">Register</a>
          <a class="dropdown-item" href="#">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('table')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('user_table')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>User Tables</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('add-student')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Add Student</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('sendemailview')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Send Email</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="https://sohozjibon.com/api/products/details">
          <i class="fas fa-fw fa-table"></i>
          <span>Api</span></a>
      </li>
    </ul>
