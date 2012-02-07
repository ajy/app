$(document).ready(function() {
    
    $(".modal").fancybox({
        
         width	:500,
        height	:450,

        fitToView	: false,
        autoSize	: false,
        type				: 'iframe',
        padding:1,
        modal:true,
         
        helpers: { 
            title:null
        } ,
        afterClose    :   function() {
            location.reload();
        } ,
        beforeShow    :   function() {
        //       $.fancybox.showLoading()

        } ,
        afterShow   :   function() {
            $.fancybox.hideLoading()

        }         
    });
    
      
                  
         $(".imp").fancybox({
        
         width	:500,
        height	:200,

        fitToView	: false,
        autoSize	: false,
        type				: 'iframe',
        padding:1,
        modal:true,
         
        helpers: { 
            title:null
        } ,
        afterClose    :   function() {
            location.reload();
        } ,
        beforeShow    :   function() {
        //       $.fancybox.showLoading()

        } ,
        afterShow   :   function() {
            $.fancybox.hideLoading()

        }         
    });
           
	
         $(".modal2").fancybox({
        
          width	:500,
        height	: 400,

        fitToView	: false,
 autoSize	: false,
        type				: 'iframe',
        padding:1,
        modal:true,
         
        helpers: { 
            title:null
        } ,
        afterClose    :   function() {
            location.reload();
        } 

               
    });    
      $(".modal3").fancybox({
        
      
        maxWidth	:500,
        maxHeight	: 425,
        minWidth	:500,
        minHeight	:200,
        fitToView	: false,
        autoSize	: true,
        type				: 'iframe',
        padding:1,
        modal:true,
         
        helpers: { 
            title:null
        } ,
        afterClose    :   function() {
            location.reload();
        } 

               
    });    
     $(".modal4").fancybox({
        
        height:375,
        width:500,
        fitToView	: false,
 autoSize	: true,
        type				: 'iframe',
        padding:1,
        modal:true,
         
        helpers: { 
            title:null
        } ,
        afterClose    :   function() {
            location.reload();
        } 

               
    });    
     $(".modal5").fancybox({
        minWidth	:500,
        minHeight	: 270,
       maxWidth	:500,
        maxHeight	: 270,
        fitToView	: false,
 autoSize	: true,
        type				: 'iframe',
        padding:1,
        modal:true,
         
        helpers: { 
            title:null
        } ,
        afterClose    :   function() {
            location.reload();
        } 

               
    });    
    
     $(".modal6").fancybox({
        
        height:500,
        width:500,
        fitToView	: false,
 autoSize	: false,
        type				: 'iframe',
        padding:1,
        modal:true,
         
        helpers: { 
            title:null
        } ,
        afterClose    :   function() {
            location.reload();
        } 

               
    }); 
     $(".modal7").fancybox({
        
        height:150,
        width:500,
        fitToView	: false,
 autoSize	: false,
        type				: 'iframe',
        padding:1,
        modal:true,
         
        helpers: { 
            title:null
        } ,
        afterClose    :   function() {
            location.reload();
        } 

               
    }); 
    
    $(".fbf").fancybox({
        
        width				: 500,
	height			: '100%',
//        minWidth	:500,
//        minHeight	: 200,
        fitToView	: true,
        autoSize	: false,
        type				: 'iframe',
        padding:1,
        scrolling:'auto',
        modal:true,
       
        helpers: { 
            title:null
        } ,
        afterClose    :   function() {
            location.reload();
        } ,
        beforeShow    :   function() {
        //       $.fancybox.showLoading()

        } ,
        afterShow   :   function() {
            $.fancybox.hideLoading()

        }         
    });
    
});


    