<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MinhaPrimeiraSeed extends Seeder
{
    public function run()
    {
       // for( $i = 0; $i < 20; $i++ ){
        $this->db->table('produtos')->insert([
            'nome'            => 'Notebook',
            'descricao'       => 'descricao',
            'valor_de_compra' => 1299,
            'valor_de_venda'  => 1599,
            'quantidade'      => 9,
            'validade'        =>  ''
        ]);
       // }
    }
}
