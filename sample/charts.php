<!doctype html>
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

<title>Sample -Charts</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />



<?php include_once("../ssi/head-css-js.php"); ?>


    <!-- Plotly JS -->
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <!-- Circles JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/circles/0.0.6/circles.min.js"></script>
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
    <div class="section">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Lists</li>
            </ol>

        <h1>Charts</h1>
                <p>Following charts examples are using Plotly and Circles open source graphing JS libraries. To use use plotly.js or circle.js libraries simply add their CDN links to your <code>head</code> section. </p>
<pre>&lt;!-- Plotly JS --&gt;
&lt;script src="https://cdn.plot.ly/plotly-latest.min.js"&gt;&lt;/script&gt;
&lt;!-- Circles JS --&gt;
&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/circles/0.0.6/circles.min.js"&gt;&lt;/script&gt;</pre>
    <div class="group">
        <div class="half">
            <h2>Bar</h2>
            <div>
                <?php include("../sample/modules/chart-bar.php"); ?>
            </div>
        </div>
        <div class="half">
            <h2><label>Source Code:</label></h2>
            <div class="tab-group">
                <ul id="sourceCode" class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#html" role="tab" data-toggle="tab">HTML Markup</a></li>
                    <li><a href="#javascript" role="tab" data-toggle="tab">JavaScript</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content responsive">
                    <div class="tab-pane active" id="html">
                        <textarea aria-label="HTML Markup" class="form-control" rows="4" cols="80"><?php include("../sample/modules/chart-bar.php"); ?></textarea>
                    </div>
                    <div class="tab-pane" id="javascript">
                        <textarea aria-label="JavaScript" class="form-control" rows="10" cols="80"><?php include("../sample/modules/chart-bar-js.php"); ?></textarea>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <hr>

    <div class="group">
        <div class="half">
            <h2>Line</h2>

            <div>
			<?php include("../sample/modules/chart-line.php"); ?>
            </div>
        </div>
        <div class="half">
            <h2><label>Source Code:</label></h2>
            <div class="tab-group">
                <ul id="sourceCode" class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#html-line" role="tab" data-toggle="tab">HTML Markup</a></li>
                    <li><a href="#javascript-line" role="tab" data-toggle="tab">JavaScript</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content responsive">
                    <div class="tab-pane active" id="html-line">
                        <textarea aria-label="HTML Markup" class="form-control" rows="4" cols="80"><?php include("../sample/modules/chart-line.php"); ?></textarea>
                    </div>
                    <div class="tab-pane" id="javascript-line">
                        <textarea aria-label="JavaScript" class="form-control" rows="10" cols="80"><?php include("../sample/modules/chart-line-js.php"); ?></textarea>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <hr>

    <div class="group">
        <div class="half">
            <h2>Pie</h2>

            <div>
                <?php include("../sample/modules/chart-pie.php"); ?>
            </div>
        </div>
        <div class="half">
            <h2><label>Source Code:</label></h2>
            <div class="tab-group">
                <ul id="sourceCode" class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#html-pie" role="tab" data-toggle="tab">HTML Markup</a></li>
                    <li><a href="#javascript-pie" role="tab" data-toggle="tab">JavaScript</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content responsive">
                    <div class="tab-pane active" id="html-pie">
                        <textarea aria-label="HTML Markup" class="form-control" rows="4" cols="80"><?php include("../sample/modules/chart-pie.php"); ?></textarea>
                    </div>
                    <div class="tab-pane" id="javascript-pie">
                        <textarea aria-label="JavaScript" class="form-control" rows="10" cols="80"><?php include("../sample/modules/chart-pie-js.php"); ?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="group" id="show-on-scroll">
        <div class="half">
            <h2>Number Counter Circle Chart</h2>
            <div class="m-b-md text-center" id="circle1">
            </div>
            <h4 class="text-center">UI Design</h4>
            <p class="p-x m-b-0 text-center">Sed feugiat porttitor nunc etiam gravi daex justo ac rhoncus</p>

        </div>
        <div class="half">
            <h2><label>Source Code:</label></h2>
            <div class="tab-group">
                <ul id="sourceCode" class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#html-circles" role="tab" data-toggle="tab">HTML Markup</a></li>
                    <li><a href="#javascript-circles" role="tab" data-toggle="tab">JavaScript</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content responsive">
                    <div class="tab-pane active" id="html-circles">
                        <textarea aria-label="HTML Markup" class="form-control" rows="4" cols="80"><?php include("../sample/modules/number-counter-circles.php"); ?></textarea>
                    </div>
                    <div class="tab-pane" id="javascript-circles">
                        <textarea aria-label="JavaScript" class="form-control" rows="10" cols="80"><?php include("../sample/modules/number-counter-circles-js.php"); ?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <hr>


</main>
</div>
</div>


<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>
