<?php
if (isset($_REQUEST['journal_id'])) {
  extract($_REQUEST);
}
if(isset($_REQUEST['categorie']) && isset($_REQUEST['sub_categorie'])){
  extract($_REQUEST);
}
?>

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
      <div class="navbar-brand navbar-brand-center">
          <a href="index.php"><img class="navbar-brand-logo" src="assets/images/logo.jpg" title="Remark" style="width:110px;"></a>
      </div>
      
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
              <a class="dropdown-item" href="logout1.php" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
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
          <a href="about_journal.php?journal_id=<?php echo $journal_id; ?>">
                    <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">About Journal</span>
                        <div class="site-menu-badge"></div>
                </a>
          
        </li>
        <li class="site-menu-item has-sub">
          <a href="view_editors.php?journal_id=<?php echo $journal_id; ?>">
                    <i class="site-menu-icon wb-users" aria-hidden="true"></i>
                    <span class="site-menu-title">Editors</span>
                </a>
        </li>
        <li class="site-menu-item has-sub">
          <a href="article_list.php?journal_id=<?php echo $journal_id; ?>">
                    <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Articles List</span>
                </a>
          
        </li>
       <li class="site-menu-item has-sub">
          <a href="view_articles.php?journal_id=<?php echo $journal_id; ?>">
                    <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Articles In Presss</span>
                </a>
          
        </li>
        <li class="site-menu-item has-sub">
          <a href="aip.php?journal_id=<?php echo $journal_id; ?>">
                    <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Article Table View</span>
                </a>
          
        </li>
          <li class="site-menu-item has-sub">
          <a href="view_journal_indexing.php?journal_id=<?php echo $journal_id; ?>">
                    <i class="site-menu-icon wb-image" aria-hidden="true"></i>
                    <span class="site-menu-title">Indexing</span>
                </a>
          
        </li>
          <li class="site-menu-item has-sub">
          <a href="view_review_journal.php?journal_id=<?php echo $journal_id; ?>">
                    <i class="site-menu-icon wb-user-circle" aria-hidden="true"></i>
                    <span class="site-menu-title">Reviewers</span>
                </a>
        
        </li>
<!--
        <li class="site-menu-item has-sub">
          <a href="instructions_for_authors.php">
                    <i class="site-menu-icon wb-list" aria-hidden="true"></i>
                    <span class="site-menu-title">Instructions for<br> Authors</span>
                </a>
          
        </li>
        <li class="site-menu-item has-sub">
          <a href="submit_manuscript.php">
                    <i class="site-menu-icon wb-check" aria-hidden="true"></i>
                    <span class="site-menu-title">Submit<br>Manuscript</span>
                </a>
         
        </li>
        <li class="site-menu-item has-sub">
          <a href="guide_lines.php">
                    <i class="site-menu-icon wb-list" aria-hidden="true"></i>
                    <span class="site-menu-title">Guidelines</span>
                </a>
         
        </li>
-->
        <li class="site-menu-item has-sub">
          <a href="article_status1.php?journal_id=<?php echo $journal_id; ?>">
                    <i class="site-menu-icon wb-thumb-up" aria-hidden="true"></i>
                    <span class="site-menu-title">Archive</span>
                </a>
        
        </li>
        <li class="site-menu-item has-sub">
          <a href="current_issues.php?journal_id=<?php echo $journal_id; ?>">
                    <i class="site-menu-icon wb-graph-up" aria-hidden="true"></i>
                    <span class="site-menu-title">Current Issues</span>
                </a>
         
        </li>
        <li class="site-menu-item has-sub">
          <a href="previous_issues.php?journal_id=<?php echo $journal_id; ?>">
                    <i class="site-menu-icon wb-video" aria-hidden="true"></i>
                    <span class="site-menu-title">Previous Issues</span>
                </a>
        </li>
        <li class="site-menu-item has-sub">
          <a href="special_issues.php?journal_id=<?php echo $journal_id; ?>">
                    <i class="site-menu-icon wb-tag" aria-hidden="true"></i>
                    <span class="site-menu-title">Special Issues</span>
                </a>
        
        </li>
        <li class="site-menu-item has-sub">
          <a href="view_innersidebar_seopage.php?journal_id=<?php echo $journal_id; ?>">
                    <i class="site-menu-icon wb-tag" aria-hidden="true"></i>
                    <span class="site-menu-title">SEO Page</span>
                </a>
        
        </li>
       
          <li class="site-menu-item has-sub active open">
          <a href="view_keywords.php?journal_id=<?php echo $journal_id; ?>">
                    <i class="site-menu-icon wb-star" aria-hidden="true"></i>
                    <span class="site-menu-title">Keywords</span>
                         
                </a>
        </li>
      </ul>
    </div>
  </div>
