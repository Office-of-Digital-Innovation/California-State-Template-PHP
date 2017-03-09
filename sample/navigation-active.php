<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<!--
California State Template
Version 4.0

Based on Twitter Bootstrap
-->
<meta charset="utf-8">

<title>Megamenu Navigation</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php");?>
</head>

<body class="primary two-column">

<header role="banner" id="header" class="global-header">
  <div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>

    <!-- Include Branding -->
    <?php include_once("../ssi/branding.php");?>
    <!-- Include Mobile Controls -->
    <?php include_once("../ssi/mobile-controls.php");?>
    <div class="navigation-search">

        <div id="head-search" class="search-container featured-search">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php");?>        </div>

        <!-- Include Navigation -->
        <?php include_once("../ssi/navigation.php");?>
    </div>

        <!-- Step 5: Header Images -->
        <!-- Include for optional slideshow banner -->
        <?php include_once("../ssi/header-single-banner.php");?>
  <div class="header-decoration"></div>
</header>

<div id="main-content" class="main-content">
    <div class="wrapper">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Megamenu</li>
            </ol>

          <h1>Active Navigation Item</h1>
            <p>The active navigation item is a highlighted first level link in the main navigation that represents either the current page, or a parent of the current page.<p>
            <p>By default, the active item is automatically determined by the location of a file in the folder structure of the site. For example, if a page has the url <code>http://example.com/sample/page.php</code>, then the navigation item linking to <code>http://example.com/sample/</code>, which is the main page of the sub-folder (and the parent page), will be highlighted.</p>
            <p>This default behavior can be disabled by removing the class <code>auto-highlight</code> from the main navigation element <code>&lt;nav id="navigation" class="main-navigation ... <strong>auto-highlight</strong>" &gt;</code></p>

            <h2>Setting the Active Navigation Item Manually</h2>
            <p>The active link in the main navigation can be set manually on a page by page basis by adding a bit of javascript that overrides the <code>defaultActiveLink</code> variable.</p>
            <p>Add the following snippet of javascript to the <code>head</code> of the page. When this variable is present, it will override the automatic setting described above.</p>

            <!-- DEMO: Change the active link to "Services" -->
            <script type="text/javascript">
        var defaultActiveLink = "Services";
      </script>
            <!-- End Demo -->

            <h5>Example:</h5>

<pre>
&lt;script type="text/javascript"&gt;
  var defaultActiveLink = "Services";
&lt;/script&gt;
</pre>
      <p><span class="label label-info">NOTE:</span> This example finds the link with the text "Services" and set it as the active item (as seen on this page). </p>


        </main>

        <div class="main-secondary">
            <?php include_once("../sample/modules/profile-banners.php");?>        </div>
    </div>
</div>


<?php include_once("../ssi/global-footer.php");?>
<?php include_once("../ssi/scripts.php");?>
</body>
</html>
