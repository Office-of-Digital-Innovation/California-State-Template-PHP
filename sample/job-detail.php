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

<title>Sample - Job Detail</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<body>

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
                <li class="active">Job Detail</li>
            </ol>
            <h1>Job Detail</h1>
            <p><code>.job-detail</code> is an end page content module for jobs.  To begin, wrap the contents of the page in a <code>&lt;article class="job-detail"&gt;</code> tag.</p>
            <p>This module makes use of the <code>&lt;header&gt;</code> tag and locates the h1 within it.</p>
            <p>The job detail module contains a number of predefined sections that may or may not be used. For example:</p>
            <ul>
                <li><code>.sub-header</code> - Contains basic information about the organization, address, and publish date</li>
                <li><code>.job-description</code> - Job description details</li>
                <li><code>.skills-experience </code> - List of required skills or experience</li>
                <li><code>.about-department</code> - A panel with information about the hiring organization</li>
                <li><code>additional-information</code> - Free-form space for anything else that does not fit in other sections</li>
            </ul>
            
            <?php include("../sample/modules/schema-boilerplate.php"); ?>
            
            <hr>
            
            <h2>Example:</h2>
            <?php include("../sample/modules/job-detail.php"); ?>
            <hr>
            
            <h2>Source Code:</h2>
            
            <div class="tab-group">
                <ul id="sourceCode" class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#html" role="tab" data-toggle="tab">HTML Markup</a></li>
                    <li><a href="#microdata" role="tab" data-toggle="tab">Microdata</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content responsive">
                    <div class="tab-pane active" id="html">
                      <textarea aria-label="HTML Markup" class="form-control" rows="10" cols="80"><?php include("../sample/modules/job-detail.php"); ?></textarea>
                    </div>
                    <div class="tab-pane" id="microdata">
                        <p class="alert alert-info">NOTE: This module makes use of a <code>datetime</code> property set in the <strong>ISO 8601</strong> format. Be sure to set the time correctly.</p>
                      <textarea aria-label="Microdata" class="form-control" rows="10" cols="80"><?php include("../sample/modules/job-detail-schema.php"); ?></textarea>
                    </div>
                </div>
            </div>
               
        </main>
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>