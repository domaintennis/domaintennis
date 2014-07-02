/**
 * A CKeditor plugin to insert footnotes as in-place <fn> elements (consumed by Footnotes module in Drupal).
 *
 * This is a rather sophisticated plugin to show a dialog to insert
 * <fn> footnotes or edit existing ones. It produces and understands
 * the <fn>angle bracket</fn> variant and uses the fakeObjects API to
 * show a nice icon to the user, while producing proper <fn> tags when
 * the text is saved or View Source is pressed.
 *
 * If a text contains footnotes of the [fn]square bracket[/fn] variant,
 * they will be visible in the text and this plugin will not react to them.
 *
 * This plugin uses Drupal.t() to translate strings and will not as such
 * work outside of Drupal. (But removing those functions would be the only
 * change needed.) While being part of a Wysiwyg compatible module, it could
 * also be used together with the CKEditor module.
 *
 * Drupal Wysiwyg requirement: The first argument to CKEDITOR.plugins.add()
 * must be equal to the key used in $plugins[] in hook_wysiwyg_plugin().
 */
CKEDITOR.plugins.add( 'footnotes',
{
    requires : [ 'fakeobjects', 'htmlwriter' ],
    init: function( editor )
    {
      editor.addCommand('footnotes', new CKEDITOR.dialogCommand('footnotesDialog', {
				    allowedContent: 'fn'
			}));
			CKEDITOR.dialog.add('footnotesDialog', this.path + 'dialogs/footnotes.js' );

      // Drupal Wysiwyg requirement: The first argument to editor.ui.addButton()
      // must be equal to the key used in $plugins[<pluginName>]['buttons'][<key>]
      // in hook_wysiwyg_plugin().
      editor.ui.addButton('footnotes',
        {
            label : Drupal.t('Add a footnote'),
            icon : this.path + 'icons/footnotes.png',
            command : 'footnotes'
        });
      if ( editor.addMenuGroup )
      {
        editor.addMenuGroup('footnotes');
      }
      if ( editor.addMenuItems )
      {
        editor.addMenuItems(
          {
            footnotes :
              {
                label : Drupal.t('Edit footnote'),
                command : 'footnotes',
                icon : this.path + 'icons/footnotes.png',
                group : 'footnotes'
              }
          });
      }
      if ( editor.contextMenu )
      {
        editor.contextMenu.addListener(function(element, selection)
          {
            if (element.is( 'img' ) &&element.getAttribute( 'data-cke-real-element-type' ) == 'fn')
              return { footnotes : CKEDITOR.TRISTATE_OFF };
            else
              return null;
          });
      }
    },
    afterInit: function( editor )
		{
      CKEDITOR.addCss(
        'img.cke_footnote' +
        '{' +
          'background-image: url(' + CKEDITOR.getUrl( this.path + 'icons/fn_icon2.png' ) + ');' +
          'background-position: center center;' +
          'background-repeat: no-repeat;' +
          'width: 16px;' +
          'height: 16px;' +
		    '}'
			);

			var dataProcessor = editor.dataProcessor,
					dataFilter = dataProcessor && dataProcessor.dataFilter;

			if ( dataFilter ) {
				dataFilter.addRules({
          elements : {
						'fn' : function( element ) {
							var fakeElement = editor.createFakeParserElement(element, 'cke_footnote', 'fn', false );
							return fakeElement;
						}
					}

				});
			}

		},
});
