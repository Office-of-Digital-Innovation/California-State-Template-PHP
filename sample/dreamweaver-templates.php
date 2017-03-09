<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"><!-- InstanceBegin template="/Templates/2-column.dwt" codeOutsideHTMLIsLocked="false" --> <!--<![endif]-->
<head>
<!-- 
California State Template
Version 5.0
 
Based on Twitter Bootstrap
-->
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Dreamweaver Templates</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="MetaTags" -->
<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />
<!-- InstanceEndEditable -->
<?php include_once("../ssi/head-css-js.php");?><!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<!-- possible body classes are "primary" and "two-column" -->
<body class="two-column">

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
    
    <!-- Include Branding -->
    <?php include_once("../ssi/branding.php");?>    
    <!-- Include Mobile Controls -->
    <?php include_once("../ssi/mobile-controls.php");?>    
    <div class="navigation-search">
        
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php");?>        </div>
        
        <!-- Include Navigation -->
        <?php include_once("../ssi/navigation.php");?>    
    </div>
	
    <div class="header-decoration"></div>
</header>


<div id="main-content" class="main-content">
    <div class="wrapper">
        <main class="main-primary">
        <!-- InstanceBeginEditable name="MainContent" -->
            <article>
                <h1><span class="ca-gov-icon-arrow-down"></span> Dreamweaver Templates</h1>
                <p>For those webmasters that choose to use the Dreamweaver templates, the following is a set of basic instructions for using the templates. This is not intended to be a comprehensive tutorial on using Dreamweaver. There are many tutorials and books on using Dreamweaver and templates. Please refer to those educational sources for any help beyond this documentation.</p>
                <p>There are 4 templates provided, one for each template configuration. </p>
                <ul>
                    <li>1 column</li>
                    <li>1 column with ribbon</li>
                    <li>2 column</li>
                    <li>2 column with ribbon</li>
                </ul>
                <p>The templates with &quot;ribbon&quot; contain the large header with the &quot;swoosh&quot; embellishment. The ribbon templates are generally recommended for use as a homepage template. The 1 column and 2 column templates without the ribbon are recommended for internal pages.</p>
                <h2>Optional Slideshow</h2>
                <p>Pages created using the Ribbon templates  include a special Dreamweaver option for showing or hiding the <a href="/sample/rotating-header-banner.php">rotating slideshow</a> module commonly found on the homepage. By default the slideshow is turned on in the template, but it can be turned off by going to the 
                    <mark>Modify &gt; Template Properties</mark>
                    menu in Dreamweaver
                and toggle the Show OptionalSlideshow checkbox. Below is a screenshot showing the option highlighted in red.</p>
                <p><img src="images/dw-optionalslideshow.png" alt=""/></p>
                <p><span class="label label-info">NOTE:</span> Please refer to the <a href="rotating-header-banner.php">Rotating Header Banner</a> page for details on editing the slideshow</p>
            </article>
        <!-- InstanceEndEditable -->
        </main>
        <div class="main-secondary">
        <!-- InstanceBeginEditable name="SecondaryContent" -->
            <div class="profile-banner">
                <div class="inner" style="background:url(/images/banner/banner-guy.png) no-repeat right bottom">
                    <div class="banner-subtitle">Government Entity Title</div>
                    <div class="banner-title">Official Name</div>
                    <div class="banner-link"><a href="/">Associated Link</a></div>
                </div>
            </div>
            
            <div class="panel panel-standout">
                <div class="panel-heading">
                    <h2><span class="ca-gov-icon-info"></span> Panel Style D</h2>
                </div>
                <div class="panel-body">
                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                </div>
            </div>
        <!-- InstanceEndEditable -->
        </div>
    </div>
</div>


<?php include_once("../ssi/global-footer.php");?>
<?php include_once("../ssi/scripts.php");?>
</body>
<!-- InstanceEnd --></html>