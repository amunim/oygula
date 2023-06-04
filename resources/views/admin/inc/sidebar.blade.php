<aside class="main-sidebar sidebar-dark-primary elevation-4 text-light" dir="ltr">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        @auth
        <div class="info text-center">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
        @endauth
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2 text-light">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
       

       
        <li class="nav-item">
          <a href="{{route("addmost")}}" class="nav-link nav-link-admin">
            <i class="nav-icon fa fa-plus"></i>
            <p>
            اضافة منتج
              
            </p>
          </a>

        </li>
       

   
  

 

        <li class="nav-item">
          <a href="{{route("addpost")}}" class="nav-link nav-link-admin">
            <i class="nav-icon fa fa-plus"></i>
            <p>
            منشور
              
            </p>
          </a>

        </li>
        <li class="nav-item">
          <a href="{{route("addwork")}}" class="nav-link nav-link-admin">
            <i class="nav-icon fa fa-plus"></i>
            <p>
            اعمالنا
              
            </p>
          </a>

        </li>

        <li class="nav-item">
          <a href="{{route("contacts")}}" class="nav-link nav-link-admin">
            <i class="nav-icon fa fa-comment"></i>
            <p>
            التواصل
              
            </p>
          </a>

        </li>
        
        <li class="nav-item">
          <a href="{{route("textp")}}" class="nav-link nav-link-admin">
            <i class="nav-icon fa fa-file"></i>
            <p>
            سياسة الخصوصية
              
            </p>
          </a>

        </li>
        <li class="nav-item">
          <a href="{{route("textc")}}" class="nav-link nav-link-admin">
            <i class="nav-icon fa fa-file"></i>
            <p>
            شروط
              
            </p>
          </a>

        </li>
          @auth
        
          <li class="nav-item">
            <a class="nav-link nav-link-admin " href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
               تسجيل الخروج
              </p>
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
     </div>

          </li>
          @endauth
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link nav-link-admin">
              <i class="nav-icon fa fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link nav-link-admin">
              <i class="nav-icon fa fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link nav-link-admin">
              <i class="nav-icon fa fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
