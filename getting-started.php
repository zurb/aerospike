<?php
  $pageTitle = "Aerospike | Getting Started";
  $bodyClass = "getting-started";
?>
<?php include("includes/aerospike-server-downloads.php"); ?> 
<?php include("includes/aerospike-client-downloads.php"); ?>                           
<?php include("includes/aerospike-mgmt-console-downloads.php"); ?>                           
<?php include("includes/head.php"); ?>
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <?php include("includes/nav.php"); ?>
    <section class="main-section">
      <section class="hero inner-pages short-hero">
        <img src="images/white-triangle-mask-xlarge.svg" alt="mask" class="hero-mask">    
      </section>
      <div class="utility-page row">
        <div class="small-12 columns">
          <div data-magellan-expedition="fixed">
            <ul class="sub-nav three-tabs">
              <li><a href="#">Overview</a></li>
              <li><a href="#">Try Aerospike Burro</a></li>
              <li class="is-selected"><a href="#" class="active">Download Aerospike</a></li>              
            </ul>
          </div>
          <div class="split-page-content">
            <section class="content-section download-aerospike">
              <div class="section-heading-container row">
                <div class="small-12 columns">
                  <h3 class="article-heading">Download Aerospike</h3>
                  <h5 class="subhead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae pharetra est, id egestas felis. Sed tincidunt ut mi in lobortis. In faucibus imperdiet diam.</h5>      
                </div>
              </div>
              <ul class="tabs two-tabs-aerospike-downloads" data-tab>
                <li class="tab-title active">
                  <a href="#aerospike-server-client">
                    <h5>Server &amp; Clients</h5>
                  </a>
                </li>
                <li class="tab-title">
                  <a href="#aerospike-mgmt-console">
                    <h5>Management Console</h5>
                  </a>                
                </li>
              </ul>
              <div class="tabs-content">
                <div class="content active" id="aerospike-server-client">
                  <div class="content-container">
                    <div class="row">
                      <div class="aerospike-downloads large-6 medium-12 columns">
                        <div class="download-container container-left">
                          <h3 class="article-heading">Aerospike Server</h3>
                          <p class="lead">
                            <strong>
                              Community Edition &bull; Version: 3.5.4 (March 10 2015)                               
                            </strong>
                          </p>
                          <p class="lead">
                            Aerospike Server Community Edition (CE) is available as a package for various Linux distributions. Each package contains a server installer and a tools installer. The tools installer provides basic data validation and management utilities.
                            The Linux package contains a build of the server that suits any modern distribution, and does not require superuser privileges. This download is similar to building the source directly.
                            <br>
                            To explore the capabilities of Aerospike, you will want to download a <a href="#" class="primary">client library</a> with benchmarks and examples.                     
                          </p>
                          <ul class="download-list">
                            <?php foreach($aerospike_server_downloads as $server_downloads) { ?> 
                            <li class="download-item">
                              <ul class="download-item-content">
                                <li class="download-item-desc">
                                  <h6><?php echo $server_downloads['download_item_name'] ?></h6>
                                  <span class="metadata"><?php echo $server_downloads['download_item_metadata'] ?></span>                                  
                                </li>
                                <li class="download-item-action">
                                  <a href="#" class="button small secondary inline">Download</a>
                                </li>
                              </ul>
                            </li>
                            <?php } ?>
                          </ul>
                          <p class="download-note">The source code is available on <a href="#" class="primary">GitHub</a>.</p>
                          <p class="download-note">Read <a href="#" class="link-button">Release Notes</a></p>
                          <p class="download-note"><a href="#" class="link-button">See Aerospike 2.X</a></p>  
                        </div>                        
                      </div>
                      <div class="aerospike-downloads large-6 medium-12 columns">
                        <div class="download-container container-right">
                          <h3 class="article-heading">Aerospike Clients</h3>
                          <p class="lead">
                            <strong>
                              Community Edition                           
                            </strong>
                          </p>
                          <p class="lead">
                            Find the latest Aerospike Client library here for your favorite language. Client Library includes:
                          </p>
                          <ul class="what-comes-with-client-downloads">
                            <li>Source or binary for the language</li>
                            <li>Examples</li>
                            <li>Benchmark tool</li>
                          </ul>
                          <p class="lead">See <a href="#" class="primary">language-specific guides</a> to learn how to use our client APIs. View <a href="#" class="primary">feature guides</a> to learn about  Aerospike functionality.</p>
                          <ul class="download-list">
                            <?php foreach($aerospike_client_downloads as $client_downloads) { ?> 
                            <li class="download-item">
                              <ul class="download-item-content">
                                <li class="download-item-desc">
                                  <h6><?php echo $client_downloads['download_item_name'] ?></h6>
                                  <span class="metadata"><?php echo $client_downloads['download_item_metadata'] ?></span>                                  
                                </li>
                                <li class="download-item-action">
                                  <a href="#" class="button small secondary inline">Download</a>
                                </li>
                              </ul>
                            </li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content" id="aerospike-mgmt-console">
                  <div class="content-container">
                    <h3 class="article-heading">Aerospike Management Console</h3>
                    <p class="lead">
                      <strong>
                        Community Edition &bull; Version: 3.6.0 (April 29 2015)                               
                      </strong>
                    </p>                    
                    <div class="row">
                      <div class="medium-12 large-6 columns">
                        <div class="download-container container-left">
                          <p class="lead">
                            The Aerospike Management Console (AMC) Community Edition is a Web based tool to monitor/manage an Aerospike cluster. It provides live updates to the current status of a cluster.                
                          </p>
                          <h5>Live Updates For</h5>                          
                          <ul class="what-comes-with-client-downloads">
                            <li>Dashboard</li>
                            <li>Statistics</li>
                            <li>Jobs</li>
                            <li>Definitions</li>
                          </ul>  
                          <h5>Features</h5>
                          <ul class="what-comes-with-client-downloads">
                            <li>AER-3334: Cluster wide total and successful charts in Throughput section.</li>
                            <li>AER-3335: Customize which sections appear on the Dashboard by default.</li>
                            <li>Added simple statistics tracking.</li>
                          </ul>        
                          <h5>Fixes</h5>
                          <ul class="what-comes-with-client-downloads">
                            <li>AER-3564: Gracefully handle situation where a node in the cluster goes down.</li>
                            <li>AER-3126: Fix some stats that were only shown for seed node rather then whole cluster.</li>
                            <li>AER-3289: Fix Mac OS installation error.</li>
                          </ul>  
                          <p class="lead">
                            The following are options for downloading Aerospike Management Console CE 3.6.0. After the package download, you may refer to the installation guide for steps.
                          </p>     
                        </div>      
                      </div>
                      <div class="medium-12 large-6 columns">
                        <div class="download-container container-right">                      
                          <h5>Download Options</h5>                                                  
                          <ul class="download-list">
                            <?php foreach($aerospike_mgmt_console_downloads as $mgmt_console_downloads) { ?> 
                            <li class="download-item">
                              <ul class="download-item-content">
                                <li class="download-item-desc">
                                  <h6><?php echo $mgmt_console_downloads['download_item_name'] ?></h6>
                                  <span class="metadata"><?php echo $mgmt_console_downloads['download_item_metadata'] ?></span>                                  
                                </li>
                                <li class="download-item-action">
                                  <a href="#" class="button small secondary inline">Download</a>
                                </li>
                              </ul>
                            </li>
                            <?php } ?>
                          </ul>
                          <a href="#" class="button">Installation Guide</a>                                                        
                          <p class="download-note">Read <a href="#" class="link-button">Release Notes</a></p>
                        </div>
                      </div>          
                    </div>                                                                           
                  </div>
                </div>                
              </div>
            </section>   
            <section class="content-section get-started community-page">
              <div class="section-heading-container row">
                <div class="small-12 columns">
                  <h2 class="section-heading">Help Me Get Started</h2>
                  <h5 class="subhead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae pharetra est, id egestas felis. Sed tincidunt ut mi in lobortis. In faucibus imperdiet diam.</h5>      
                </div>
              </div>
              <div class="points-for-get-started">
                <div class="points-for-get-started-content row">
                  <div class="medium-4 small-12 columns">
                    <div class="get-started-container">
                      <a href="#">
                        <img src="http://placehold.it/400x300" class="get-started-thumbnail" alt="Examples">        
                      </a>
                      <div class="panel-content">
                        <h5><a href="#">Getting Started Guide</a></h5>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut rhoncus est. Vestibulum tristique vestibulum purus, et rutrum urna fermentum in.</p>
                        <a href="#" class="link-button">Learn More</a>
                      </div>
                    </div>
                  </div>
                  <div class="medium-4 small-12 columns">
                    <div class="get-started-container">
                      <a href="#">
                        <img src="http://placehold.it/400x300" class="get-started-thumbnail" alt="Examples">        
                      </a>
                      <div class="panel-content">
                        <h5><a href="#">Feature Guides</a></h5>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut rhoncus est. Vestibulum tristique vestibulum purus, et rutrum urna fermentum in.</p>
                        <a href="#" class="link-button">Learn More</a>
                      </div>
                    </div>
                  </div>
                  <div class="medium-4 small-12 columns">
                    <div class="get-started-container">
                      <a href="#">
                        <img src="http://placehold.it/400x300" class="get-started-thumbnail" alt="Examples">        
                      </a>
                      <div class="panel-content">
                        <h5><a href="#">Aerospike Architecture</a></h5>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut rhoncus est. Vestibulum tristique vestibulum purus, et rutrum urna fermentum in.</p>
                        <a href="#" class="link-button">Learn More</a>
                      </div>
                    </div>
                  </div> 
                </div>  
              </div>
            </section>   
            <section class="content-section product-offering">
              <div class="section-heading-container row">
                <div class="small-12 columns">
                  <h3 class="article-heading">Run Aerospike in the Cloud</h3>
                  <h5 class="subhead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae pharetra est, id egestas felis. Sed tincidunt ut mi in lobortis. In faucibus imperdiet diam.</h5>      
                </div>
              </div>
              <?php include("includes/cloud-product-offering.php"); ?>
            </section>   
          </div>
        </div>
      </div>
      <?php include("includes/event.php"); ?>
      <?php include("includes/brands.php"); ?>
      <?php include("includes/get-started-cta.php"); ?>
      <?php include("includes/site-footer.php"); ?>
    </section>
    <a class="exit-off-canvas"></a>
  </div>
</div>
<?php include("includes/foot.php"); ?>