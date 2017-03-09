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

<title>Sample - News List</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php");?>
</head>

<body class="two-column">

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
    <!-- Include Branding -->
    <?php include_once("../ssi/branding.php");?>    
    <!-- Include Mobile Controls -->
    <?php include_once("../ssi/mobile-controls.php");?>    <div class="navigation-search">
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php");?>        </div>
        
        <!-- Include Navigation -->
        <?php include_once("../ssi/navigation.php");?>    </div>
	<div class="header-decoration"></div>
</header>

<div id="main-content" class="main-content">
    <div class="wrapper">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">News List</li>
            </ol>
            
            <h1>News List</h1>
                <p>A news list contains a repeating group of news items. To begin, wrap this module in a <code>&lt;section class="news-list"&gt;</code>. Then use <code>&lt;article class="news-item"&gt;</code> to group each intividual article.</p>
                <p>A <code>.news-item</code> has the following primary child elements.</p>
                <ul>
                    <li><code>.thumbnail</code> - Contains an image that is at least 150px wide</li>
                    <li><code>.headline</code> - A short article title that is linkable to article detail</li>
                    <li><code>.description</code> - A short summary or teaser for the article</li>
                    <li><code>.published</code> - Date the article was published</li>
                </ul>
                
                <?php include_once("../sample/modules/schema-boilerplate.php");?>                
                <h2>Example:</h2>
                <?php include_once("../sample/modules/news-list.php");?>                <hr>
                <h2><label for="sample-news-list">Source Code:</label></h2>
                    
                <div class="tab-group">
                    <ul id="sourceCode" class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#html" role="tab" data-toggle="tab">HTML Markup</a></li>
                        <li><a href="#microdata" role="tab" data-toggle="tab">Microdata</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content responsive">
                        <div class="tab-pane active" id="html">
                            <textarea id="sample-news-list" class="form-control" rows="10" cols="80"><?php include("../sample/modules/news-list.php");?></textarea>
                        </div>
                        <div class="tab-pane" id="microdata">
                            <p class="alert alert-info">NOTE: This module makes use of a <code>datetime</code> property set in the <strong>ISO 8601</strong> format. Be sure to set the time correctly for each news-item.</p>
                            <textarea id="sample-news-list" class="form-control" rows="10" cols="80"><?php include("../sample/modules/news-list-schema.php");?></textarea>
                        </div>
                    </div>
                </div>
                
        </main>
        
        <div class="main-secondary">
            <h2>Sidebar Example:</h2>
            <p>Using the <code>.news-item</code> module in the sidebar makes use of the same markup however it omits the <code>.description</code> node for sake of saving space.</p>
            <div class="panel panel-standout highlight">
                <div class="panel-heading">
                    <h4><span class="ca-gov-icon-info"></span> Latest News Headlines</h4>
                </div>
                <div class="panel-body">
                    <?php include("../sample/modules/news-list-sidebar.php");?>                    <hr>
                    <h2><label for="sample-news-list-sidebar">Source Code:</label></h2>
                    <textarea id="sample-news-list-sidebar" class="form-control" rows="10" cols="80"><?php include("../sample/modules/news-list-sidebar.php");?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("../ssi/global-footer.php");?>
<?php include_once("../ssi/scripts.php");?>
</body>
</html>