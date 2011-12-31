$(document).ready(function() {
			$(".c_modal").fancybox({
				'width':'35',
                                'height':'30',
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


