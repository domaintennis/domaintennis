jQuery(function($){
	
        var block_height = jQuery('.views-field-field-overview-hero-image').height() + jQuery('.views-field-field-overview-gallery').height();
	var margin_top = block_height + 293;
        //console.log(margin_top);
	jQuery('#block-views-09b6ce9e7089aa69fb7f8c3ad195c9d4').css('margin-top', + margin_top + 'px');
	var bar_height = jQuery('#content').height();
        //console.log(bar_height);
	jQuery('#quicktabs-port_information .ui-widget-header').css('height', bar_height + 'px');
	var conten_height = jQuery('#main').height();
	jQuery('.one-sidebar #sidebar-second').css('height',conten_height + 'px');
        
        jQuery('#quicktabs-port_information tr:odd').addClass('odd-row');
        jQuery('#quicktabs-port_information tr:even').addClass('even-row');
        jQuery('#quicktabs-port_information tr').each(function(){
            if(jQuery(this).children('td').hasClass('spec-head')){
                //console.log(this);
                jQuery(this).addClass('heading');
            }
        });
        
        // Align Port Information drop down
/*
        var start_postion = - $('ul#superfish-1 li#menu-746-1').position().left;        
        start_postion = start_postion -1;
        console.log(start_postion);
        jQuery('#superfish-1 #menu-746-1').children('ul.sf-megamenu').css('left',start_postion); */

       // Align Megamenu dropdown to the left
      $('ul#superfish-1 li#menu-746-1').hover(function(e) {
        var leftOffset = -($(this).position().left) - 1;
        $(this).children('ul.sf-megamenu').css('margin-left', leftOffset);
      });
        
        jQuery("a[href^=http]").each(function(){
              if(this.href.indexOf(location.hostname) == -1) {
              jQuery(this).attr({
              target: "_blank",
              title: "Opens in a new window"
             });
              }
              });
              jQuery('.views-summary-unformatted a').each(function(){
                               
                 if(jQuery('.views-summary-unformatted a').hasClass('active'))
                  {
                      //console.log(jQuery(this).parent);
                     jQuery(this).parent().addClass('active');
                  } 
                  
              });
           if(jQuery('.views-field-field-overview-hero-image').is(':hidden') && jQuery('.views-field-field-activities-hero-image').is(':hidden')){
               jQuery('#block-views-09b6ce9e7089aa69fb7f8c3ad195c9d4').css('display','none');
           }else{
               jQuery('#block-views-09b6ce9e7089aa69fb7f8c3ad195c9d4').css('display','block');
           }

           if(jQuery('.views-field-field-activities-hero-image').height() == 0 && jQuery('.views-field-field-overview-hero-image').height() == 0)
           {
           jQuery('#block-views-09b6ce9e7089aa69fb7f8c3ad195c9d4').css('margin-top','250px');
           }
		   /*else{
               jQuery('#block-views-09b6ce9e7089aa69fb7f8c3ad195c9d4').css('margin-top','476px');
           }*/
           if(jQuery('.views-field-field-overview-gallery').height() == 0 && jQuery('.views-field-field-overview-gallery').height() == 0){
              var event_margin = parseInt(jQuery('#block-views-09b6ce9e7089aa69fb7f8c3ad195c9d4').css('margin-top'));
              event_margin = event_margin-65;
              jQuery('#block-views-09b6ce9e7089aa69fb7f8c3ad195c9d4').css('margin-top',event_margin+'px')
           }
        jQuery('.ui-tabs-nav li a').click(function(){
           if(jQuery('.views-field-field-overview-hero-image').is(':hidden') && jQuery('.views-field-field-activities-hero-image').is(':hidden'))
           {
           jQuery('#block-views-09b6ce9e7089aa69fb7f8c3ad195c9d4').css('display','none');
           }else{
               jQuery('#block-views-09b6ce9e7089aa69fb7f8c3ad195c9d4').css('display','block');
           }
           
           if(jQuery('.views-field-field-activities-hero-image').height() == 0 && jQuery('.views-field-field-overview-hero-image').height() == 0)
           {
           jQuery('#block-views-09b6ce9e7089aa69fb7f8c3ad195c9d4').css('margin-top','250px');
           }else{
               jQuery('#block-views-09b6ce9e7089aa69fb7f8c3ad195c9d4').css('margin-top','476px');
           }
           if(jQuery('.views-field-field-overview-gallery').height() == 0 && jQuery('.views-field-field-overview-gallery').height() == 0){
              var event_margin = parseInt(jQuery('#block-views-09b6ce9e7089aa69fb7f8c3ad195c9d4').css('margin-top'));
              event_margin = event_margin-65;
              jQuery('#block-views-09b6ce9e7089aa69fb7f8c3ad195c9d4').css('margin-top',event_margin+'px')
           }
        });
        var url = jQuery('div.map-link a').attr('href');
        jQuery('div.map-link').text(jQuery('div.map-link').html("<a href='" + url + "' target='_blank'>See map</a>"));

});	

