<?php // Inicio Content Wrapper. Div que envolver toda a pagina // ?>
  <div class="content-wrapper">
<?php // Inicio Content Wrapper. Div que envolver toda a pagina // ?>

   
   
    <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Canal Direto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="../canal_direto.php">Canal Direto</a></li>

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




<div class="col-md-12">
          <div class="card card-primary">
            
            <?php // Card Cabeça ?>
              <div class="card-header">
                
                <h3 class="card-title">Contatar Prefeitura</h3>
  
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>

              </div>

              <?php // Card Corpo ?>

              <div class="card-body">

              <div class="form-group">
                  <label for="inputName">Nome</label>
                  <input type="text" name="Nome" class="form-control">
                </div>

              <div class="form-group">
                <label for="inputStatus">Motivo</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Selecionar</option>
                  <option>Solicitar Consultor</option>
                  <option>Ajuda para Abrir Empresa</option>
                  <option>Ajuda com Micro Credito</option>
                  <option>Outros</option>
                </select>
              </div>

              <div class="form-group">
                <label for="inputDescription">Descrição:</label>
                <textarea id="inputDescription" name="Descricao" class="form-control" rows="4"></textarea>
              </div>

                <div class="form-group">
                  <label for="inputClientCompany">Email </label>
                  <input type="email" name="Email" class="form-control">
                </div>


                <div class="row">
                  <div class="col-12">
                    <input type="button" value="Confirmar" class="btn btn-success float-right">
                  </div>
                </div>

              </div>
            </div>





<?php // ----------------- // ?>
        </div>
      </div>
    </div>
  </section>
<?php // ----------------- // ?>




<?php // Fim Content Wrapper. Div que envolver toda a pagina // ?>
  </div>
<?php // Fim Content Wrapper. Div que envolver toda a pagina // ?>


