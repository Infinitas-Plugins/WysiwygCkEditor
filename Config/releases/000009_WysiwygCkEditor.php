<?php
	/**
	 * Infinitas Releas
	 *
	 * Auto generated database update
	 */
	 
	class R4f564ab974e0413180e54d916318cd70 extends CakeRelease {

	/**
	* Migration description
	*
	* @var string
	* @access public
	*/
		public $description = 'Migration for WysiwygCkEditor version 0.9';

	/**
	* Plugin name
	*
	* @var string
	* @access public
	*/
		public $plugin = 'WysiwygCkEditor';

	/**
	* Actions to be performed
	*
	* @var array $migration
	* @access public
	*/
		public $migration = array(
			'up' => array(
		),
		'down' => array(
		),
		);

	
	/**
	* Before migration callback
	*
	* @param string $direction, up or down direction of migration process
	* @return boolean Should process continue
	* @access public
	*/
		public function before($direction) {
			return true;
		}

	/**
	* After migration callback
	*
	* @param string $direction, up or down direction of migration process
	* @return boolean Should process continue
	* @access public
	*/
		public function after($direction) {
			return true;
		}
	}