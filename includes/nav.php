    <div class="mobile-header">
      <nav class="tab-bar hide-for-large-up">
        <section class="left-small">
          <h1 class="logo">
            <a href="index.php">
              <span>Aerospike</span>
            </a>
          </h1>
        </section>
        <section class="right-small">
          <a class="right-off-canvas-toggle menu-icon" href="#"><span></span></a>
        </section>
      </nav>
    </div>
    <nav class="top-nav show-for-large-up">
      <div class="row">
        <div class="small-12 columns">
          <h1 class="logo">
            <a href="index.php">
              <span>Aerospike</span>
            </a>
          </h1>
          <ul class="nav-products left">
            <li>
              <a href="technologies.php" <?php if ($bodyClass == 'technologies') { echo 'class="active"'; } ?>>Technologies</a>
            </li>
            <li>
              <a href="services-support.php" <?php if ($bodyClass == 'services-support') { echo 'class="active"'; } ?>>Services &amp; Support</a>
            </li>  
            <li>
              <a href="success-stories.php" <?php if ($bodyClass == 'success-stories') { echo 'class="active"'; } ?>>Success Stories</a>
            </li>                
          </ul>
          <ul class="nav-auxiliary right hide-for-small">
            <li>
              <a href="docs.php" <?php if ($bodyClass == 'docs') { echo 'class="active"'; } ?>>Docs</a>
            </li>
            <li>
              <a href="community.php" <?php if ($bodyClass == 'community') { echo 'class="active"'; } ?>>Community</a>
            </li>
            <li>
              <a href="company.php" <?php if ($bodyClass == 'company') { echo 'class="active"'; } ?>>Company</a>
            </li>    
            <li>
              <a href="getting-started.php" class="getting-started-button inverted-button button tiny">Getting Started</a>
            </li>        
          </ul>
        </div>
      </div>
    </nav>
    <aside class="right-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><a href="index.php">Home</a></li>
        <li><a href="technologies.php">Technologies</a></li>
        <li><a href="our-viewpoint.php">Services &amp; Support</a></li>
        <li><a href="docs.php">Docs</a></li>
        <li><a href="community.php">Community</a></li>
        <li><a href="company.php">Company</a></li>
        <li class="getting-started-offcanvas-cta"><a href="getting-started.php" class="button inverted-button">Get Started Today</a></li>
      </ul>
    </aside>    
