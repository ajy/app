$(document).ready(function() {
    $(".modal").fancybox({
        /*'width':'70%',
                                'height':'70%',
                                'padding':'0',
                                'overlayOpacity':'0.5',
				'autoScale'			: true,
				'transitionIn'		: 'elastic',
				'transitionOut'		: 'fade',
				'type'				: 'iframe',
                                'titleShow':false*/
       maxWidth	:500,
        maxHeight	: 600,
        minWidth	:500,
        minHeight	: 200,
        		fitToView	: false,
       /* width		: '30%',
        height		: '85%',*/
        autoSize	: true,
		
        //		openEffect	: 'none',
        type				: 'iframe',
        padding:1,
        //        modal:true,
        closeEffect	: 'none',
        scrolling :'auto',
        helpers: { 
            title:null
        }/*,
       beforeLoad:function(){
          $.fancybox.showLoading()
       },
        afterLoad : function() {
			  $.fancybox.hideLoading()
		}*/
                               
    });
                        
           
			
});


