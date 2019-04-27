<?php
/*
 * Copyright (C) 2011 hpforyou.de, All rights reserved.
 * License Creative Commons - Attribution 3.0 Unported (CC BY 3.0) 
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHTML::_('behavior.framework', true);

// get params
$logo = $this->params->get('logo');
$app			= JFactory::getApplication();
$templateparams	= $app->getTemplate(true)->params;

?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<!-- Design und CSS: Thomas Ballschmieter, www.hpforyou.de -->
		<jdoc:include type="head" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/layout.css" type="text/css" />
	</head>
<body>
<div id="container">
	<div id="header">
    	<div id="logo">
			<?php if ($logo): ?>
                <div style="line-height:109px;"><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>"  alt="<?php echo htmlspecialchars($templateparams->get('seitentitel'));?>" /></div>
            <?php endif;?>
            <?php if (!$logo ): ?>
                <div style="line-height:109px; font-size:26px;"><?php echo htmlspecialchars($templateparams->get('seitentitel'));?></div>
            <?php endif; ?>
        </div>
    </div>
    <div id="topmenu">
    	<jdoc:include type="modules" name="position-1" />
    </div>
    <div id="top">
        <jdoc:include type="modules" name="position-2" />
        <div id="suche">
            <jdoc:include type="modules" name="position-0" />
        </div>
    </div>
    <div class="brl"></div>
    <div id="main">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
            	<?php if($this->countModules('position-7')) : ?>
				<td valign="top" style="width:210px;">
                	<div id="left">
                    	<jdoc:include type="modules" name="position-7" style="xhtml" />
                    </div>
                </td>
                <?php endif; ?>
                <td valign="top">
                	<div id="main2">
                		<?php if ($this->getBuffer('message')) : ?>
                        <div class="error">
                            <jdoc:include type="message" />
                        </div>
                        <?php endif; ?>
                        <jdoc:include type="component" style="xhtml" />
					</div>
                </td>
                <?php if($this->countModules('position-8')) : ?>
				<td valign="top" width="210">
                	<div id="right">
                    	<jdoc:include type="modules" name="position-8" style="xhtml" />
                    </div>
               </td>
               <?php endif; ?>
        	</tr>
		</table>
	</div>
</div>    
<div class="brl"></div>
<div id="footer">
	<div id="copyr">&copy; <?php echo date('Y'); ?> <?php echo $app->getCfg('sitename'); ?>
    	<div id="hpforyou">Valid <a href="http://validator.w3.org/check?uri=referer" target="_blank">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">CSS</a> | <a title="hpforyou - Die Spezialisten für Joomla Templates!" href="http://www.hpforyou.de/joomla-business-templates.html" target="_blank">Joomla Template Design by hpforyou</a></div>
	</div>
</div>
<jdoc:include type="modules" name="position-9" />
</body>
</html>