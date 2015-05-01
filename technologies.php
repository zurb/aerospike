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
      <section class="content-section problem-solution">
        <div class="points-for-problem-solution">
          <div class="points-for-benefits-content row">
            <div class="medium-5 small-12 columns">
              <h2 class="section-heading">The Problem</h2>
              <p class="lead large">Hundreds of millions of consumers. On billions of devices. 2 Million per second, just 5 milliseconds to decide. It’s a very small window of opportunity. You either succeed or you don’t. The Internet giants are making it happen.</p>
            </div>
            <div class="medium-5 medium-offset-2 small-12 columns">
              <h2 class="section-heading">The Solution</h2>
              <p class="lead large">A NoSQL database as fast as a cache. A user store for real-time bidding, recommendation engines and cross-channel marketing. Powering real-time big data driven applications with strong consistency (ACID) and 100% uptime.</p>
            </div>
          </div>
        </div>
      </section>            
      <section class="content-section architecture">
        <div class="section-heading-container row">
          <div class="small-12 columns">
            <h2 class="section-heading">
              The Technology
            </h2>
            <h5 class="subhead">
              Aerospike’s <strong>distributed "Shared-Nothing" architecture</strong> is designed and built to <strong>reliably store data</strong> with <strong>automatic failover</strong>, replication with <strong>immediate consistency</strong> within the cluster and <strong>cross data-center synchronization</strong>. Since the data is distributed evenly and randomly across all nodes within the cluster, it also offers predictable performance where access to every piece of data using its primary key has the same latency. It scales linearly and is also designed to eliminate manual operations with the systematic automation of all cluster management functions.
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
                      Smart Client             
                    </h5>
                    <p class="lead small">
                      Applications link to client libraries                    
                    </p>
                  </a>
                </li>
                <li class="tab-title active even-3">
                  <a href="#architecture-data-management">
                    <h5>
                      Smart Cluster  
                    </h5>
                    <p class="lead small">
                      Replicates data synchronously                   
                    </p>    
                  </a>                
                </li>
                <li class="tab-title even-3">
                  <a href="#architecture-distribution">
                    <h5>
                      Cross Datacenter Replication                  
                    </h5>
                    <p class="lead small">
                      Applications link to client libraries                           
                    </p>      
                  </a>              
                </li>
                <li class="tab-title even-3">
                  <a href="#architecture-udf">
                    <h5>
                      Hybrid Memory System                
                    </h5>
                    <p class="lead small">
                      Applications link to client libraries                 
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
      <section class="content-section benefits">
        <div class="section-heading-container row">
          <div class="small-12 columns">
            <h2 class="section-heading">Benefits</h2>
            <h5 class="subhead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>      
          </div>
        </div>
        <div class="points-for-benefits">
          <div class="points-for-benefits-content row">
            <div class="topic-point medium-4 small-12 columns">
              <a href="#">
                <img src="http://placehold.it/100x100" class="content-icon" alt="Key Value Store">        
              </a>
              <h4><a href="#">Elastic Scalability</a></h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris magna, vulputate ac efficitur ac.</p>
            </div>
            <div class="topic-point medium-4 small-12 columns">
              <a href="#">
                <img src="http://placehold.it/100x100" class="content-icon" alt="Query">        
              </a>
              <h4><a href="#">Always On Architecture</a></h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris magna, vulputate ac efficitur ac.</p>
            </div>
            <div class="topic-point medium-4 small-12 columns">
              <a href="#">            
                <img src="http://placehold.it/100x100" class="content-icon" alt="User-Defined Functions">        
              </a>
              <h4><a href="#">High Performance</a></h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris magna, vulputate ac efficitur ac.</p>
            </div> 
          </div>
          <div class="points-for-benefits-content row">
            <div class="topic-point medium-4 small-12 columns">
              <a href="#">
                <img src="http://placehold.it/100x100" class="content-icon" alt="Aggregations">        
              </a>
              <h4><a href="#">Flexible Data Model</a></h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris magna, vulputate ac efficitur ac.</p>
            </div>
            <div class="topic-point medium-4 small-12 columns">
              <a href="#">
                <img src="http://placehold.it/100x100" class="content-icon" alt="Data Types">        
              </a>
              <h4><a href="#">Flash Optimized</a></h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris magna, vulputate ac efficitur ac.</p>
            </div>
            <div class="topic-point medium-4 small-12 columns">
              <a href="#">
                <img src="http://placehold.it/100x100" class="content-icon" alt="Large Data Types">        
              </a>
              <h4><a href="#">Ease of Administration</a></h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris magna, vulputate ac efficitur ac.</p>
            </div> 
          </div>
          <div class="points-for-benefits-content row">
            <div class="topic-point medium-4 small-12 columns">
              <a href="#">
                <img src="http://placehold.it/100x100" class="content-icon" alt="Aggregations">        
              </a>
              <h4><a href="#">Developer Friendly</a></h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris magna, vulputate ac efficitur ac.</p>
            </div>
            <div class="topic-point medium-4 small-12 columns">
              <a href="#">
                <img src="http://placehold.it/100x100" class="content-icon" alt="Data Types">        
              </a>
              <h4><a href="#">Store Large Objects</a></h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris magna, vulputate ac efficitur ac.</p>
            </div>
            <div class="topic-point medium-4 small-12 columns">
              <a href="#">
                <img src="http://placehold.it/100x100" class="content-icon" alt="Large Data Types">        
              </a>
              <h4><a href="#">High Performance Clients</a></h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris magna, vulputate ac efficitur ac.</p>
            </div> 
          </div>          
          <div class="call-to-action row">
            <div class="small-12 columns">
              <a href="benefits.php" class="button secondary">Learn More About Benefits</a>
            </div>
          </div>
        </div>
      </section>          
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