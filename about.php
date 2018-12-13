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
        Version 5.0.3

Based on Twitter Bootstrap
-->
  <meta charset="utf-8">

  <title>About State Template</title>

  <meta name="Author" content="State of California" />
  <meta name="Description" content="State of California" />
  <meta name="Keywords" content="California, government" />

  <?php include_once("ssi/head-css-js.php"); ?>

</head>

<!-- possible body classes are "primary" and "two-column" -->

<body>

    <header role="banner" id="header" class="global-header fixed">
        <div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>

        

        <!-- Include Utility Header -->
        <?php include_once("ssi/utility-header.php"); ?>

        <!-- Settings Bar -->
        <?php include_once("ssi/settings-bar.php"); ?>

        <!-- Include Branding -->
        <?php include_once("ssi/branding.php"); ?>

        <!-- Include Mobile Controls -->
        <?php include_once("ssi/mobile-controls.php"); ?>

        <div class="navigation-search">
          <!-- Include Navigation -->
          <?php include_once("ssi/navigation.php"); ?>

            <div id="head-search" class="search-container">
                <!-- Include Search -->
                <?php include_once("ssi/search.php"); ?>
            </div>

        </div>


        <div class="header-decoration"></div>

    </header>


    <div id="main-content" class="main-content">
        <div class="container">
            <main class="main-primary">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="/sample/index.php">Examples</a></li>
                    <li class="active">About</li>
                </ol>
                <article class="half p-l-0">
                    <h1>State Template v5</h1>
                    <p>The California State Template is an open source web template and  standard offered by the California Department of Technology to state agencies and departments within the State of California and beyond. </p>
                    <p>As part of this release  GitHub is leveraged  to provide and encourage better collaboration. The California state template is open sourced and belongs to the California web community and participation is welcome. </p>


                    <p>
                        The v5 release there will be several versions available namely HTML/Dreamweaver, .NET (MVC and Web Forms), PHP and WordPress.
                    </p>
                    <p>This is a living document and changes to this template, the sample and instructional pages are made daily and can be tracked on the <a href="https://github.com/Office-of-Digital-Innovation/California-State-Template-v5" target="_blank">GitHub Repository</a>.</p>

                    <p><span class="label label-info">Note:</span> You will be able to download each version using the GitHub repository links. Look for the &quot;Clone or Download&quot; button on the respective GitHub page.</p>
                    <p>&nbsp;</p>

                </article>

                <article class="half p-t-md">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><span class="ca-gov-icon-download"></span> Available Downloads</h2>
                        </div>
                        <div class="panel-body">
                            <ul class="list-standout">
                                <li>
                                    <a href="https://github.com/Office-of-Digital-Innovation/California-State-Template-v5" target="_blank"><strong>HTML/Dreamwever</strong></a><br>
                                    This is the standard HTML/Dreamweaver package with sample content
                                </li>
                                <li>
                                    <a href="https://github.com/Office-of-Digital-Innovation/California-State-Template-MVC-v5" target="_blank"><strong>.NET(MVC)</strong></a><br>
                                    This is the .NET MVC package that includes setup instructions
                                </li>
                                <li>
                                    <a href="https://github.com/Office-of-Digital-Innovation/California-State-Template-Web-Forms" target="_blank"><strong>.NET(Web Forms)</strong></a><br>
                                    This is the .NET Web Forms package  that includes setup instructions
                                </li>
                                <li>
                                    <strong><a href="https://github.com/Office-of-Digital-Innovation/California-State-Template-PHP" target="_blank">PHP</a></strong><br>
                                    This is the PHP package that includes setup instructions
                                </li>
                                <li>
                                    <strong><a href="http://caweb.ca.gov/" target="_blank">WordPress CMS</a></strong><br>
                                    Please contact
                                    <a href="mailto:Info.Eservices@state.ca.gov">Info.Eservices@state.ca.gov</a> for more information
                                </li>
                            </ul>
                        </div>
                    </div>

                </article>
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
  


</body>

</html>
