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

<title>Search Results - Organization</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />
    <?php
	include_once("ssi/head-css-js.php");
	?>
<link rel='stylesheet' href='http://www.google.com/cse/style/look/default.css' type='text/css'/>
</head>

<!-- possible body classes are "primary" and "two-column" -->
<body>

<header role="banner" id="header" class="global-header fixed">
    <div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
    
    <!-- Location Bar -->
	    <?php
	include_once("ssi/location-bar.php");
	?>

    <!-- Settings Bar -->
	    <?php
	include_once("ssi/settings-bar.php");
	?>

    <!-- Alert Banner -->
	    <?php
	include_once("ssi/alert-banner.php");
	?>

    <!-- Include Utility Header -->
	<?php
	include_once("ssi/utility-header.php");
	?>

    <!-- Include Branding -->
	<?php
	include_once("ssi/branding.php");
	?>

    <!-- Include Mobile Controls -->
	<?php
	include_once("ssi/mobile-controls.php");
	?>

    <div class="navigation-search">
        <div id="head-search" class="search-container">
            <!-- Include Search -->
	<?php
	include_once("ssi/search..php");
	?>
        </div>
        <!-- Include Navigation -->
	<?php
	include_once("ssi/navigation.php");
	?>
    </div>

    <div class="header-decoration"></div>
</header>

<div id="main-content" class="main-content">
    <div class="wrapper">
        <main class="main-primary">
		    <?php
			include_once("ssi/search-results-standalone.php");
			?>
		
            
            <!-- <script src='//www.google.com/jsapi' type='text/javascript'></script> -->
            <script type='text/javascript'>
            google.load('search', '1', {language: 'en', style: google.loader.themes.DEFAULT});
            google.setOnLoadCallback(function() {
                var customSearchOptions = {};
                var customSearchControl = new google.search.CustomSearchControl('001779225245372747843:mdsmtl_vi1a', customSearchOptions); // Step 7: Update this value with your search engine unique ID.
                customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
                customSearchControl.setLinkTarget(google.search.Search.LINK_TARGET_SELF); // use same tab instead of opening a new tab when clicking a link
                var options = new google.search.DrawOptions();
                options.enableSearchResultsOnly();
                options.setAutoComplete(true);
                customSearchControl.draw('cse', options);
                function parseParamsFromUrl() {
                    var params = {};
                    var parts = window.location.search.substr(1).split('&');
                    for (var i = 0; i < parts.length; i++) {
                        var keyValuePair = parts[i].split('=');
                        var key = decodeURIComponent(keyValuePair[0]);
                        params[key] = keyValuePair[1] ?
                            decodeURIComponent(keyValuePair[1].replace(/\+/g, ' ')) :
                            keyValuePair[1];
                    }
                    return params;
                }
                var urlParams = parseParamsFromUrl();
                var queryParamName = 'q';
                if (urlParams[queryParamName]) {
                    customSearchControl.execute(urlParams[queryParamName]);
                }
            }, true);
            </script>
        </main>
    </div>
</div>


<?php
		include_once("ssi/global-footer.php");
	?>
	

	<?php
		include_once("ssi/scripts.php");
	?>

</body>
</html>