<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<!--        California State Template
        Version 5.0.3
 
Based on Twitter Bootstrap
-->
<meta charset="utf-8">

<title>Sample - Typography</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>
  <style>
    .text-huge {
    font-size:6em;
    }
  </style>
</head>

<body>

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
        
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


  div id="main-content" class="main-content">
  <div class="section">
    <main class="main-primary">
      <ol class="breadcrumb">
        <li>
          <a href="../index.php">Home</a>
        </li>
        <li>
          <a href="index.php">Examples</a>
        </li>
        <li class="active">Typography</li>
      </ol>

      <h1>Typography</h1>

      <p class="lead">
        State of California websites have common typographic needs: clear and consistent headings, highly legible body paragraphs,
        clear labels, and easy-to-use input fields. We recommend a font system that uses open-source font family:
        Source Sans Pro, which is designed for legibility and can beautifully adapt to a variety
        of visual styles.
      </p>
      <hr />
      <h2>Typeface</h2>


      <div class="group">
        <div class="half">
          <h4>Source Sans Pro</h4>
          <p>
            Source Sans Pro is an open-source sans serif typeface created for legibility in UI design.
            With a variety of weights that read easily at all sizes, Source Sans Pro provides clear headers
            as well as highly-readable body text.
          </p>
          <p>
            Inspired by twentieth-century American gothic typeface design, its slender but open letters
            offer a clean and friendly simplicity. Advanced hinting allows Source Sans Pro to render well
            on Windows systems which run Cleartype, and across browsers and devices. Moreover, it supports
            a variety of languages and alphabets, including Western and European language, Vietnamese, pinyin
            Romanization of Chinese, and Navajo.
          </p>
        </div>
        <div class="half">
          <span class="text-huge">Aa</span>
          <div>
            <p class="text-tiny">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</p>
            <p class="text-tiny">a b c d e f g h i j k l m n o p q r s t u v w x y z</p>
            <p class="text-tiny">0 1 2 3 4 5 6 7 8 9</p>
          </div>

          <p>
            <a class="btn btn-default" href="https://fonts.google.com/specimen/Source+Sans+Pro">View Source Sans Pro in Google Fonts</a>
          </p>
        </div>
      </div>
      <hr />
      <h2>Web Hierarchy</h2>
      <div class="group">
        <div class="half p-l-lg">
          <span class="h1">Heading 1</span>
        </div>
        <div class="half">
          <span class="monospace font-size-70x">
            font-family: 'Source Sans Pro'<br />
            font-weight: 400<br />
            font-size: 38px<br />
            line-height: 1.1
          </span>
        </div>
      </div>

      <div class="group m-t-lg">
        <div class="half p-l-lg">
          <span class="h2">Heading 2</span>
        </div>
        <div class="half">
          <span class="monospace font-size-70x">
            font-family: 'Source Sans Pro'<br />
            font-weight: 400<br />
            font-size: 31px<br />
            line-height: 1.1
          </span>
        </div>
      </div>

      <div class="group m-t-lg">
        <div class="half p-l-lg">
          <span class="h3">Heading 3</span>
        </div>
        <div class="half">
          <span class="monospace font-size-70x">
            font-family: 'Source Sans Pro'<br />
            font-weight: 400<br />
            font-size: 25px<br />
            line-height: 1.1
          </span>
        </div>
      </div>

      <div class="group m-t-lg">
        <div class="half p-l-lg">
          <span class="h4">Heading 4</span>
        </div>
        <div class="half">
          <span class="monospace font-size-70x">
            font-family: 'Source Sans Pro'<br />
            font-weight: 400<br />
            font-size: 20px<br />
            line-height: 1.1
          </span>
        </div>
      </div>

      <div class="group m-t-lg">
        <div class="half p-l-lg">
          <span class="h5">Heading 5</span>
        </div>
        <div class="half">
          <span class="monospace font-size-70x">
            font-family: 'Source Sans Pro'<br />
            font-weight: 400<br />
            font-size: 16px<br />
            line-height: 1.1
          </span>
        </div>
      </div>

      <div class="group m-t-lg">
        <div class="half p-l-lg">
          <span class="h6">Heading 6</span>
        </div>
        <div class="half">
          <span class="monospace font-size-70x">
            font-family: 'Source Sans Pro'<br />
            font-weight: 400<br />
            font-size: 14px<br />
            line-height: 1.1
          </span>
        </div>
      </div>
      <hr />
      <h2>Applying Web Font Into a Website</h2>
      <p>To apply web font into a webpage following code needs to be copied into the &lt;head&gt; section of the HTML document:</p>

      <pre>
        <code class="language-html" data-lang="html">
          <span class="text-accent-p2">&lt;link</span>
          <span class="text-info">href=</span>
          <span class="text-accent7">'https://fonts.googleapis.com/css?family=Source+Sans+Pro'</span>
          <span class="text-info">rel=</span>
          <span class="text-accent7">'stylesheet'</span>
          <span class="text-info">type=</span>
          <span class="text-accent7">'text/css'</span>
          <span class="text-accent-p2">&gt;</span>
        </code>
      </pre>
      <p class="m-t-lg">Also, use the following CSS rules to specify web font familiy:</p>

      <pre>
        <code class="language-html" data-lang="html">
          <span class="text-accent-p2">font-family:</span>
          <span class="text-info">'Source Sans Pro', sans-serif;</span>
        </code>
      </pre>
      <br />
      <br />






    </main>
  </div>
  </div>



  <?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>