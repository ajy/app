<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->script('jquery-1.5.1.min.js');
		
		echo $this->Html->script('jquery-ui-1.8.14.custom.min.js');
		
		//echo $this->Html->css('alerts');
		
		echo $scripts_for_layout;
	?>	
</head>
<body>
	<div id="container">
		
		<div id="content">
			<?php //echo $this->Session->flash('auth'); ?>
			
			<?php //echo $this->Session->flash('email'); ?>

			<?php //echo $this->Session->flash(); ?>
			
			<?php echo $content_for_layout; ?>

		</div>
	<!--	<div id="footer">
			
		</div>-->
	</div>
	
	
</body>
</html>
