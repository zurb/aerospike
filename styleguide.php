<?php
  $pageTitle = "Styleguide";
  $bodyClass = "styleguide";
?>
<?php include("includes/head.php"); ?>
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <div class="mobile-header">
      <nav class="tab-bar hide-for-large-up">
        <section class="left-small">
          <h1 class="logo">
            <a href="index.php">
              <span>Aerospike</span>
            </a>
          </h1>
        </section>
        <section class="right-small">
          <a class="right-off-canvas-toggle menu-icon" href="#"><span></span></a>
        </section>
      </nav>
    </div>

    <nav class="top-nav show-for-large-up">
      <div class="row">
        <div class="small-12 columns">
          <h1 class="logo">
            <a href="index.php">
              <span>Aerospike</span>
            </a>
          </h1>
          <ul class="nav-products left">
            <li>
              <a href="#">Wireframes</a>
            </li>
            <li>
              <a href="#">Creative Direction</a>
            </li>  
            <li>
              <a href="#">Front-End Code</a>
            </li>                
          </ul>
          <ul class="nav-auxiliary right hide-for-small">
            <li>
              <a href="#" class="active">Styleguide</a>
            </li>
            <li>
              <a href="#">Opportunities</a>
            </li>
            <li>
              <a href="#">Low-Fi Sketches</a>
            </li>    
            <li>
              <a href="#" class="getting-started-button inverted-button button tiny">Finished Project</a>
            </li>        
          </ul>
        </div>
      </div>
    </nav>
    <aside class="right-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><a href="index.php">Home</a></li>
        <li><a href="technologies.php">Technologies</a></li>
        <li><a href="services-support.php">Services &amp; Support</a></li>
        <li><a href="docs.php">Docs</a></li>
        <li><a href="community.php">Community</a></li>
        <li><a href="company.php">Company</a></li>
        <li class="getting-started-offcanvas-cta"><a href="getting-started.php" class="button inverted-button">Get Started Today</a></li>
      </ul>
    </aside>    

    <section class="main-section">
      <section class="hero inner-pages">
        <?php include("includes/image-mask.php"); ?> 
        <div class="row">
          <div class="small-12 medium-10 large-9 medium-centered large-centered columns">
            <h1 class="hero-heading hero-unit">
              <span class="metadata">&nbsp;</span>
              Aerospike Styleguide
            </h1>
            <p>This website was built with Foundation 5. For more information on how to use it, check out the the <a href="http://foundation.zurb.com/docs/">Foundation Docs &raquo;</a></p>
          </div>
        </div>
      </section>

    <div class="row styleguide-readable-area">
      <div class="medium-3 small-12 columns">
        <div class="component-library-list">
          <h4>Foundation Components</h4>        
          <ul class="link-list">
            <li><a href="#gridComponent">Grid</a></li>
            <li><a href="#cssComponent">CSS</a></li>
            <li><a href="#colorsComponent">Colors</a></li>
            <li><a href="#typeComponent">Type</a></li>
            <li><a href="#buttonsComponent">Buttons</a></li>
            <li><a href="#formsComponent">Forms</a></li>
          </ul>
          <h4>Aerospike Mobile Components</h4>
          <p class="sidenote">These components we didn't code in our 5 page coded prototype, but were in the top-level wireframes we developed. You'll need these for developing the Aerospike website.</p>        
          <ul class="link-list">
            <li><a href="#componentName">Component Name</a></li>
            <li><a href="#componentName">Component Name</a></li>
          </ul>          
        </div>
      </div>
      <div class="medium-9 small-12 columns">
        <section id="gridComponent" class="grid-component style-component">
          <div class="content">
            <div class="row">
              <div class="medium-12 columns">
                <div>
                  <h2>The Grid</h2>
                  <p class="subhead"><strong>Problem:</strong> You've got tons of content, each needing different sized vertical columns, and don't know how to quick and easily get it all done. <br/><strong>Solution:</strong> The awesome grid!</p>
                </div>

                <h4>The Grid</h4>
                <p>The grid is built around three key elements: containers, rows, and columns. Containers create base padding for the page; rows create a max-width and contain the columns; and columns create the final structure. Everything on your page that you don't give a specific structural style to should be within a container, row and column.</p>
                <h4>Nesting Support</h4>
                <p>In the Grid you can nest columns down as far as you'd like. Just embed rows inside columns and go from there. Each embedded row can contain up to 12 columns.</p>
              </div>
            </div>
            <div class="row">
              <div class="medium-12 columns">
                <h4>How to Use</h4>
                <p>Using this framework is easy. Here's how your code will look when you use a series of <code>&#60;div&#62;</code> tags to create vertical columns.</p>
                <h4>Grid Example</h4>
                <div class="row display">
                  <div class="small-2 medium-4 columns"><span class="show-for-small">2</span><span class="hide-for-small">4</span></div>
                  <div class="small-4 medium-4 columns">4</div>
                  <div class="small-6 medium-4 columns"><span class="show-for-small">6</span><span class="hide-for-small">4</span></div>
                </div>
                <div class="row display">
                  <div class="medium-3 columns"><span class="show-for-small">full</span><span class="hide-for-small">3</span></div>
                  <div class="medium-6 columns"><span class="show-for-small">full</span><span class="hide-for-small">6</span></div>
                  <div class="medium-3 columns"><span class="show-for-small">full</span><span class="hide-for-small">3</span></div>
                </div>
                <div class="row display">
                  <div class="small-6 medium-2 columns"><span class="show-for-small">6</span><span class="hide-for-small">2</span></div>
                  <div class="small-6 medium-8 columns"><span class="show-for-small">6</span><span class="hide-for-small">8</span></div>
                  <div class="small-12 medium-2 columns"><span class="show-for-small">full</span><span class="hide-for-small">2</span></div>
                </div>
                <div class="row display">
                  <div class="small-3 columns">3</div>
                  <div class="small-9 columns">9</div>
                </div>
                <div class="row display">
                  <div class="medium-4 columns"><span class="show-for-small">full</span><span class="hide-for-small">4</span></div>
                  <div class="medium-8 columns"><span class="show-for-small">full</span><span class="hide-for-small">8</span></div>
                </div>
                <div class="row display">
                  <div class="small-6 medium-5 columns"><span class="show-for-small">6</span><span class="hide-for-small">5</span></div>
                  <div class="small-6 medium-7 columns"><span class="show-for-small">6</span><span class="hide-for-small">7</span></div>
                </div>
                <div class="row display">
                  <div class="medium-6 columns"><span class="show-for-small">full</span><span class="hide-for-small">6</span></div>
                  <div class="medium-6 columns"><span class="show-for-small">full</span><span class="hide-for-small">6</span></div>
                </div>
                <h5>Code</h5>
                <pre>
                  <code class="language-markup">
