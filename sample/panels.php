<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<!--        California State Template
        Version 5.0.3
 
Based on Twitter Bootstrap
-->
<meta charset="utf-8">

<title>Sample - Panels</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<body class="two-column">

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
        
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
                <li class="active">Panels</li>
            </ol>
            
            <h1>Panels</h1>
                <p>Panels can be used within the main content area or within the sidebar. The markup is the same for both locations. When used in the sidebar, it is recommended that only <code>.panel-standout</code> and <code>.panel-default</code> be used.</p>
                <p>The <code>.panel-standout</code> class can be used in conjunction with an optional <code>.highlight</code> class to add the triangle embellishment to the standout panel.</p>
                <p>A panel consists of two parts a <code>.panel-heading</code> and <code>.panel-body</code>. <code>.panel-heading</code> can accept heading tags h2, h3, h4, or h5 headings. It can also use an icon from the <a href="icon-fonts.php">icon library</a>. To add an icon insert a <code>span</code> with the appropriate icon class name.</p>
                <p><code>.panel-heading</code> can also make use of an <code>.options</code> div. The <code>.options</code> div was created to hold extra controls like buttons, tabs, dropdown menus or other controls not existing yet. Content placed within the <code>.options</code> container will be floated to the right of the panel</p>
                <p>Also optional in the <code>.panel-heading</code> is the use of icons left of the tile. The icon is purely optional and provided as a convenience.</p>
                <p><strong>NOTE:</strong> Buttons are not supported in panels used in the sidebar.</p>
                
                
                <hr>
                <h2>Examples:</h2>
                <?php include("../sample/modules/panels.php"); ?>
                
                <hr>
                <h2><label for="sample-panels">Source Code:</label></h2>
               <div class="form-group">
                    <textarea id="sample-panels" class="form-control" rows="10" cols="80"><?php include("../sample/modules/panels.php"); ?></textarea>
               </div>
        </main>
        
        <div class="main-secondary">
            <h2>Example:</h2>
                <?php include("../sample/modules/panels-sidebar.php"); ?>
            <h2><label for="sample-panels-sidebar">Source Code:</label></h2>
            <div class="form-group">
                <textarea id="sample-panels-sidebar" class="form-control" rows="10" cols="80"><?php include("../sample/modules/panels-sidebar.php"); ?></textarea>
           </div>
        </div>
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>