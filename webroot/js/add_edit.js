$(document).ready(function() {
			$(".modal").fancybox({
				'width':'35',
                                'height':'50',
                                'padding':'0',
                                'overlayOpacity':'0.5',
				'autoScale'			: true,
				'transitionIn'		: 'elastic',
				'transitionOut'		: 'fade',
				'type'				: 'iframe',
                                'titleShow':false,
                                'onStart':$.fancybox.showActivity,
                                'onComplete':$.fancybox.hideActivity
			});
                        
                       
			
		});


