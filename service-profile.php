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

  <title>Service Profile</title>

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
        <main class="main-primary">

            <div class="section section-standout">
                <div class="container">
                    <div class="group">
                        <div class="third">
                            <!-- If image is availabele show it -->
                            <!-- <img src="http://www.elegantthemes.com/preview/Divi/wp-content/uploads/2014/04/rock-trail.jpg" alt="" class="img-responsive img-thumbnail"> --> 
                            <!-- If no image but icon is available show it instead -->
                            <div class="service-icon ca-gov-icon-capitol"></div>
                            <!-- If nothing is selected show service icon -->
                        </div>
                        <div class="two-thirds">
                            <h1 class="m-y-0 text-accent-p1">Renew Vehicle Registration</h1>
                            <p class="lead"><a href="">Department of Motor Vehicles (DMV)</a></p>
                            <p>Placeholder Description: Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue rutrum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla.</p>
                            
                            <div class="btn-row m-y">
                                <a href="" class="btn btn-primary btn-block-xs"><span class="ca-gov-icon-computer"></span> Launch Service</a>
                                <a href="" class="btn btn-primary btn-block-xs"><span class="ca-gov-icon-location"></span> Locations Near You</a>
                                <a href="" class="btn btn-primary btn-block-xs"><span class="ca-gov-icon-contact-us"></span>  Contact</a>
                            </div>
                            
                            <div class="location" itemscope itemtype="http://schema.org/Organization">
                                <meta itemprop="name" content="Organization Name Here">
                                <p class="other">
                                    General Information: <span itemprop="telephone">(916)323-5400</span><br>
                                    Hearing Impaired: <span itemprop="telephone">(916)323-5400</span><br>
                                    Fax <span itemprop="faxNumber">(916)323-5400</span><br>
                                </p>
                            </div>
                            <div class="btn-row m-t">
                                <a href="" class="btn btn-primary btn-xs">Renew Driver License</a>
                                <a href="" class="btn btn-primary btn-xs">Find a Traffic School</a>
                                <a href="" class="btn btn-primary btn-xs">Release of Liability</a>
                                <a href="" class="btn btn-primary btn-xs">Name Change</a>
                            </div> 
                            
                            <ul class="list-inline list-unstyled m-t-md">
                                <li><a href=""><span class="ca-gov-icon-twitter" aria-hidden="true"><span class="sr-only">Twitter</span></span></a></li>
                                <li><a href=""><span class="ca-gov-icon-facebook" aria-hidden="true"><span class="sr-only">Facebook</span></span></a></li>
                                <li><a href=""><span class="ca-gov-icon-google-plus" aria-hidden="true"><span class="sr-only">Google+</span></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Section -->
            
            
            <div class="section section-default" id="frequently-asked-questions">
                <div class="container">
                    <h2>Frequently Asked Questions</h2>
                    <?php include("ssi/section-service-faq.php"); ?>
                </div>
            </div>

            <?php include("ssi/section-data-visualizations.php"); ?>
            
            <div class="section section-understated">
                <div class="container">
                    <?php include("ssi/section-service-advertisement.php"); ?>
                </div>
            </div>
            <!-- End Section -->
            
            <?php include("ssi/section-related-links.php"); ?>
            
            <div class="section">
                <div class="container">
                    <?php include("ssi/google-cse.php"); ?>
                </div>
            </div>
   
        </main>
    </div>


    <?php include("ssi/section-footer2.php"); ?>
    
    <?php include_once("ssi/global-footer.php"); ?>

    <?php include_once("ssi/scripts.php"); ?>
    
    

</body>

</html>
