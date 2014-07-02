(function ($) {
   
  Drupal.behaviors.quickedit_style = {
    attach: function (context, settings,event) {
		

		//Mobile Menu Toggle button
		if(!$('.admin-quickedit i').length) {
			$('.admin-quickedit a')
				.addClass('button button-block button-red')
				.prepend("<i class='icon-edit icon-large' style='vertical-align:top;'></i> ");
			}
   	} 
  };

   
  Drupal.behaviors.icons = {
    attach: function (context, settings,event) {
		
		//Mobile Menu Toggle button
		if(!$('.field-pdf-attach i').length) {
			$('.field-pdf-attach a').prepend("<i class='fa fa-file fa-large' style='vertical-align:top;'></i> ");
		}
		
		//Mobile Menu Toggle button
		if(!$('.sf-accordion-toggle i').length) {
			$('.sf-accordion-toggle a').prepend("<i class='fa fa-reorder fa-large' style='vertical-align:middle;'></i> ");
		}
		
		
		//Add expand icon to .menuparent
		$('.sf-accordion a.menuparent').each(function(index) {
		
			//Test if icon has already been added, and make sure menuparent is not a clone
			if(!$('i',this).length && !$(this).parent().hasClass('sf-clone-parent')) {
				$(this).prepend("<i class='icon-expand-alt icon-large' style='vertical-align:top;'></i> ");
			}
		});		
   	
   	} 
  };




})(jQuery);