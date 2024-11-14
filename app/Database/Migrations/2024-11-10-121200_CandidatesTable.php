<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CandidatesTable extends Migration
{
    private const TABLE_NAME = 'candidates';

    public function up()
    {
        $fields = [
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'firstname' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'lastname' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'date_of_birth' => [
                'type' => 'DATE',
                'null' => true,
                'default' => null,
            ],
            'active' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
            ],
            'cover_text' => [
                'type' => 'TEXT',
                'null' => true,
            ]
        ];
        $this->forge->addField($fields);
        $this->forge->addPrimaryKey('id');
        $this->forge->addKey("active");
        $this->forge->addKey("date_of_birth");
        $this->forge->addKey("lastname");
        $this->forge->createTable(self::TABLE_NAME);
    }

    public function down()
    {
        $this->forge->dropTable(self::TABLE_NAME);
    }
}

