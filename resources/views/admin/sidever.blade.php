
<style>
    .menu-list li a.active {
    background-color: #444; /* Change to your desired active background color */
    color: #fff; /* Change to your desired active text color */
}

</style>

<aside class="sidebar">
    <nav>
        <ul class="menu-list">
            <li><a href="{{ route('dashboard.index') }}" class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle {{ request()->routeIs('navber_create') || request()->routeIs('navber_list') ? 'active' : '' }}"><i class="fas fa-bars"></i> Navber</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('navber_create') }}" class="{{ request()->routeIs('navber_create') ? 'active' : '' }}"><i class="fas fa-plus-circle"></i> Create</a></li>
                    <li><a href="{{ route('navber_list') }}" class="{{ request()->routeIs('navber_list') ? 'active' : '' }}"><i class="fas fa-list"></i> List</a></li>
                </ul>
            </li>
            <li><a href="{{ route('dashboard.hero') }}" class="{{ request()->routeIs('dashboard.hero') ? 'active' : '' }}"><i class="fas fa-star"></i> Hero Design</a></li>
            <li><a href="{{ route('dashboard.about') }}" class="{{ request()->routeIs('dashboard.about') ? 'active' : '' }}"><i class="fas fa-info-circle"></i> About</a></li>
            <li><a href="{{ route('dashboard.statas') }}" class="{{ request()->routeIs('dashboard.statas') ? 'active' : '' }}"><i class="fas fa-chart-pie"></i> Statas</a></li>
            <li><a href="{{ route('dashboard.skills') }}" class="{{ request()->routeIs('dashboard.skills') ? 'active' : '' }}"><i class="fas fa-tools"></i> Skills</a></li>
            <li class="dropdown">
                <a href="#resumes" class="dropdown-toggle {{ request()->routeIs('resumes_create') || request()->routeIs('resumes_list') ? 'active' : '' }}"><i class="fas fa-briefcase"></i> Resumes</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('dashboard.resume') }}" class="{{ request()->routeIs('resume_create') ? 'active' : '' }}"><i class="fas fa-plus"></i> Create</a></li>
                    <li><a href="{{ route('resumes_list') }}" class="{{ request()->routeIs('resume_list') ? 'active' : '' }}"><i class="fas fa-th-list"></i> List</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#settings" class="dropdown-toggle {{ request()->routeIs('protfolio_create') || request()->routeIs('protfolio_list') ? 'active' : '' }}"><i class="fas fa-briefcase"></i> Portfolio</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('protfolio_create') }}" class="{{ request()->routeIs('protfolio_create') ? 'active' : '' }}"><i class="fas fa-plus"></i> Create</a></li>
                    <li><a href="{{ route('protfolio_list') }}" class="{{ request()->routeIs('protfolio_list') ? 'active' : '' }}"><i class="fas fa-th-list"></i> List</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#settings" class="dropdown-toggle {{ request()->routeIs('service_create') || request()->routeIs('service_list') ? 'active' : '' }}"><i class="fas fa-concierge-bell"></i> Service</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('service_create') }}" class="{{ request()->routeIs('service_create') ? 'active' : '' }}"><i class="fas fa-plus"></i> Create</a></li>
                    <li><a href="{{ route('service_list') }}" class="{{ request()->routeIs('service_list') ? 'active' : '' }}"><i class="fas fa-th-list"></i> List</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#settings" class="dropdown-toggle {{ request()->routeIs('testimonials_create') || request()->routeIs('testimonials_list') ? 'active' : '' }}"><i class="fas fa-comments"></i> Testimonials</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('testimonials_create') }}" class="{{ request()->routeIs('testimonials_create') ? 'active' : '' }}"><i class="fas fa-plus"></i> Create</a></li>
                    <li><a href="{{ route('testimonials_list') }}" class="{{ request()->routeIs('testimonials_list') ? 'active' : '' }}"><i class="fas fa-th-list"></i> List</a></li>
                </ul>
            </li>

            <li><a href="{{ route('dashboard.contact') }}" class="{{ request()->routeIs('dashboard.hero') ? 'active' : '' }}"><i class="fas fa-star"></i>Contact</a></li>


            <li class="dropdown">
                <a href="#reports" class="dropdown-toggle"><i class="fas fa-chart-line"></i> Reports</a>
                <ul class="dropdown-menu">
                    <li><a href="#daily"><i class="fas fa-calendar-day"></i> Daily Report</a></li>
                    <li><a href="#monthly"><i class="fas fa-calendar-alt"></i> Monthly Report</a></li>
                    <li><a href="#custom"><i class="fas fa-calendar-check"></i> Custom Report</a></li>
                </ul>
            </li>
            <li><a href="#support"><i class="fas fa-life-ring"></i> Support</a></li>
            <li><a href="#activity"><i class="fas fa-clipboard-list"></i> Activity Log</a></li>
        </ul>
    </nav>
</aside>
