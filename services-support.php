<?php
  $pageTitle = "Aerospike | Services & Support";
  $bodyClass = "services-support";
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
              <span class="metadata">Services &amp; Support</span>
              Our team is here with the help you need
            </h1>
          </div>
        </div>
      </section>
      <section class="content-section product-offering">
        <div class="section-heading-container row">
          <div class="small-12 columns">
            <h3 class="article-heading">Easiest way to run Aerospike in the cloud</h3>
            <h5 class="subhead">Supported. Secure. Certified.</h5>      
            <p class="lead large">
              <strong>
                Hundreds of organizations around the world use our managed service, called Aerospike Burro, from startups to the Fortune 100s. Aerospike Burro is a finely-tuned managed service that comes with support and other services that’s designed for the way you do business.
              </strong>
            </p>
            <p>
              For pricing and more information, download the <a href="#" class="primary">Aerospike Project Burro Datasheet</a> or <a href="#" class="primary">contact us</a>.
              <br>
              Or <a href="#" class="primary">try it now</a> for free!
            </p>
          </div>
        </div>
        <?php include("includes/cloud-product-offering.php"); ?>
      </section>    
      <div class="show-for-small">
        <?php include("includes/aerospike-services-small.php"); ?>
      </div>
      <div class="hide-for-small">
        <?php include("includes/aerospike-services-medium.php"); ?>  
      </div>
      <div class="show-for-small">
        <?php include("includes/aerospike-support-small.php"); ?>
      </div>
      <div class="hide-for-small">
        <?php include("includes/aerospike-support-medium.php"); ?>
      </div>
      <?php include("includes/site-footer.php"); ?>
    </section>
    <a class="exit-off-canvas"></a>
  </div>
</div>
<?php include("includes/foot.php"); ?>