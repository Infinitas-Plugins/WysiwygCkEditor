<?php
App::uses('AllTestsBase', 'Test/Lib');

class AllWysiwygCkEditorTestsTest extends AllTestsBase {

/**
 * Suite define the tests for this suite
 *
 * @return void
 */
	public static function suite() {
		$suite = new CakeTestSuite('All WysiwygCkEditor test');

		$path = CakePlugin::path('WysiwygCkEditor') . 'Test' . DS . 'Case' . DS;
		$suite->addTestDirectoryRecursive($path);

		return $suite;
	}
}
