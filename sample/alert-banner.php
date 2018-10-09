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

<title>Sample - Alert Banner</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<body>

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
    <!-- Alert Banner -->
    <?php include_once("../ssi/alert-banner.php"); ?>

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
                <li class="active">Spacing</li>
            </ol>
            
            <h1>Alert Banner</h1>
                
                <div class="group">
                    <div class="two-thirds">
                        <p>You can now add an alert banner at the top of your website for communicating important information which is meant to alert users. The Alert banner can be closed by the user using the x button in the top right corner.</p>
                        <h2>Usage</h2>
                        <p>Generally an Alert Banner will be added to your home page although it can be included on any page. <br>
                        Add the <code>&lt;?php include_once("/ssi/alert-banner.php"); ?&gt;</code> as the first item in your header.<br>
</p><br>
                     <button onClick="pageReload()" class="btn btn-secondary m-r-sm m-b-sm">Reload Alert Banner</button>
                   <br>   <br> 
<pre>
&lt;header role="banner" id="header" class="global-header"&gt;
&lt;div id="skip-to-content"&gt;&lt;a href="#main-content"&gt;Skip to Main Content&lt;/a&gt;&lt;/div&gt;<br>
&lt;!-- Alert Banner --&gt;
&lt;?php include_once("/ssi/alert-banner.php"); ?&gt;
...
&lt;/header&gt;
</pre> 
                       
                    
                        <h2>Other alerts and alert states</h2>
                        <p>Alert Success</p>
                        <div class="alert alert-success">
                            <strong>Well done!</strong> You successfully read this important alert message.
                            <a href="" class="alert-link btn btn-default btn-xs">Read More</a>
                        </div>
                         <p>Alert Warning</p>
                        <div class="alert alert-warning">
                            <strong>Warning!</strong> Better check yourself, you're not looking too good.
                            <a href="" class="alert-link btn btn-default btn-xs">Read More</a>
                        </div>
                        <p>Alert Danger</p>
                        <div class="alert alert-danger">
                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                            <a href="" class="alert-link btn btn-default btn-xs">Read More</a>
                        </div>
                        <p>Alert Severe</p>
                        <div class="alert alert-severe" role="alert">
                                <span class="alert-level"><span class="ca-gov-icon-important" aria-hidden="true"></span>SEVERE ALERT!</span><span class="alert-text"> Flash Flood in Sacramento until 12:15 PM.</span>
                                <a href="" class="alert-link btn btn-default btn-xs">Read More</a>
              
                        </div>   
                        <p>Alert Info</p>
                        <div class="alert alert-info" role="alert">
                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                            <a href="" class="alert-link btn btn-default btn-xs">Read More</a>
</div>                
                    </div>
                </div>
        </main>
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

<script>
	//Demo Purposes Only
function pageReload() {
    location.reload();
	window.scrollTo(0, 0);
}
</script>

</body>
</html>