&lt;div class="row">
  &lt;div class="small-2 medium-4 columns">&lt;/div>
  &lt;div class="small-4 medium-4 columns">&lt;/div>
  &lt;div class="small-6 medium-4 columns">&lt;/div>
&lt;/div>
&lt;div class="row">
  &lt;div class="medium-3 columns">&lt;/div>
  &lt;div class="medium-6 columns">&lt;/div>
  &lt;div class="medium-3 columns">&lt;/div>
&lt;/div>
&lt;div class="row">
  &lt;div class="small-6 medium-2 columns">&lt;/div>
  &lt;div class="small-6 medium-8 columns">&lt;/div>
  &lt;div class="small-12 medium-2 columns">&lt;/div>
&lt;/div>
&lt;div class="row">
  &lt;div class="small-3 columns">&lt;/div>
  &lt;div class="small-9 columns">&lt;/div>
&lt;/div>
&lt;div class="row">
  &lt;div class="medium-4 columns">&lt;/div>
  &lt;div class="medium-8 columns">&lt;/div>
&lt;/div>
&lt;div class="row">
  &lt;div class="small-6 medium-5 columns">&lt;/div>
  &lt;div class="small-6 medium-7 columns">&lt;/div>
&lt;/div>
&lt;div class="row">
  &lt;div class="medium-6 columns">&lt;/div>
  &lt;div class="medium-6 columns">&lt;/div>
&lt;/div>
                  </code>
                </pre>
                <h4>Nesting Rows</h4>
                <p>In the Grid you can nest columns down as far as you'd like. Just embed rows inside columns and go from there. Each embedded row can contain up to 12 columns.</p>
                <h4>Example</h4>
                <div class="row display">
                   <div class="small-8 columns">8
                     <div class="row">
                       <div class="small-8 columns">8 Nested
                         <div class="row">
                           <div class="small-8 columns">8 Nested Again</div>
                           <div class="small-4 columns">4</div>
                         </div>
                       </div>
                       <div class="small-4 columns">4</div>
                     </div>
                   </div>
                   <div class="small-4 columns">4</div>
                 </div>
                 <h5>Code</h5>
                 <pre>
                  <code class="language-markup">
&lt;div class="row">
 &lt;div class="small-8 columns">
   &lt;div class="row">
     &lt;div class="small-8 columns">
       &lt;div class="row">
         &lt;div class="small-8 columns">&lt;/div>
         &lt;div class="small-4 columns">&lt;/div>
       &lt;/div>
     &lt;/div>
     &lt;div class="small-4 columns">&lt;/div>
   &lt;/div>
 &lt;/div>
 &lt;div class="small-4 columns">&lt;/div>
