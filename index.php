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
        <div class="row">
          <div class="small-12 medium-6 medium-offset-6 columns">
            <h1 class="hero-heading hero-unit">The world's first flash-optimized, in-memory, NoSQL database <strong>is now open-source</strong>.</h1>
            <p class="lead hero-unit">We handle real-time big data faster, we scale more reliably, and what’s really surprising, we cost less too! Build your first app using the world’s first, flash-optimized, in-memory, NoSQL database.</p>
            <a href="getting-started.php" class="button large">Get Started Now</a>
            <p>or <a href="technologies.php" class="technologies-link-on-homepage link-button">Learn About Our Technologies</a></p>
          </div>
        </div>
      </section>
      <section class="content-section features">
        <div class="section-heading-container row">
          <div class="small-12 columns">
            <h2 class="section-heading">Features</h2>
            <h5 class="subhead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>      
          </div>
        </div>
        <div class="points-for-features">
          <div class="points-for-features-content row">
            <div class="topic-point medium-4 small-12 columns">
              <a href="#">
                <img src="http://placehold.it/100x100" class="content-icon" alt="Key Value Store">        
              </a>
              <h4><a href="#">Key Value Store</a></h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris magna, vulputate ac efficitur ac.</p>
            </div>
            <div class="topic-point medium-4 small-12 columns">
              <a href="#">
                <img src="http://placehold.it/100x100" class="content-icon" alt="Query">        
              </a>
              <h4><a href="#">Query</a></h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris magna, vulputate ac efficitur ac.</p>
            </div>
            <div class="topic-point medium-4 small-12 columns">
              <a href="#">            
                <img src="http://placehold.it/100x100" class="content-icon" alt="User-Defined Functions">        
              </a>
              <h4><a href="#">User-Defined Functions</a></h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris magna, vulputate ac efficitur ac.</p>
            </div> 
          </div>
          <div class="points-for-features-content last row">
            <div class="topic-point medium-4 small-12 columns">
              <a href="#">
                <img src="http://placehold.it/100x100" class="content-icon" alt="Aggregations">        
              </a>
              <h4><a href="#">Aggregations</a></h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris magna, vulputate ac efficitur ac.</p>
            </div>
            <div class="topic-point medium-4 small-12 columns">
              <a href="#">
                <img src="http://placehold.it/100x100" class="content-icon" alt="Data Types">        
              </a>
              <h4><a href="#">Data Types</a></h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris magna, vulputate ac efficitur ac.</p>
            </div>
            <div class="topic-point medium-4 small-12 columns">
              <a href="#">
                <img src="http://placehold.it/100x100" class="content-icon" alt="Large Data Types">        
              </a>
              <h4><a href="#">Large Data Types</a></h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris magna, vulputate ac efficitur ac.</p>
            </div> 
          </div>
          <div class="call-to-action row">
            <div class="small-12 columns">
              <a href="features.php" class="button">Learn More About Features</a>
            </div>
          </div>
        </div>
      </section> 
      <section class="content-section architecture">
        <div class="section-heading-container row">
          <div class="small-12 columns">
            <h2 class="section-heading">Aerospike Architecture</h2>
            <h5 class="subhead">Aerospike is <strong>distributed and scalable NoSQL database</strong> architected to create a flexible, scalable platform that meets the needs of today’s web-scale applications, provides the robustness and <strong>ACID reliability</strong> expected from traditional databases, and is <strong>operationally efficient</strong>.</h5>      
          </div>
        </div>
        <div class="points-for-architecture">
          <div class="points-for-architecture-content row">
            <div class="small-12 columns">
              <ul class="tabs architecture-points" data-tab>
                <li class="tab-title">
                  <a href="#architecture-overview">
                    <img src="http://placehold.it/40x40" class="content-icon" alt="Overview">        
                    <h4>Overview</h4>
                    <p class="lead small">Lorem ipsum dolor sit amet</p>
                  </a>
                </li>
                <li class="tab-title active">
                  <a href="#architecture-data-management">
                    <img src="http://placehold.it/40x40" class="content-icon" alt="Data Management">        
                    <h4>Data Management</h4>
                    <p class="lead small">Lorem ipsum dolor sit amet</p>    
                  </a>                
                </li>
                <li class="tab-title">
                  <a href="#architecture-distribution">
                    <img src="http://placehold.it/40x40" class="content-icon" alt="Distribution">        
                    <h4>Distribution</h4>
                    <p class="lead small">Lorem ipsum dolor sit amet</p>      
                  </a>              
                </li>
                <li class="tab-title">
                  <a href="#architecture-udf">
                    <img src="http://placehold.it/40x40" class="content-icon" alt="User Defined Functions">        
                    <h4>User Defined Functions</h4>
                    <p class="lead small">Lorem ipsum dolor sit amet</p>    
                  </a>                
                </li>
              </ul>
              <div class="tabs-content">
                <div class="content" id="architecture-overview">
                  <p>This is the first panel of the basic tab example. You can place all sorts of content here including a grid.</p>
                </div>
                <div class="content active" id="architecture-data-management">
                  <div class="content-container">
                    <div class="row">
                      <div class="medium-5 small-12 columns">
                        <img src="http://placehold.it/600x600" class="content-diagram" alt="Aerospike Architecture">
                      </div>
                      <div class="medium-7 small-12 columns">
                        <h3 class="article-heading">Aerospike Architecture</h3>
                        <p class="lead large">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas justo.</p>
                        <ul>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas justo. Suspendisse potenti. Nunc ut mauris facilisis, ultricies tellus sed, sodales purus.</li>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas justo. Suspendisse potenti. Nunc ut mauris facilisis, ultricies tellus sed, sodales purus.</li>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas justo.</li>
                        </ul>
                        <a href="#" class="link-button">Learn More About Aerospike Architecture ></a>
                      </div>
                    </div>
                  </div>
                </div>                
                <div class="content" id="architecture-distribution">
                  <p>This is the first panel of the basic tab example. You can place all sorts of content here including a grid.</p>
                </div>        
                <div class="content" id="architecture-udf">
                  <p>This is the first panel of the basic tab example. You can place all sorts of content here including a grid.</p>
                </div>     
              </div>
            </div>
          </div>
        </div>
      </section>   
      <section class="content-section case-studies">
        <div class="section-heading-container row">
          <div class="small-12 columns">
            <h2 class="section-heading">Success Stories</h2>
            <h5 class="subhead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><a href="#" class="link-button">See success stories for all industries</a></h5>      
          </div>
        </div>
        <div class="points-for-success-stories">
          <div class="points-for-success-stories-content row">
            <div class="small-12 medium-6 columns">
              <img src="http://placehold.it/400x200" class="success-story-thumbnail" alt="AppNexus">
              <h4>
                <a href="#" class="success-story-category">AdTech</a>
                <span>AppNexus</span>
              </h4>
              <p class="lead">AppNexus is the world’s largest, independent, real-time ad technology platform powering the most innovative trading solutions and marketplaces for Internet advertising.</p>
              <p class="lead"><strong>Why AppNexus chose Aerospike over other databases</strong></p>
              <blockquote>
                We run Aerospike heavily, peaking at <strong>3 million reads per second</strong> and well <strong>over 1 1/2 million writes a second</strong> in a <strong>very cost effective way</strong>. I don’t think there’s any technology we’ve run into that even comes close. 
                <cite>Geir Magnusson, CTO of AppNexus.</cite>
              </blockquote>
              <a href="#" class="link-button">See AppNexus customer success story</a>
            </div>
            <div class="small-12 medium-6 columns">
              <img src="http://placehold.it/400x200" class="success-story-thumbnail" alt="SnapDeal">
              <h4>
                <a href="#" class="success-story-category">E-Commerce</a>
                <span>SnapDeal</span>
              </h4>
              <p class="lead">With 500% growth in 2013 and revenue projected to exceed $1 billion by 2015, Snapdeal is what many people would consider an overnight success story.</p>
              <p class="lead"><strong>Why SnapDeal choose Aerospike over other databases</strong></p>
              <blockquote>
                There has been <strong>no need for maintenance with Aerospike</strong>; it just works out of the box.
                <cite>Amitabh Misra, VP of Engineering</cite>
              </blockquote>
              <a href="#" class="link-button">See SnapDeal customer success story</a>              
            </div>            
          </div>
        </div>
        <div class="points-for-success-stories">
          <div class="points-for-success-stories-content row">
            <div class="small-12 medium-6 columns">
              <img src="http://placehold.it/400x200" class="success-story-thumbnail" alt="AppNexus">
              <h4>
                <a href="#" class="success-story-category">Travel</a>
                <span>Kayak</span>
              </h4>
              <p class="lead">Operating in 34 countries and 18 languages, KAYAK enables travelers to easily compare hundreds of travel sites with one search and processes over one billion queries a year.</p>
              <p class="lead"><strong>Why Kayak chose Aerospike over other databases</strong></p>
              <blockquote>
                Aerospike filled a gap for KAYAK that other caching and database technologies could not, enabling <strong>multi-key gets in less than 3 milliseconds and deploying with ease and scale with very low jitter</strong>.
                <cite>Ko Baryiames, SVP Technology</cite>
              </blockquote>
              <a href="#" class="link-button">See AppNexus customer success story</a>
            </div>
            <div class="small-12 medium-6 columns">
              <img src="http://placehold.it/400x200" class="success-story-thumbnail" alt="SnapDeal">
              <h4>
                <a href="#" class="success-story-category">Financial</a>
                <span>Charles Schwab</span>
              </h4>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dictum massa at erat egestas, ut laoreet orci blandit. Donec venenatis in sapien in lobortis.</p>
              <p class="lead"><strong>Why Charles Schwab choose Aerospike over other databases</strong></p>
              <blockquote>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dictum massa at erat egestas, ut laoreet orci blandit. Donec venenatis in sapien in lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                <cite>Alec Aerospiked, Director of Technology</cite>
              </blockquote>
              <a href="#" class="link-button">See Charles Schwab customer success story</a>              
            </div>            
          </div>
        </div>
      </section>
      <section class="content-section event">
        <div class="section-heading-container row">
          <div class="small-12 columns">
            <h2 class="section-heading">
              <span class="metadata">Upcoming Event &bull; 4/12/2015 in Las Vegas</span>
              Aerospike Las Vegas 2015
            </h2>
            <h5>Replatforming on Aerospike DB</h5>
            <p class="lead hero-unit">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis vehicula enim, et lobortis libero. Duis at quam augue. In egestas scelerisque semper. Donec varius eros in pellentesque egestas. Nam nisi felis, commodo ac bibendum eu, facilisis quis turpis. Proin ultricies faucibus est quis pharetra. </p>
            <a href="events.php" class="button">Learn More</a>
          </div>
        </div>
      </section>
      <section class="content-section brands">
        <div class="section-heading-container row">
          <div class="small-12 columns">
            <h3 class="article-heading">
              Trusted by the World's Biggest Brands
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="small-6 medium-3 columns">
            <a href="#">
              <img src="http://placehold.it/200x100" alt="SnapDeal">
            </a>
          </div>
          <div class="small-6 medium-3 columns">
            <a href="#">
              <img src="http://placehold.it/200x100" alt="The Trade Desk">
            </a>            
          </div>
          <div class="small-6 medium-3 columns">
            <a href="#">
              <img src="http://placehold.it/200x100" alt="Convert Media">
            </a>            
          </div>
          <div class="small-6 medium-3 columns">
            <a href="#">
              <img src="http://placehold.it/200x100" alt="Komli">
            </a>            
          </div>
        </div>
      </section>     
      <section class="content-section cta-get-started">
        <div class="section-heading-container row">
          <div class="medium-6 medium-centered large-centered columns">
            <h2 class="section-heading">Build Your First App Today</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu eros vitae diam lacinia luctus. Donec id orci sapien.</p>
            <a href="#" class="button">Download Community Edition</a>
            <p>or <a href="#" class="link-button">Try Burro Now</a></p>
          </div>
        </div>
      </section> 
      <?php include("includes/site-footer.php"); ?>
    </section>
    <a class="exit-off-canvas"></a>
  </div>
</div>
<?php include("includes/foot.php"); ?>