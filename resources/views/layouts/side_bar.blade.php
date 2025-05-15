<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <!-- Dashboard -->
            <li>
                <a class="has-arrow ai-icon" href="dashboard" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false" id="dashboard">
                    <!-- <li><a href="{{ url('/') }}">Main Dashboard</a></li> -->
                    <li><a href="{{ url('analytics') }}">Status-Board</a></li>
                    <li><a href="{{ url('reviews') }}">Review</a></li>
                </ul>
            </li>

            <!-- Menu Items -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Menu Items</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('sales/invoices') }}">Add Menu</a></li>

                    <li><a href="{{ url('products') }}">Manage Menu</a></li>

                </ul>
            </li>

            <!-- Orders Management -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Orders Management</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('charts/flot') }}">Create Order</a></li>
                    <li><a href="{{ url('charts/morris') }}">Manage Order</a></li>
                    <li><a href="{{ url('charts/chartjs') }}">Cancel Order</a></li>
                </ul>
            </li>

            <!-- Reservations -->
            <li>
                <a class="has-arrow ai-icon" href="Reservations" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Reservations</span>
                </a>
                <ul aria-expanded="false" id="reservations">
                    <li><a href="{{ url('ui/accordion') }}">All Reserved</a></li>
                    <li><a href="{{ url('ui/badge') }}">Manage Reserveation</a></li>
                    <li><a href="{{ url('ui/button') }}">Cancel Reserveation</a></li>
                </ul>
            </li>

            <!-- Table -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Tables</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('table/bootstrap') }}">Create Table</a></li>
                    <li><a href="{{ url('table/datatable') }}">Manage Table</a></li>
                </ul>
            </li>

            <!-- Payments -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Payments</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('uc/select2') }}">Create Paymenment</a></li>
                    <li><a href="{{ url('uc/nestable') }}">Payments Method</a></li>
                    <li><a href="{{ url('uc/noui-slider') }}">Payments Management</a></li>
                </ul>
            </li>

            <!-- Inventory -->
            <li>
                <a href="{{ url('inventory') }}" class="has-arrow ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Inventory</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('form/element') }}">Add Raw-Material</a></li>
                    <li><a href="{{ url('form/wizard') }}">Manage Raw-Material</a></li>
                </ul>
            </li>

            <!-- Report Management -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Report Management</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('form/element') }}">Create Report</a></li>
                    <li><a href="{{ url('form/wizard') }}">Manage Report</a></li>
                </ul>
            </li>

            <!-- Users -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Users</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('auth/register') }}">Register</a></li>
                    <li><a href="{{ url('auth/login') }}">Admin Login</a></li>
                    <li><a href="{{ url('auth/lock') }}">User Login</a></li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('errors/400') }}">Error 400</a></li>
                            <li><a href="{{ url('errors/403') }}">Error 403</a></li>
                            <li><a href="{{ url('errors/404') }}">Error 404</a></li>
                            <li><a href="{{ url('errors/500') }}">Error 500</a></li>
                            <li><a href="{{ url('errors/503') }}">Error 503</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- Settings -->
            <li>
                <a href="{{ url('settings') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Settings</span>
                </a>
            </li>
        </ul>

        <!-- Sidebar Add-Menu -->
        <div class="add-menu-sidebar">
            <img src="{{asset('assets/images/icon1.png') }}" alt="" />
            <p>Organize your menus through the button below</p>
            <a href="javascript:void(0);" class="btn btn-primary btn-block light">+ Add Menus</a>
        </div>

        <div class="copyright">
            <p><strong>Eatio - Restaurant Admin Dashboard</strong> © 2020 All Rights Reserved</p>
        </div>
    </div>
</div>