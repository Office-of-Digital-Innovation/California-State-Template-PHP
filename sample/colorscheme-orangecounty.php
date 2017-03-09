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

<title>Color Scheme: Orange County</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<!-- head content, for all pages -->

<!-- http://t.co/dKP3o1e -->
<meta name="HandheldFriendly" content="True"> <!-- for Blackberry, AvantGo -->
<meta name="MobileOptimized" content="320"> <!-- for Windows mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- For all browsers -->
<link rel="stylesheet" href="/css/cagov.core.css">

<link rel="stylesheet" href="/css/colorscheme-orangecounty.css">

<!-- selectivizr.com, emulates CSS3 pseudo-classes and attribute selectors in Internet Explorer 6-8 -->
<!--[if (lt IE 9) & (!IEMobile)]>
<script src="/js/libs/selectivizr-min.js"></script>
<![endif]-->

<!-- modernizr.com, feature detection -->
<script src="/js/libs/modernizr-2.0.6.min.js"></script>

<!-- For iPad 3-->
<link rel="apple-touch-icon" sizes="144x144" href="/images/template2014/apple-touch-icon-144x144.png">
<!-- For iPhone 4 -->
<link rel="apple-touch-icon" sizes="114x114" href="/images/template2014/apple-touch-icon-114x114.png">
<!-- For iPad 1-->
<link rel="apple-touch-icon" sizes="72x72" href="/images/template2014/apple-touch-icon-72x72.png">
<!-- For iPhone 3G, iPod Touch and Android -->
<link rel="apple-touch-icon" href="/images/template2014/apple-touch-icon-57x57.png">
<!-- For Nokia -->
<link rel="shortcut icon" href="/images/template2014/apple-touch-icon-57x57.png">
<!-- For everything else -->
<link rel="shortcut icon" href="/favicon.ico">

<!--Microsoft. Activate ClearType. Use highest compatibility mode, enable Chrome Frame -->
<!--[if IE]>
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="/js/libs/html5shiv.min.js"></script>
  <script src="/js/libs/respond.min.js"></script>
<![endif]-->

</head>

<!-- possible body classes are "primary" and "two-column" -->
<body class="primary two-column">

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
    <!-- Include Branding -->
    <?php include_once("../ssi/branding.php");?>    
    <!-- Include Mobile Controls -->
    <?php include_once("../ssi/mobile-controls.php");?>    <div class="navigation-search">
        <div id="head-search" class="search-container featured-search">
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
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Orange County</li>
            </ol>
                            
            <!-- Content Demonstration -->
            <?php include_once("../sample/modules/headers.php");?>            
        </main>
        
        <div class="main-secondary">
            <?php include_once("../sample/modules/profile-banners.php");?>            <?php include_once("../sample/modules/panels-sidebar.php");?>        </div>
        
    </div>
</div>


<?php include_once("../ssi/global-footer.php");?>
<?php include_once("../ssi/scripts.php");?>
</body>
</html>