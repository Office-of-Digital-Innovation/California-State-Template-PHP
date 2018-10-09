<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
    <!--        California State Template
        Version 5.0.2

        Based on Twitter Bootstrap
    -->
  <meta charset="utf-8">
  <title>Sample - Animations</title>
  <meta name="Author" content="State of California" />
  <meta name="Description" content="State of California" />
  <meta name="Keywords" content="California, government" />
  <?php include_once("../ssi/head-css-js.php"); ?>
</head>

<body >
    <header role="banner" id="header" class="global-header fixed">
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

    <div id="main-content" class="main-content">
        <div class="section">
            <main class="main-primary">
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="index.php">Examples</a></li>
                    <li class="active">Lists</li>
                </ol>

                <div class="container">
                    <div class="two-thirds">
                    <h1>Animations</h1>
                    <p>Animations are for adding motion or effects as they scroll into view. We recommend using animations both sparingly and only on elements which need to have a visual impact or emphasis. Common use cases are  images, charts, call to actions, etc.</p>
                    <p>The available animations are configured by including the specified animation name directly on the element or a containing element.</p>
                        <ul>
                            <li> <code>.animate-bounceInLeft</code> </li>
                            <li> <code>.animate-bounceInRight</code> </li>
                            <li> <code>.animate-bounceInUp</code> </li>
                            <li> <code>.animate-fadeInUp</code> </li>
                            <li> <code>.animate-slideInLeft</code> </li>
                            <li> <code>.animate-slideInRight</code> </li>
                            <li> <code>.animate-slideInUp</code> </li>
                            <li> <code>.animate-pulse</code> </li>
                            <li> <code>.animate-shake</code> </li>
                            <li> <code>.animate-jello</code> </li>
                        </ul>
                    </div>
                    <div class="third">
                        <h2><label for="sample-xxx">Source Code:</label></h2>
                        <textarea id="sample-xxx" class="form-control" rows="5" cols="80"><?php include_once("/sample/modules/animation-simple.php"); ?></textarea>
                    </div>
                </div>
                <h1>Animation Playground</h1>
                <div class="group">
                    <div class="third">
                        <div class="form-group">
                            <label for="animation-select"><span class="required-label">*</span> Choose Animation</label>
                            <select class="form-control js--animations" id="animation-select">
                                <optgroup label="Fade In's">
                                    <option value="fadeInLeft">animate-fadeInLeft</option>
                                    <option value="fadeInRight">animate-fadeInRight</option>
                                    <option value="fadeInUp">animate-fadeInUp</option>
                                </optgroup>
                                <optgroup label="Slide In's">
                                    <option value="slideInLeft">animate-slideInLeft</option>
                                    <option value="slideInRight">animate-slideInRight</option>
                                    <option value="slideInUp">animate-slideInUp</option>
                                </optgroup>
                                    <optgroup label="Bounce In's">
                                    <option value="bounceInLeft">animate-bounceInLeft</option>
                                    <option value="bounceInRight">animate-bounceInRight</option>
                                    <option value="bounceInUp">animate-bounceInUp</option>
                                </optgroup>
                                    <optgroup label="Specials">
                                    <option value="pulse">animate-pulse</option>
                                    <option value="shake">animate-shake</option>
                                    <option value="jello">animate-jello</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default js--triggerAnimation">Replay Animation</button>
                        </div>
                    </div>
                    <div class="two-thirds">
                        <div id="animationSandbox" style="display: block;" class=""><span class="ca-gov-icon-logo text-accent3 text-center" style="font-size:250px;display:block;"></span></div>
                    </div>
                </div>
            </main>
        </div>
    </div>

  <?php include_once("../ssi/global-footer.php"); ?>

  <?php include_once("../ssi/scripts.php"); ?>

  <script>
    function testAnim(x) {
      $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $(this).removeClass();
      });
    };
    $(document).ready(function() {
      $('.js--triggerAnimation').click(function(e) {
        e.preventDefault();
        var anim = $('.js--animations').val();
        testAnim(anim);
      });
      $('.js--animations').change(function() {
        var anim = $(this).val();
        testAnim(anim);
      });
    });
  </script>
</body>
</html>
