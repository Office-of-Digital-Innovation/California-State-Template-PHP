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

<title>Sample - Page Templates</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />
			<?php
			include_once("../ssi/head-css-js.php");
			?>

</head>

<body class="primary">

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
    
    <!-- Include Branding -->
				<?php
			include_once("../ssi/branding.php");
			?>
    
    <!-- Include Mobile Controls -->
		<?php
			include_once("../ssi/mobile-controls.php");
			?>
    
    <div class="navigation-search">
        
        <div id="head-search" class="search-container">
            <!-- Include Search -->
		<?php
			include_once("../ssi/search.php");
			?>
        </div>
        
        <!-- Include Navigation -->
		<?php
			include_once("../ssi/navigation.php");
			?>
    
    </div>
		<?php
			include_once("../ssi/header-slideshow-banner.php");
			?>
    
	<div class="header-decoration"></div>
</header>


<div id="main-content" class="main-content">
    <div class="wrapper">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Page Templates</li>
            </ol>
            
            <h1>Page Templates</h1>
            <p>There are four (4) master template page layouts to choose from. A pages layout can be controlled by applying two (2) classes to the <code>&lt;body&gt;</code> element. By default pages will have the smaller banner area and single column. Adding a class of <code>.primary</code> will designate a page a landing page and use the taller header image. Adding a class of <code>.two-column</code> will add a sidebar on the right side of the page. You are free to mix and match <code>.primary</code> and <code>.two-column</code> classes to achieve the layout desired. </p>
            
            <h2>Demonstration</h2>
            <p>Toggle the buttons to add or remove the appropriate <code>&lt;body&gt;</code> classes.</p>
            <button class="togglePrimary">Remove .primary</button> <button class="toggleTwoCol">Add .two-column</button>
            
        </main>
    </div>
</div>

			<?php
			include_once("../ssi/global-footer.php");
			?>
			<?php
			include_once("../ssi/scripts.php");
			?>

<script>
// -- DEMONSTRATION ONLY! -- //
$(document).ready(function(){        
    // Toggle .primary class
    $(".togglePrimary").click(function() {
        var btnLabel = $(this);
        // Toggle body class and button text when clicked
        if ($(this).html() == 'Add .primary') {
            btnLabel.html('Remove .primary');
            $("body").addClass("primary");
            $(".header-slideshow-banner").removeClass("hide");
        } else {
            btnLabel.html('Add .primary');
            $("body").removeClass("primary");
            $(".header-slideshow-banner").addClass("hide");
        }
    });
    
    // Toggle .two-column class
    $(".toggleTwoCol").click(function() {
        var btnLabel = $(this);
        // Toggle body class and button text when clicked
        if ($(this).html() == 'Add .two-column') {
            btnLabel.html('Remove .two-column');
            $("body").addClass("two-column");
        } else {
            btnLabel.html('Add .two-column');
            $("body").removeClass("two-column");
        }
    });
});
</script>

</body>
</html>