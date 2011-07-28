<?php
/* SVN FILE: $Id$ */
/**
 * Short description for file.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'profiles', 'action' => 'index', 'index'));
	Router::connect('/profiles/:slug', array('controller' => 'profiles', 'action' => 'view'), array(
	    'pass'=>array('slug'),
	    'slug'=>'[a-z0-9\-]+'
	));
	Router::connect('/confirm', array('controller' => 'index', 'action' => 'confirm'));
        Router::connect('/admin', array('controller' => 'admin','admin'=>1));
        Router::connect('/admin/login', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
	Router::connect('/compare', array('controller' => 'compare', 'action' => 'index'));
	Router::connect('/compare/getComparisonAddress', array('controller' => 'compare', 'action' => 'getComparisonAddress'));
	Router::connect('/compare/:data', array('controller' => 'compare', 'action' => 'index'),array(
	    'pass'=>array('data'),
	    'data'=>'[a-z0-9\-\_\/\\\]+'
	));

	//Router::connect('/register', array('controller' => 'users', 'action' => 'register'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
?>