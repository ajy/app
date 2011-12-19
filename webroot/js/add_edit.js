$(document).ready(function() {
			$(".modal").fancybox({
				'width':'35',
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


