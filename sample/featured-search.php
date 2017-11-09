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

<title>Sample - Featured Search</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<body>

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
              
        <div id="head-search" class="search-container featured-search">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php"); ?>
        </div>
        
            <!-- Search Results -->
		<div class="search-results-container">
        <?php include_once("../ssi/search-results.php"); ?>
		</div>   

        
        <!-- Include Navigation -->
        <?php include_once("../ssi/navigation.php"); ?>
    
    </div>  
    
    
       
</header>


    <!-- Ask Bar -->
    <?php include_once("../ssi/ask-bar.php"); ?>
    
	<!-- Include Page Template -->
    <?php include_once("../ssi/header-single-banner.php"); ?>
    
    

<div id="main-content" class="main-content">
    <div class="section">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Featured Search</li>
            </ol>
            
            <div class="group">
                <div class="half">
                  <h1>Featured Search</h1>
                    <p>The header above is an example of the featured search bar. It's location and size make it a prominent feature on this layout option. The <code>.search-container</code>and<code>.featured-search</code> classes need to be added to the <code>#head-search</code> div in the header of your page.</p>
                    <p>More information on using search results categories and instant search as seen on the <a href="http://www.ca.gov">ca.gov</a> portal will be available in the near future.</p>
                    

                    
                    <p><span class="label label-info">NOTE:</span> Featured search can be used with any page template, see available options by viewing <a href="page-templates.php"> page  templates</a>.</p>
                    <p>&nbsp;</p> </div>
                    <div class="half">
                    <h2>Source Code:</h2>
                    <textarea id="sample-accordion" class="form-control" rows="10" cols="80" >
					<?php include("../sample/modules/featured-search.php"); ?></textarea>
                	</div> 
                   <div class="clearfix"></div>
                   
              <div class="half">
                <h1>Ask Buttons</h1>
                <p>The ask buttons are complementary to the featured search bar and could be used for various purposes depending on your business needs. To use this feature you must utilize the SSI include method right below the header of the desired page.</p>           
<pre>
&lt;!-- Ask Bar --&gt;
&lt;php include(&quot;/ssi/ask-bar.php&quot); ?&gt
</pre>
				  <p>The number of buttons can be customized from two to six including the menu options for each one. All of the configurations are located in the <code>ask-bar.php</code> file located in the <code>ssi</code> folder. Remember to update the <code>&lt;a&gt;</code>class right below the panel div tag of each ask button to the number of total buttons you plan to use. The options are: two, three, four, five and six. The number you pick should coinside with the number of ask buttons in the <code>ask-bar.php</code> file located in the <code>ssi</code> folder.</p>
				</div>
                    <div class="half">
          			<h2>Source Code:</h2>
                    <textarea class="form-control" rows="10" cols="80" >
					<?php include("../sample/modules/ask-panel.php"); ?></textarea>

                	</div> 
                	
                	<div class="clearfix"></div>
             
                	
            <div class="half">    	   	   	
            <h2>Demonstration </h2>
            <p>Toggle the button to add or remove the ask buttons below the featured search bar.</p>
          
            <button class="toggleAskGroup btn btn-secondary m-r-sm m-b-sm">Add Ask Buttons</button>
            <p>&nbsp;</p>
			</div>  
                
            </div>
        </main>
    </div>
</div>


<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

<script>
// -- DEMONSTRATION ONLY! -- //
$(document).ready(function(){ 
	 $(".ask-group").addClass("hide");      
    // Toggle .primary class
    
    // Toggle .ask-group class
    $(".toggleAskGroup").click(function() {
        var btnLabel = $(this);
        // Toggle body class and button text when clicked
        if ($(this).html() == 'Add Ask Buttons') {
            btnLabel.html('Remove Ask Buttons');
       		$(".ask-group").removeClass("hide");
			window.scrollTo(0, 0);
			
        } else {
            btnLabel.html('Add Ask Buttons');
             $(".ask-group").addClass("hide"); 
			window.scrollTo(0, 0);
        }
    });
});
</script>


</body>
</html>