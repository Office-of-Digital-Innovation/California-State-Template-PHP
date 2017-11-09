<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
    <!--
        California State Template
        Version 5.0
        
        Based on Twitter Bootstrap
    -->
  <meta charset="utf-8">
  <title>Sample Home</title>
  <meta name="Author" content="State of California" />
  <meta name="Description" content="State of California" />
  <meta name="Keywords" content="California, government" />
  <?php include_once("../ssi/head-css-js.php"); ?>

</head>

<body class="two-column">
    <header role="banner" id="header" class="global-header fixed">
        <div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
        

        
        <!-- Location Bar -->        
		<?php include_once("../ssi/location-bar.php"); ?>
        
        <!-- Include Utility Header -->
		<?php include_once("../ssi/utility-header.php"); ?>	
        
        <!-- Settings Bar -->	
		<?php include_once("../ssi/settings-bar.php"); ?>

		<!-- Include Branding -->
		<?php include_once("../ssi/branding.php"); ?>

        <!-- Include Mobile Controls -->
        <?php include_once("../ssi/mobile-controls.php"); ?>

        <div class="navigation-search">
            <div id="head-search" class="search-container">
                <!-- Include Search -->
                <?php include_once("../ssi/search.php"); ?>
            </div>
            <!-- Include Navigation -->
            <?php include_once("../ssi/navigation.php"); ?>
        </div>
       
    </header>

  <div id="main-content" class="main-content">
    <div class="section">
      <main class="main-primary">
        <h1>Examples</h1>
        <p>The following pages include example modules as well as documentation that describe the usage of each module. On any given page you will find a working example of the module, A description of the various classes used in the creation of the module,
          as well as the source code that you can copy and past from should you need to. The following pages help to serve as a styleguide as well as documentation.</p>

        <h2>Page Layout</h2>
        <ul class="list-primary">
          <li><a href="page-templates.php">Page Templates</a></li>
          <li><a href="featured-search.php">Featured Search</a></li>
          <li><a href="fixed-header.php">Fixed Header</a></li>
          <li><a href="grid.php">Grid System </a></li>
          <li><a href="breadcrumb.php">Breadcrumb</a></li>
        </ul>

        <h2>Additional Example Pages</h2>
        <ul class="list-primary">
          <li><a href="/general-landing.php">Generic Landing Page</a></li>
          <li><a href="/search-directory.php">Search Directory Page</a></li>
          <li><a href="/business-profile.php">Business Profile Page</a></li>
          <li><a href="/profile-landing.php">Profile Landing Page</a></li>
        </ul>

        <h2>Navigation Samples</h2>
          <ul class="list-primary">
              <li><a href="navigation-megamenu.php">Megamenu Navigation</a></li>
              <li><a href="navigation-megamenu-original.php">State Template v4 Original Megamenu</a></li>
              <li><a href="navigation-single.php">Single Level Navigation</a></li>
              <li><a href="navigation-dropdown.php">Dropdown Navigation</a></li>
              <li><a href="navigation-active.php">Setting the Active Navigation Item</a></li>
              <li><a href="navigation-mobile-controls.php">Mobile Navigation Icon Links</a></li>
          </ul>

        <h2>Color Schemes</h2>
          <ul class="list-primary">
              <li><a href="colorscheme-oceanside.php">Oceanside</a>
              <li><a href="colorscheme-orangecounty.php">Orange County</a></li>
              <li><a href="colorscheme-pasorobles.php">Paso Robles</a></li>
              <li><a href="colorscheme-santabarbara.php">Santa Barbara</a></li>
              <li><a href="colorscheme-sierra.php">Sierra</a></li>
              <li><a href="colorscheme-mono.php">Mono</a></li>
              <li><a href="colorscheme-trinity.php">Trinity</a></li>
              <li><a href="colorscheme-eureka.php">Eureka</a></li>
              <!-- <li><a href="colorscheme-orangecounty.php">Orange County</a></li>
        <li><a href="colorscheme-pasorobles.php">Paso Robles</a></li>
        <li><a href="colorscheme-santabarbara.php">Santa Barbara</a></li>
        <li><a href="colorscheme-sierra.php">Sierra</a></li> -->
          </ul>

        <h2>Content Modules</h2>
          <ul class="list-primary">
              <li><a href="contact-widgets.php">Contact Widgets</a> (Supports Microdata)</li>
              <li><a href="course-list.php">Course List</a> (Supports Microdata)</li>
              <li><a href="course-detail.php">Course Detail</a> (Supports Microdata)</li>
              <li><a href="course-detail-panel.php">Course Detail (Panel)</a> (Supports Microdata)</li>
              <li><a href="event-list.php">Event List</a> (Supports Microdata)</li>
              <li><a href="event-detail.php">Event Detail</a> (Supports Microdata)</li>
              <li><a href="exam-list.php">Exam List</a></li>
              <li><a href="figure.php">Figure with Captions</a> (Supports Microdata)</li>
              <li><a href="headers.php">Headers and Paragraphs</a></li>
              <li><a href="hero-info.php">Hero Info</a></li>
              <li><a href="icon-blocks.php">Icon Blocks</a></li>
              <li><a href="job-list.php">Job List</a> (Supports Microdata)</li>
              <li><a href="job-detail.php">Job Detail</a> (Supports Microdata)</li>
              <li><a href="lists.php">Lists (Bulleted &amp; Expanding)</a></li>
              <li><a href="location-widgets.php">Location (Widgets)</a> (Supports Microdata)</li>
              <li><a href="location-full.php">Location (Full)</a> (Supports Microdata)</li>
              <li><a href="news-list.php">News List</a> (Supports Microdata)</li>
              <li><a href="news-detail.php">News Detail</a> (Supports Microdata)</li>
              <li><a href="profile-banners.php">Profile Banners</a> (Supports Microdata)</li>
              <li><a href="profile-list.php">Public Profile List</a> (Supports Microdata)</li>
              <li><a href="profile-detail.php">Public Profile Detail</a> (Supports Microdata)</li>
              <li><a href="publications.php">Publications</a> (Supports Microdata)</li>
          </ul>

        <h2>Components &amp; Utility Content</h2>
          <ul class="list-primary">
              <li><a href="accordions.php">Accordions</a></li>
              <li><a href="animations.php">Animations</a></li>
              <li><a href="alert-banner.php">Alert Banner</a></li>
              <li><a href="blockquotes.php">Blockquotes</a></li>
              <li><a href="buttons.php">Buttons</a></li>
              <li><a href="cards.php">Cards</a></li>
              <li><a href="carousels.php">Carousels and Slideshows</a></li>
              <li><a href="charts.php">Charts</a></li>
              <li><a href="featured-narrative.php">Featured Narrative</a></li>
              <li><a href="form.php">Form Styles</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="horizontal-rules.php">Horizontal Rules</a></li>
              <li><a href="icon-fonts.php">Icon Font Library</a></li>
              <li><a href="media-object.php">Media Object</a></li>
              <li><a href="number-counter.php">Number Counter</a></li>
              <li><a href="panels.php">Panels</a></li>
              <li><a href="panels-photo.php">Panels with Photos</a></li>
              <li><a href="progress-bars.php">Progress Bars</a></li>
              <li><a href="sections.php">Sections</a></li>
              <li><a href="service-group.php">Service Tiles</a></li>
              <li><a href="socialsharer.php">SocialSharer</a></li>
              <li><a href="spacing.php">Spacing</a></li>
              <li><a href="tabs.php">Tabs</a></li>
              <li><a href="tables.php">Tables</a></li>
              <li><a href="testimonials.php">Testimonials</a></li>
              <li><a href="text-accent.php">Text Accent Colors</a></li>
              <li><a href="toggle.php">Toggle</a></li>
          </ul>
       <h2>Dreamweaver Templates</h2>
          <ul class="list-primary">
              <li><a href="dreamweaver-templates.php">Using Dreamweaver Templates</a></li>
          </ul> 

      </main>

      <div class="main-secondary">
        <?php include("../sample/modules/profile-banners.php"); ?>
        <?php include("../sample/modules/panels-sidebar.php"); ?>
      </div>

    </div>
  </div>

  <?php include_once("../ssi/global-footer.php"); ?>
  <?php include_once("../ssi/scripts.php"); ?>
</body>
</html>
