<?php

#####################################################
#													#
# 	Copyright 	= 	Magnolia Design - 2012			#
#	Author		= 	Ozz								#
# 	Website		= 	http://www.magnolia-design.eu	#
#													#
#####################################################

defined( '_JEXEC' ) or die( 'Restricted access' );
$LeftMenuOn = ($this->countModules('position-4') or $this->countModules('position-5') or $this->countModules('position-7'));
$RightMenuOn = ($this->countModules('position-6') or $this->countModules('position-8'));
$TopNavOn = ($this->countModules('position-13'));
$conf =& JFactory::getConfig();
$sitename = $conf->getValue('config.sitename');
$logopath = $this->baseurl . '/templates/' . $this->template . '/images/logo.png';
$logo = $this->params->get('logo', $logopath);
$logoimage = $this->params->get('logoimage');
$sitetitle = $this->params->get('sitetitle');
$sitedescription = $this->params->get('sitedescription');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/sfhover.js"></script>
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jquery.js"></script>
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/slideshow.js"></script>
	<script type="text/javascript" charset="utf-8">	    
		var $j = jQuery.noConflict(); 			
			$j(document).ready(function(){		    
			$j("#slideshow").slideshow({			   
 				pauseSeconds:5,			    
 				height:334, 			    
 				fadeSpeed:0.5,				
 				width:681, 			    
 				caption: true		   
 			});		
 		});	
 	</script>	
</head>
<body>
<div id="wrapper">
	<!-- TopNav -->
	<?php if($TopNavOn ): ?>
	<div id="topnav_wrap">
		<div id="topnav">
			<jdoc:include type="modules" name="position-13" style="xhtml" />
		</div>
	</div>
	<?php endif; ?>
	

	<div id="header_wrap">
		<div id="header">

			<!-- Logo -->
			<div id="logo">

			<?php if ($logo && $logoimage == 1): ?>
				<a href="<?php echo $this->baseurl ?>"><img src="<?php echo htmlspecialchars($logo); ?>"  alt="<?php echo $sitename; ?>" /></a>
			<?php endif; ?>
			<?php if (!$logo || $logoimage == 0): ?>

				<?php if ($sitetitle): ?>
					<a href="<?php echo $this->baseurl ?>"><?php echo htmlspecialchars($sitetitle); ?></a><br/>
				<?php endif; ?>

				<?php if ($sitedescription): ?>
					<div class="sitedescription"><?php echo htmlspecialchars($sitedescription); ?></div>
				<?php endif; ?>

			<?php endif; ?>

	  		</div>

			<!-- Search -->
			<div id="search">		
				<jdoc:include type="modules" name="position-0" />
			</div>
		</div>
	</div>
	
	<div id="topmenu_wrap">
		<div id="topmenu">
			<jdoc:include type="modules" name="position-1" />
		</div>
	</div>
	

	<!-- Content/Menu Wrap -->
	<div id="content-menu_wrap_bg">
	<div id="content-menu_wrap">

		<!-- Breadcrumbs -->
		<?php if ($this->countModules('position-2')): ?>
		<div id="breadcrumbs">
			<jdoc:include type="modules" name="position-2" />
		</div>
		<?php endif; ?>


		<!-- Left Menu -->
		<?php if($LeftMenuOn ): ?>
		<div id="leftmenu">
			<jdoc:include type="modules" name="position-7" style="xhtml" />
			<jdoc:include type="modules" name="position-4" style="xhtml" />
			<jdoc:include type="modules" name="position-5" style="xhtml" />
		</div>
		<?php endif; ?>


		<!-- Right Menu -->
		<?php if($RightMenuOn ): ?>
		<div id="rightmenu">
			<jdoc:include type="modules" name="position-6" style="xhtml" />
			<jdoc:include type="modules" name="position-8" style="xhtml" />
			<jdoc:include type="modules" name="position-3" style="xhtml" />
		</div>
		<?php endif; ?>

		<div id="wrapper-slide">	    
            <div id="slide-bg">	        
                <div class="pagewidth">		        
                    <div id="slide">		            
                        <div id="slideshow-w">				        
                            <div id="slideshow">				            
                                <img src="templates/<?php echo $this->template ?>/images/slide1.png" alt="image1" />					        
                                <img src="templates/<?php echo $this->template ?>/images/slide2.png" alt="image2" />					        
                                <img src="templates/<?php echo $this->template ?>/images/slide3.png" alt="image3" />		
                            </div>			        
                        </div>			    
                    </div>	        
                </div>		
            </div>	
		</div>
		
		<!-- Contents -->
		<?php if($LeftMenuOn AND $RightMenuOn): ?>
		<div id="content-w1">
		<?php elseif($LeftMenuOn OR $RightMenuOn): ?>
		<div id="content-w2">	
		<?php else: ?>
		<div id="content-w3">	
		<?php endif; ?>
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>

	</div>
	</div>


	<!-- Footer -->
	<div id="footer_wrap">
		<div id="footer">
			<jdoc:include type="modules" name="position-14" />
		</div>
	</div>	

	
	<!-- Banner/Links -->
	<div id="box_wrap">
		<div id="box1"><jdoc:include type="modules" name="position-9" style="xhtml" /></div>
		<div id="box2"><jdoc:include type="modules" name="position-10" style="xhtml" /></div>
		<div id="box3"><jdoc:include type="modules" name="position-11" style="xhtml" /></div>
	</div>
	

	<div id="push"></div>

</div>


<?php /* --->>>   Please support our work by leaving this copyright section intact   */ ?>
<div id="copyright">
	&copy;<?php echo date('Y'); ?> <?php echo $sitename; ?> | <a href="http://www.magnolia-design.eu">Designed by Magnolia Design</a><br/>

<?php /* <<<---   Please support our work by leaving this copyright section intact   */ ?>

</div>	

</body>
</html>