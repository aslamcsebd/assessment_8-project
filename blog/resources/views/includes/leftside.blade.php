<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/home') }}" class="brand-link bbg-light">
        <i lass="nav-icon fas fa-school"></i>
        <span class="brand-text font-weight-light text-center pl-2">Dashboard</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
                @if(auth()->user() && $type = auth()->user()->type)      
                    
                    @if($type == 'admin')
                        <li class="nav-item">
                            <a href="{{ route('admin.vendorList') }}" class="nav-link {{ request()->routeIs('admin.vendorList*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>All vendor</p>                                
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profile') }}" class="nav-link {{ request()->routeIs('profile*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>My Profile</p>                              
                            </a>
                        </li>
                    @endif

                    @if($type == 'vendor')
                        <li class="nav-item">
                            <a href="{{ route('vendor.categoryList') }}" class="nav-link {{ request()->routeIs('vendor.categoryList*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-list"></i>
                                <p>All category</p>                             
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('vendor.productList') }}" class="nav-link {{ request()->routeIs('vendor.productList*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-list"></i>
                                <p>All product</p>                             
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profile') }}" class="nav-link {{ request()->routeIs('profile*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>My Profile</p>                              
                            </a>
                        </li>
                    @endif
                    @if($type == 'customer')
                        <li class="nav-item">
                            <a href="{{ route('customer.categoryList') }}" class="nav-link {{ request()->routeIs('customer.categoryList*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-list"></i>
                                <p>Category & product</p>                             
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profile') }}" class="nav-link {{ request()->routeIs('profile*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>My Profile</p>                              
                            </a>
                        </li>
                    @endif
                @endif
            </ul>
        </nav>
    </div>
</aside>