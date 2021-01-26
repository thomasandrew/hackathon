<?php // Inicio Content Wrapper. Div que envolver toda a pagina // ?>
  <div class="content-wrapper">
<?php // Inicio Content Wrapper. Div que envolver toda a pagina // ?>

   
   
    <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrativo Auxilios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="../dicas.php">Administrativo Auxilios</a></li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
  </section>





<?php // ----------------- // ?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
<?php // ----------------- // ?>






<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                <h4 class="card-title">Cursos Cadastrados</h4>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Carga Horaria</th>
                                    <th>Link</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Curso x</td>
                                    <td>323323</td>
                                    <td>link</td>
                                    <td>

                                            <div class="btn-group">

                                                <button type="submit" class="btn btn-sm  btn-info">Acessar</button>
                                
                                             

                                                        <button type="button" class="btn btn-sm  btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>

                            
                                                        <div class="dropdown-menu">
                                                    <button class="dropdown-item btn" type="button" data-toggle="modal" data-target="#modal-editar-dia-evento-<?php echo $i; ?>">Editar Dia Evento</button>
                                                        <div class="dropdown-divider"></div>
                                                    <button class="dropdown-item btn" type="button" data-toggle="modal" data-target="#modal-excluir-dia-evento-<?php echo $i; ?>">Excluir Dia Evento</button>
                                                </div>
                                            </div>
                                    </td>

                                </tr>
                           
                           
                
               

                        </table>
                    </div>




                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Fim Corpo Pagina -->
    <!-- ============================================================== -->








<?php // ----------------- // ?>
        </div>
      </div>
    </div>
  </section>
<?php // ----------------- // ?>




<?php // Fim Content Wrapper. Div que envolver toda a pagina // ?>
  </div>
<?php // Fim Content Wrapper. Div que envolver toda a pagina // ?>


