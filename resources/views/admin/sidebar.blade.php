<!-- Stored in resources/views/child.blade.php -->

<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="{{ Auth('admin')->User()->dashboard_style }}">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth('admin')->User()->firstName }} {{ Auth('admin')->User()->lastName }}
                            <span class="user-level"> Admin</span>
                            {{-- <span class="caret"></span> --}}
                        </span>
                    </a>
                </div>
            </div>

            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ url('/admin/dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if (Auth('admin')->User()->type == 'Super Admin' || Auth('admin')->User()->type == 'Admin')
                    <li
                        class="nav-item {{ request()->routeIs('plans') ? 'active' : '' }} {{ request()->routeIs('newplan') ? 'active' : '' }} {{ request()->routeIs('editplan') ? 'active' : '' }} {{ request()->routeIs('activeinvestments') ? 'active' : '' }}">
                        <a data-toggle="collapse" href="#pln">
                            <i class="fas fa-cubes "></i>
                            <p>Investment</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="pln">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ url('/admin/dashboard/plans') }}">
                                        <span class="sub-item">Investment Plans</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/dashboard/active-investments') }}">
                                        <span class="sub-item">Active Investments</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li
                        class="nav-item {{ request()->routeIs('manageusers') ? 'active' : '' }} {{ request()->routeIs('loginactivity') ? 'active' : '' }} {{ request()->routeIs('user.plans') ? 'active' : '' }} {{ request()->routeIs('viewuser') ? 'active' : '' }}">
                        <a href="{{ url('/admin/dashboard/manageusers') }}">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                            <p>Manage Users</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('emailservices') ? 'active' : '' }}">
                        <a href="{{ route('emailservices') }}">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <p>Email Services</p>
                        </a>
                    </li>

                    <li
                        class="nav-item {{ request()->routeIs('kyc') ? 'active' : '' }} {{ request()->routeIs('viewkyc') ? 'active' : '' }}">
                        <a href="{{ route('kyc') }}">
                            <i class="fa fa-user-check" aria-hidden="true"></i>
                            <p>KYC Application(s)</p>
                        </a>
                    </li>

                    <li
                        class="nav-item {{ request()->routeIs('mdeposits') ? 'active' : '' }} {{ request()->routeIs('viewdepositimage') ? 'active' : '' }} {{ request()->routeIs('mdeposits') ? 'active' : '' }}">
                        <a href="{{ url('/admin/dashboard/mdeposits') }}">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            <p>Manage Deposits</p>
                        </a>
                    </li>

                    <li
                        class="nav-item {{ request()->routeIs('mwithdrawals') ? 'active' : '' }}   {{ request()->routeIs('processwithdraw') ? 'active' : '' }}">
                        <a href="{{ url('/admin/dashboard/mwithdrawals') }}">
                            <i class="fa fa-arrow-alt-circle-up" aria-hidden="true"></i>
                            <p>Manage Withdrawal</p>
                        </a>
                    </li>

                @endif
              
              
                @if (Auth('admin')->User()->type == 'Super Admin')
                    <li
                        class="nav-item {{ request()->routeIs('addmanager') ? 'active' : '' }} {{ request()->routeIs('madmin') ? 'active' : '' }}">
                        <a data-toggle="collapse" href="#adm">
                            <i class="fa fa-user"></i>
                            <p>Administrator(s)</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="adm">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ url('/admin/dashboard/addmanager') }}">
                                        <span class="sub-item">Add Manager</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/dashboard/madmin') }}">
                                        <span class="sub-item">Manage Admin(s)</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li
                        class="nav-item {{ request()->routeIs('appsettingshow') ? 'active' : '' }} {{ request()->routeIs('termspolicy') ? 'active' : '' }} {{ request()->routeIs('refsetshow') ? 'active' : '' }} {{ request()->routeIs('paymentview') ? 'active' : '' }} {{ request()->routeIs('subview') ? 'active' : '' }} {{ request()->routeIs('frontpage') ? 'active' : '' }} {{ request()->routeIs('allipaddress') ? 'active' : '' }} {{ request()->routeIs('ipaddress') ? 'active' : '' }} {{ request()->routeIs('editpaymethod') ? 'active' : '' }} {{ request()->routeIs('managecryptoasset') ? 'active' : '' }}">
                        <a data-toggle="collapse" href="#settings">
                            <i class="fa fa-cog"></i>
                            <p>Settings</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="settings">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('appsettingshow') }}">
                                        <span class="sub-item">App Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('refsetshow') }}">
                                        <span class="sub-item">Referral/Bonus Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('paymentview') }}">
                                        <span class="sub-item">Payment Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('managecryptoasset') }}">
                                        <span class="sub-item">Swap Settings</span>
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="{{ url('/admin/dashboard/frontpage') }}">
                                        <span class="sub-item">Frontend Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('termspolicy') }}">
                                        <span class="sub-item">Terms and Privacy</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/dashboard/ipaddress') }}">
                                        <span class="sub-item">IP Address</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif

              
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