&lt;/div>
                  </code>
                 </pre>
                 <h4>Small Grid </h4>
                 <p>As you've probably noticed in the examples above, you have access to a small and medium grid. If you know that your grid structure will be the same for small devices as it will be on medium devices, just use the small grid. You can override your small grid classes by adding medium grid classes to it.</p>
                 <h4>Example</h4>
                 <div class="row display">
                   <div class="small-2 columns">2</div>
                   <div class="small-10 columns">10, last</div>
                 </div>
                 <div class="row display">
                   <div class="small-3 columns">3</div>
                   <div class="small-9 columns">9, last</div>
                 </div>
                 <h5>Code</h5>
                 <pre>
                  <code class="language-markup">
&lt;div class="row">
  &lt;div class="small-2 columns">&lt;/div>
  &lt;div class="small-10 columns">&lt;/div>
&lt;/div>
&lt;div class="row">
  &lt;div class="small-3 columns">&lt;/div>
  &lt;div class="small-9 columns">&lt;/div>
&lt;/div>
                  </code>
                </pre>
                 <h4>Medium Grid</h4>
                 <p>As you've probably noticed in the examples above, you have access to a small and medium grid. If you know that your grid structure will be the same for small devices as it will be on medium devices, just use the small grid. You can override your small grid classes by adding medium grid classes to it.</p>
                 <div class="row display">
                   <div class="medium-2 columns">2</div>
                   <div class="medium-10 columns">10, last</div>
                 </div>
                 <div class="row display">
                   <div class="medium-3 columns">3</div>
                   <div class="medium-9 columns">9, last</div>
                 </div>
                 <h5>Code</h5>
                 <pre>
                  <code class="language-markup">
&lt;div class="row">
 &lt;div class="medium-2 columns">&lt;/div>
 &lt;div class="medium-10 columns">&lt;/div>
&lt;/div>
&lt;div class="row">
 &lt;div class="medium-3 columns">&lt;/div>
 &lt;div class="medium-9 columns">&lt;/div>
&lt;/div>
                  </code>
                </pre>
              </div>
            </div>
          </div>
        </section>
        <hr>
        <section id="cssComponent" class="css-componen style-componentt">
          <div class="content">
            <h2>Maintaining Your CSS</h2>
            <p class="lead">Stylesheet maintenance can become overwhelming on medium applications. Here are a few tips and tricks to keeping your sanity in a CSS heavy world.</p>
            <h4>Split Your CSS Logically</h4>
            <p>There are some conventional practices for well-maintained CSS&mdash;we've kept our code neatly labels in <code>app.scss</code>. The <code>app.scss</code> file contains all the elements outlined in this style guide&mdash;everything on the site built to be easily reusable. Elements in the globals CSS file will roll across the site and establish the visual style of Aerospike.</p>
            <h4>A Few Rules for Clean CSS</h4>
            <div class="row">
              <div class="medium-4 columns">
                <p><strong>Good Commenting</strong> A stylesheet with clear comments that delineate each main section of code makes it a lot easier to find by scanning the page or using cmd/ctrl+F to search.</p>
              </div>
              <div class="medium-4 columns">
                <p><strong>Don't repeat yourself</strong> Child element declarations should not repeat styles unless they override what is already there.</p>
              </div>
              <div class="medium-4 columns">
                <p><strong>Group elements</strong> Keep parent/child elements near each other in the CSS. This not only helps you identify areas which can be pruned or cleaned up but also makes it easier on other users of the stylesheet.</p>
              </div>
            </div>
          </div>
        </section>
        <section id="colorsComponent" class="colors-component style-component">
          <h2>Colors</h2>
          <p class="lead">Below you can find the different color palettes we used on the site for the background, text, and accent colors.</p>
          <div class="rendered-example">
            <ul class="colors large-block-grid-8">
              <li>
                <span style="background: #C31618;"></span>
                Red<small>#C31618</small>
              </li>
               <li>
                <span style="background: #000000;"></span>
                Black<small>#000000</small>
              </li>
              <li>
                <span style="background: #FFFFFF;"></span>
                White<small>#FFFFFF</small>
              </li>
              <li>
                <span style="background: #6E3273;"></span>
                Purple<small>#6E3273</small>
              </li>
              <li>
                <span style="background: #F68623;"></span>
                Orange<small>#F68623</small>
              </li>
              <li>
                <span style="background: #208E37;"></span>
                Green<small>#208E37</small>
              </li>
              <li>
                <span style="background: #4D4D4F;"></span>
                Dark Gray<small>#4D4D4F</small>
              </li>
              <li>
                <span style="background: #D1D3D4;"></span>
                Light Gray<small>#D1D3D4</small>
              </li>                            
            </ul>
          </div>

        </section>

        <hr>

        <section id="typeComponent" class="type-component style-component">
          <div class="content">
            <div class="row">
              <div class="medium-12 columns">
                <div>
                  <h2>Typography</h2>
                  <p>Our primary typeface is Titillium Web, a geeky sans-serif with confidence and energy that is reflected throughout the site.</p>
                </div>


                <h4>Where To Get It</h4>
                <p>These are the typefaces being used for the Aerospike mobile app:</p>
                <ul class="disc gray">
                  <li><strong>Primary Typeface:</strong> Titillium Web</li>
                  <li><strong>Secondary Typeface:</strong> Helvetica Neue</li>
                </ul>

                <h4>When to Use</h4>
                <p>Headings are used to denote different sections of content, usually consisting of related paragraphs and other HTML elements. They range from h1 to h4 and should be styled in a clear hierarchy (i.e., mediumst to smallest).</p>

                <h4>When to Use Paragraphs</h4>
                <p>Paragraphs are groups of sentences, each with a lead (first sentence) and transition (last sentence). They are block level elements, meaning they stack vertically when repeated. Use them as such.</p>

                <h4>Editing the CSS</h4>
                <p>CSS for headings and paragraph styles can be found in <code class="orange">app.scss</code>.</p>

                <h1>h1. Heading 1 for Page Headings</h1>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo</p>

                <h2>h2. Heading 2 for Section Headings</h2>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo</p>

                <h3>h3. Heading 3 for Subsection Headings</h3>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo</p>

                <h4>h4. Heading 4 for Units</h4>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

                <h5>h5. Heading 5 for Subunits</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo</p>

                <h6>h6. Heading 6 for Subheads</h6>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo</p>

                <blockquote>
                  This is the style for a quote. Use it to call out text you want to emphasize in a paragraph, or in a quote or testimonial.
                  <cite>Person Name, Title</cite>
                </blockquote>

                <p>Luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
              </div>
            </div>
          </div>
        </section>
        <hr>
        <section id="buttonsComponent" class="buttons-component style-component">
          <div class="content">
            <h2>Buttons</h2>
            <p class="subhead">Buttons are tied to an action of some kind, whether that button is on a cheese dispenser or launches the rocket that you're strapped to. On the Web, we follow similar conventions.</p>
            <h4>How To Use</h4>
            <p>This solution is perfect when the button needs to submit a form of some kind.</p>
            <p><em>Note: Make sure to keep type="submit" on the button tag. That's what tells Internet Explorer to submit the form.</em></p>
            <h4>Using The Anchor Tag</h4>
            <p>When you need the button to take you somewhere (e.g. a sign up button), this is the perfect solution.</p>
            <h4>Editing the CSS</h4>
            <p>CSS for buttons can be found in <code>app.scss</code></p>
            <h4>Call-to-Action Buttons</h4>
            <div class="rendered-example">
              <a href="#" class="primary button">Sign In</a>
              <a href="#" class="primary button">Upload</a>
              <a href="#" class="small primary button">Next</a>
            </div>
            <h5>Code</h5>
            <pre>
              <code class="language-markup">
