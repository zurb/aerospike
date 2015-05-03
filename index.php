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
            <h1 class="hero-heading hero-unit">Aerospike is the <strong>distributed key-value store</strong> that delivers speed at scale.</h1>
            <p class="lead large hero-unit">We’ve open sourced Aerospike to empower you to build a new class of applications that may not have before been easy or affordable. We welcome you to join our community so that together, we can continue pushing the boundaries of speed at scale.</p>
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
                  <a href="#architecture-data-management">
                    <h5>
                      Data Management             
                    </h5>
                    <p class="lead small">
                      Lorem ipsum dolor sit amet                   
                    </p>
                  </a>
                </li>
                <li class="tab-title active even-3">
                  <a href="#architecture-data-distribution">
                    <h5>
                      Data Distribution
                    </h5>
                    <p class="lead small">
                      Lorem ipsum dolor sit amet                   
                    </p>    
                  </a>                
                </li>
                <li class="tab-title even-3">
                  <a href="#architecture-client-layer">
                    <h5>
                      Client Layer                 
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
                <div class="content" id="architecture-data-management">
                  <div class="content-container">
                    <div class="row">
                      <div class="medium-5 small-12 columns">
                        <img src="images/architecture-diagram.png" class="content-diagram" alt="Data Management">
                      </div>
                      <div class="medium-7 small-12 columns">
                        <h3 class="article-heading">Data Management</h3>
                        <p class="lead large">Aerospike supports enhanced key-value operations</p>
                        <ul>
                          <li>Data Model</li>
                          <li>Primary Index (Key-value store)</li>
                          <li>Secondary Index</li>
                          <li>Hybrid Storage</li>
                          <li>Large Data Type</li>
                        </ul>
                        <a href="#" class="link-button">Learn More About Data Management</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content active" id="architecture-data-distribution">
                  <div class="content-container">
                    <div class="row">
                      <div class="medium-5 small-12 columns">
                        <img src="images/architecture-diagram.png" class="content-diagram" alt="Data Distribution">
                      </div>
                      <div class="medium-7 small-12 columns">
                        <h3 class="article-heading">Data Distribution</h3>
                        <p class="lead large">Aerospike has a shared-nothing architecture, every node is identical, and there is no single point of failure. </p>
                        <ul>
                          <li>Partitions</li>
                          <li>Data Replication</li>
                          <li>Clustering</li>
                          <li>Auto-rebalancing</li>
                          <li>Synchronous Data Replication</li>
                        </ul>
                        <a href="#" class="link-button">Learn More About Data Management</a>
                      </div>
                    </div>
                  </div>
                </div>                
                <div class="content" id="architecture-client-layer">
                  <div class="content-container">
                    <div class="row">
                      <div class="medium-5 small-12 columns">
                        <img src="images/architecture-diagram.png" class="content-diagram" alt="Client Layer">
                      </div>
                      <div class="medium-7 small-12 columns">
                        <h3 class="article-heading">Client Layer</h3>
                        <p class="lead large">Aerospike’s client drivers sit on your web application server&mdash;completely cluster aware, tracking where data is stored and when nodes are added or removed.</p>
                        <ul>
                          <li>10+ Client Languages</li>
                          <li>Cluster Aware</li>
                          <li>TCP/IP Connection Pool Handling</li>
                        </ul>
                        <a href="#" class="link-button">Learn More About Client Layer</a>
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
                        <p class="lead large">UDFs extend functionality of the Aerospike database, allowing developers to move some processing and compute logic to the same node where data resides, saving network round trips.</p>
                        <ul>
                          <li>LUA</li>
                          <li>Record UDF</li>
                          <li>Stream UDF</li>
                        </ul>
                        <a href="#" class="link-button">Learn More About User Defined Functions</a>
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