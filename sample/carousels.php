<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
<!--
California State Template
Version 4.0

Based on Twitter Bootstrap
-->
    <meta charset="utf-8">
    <title>Sample - Carousels</title>
    <meta name="Author" content="State of California" />
    <meta name="Description" content="State of California" />
    <meta name="Keywords" content="California, government" />
    <?php include_once("../ssi/head-css-js.php"); ?>
</head>

<!-- possibly body classes are primary and two-column -->
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
        <div class="section">
            <main class="main-primary">
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="index.php">Examples</a></li>
                    <li class="active">Carousels</li>
                </ol>

                <h1>Carousels and Slideshows</h1>

                <div class="container">
                    <div class="two-thirds">
                        <h2>Content Carousel</h2>
                        <p>A content carousel component provides a solution for placing text or other content bove an image. With responsive and dynamic content in mind , there is two element configurations for setting the height of the slide. One which fits to the content, and one which fits to the image.</p>
                        <p>Our recommendation is use the <b>content fit</b> when you have a large amount of text, descriptive content, etc. <i>Note: </i> that in this case your background image should be a generic pattern or design.</p>
                        <p>On the other hand you should use the <b>image fit</b> when you have only a single line or so of text, a simple header or button, html5 video or any content which would take up less space than your image or video.</p>
                        <p>For any content carousel item, you can also apply the class of <code>backdrop</code> which will apply a slight opaque grey background to the content. This is useful when your images do not have enough contrast with your text.</p>
                    </div>
                    <div class="third">
                        <h2><label for="sample-blank">Source Code:</label></h2>
                        <textarea id="sample-blank" class="form-control" rows="10" cols="80"><?php include("../sample/modules/carousel-content-blank.php"); ?></textarea>
                    </div>
                </div>
                <div class="container">
                    <div class="two-thirds">
                        <h2>Content Carousel (content fit)</h2>
                        <p>To create a content fit, we use a background-image on the outermost element of our item. One could of course not set the background-image and the carousel item will still fit the content,  but you will have to be aware of issues between the carousel container's background color and your content.</p>
<pre><code>
&lt;div class="item" style="background-image: url('/url/to/image');"&gt;
  &lt;div class="content-container"&gt;
    &lt;div class="content"&gt;
    &lt;!-- your content --&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                        <?php include("../sample/modules/carousel-content.php"); ?>
                    </div>
                    <div class="third">
                        <h2><label for="sample-content">Source Code:</label></h2>
                        <textarea id="sample-content" class="form-control" rows="10" cols="80"><?php include("../sample/modules/carousel-content.php"); ?></textarea>
                    </div>
                </div>

                <hr>

                <div class="container">
                    <div class="two-thirds">
                        <h2>Content Carousel (image fit)</h2>
                        <p>To create an image fit, we use an image element contained within our item. If the image element is missing the item will simply fallback to being a content fit item. <i>Warn:</i> if the image url is broken or pointing to the wrong location, the element will have 0 height.</p>
<pre><code>
  &lt;div class="item"&gt;
    &lt;img src="/sample/images/gallery/sierra-big.jpg" alt="background" /&gt;
      &lt;div class="content-container"&gt;
          &lt;div class="content"&gt;
              &lt;!-- your content --&gt;
          &lt;/div&gt;
      &lt;/div&gt;
  &lt;/div&gt;
</code></pre>
                        <?php include("../sample/modules/carousel-content-fit-image.php"); ?>
                    </div>
                    <div class="third">
                        <h2><label for="sample-fit-img">Source Code:</label></h2>
                        <textarea id="sample-fit-img" class="form-control" rows="10" cols="80"><?php include("../sample/modules/carousel-content-fit-image.php"); ?></textarea>
                    </div>
                </div>

                <hr>

                <h2>Video Carousel</h2>
                <?php include("../sample/modules/carousel-video.php"); ?>
                <h2><label for="sample-carousel-video">Source Code:</label></h2>
                <textarea id="sample-carousel-video" class="form-control" rows="10" cols="80"><?php include("../sample/modules/carousel-video.php"); ?></textarea>

                <hr>

                <h2>Media Carousel</h2>
                <p>The Media Carousel is often placed within a panel going inside <code>&lt;div class="panel-body"&gt;</code>. It can also simply be placed by itself. It will scroll a set of items contained in a container with class <code>.carousel-media</code></p>
                <h3>Media Carousel in Panel</h3>
                <div class="panel panel-overstated">
                    <div class="panel-heading">
                        <h4>Latest Media</h4>
                        <div class="options">
                            <a href="" class="btn btn-default">More Items</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php include("../sample/modules/carousel-media.php"); ?>
                    </div>
                </div>

                <h3>Media Carousel without Panel</h3>
                <?php include("../sample/modules/carousel-media.php"); ?>
                <h2><label for="sample-carousel-media">Source Code:</label></h2>
                <textarea id="sample-carousel-media" class="form-control" rows="10" cols="80"><?php include("../sample/modules/carousel-media.php"); ?></textarea>

                <hr>

                <h1>Link Carousel</h1>
                <p>The Link Carousel scrolls through a set of image links. It will scroll a set of items contained in a container with class <code>.carousel-link</code>.</p>
                <h2>Link Icon Carousel Example</h2>
                <?php include("../sample/modules/carousel-link.php"); ?>
                <h2><label for="sample-carousel-link">Source Code:</label></h2>
                <textarea id="sample-carousel-link" class="form-control" rows="10" cols="80"><?php include("../sample/modules/carousel-link.php"); ?></textarea>
            </main>

            <div class="main-secondary">
                <h1>Social Media Slider</h1>
                <p>The Social Media Slider displays one item at a time. It will slide a set of items contained in a container with class <code>.carousel-slider</code>.</p>
                <h2>Social Media Slider Example</h2>
                <?php include("../sample/modules/carousel-slider.php"); ?>
                <h2><label for="sample-carousel-slider">Source Code:</label></h2>
                <textarea id="sample-carousel-slider" class="form-control" rows="10" cols="80"><?php include("../sample/modules/carousel-slider.php"); ?></textarea>
            </div>
        </div>
    </div>

    <?php include_once("../ssi/global-footer.php"); ?>

    <?php include_once("../ssi/scripts.php"); ?>

</body>

</html>
