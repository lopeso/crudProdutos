<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class ClienteModel extends Model{
       protected $table = 'cliente';
       protected $primaryKey = 'id_cliente';
       protected $allowedFields=[
        'id_cliente',
        'nome',
        'data_de_nascimento',
        'telefone',
        'endereco',
        'limite_de_credito'
       ];
       protected $useTimestamps=true;
       protected $createField = 'created_at';
       protected $updatedField = 'updated_at';
       protected $deletedField = 'deleted_at';
        }
    

?>