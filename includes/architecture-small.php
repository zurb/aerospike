<section class="content-section architecture subtle-callout">
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
        <ul class="accordion" data-accordion>
          <li class="accordion-navigation">
            <a href="#architecture-data-management">
              <h5>
                Clients
              </h5>
              <p class="lead small">
                Lorem ipsum dolor sit amet                   
              </p>
            </a>
            <div class="content" id="architecture-data-management">
              <div class="content-container">
                <div class="row">
                  <div class="medium-5 small-12 columns">
                    <img src="images/architecture-diagram-data-management.png" class="content-diagram" alt="Clients">
                  </div>
                  <div class="small-12 columns">
                    <h3 class="article-heading">Clients</h3>
                    <p class="lead large">Expose APIs for storing and retrieving data and implement a client-server protocol making them cluster aware&mdash;tracking where data is stored and when nodes are added or removed.</p>
                    <ul>
                      <li>First class observer of the cluster</li>
                      <li>Open source libraries and packages in 10+ languages including Node.js, Java, C#, PHP, Go and more</li>
                      <li>Detects transaction failures and re-routes requests to nodes with copies of data </li>
                      <li>Pools TCP/IP connections</li>
                      <li>Allows for arbitrary strings, integers, blobs, lists, and maps in bins (columns / fields) and JSON objects</li>
                      <li>Supports Check-And-Set and Atomic operations</li>
                    </ul>
                    <a href="#" class="link-button">Learn More About Our Client Layer</a>
                  </div>
                </div>
              </div>
            </div>            
          </li>
          <li class="accordion-navigation">
            <a href="#architecture-data-distribution">
              <h5>
                Cluster
              </h5>
              <p class="lead small">
                Lorem ipsum dolor sit amet                   
              </p>    
            </a> 
            <div class="content" id="architecture-data-distribution">
              <div class="content-container">
                <div class="row">
                  <div class="medium-5 small-12 columns">
                    <img src="images/smart-client.png" class="content-diagram" alt="Smart Client">
                  </div>
                  <div class="medium-7 small-12 columns">
                    <h3 class="article-heading">Cluster</h3>
                    <p class="lead large">The Aerospike “shared nothing” architecture is designed to reliably store data with automatic failover, replication and cross data-center synchronization.</p>
                    <ul>
                      <li>Special heartbeat monitors inter-node connectivity</li>
                      <li>Paxos-like consensus voting process determines which nodes are considered part of the cluster when a node is added or removed</li>
                      <li>Distributed hash algorithm divides the primary index space into data 'slices' and assign owners</li>
                      <li>Unique random data distribution ensures equal load across all cluster nodes for predictable low latency</li>
                      <li>SPF Zero</li>
                      <li>Data migration module re-distributes data when clusters are reconfigured</li>
                      <li>Supports immediate and eventual consistency</li>
                    </ul>
                    <a href="#" class="link-button">Learn More About Our Clustering</a>
                  </div>
                </div>
              </div>
            </div>                              
          </li>
          <li class="accordion-navigation">
            <a href="#architecture-client-layer">
              <h5>
                Storage
              </h5>
              <p class="lead small">
                Lorem ipsum dolor sit amet                        
              </p>      
            </a>  
            <div class="content" id="architecture-client-layer">
              <div class="content-container">
                <div class="row">
                  <div class="medium-5 small-12 columns">
                    <img src="images/architecture-diagram-client-architecture.png" class="content-diagram" alt="Storage">
                  </div>
                  <div class="medium-7 small-12 columns">
                    <h3 class="article-heading">Storage</h3>
                    <p class="lead large">Aerospike can store data in DRAM, Flash (SSDs), and traditional rotating media.</p>
                    <ul>
                      <li>Indexes in RAM for high performance and parallelism</li>
                      <li>Multiple data storage models</li>
                      <li>Schema-less data model</li>
                      <li>Write batching for high ingest speeds</li>
                      <li>Built-in defragmentation</li>
                      <li>Integrated continual data eviction and expiration</li>
                      <li>Large block writes and small block reads for high performance</li>
                    </ul>
                    <a href="#" class="link-button">Learn More About Our Storage</a>
                  </div>
                </div>
              </div>
            </div>                           
          </li>
          <li class="accordion-navigation">
            <a href="#architecture-udf">
              <h5>
                Queries
              </h5>
              <p class="lead small">
                Lorem ipsum dolor sit amet                  
              </p>    
            </a>      
            <div class="content" id="architecture-udf">
              <div class="content-container">
                <div class="row">
                  <div class="medium-5 small-12 columns">
                    <img src="images/architecture-diagram.png" class="content-diagram" alt="Queries">
                  </div>                  
                  <div class="medium-7 small-12 columns">
                    <h3 class="article-heading">Queries</h3>
                    <p class="lead large">Provides value-based lookup through the use of bins (columns) and secondary indexes.</p>
                    <ul>
                      <li>Executes on all nodes in parallel&mdash;in scatter-gather pattern</li>
                      <li>Supports Equality and Range filters</li>
                      <li>Enables aggregations through programmatic indexed-MapReduce</li>
                      <li>Aggregation system is implemented using User Defined Functions (UDFs) written in Lua</li>
                    </ul>
                    <a href="#" class="link-button">Learn More About Our Queries</a>
                  </div>
                </div>
              </div>
            </div>                          
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>   