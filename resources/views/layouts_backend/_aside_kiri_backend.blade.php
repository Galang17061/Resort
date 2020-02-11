<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile dropdown m-t-5">
                                <div class="user-pic">
                                    <img src="{{ asset('assets_backend/images/users/1.jpg') }}" alt="users" class="rounded-circle img-fluid" />
                                </div>
                                <div class="user-content hide-menu m-t-5">
                                    <h5 class="m-b-5 user-name font-medium">{{ Auth::user()->name }}</h5>
                                    <a href="javascript:void(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="ti-settings"></i>
                                    </a>
                                    <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" title="Logout" class="btn btn-circle btn-sm">
                                        <i class="ti-power-off"></i>
                                    </a>
                                    <div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" ><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/') }}" aria-expanded="false">
                                <i class="mdi mdi-directions"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <!-- User Profile-->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Car-Wheel"></i>
                                <span class="hide-menu"> Master</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('master_role') }}" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> Master Role</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('master_user') }}" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> Master User</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('master_features') }}" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> Master Features</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Car-Wheel"></i>
                                <span class="hide-menu"> Catalog</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('catalog_room') }}" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> Manage Room</span>
                                    </a>
                                </li>
                            </ul>
                              <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Car-Wheel"></i>
                                <span class="hide-menu"> Orders</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('order') }}" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> Orders </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index3.html" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> Invoices </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index3.html" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> Statuses </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index3.html" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> Order Messages </span>
                                    </a>
                                </li>
                            </ul>
                              <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Car-Wheel"></i>
                                <span class="hide-menu"> Customers </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="index3.html" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> Customers </span>
                                    </a>
                                </li>
                            </ul>
                            <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('catalog_ticket') }}" aria-expanded="false">
                                <i class="mdi mdi-directions"></i>
                                <span class="hide-menu">Ticket</span>
                            </a>
                        </li>
                            <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Car-Wheel"></i>
                                <span class="hide-menu"> Preferences </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="index3.html" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> General </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index3.html" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> Orders </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index3.html" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> Room Types </span>
                                    </a>
                                </li>
                               
                                <li class="sidebar-item">
                                    <a href="index3.html" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> CMS </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index3.html" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> Images </span>
                                    </a>
                                </li>
                        </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>