<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{ url('assets/images/faces/face8.jpg') }}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">Rafail Mavrogordatos</p>
            <div class="dropdown" data-display="static">
              <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <small class="designation text-muted">Administrator</small>
                <span class="status-indicator online"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="UsersettingsDropdown">
                <a class="dropdown-item p-0">
                  <div class="d-flex border-bottom">
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                      <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                    </div>
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                      <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                    </div>
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                      <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item mt-2"> Manage Accounts </a>
                <a class="dropdown-item"> Change Password </a>
                <a class="dropdown-item"> Check Inbox </a>
                <a class="dropdown-item"> Sign Out </a>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-success btn-block">New Client<i class="mdi mdi-plus"></i>
        </button>
      </div>
    </li>
    <li class="nav-item {{ active_class(['/']) }}">
      <a class="nav-link" href="{{ url('/') }}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['/clients/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#clients" aria-expanded="{{ is_active_route(['clients/*']) }}" aria-controls="clients">
        <i class="menu-icon mdi mdi-account"></i>
        <span class="menu-title">Clients</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['clients/*']) }}" id="clients">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['clients/addclient']) }}">
            <a class="nav-link" href="{{ url('/clients/addclient') }}">Add New Client</a>
          </li>
          <li class="nav-item {{ active_class(['clients/viewclient']) }}">
            <a class="nav-link" href="{{ url('/clients/viewclient') }}">View/Search Clients</a>
          </li>
          <li class="nav-item {{ active_class(['clients/products']) }}">
            <a class="nav-link" href="{{ url('/clients/products') }}">Product/Services</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['/orders/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#orders" aria-expanded="{{ is_active_route(['order/*']) }}" aria-controls="orders">
        <i class="menu-icon mdi mdi-clipboard-outline"></i>
        <span class="menu-title">Orders</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['orders/*']) }}" id="orders">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['orders/addorder']) }}">
            <a class="nav-link" href="{{ url('/orders/addorder') }}">Add New Order</a>
          </li>
          <li class="nav-item {{ active_class(['orders/vieworders']) }}">
            <a class="nav-link" href="{{ url('/orders/vieworder') }}">View Orders</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['/billing/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#billing" aria-expanded="{{ is_active_route(['billing/*']) }}" aria-controls="billing">
        <i class="menu-icon mdi mdi-cash"></i>
        <span class="menu-title">Billing</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['billing/*']) }}" id="billing">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['billing/transactionlist']) }}">
            <a class="nav-link" href="{{ url('/billing/transactionlist') }}">Transaction List</a>
          </li>
          <li class="nav-item {{ active_class(['billing/invoices']) }}">
            <a class="nav-link" href="{{ url('/billing/invoices') }}">Invoices</a>
          </li>
          <li class="nav-item {{ active_class(['billing/billitems']) }}">
            <a class="nav-link" href="{{ url('/billing/billitems') }}">Billable Items</a>
          </li>
          <li class="nav-item {{ active_class(['billing/quotes']) }}">
            <a class="nav-link" href="{{ url('/billing/quotes') }}">Quotes</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['/support/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#support" aria-expanded="{{ is_active_route(['support/*']) }}" aria-controls="support">
        <i class="menu-icon mdi mdi-comment"></i>
        <span class="menu-title">Support</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['support/*']) }}" id="support">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['support/overview']) }}">
            <a class="nav-link" href="{{ url('/support/transactionlist') }}">Overview</a>
          </li>
          <li class="nav-item {{ active_class(['support/openticket']) }}">
            <a class="nav-link" href="{{ url('/support/openticket') }}">Open Ticket</a>
          </li>
          <li class="nav-item {{ active_class(['support/viewtickets']) }}">
            <a class="nav-link" href="{{ url('/support/viewtickets') }}">View Tickets</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['/reports']) }}">
      <a class="nav-link" href="{{ url('/reports') }}">
        <i class="menu-icon mdi mdi-chart-gantt"></i>
        <span class="menu-title">Reports</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['/utilities/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#utilities" aria-expanded="{{ is_active_route(['utilities/*']) }}" aria-controls="utilities">
        <i class="menu-icon mdi mdi-arrow-expand-all"></i>
        <span class="menu-title">Utilities</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['utilities/*']) }}" id="utilities">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['utilities/calendar']) }}">
            <a class="nav-link" href="{{ url('/utilities/calendar') }}">Calendar</a>
          </li>
          <li class="nav-item {{ active_class(['utilities/todolist']) }}">
            <a class="nav-link" href="{{ url('/utilities/todolist') }}">To-Do List</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['/settings/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="{{ is_active_route(['settings/*']) }}" aria-controls="settings">
        <i class="menu-icon mdi mdi-settings-box"></i>
        <span class="menu-title">Settings</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['settings/*']) }}" id="settings">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['settings/staff']) }}">
            <a class="nav-link" href="{{ url('/settings/staff') }}">Staff Managment</a>
          </li>
          <li class="nav-item {{ active_class(['settings/payments']) }}">
            <a class="nav-link" href="{{ url('/settings/payments') }}">Payments</a>
          </li>
          <li class="nav-item {{ active_class(['settings/products']) }}">
            <a class="nav-link" href="{{ url('/settings/products') }}">Products/Services</a>
          </li>
          <li class="nav-item {{ active_class(['settings/support']) }}">
            <a class="nav-link" href="{{ url('/settings/support') }}">Support</a>
          </li>
          <li class="nav-item {{ active_class(['settings/groups']) }}">
            <a class="nav-link" href="{{ url('/settings/groups') }}">Client Groups</a>
          </li>
        </ul>
      </div>
    </li>
    {{--
    <li class="nav-item {{ active_class(['basic-ui/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">
        <i class="menu-icon mdi mdi-dna"></i>
        <span class="menu-title">Basic UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['basic-ui/*']) }}" id="basic-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['basic-ui/buttons']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/buttons') }}">Buttons</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/dropdowns') }}">Dropdowns</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/typography']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/typography') }}">Typography</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item {{ active_class(['charts/chartjs']) }}">
      <a class="nav-link" href="{{ url('/charts/chartjs') }}">
        <i class="menu-icon mdi mdi-chart-line"></i>
        <span class="menu-title">Charts</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['tables/basic-table']) }}">
      <a class="nav-link" href="{{ url('/tables/basic-table') }}">
        <i class="menu-icon mdi mdi-table-large"></i>
        <span class="menu-title">Tables</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['icons/material']) }}">
      <a class="nav-link" href="{{ url('/icons/material') }}">
        <i class="menu-icon mdi mdi-emoticon"></i>
        <span class="menu-title">Icons</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['user-pages/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="{{ is_active_route(['user-pages/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['user-pages/*']) }}" id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['user-pages/login']) }}">
            <a class="nav-link" href="{{ url('/user-pages/login') }}">Login</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/register']) }}">
            <a class="nav-link" href="{{ url('/user-pages/register') }}">Register</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/lock-screen']) }}">
            <a class="nav-link" href="{{ url('/user-pages/lock-screen') }}">Lock Screen</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://www.bootstrapdash.com/demo/star-laravel-free/documentation/documentation.html" target="_blank">
        <i class="menu-icon mdi mdi-file-outline"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li>
    --}}
  </ul>
</nav>