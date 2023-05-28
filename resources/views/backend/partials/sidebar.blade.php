<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="user-box">

                <div class="float-left">
                    <img src="{{ asset('backend') }}/assets/images/users/avatar-1.jpg" alt=""
                        class="avatar-md rounded-circle">
                </div>
                <div class="user-info">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            John Doe <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu" x-placement="bottom-start"
                            style="position: absolute; transform: translate3d(0px, 29px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <li><a href="javascript:void(0)" class="dropdown-item"><i
                                        class="mdi mdi-face-profile mr-2"></i> Profile<div class="ripple-wrapper"></div>
                                </a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-settings mr-2"></i>
                                    Settings</a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-lock mr-2"></i>
                                    Lock screen</a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i
                                        class="mdi mdi-power-settings mr-2"></i> Logout</a></li>
                        </ul>
                    </div>
                    <p class="font-13 text-muted m-0">Administrator</p>
                </div>
            </div>

            <ul class="metismenu" id="side-menu">

                <li>
                    <a href="{{ url('/') }}" class="waves-effect">
                        <i class="mdi mdi-home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('pos_show') }}" class="waves-effect">
                        <i class="mdi mdi-home"></i>
                        <span> POS </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-email"></i>
                        <span> Employees </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url('index') }}">Add Employee</a></li>
                        <li><a href="{{ url('all_employee') }}">All Employee</a></li>
                        {{-- <li><a href="mail-read.html">View Employees</a></li> --}}
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-email"></i>
                        <span> Customers </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url('add_customer') }}">Add Customer</a></li>
                        <li><a href="{{ url('all_customer') }}">All Customer</a></li>
                        {{-- <li><a href="mail-read.html">View Employees</a></li> --}}
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-email"></i>
                        <span> Suppliers </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url('add_supplier') }}">Add Supplier</a></li>
                        <li><a href="{{ url('all_supplier') }}">All Supplier</a></li>
                        {{-- <li><a href="mail-read.html">View Employees</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-email"></i>
                        <span> Salary </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url('advanced_salary') }}">Advanced Salary</a></li>
                        <li><a href="{{ url('all_advanced_salary') }}">All Advanced Salary</a></li>
                        <li><a href="{{ url('pay_salary') }}">Pay Salary</a></li>
                        <li><a href="{{ url('last_month_salary') }}">Last Month Salary</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-email"></i>
                        <span> Category </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url('category') }}">Add Category</a></li>
                        <li><a href="{{ url('all_category') }}">All Category</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-email"></i>
                        <span> Products </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url('add_product') }}">Add Products</a></li>
                        <li><a href="{{ url('all_product') }}">All Products</a></li>
                    </ul>
                </li>



            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
