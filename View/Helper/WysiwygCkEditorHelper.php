<?php
/**
 * TinyMce Wysiwig Helper
 *
 * This is the helper to load and cofigure the tiny mce editor for infinitas
 *
 * @copyright Copyright (c) 2010 Carl Sutton ( dogmatic69 )
 *
 * @link http://www.infinitas-cms.org
 * @package wysiwyg
 * @subpackage wysiwyg.helpers.ck_editor
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 * @since 0.6a
 *
 * @author Carl Sutton <dogmatic69@infinitas-cms.org>
 */

App::uses('InfinitasHelper', 'Libs.View/Helper');

class WysiwygCkEditorHelper extends AppHelper {

/**
 * Helpers to load
 *
 * @var array
 */
	public $helpers = array(
		'Html'
	);

/**
 * Load the editor.
 *
 * This is the method that will replace the html element with the editor
 *
 * @param sring $fieldName the name of the field to replace.
 * @param array $config the config options
 *
 * @return string
 */
	public function editor($fieldName = null, $config = array()) {
		$did = $lines = '';

		foreach (explode('.', $fieldName) as $v) {
			$did .= ucfirst(Inflector::camelize($v));
		}

		$lines = array();

		foreach ($config as $option => $value) {
			$lines[] = $option . ' : "' . $value . '"';
		}
		$lines[] = 'customConfig:"/wysiwyg_ck_editor/js/config.js"';

		$lines = implode(', ', $lines);
		return $this->Html->scriptBlock(
			sprintf(
				"CKEDITOR.replace( '%s', { %s });",
				$did,
				$lines
			),
			array(
				'inline' => false,
				'block' => 'scripts_for_layout'
			)
		);
	}
}