<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{ asset('admin/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">{{ Auth::user()->name }}</h1>
            <p>{{ Auth::user()->role }}</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{route('home')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{route('post_page')}}"> <i class="icon-grid"></i>Add Post </a></li>
                <li><a href="{{route('show_post')}}"> <i class="fa fa-bar-chart"></i>Show Post </a></li>
                <li><a href="admin/forms.html"> <i class="icon-padnote"></i>Forms </a></li>
               
                <li><a href="admin/login.html"> <i class="icon-logout"></i>Login page </a></li>
        </ul>
      </nav>

      <div class="page-content">