/**
 * A CkEditor plugin for infinitas related tasks
 */
CKEDITOR.plugins.add('infinitas', {
    icons: 'infinitas',
    init: function(editor) {
		editor.ui.addToolbarGroup('infinitas', 0);

        editor.addCommand('infinitasRelated', new CKEDITOR.dialogCommand('infinitasRelatedDialog'));
		editor.ui.addButton('Related', {
			label: 'Related content',
			command: 'infinitasRelated',
			toolbar: 'infinitas'
		});
		CKEDITOR.dialog.add('infinitasRelatedDialog', this.path + 'dialogs/infinitasRelated.js' );
    }
});