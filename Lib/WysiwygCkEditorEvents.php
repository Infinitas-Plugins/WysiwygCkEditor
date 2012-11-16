<?php
	/**
	 * events for ck_editor
	 */
	class WysiwygCkEditorEvents extends AppEvents {
		function onRegisterWysiwyg(Event $Event) {
			return 'ck_editor';
		}

		function onRequireJavascriptToLoad(Event $Event) {
			if(Configure::read('Wysiwyg.editor') != 'ck_editor') {
				return false;
			}

			switch(isset($data['admin']) && $data['admin']) {
				case $data['action'] == 'admin_edit':
				case $data['action'] == 'admin_add':
					return 'WysiwygCkEditor.ckeditor';
					break;
			}

			return false;
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