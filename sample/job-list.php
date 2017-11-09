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

<title>Sample - Job List</title>

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
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php"); ?>
        </div>
        
        <!-- Include Navigation -->
        <?php include_once("../ssi/navigation.php"); ?>
    </div>
	<div class="header-decoration"></div>
</header>

<div id="main-content" class="main-content">
    <div class="section">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Job List</li>
            </ol>
            
            <div class="group">
                <div class="half">
                    <h1>Job List</h1>
                    <p>A job list contains a repeating group of job items. To begin, wrap this module in a <code>&lt;section class="job-list"&gt;</code>. Then use <code>&lt;article class="job-item"&gt;</code> to group each intividual job post together. Like other similar widgets, the list item contains the following child elements. <code>.header</code>, <code>.body</code>, and <code>.footer</code> each with their own child elements.</p>
                    
                    <ul>
                        <li><code>.title</code> - The job position title</li>
                        <li><code>.filing-date</code> - Date applications are to be submitted by</li>
                        <li><code>.position-number</code></li>
                        <li><code>.schedule</code> - Expected work hours</li>
                        <li><code>.salary-range</code> - Salary or salary range</li>
                        <li><code>.location</code> - Single location</li>
                    </ul>                    
                    
                    <p><span class="label label-info">Note:</span> Job items have additional classes on sub elements that may not be used in the current design, however they could be used in the future.</p>
                    
                    <?php include("../sample/modules/schema-boilerplate.php"); ?>
                    
                    <h2>Example:</h2>
                    <?php include("../sample/modules/job-list.php"); ?>
                </div>
                 <div class="half">
                    <h2>Source Code:</h2>
                     
                     <div class="tab-group">
                        <ul id="sourceCode" class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#html" role="tab" data-toggle="tab">HTML Markup</a></li>
                            <li><a href="#microdata" role="tab" data-toggle="tab">Microdata</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content responsive">
                            <div class="tab-pane active" id="html">
                                 <textarea class="form-control" rows="10" cols="80"><?php include("../sample/modules/job-list.php"); ?></textarea>
                            </div>
                            <div class="tab-pane" id="microdata">
                                <p class="alert alert-info">NOTE: This module makes use of a <code>datetime</code> property set in the <strong>ISO 8601</strong> format. Be sure to set the time correctly for each job-item.</p>
                                 <textarea class="form-control" rows="10" cols="80"><?php include("../sample/modules/job-list-schema.php"); ?></textarea>
                            </div>
                        </div>
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