&lt;a href="#" class="primary button">Sign In&lt;/a>
&lt;a href="#" class="primary button">Submit&lt;/a>
&lt;a href="#" class="small primary button">Next&lt;/a>
              </code>
            </pre>
            <h4>Secondary Buttons</h4>
            <div class="rendered-example">
              <a href="#" class="secondary button">Cancel</a>
              <a href="#" class="secondary button">Edit</a>
              <a href="#" class="small secondary button">More</a>
            </div>
            <h5>Code</h5>
            <pre>
              <code class="language-markup">
&lt;a href="#" class="secondary button">Cancel&lt;/a>
&lt;a href="#" class="secondary button">Edit&lt;/a>
&lt;a href="#" class="small secondary button">Next&lt;/a>
              </code>
            </pre>
            <h4>Disabled Buttons</h4>
            <div class="rendered-example">
              <a href="#" class="primary disabled button">Share</a>
            </div>
            <h5>Code</h5>
            <pre>
              <code class="language-markup">
&lt;a href="#" class="primary disabled button">Share&lt;/a>
              </code>
            </pre>
            <h4>Tabs</h4>
            <ul class="tabs" data-tab>
              <li class="tab-title active"><a href="#overview">Overview</a></li>
              <li class="tab-title"><a href="#use-cases">Use Cases</a></li>
              <li class="tab-title"><a href="#demo">Schedule A Demo</a></li>
            </ul>         
            <h5>Code</h5>
            <pre>
              <code class="language-markup">
&lt;ul class="tabs" data-tab>
  &lt;li class="tab-title active">&lt;a href="#overview">Overview&lt;/a>&lt;/li>
  &lt;li class="tab-title">&lt;a href="#use-cases">Use Cases&lt;/a>&lt;/li>
  &lt;li class="tab-title">&lt;a href="#demo">Schedule A Demo&lt;/a>&lt;/li>
