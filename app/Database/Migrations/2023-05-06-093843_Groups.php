<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Groups extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_group'       => [
                'type'              => 'BIGINT',
                'constraint'        => 20,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'name_group'     => [
                'type'      => 'VARCHAR',
                'constraint' => '100',
            ],
            'info_group'     => [
                'type'      => 'TEXT',
                'null'      => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at datetime default null on delete current_timestamp'
        ]);
        $this->forge->addKey('id_group', true);
        $this->forge->createTable('groups');
    }

    public function down()
    {
        $this->forge->droptable('groups');
    }
}
