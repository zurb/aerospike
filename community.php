<?php
  $pageTitle = "Aerospike | Community";
  $bodyClass = "community";
?>
<?php include("includes/head.php"); ?>
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <?php include("includes/nav.php"); ?>
    <section class="main-section">
      <section class="hero inner-pages">
        <?php include("includes/image-mask.php"); ?>       
        <div class="row">
          <div class="small-12 medium-10 large-9 medium-centered large-centered columns">
            <h1 class="hero-heading hero-unit">
              <span class="metadata">Aerospike Community</span>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit
            </h1>
          </div>
        </div>
      </section>
      <section class="content-section message-from-the-founders">
        <div class="section-heading-container row">
          <div class="small-12 columns">
            <h2 class="section-heading">A message from the founders</h2>
            <h5 class="subhead">Aerospike was established because we wanted to <strong>simplify scaling for all developers</strong>&mdash;not just the few who worked at companies with deep enough pockets to build their own database.</h5>      
          </div>
        </div>
        <div class="points-for-message-from-the-founders">
          <div class="points-for-message-from-the-founders-content row">
            <div class="large-8 medium-10 small-12 large-centered medium-centered columns">
              <div class="video-container">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/d6NmCOZstjk" frameborder="0" allowfullscreen></iframe>
              </div>
              <p class="lead large">We've open sourced Aerospike to <strong>empower you to build a new class of applications</strong> that may not have before been easy or affordable. We welcome you to join our community so that together, we can continue pushing the boundaries of speed and scale.</p>
              <a href="#" class="button">Read the Blog Post</a>
            </div>
          </div>  
        </div>
      </section>     
      <?php include("includes/getting-started-resources.php"); ?>
      <?php include("includes/get-involved-with-community.php"); ?>   
      <?php include("includes/features.php"); ?>   
      <section class="content-section product-offering">
        <div class="section-heading-container row">
          <div class="small-12 columns">
            <h3 class="article-heading">Download Community Edition</h3>
            <h5 class="subhead">Aerospike has Open Sourced its revolutionary in-memory NoSQL database and key-value store technology. Because Aerospike is flash-optimized with a hybrid RAM/SSD storage architecture, you can get 10x better performance while using 10x fewer servers. The Aerospike Community Edition is free and new builds are periodically made available.</h5>      
          </div>
        </div>
        <?php include("includes/cloud-product-offering.php"); ?>
        <div class="points-for-services-offering">
          <div class="points-for-services-offering row">
            <div class="services-offering-points large-3 medium-6 small-12 columns">
              <div class="services-offering-container">
                <h5 class="services-heading">
                  <a href="#">Community Support</a>
                </h5>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut rhoncus est. Vestibulum tristique vestibulum purus, et rutrum urna fermentum in.</p>
                <a href="#" class="link-button">Learn More</a>
              </div>               
            </div>
            <div class="services-offering-points large-3 medium-6 small-12 columns">
              <div class="services-offering-container">
                <h5 class="services-heading">
                  <a href="#">Enterprise Support</a>
                </h5>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut rhoncus est. Vestibulum tristique vestibulum purus, et rutrum urna fermentum in.</p>
                <a href="#" class="link-button">Learn More</a>
              </div>    
            </div>
            <div class="services-offering-points large-3 medium-6 small-12 columns">
              <div class="services-offering-container">
                <h5 class="services-heading">
                  <a href="#">Professional Services</a>
                </h5>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut rhoncus est. Vestibulum tristique vestibulum purus, et rutrum urna fermentum in.</p>
                <a href="#" class="link-button">Learn More</a>
              </div>    
            </div>    
            <div class="services-offering-points large-3 medium-6 small-12 columns">
              <div class="services-offering-container">
                <h5 class="services-heading">
                  <a href="#">Training</a>
                </h5>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut rhoncus est. Vestibulum tristique vestibulum purus, et rutrum urna fermentum in.</p>
                <a href="#" class="link-button">Learn More</a>
              </div>    
            </div>                        
          </div>
        </div>
      </section>   
      <?php include("includes/additional-resources.php"); ?>
      <?php include("includes/event.php"); ?>
      <?php include("includes/brands.php"); ?>
      <?php include("includes/get-started-cta.php"); ?>
      <?php include("includes/site-footer.php"); ?>
    </section>
    <a class="exit-off-canvas"></a>
  </div>
</div>
<?php include("includes/foot.php"); ?>