&lt;/ul>
              </code>
            </pre>                    
            <h4>Button Groups</h4>
            <ul class="button-group">
              <li><a href="#" class="button active">Overview</a></li>
              <li><a href="#" class="button">Use Cases</a></li>
              <li><a href="#" class="button">Schedule A Demo</a></li>
            </ul>
            <h5>Code</h5>
            <pre>
              <code class="language-markup">
&lt;ul class="button-group">
  &lt;li>&lt;a href="#" class="button active">Overview&lt;/a>&lt;/li>
  &lt;li>&lt;a href="#" class="button">Use Cases&lt;/a>&lt;/li>
  &lt;li>&lt;a href="#" class="button">Schedule A Demo&lt;/a>&lt;/li>
&lt;/ul>
              </code>
            </pre>
          </div>
        </section>
        <hr>
        <section id="formsComponent" class="forms-component style-component">
          <div class="content">
            <h2>Forms</h2>
            <p class="lead">Use forms to allow users to interact with the site and provide information to the company.</p>
            <h4>Elements of a Form</h4>
            <p>A form should be marked up using its default HTML properties. The ones we make use of include (in hierarchical order):</p>
              <ul class="disc">
               <li>Form</li>
               <li>Label</li>
               <li>Input</li>
               <li>Select</li>
               <li>Textarea</li>
               <li>Button</li>
              </ul>
              <h4>How to use</h4>
              <p>Make forms great and easy to use with the following rules:</p>
              <ul class="disc">
                <li>Wrap checkboxes and radio buttons within labels for mediumr hit areas, and be sure to set the for, name, and id attributes for all applicable elements.</li>
                <li>Series of checkboxes and radio buttons below within a <code>&#60;ul class="(inline) actions"&#62;</code>.</li>
                <li>Before selecting any set of fields to use for a required input, explore other options (e.g., radio buttons over select lists).</li>
              </ul>
             <h4>Learn all about forms</h4>
             <p>Check out the <a href="http://foundation.zurb.com/docs/components/forms.html">Foundation Docs</a> to learn about how flexible our forms are for creating different layouts. It works perfectly with the grid to meet all your form needs.</p>
            <h4>Form Layouts</h4>
            <p>Form elements in Foundation are styled based on their type attribute rather than a class. Inputs in Foundation have another major advantage — they are full width by default. That means that inputs will run as wide as the column that contains them. However, you have two options which make these forms extremely versatile:</p>
            <ul class="disc">
              <li>You can size inputs using column sizes, like <code>.medium-6</code>, <code>.small-6</code>.</li>
              <li>You can create row elements inside your form and use columns for the form, including inputs, labels and more. Rows inside a form inherit some special padding to even up input spacing.</li>
            </ul>
            <h4>Form Example</h4>

            <form>
              <label for="emailAddress">Email Address</label>
              <input type="email" id="emailAddress" name="email-address" placeholder="address@emailprovider.com">
              <label for="password">Password</label>
              <input type="password" id="password" class="password">
              <label for="genderType">
                Gender
                <span data-tooltip class="help-tooltip has-tip" title="We need to know your gender becuase blah.">
                <i class="icon icon-info-circle"></i>
                </span>
              </label>
              <select name="gender-type" id="genderType" class="gender-type">
                <option>Male</option>
                <option>Female</option>
              </select>
              <div class="row">
                <div class="large-12 medium-12 columns">
                  <ul class="inline-list">
                    <li><a href="#" class="button primary small">Sign Up</a></li>
                    <li><a href="#" class="button secondary small">Cancel</a></li>
                  </ul>
                </div>
              </div>
            </form>

            <h5>Code</h5>
            <pre>
              <code class="language-markup">
&lt;form>
  &lt;label for="emailAddress">Email Address&lt;/label>
  &lt;input type="email" id="emailAddress" name="email-address" placeholder="address@emailprovider.com">
  &lt;label for="password">Password&lt;/label>
  &lt;input type="password" id="password" class="password">
  &lt;label for="genderType">
    Gender
    &lt;span data-tooltip class="help-tooltip has-tip" title="We need to know your gender becuase blah.">
    &lt;i class="icon icon-info-circle">&lt;/i>
    &lt;/span>
  &lt;/label>
  &lt;select name="gender-type" id="genderType" class="gender-type">
    &lt;option>Male&lt;/option>
    &lt;option>Female&lt;/option>
  &lt;/select>
  &lt;div class="row">
    &lt;div class="large-12 medium-12 columns">
      &lt;ul class="inline-list">
        &lt;li>&lt;a href="#" class="button primary small">Sign Up&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#" class="button secondary small">Cancel&lt;/a>&lt;/li>
      &lt;/ul>
    &lt;/div>
  &lt;/div>
