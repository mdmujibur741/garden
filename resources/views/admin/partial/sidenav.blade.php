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
          <a href="#" class="d-block">Alexander Pierce</a>
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-pagelines text-light"></i>
              <p>
                  বাগান
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('garden.index')}}" class="nav-link">
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
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-sticky-note text-light"></i>
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
            <a href="#" class="nav-link">
              <i class="fas fa-wave-square text-light nav-icon"></i>
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
            <a href="#" class="nav-link">
              <i class="fas fa-tags text-light nav-icon"></i>
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
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
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
            <a href="#" class="nav-link">
              <i class="fas fa-paperclip nav-icon text-light"></i>
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
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
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
            <a href="{{route('sms.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th text-success"></i>
              <p>
                 মেসেজ পাঠান
               
              </p>
            </a>
          </li>



          <li class="nav-item">
            <a href="{{route('contact.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                 মেসেজ লিস্ট
               
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{route('setting.create')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                
                সেটিং
               
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>