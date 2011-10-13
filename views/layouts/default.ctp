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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->script('jquery-1.5.1.min.js');
		
		echo $this->Html->script('jquery-ui-1.8.14.custom.min.js');
		
		
		echo $this->Html->css('feedbackMail');
		
		echo $this->Html->css('start/jquery-ui-1.8.14.custom.css');
				
		echo $scripts_for_layout;
	?>	
</head>
<body>
	<div id="container">
		<div id="header">
			<!--<h1><?php echo $this->Html->link(__('CakePHP: the rapid development php framework', true), 'http://cakephp.org'); ?></h1>-->
		</div>
		<div id="content">
			<?php echo $this->Session->flash('auth'); ?>

			<?php echo $this->Session->flash(); ?>
			
			<?php echo $content_for_layout; ?>

		</div>
	<!--	<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>-->
	</div>
	
<?php echo $this->Element('sql_dump'); ?>	
</body>
</html>