&lt;/form>
              </code>
            </pre>
            <h4>Error States</h4>
            <p>We've included error states for labels, inputs and messaging that you can have your app generate programatically. You can attach a class of <code>.error</code> either to the individual elements (label, input, small) or to a column/div.</p>
            <h4>Example</h4>
            <form>
              <label for="passwordError" class="error">Password</label>
              <input type="text" id="passwordError" name="password-error" class="password error">
              <small class="error">Please enter a password with atleast one number and one special character.</small>
            </form>
            <h5>Code</h5>
            <pre>
              <code class="language-markup">
&lt;form>
  &lt;label for="passwordError" class="error">Password&lt;/label>
  &lt;input type="text" id="passwordError" name="password-error" class="password error">
  &lt;small class="error">Please enter a password with atleast one number and one special character.&lt;/small>
&lt;/form>
              </code>
            </pre>
          </div>
        </section>
        <hr>
        <section id="docsSidebarComponent" class="docs-sidebar-component style-component">
          <div class="content">
            <h2>Docs Sidebar</h2>
            <p class="lead">The docs sidebar will help developers and DevOps quickly find documentation using the list view, filters and search.</p>
            <h4>Docs Sidebar Example</h4>
            <div class="rendered-example">

<div class="row">
  <div class="large-4 medium-6 columns end">
    <div class="docs-sidebar">
      <div class="searchable-input">
        <i class="fa fa-search"></i>
        <input type="search" name="search" placeholder="Search Docs...">
      </div>
      <div class="filter-container">
        <label for="docs-filter">Filter By:</label>
        <a href="#" data-dropdown="drop">All</a>
        <ul id="drop" class="small f-dropdown" data-dropdown-content>
          <li><a href="#">Architecture</a></li>
          <li><a href="#">Feature Guides</a></li>
          <li><a href="#">Lorem Ipsum</a></li>
        </ul>
      </div>
      <a href="#" class="download-aerospike-button small primary button">Download Aerospike</a>
      <a href="#" class="try-burro-button small secondary button">Try Burro</a>
      <h4 class="docs-section-heading">Technology</h4>
      <hr> 
      <h6 class="docs-facet-heading">Architecture - How it works</h6>
      <div class="listContainer">
        <ul class="docs-list expList">
          <li><a href="#" class="primary">Overview</a></li>
          <li>
            <a href="#" class="primary">Data Management</a>
            <ul>
              <li><a href="#" class="primary">Data Model</a></li>
              <li><a href="#" class="primary">Primary Index</a></li>
              <li><a href="#" class="primary">Secondary Index</a></li>
              <li><a href="#" class="primary">Hybrid Storage</a></li>
              <li><a href="#" class="primary">Large Data Types</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="primary">Distribution</a>
            <ul>
              <li><a href="#" class="primary">Data Distribution</a></li>
              <li><a href="#" class="primary">Clustering</a></li>
              <li><a href="#" class="primary">Cross Data-Center Replication</a></li>
              <li><a href="#" class="primary">Rack Awareness</a></li>             
            </ul>
          </li>
          <li><a href="#" class="primary">User-Defined Functions</a></li>
          <li><a href="#" class="primary">Clients</a></li>
          <li><a href="#" class="primary">ACID</a></li>
        </ul>

        <h6 class="docs-facet-heading">Feature Guides - What it is</h6>
        <ul class="docs-list expList">
          <li>
            <a href="#" class="primary">Key-Value Store</a>
            <ul>
              <li><a href="#" class="primary">Single Key</a></li>
              <li><a href="#" class="primary">Batch</a></li>
              <li><a href="#" class="primary">Scan</a></li>          
            </ul>
          </li>
          <li><a href="#" class="primary">Query</a></li>
          <li>
            <a href="#" class="primary">User-Defined Functions</a>
            <ul>
              <li><a href="#" class="primary">Record UDF</a></li>
              <li><a href="#" class="primary">Stream UDF</a></li>
            </ul>
          </li>
          <li><a href="#" class="primary">Aggregations</a></li>
          <li><a href="#" class="primary">Data Types</a></li>
          <li>
            <a href="#" class="primary">Large Data Types</a>
            <ul>
              <li><a href="#" class="primary">Large List</a></li>
              <li><a href="#" class="primary">Advanced Topics</a></li>       
            </ul>
          </li>
          <li><a href="#" class="primary">Security</a></li>
          <li><a href="#" class="primary">FAQ</a></li>
          <li><a href="#" class="primary">Glossary</a></li>
        </ul>
      </div>
      <h4 class="docs-section-heading">Deployment</h4>
      <hr> 
      <h6 class="docs-facet-heading">Cloud Deployment Guides</h6>
      <div class="listContainer">
        <ul class="docs-list expList">
          <li><a href="#" class="primary">Amazon EC2</a></li>
          <li><a href="#" class="primary">Google Compute Engine</a></li>
        </ul>

        <h6 class="docs-facet-heading">Operations Manual</h6>
        <ul class="docs-list expList">
          <li><a href="#" class="primary">Introduction</a></li>
          <li>
            <a href="#" class="primary">Plan</a>
            <ul>
              <li><a href="#" class="primary">Linux Capacity Planning</a></li>
              <li><a href="#" class="primary">Server Hardware</a></li>
              <li>
                <a href="#" class="primary">Flash Storage</a>
                <ul>
                  <li><a href="#" class="primary">Setup</a></li>
                  <li><a href="#" class="primary">Initialization</a></li>
                  <li><a href="#" class="primary">Certification</a></li>
                  <li><a href="#" class="primary">LSI MegaCli</a></li>
                  <li>
                    <a href="#" class="primary">Bcache</a>
                    <ul>
                      <li><a href="#" class="primary">Recommendations</a></li>
                      <li>
                        <a href="#" class="primary">Setup</a>
                        <ul>
                          <li><a href="#" class="primary">Explanation of asbcache.sh script</a></li>
                        </ul>
                      </li>
                      <li><a href="#" class="primary">Configure Aerospike</a></li>
                    </ul>

                  </li>
                </ul>
              </li>
              <li><a href="#" class="primary">Network</a></li>          
            </ul>
          </li>
          <li><a href="#" class="primary">Install</a></li>
          <li><a href="#" class="primary">Configure</a></li>
          <li><a href="#" class="primary">Manage</a></li>
          <li><a href="#" class="primary">Upgrade</a></li>
          <li><a href="#" class="primary">Monitor</a></li>
          <li><a href="#" class="primary">Tune</a></li>
          <li><a href="#" class="primary">Troubleshoot</a></li>
        </ul>
      </div>      
    </div>
  </div>
