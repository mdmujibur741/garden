   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4 bg">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/images.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{Session::get('adminName')}} </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link {{ (request()->is('dashboard')) ? 'active': '' }}">
              <i class="nav-icon fas fa-tachometer-alt text-success "></i>
              <p>
                Dashboard
               
              </p>
            </a>
          
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link {{ (request()->is('admin/garden') || request()->is('admin/garden/create')) ? 'active': '' }}">
              <i class="nav-icon fab fa-pagelines text-success"></i>
              <p>
                  বাগান
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('garden.index')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  বাগান তালিকা</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('garden.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> বাগান যোগ </p>
                </a>
              </li>
          
            </ul>
          </li>

        


          <li class="nav-item">
            <a href="#" class="nav-link {{ (request()->is('admin/notice') || request()->is('admin/notice/create')) ? 'active': '' }}">
              <i class="nav-icon far fa-sticky-note text-success"></i>
              <p>
                  নোটিস
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('notice.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> তালিকা</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('notice.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>যোগ করুন</p>
                </a>
              </li>
          
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link {{ (request()->is('admin/category') || request()->is('admin/category/create')) ? 'active': '' }}">
              <i class="fas fa-wave-square text-success nav-icon"></i>
              <p>
                 বাগান শ্রেনী
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> শ্রেনী তালিকা</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('category.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>শ্রেনী যোগ করুন</p>
                </a>
              </li>
          
            </ul>
          </li>
        

          <li class="nav-item">
            <a href="#" class="nav-link {{ (request()->is('admin/upozela') || request()->is('admin/upozela/create')) ? 'active': '' }}">
              <i class="fas fa-tags text-success nav-icon"></i>
              <p>
                 উপজেলা
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('upozela.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> উপজেলা তালিকা</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('upozela.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>উপজেলা যোগ করুন</p>
                </a>
              </li>
          
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link {{ (request()->is('admin/union') || request()->is('admin/union/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy text-success"></i>
              <p>
                  ইউনিয়ন
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('union.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> ইউনিয়ন তালিকা</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('union.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ইউনিয়ন যোগ করুন</p>
                </a>
              </li>
          
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link {{ (request()->is('admin/lease') || request()->is('admin/lease/create')) ? 'active': '' }}">
              <i class="fas fa-paperclip nav-icon text-success"></i>
              <p>
                  লিজ ভূমি
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('lease.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  ভূমি শ্রেনী তালিকা</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('lease.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> ভূমি শ্রেনী যোগ </p>
                </a>
              </li>
          
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link {{ (request()->is('admin/user') || request()->is('admin/user/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-users text-success"></i>
              <p>
                 ব‌্যাবহারকারি
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> তালিকা</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('user.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>যোগ করুন</p>
                </a>
              </li>
          
            </ul>
          </li>




          <li class="nav-item">
            <a href="#" class="nav-link {{ (request()->is('admin/contact') || request()->is('admin/sms')) ? 'active': '' }}">
              <i class="fas fa-envelope-open-text text-success"></i>
              <p>
                মেসেজ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('contact.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  মেসেজ লিস্ট</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('sms.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  মেসেজ পাঠান</p>
                </a>
              </li>
          
            </ul>
          </li>

    
          <li class="nav-item">
            <a href="{{route('setting.create')}}" class="nav-link {{ ( request()->is('admin/setting/create')) ? 'active': '' }}">
              <i class="fas fa-tools nav-icon text-success"></i>
              <p>
                
                সেটিং
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.logout')}}" class="nav-link">
              <i class="fas fa-sign-out-alt text-success nav-icon"></i>
              <p>
                
                লগআউট
               
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>