﻿<!doctype html>
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

<title>Megamenu Navigation</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />


<!--HEAD INCLUDE-->

    <!-- head content, for all pages -->
    <!-- Use highest compatibility mode -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- http://t.co/dKP3o1e -->
    <meta name="HandheldFriendly" content="True">
    <!-- for Blackberry, AvantGo -->
    <meta name="MobileOptimized" content="320">
    <!-- for Windows mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    <!-- For all browsers -->
    <link rel="stylesheet" href="/css/cagov.core.css">
    <script src="/js/search.js"></script>
    <!--
    Step 3
    Select a color scheme:

    <link rel="stylesheet" href="/css/colorscheme-oceanside.css">
    <link rel="stylesheet" href="/css/colorscheme-orangecounty.css">
    <link rel="stylesheet" href="/css/colorscheme-pasorobles.css">
    <link rel="stylesheet" href="/css/colorscheme-santabarbara.css">
    <link rel="stylesheet" href="/css/colorscheme-sierra.css">
    -->
    <link rel="stylesheet" href="/css/colorscheme-oceanside.css">
    <!-- selectivizr.com, emulates CSS3 pseudo-classes and attribute selectors in Internet Explorer 6-8 -->
    <!--[if (lt IE 9) & (!IEMobile)]>
    <script src="/js/libs/selectivizr-min.js"></script>
    <![endif]-->
    <!-- modernizr.com, feature detection -->
    <script src="/js/libs/modernizr-2.0.6.min.js"></script>
    <script src="/js/libs/modernizr-extra.min.js"></script>

    <!-- Load jQuery from CDN with fallback to local copy -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script>
    //Fall back to local copy if no jquery found
    if (typeof jQuery == 'undefined') {
        document.write(unescape("%3Cscript src='/js/libs/jquery-1.12.4.min.js' type='text/javascript'%3E%3C/script%3E"));
    }
    </script>

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
    <!-- Activate ClearType for Mobile IE -->
    <!--[if IE]>
    <meta http-equiv="cleartype" content="on">
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/js/libs/html5shiv.min.js"></script>
      <script src="/js/libs/respond.min.js"></script>
    <![endif]-->



<!--END HEAD INCLUDE-->




<style>
/*sub nav icon*/

.check {
    position: relative;
    cursor: pointer;
    border:1px solid #ccc;
    min-width:100px;
}

