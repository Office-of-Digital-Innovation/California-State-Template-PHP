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

  <title>Agency Profile</title>

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
                        <div class="quarter text-center">
                            <!-- <img src="images/template2014/header-organization.png" class="img-responsive hidden-xs" alt="Organization Name"> --> 
                            <!-- <img src="/sample/images/logo-cal-vet.png" class="img-responsive hidden-xs" alt="Organization Name"> -->
                            <!-- <img src="/sample/images/logo-cal-fire.png" class="img-responsive hidden-xs" alt="Organization Name"> -->
                            <img src="/sample/images/logo-dmv.png" class="img-responsive hidden-xs" alt="Department of Motor Vehicles">
                            
                            <!-- IF AGENCY LOGO NOT AVAILABLE, FALLBACK TO SEAL OF CALIFORNIA -->
                            <!-- <img src="/images/template2014/seal-of-california.png" class="img-responsive m-b" alt="Department of Motor Vehicles"> -->
                        </div>
                        <div class="half">
                            <h1 class="text-accent-p1 m-t-0">Department of Motor Vehicles  (DMV)</h1>
                            <!--  <p class="lead">Transportation</p> -->
                            <p>Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            
                            <div class="btn-row">
                                <a href="" class="btn btn-primary"><span class="ca-gov-icon-computer"></span> Website</a>
                                <a href="" class="btn btn-primary"><span class="ca-gov-icon-location"></span> Locations Near You</a>
                                <a href="" class="btn btn-primary"><span class="ca-gov-icon-contact-us"></span> Contact</a>
                                <a href="" class="btn btn-primary"><span class="ca-gov-icon-chat"></span> Live Chat</a>
                            </div>
                            
                            <div class="location contact" itemscope itemtype="http://schema.org/Organization">
                                <meta itemprop="name" content="Organization Name Here">
                                <div class="contact">
                                    <p class="other">
                                        General Information: <span itemprop="telephone">(916)323-5400</span><br>
                                        Hearing Impaired: <span itemprop="telephone">(916)323-5400</span><br>
                                        FAX: <span itemprop="faxNumber">(916)323-5440</span>
                                    </p>
                                </div>
                            </div>
                            
                            <ul class="list-inline list-unstyled">
                              <li>
                                <a href="">
                                  <span class="ca-gov-icon-twitter">
                                    <span class="sr-only">Twitter</span>
                                  </span>
                                </a>
                              </li>
                              <li>
                                <a href="">
                                  <span class="ca-gov-icon-facebook">
                                    <span class="sr-only">Facebook</span>
                                  </span>
                                </a>
                              </li>
                              <li>
                                <a href="">
                                  <span class="ca-gov-icon-google-plus">
                                    <span class="sr-only">Google+</span>
                                  </span>
                                </a>
                              </li>
                            </ul>
                        </div>
                                
                        <div class="quarter">
                            <!-- Embeded Youtube Video -->
                            <div class="video-player" data-sly-test="${!properties.lightbox}">
                              <iframe title="DMV Youtube video" class="youtube-player" src="https://www.youtube.com/embed/V3Z9ugTj4-o" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Section -->
            
            <?php include("ssi/section-service-group.php"); ?>
            
            
            
            <div class="section section-understated">
                <div class="container">
                    <?php include("ssi/section-service-advertisement.php"); ?>
                </div>
            </div>
            <!-- End Section -->
                
            <?php include("ssi/section-data-visualizations.php"); ?>
            <!-- End Section -->
            
            <div class="section section-default">
                <div class="container">
                    <h2>Frequently Asked Questions</h2>
                    <?php include("ssi/section-service-faq.php"); ?>
                </div>
            </div>
            <!-- End Section -->
        </main>
    </div>

  <?php include_once("ssi/global-footer.php"); ?>

  <?php include_once("ssi/scripts.php"); ?>
  


</body>

</html>
