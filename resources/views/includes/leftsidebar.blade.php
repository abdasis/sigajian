<div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="{{ url('/') }}/assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                            class="rounded-circle avatar-md">
                        <div class="dropdown">
                            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                                data-toggle="dropdown">Geneva Kennedy</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings mr-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock mr-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out mr-1"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </div>
                        <p class="text-muted">Admin Head</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="#Employee" data-toggle="collapse">
                                    <i class="mdi mdi-account"></i>
                                    <span> Employee </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="Employee">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('employee.create') }}">Create Employee</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('employee.index') }}">All Employee</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#Salary" data-toggle="collapse">
                                    <i class="fas fa-dollar-sign"></i>
                                    <span> Salary </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="Salary">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('salary.create') }}">Create Salary</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('salary.index') }}">All Salary</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="{{ route('bonus.index') }}">
                                    <i class="mdi mdi-percent"></i>
                                    <span> Bonus </span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
