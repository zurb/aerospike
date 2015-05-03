<?php
  $pageTitle = "Aerospike | Technologies";
  $bodyClass = "technologies";
?>
<?php include("includes/head.php"); ?>
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <?php include("includes/nav.php"); ?>
    <section class="main-section">
      <section class="hero inner-pages">
        <!-- working out slash line problem
        <div class="hero-bg-image-container">
          <img data-interchange="[images/technologies-hero-unit-sm.jpg, (small), [images/technologies-hero-unit-md.jpg, (medium)], [images/technologies-hero-unit-lg.jpg, (large)]" alt="hero unit background image" class="hero-bg-image">
          <noscript><img src="images/technologies-hero-unit-lg.jpg" alt="hero unit background image" class="hero-bg-image"></noscript>         
        </div>
        -->
        <img data-interchange="[images/white-triangle-mask.svg, (default)], [images/white-triangle-mask-xlarge.svg, (xlarge)]" alt="mask" class="hero-mask">
        <noscript><img src="images/white-triangle-mask.svg" alt="mask" class="hero-mask"></noscript>         
        <img src="images/problem-solution-slash.png" alt="slash line" class="hero-slash-line">  
        <div class="row">
          <div class="small-12 medium-10 large-9 medium-centered large-centered columns">
            <h1 class="hero-heading hero-unit">
              <span class="metadata">Aerospike Technologies</span>
              We make next-gen databases for high-growth companies
            </h1>
          </div>
        </div>
      </section>
      <?php include("includes/problem-solution.php"); ?>       
      <?php include("includes/technology.php"); ?>       
      <?php include("includes/benefits.php"); ?>       
      <?php include("includes/features.php"); ?>   
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