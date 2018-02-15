<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<!-- 
California State Template
Version 5.0
 
Based on Twitter Bootstrap
-->
<meta charset="utf-8">

<title>Sample - Lists (Bulleted &amp; Expanding)</title>

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
                <li class="active">Lists</li>
            </ol>
            
         <h1>Lists (Bulleted &amp; Expanding)</h1>
            <div class="group">
                <div class="half">
                    <h2>.list-overstated</h2>
                    <p>Adding <code>.list-overstated</code> to a <code>ul</code> will render the list with bullet icons and bold hyperlinks.</p>
                    <?php include("../sample/modules/list-overstated.php"); ?>
                </div>
                 <div class="half">
                    <h2><label for="sample-list-a">Source Code:</label></h2>
                    <textarea id="sample-list-a" class="form-control" rows="10" cols="80"><?php include("../sample/modules/list-overstated.php"); ?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                    <h2>.list-understated</h2>
                    <p>Adding <code>.list-understated</code> to a <code>ul</code> will render the list with bullet icons and normal weighted hyperlinks.</p>
                    <?php include("../sample/modules/list-understated.php"); ?>
                </div>
                 <div class="half">
                    <h2><label for="sample-list-b">Source Code:</label></h2>
                    <textarea id="sample-list-b" class="form-control" rows="10" cols="80"><?php include("../sample/modules/list-understated.php"); ?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                    <h2>.list-standout</h2>
                    <p>Adding <code>.list-standout</code> to a <code>ul</code> will render the list with large inward pointing arrows.</p>
                    <?php include("../sample/modules/list-standout.php"); ?>
                </div>
                 <div class="half">
                    <h2><label for="sample-list-c">Source Code:</label></h2>
                    <textarea id="sample-list-c" class="form-control" rows="10" cols="80"><?php include("../sample/modules/list-standout.php"); ?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                    <h2>List as Accordion</h2>

                    <p>Accordion lists can be toggled open and close by clicking the toggle link. Add id <code>#accordion</code> and class <code>.accordion-list</code> to a <code>ul</code> to create the accordion list. Add <code>.tab</code> to the <code>li</code> tag. Finally, wrap the content to be toggled open and closed in a <code>.panel</code> div. You can use <code>.accordion-list</code> in conjunction with any list style provided.</p>
                    
                    <p><span class="label label-info">Note:</span> Accordion List uses HTML5 roles, some ARIA properties, and IDs for accessibility. For best accessibility paractices certain keyboard shortcuts are also implemented.</p>
                   
                    <?php include("../sample/modules/accordion-list.php"); ?>
                </div>
                 <div class="half">
                    <h2><label for="sample-accordion-list">Source Code:</label></h2>
                    <textarea id="sample-accordion-list" class="form-control" rows="10" cols="80"><?php include("../sample/modules/accordion-list.php"); ?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                    <h2>Multi-Tiered Ordered Lists</h2>
                    <?php include("../sample/modules/list-multi-ordered.php"); ?>
                </div>
                 <div class="half">
                    <h2><label for="sample-list-multi-ordered">Source Code:</label></h2>
                    <textarea id="sample-list-multi-ordered" class="form-control" rows="10" cols="80"><?php include("../sample/modules/list-multi-ordered.php"); ?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                    <h2>Multi-Tiered Unordered Lists</h2>
                    <?php include("../sample/modules/list-multi-unordered.php"); ?>
                </div>
                 <div class="half">
                    <h2><label for="sample-list-multi-unordered">Source Code:</label></h2>
                    <textarea id="sample-list-multi-unordered" class="form-control" rows="10" cols="80"><?php include("../sample/modules/list-multi-unordered.php"); ?></textarea>
                </div> 
            </div>
        </main>
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>