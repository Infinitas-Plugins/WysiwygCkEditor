/**
 * Infinitas related content links
 */

CKEDITOR.dialog.add('infinitasRelatedDialog', function(editor) {
	var records = jQuery('ul.related-content.records li'),
		tags = jQuery('ul.related-content.tags li'),
		elements = {
			records: [],
			tags: []
		};
		jQuery.each(records, function(k, v) {
			v = jQuery(v);
			elements.records.push([
				v.data('text'), v.data('url')
			]);
		});
		jQuery.each(tags, function(k, v) {
			v = jQuery(v);
			elements.tags.push([
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
				id: 'infinitas-related-record-url',
				label: 'Link to a record',
				items: elements.records
			}, {
				type: 'select',
				id: 'infinitas-related-tag-url',
				label: 'Link to a tag',
				items: elements.tags
			}, {
				type: 'text',
				id: 'infinitas-related-text',
				label: 'Link text'
			}]
		}],

		onOk: function() {
			var dialog = this,
				link = editor.document.createElement('a'),
				text = dialog.getValueOf('infinitas-related-tab', 'infinitas-related-text');

			if (!text) {
				text = editor.getSelection().getSelectedText();
			}
			url = dialog.getValueOf('infinitas-related-tab', 'infinitas-related-record-url');
			if (!url) {
				url = dialog.getValueOf('infinitas-related-tab', 'infinitas-related-tag-url');
			}
			
			link.setAttribute('href', url);
			link.setAttribute('title', text);
			link.setHtml(text);

			editor.insertElement(link);
		}
	};
});