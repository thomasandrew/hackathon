<?php 
$idCurso= 0;$Nome = "xx";  $BreveDescricao = "xx";   $Descricao=$Descricao= "xx";   $Grade = "xx";$CargaHoraria = "xx";$Link = "xx";

$busca = new Curso(4, $Nome, $BreveDescricao,$Descricao, $Grade, $CargaHoraria, $Link);
$lista = $busca->lista();
?> 
<?php //####################################################################//#################################################################### ?>



<?php // Inicio Content Wrapper. Div que envolver toda a pagina // ?>
  <div class="content-wrapper">
<?php // Inicio Content Wrapper. Div que envolver toda a pagina // ?>

   
<?php //####################################################################//#################################################################### ?>
<?php //####################################################################//#################################################################### ?>
<?php //####################################################################//#################################################################### ?>
    <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrativo Cursos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="../dicas.php">Administrativo Cursos</a></li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
  </section>
<?php //####################################################################//#################################################################### ?>
<?php //####################################################################//#################################################################### ?>
<?php //####################################################################//#################################################################### ?>




<?php //####################################################################//#################################################################### ?>
<?php //####################################################################//#################################################################### ?>
 <!-- Main content -->
 <section class="content">
 <div class="row">
 <?php //####################################################################//#################################################################### ?>
 <?php //####################################################################//#################################################################### ?>
  
        <div class="col-md-12">
          <div class="card card-primary">
            
            <?php // Card Cabeça ?>
              <div class="card-header">
                
                <h3 class="card-title">Cadastrar Cursos</h3>
  
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>

              </div>

              <?php // Card Corpo ?>

              <div class="card-body">

              <form method="POST" action="src/controllers/insereCurso.php">
              
                <div class="form-group">
                  <label for="inputName">Id</label>
                  <input type="text" name="idCurso" class="form-control">
                </div>

                <div class="form-group">
                  <label for="inputName">Nome</label>
                  <input type="text" name="Nome" class="form-control">
                </div>

              <div class="form-group">
                <label for="inputDescription">Breve Descrição</label>
                <textarea id="inputDescription" name="BreveDescricao" class="form-control" rows="2"></textarea>
              </div>

              <div class="form-group">
                <label for="inputDescription">Descrição Completa</label>
                <textarea id="inputDescription" name="Descricao" class="form-control" rows="4"></textarea>
              </div>

                <div class="form-group">
                  <label for="inputClientCompany">Grade </label>
                  <input type="text" name="Grade" class="form-control">
                </div>

                <div class="form-group">
                  <label for="inputProjectLeader">Carga Horaria</label>
                  <input type="text" name="CargaHoraria" class="form-control">
                </div>

                <div class="form-group">
                  <label for="inputProjectLeader">Link</label>
                  <input type="text" name="Link" class="form-control">
                </div>

                <div class="row">
                  <div class="col-12">
                    <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
                    <input type="submit" value="CadastrarCurso" class="btn btn-success float-right">
                  </div>
                </div>

              </form>
              </div>
            </div>

<?php //####################################################################//#################################################################### ?>
<?php //####################################################################//#################################################################### ?>

    <div class="col-md-12">
      <div class="card ">
  
  <div class="card-header">
    <h3 class="card-title">Cursos Cadastrados</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>

  <div class="card-body p-0">
    
    
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
              <?php 
            
                  foreach ($lista as $linha):
                    
              ?>
                                <tr>
                                    <td><?php echo $linha['idCurso'] ?></td>
                                    <td><?php echo $linha['Nome'] ?></td>
                                    <td><?php echo $linha['CargaHoraria'] ?></td>
                                    <td><?php echo $linha['Link'] ?></td>
                                    <td>

                                            <div class="btn-group">

                                                <button type="submit" class="btn btn-sm  btn-info">Acessar</button>
                                
                                             

                                                        <button type="button" class="btn btn-sm  btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>

                            
                                                        <div class="dropdown-menu">
                                                    <button class="dropdown-item btn" type="button" data-toggle="modal" data-target="#modal-editar-curso-<?php echo $linha['idCurso'] ?>">Editar Dia Evento</button>
                                                        <div class="dropdown-divider"></div>
                                                    <button class="dropdown-item btn" type="button" data-toggle="modal" data-target="#modal-excluir-curso-<?php echo $i; ?>">Excluir Dia Evento</button>
                                                </div>
                                            </div>
                                    </td>
                                </tr>