</div>

            </div>
            <h5>Code</h5>
            <pre>
              <code class="language-markup">

              </code>
            </pre>
          </div>
        </section>
        <hr>
        <section id="forumPostComponent" class="forum-post-component style-component">
          <div class="content">
            <h2>Forum Post</h2>
            <p class="lead">Use the Forum Post component to link to a detailed post description</p>
            <h4>Forum Post Example</h4>
            <div class="rendered-example">

<div class="forum-post row">
  <div class="medium-12 columns">
    <ul class="post-container">
      <li class="post-count-container">
        <a href="#">
          <div class="post-count new">
            <div class="post-count-wrapper new">
              <span class="reply-count new">7</span>
            </div>
            <div class="total-post-count total-replies new">Replies</div>
          </div>
        </a> 
      </li>
      <li class="post-description-container">
        <div class="post-description">
          <h5 class="post-title">
            <a href="#">How to Wrap Adsense Around Text</a>
          </h5>
          <p class="author-name">
            <span class="when">
              By 
              <span class="author">
                <strong><a href="#">Gary Kirwan</a></strong>
              </span>
              about 2 hours ago
            </span>
          </p>
          <div class="post-description copy">
            <p>
              I want to place a new responsive adsense ad in the body of the content floating left or right of the text.
              How would I code into a html site where I want the ad to be and if I wanted the space for the ad to fill be a maximum of 336px wide? One suggesti... (continued)
            </p>
            <p class="tags">
              <a class="tag-container" href="#">Tag Description</a>
              <a class="tag-container" href="#">Tag Description</a>
              <a class="tag-container" href="#">Tag Description</a>
            </p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>

            </div>
            <h5>Code</h5>
            <pre>
              <code class="language-markup">

              </code>
            </pre>
          </div>
        </section>
        <hr>
        <section id="aboutBioPlacardComponents" class="about-bio-placard-component style-component">
          <div class="content">
            <h2>Bio Placard</h2>
            <p class="lead">Use the bio placard on the company page to highlight team members, advisors, board members and investors.</p>
            <h4>Component Name Example</h4>
            <div class="rendered-example">

<div class="row">
  <div class="medium-4 column end">
    <div class="about-bio-placard">
      <a href="#">
        <img src="http://placehold.it/400x300" alt="Person Name" class="about-bio-thumb">
      </a>
      <div class="about-bio-content">
        <h6 class="about-bio-name-container">
          <a href="#" class="about-bio-name">Person Name</a>
          <span class="about-bio-title">Title</span>
        </h6>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut rhoncus est. Vestibulum tristique vestibulum purus, et rutrum urna fermentum in.</p>
        <a href="#" class="link-button">Read Full Bio</a>        
      </div>
    </div>
  </div>
</div>

            </div>
            <h5>Code</h5>
            <pre>
              <code class="language-markup">

              </code>
            </pre>
          </div>
        </section>
        <hr>
        <section id="underlinedTabComponent" class="underlined-tab-component style-component">
          <div class="content">
            <h2>Underlined Tab</h2>
            <p class="lead">This tab style is specific to the company page where we have multiple bios under each tab.</p>
            <h4>Underlined Tab Example</h4>
            <div class="rendered-example">
