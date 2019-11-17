
  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse bg-indigo-600"
    role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
        data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
        data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <?php  if($user->a_name == "admin"){ ?>
      <div class="navbar-brand navbar-brand-center">
          <a href="index.php"><img class="navbar-brand-logo" src="assets/images/logo.jpg" title="Remark" style="width:110px;"></a>
      </div>
      <?php } 
             else{ ?>

<div class="navbar-brand navbar-brand-center">
          <a href=""><img class="navbar-brand-logo" src="assets/images/logo.jpg" title="Remark" style="width:110px;"></a>
      </div>

             <?php }
      ?>
      
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="nav-item hidden-float" id="toggleMenubar">
            <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
          </li>
          
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          
          <li class="nav-item dropdown">
            <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
              data-animation="scale-up" role="button">
              <span class="avatar avatar-online" style="text-transform:capitalize">
                 <?php echo $user->a_name; ?>
              </span>
            </a>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              <div class="dropdown-divider" role="presentation"></div>
              <a class="dropdown-item" href="logout.php" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
            </div>
          </li>
          
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      
    </div>
  </nav>
  <div class="site-menubar site-menubar-light">
    <div class="site-menubar-body">
      <ul class="site-menu" data-plugin="menu">
        <li class="site-menu-item has-sub">
          <a href="dashboard.php">
                    <i class="site-menu-icon wb-home" aria-hidden="true"></i>
                    <span class="site-menu-title">Dashboard</span>
                        <div class="site-menu-badge"></div>
                </a>
          
        </li>
        <li class="site-menu-item has-sub">
          <a href="view_journals.php">
                    <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">Journals</span>
                </a>
        </li>
        <li class="site-menu-item has-sub">
          <a href="categories.php">
                    <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">Journal <br>Categories</span>
                </a>
        </li>
          <li class="site-menu-item has-sub">
          <a href="dup.php">
                    <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">Categorize <br>Journal</span>
                </a>
        </li>
        <li class="site-menu-item has-sub">
          <a href="view_indexing.php">
                    <i class="site-menu-icon wb-image" aria-hidden="true"></i>
                    <span class="site-menu-title">Indexing</span>
                </a>
          
        </li>
        <li class="site-menu-item has-sub">
          <a href="view_articletypes.php">
                    <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Artical Types</span>
                </a>
          
        </li>
        <li class="site-menu-item has-sub">
          <a href="aboutus.php">
                    <i class="site-menu-icon wb-info-circle" aria-hidden="true"></i>
                    <span class="site-menu-title">About Us</span>
                </a>
         
        </li>
        <li class="site-menu-item has-sub">
          <a href="authors.php">
                    <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                    <span class="site-menu-title">Authors</span>
                </a>
         
        </li>
        <li class="site-menu-item has-sub">
          <a href="reviewers.php">
                    <i class="site-menu-icon wb-user-circle" aria-hidden="true"></i>
                    <span class="site-menu-title">Reviewers</span>
                </a>
        
        </li>
        <li class="site-menu-item has-sub">
          <a href="view_guestusers.php">
                    <i class="site-menu-icon wb-users" aria-hidden="true"></i>
                    <span class="site-menu-title">Guest Users</span>
                </a>
         
        </li>
        <li class="site-menu-item has-sub">
          <a href="subscribers.php">
                    <i class="site-menu-icon wb-chat" aria-hidden="true"></i>
                    <span class="site-menu-title">Subscribers</span>
                </a>
        </li>
           <li class="site-menu-item has-sub active open">
          <a href="view_seopages.php">
                    <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                    <span class="site-menu-title">SEO Pages</span>
                         
                </a>
        </li>
        <li class="site-menu-item has-sub">
          <a href="view_admins.php">
                    <i class="site-menu-icon wb-users" aria-hidden="true"></i>
                    <span class="site-menu-title">Admins</span>
                </a>
        
        </li>
        <li class="site-menu-item has-sub active open">
          <a href="logout.php">
                    <i class="site-menu-icon wb-power" aria-hidden="true"></i>
                    <span class="site-menu-title">Logout</span>
                         
                </a>
        </li>
      </ul>
    </div>
  </div>
