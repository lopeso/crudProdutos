<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ClienteModel;

class Clientes extends Controller{
    private $cliente_model;

    function __construct(){
        $this->cliente_model = new ClienteModel();
     }
    public function index(){
        $clientes = $this->cliente_model->findAll();
        $data['clientes'] = $clientes;
        echo view('templates/header');
        echo view('clientes/index', $data );
        echo view('templates/footer');

    }
    public function editar($id_cliente){
        $clientes = $this->cliente_model->where('id_cliente', $id_cliente)->first();

        $data['cliente'] = $clientes;
        echo view('templates/header');
        echo view('clientes/editar', $data);
        echo view('templates/footer');

    }
    public function novo(){
        echo view('templates/header');
        echo view('clientes/novo');
        echo view('templates/footer');
    }
    public function store(){
        $dados =$this->request->getVar();
        if(isset($dados['id_cliente'])):
            $this->cliente_model
                                ->where('id_cliente', $dados['id_cliente'])
                                ->set($dados)
                                ->update();
            return redirect()->to("/clientes/editar/{$dados['id_cliente']}");
        endif;


        $this->cliente_model->insert($dados);
        return redirect()->to('/clientes/index');
        //$this->//dd($dados);
    }

    public function excluir(){
        $id_cliente = $this->request->getVar('id_cliente');
        $this->cliente_model
                ->where('id_cliente', $id_cliente)
                ->delete();
        return redirect()->to('/clientes/index');
    }
    public function ver($id_cliente){
        $cliente = $this->cliente_model
                        ->where('id_cliente', $id_cliente)
                        ->first();

        $data['cliente'] = $cliente;
        echo view('templates/header');
        echo view('clientes/ver', $data);
        echo view('templates/footer');
    }
}

?>