<?php
	/**
	 * events for ck_editor
	 */
	class WysiwygCkEditorEvents{
		function onRegisterWysiwyg(&$event){
			return 'ck_editor';
		}

		function onRequireJavascriptToLoad(&$event, $data){
			if(Configure::read('Wysiwyg.editor') != 'ck_editor'){
				return false;
			}
			
			switch(isset($data['admin']) && $data['admin']){
				case $data['action'] == 'admin_edit':
				case $data['action'] == 'admin_add':
					return '/wysiwyg_ck_editor/js/ckeditor';
					break;
			}

			return false;
		}
	} 