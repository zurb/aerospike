<?php
  $pageTitle = "Aerospike | Home";
  $bodyClass = "homepage";
?>
<?php include("includes/head.php"); ?>
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <?php include("includes/nav.php"); ?>
    <section class="main-section">
      <section class="hero">
        <img data-interchange="[images/gray-triangle-mask.svg, (default)], [images/gray-triangle-mask-xlarge.svg, (xlarge)]" alt="mask" class="hero-mask">
        <noscript><img src="images/gray-triangle-mask.svg" alt="mask" class="hero-mask"></noscript>      
        <div class="row">
          <div class="small-12 medium-7 large-6 medium-offset-5 large-offset-6 columns">
            <h1 class="hero-heading hero-unit">Aerospike is the <strong>distributed key-value store</strong> that delivers speed at scale.</h1>
            <p class="lead large hero-unit">We’ve open sourced Aerospike to empower you to build a new class of applications that may not have before been easy or affordable. We welcome you to join our community so that together, we can continue pushing the boundaries of speed at scale.</p>
            <div class="hide-for-small">
              <a href="getting-started.php" class="button inverted-button large">Get Started Now</a>              
            </div>
            <div class="show-for-small">
              <a href="getting-started.php" class="button inverted-button small">Get Started Now</a>              
            </div>
            <p>or <a href="technologies.php" class="technologies-link-on-homepage link-button">Learn About Our Technologies</a></p>
          </div>
        </div>
      </section>
      <?php include("includes/features.php"); ?> 
      <div class="show-for-small" data-interchange="[small]">  
        <?php include("includes/architecture-small.php"); ?>
      </div>
      <div class="hide-for-small" data-interchange="[medium]">
        <?php include("includes/architecture-medium.php"); ?>   
      </div>
      <?php include("includes/success-stories.php"); ?>   
      <?php include("includes/event.php"); ?>   
      <?php include("includes/brands.php"); ?>   
      <?php include("includes/get-started-cta.php"); ?>   
      <?php include("includes/site-footer.php"); ?>
    </section>
    <a class="exit-off-canvas"></a>
  </div>
</div>
<?php include("includes/foot.php"); ?>