/* primary Colors */
input[type="checkbox"]:checked + .bg-primary--checked,
input[type="radio"]:checked + .bg-primary--checked,
input[type="checkbox"]:checked + * .bg-primary--checked,
input[type="radio"]:checked + * .bg-primary--checked {
  background-color: #72c02c !important; }

/* highlight Colors */
input[type="checkbox"]:checked + .bg-highlight--checked,
input[type="radio"]:checked + .bg-highlight--checked,
input[type="checkbox"]:checked + * .bg-highlight--checked,
input[type="radio"]:checked + * .bg-highlight--checked {
  background-color: #f8cc00 !important; }

/* White Colors */
input[type="checkbox"]:checked + .color-white--checked,
input[type="radio"]:checked + .color-white--checked,
input[type="checkbox"]:checked + * .color-white--checked,
input[type="radio"]:checked + * .color-white--checked {
  color: #fff !important; }

.color-white--checked.checked,
.checked .color-white--checked {
  color: #fff !important; }

</style>
</head>

<body class="two-column">

<header role="banner" id="header" class="global-header fixed">
    <div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>

    <!-- Include Utility Header -->
    <div class="utility-header">
        <div class="container">
            <div class="group">
                <div class="half">

                    <ul class="utility-links social-media-links">
                        <li><div class="header-cagov-logo"><a href="/"><img src="/images/Ca-Gov-Logo-Gold.svg" alt="CA.gov" /></a></div></li>
                        <li><a href="/"><span class="ca-gov-icon-home" aria-hidden="true"></span><span class="sr-only">Home</span></a></li>


                        <li><a class="ca-gov-icon-facebook" title="Share via Facebook" tabindex="0"></a></li>
                        <li><a class="ca-gov-icon-twitter" title="Share via Twitter" tabindex="0"></a></li>
                        <li><a class="ca-gov-icon-google-plus" title="Share via Google+" tabindex="0"></a></li>
                        <li><a class="ca-gov-icon-email" title="Share via email" tabindex="0"></a></li>
                    </ul>
                </div>
                <div class="half settings-links">
                    <ul class="utility-links ">
                        <li><a href="">Contact Us</a></li>
                        <li><a role="button" data-toggle="collapse" href="#siteSettings" aria-expanded="false" aria-controls="siteSettings"><span class="ca-gov-icon-gear" aria-hidden="true"></span> Settings</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    	<!-- Settings Bar -->	
		

		<!-- Include Branding -->
    <!-- header branding -->
    <div class="branding">
        <div class="header-organization-banner"><a href="/"><img src="/images/template-logo.png" alt="Organization Title" /></a></div>
    </div>





    <!-- Include Mobile Controls -->
    <!-- mobile navigation controls -->
    <div class="mobile-controls">

        <button class="mobile-control toggle-menu" aria-expanded="false" aria-controls="navigation"><span class="ca-gov-icon-menu" aria-hidden="true"></span><span class="sr-only">Menu</span></button>
        <span class="mobile-control-group mobile-header-icons">

            <!-- Add more mobile controls here. These will be on the right side of the mobile page header section -->
        </span>
        <span class="mobile-control toggle-search"><span class="ca-gov-icon-search" aria-hidden="true"></span><span class="sr-only">Search</span></span>
        <span class="mobile-control-group mobile-menu-icons">
            <!-- Add more mobile controls here. These will be on the top right section of the expanded mobile menu -->
        </span>
    </div>




    <div class="navigation-search">
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <gcse:searchbox-only resultsUrl="/serp.php"> enableAutoComplete="true"></gcse:searchbox-only>
        </div>
        
        
        <!--
    Step 2
    Select Navigation Type:

    Options are: megadropdown dropdown singlelevel
    -->

        <nav id="navigation" class="main-navigation megadropdown auto-highlight">
            <ul id="nav_list" class="top-level-nav">
                <li class="home-link nav-item">
                    <a href="/" class="first-level-link"><span id="nav_home_container" class="ca-gov-icon-home" aria-hidden="true"></span>Home</a>
                </li>
                <li class="nav-item">
                    <a href="/sample/" class="first-level-link"><span class="ca-gov-icon-gears"></span>Examples</a>
                    <div class="sub-nav">
                        <div class="half">
                            <ul class="second-level-nav">
                                <li class="unit1">
                                    <a href="/" class="second-level-link"><span class="ca-gov-icon-home" aria-hidden="true"></span>Link 1</a>
                                </li>
                                <li class="unit1">
                                    <a href="/" class="second-level-link"><span class="ca-gov-icon-home" aria-hidden="true"></span>Link 2</a>
                                </li>
                                <li class="unit2">
                                    <a href="/" class="second-level-link">
                                        <span class="ca-gov-icon-home" aria-hidden="true"></span>Link 3
                                        <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                    </a>
                                </li>
                                <li class="unit1">
                                    <a href="/" class="second-level-link"><span class="ca-gov-icon-home" aria-hidden="true"></span>Link 4</a>
                                </li>
                                <li class="unit2">
                                    <a href="/" class="second-level-link">
                                        <span class="ca-gov-icon-home" aria-hidden="true"></span>Link 5
                                        <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                    </a>
                                </li>
                                <li class="unit1">
                                    <a href="/" class="second-level-link"><span class="ca-gov-icon-home" aria-hidden="true"></span>Link 6</a>
                                </li>
                            </ul>
                        </div>

                        <div class="half">
                            <div class="nav-media">
                                <div class="media unit2">
                                    <div class="media-left">
                                        <a href="#"><img class="media-object" src="/sample/images/70x70.gif" alt="..."></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="title"><a href="">Public profile</a></div>
                                        <div class="subtitle">Subtitle</div>
                                        <div class="teaser">Cras justo odio, dapibus ac facilisis in, egestas eget quam.</div>
                                        <a href="" class="btn btn-default btn-xs pull-right">Read More</a>
                                    </div>
                                </div>

                                <div class="media unit2">
                                    <div class="media-left">
                                        <a href="#"><img class="media-object" src="/sample/images/70x70.gif" alt="..."></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="title"><a href="">News Title</a></div>
                                        <div class="subtitle">Subtitle</div>
                                        <div class="teaser">Cras justo odio, dapibus ac facilisis in, egestas eget quam.</div>
                                        <a href="" class="btn btn-default btn-xs pull-right">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="/" class="first-level-link"><span class="ca-gov-icon-info-bubble" aria-hidden="true"></span>About</a>
                    <div class="sub-nav">
                        <div class="half offset-half">
                            <ul class="second-level-nav">
                                <li class="unit1">
                                    <a href="/" class="second-level-link"><span class="ca-gov-icon-home" aria-hidden="true"></span>Link 1</a>
                                </li>
                                <li class="unit1">
                                    <a href="/" class="second-level-link"><span class="ca-gov-icon-home" aria-hidden="true"></span>Link 2</a>
                                </li>
                                <li class="unit2">
                                    <a href="/" class="second-level-link">
                                        <span class="ca-gov-icon-home" aria-hidden="true"></span>Link 3
                                        <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                    </a>
                                </li>
                                <li class="unit1">
                                    <a href="/" class="second-level-link"><span class="ca-gov-icon-home" aria-hidden="true"></span>Link 4</a>
                                </li>
                                <li class="unit2">
                                    <a href="/" class="second-level-link">
                                        <span class="ca-gov-icon-home" aria-hidden="true"></span>Link 5
                                        <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                    </a>
                                </li>
                                <li class="unit1">
                                    <a href="/" class="second-level-link"><span class="ca-gov-icon-home" aria-hidden="true"></span>Link 6</a>
                                </li>
                            </ul>
                        </div>

                        <div class="half with-image-left">
                            <div class="nav-media" style="background:url('/sample/images/sample-nav-image2.jpg')"></div>
                        </div>
                    </div>
                </li>

                <!-- LEFT ALIGNED IMAGE -->
                <li class="nav-item">
                    <a href="/" class="first-level-link"><span class="ca-gov-icon-flowchart" aria-hidden="true"></span>Structure</a>
                    <div class="sub-nav">
                        <!-- Offset class needed to fix positioning issue caused when positioning the image -->
                        <div class="three-quarters offset-quarter">
                            <ul class="second-level-nav">
                                <li class="unit1">
                                    <a href="/" class="second-level-link"><span class="ca-gov-icon-home" aria-hidden="true"></span>Link 1</a>
                                </li>
                                <li class="unit1">
                                    <a href="/" class="second-level-link"><span class="ca-gov-icon-home" aria-hidden="true"></span>Link 2</a>
                                </li>
                                <li class="unit2">
                                    <a href="/" class="second-level-link">
                                        <span class="ca-gov-icon-home" aria-hidden="true"></span>Link 3
                                        <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                    </a>
                                </li>
                                <li class="unit1">
                                    <a href="/" class="second-level-link"><span class="ca-gov-icon-home" aria-hidden="true"></span>Link 4</a>
                                </li>
                                <li class="unit2">
                                    <a href="/" class="second-level-link">
                                        <span class="ca-gov-icon-home" aria-hidden="true"></span>Link 5
                                        <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                    </a>
                                </li>
                                <li class="unit1">
                                    <a href="/" class="second-level-link"><span class="ca-gov-icon-home" aria-hidden="true"></span>Link 6</a>
                                </li>
                            </ul>
                        </div>
                        <div class="quarter with-image-left">
                            <div class="nav-media" style="background:url('/sample/images/sample-nav-image2.jpg')"></div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="/" class="first-level-link"><span class="ca-gov-icon-graduate" aria-hidden="true"></span>Instructions</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="first-level-link"><span class="ca-gov-icon-state" aria-hidden="true"></span>Webtools</a>
                </li>

                <li class="nav-item">
                    <a href="/" class="first-level-link"><span class="ca-gov-icon-lightbulb" aria-hidden="true"></span>Contribute</a>
                </li>
                <li class="nav-item" id='nav-item-search'>
                    <a href="javascript:;" class="first-level-link"><span class="ca-gov-icon-search" aria-hidden="true"></span>Search</a>
                </li>
            </ul>
        </nav>









    </div>
    <div class="header-decoration"></div>
</header>

<div id="main-content" class="main-content">
    <div class="section">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Megamenu (State Template v4)</li>
            </ol>
            
        	<h1>State Template v4 Original Megamenu</h1>
            <p>This megamenu has similar look and feel as the original State Template v4 megamenu. The functionality in both template v5 and template v4 is the same: the megamenu displays dropdown panels for sub navigation when the user hovers over a primary link. This style of menu can be set by including the <code>.megadropdown</code> as well as <code>.original</code> classes in the <code>&lt;nav&gt;</code> element.</p>
            <p><strong>Example:</strong> <br><code>&lt;nav id="navigation" class="main-navigation megadropdown original"&gt;</code> .</p> 
            <p>In the template distribution this markup can be found in <code>/ssi/navigation.php</code>.
            
          
            <h2>Sub Navigation Images</h2>
             <p>The sub navigation panels in the megamenu include the ability to place images next to the links. 
            Image are included by placing a <code>&lt;div&gt;</code> with class <code>.sub-nav-decoration</code> 
            as the last element in the <code>&lt;div&gt;</code> with class <code>.sub-nav</code>.</p>

            <p>The image is defined as a background image in the <code>style</code> attribute of the <code>.sub-nav-decoration</code> element. 
            The image will automatically be scaled and cropped to fit the provided area.</p>

            <p>The image size and position is determinde by an additional 
            class added to the <code>&lt;div&gt;</code> with class <code>.sub-nav</code>. These classes are as follows: </p>

            <ul>
                <li><code>.with-image-sm-right</code>: Places the image on the right, occupying one third of the sub navigation panel width.</li>
                <li><code>.with-image-md-right</code>: Places the image on the right, occupying half of the panel. l</li>
                <li><code>.with-image-sm-left</code>: Places the image on the left, occupying one third of the panel.</li>
                <li><code>.with-image-md-left</code>: Places the inmage on the left, occupying half of the panel.</li>
            </ul>

            <p>
                <strong>Example:</strong> <br>
            </p>

            <pre>&lt;li class="nav-item"&gt;
    &lt;a href="/" class="first-level-link"&gt;Link 3&lt;/a&gt;
            <strong>&lt;div class="sub-nav with-image-sm-right"&gt;</strong>
        &lt;ul class="second-level-nav"&gt;
            &lt;li&gt;
                …links
            &lt;/li&gt;
        &lt;/ul&gt;
            <strong>&lt;div class="sub-nav-decoration" style="background:url('/sample/images/sample-nav-image.jpg')"&gt;&lt;/div&gt;</strong>
     &lt;/div&gt;
&lt;/li&gt;
</pre>
            
<h2>More Navigation Samples</h2>
	<ul>
        <li><a href="navigation-single.php">Single Level Navigation</a></li>
        <li><a href="navigation-dropdown.php">Dropdown Navigation</a></li>	
        <li><a href="navigation-megamenu.php">Megamenu</a></li>
     </ul>

</main>
        
        <div class="main-secondary">

            <label class="check">
                <input class="hidden-up pos-abs top-0 left-0" name="radGroupBtn1_1" type="radio">
                <span class="btn btn-lg btn-block bg-highlight--checked rounded-0">Greenland</span>
            </label>

            <label class="check">
                <input class="hidden-up pos-abs top-0 left-0" name="radGroupBtn1_1" type="radio">
                <span class="btn btn-lg btn-block bg-highlight--checked rounded-0">UK</span>
            </label>


        </div>
    </div>
</div>



    <!-- Global Footer -->
    <footer id="footer" class="global-footer">
        <div class="container">
            <div class="row">
                <div class="three-quarters">
                    <ul class="footer-links">
                        <li><a href="#skip-to-content">Back to Top</a></li>
                        <li><a href="/use.php">Conditions of Use</a></li>
                        <li><a href="/privacy.php">Privacy Policy</a></li>
                        <li><a href="/accessibility.php">Accessibility</a></li>
                        <li><a href="/contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="quarter text-right">
                    <ul class="socialsharer-container">
                        <li><a href="https://www.flickr.com/groups/californiagovernment"><span class="ca-gov-icon-flickr" aria-hidden="true"></span><span class="sr-only">Flickr</span></a></li>
                        <li><a href="https://www.pinterest.com/cagovernment/"><span class="ca-gov-icon-pinterest" aria-hidden="true"></span><span class="sr-only">Pinterest</span></a></li>
                        <li><a href="https://twitter.com/cagovernment"><span class="ca-gov-icon-twitter" aria-hidden="true"></span><span class="sr-only">Twitter</span></a></li>
                        <li><a href="https://www.youtube.com/user/californiagovernment"><span class="ca-gov-icon-youtube" aria-hidden="true"></span><span class="sr-only">YouTube</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Copyright Statement -->
        <div class="copyright">
            <div class="container">
                Copyright &copy;
                <script>document.write(new Date().getFullYear())</script> State of California
            </div>
        </div>
    </footer>
    <!-- Extra Decorative Content -->
    <div class="decoration-last">&nbsp;</div>






    <script src="../js/cagov.core.js"></script>
 

</body>
</html>