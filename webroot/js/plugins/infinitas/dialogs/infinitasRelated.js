/**
 * Infinitas related content links
 */

CKEDITOR.dialog.add('infinitasRelatedDialog', function(editor) {
	var content = jQuery('ul.related-content li'),
		elements = [];
	jQuery.each(content, function(k, v) {
		v = jQuery(v);
		debug(v);
		elements.push([
			v.data('text'), v.data('url')
		]);
	});
	return {
		title: 'Related content',
		minWidth: 600,
		minHeight: 200,
		contents: [{
			id: 'infinitas-related-tab',
			elements: [{
				type: 'select',
				id: 'infinitas-related-url',
				label: 'Record to link to',
				items: elements,
				validate: CKEDITOR.dialog.validate.notEmpty('Select the content to link to')
			}, {
				type: 'text',
				id: 'infinitas-related-text',
				label: 'Link text',
			}]
		}],

		onOk: function() {
			var dialog = this,
				link = editor.document.createElement('a'),
				text = dialog.getValueOf('infinitas-related-tab', 'infinitas-related-text');

			if (text == '') {
				text = editor.getSelection().getSelectedText();
			}
			link.setAttribute('href', dialog.getValueOf('infinitas-related-tab', 'infinitas-related-url'));
			link.setAttribute('title', text);
			link.setHtml(text);

			editor.insertElement(link);
		}
	};
});