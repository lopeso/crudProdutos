<?php
namespace App\Controllers;
use App\Models\ProdutoModel;
use CodeIgniter\Controller;

class Produtos extends Controller{
    public function index(){

        $titulo = "Meus Produtos";
        $produtos =[
            [
                'nome' => 'numeroUm',
                'descricao' => 'ss',
                'valor_de_compra' => 45,
                'valor_de_venda' => 454,
                'quantidade' => 9,
                'validade' => ''
            ],
            [
                'nome' => 'numeroDois',
                'descricao' => 'ss',
                'valor_de_compra' => 45,
                'valor_de_venda' => 454,
                'quantidade' => 9,
                'validade' => ''
            ],
        ];


        $data['titulo'] = $titulo;
        $data['produtos'] = $produtos;
        echo view('produtos/index', $data);
    }

    public function novo(){
        //CREATE
       $produto_model = new ProdutoModel();

       $data =[
        'nome'           => $this->request->getVar('nome'),
        'descricao'      => $this->request->getVar('descricao'),
        'valor_de_compra'=> $this->request->getVar('valor_compra'),
        'valor_de_venda' => $this->request->getVar('valor_de_venda'),
        'quantidade'     => $this->request->getVar('quantidade'),
        'validade'       => $this->request->getVar('validade')
        ];

        return view('produtos/novo', $data);
    }

    public function save($data){
        dd($data);
        // $produto_model = new ProdutoModel();
        //  $insert = $produto_model->insert([
        //        'nome'              => $data['nome'],
        //        'descricao'         => $data['descricao'],
        //        'valor_compra'      => $data['valor_de_compra'],
        //        'valor_de_venda'    => $data['valor_de_venda'],
        //        'quantidade'        => $data['quantidade'],
        //        'validade'          => $data['validade']
        //  ]);
        // //$insert =  $produto_model->insert($dados);
        // if($insert){
        // echo "dados inseridos";

        // }else{
        //     echo "dados n inseridos";
        // }
    }


    public function model(){
        $produto_model = new ProdutoModel();
        //READ
        $produto = $produto_model->findAll();
        $produto = $produto_model->where('id_produto', 1)->first();


        //UPDATE
        $dados =[
            'nome'              => 'iphoeees',
            'descricao'         => 'desxxc',
            'valor_compra'      => 233,
            'valor_de_venda'    => 300,
            'quantidade'        => 2,
            'validade'          => ""
        ];
        $produto_model
            ->where('id_produto', 2)
            ->set($dados)
            ->update();

        //DELETE
        $produto_model->where('id_produto', 5)->delete();

        dd($produto);
    }

}
?>