 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Clientes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Clientes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="div col-lg-12">
              <div class="card">
              <div class="card-header">
                  <a href="/clientes/novo" class="btn btn-info">Novo Cliente</a>
                  </div>

                  <div class="card-body">
                  <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">cód.:</th>
                      <th>Nome</th>
                      <th>Data Nascimento</th>
                      <th >Telefone</th>
                      <th>  Endereço</th>
                      <th> limite de crédito</th>
                      <th> Ações </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($clientes as $cliente): ?>
                      <tr>
                        <td><?= $cliente['id_cliente'] ?></td>
                        <td><?= $cliente['nome'] ?></td>
                        <td><?= $cliente['data_de_nascimento'] ?></td>
                        <td><?= $cliente['telefone'] ?></td>
                        <td><?= $cliente['endereco'] ?></td>
                        <td><?= $cliente['limite_de_credito'] ?></td>
                        <td>
                            <a href="/clientes/ver/<?= $cliente['id_cliente']?>"><i class="far fa-eye"></i></a>
                            <a href="/clientes/editar/<?= $cliente['id_cliente']?>"><i class="far fa-edit"></i></a>
                            <a href="/clientes/excluir/<?= $cliente['id_cliente']?>"><i class="fa fa-trash"></i></a>
                        </td>

                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  </table>
            </div>

<div class="card-footer clearfix">
<ul class="pagination pagination-sm m-0 float-right">
<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
</ul>
</div>
</div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->