<!-- Modal -->
<div class="modal fade" id="modal-editar-curso-<?php echo $linha['idCurso'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modal-editar-curso" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Curso <?php echo $linha['Nome'] ?><?php echo $linha['idCurso'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



     <form method="POST" action="src/controllers/alterarCurso.php">
              
              
                  <input type="hidden" name="idCurso" value="<?php echo $linha['idCurso'] ?>" class="form-control" >
             

                <div class="form-group">
                  <label for="inputName">Nome</label>
                  <input type="text" name="Nome" value="<?php echo $linha['Nome'] ?>" class="form-control">
                </div>

              <div class="form-group">
                <label for="inputDescription">Breve Descrição</label>
                <input id="inputDescription" name="BreveDescricao"  value="<?php echo $linha['BreveDescricao'] ?>" class="form-control" rows="2">
              </div>

              <div class="form-group">
                <label for="inputDescription">Descrição Completa</label>
                <input id="inputDescription" name="Descricao" value="<?php echo $linha['Descricao'] ?>" class="form-control" rows="4">
              </div>

                <div class="form-group">
                  <label for="inputClientCompany">Grade </label>
                  <input type="text" name="Grade" value="<?php echo $linha['Grade'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label for="inputProjectLeader">Carga Horaria</label>
                  <input type="text" name="CargaHoraria" value="<?php echo $linha['CargaHoraria'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label for="inputProjectLeader">Link</label>
                  <input type="text" name="Link" value="<?php echo $linha['Link'] ?>" class="form-control">
                </div>
            
     



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success">Editar</button>
      </div>
      </form>

    </div>
  </div>
</div>

                  <?php endforeach; ?>
                          




               

                        </table>
                    </div>



  </div>

</div>




          





            </div>



<?php //####################################################################//#################################################################### ?>
<?php //####################################################################//#################################################################### ?>
        </div> <!-- /.row -->
      </section>
    </div> <!-- /.content-wrapper -->
<?php //####################################################################//#################################################################### ?>
<?php //####################################################################//#################################################################### ?>























<!-- 
<div class="card">
  
  <div class="card-header">
    <h3 class="card-title">Projects</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>

  <div class="card-body p-0">
    <table class="table table-striped projects">
        
        <thead>
            <tr>
                <th style="width: 1%">
                    #
                </th>
                <th style="width: 20%">
                    Project Name
                </th>
                <th style="width: 30%">
                    Team Members
                </th>
                <th>
                    Project Progress
                </th>
                <th style="width: 8%" class="text-center">
                    Status
                </th>
                <th style="width: 20%">
                </th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>
                    #
                </td>
                <td>
                    <a>
                        AdminLTE v3
                    </a>
                    <br/>
                    <small>
                        Created 01.01.2019
                    </small>
                </td>
                <td>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                        </li>
                        <li class="list-inline-item">
                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                        </li>
                        <li class="list-inline-item">
                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                        </li>
                        <li class="list-inline-item">
                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                        </li>
                    </ul>
                </td>
                <td class="project_progress">
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                        </div>
                    </div>
                    <small>
                        57% Complete
                    </small>
                </td>
                <td class="project-state">
                    <span class="badge badge-success">Success</span>
                </td>
                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-folder">
                        </i>
                        View
                    </a>
                    <a class="btn btn-info btn-sm" href="#">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a>
                </td>
            </tr>

            
        </tbody>
    </table>
  </div>

</div>
 -->



