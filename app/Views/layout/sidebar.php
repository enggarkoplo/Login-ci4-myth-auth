<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fa fa-fire"></i>
    </div>
    <div class="sidebar-brand-text mx-3">EnGgAr <sup></sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider">
  
  <?php if (in_groups('admin')) : ?>
    <!-- Heading -->
    <div class="sidebar-heading">
      User Managements
    </div>

    <!-- Nav Item - User List -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin'); ?>">
        <i class="fas fa-users"></i>
        <span>User list</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
  <?php endif; ?>

  <!-- Heading -->
  <div class="sidebar-heading">
    User Profile
  </div>

  <!-- Nav Item - My profile -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('user'); ?>">
      <i class="fas fa-user"></i>
      <span>My profile</span></a>
  </li>

  <!-- Nav Item - Edit profile -->
  <li class="nav-item">
    <a class="nav-link" href="tables.html">
      <i class="fas fa-user-edit"></i>
      <span>Edit Profile</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Logout
  </div>

  <!-- Nav Item - Logout -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('logout'); ?>">
      <i class="fas fa-sign-out-alt"></i>
      <span>Log Out</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>