 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
 
      
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">funcionarios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">funcionarios</li>
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
                  <a href="/funcionarios/novo" class="btn btn-info">Ver funcionario</a>
                  </div>

                  <div class="card-body">
                  <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">cód.:</th>
                      <th>Nome</th>
                    
                      <th> cpf </th>
                    
                      <th> Data de contratacao</th>
                     
                      <th>  Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($funcionarios)):?>
                      <?php foreach($funcionarios as $funcionario): ?>
                      <tr>
                        <td><?= $funcionario['id_funcionario'] ?></td>
                        <td><?= $funcionario['nome'] ?></td>
                        <td><?= $funcionario['cpf'] ?></td>
                        <td><?= $funcionario['data_de_contratacao'] ?></td>
                        
                        <td>
                             <a class="btn btn-info" href="/funcionarios/ver/<?= $funcionario['id_funcionario']?>"><i class="fas fa-eye"></i></a> 
                            <a class="btn btn-warning" href="/funcionarios/editar/<?= $funcionario['id_funcionario']?>"><i class="text-white fas fa-edit"></i></a>
                            <a class="btn btn-danger"type="button" onClick="document.getElementById('id_funcionario').value = <?=$funcionario['id_funcionario'] ?>" data-toggle="modal" data-target="#modal-confirmacao-excluir"><i class="fa fa-trash"></i></a>
                        </td>

                      </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                      <td colspan="7">nenhum funcionario cadastrado!</td>

                    <?php endif;?>
                  </tbody>
                  </table>


                  <div class="modal fade" id="modal-confirmacao-excluir">
                        <div class="modal-dialog">
                        <div class="modal-content">
                          <form action="/funcionarios/delete" method="post">
                              <div class="modal-header">
                              <h4 class="modal-title">Deseja excluir este funcionario?</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                              <input type="hidden" id="id_funcionario" name="id_funcionario"></input>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">NÃO</button>
                              <button type="submit" class="btn btn-primary">SIM</button>
                            </div>
                          </form>
                        </div>

                        </div>

                    </div>

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