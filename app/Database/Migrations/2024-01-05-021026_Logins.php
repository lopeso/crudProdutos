<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Logins extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_login' =>[
                'type'           => 'INT',
                'constraint'     => 9,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'usuario'=>[
                'type' => 'VARCHAR',
                'constraint' => 128
            ],
            'senha' =>[
                'type'=> 'VARCHAR',
                'constraint' => 128
            ],
            'primeiro_nome' =>[
                'type'=> 'VARCHAR',
                'constraint' => 32
            ],
            'created_at' => [
                'type' =>'DATETIME'
            ],
            'updated_at' => [
                'type' =>'DATETIME'
            ]

            ]);
        $this->forge->addKey('id_login', true);
        $this->forge->createTable('logins');
    }

    public function down()
    {
          $this->forge->dropTable('logins');
    }
}
