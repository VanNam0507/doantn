<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.index')}}" class="brand-link">
        <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                    <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('admin.info')}}" class="d-block">{{get_data_user('admins','name')}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @can('category')
                <li class="nav-item {{Route::currentRouteName()=='admin.cate.index'?'active-sidebar':''}}">
                    <a href="{{route('admin.cate.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>

                        <p>
                            Quản lý danh mục
                        </p>

                    </a>
                </li>
                @endcan
                @can('product')
                <li class="nav-item {{Route::currentRouteName()=='admin.product.index'?'active-sidebar':''}}">
                    <a href="{{route('admin.product.index')}}" class="nav-link ">
                        <i class="nav-icon fas fa-mobile-alt"></i>

                        <p>
                            Quản lý sản phẩm
                        </p>

                    </a>
                </li>
                @endcan
                @can('article')
                <li class="nav-item {{Route::currentRouteName()=='admin.article.index'?'active-sidebar':''}}">
                    <a href="{{route('admin.article.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Quản lý bài viết
                        </p>
                    </a>
                </li>
                @endcan
                @can('transaction')
                <li class="nav-item {{Route::currentRouteName()=='admin.transaction.index'?'active-sidebar':''}}">
                    <a href="{{route('admin.transaction.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                        <p>
                            Quản lý đơn hàng
                        </p>
                    </a>
                </li>
                @endcan
                @can('user')
                <li class="nav-item {{Route::currentRouteName()=='admin.user.index'?'active-sidebar':''}}">
                    <a href="{{route('admin.user.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Quản lý thành viên

                        </p>
                    </a>
                </li>
                @endcan
                @can('contact')
                <li class="nav-item {{Route::currentRouteName()=='admin.contact.index'?'active-sidebar':''}}">
                    <a href="{{route('admin.contact.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-phone-square-alt"></i>
                        <p>
                            Quản lý liên hệ
                        </p>
                    </a>
                </li>
                @endcan
                @can('rating')
                <li class="nav-item {{Route::currentRouteName()=='admin.rating.index'?'active-sidebar':''}}">
                    <a href="{{route('admin.rating.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            Đánh giá sản phẩm
                        </p>
                    </a>
                </li>
                @endcan
                @can('employee')
                <li class="nav-item {{Route::currentRouteName()=='admin.employee.index'?'active-sidebar':''}}">
                    <a href="{{route('admin.employee.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>
                            Quản lý nhân sự
                        </p>
                    </a>
                </li>
                @endcan
                @can('permission')
                <li class="nav-item {{Route::currentRouteName()=='admin.role.index'?'active-sidebar':''}}">
                    <a href="{{route('admin.role.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-tag"></i>
                        <p>
                            Quản lý vai trò
                        </p>
                    </a>
                </li>
                @endcan
{{--                <li class="nav-item {{Route::currentRouteName()=='admin.page_static.index'?'active-sidebar':''}}">--}}
{{--                    <a href="{{route('admin.page_static.index')}}" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-user-tag"></i>--}}
{{--                        <p>--}}
{{--                            Quản lý Page tĩnh--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
