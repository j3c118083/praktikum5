<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Hobby extends Migration
{
	private $table = 'hobi';
	public function up()
	{
		$this->forge->addField([	
			'kode_hobi'          => [
					'type'           => 'INT',
					'constraint'     => '1',
					'unsigned'		 => TRUE,
					'auto_increment' => TRUE,
			],
			'hobi'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
		]);
	$this->forge->addKey('hobi', true);
	$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('prodi');
	}
}
