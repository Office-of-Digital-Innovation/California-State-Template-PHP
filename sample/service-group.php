
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!-->
<html class="no-js" lang="en">
 <!--<![endif]-->
<head>
    <!--        California State Template
        Version 5.0.2

    Based on Twitter Bootstrap
    -->
    <meta charset="utf-8">

    <title>Sample - Service Group</title>

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

        <main class="main-primary">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="index.php">Examples</a></li>
                    <li class="active">Service Group</li>
                </ol>

                <h1>Service Tiles</h1>

                <p>The service tile group is a module that is experimental and will have more documentation coming soon. You can view the structure markup of the <code>service-group.php</code> file located in the<code> sample </code>folder. The key element of using this module is to ensure that each tile id corresponds to the appropreate panel id. For example the service tile<code> &lt;div tabindex=&quot;5&quot; class=&quot;service-tile&quot; data-tile-id=&quot;panel-5&quot;&gt; </code>corresponds to and uses the<code> &lt;div class=&quot;service-tile-panel&quot; data-tile-id=&quot;panel-5&quot;&gt;</code> panel.</p>
                <br>
            </div>

            <div class=" section-understated collapsed">
                <div class="service-group clearfix" id="service-group-123">
                    <?php include("../sample/modules/service-tiles.php"); ?>
                </div>

                <div class="more-button">
                    <div class="more-content fake-service-group"></div>
                    <a href="/service-directory.php"> class="btn-more inverse"><span class="ca-gov-icon-plus-fill more-icon" aria-hidden="true"></span><span class="more-title">More Services</span></a>
                </div>
            </div>


            <div class="container">
                <div class="group">

                    <h2><label for="sample-list-a">Source Code:</label></h2>
                    <textarea id="sample-list-a" class="form-control" rows="10" cols="80"><?php include("../sample/modules/service-tiles.php"); ?></textarea>
                    <div class="clearfix"><br /></div>
                </div>
            </div>
        </main>
    </div>

    <?php include_once("../ssi/global-footer.php"); ?>
    <?php include_once("../ssi/scripts.php"); ?>

</body>
</html>
