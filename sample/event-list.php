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

<title>Sample - Event List</title>

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
                <li class="active">Event List</li>
            </ol>
            
            <h1>Event List</h1>
            <p>An event list contains a repeating group of event items. To begin, wrap this module in a <code>&lt;section class="event-list"&gt;</code>. Then use <code>&lt;article class="event-item"&gt;</code> to group each individual event together.</p>
            <p>An <code>.event-item</code> has the following primary child elements.</p>
            <ul>
                <li><code>.title</code> - A short title that is linkable to event detail</li>
                <li><code>.description</code> - A short summary or teaser for the event</li>
                <li><code>.start-date</code> - Date of the event</li>
            </ul>
                
            <p>An event list can appear in location other than the main content area. The sidebar or inside of a panel for example. The markup in all cases will be exactly the same. <strong>NOTE:</strong> When used within the sidebar, the icons will be removed automatically.</p>
            
            <?php include("../sample/modules/schema-boilerplate.php"); ?>
            
            <h2>Example:</h2>
            <?php include("../sample/modules/event-list.php"); ?>
            
            <h2>Source Code:</h2>
            
            <div class="tab-group">
                <ul id="sourceCode" class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#html" role="tab" data-toggle="tab">HTML Markup</a></li>
                    <li><a href="#microdata" role="tab" data-toggle="tab">Microdata</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content responsive">
                    <div class="tab-pane active" id="html">
                         <textarea class="form-control" rows="10" cols="80"><?php include("../sample/modules/event-list.php"); ?></textarea>
                    </div>
                    <div class="tab-pane" id="microdata">
                        <p class="alert alert-info">NOTE: This module makes use of a <code>datetime</code> property set in the <strong>ISO 8601</strong> format. Be sure to set the time correctly for each event-item.</p>
                         <textarea class="form-control" rows="10" cols="80"><?php include("../sample/modules/event-list-schema.php"); ?></textarea>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h2>Event List with Thumbnails</h2>
            <p>Event can also include a thumbnail image and layout that is similar to News Lists. To achieve this layout, add a <code>.thumbnail</code> div surrounding an image just inside the <code>article</code> element. Then wrap <code>.title</code>, <code>.description</code>, and <code>.start-date</code> in a new div called <code>.info</code> This will allow the image to be floated left of the information block.</p>
            
            <h3>Example:</h3>
            <?php include("../sample/modules/event-list-thumbnail.php"); ?>
            
            <h2>Source Code:</h2>
            
            <div class="tab-group">
                <ul id="sourceCodeThumb" class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#thumbhtml" role="tab" data-toggle="tab">HTML Markup</a></li>
                    <li><a href="#thumbmicrodata" role="tab" data-toggle="tab">Microdata</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content responsive">
                    <div class="tab-pane active" id="thumbhtml">
                         <textarea class="form-control" rows="10" cols="80"><?php include("../sample/modules/event-list-thumbnail.php"); ?></textarea>
                    </div>
                    <div class="tab-pane" id="thumbmicrodata">
                        <p class="alert alert-info">NOTE: This module makes use of a <code>datetime</code> property set in the <strong>ISO 8601</strong> format. Be sure to set the time correctly for each event-item.</p>
                         <textarea class="form-control" rows="10" cols="80"><?php include("../sample/modules/event-list-thumbnail-schema.php"); ?></textarea>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h3>Example of events in a panel:</h3>
            <p>Events can be included in a panel. See <a href="panels-photo.php">Panels with Photos</a>.</p>
            <div class="panel panel-overstated photo-left">
                <div class="panel-heading">
                    <h4>Event in panel</h4>
                    <div class="options">
                        <a href="" class="btn btn-default">More events</a>
                    </div>
                </div>
                <div class="panel-body">
                    <?php include("../sample/modules/event-list.php"); ?>
                    <div class="photo" style="background-image: url('/sample/images/sample-nav-image.jpg');"></div>
                </div>
            </div>
            
        </main>
        <div class="main-secondary">
        	<h2>Sidebar Example:</h2>
            <div class="panel panel-standout highlight">
                <div class="panel-heading">
                    <h4><span class="ca-gov-icon-info"></span> Latest Events</h4>
                </div>
                <div class="panel-body">
                    <?php include("../sample/modules/event-list.php"); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>