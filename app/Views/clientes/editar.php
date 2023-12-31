 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      <?php 
          $session = session();
          $alert = $session->get("alert");
        ?>
        <?php if(isset($alert)):?>
            <?php if ($alert == 'success_update'):?>
              <div class="row">
                <div class="col-lg-12">
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Sucesso!</strong> Cliente atualizada com sucesso.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
              </div>
              <?php endif; ?>
        <?php endif;?>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Atualizar clieiente</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item inactive"><a href="/inicio/index">Início</a></li>
              <li class="breadcrumb-item "><a href="/clientes/index">Clientes</a></li>
              <li class="breadcrumb-item active"><a href="/clientes/novo">Atualizar</a></li>
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
            <div class="col-lg-12">
            <div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Dados pessoais</h3>
</div>


    <form action="/clientes/store" method="post">
    <div class="card-body">
        <div class="row">
            <div class="form-group col-lg-5">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?= $cliente['nome']?>">
            </div>
            <div class="col-lg-3">
                    <label for="name">Data de Nascimento</label>
                    <input type="date" class="form-control" name="data_de_nascimento" value ="<?= $cliente['data_de_nascimento']?>">
            </div>
            <div class="col-lg-4">
                    <label for="telefone">Telefone</label>
                    <input type="phone" class="form-control" name="telefone" value ="<?= $cliente['telefone']?>">
            </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="endereco" value ="<?= $cliente['endereco']?>">
                </div>
                <div class="col-lg-4">
                    <label for="limite_de_credito">Limite de crédito</label>
                    <input type="text" class="form-control" name="limite_de_credito" value ="<?= $cliente['limite_de_credito']?>">
                </div>
                <input type="hidden" name="id_cliente" value="<?= $cliente['id_cliente'] ?>"></input>
            </div>
</div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
    </form>
    </div>

            </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
</div>