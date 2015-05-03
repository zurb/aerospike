      <section class="content-section technology">
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
        <div class="points-for-technology">
          <div class="points-for-technology-content row">
            <div class="small-12 columns">
              <div class="tab-icons">
                <img src="images/architecture-icons.png" alt="Architecture icons"> 
              </div>
              <ul class="tabs" data-tab>
                <li class="tab-title active">
                  <a href="#technology-smart-cluster">
                    <h5>
                      Smart Cluster &#8482;
                    </h5>
                    <p class="lead small">
                      Replicates data synchronously                   
                    </p>    
                  </a>                
                </li>
                <li class="tab-title">
                  <a href="#technology-smart-client">
                    <h5>
                      Smart Client &#8482;  
                    </h5>
                    <p class="lead small">
                      Applications link to client libraries                    
                    </p>
                  </a>
                </li>
                <li class="tab-title">
                  <a href="#technology-xdr">
                    <h5>
                      Cross Datacenter Replication             
                    </h5>
                    <p class="lead small">
                      Applications link to client libraries                           
                    </p>      
                  </a>              
                </li>
                <li class="tab-title">
                  <a href="#technology-hybrid-memory-system">
                    <h5>
                      Hybrid Memory System
                    </h5>
                    <p class="lead small">
                      Lorem ipsum dolor sit amet                       
                    </p>      
                  </a>              
                </li>                
              </ul>
              <div class="tabs-content">
                <div class="content" id="technology-smart-cluster">
                  <div class="content-container">
                    <div class="row">
                      <div class="medium-5 small-12 columns">
                        <img src="images/architecture-diagram.png" class="content-diagram" alt="Overview">
                      </div>
                      <div class="medium-7 small-12 columns">
                        <h3 class="article-heading">Smart Cluster&#8482;</h3>
                        <p class="lead large">Aerospike Smart Cluster&#8482; has a shared-nothing architecture so there’s no single point of failure. Every node in the cluster is identical. You can start with a few nodes and when you want to scale up, just add more hardware&mdash;the Cluster scales linearly. Data is distributed evenly across the cluster using randomized key hashing to avoid hot spots. With a 24/7 reliability guarantee, the Aerospike Smart Client&#8482; replicates data synchronously for immediate consistency and is able to detect cluster failure, quickly recover and reform the cluster.</p>
                        <a href="#" class="link-button">Learn More About Smart Cluster</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content active" id="technology-smart-client">
                  <div class="content-container">
                    <div class="row">
                      <div class="medium-5 small-12 columns">
                        <img src="images/architecture-diagram.png" class="content-diagram" alt="Data Management">
                      </div>
                      <div class="medium-7 small-12 columns">
                        <h3 class="article-heading">Smart Client&#8482;</h3>
                        <p class="lead large">Aerospike Smart Client&#8482; is designed for speed and implemented as open source libraries available in Java, C#, Node.js, PHP, Go, Python, Ruby, C, Perl, Erlang, Libevent, etc. The architecture reduces transaction latency and makes data available in a single hop from the client. It tracks nodes and knows where data is stored in a cluster, instantly aware of configuration changes or when nodes are added or removed so you don’t have to restart your application or set up additional management servers or proxies. It efficiently handles its own TCP/IP connection pool.</p>
                        <a href="#" class="link-button">Learn More About Smart Client</a>
                      </div>
                    </div>
                  </div>
                </div>                
                <div class="content" id="technology-xdr">
                  <div class="content-container">
                    <div class="row">
                      <div class="medium-5 small-12 columns">
                        <img src="images/architecture-diagram.png" class="content-diagram" alt="Distribution">
                      </div>
                      <div class="medium-7 small-12 columns">
                        <h3 class="article-heading">Cross Datacenter Replication</h3>
                        <h5 class="subhead">Enterprise Feature</h5>
                        <p class="lead large">Aerospike Cross Data Center Replication(™) (XDR) manages replication asynchronously across clusters in different data centers for redundancy and disaster recovery. XDR monitors database updates on the "local" cluster and send copies of all write requests to one or more "remote" destination clusters. Data centers can be located closer to consumers for low latency in different geographies. </p>
                        <a href="#" class="link-button">Learn More About Cross Datacenter Replication</a>
                      </div>
                    </div>
                  </div>
                </div>        
                <div class="content" id="technology-udf">
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
                <div class="content" id="technology-hybrid-memory-system">
                  <div class="content-container">
                    <div class="row">
                      <div class="medium-5 small-12 columns">
                        <img src="images/architecture-diagram.png" class="content-diagram" alt="Hybrid Memory System">
                      </div>
                      <div class="medium-7 small-12 columns">
                        <h3 class="article-heading">Hybrid Memory System</h3>
                        <p class="lead large">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="link-button">Learn More About Hybrid Memory System</a>
                      </div>
                    </div>
                  </div>
                </div>                     
              </div>
            </div>
          </div>
        </div>
      </section>   