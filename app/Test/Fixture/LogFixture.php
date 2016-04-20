<?php
/**
 * LogFixture
 *
 */
class LogFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'datetime' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'place' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'frequency' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'station_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'sinpo_s' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'sinpo_i' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'sinpo_n' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'sinpo_p' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'sinpo_o' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'comment' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'datetime' => '2015-06-18 14:49:44',
			'place' => 'Lorem ipsum dolor sit amet',
			'frequency' => 1,
			'station_id' => 1,
			'sinpo_s' => 1,
			'sinpo_i' => 1,
			'sinpo_n' => 1,
			'sinpo_p' => 1,
			'sinpo_o' => 1,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2015-06-18 14:49:44',
			'modified' => '2015-06-18 14:49:44'
		),
	);

}
