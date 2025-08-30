<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="/" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-dashboards">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="/users" class="waves-effect">
                        <i class="bx bx-user"></i><span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-user-list">Staffs</span>
                    </a>
                </li>

                <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-package"></i><span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-inventory">Inventory</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="inventory-items" key="t-items">Items</a></li>
                        <li><a href="inventory-analytics" key="t-invanalytics">Analytics</a></li>
                        <li><a href="inventory-transactions" key="t-invtransactions">Inventory Transactions</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-car"></i>
                        <span key="t-dsp">DSP</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="dsp-list" key="t-dsp-list">DSP List</a></li>
                        <li><a href="dsp-transactions" key="t-dsp-transactions">DSP Transactions</a></li>
                    </ul>
                </li>

                <li>
                    <a href="/transactions" class="waves-effect">
                        <i class="bx bx-receipt"></i><span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-transactions">Transactions</span>
                    </a>
                </li>

                <li>
                    <a href="/orders" class="waves-effect">
                        <i class="bx bx-calculator"></i><span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-orders">Orders</span>
                    </a>
                </li>

                <li>
                    <a href="/customers" class="waves-effect">
                        <i class="bx bx-store"></i><span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-customers">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-bar-chart-alt-2"></i>
                        <span key="t-reports">Reports</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="sales-report" key="t-report-sales">Sales Report</a></li>
                        <li><a href="expense-report" key="t-report-expense">Expense Report</a></li>
                        <li><a href="inventory-report" key="t-report-inventory">Inventory Report</a></li>
                        <li><a href="receivables" key="t-report-receivables">Receivables</a></li>
                        <li><a href="z-reading" key="t-report-zreading">Z-Reading</a></li>
                        <li><a href="voids" key="t-report-voids">Voids</a></li>
                    </ul>
                </li>
                
                <li class="menu-title" key="t-admin">Admin</li>

                <li>
                    <a href="/company-settings" class="waves-effect">
                        <i class="bx bx-cog"></i><span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-store-settings">Store Settings</span>
                    </a>
                </li>

                <li>
                    <a href="/profile-settings" class="waves-effect">
                        <i class="bx bx-user-circle"></i><span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-profile-settings">Profile Settings</span>
                    </a>
                </li>

                @can('Super Admin')
                <li class="menu-title" key="t-developer">Developer</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-key"></i>
                        <span key="t-system-admin">System Administration</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="users" key="t-users">Users</a></li>
                        <li><a href="roles" key="t-roles">Roles</a></li>
                        <li><a href="permissions" key="t-permissions">Permissions</a></li>
                        <li><a href="settings" key="t-settings">Settings</a></li>
                    </ul>
                </li>
                @endcan

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->