<ul class="tabs underlined-tab" data-tab>
  <li class="tab-title active"><a href="#company-engg-team">Engineering Team</a></li>
  <li class="tab-title"><a href="#company-executes">Executive Team</a></li>
  <li class="tab-title"><a href="#company-board">Board &amp; Advisors</a></li>
</ul> 
            </div>
            <h5>Code</h5>
            <pre>
              <code class="language-markup">

              </code>
            </pre>
          </div>
        </section>
        <hr>
        <section id="borderedTabComponent" class="bordered-tab-component style-component">
          <div class="content">
            <h2>Bordered Tab Component</h2>
            <p class="lead">Use bordered tabs if you don't have images to complemented the tabbed sections.</p>
            <h4>Bordered Tab Example</h4>
            <div class="rendered-example">
<ul class="tabs traditional-tab" data-tab>
  <li class="tab-title active"><a href="#overview">Overview</a></li>
  <li class="tab-title"><a href="#use-cases">Use Cases</a></li>
  <li class="tab-title"><a href="#demo">Schedule A Demo</a></li>
</ul>   
            </div>
            <h5>Code</h5>
            <pre>
              <code class="language-markup">
&lt;ul class="tabs traditional-tab" data-tab>
  &lt;li class="tab-title active">&lt;a href="#overview">Overview&lt;/a>&lt;/li>
  &lt;li class="tab-title">&lt;a href="#use-cases">Use Cases&lt;/a>&lt;/li>
  &lt;li class="tab-title">&lt;a href="#demo">Schedule A Demo&lt;/a>&lt;/li>
&lt;/ul>
              </code>
            </pre>
          </div>
        </section>
        <hr>
        <section id="componentName" class="component-name style-component">
          <div class="content">
            <h2>Success Story Placard</h2>
            <p class="lead">Use the success story placard to highlight success stories on the success stories page.</p>
            <h4>Success Story Example</h4>
            <div class="rendered-example">

<div class="row">
  <div class="medium-4 column end">
    <div class="success-story-placard">
      <a href="#">
        <img src="http://placehold.it/400x300" alt="Person Name" class="success-story-thumb">
      </a>
      <div class="success-story-content">
        <h6 class="success-story-name-container">
          <span class="success-story-industry"><a href="#" class="primary">Industry</a></span>
          <a href="#" class="success-story-name">AppNexus</a>
        </h6>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut rhoncus est. Vestibulum tristique vestibulum purus, et rutrum urna fermentum in.</p>
        <a href="#" class="link-button">How AppNexus scaled from a small startup to a billion dollar company.</a>        
      </div>
    </div>
  </div>
</div>

            </div>
            <h5>Code</h5>
            <pre>
              <code class="language-markup">

              </code>
            </pre>
          </div>
        </section>
        <hr>
        <section id="componentName" class="component-name style-component">
          <div class="content">
            <h2>Component Name</h2>
            <p class="lead">Blah blah</p>
            <h4>Component Name Example</h4>
            <div class="rendered-example">

<section class="success-story-featured-entry-container subtle-callout">  
  <div class="success-story-featured-entry row">
    <div class="small-12 columns">
      <div class="row success-story-featured-entry">
        <div class="medium-5 large-4 medium-push-7 large-push-8 columns">
          <a href="#">
            <img src="http://placehold.it/600x600" alt="screenshot of customer's app">
          </a>
        </div>   
        <div class="medium-pull-5 medium-7 large-pull-4 large-8 columns">
          <div class="success-story-container">
            <h4>
              <a href="#" class="success-story-category">AdTech</a>
              <span><a href="#">AppNexus</a></span>
            </h4>
            <p class="lead">AppNexus is the world’s largest, independent, real-time ad technology platform powering the most innovative trading solutions and marketplaces for Internet advertising.</p>
            <p class="lead"><strong>Why AppNexus chose Aerospike over other databases</strong></p>
            <blockquote>
              We run Aerospike heavily, peaking at <strong>3 million reads per second</strong> and well <strong>over 1 1/2 million writes a second</strong> in a <strong>very cost effective way</strong>. I don’t think there’s any technology we’ve run into that even comes close. 
              <cite>Geir Magnusson, CTO of AppNexus.</cite>
            </blockquote>
            <a href="#" class="link-button">See AppNexus customer success story</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

            </div>
            <h5>Code</h5>
            <pre>
              <code class="language-markup">

              </code>
            </pre>
          </div>
        </section>

      </div>
    </div>


    </section>
    <a class="exit-off-canvas"></a>
  </div>
</div>
<script src="js/prism.js"></script>
<?php include("includes/foot.php"); ?>

