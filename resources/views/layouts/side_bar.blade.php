<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <!-- Dashboard -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('/') }}">Main Dashboard</a></li>
                    <li><a href="{{ url('analytics') }}">Analytics</a></li>
                    <li><a href="{{ url('reviews') }}">Review</a></li>
                    <li><a href="{{ url('orders') }}">Order</a></li>
                    <li><a href="{{ url('order-list') }}">Order List</a></li>
                    <li><a href="{{ url('customers/general') }}">General Customers</a></li>
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

                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('email/compose') }}">Compose</a></li>
                            <li><a href="{{ url('email/inbox') }}">Inbox</a></li>
                            <li><a href="{{ url('email/read') }}">Read</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ url('calendar') }}">Calendar</a></li>

                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('products') }}">Product Grid</a></li>
                            <li><a href="{{ url('shop/products/list') }}">Product List</a></li>
                            <li><a href="{{ url('shop/products/detail') }}">Product Details</a></li>
                            <li><a href="{{ url('shop/orders') }}">Order</a></li>
                            <li><a href="{{ url('shop/checkout') }}">Checkout</a></li>
                            <li><a href="{{ url('shop/invoice') }}">Invoice</a></li>
                            <li><a href="{{ url('shop/customers') }}">Customers</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- Orders Management -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Orders Management</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('charts/flot') }}">Flot</a></li>
                    <li><a href="{{ url('charts/morris') }}">Morris</a></li>
                    <li><a href="{{ url('charts/chartjs') }}">ChartJS</a></li>
                    <li><a href="{{ url('charts/chartist') }}">Chartist</a></li>
                    <li><a href="{{ url('charts/sparkline') }}">Sparkline</a></li>
                    <li><a href="{{ url('charts/peity') }}">Peity</a></li>
                </ul>
            </li>

            <!-- Reservations -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Reservations</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('ui/accordion') }}">Accordion</a></li>
                    <li><a href="{{ url('/') }}">Alert</a></li>
                    <li><a href="{{ url('ui/badge') }}">Badge</a></li>
                    <li><a href="{{ url('ui/button') }}">Button</a></li>
                    <li><a href="{{ url('ui/modal') }}">Modal</a></li>
                    <li><a href="{{ url('ui/button-group') }}">Button Group</a></li>
                    <li><a href="{{ url('ui/list-group') }}">List Group</a></li>
                    <li><a href="{{ url('ui/media-object') }}">Media Object</a></li>
                    <li><a href="{{ url('ui/card') }}">Cards</a></li>
                    <li><a href="{{ url('ui/carousel') }}">Carousel</a></li>
                    <li><a href="{{ url('ui/dropdown') }}">Dropdown</a></li>
                    <li><a href="{{ url('ui/popover') }}">Popover</a></li>
                    <li><a href="{{ url('ui/progressbar') }}">Progressbar</a></li>
                    <li><a href="{{ url('ui/tab') }}">Tab</a></li>
                    <li><a href="{{ url('ui/typography') }}">Typography</a></li>
                    <li><a href="{{ url('ui/pagination') }}">Pagination</a></li>
                    <li><a href="{{ url('ui/grid') }}">Grid</a></li>
                </ul>
            </li>

            <!-- Table -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Tables</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('table/bootstrap') }}">Bootstrap</a></li>
                    <li><a href="{{ url('table/datatable') }}">Datatable</a></li>
                </ul>
            </li>

            <!-- Payments -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Payments</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('uc/select2') }}">Select2</a></li>
                    <li><a href="{{ url('uc/nestable') }}">Nestable</a></li>
                    <li><a href="{{ url('uc/noui-slider') }}">Noui Slider</a></li>
                    <li><a href="{{ url('uc/sweetalert') }}">Sweet Alert</a></li>
                    <li><a href="{{ url('uc/toastr') }}">Toastr</a></li>
                    <li><a href="{{ url('map/jqvmap') }}">Jqv Map</a></li>
                </ul>
            </li>

            <!-- Inventory -->
            <li>
                <a href="{{ url('inventory') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Inventory</span>
                </a>
            </li>

            <!-- Report Management -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Report Management</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('form/element') }}">Form Elements</a></li>
                    <li><a href="{{ url('form/wizard') }}">Wizard</a></li>
                    <li><a href="{{ url('form/summernote') }}">Summernote</a></li>
                    <li><a href="{{ url('form/pickers') }}">Pickers</a></li>
                    <li><a href="{{ url('form/validation') }}">Jquery Validate</a></li>
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
                    <li><a href="{{ url('auth/login') }}">Login</a></li>
                    <li><a href="{{ url('auth/lock') }}">Lock Screen</a></li>
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
            <img src="{{ asset('images/icon1.png') }}" alt="" />
            <p>Organize your menus through the button below</p>
            <a href="javascript:void(0);" class="btn btn-primary btn-block light">+ Add Menus</a>
        </div>

        <div class="copyright">
            <p><strong>Eatio - Restaurant Admin Dashboard</strong> © 2020 All Rights Reserved</p>
        </div>
    </div>
</div>