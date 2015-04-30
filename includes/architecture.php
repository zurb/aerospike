<section class="content-section architecture">
  <div class="section-heading-container row">
    <div class="small-12 columns">
      <h2 class="section-heading">
        <?php 
          if($bodyClass==="homepage") { 
            echo "Aerospike Architecture";
          } 
          elseif($bodyClass==="technologies") { 
            echo "The Technology";
          }
          else { 
            echo "Lorem ipsum";
          }
        ?>
      </h2>
      <h5 class="subhead">
        <?php 
          if($bodyClass==="homepage") { 
            echo "Aerospike is <strong>distributed and scalable NoSQL database</strong> architected to create a flexible, scalable platform that meets the needs of today’s web-scale applications, provides the robustness and <strong>ACID reliability</strong> expected from traditional databases, and is <strong>operationally efficient</strong>.";
          } 
          elseif($bodyClass==="technologies") { 
            echo "Aerospike’s <strong>distributed 'Shared-Nothing' architecture</strong> is designed and built to <strong>reliably store data</strong> with <strong>automatic failover</strong>, replication with <strong>immediate consistency</strong> within the cluster and <strong>cross data-center synchronization</strong>. Since the data is distributed evenly and randomly across all nodes within the cluster, it also offers predictable performance where access to every piece of data using its primary key has the same latency. It scales linearly and is also designed to eliminate manual operations with the systematic automation of all cluster management functions.";
          }
          else { 
            echo "Lorem ipsum";
          }
        ?>
      </h5>      
    </div>
  </div>
  <div class="points-for-architecture">
    <div class="points-for-architecture-content row">
      <div class="small-12 columns">
        <div class="architecture-icons">
          <img src="images/architecture-icons.png" alt="Architecture icons"> 
        </div>
        <ul class="tabs architecture-points" data-tab>
          <li class="tab-title even-3">
            <a href="#architecture-overview">
              <img src="http://placehold.it/40x40" class="content-icon" alt="Overview">        
              <h5>
                <?php 
                  if($bodyClass==="homepage") { 
                    echo "Overview";
                  } 
                  elseif($bodyClass==="technologies") { 
                    echo "Smart Client";
                  }
                  else { 
                    echo "Lorem ipsum";
                  }
                ?>                
              </h5>
              <p class="lead small">
                <?php 
                  if($bodyClass==="homepage") { 
                    echo "Lorem ipsum dolor sit amet";
                  } 
                  elseif($bodyClass==="technologies") { 
                    echo "Applications link to client libraries";
                  }
                  else { 
                    echo "Lorem ipsum";
                  }
                ?>                     
              </p>
            </a>
          </li>
          <li class="tab-title active even-3">
            <a href="#architecture-data-management">
              <img src="http://placehold.it/40x40" class="content-icon" alt="Data Management">        
              <h5>
                <?php 
                  if($bodyClass==="homepage") { 
                    echo "Data Management";
                  } 
                  elseif($bodyClass==="technologies") { 
                    echo "Smart Cluster";
                  }
                  else { 
                    echo "Lorem ipsum";
                  }
                ?>   
              </h5>
              <p class="lead small">
                <?php 
                  if($bodyClass==="homepage") { 
                    echo "Lorem ipsum dolor sit amet";
                  } 
                  elseif($bodyClass==="technologies") { 
                    echo "Replicates data synchronously ";
                  }
                  else { 
                    echo "Lorem ipsum";
                  }
                ?>                     
              </p>    
            </a>                
          </li>
          <li class="tab-title even-3">
            <a href="#architecture-distribution">
              <img src="http://placehold.it/40x40" class="content-icon" alt="Distribution">        
              <h5>
                <?php 
                  if($bodyClass==="homepage") { 
                    echo "Distribution";
                  } 
                  elseif($bodyClass==="technologies") { 
                    echo "Cross Datacenter Replication";
                  }
                  else { 
                    echo "Lorem ipsum";
                  }
                ?>                   
              </h5>
              <p class="lead small">
                <?php 
                  if($bodyClass==="homepage") { 
                    echo "Lorem ipsum dolor sit amet";
                  } 
                  elseif($bodyClass==="technologies") { 
                    echo "Applications link to client libraries";
                  }
                  else { 
                    echo "Lorem ipsum";
                  }
                ?>                            
              </p>      
            </a>              
          </li>
          <li class="tab-title even-3">
            <a href="#architecture-udf">
              <img src="http://placehold.it/40x40" class="content-icon" alt="User Defined Functions">        
              <h5>
                <?php 
                  if($bodyClass==="homepage") { 
                    echo "User Defined Functions";
                  } 
                  elseif($bodyClass==="technologies") { 
                    echo "Hybrid Memory System";
                  }
                  else { 
                    echo "Lorem ipsum";
                  }
                ?>                  
              </h5>
              <p class="lead small">
                <?php 
                  if($bodyClass==="homepage") { 
                    echo "Lorem ipsum dolor sit amet";
                  } 
                  elseif($bodyClass==="technologies") { 
                    echo "Applications link to client libraries";
                  }
                  else { 
                    echo "Lorem ipsum";
                  }
                ?>                    
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