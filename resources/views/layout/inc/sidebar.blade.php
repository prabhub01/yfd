@php
$secondParam = Request::segment(2);
@endphp

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text mx-3">
            <img src="{{ asset('img/yfdLogo.png') }}">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $secondParam == 'dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}" style="padding: 5px 0px 5px 20px;">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('index') }}" target="_blank" style="padding: 5px 0px 5px 20px;">
            <i class="fas fa-globe-americas"></i>
            <span>View Site</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fab fa-wpforms"></i>
            <span>Content</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar"
            style="padding: 5px 0px 5px 20px;">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
                <a class="collapse-item" href="{{ route('admin.event.index') }}">Events</a>
                <a class="collapse-item" href="{{ route('admin.blog.index') }}">Blogs</a>
                <a class="collapse-item" href="{{ route('admin.podcast.index') }}">Podcast</a>
            </div>
        </div>
    </li>

    {{-- <li class="nav-item {{ $secondParam == 'team' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.team.index') }}" style="padding: 5px 0px 5px 20px;">
            <i class="fas fa-users"></i>
            <span>Team Management</span></a>
    </li> --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
            aria-controls="collapseOne">
            <i class="fab fa-wpforms"></i>
            <span>Team Management</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar"
            style="padding: 5px 0px 5px 20px;">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
                <a class="collapse-item" href="{{ route('admin.team.index') }}">Teams</a>
                <a class="collapse-item" href="{{ route('admin.founder.index') }}">Founders</a>
            </div>
        </div>
    </li>

    <li class="nav-item {{ $secondParam == 'about-us' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.about-us.index') }}" style="padding: 5px 0px 5px 20px;">
            <i class="far fa-address-card"></i>
            <span>About Us</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Testimonial
    </div>

    <li class="nav-item {{ $secondParam == 'member-testimonial' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.member-testimonial.index') }}" style="padding: 5px 0px 5px 20px;">
            <i class="fab fa-wpforms"></i>
            <span>Member Testimonial </span></a>
    </li>

    <li class="nav-item {{ $secondParam == 'testimonial' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.testimonial.index') }}" style="padding: 5px 0px 5px 20px;">
            <i class="fab fa-wpforms"></i>
            <span>Testimonial </span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Form Submission
    </div>

    <li class="nav-item {{ $secondParam == 'volunteer' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.volunteer.index') }}" style="padding: 5px 0px 5px 20px;">
            <i class="fab fa-wpforms"></i>
            <span>Volunteer Form </span></a>
    </li>

    <li class="nav-item {{ $secondParam == 'contact' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.contact-us.index') }}" style="padding: 5px 0px 5px 20px;">
            <i class="fab fa-wpforms"></i>
            <span>Contact Form </span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item {{ $secondParam == 'settings' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.settings.index') }}" style="padding: 5px 0px 5px 20px;">
            <i class="fab fa-wpforms"></i>
            <span>Settings</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->