<?php
/**
 * WysiwygCkEditorEvents
 */
class WysiwygCkEditorEvents extends AppEvents {

	public function onRegisterWysiwyg(Event $Event) {
		return 'ck_editor';
	}

	public function onRequireJavascriptToLoad(Event $Event) {
		if(Configure::read('Wysiwyg.editor') != 'ck_editor') {
			return false;
		}

		if(isset($Event->Handler->request->params['admin']) && $Event->Handler->request->params['admin']) {
			if(in_array($Event->Handler->request->params['action'], array('admin_edit', 'admin_add'))) {
				return array(
					'WysiwygCkEditor.ckeditor'
				);
			}
		}
	}

	public function onSetupRoutes(Event $Event) {
		InfinitasRouter::connect(
			'/wysiwyg_ck_editor/js/contents.get.css',
			array(
				'plugin' => 'themes',
				'controller' => 'themes',
				'action' => 'frontend_css',
				'admin' => false
			),
			array(
				'ext' => 'css'
			)
		);
	}
}