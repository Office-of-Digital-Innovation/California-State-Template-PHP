<!doctype html>
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

<title>Sample - Tables</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php");?>
</head>

<body>

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
    <!-- Include Branding -->
    <?php include_once("../ssi/branding.php");?>    
    <!-- Include Mobile Controls -->
    <?php include_once("../ssi/mobile-controls.php");?>    <div class="navigation-search">
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php");?>        </div>
        
        <!-- Include Navigation -->
        <?php include_once("../ssi/navigation.php");?>    </div>
	<div class="header-decoration"></div>
</header>

<div id="main-content" class="main-content">
    <div class="wrapper">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Tables</li>
            </ol>
         
            <div class="group">
                <div class="half">
                     <h1>Basic Table</h1>
                     <p>For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>. It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate table styles.</p>
                    
                    <h2>Example:</h2>
                    <?php include("../sample/modules/table.php");?>                </div>
                 <div class="half">
                    <h2><label for="sample-table">Source Code:</label></h2>
                    <textarea id="sample-table" class="form-control" rows="10" cols="80"><?php include("../sample/modules/table.php");?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                     <h1>Default Table</h1>
                     <p>The official table design for ca.gov. Use <code>.table-default</code></p>
                    
                    <h2>Example:</h2>
                    <?php include("../sample/modules/table-default.php");?>                </div>
                 <div class="half">
                    <h2><label for="sample-table-default">Source Code:</label></h2>
                    <textarea id="sample-table-default" class="form-control" rows="10" cols="80"><?php include("../sample/modules/table-default.php");?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                     <h1>Zebra Striped Table</h1>
                     <p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>
                    
                    <h2>Example:</h2>
                    <?php include("../sample/modules/table-striped.php");?>                </div>
                 <div class="half">
                    <h2><label for="sample-table-striped">Source Code:</label></h2>
                    <textarea id="sample-table-striped" class="form-control" rows="10" cols="80"><?php include("../sample/modules/table-striped.php");?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                     <h1>Bordered Table</h1>
                     <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
                    
                    <h2>Example:</h2>
                    <?php include("../sample/modules/table-bordered.php");?>                </div>
                 <div class="half">
                    <h2><label for="sample-table-bordered">Source Code:</label></h2>
                    <textarea id="sample-table-bordered" class="form-control" rows="10" cols="80"><?php include("../sample/modules/table-bordered.php");?></textarea>
                </div> 
            </div>
            
            <div class="group">
                <div class="half">
                     <h1>Responsive Table</h1>
                     <p>Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code> div to make them scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.</p>
                    
                    <h2>Example:</h2>
                    <?php include("../sample/modules/table-responsive.php");?>                </div>
                 <div class="half">
                    <h2><label for="sample-table-responsive">Source Code:</label></h2>
                    <textarea id="sample-table-responsive" class="form-control" rows="10" cols="80"><?php include("../sample/modules/table-responsive.php");?></textarea>
                </div> 
            </div>
            
        </main>
    </div>
</div>

<?php include_once("../ssi/global-footer.php");?>
<?php include_once("../ssi/scripts.php");?>
</body>
</html>