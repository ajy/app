<?=$html->css(array('reset','submitButton','add_edit'));?>
<style>
    a              { color: purple; text-decoration: none; }

</style>
<script>
    $(document).ready(function() {
			$(".modal").fancybox({
				'width':'15',
                                'height':'44',
                                'padding':'0',
                                'overlayOpacity':'0.5',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe',
                                'onStart':$.fancybox.showActivity,
                                'onComplete':$.fancybox.hideActivity
			});

			
		});
</script>
 <div id="header"><?php __('Edit Password'); ?></div>
<?php
	echo $this->Form->create('User',array('action' => 'changePassword'));
	echo $this->Form->input('id');
	echo $this->Form->input('new password', array('type' => 'password'));
	echo $this->Form->input('confirm password', array('type' => 'password'));
         //echo $this->Html->link(__('Back', true), array('action' => 'edit',$this->Session->read("Auth.User.id")));
	
	echo $this->Form->end('Submit');
       
	//debug($this->data["User"]);
?>
