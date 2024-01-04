<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= (isset($funcionario)) ? "Editar" : "Novo" ?> Funcionário</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="/funcionarios" class="btn btn-success" style="margin-right: 15px"><i class="fas fa-arrow-alt-circle-left"></i> Voltar</a>
              <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
              <li class="breadcrumb-item"><a href="/clientes">Funcionários</a></li>
              <li class="breadcrumb-item active">Novo</li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Dados Pessoais</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Nome</label>
                            <input disabled type="text" class="form-control" name="nome" value="<?= $funcionario['nome'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="">Data de Nascimento</label>
                            <input disabled type="date" class="form-control" name="data_de_nascimento" value="<?= (isset($funcionario)) ? $funcionario['data_de_nascimento'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="">RG</label>
                            <input disabled type="text" class="form-control" name="rg" value="<?= $funcionario['rg'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="">CPF</label>
                            <input disabled type="text" class="form-control" name="cpf" value="<?=$funcionario['cpf'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="">Telefone</label>
                            <input disabled type="text" class="form-control" name="telefone" value="<?= $funcionario['telefone'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Endereço</label>
                            <input disabled type="text" class="form-control" name="endereco" value="<?= $funcionario['endereco']  ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="">Data de Contratação</label>
                            <input disabled type="date" class="form-control" name="data_de_contratacao" value="<?=  $funcionario['data_de_contratacao'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="">Cargo</label>
                            <input disabled type="text" class="form-control" name="cargo" value="<?= $funcionario['cargo'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="">Salário</label>
                            <input disabled type="text" class="form-control" name="salario" value="<?=  $funcionario['salario'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="">Dia de pagamento</label>
                            <input disabled type="text" class="form-control" name="dia_de_pagamento" value="<?= $funcionario['dia_de_pagamento'] ?>">
                        </div>
                    </div>

                    <?php if(isset($funcionario)): ?>
                        <input disabled type="hidden" name="id_funcionario" value="<?= $funcionario['id_funcionario'] ?>">
                    <?php endif; ?>

                  </div>
                </div>
                <!-- /.card-body -->

               
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->