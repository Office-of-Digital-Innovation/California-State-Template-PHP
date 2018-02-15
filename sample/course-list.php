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

<title>Sample - Course List</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<body class="two-column">

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>    
        <!-- Location Bar -->
        <?php include_once("../ssi/location-bar.php"); ?>        
        
        <!-- Alert Banner -->           

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
                <li class="active">Course List</li>
            </ol>
            
            <h1>Course List</h1>
            <p>A course list contains a repeating group of courses. To begin, wrap this module in a <code>&lt;section class="course-list"&gt;</code>. Then use <code>&lt;article class="course-item"&gt;</code> to group intividual courses together.</p>
            <p>A <code>.course-item</code> has the following primary child elements.</p>
            <ul>
                <li><code>.thumbnail</code> - Optional, Requires a thumbnail that is 70px wide</li>
                <li><code>.title</code> - A short title that is linkable to the detail page</li>
                <li><code>.datetime</code> - Date and time the course is offered</li>
                <li><code>.description</code> - A short summary or teaser for the event</li>
                <li><code>.location</code> - Address where course is offered</li>
            </ul>
            
            <?php include("../sample/modules/schema-boilerplate.php"); ?>
            
            <h2>Example:</h2>
            <?php include("../sample/modules/course-list.php"); ?>
            
            <h2>Source Code:</h2>
            
            <div class="tab-group">
                <ul id="sourceCode" class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#html" role="tab" data-toggle="tab">HTML Markup</a></li>
                    <li><a href="#microdata" role="tab" data-toggle="tab">Microdata</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content responsive">
                    <div class="tab-pane active" id="html">
                         <textarea class="form-control" rows="10" cols="80"><?php include("../sample/modules/course-list.php"); ?></textarea>
                    </div>
                    <div class="tab-pane" id="microdata">
                        <p class="alert alert-info">NOTE: This module makes use of a <code>datetime</code> property set in the <strong>ISO 8601</strong> format. Be sure to set the time correctly.</p>
                         <textarea class="form-control" rows="10" cols="80"><?php include("../sample/modules/course-list-schema.php"); ?></textarea>
                    </div>
                </div>
            </div>
            
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