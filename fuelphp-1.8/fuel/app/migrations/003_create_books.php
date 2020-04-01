<?php

namespace Fuel\Migrations;

class Create_books
{
	public function up()
	{
		\DBUtil::create_table('books', array(
			'id' => array('constraint' => 11, 'type' => 'int'),
			'title' => array('constraint' => 255, 'type' => 'varchar'),
			'author' => array('constraint' => 255, 'type' => 'varchar'),
			'image' => array('constraint' => 255, 'type' => 'varchar'),
			'content' => array('type' => 'text'),
			'status' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('books');
	}
}