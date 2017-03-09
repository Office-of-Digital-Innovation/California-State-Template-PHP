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

<title>Sample - Featured Narrative</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php");?>
</head>

<body>

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
                <li class="active">Featured Narrative</li>
            </ol>
           
         <h1>Featured Narrative</h1>
            <p>Calls out an important bit of content within paragraphs.</p>
            <div class="group">
                <article class="half">
                    <h2>Example:</h2>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <?php include("../sample/modules/featured-narrative.php");?>                    <p>Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porta sem malesuada magna mollis euismod. Vestibulum id ligula porta felis euismod semper.</p>
                </article>
                 <div class="half">
                    <h2><label for="sample-featured-narrative">Source Code:</label></h2>
                    <textarea id="sample-featured-narrative" class="form-control" rows="10" cols="80"><?php include("../sample/modules/featured-narrative.php");?></textarea>
                </div> 
            </div>
        </main>
    </div>
</div>

<?php include_once("../ssi/global-footer.php");?>
<?php include_once("../ssi/scripts.php");?>
</body>
</html>