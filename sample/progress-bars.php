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

<title>Sample - Progress Bars</title>

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
                <li class="active">Progress Bars</li>
            </ol>

            <div class="group">
                <div class="half">
                    <h1>Progress Bar</h1>
                    <div class="alert alert-danger" role="alert">
                        Progress bars use CSS3 transitions and animations to achieve some of their effects. These features are not supported in Internet Explorer 9 and below.
                    </div>
                    <p>Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars.</p>
                    <p>The progress bars can be colored with traditional theme colors plus new accent colors. Below is a list of possible color class names:</p>
                    <ul>
                        <li><code>.progress-bar-warning</code></li>
                        <li><code>.progress-bar-danger</code></li>
                        <li><code>.progress-bar-info</code></li>
                        <li><code>.progress-bar-success</code></li>
                        <li><code>.progress-bar-default</code></li>
                        <li><code>.progress-bar-primary</code></li>
                        <li><code>.progress-bar-accent1</code></li>
                        <li><code>.progress-bar-accent2</code></li>
                        <li><code>.progress-bar-accent3</code></li>
                        <li><code>.progress-bar-accent4</code></li>
                        <li><code>.progress-bar-accent5</code></li>
                        <li><code>.progress-bar-accent6</code></li>
                        <li><code>.progress-bar-accent7</code></li>
                        <li><code>.progress-bar-accent8</code></li>
                        <li><code>.progress-bar-accent9</code></li>
                    </ul>
                    <h2>Example</h2>
                    <?php include("../sample/modules/progress-bar.php"); ?>
                    
                </div>
                 <div class="half">
                    <h2><label for="basic-progress">Source Code:</label></h2>
                    <textarea id="basic-progress" class="form-control" rows="10" cols="80"><?php include("../sample/modules/progress-bar.php"); ?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                    <h2>Striped Progress Bars</h2>
                    <p>Uses a gradient to create a striped effect. Not available in IE9 and below.</p>
                    <?php include("../sample/modules/progress-bar-striped.php"); ?>
                </div>
                <div class="half">
                    <h2><label for="striped-progress">Source Code:</label></h2>
                    <textarea id="striped-progress" class="form-control" rows="10" cols="80"><?php include("../sample/modules/progress-bar-striped.php"); ?></textarea>
                </div>
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                    <h2>Animated Progress Bars</h2>
                    <p>Add <code>.active</code> to <code>.progress-bar-striped</code> to animate the stripes right to left. Not available in IE9 and below.</p>
                    <?php include("../sample/modules/progress-bar-animated.php"); ?>
                </div>
                <div class="half">
                    <h2><label for="animated-progress">Source Code:</label></h2>
                    <textarea id="animated-progress" class="form-control" rows="10" cols="80"><?php include("../sample/modules/progress-bar-animated.php"); ?></textarea>
                </div>
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                    <h2>Stacked Progress Bars</h2>
                    <p>Place multiple bars into the same <code>.progress</code> to stack them.</p>
                    <?php include("../sample/modules/progress-bar-stacked.php"); ?>
                </div>
                <div class="half">
                    <h2><label for="stacked-progress">Source Code:</label></h2>
                    <textarea id="stacked-progress" class="form-control" rows="10" cols="80"><?php include("../sample/modules/progress-bar-stacked.php"); ?></textarea>
                </div>
            </div>
        </main>
    </div>
</div>


<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>