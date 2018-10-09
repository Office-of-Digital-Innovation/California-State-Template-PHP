<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<!--        California State Template
        Version 5.0.2
 
Based on Twitter Bootstrap
-->
<meta charset="utf-8">

<title>Sample - Tabs</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<body>

<header role="banner" id="header" class="global-header">
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
      <!-- Include Navigation -->
      <?php include_once("../ssi/navigation.php"); ?>
      
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php"); ?>
        </div>

    </div>
	<div class="header-decoration"></div>
</header>

<div id="main-content" class="main-content">
    <div class="section">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Tabs</li>
            </ol>
            
            <div class="group">
                <div class="half">
                    <h1>Tabs</h1>
                    <p>Note the <code>.nav-tabs</code> class requires the <code>.nav</code> base class. Tabs also uses HTML5 roles for accessibility. Add <code>role="tablist"</code> to the ul that contains the tab links, and add <code>role="tab"</code> to the anchor tag that is the tab link. The tab link also requires an HTML5 <code>data-toggle="tab"</code> attribute be applied to instantiate the javascript behavior.</p>
                    <p>The tab panel uses standadard deep linking markup to target the appropriate tab panel. As such the tabs href should match the ID of the tab panel it targets. For example <code>href="#home"</code> will show the  <code>id="home"</code> tab panel</p>
                    <p>Any tab panel can be the first or default tab by applying <code>.active</code> to the tablist <code>li</code> element and to the corosponding tab panel.</p>
                    <p>Tabs on small mobile devices can be a really bad experience. By applying the <code>.responsive</code> class to the <code>ul.nav-tabs</code> element and to the <code>div.tab-content</code> element, the tab will transform from a tab list to an accordion list on small mobile devices.</p>
                    <h2>Example:</h2>
                    <?php include("../sample/modules/tabs.php"); ?>
                </div>
                <div class="half">
                    <h2><label for="sample-tabs">Source Code:</label></h2>
                    <textarea id="sample-tabs" class="form-control" rows="10" cols="80"><?php include("../sample/modules/tabs.php"); ?></textarea>
                </div>
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                <h2>Tabs on bottom</h2>
                <p>Tabs can be placed below the content. This requires that that .nav-tabs div be placed below the content. The <code>.tabs-bottom</code> class need also be added to the <code>.tab-group</code></p>
                <?php include("../sample/modules/tabs-bottom.php"); ?>
                </div>
                <div class="half">
                    <h2><label for="sample-tabs-bottom">Source Code:</label></h2>
                    <textarea id="sample-tabs-bottom" class="form-control" rows="10" cols="80"><?php include("../sample/modules/tabs-bottom.php"); ?></textarea>
                </div>
            </div>                
        </main>
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>