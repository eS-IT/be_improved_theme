<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package   font-awesome 
 * @author    David Molineus <http://www.netzmacht.de>
 * @license   GNU/LGPL 
 * @copyright Copyright 2012 David Molineus netzmacht creative 
 * 
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Netzmacht',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'BackendImprovedTheme'		=> 'system/modules/be_improved_theme/BackendImprovedTheme.php',
));
