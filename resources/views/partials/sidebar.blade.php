<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ '/' }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-globe"></i>
        </div>
        <div class="sidebar-brand-text ml-3">
            {{ $siteName }}
        </div>
    </a>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (Request::is('dashboard')) ? 'active' : ''}}">
        <a class="nav-link" href="{{ '/dashboard' }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Content Management
    </div>

    <li class="nav-item {{ (Request::is('posts/*')) ? 'active' : ''; }}">
        <a class="nav-link {{ (Request::is('posts/*')) ? '' : 'collapsed'; }}" href="#" data-toggle="collapse" data-target="#collapsePosts"
            aria-expanded="true" aria-controls="collapsePosts">
            <i class="fas fa-fw fa-box"></i>
            <span>Posts</span>
        </a>
        <div id="collapsePosts" class="collapse {{ (Request::is('posts/*')) ? 'show' : ''; }}" aria-labelledby="headingPosts" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Posts:</h6>
                <a class="collapse-item {{ (Request::is('posts/*list')) ? 'active' : '' }}" href="{{ '/posts/list' }}">All</a>
                <a class="collapse-item {{ (Request::is('posts/*add')) ? 'active' : '' }}" href="{{ '/posts/add' }}">Add New</a>
                <a class="collapse-item {{ (Request::is('posts/*categories')) ? 'active' : '' }}" href="{{ '/posts/categories' }}">Categories</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
