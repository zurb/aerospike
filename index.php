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
          <div class="small-12 medium-6 medium-offset-6 columns">
            <h1 class="hero-heading hero-unit">The world's first flash-optimized, in-memory, NoSQL database <strong>is now open-source</strong>.</h1>
            <p class="lead hero-unit">We handle real-time big data faster, we scale more reliably, and what’s really surprising, we cost less too! Build your first app using the world’s first, flash-optimized, in-memory, NoSQL database.</p>
            <a href="getting-started.php" class="button inverted-button large">Get Started Now</a>
            <p>or <a href="technologies.php" class="technologies-link-on-homepage link-button">Learn About Our Technologies</a></p>
          </div>
        </div>
      </section>
      <?php include("includes/features.php"); ?>   
      <?php include("includes/architecture.php"); ?>   
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