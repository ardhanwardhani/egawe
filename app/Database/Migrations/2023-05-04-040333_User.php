<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user'       => [
                'type'              => 'BIGINT',
                'constraint'        => 20,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'name_user'     => [
                'type'      => 'VARCHAR',
                'constraint' => '100',
            ],
            'email_user'     => [
                'type'      => 'VARCHAR',
                'constraint' => '100',
            ],
            'password_user'     => [
                'type'      => 'VARCHAR',
                'constraint' => '100',
            ],
            'info_user'     => [
                'type'      => 'TEXT',
                'null'      => true,
            ],
        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->droptable('user');
    }
}
