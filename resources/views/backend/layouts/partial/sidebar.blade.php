<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('images/user/'. Auth::user()->image) }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</div>
            <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">

                    <li>
                        <a href="#"><i class="material-icons">settings</i>Theme Settings</a>
                    </li>

                    <li role="seperator" class="divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons">input</i>Sign Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>

            @if(Request::is('admin*'))
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/department*') ? 'active' : '' }}">
                    <a href="{{ route('admin.department.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Department</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/degree*') ? 'active' : '' }}">
                    <a href="{{ route('admin.degree.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Degree</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/designation*') ? 'active' : '' }}">
                    <a href="{{ route('admin.designation.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Designation</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/specialist*') ? 'active' : '' }}">
                    <a href="{{ route('admin.specialist.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Specialist</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/doctor*') ? 'active' : '' }}">
                    <a href="{{ route('admin.doctor.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Doctor</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/staff*') ? 'active' : '' }}">
                    <a href="{{ route('admin.staff.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Staff</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                    <a href="{{ route('admin.category.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Blog Category</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/tag*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tag.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Blog Tag</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/post*') ? 'active' : '' }}">
                    <a href="{{ route('admin.post.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Blog Post</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/gallery*') ? 'active' : '' }}">
                    <a href="{{ route('admin.gallery.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Photo Gallery</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/slider*') ? 'active' : '' }}">
                    <a href="{{ route('admin.slider.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Slider</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/service*') ? 'active' : '' }}">
                    <a href="{{ route('admin.service.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Services</span>
                    </a>
                </li>
                {{-- <li class="{{ Request::is('admin/profile*') ? 'active' : '' }}">
                    <a href="{{ route('admin.profile') }}">
                        <i class="material-icons">apps</i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/sale*') ? 'active' : '' }}">
                    <a href="{{ route('admin.sale.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Manage Order</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/product*') ? 'active' : '' }}">
                    <a href="{{ route('admin.product.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Product</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/coupon*') ? 'active' : '' }}">
                    <a href="{{ route('admin.coupon.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Coupons</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/slider*') ? 'active' : '' }}">
                    <a href="{{ route('admin.slider.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Slider</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/subcategory*') ? 'active' : '' }}">
                    <a href="{{ route('admin.subcategory.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Subcategory</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/tag*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tag.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Tag</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/size*') ? 'active' : '' }}">
                    <a href="{{ route('admin.size.index') }}">
                        <i class="material-icons">apps</i>
                        <span>size</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/unit*') ? 'active' : '' }}">
                    <a href="{{ route('admin.unit.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Unit</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/testimonial*') ? 'active' : '' }}">
                    <a href="{{ route('admin.testimonial.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Testimonial</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/subscriber*') ? 'active' : '' }}">
                    <a href="{{ route('admin.subscriber') }}">
                        <i class="material-icons">apps</i>
                        <span>Subscribers</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/change-password') ? 'active' : '' }}">
                    <a href="{{ route('admin.change_password') }}">
                        <i class="material-icons">apps</i>
                        <span>Change Password</span>
                    </a>
                </li> --}}

                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="material-icons">input</i>
                        <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endif
            @if(Request::is('user*'))
            {{-- <li class="{{ Request::is('user/dashboard') ? 'active' : '' }}">
                <a href="{{ route('user.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('user/profile*') ? 'active' : '' }}">
                <a href="{{ route('user.profile') }}">
                    <i class="material-icons">apps</i>
                    <span>Profile</span>
                </a>
            </li>
            <li class="{{ Request::is('user/order*') ? 'active' : '' }}">
                <a href="{{ route('user.order') }}">
                    <i class="material-icons">apps</i>
                    <span>My Orders</span>
                </a>
            </li>
            <li class="{{ Request::is('user/change-password') ? 'active' : '' }}">
                <a href="{{ route('user.change_password') }}">
                    <i class="material-icons">apps</i>
                    <span>Change Password</span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    <i class="material-icons">input</i>
                    <span>Logout</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li> --}}
            @endif
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
    <!-- #Footer -->
</aside>
