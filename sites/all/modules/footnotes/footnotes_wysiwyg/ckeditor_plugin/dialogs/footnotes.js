CKEDITOR.dialog.add('footnotesDialog', function ( editor ) {
		var loadElements = function( editor, selection, element )
		{
			var content = null;
			var attr_value = null;

			element.editMode = true;
			content = element.getText();
			attr_value = element.getAttribute('value');

			if ( content.length > 0 )
				this.setValueOf( 'info','footnote', content );
		  else
				this.setValueOf( 'info','footnote', "" );
			if ( attr_value && attr_value.length > 0 )
			  this.setValueOf( 'info','value', attr_value );
			else
			  this.setValueOf( 'info','value', "" );
		};
		return {
			title : Drupal.t('Footnotes Dialog'),
			minWidth : 500,
			minHeight : 50,
			contents : [
			{
				id : 'info',
				label : Drupal.t('Add a footnote'),
				title : Drupal.t('Add a footnote'),
				elements :
				[
					{
						id : 'footnote',
						type : 'text',
						label : Drupal.t('Footnote text :'),
					},
					{
						id : 'value',
						type : 'text',
						label : Drupal.t('Value :'),
						labelLayout : 'horizontal',
						style : 'float:left;width:100px;',
					}
				]
			}
			],
			onShow : function()
			{
			  this.editObj = false;
			  this.fakeObj = false;
			  this.editMode = false;

			  var selection = editor.getSelection();
			  var ranges = selection.getRanges();
			  var element = selection.getSelectedElement();
			  var seltype = selection.getType();

			  if ( seltype == CKEDITOR.SELECTION_ELEMENT && element.getAttribute( 'data-cke-real-element-type' ) && element.getAttribute( 'data-cke-real-element-type' ) == 'fn' )
			  {
					this.fakeObj = element;
					element = editor.restoreRealElement( this.fakeObj );
					loadElements.apply( this, [ editor, selection, element ] );
					selection.selectElement( this.fakeObj );
				}
			  else if ( seltype == CKEDITOR.SELECTION_TEXT )
			  {
				  this.setValueOf( 'info','footnote', selection.getNative() );
			  }
			  this.getContentElement( 'info', 'footnote' ).focus();
			},
			onOk : function()
			{
				var editor = this.getParentEditor();
				var content = this.getValueOf( 'info', 'footnote' );
				var value = this.getValueOf( 'info', 'value' );
				if ( content.length > 0 || value.length > 0 ) {
					var realElement = CKEDITOR.dom.element.createFromHtml('<fn></fn>');
					if ( content.length > 0 )
						realElement.setText(content);
					if ( value.length > 0 )
						realElement.setAttribute('value',value);
					var fakeElement = editor.createFakeElement( realElement , 'cke_footnote', 'fn', false );
					editor.insertElement(fakeElement);
				}
			}
		};
});

