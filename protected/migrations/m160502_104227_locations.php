<?php

class m160502_104227_locations extends CDbMigration
{
	public function up()
	{
		$this->createTable('locations', array(

		'id' => 'INTEGER PRIMARY KEY',

		'name' => 'TEXT',

		'lat' => 'TEXT',

		'long' => 'TEXT',

		'city' => 'TEXT',

		'state' => 'TEXT',
		
		'created' => 'INTEGER',
		
		'updated' => 'INTEGER'

		));
	}

	public function down()
	{
	$this->dropTable('locations');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}