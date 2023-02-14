
   <!-- Main Sidebar Container -->
   <aside class="main-sidebar elevation-4 sidebar-light-teal">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ asset('public/dist/img/logo-new.svg') }}" alt="Book Store" class="" style="opacity: 1.8">
      <span class="brand-text font-weight-light"><b>Book Store</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


            <li class="nav-item">
                <a href="{{ route("books.index") }}" class="nav-link {{ (Request::segment(2) == 'books') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Books
                  </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
