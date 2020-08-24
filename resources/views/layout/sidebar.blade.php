<!-- Sidebar -->
<ul CLASS="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a CLASS="sidebar-brand d-flex align-items-center justify-content-center" href="{{URL::to('/')}}">
      <div CLASS="sidebar-brand-icon rotate-n-15">
        <i CLASS="fas fa-laugh-wink"></i>
      </div>
      <div CLASS="sidebar-brand-text mx-3">Tin Nghia Construction</div>
    </a>

    <!-- Divider -->
    <hr CLASS="sidebar-divider">

    <!-- Heading -->
    <div CLASS="sidebar-heading" style="display: none;">
      Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li CLASS="nav-item">
      <a CLASS="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i CLASS="fas fa-fw fa-cog"></i>
        <span>Posts Management</span>
      </a>
      <div id="collapseTwo" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div CLASS="bg-white py-2 collapse-inner rounded">
          <h6 CLASS="collapse-header">Posts:</h6>
          <a CLASS="collapse-item" href="{{URL::to('/all-post')}}">List Post</a>
          <a CLASS="collapse-item" href="{{URL::to('/add-post')}}">Create New Post</a>
        </div>
      </div>
    </li>

    <li CLASS="nav-item">
        <a CLASS="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i CLASS="fas fa-fw fa-cog"></i>
          <span>Category Post Management</span>
        </a>
        <div id="collapseTwo" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div CLASS="bg-white py-2 collapse-inner rounded">
            <h6 CLASS="collapse-header">Category Posts:</h6>
            <a CLASS="collapse-item" href="{{URL::to('/all-categoryPost')}}">List Category Posts</a>
            <a CLASS="collapse-item" href="{{URL::to('/add-categoryPost')}}">Create New Category Post</a>
          </div>
        </div>
      </li>

      <li CLASS="nav-item">
        <a CLASS="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i CLASS="fas fa-fw fa-cog"></i>
          <span>User Management</span>
        </a>
        <div id="collapseTwo" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div CLASS="bg-white py-2 collapse-inner rounded">
            <h6 CLASS="collapse-header">User:</h6>
            <a CLASS="collapse-item" href="{{URL::to('/all-user')}}">List User</a>
            <a CLASS="collapse-item" href="{{URL::to('/add-user')}}">Create New User</a>
          </div>
        </div>
      </li>
  </ul>
  <!-- End of Sidebar -->
