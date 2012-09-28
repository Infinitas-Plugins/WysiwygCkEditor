<?php
App::uses('View', 'View');
App::uses('Helper', 'View');
App::uses('WysiwygCkEditorHelper', 'WysiwygCkEditor.View/Helper');

/**
 * WysiwygCkEditorHelper Test Case
 *
 */
class WysiwygCkEditorHelperTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$View = new View();
		$this->WysiwygCkEditor = new WysiwygCkEditorHelper($View);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WysiwygCkEditor);

		parent::tearDown();
	}

/**
 * testEditor method
 *
 * @return void
 */
	public function testEditor() {
	}

}
