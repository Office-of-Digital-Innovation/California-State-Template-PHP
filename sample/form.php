<!doctype html>

<!-- 
State of California 2014 master template
Version 2014.xx.xx

Based on Twitter Bootstrap
-->

<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<!-- 
California State Template
Version 5.0
 
Based on Twitter Bootstrap
-->
<meta charset="utf-8">

<title>Sample - Forms</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<!-- possible body classes are "primary" and "two-column" -->
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
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php"); ?>
        </div>
        
        <!-- Include Navigation -->
        <?php include_once("../ssi/navigation.php"); ?>
    </div>
	<div class="header-decoration"></div>
</header>


<div id="main-content" class="main-content">
    <div class="section">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Forms</li>
            </ol>
         
            <div class="group">
                <div class="half">
                    <h1>Forms</h1>
                    <p>All form controls automatically receive some global styling. Form elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p>
                    
                    <h2>Example:</h2>
                    <?php include("../sample/modules/form.php"); ?>
                </div>
                 <div class="half">
                    <h2><label for="sample-form">Source Code:</label></h2>
                    <textarea id="sample-form" class="form-control" rows="10" cols="80"><?php include("../sample/modules/form.php"); ?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                <h2>Sample Contact Form:</h2>
                <?php include("../sample/modules/form-contact.php"); ?>
                </div>
                <div class="half">
                    <h2><label for="sample-xxx">Source Code:</label></h2>
                    <textarea id="sample-xxx" class="form-control" rows="10" cols="80">
<form role="form">
    <div class="group">
        <div class="form-group half">
            <label for="exampleInputName"><span class="required-label">*</span> Name</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Name">
        </div>
        <div class="form-group half">
            <label for="exampleInputEmail"><span class="required-label">*</span> Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail" placeholder="Enter email">
        </div>
    </div>
    
    <div class="form-group">
        <label for="exampleInputComment">Your Message</label>
        &lt;textarea id="exampleInputComment" class="form-control" rows="10" cols="80"&gt;&lt;/textarea&gt;
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
                    </textarea>
                </div>
            </div>


            <hr>

            <div class="group">
                <div class="half">
                    <h2>Form States:</h2>
                    <?php include("../sample/modules/form-states.php"); ?>
                </div>
                    <div class="half">
                        <h2><label for="sample-form">Source Code:</label></h2>
                        <textarea id="sample-form" class="form-control" rows="10" cols="80"><?php include("../sample/modules/form-states.php"); ?></textarea>
                    </div>
                </div>
            <hr />
                <div class="group">
                    <div class="half">

                        
                        <h2>File input:</h2>
                        <?php include("../sample/modules/form-file-input.php"); ?>
                    </div>
                    <div class="half">
                        <h2><label for="sample-form">Source Code:</label></h2>
                        <textarea id="sample-form" class="form-control" rows="5" cols="80"><?php include("../sample/modules/form-file-input.php"); ?></textarea>
                    </div>
                </div>


                <hr />
                <div class="group">
                    <div class="half">
                        <h2>Radio buttons and checkboxes:</h2>
                        <?php include("../sample/modules/form-radios.php"); ?>
                        <?php include("../sample/modules/form-checkboxes.php"); ?>



                    </div>
                    <div class="half">
                        <h2><label for="sample-form">Source Code:</label></h2>
                        <textarea id="sample-form" class="form-control" rows="5" cols="80"><?php include("../sample/modules/form-radios.php"); ?>
<?php include("../sample/modules/form-checkboxes.php"); ?>
                        </textarea>
                    </div>
                </div>

            <hr />

            <div class="group p-b-lg">
                <div class="half">
                    <h2>Select:</h2>
                    <?php include("../sample/modules/form-select.php"); ?>
                </div>
                <div class="half">
                    <h2><label for="sample-form">Source Code:</label></h2>
                    <textarea id="sample-form" class="form-control" rows="5" cols="80"><?php include("../sample/modules/form-select.php"); ?></textarea>
                </div>

            </div>
</main>
    </div>
</div>


<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>