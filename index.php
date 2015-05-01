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
            <p class="lead large hero-unit">We handle real-time big data faster, we scale more reliably, and what’s really surprising, we cost less too! Build your first app using the world’s first, flash-optimized, in-memory, NoSQL database.</p>
            <a href="getting-started.php" class="button inverted-button large">Get Started Now</a>
            <p>or <a href="technologies.php" class="technologies-link-on-homepage link-button">Learn About Our Technologies</a></p>
          </div>
        </div>
      </section>
      <?php include("includes/features.php"); ?>   
      <section class="content-section architecture">
        <div class="section-heading-container row">
          <div class="small-12 columns">
            <h2 class="section-heading">
              Aerospike Architecture
            </h2>
            <h5 class="subhead">
              Aerospike is <strong>distributed and scalable NoSQL database</strong> architected to create a flexible, scalable platform that meets the needs of today’s web-scale applications, provides the robustness and <strong>ACID reliability</strong> expected from traditional databases, and is <strong>operationally efficient</strong>.
            </h5>      
          </div>
        </div>
        <div class="points-for-architecture">
          <div class="points-for-architecture-content row">
            <div class="small-12 columns">
              <div class="tab-icons">
                <img src="images/architecture-icons.png" alt="Architecture icons"> 
              </div>
              <ul class="tabs aerospike-custom-tabs" data-tab>
                <li class="tab-title even-3">
                  <a href="#architecture-overview">
                    <h5>
                      Overview             
                    </h5>
                    <p class="lead small">
                      Lorem ipsum dolor sit amet                   
                    </p>
                  </a>
                </li>
                <li class="tab-title active even-3">
                  <a href="#architecture-data-management">
                    <h5>
                      Data Management
                    </h5>
                    <p class="lead small">
                      Lorem ipsum dolor sit amet                   
                    </p>    
                  </a>                
                </li>
                <li class="tab-title even-3">
                  <a href="#architecture-distribution">
                    <h5>
                      Distribution                 
                    </h5>
                    <p class="lead small">
                      Lorem ipsum dolor sit amet                        
                    </p>      
                  </a>              
                </li>
                <li class="tab-title even-3">
                  <a href="#architecture-udf">
                    <h5>
                      User Defined Functions                 
                    </h5>
                    <p class="lead small">
                      Lorem ipsum dolor sit amet                  
                    </p>    
                  </a>                
                </li>
              </ul>
              <div class="tabs-content">
                <div class="content" id="architecture-overview">
                  <div class="content-container">
                    <div class="row">
                      <div class="medium-5 small-12 columns">
                        <img src="images/architecture-diagram.png" class="content-diagram" alt="Overview">
                      </div>
                      <div class="medium-7 small-12 columns">
                        <h3 class="article-heading">Overview</h3>
                        <p class="lead large">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas justo. Suspendisse potenti. Nunc ut mauris facilisis, ultricies tellus sed, sodales purus.</li>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas justo. Suspendisse potenti. Nunc ut mauris facilisis, ultricies tellus sed, sodales purus.</li>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas justo.</li>
                        </ul>
                        <a href="#" class="link-button">Learn More About Data Management</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content active" id="architecture-data-management">
                  <div class="content-container">
                    <div class="row">
                      <div class="medium-5 small-12 columns">
                        <img src="images/architecture-diagram.png" class="content-diagram" alt="Data Management">
                      </div>
                      <div class="medium-7 small-12 columns">
                        <h3 class="article-heading">Data Management</h3>
                        <p class="lead large">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas justo. Suspendisse potenti. Nunc ut mauris facilisis, ultricies tellus sed, sodales purus.</li>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas justo. Suspendisse potenti. Nunc ut mauris facilisis, ultricies tellus sed, sodales purus.</li>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas justo.</li>
                        </ul>
                        <a href="#" class="link-button">Learn More About Data Management</a>
                      </div>
                    </div>
                  </div>
                </div>                
                <div class="content" id="architecture-distribution">
                  <div class="content-container">
                    <div class="row">
                      <div class="medium-5 small-12 columns">
                        <img src="images/architecture-diagram.png" class="content-diagram" alt="Distribution">
                      </div>
                      <div class="medium-7 small-12 columns">
                        <h3 class="article-heading">Distribution</h3>
                        <p class="lead large">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas justo. Suspendisse potenti. Nunc ut mauris facilisis, ultricies tellus sed, sodales purus.</li>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas justo. Suspendisse potenti. Nunc ut mauris facilisis, ultricies tellus sed, sodales purus.</li>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas justo.</li>
                        </ul>
                        <a href="#" class="link-button">Learn More About Data Management</a>
                      </div>
                    </div>
                  </div>
                </div>        
                <div class="content" id="architecture-udf">
                  <div class="content-container">
                    <div class="row">
                      <div class="medium-5 small-12 columns">
                        <img src="images/architecture-diagram.png" class="content-diagram" alt="User Defined Functions">
                      </div>
                      <div class="medium-7 small-12 columns">
                        <h3 class="article-heading">User Defined Functions</h3>
                        <p class="lead large">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas justo. Suspendisse potenti. Nunc ut mauris facilisis, ultricies tellus sed, sodales purus.</li>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas justo. Suspendisse potenti. Nunc ut mauris facilisis, ultricies tellus sed, sodales purus.</li>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas justo.</li>
                        </ul>
                        <a href="#" class="link-button">Learn More About Data Management</a>
                      </div>
                    </div>
                  </div>
                </div>     
              </div>
            </div>
          </div>
        </div>
      </section>   

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