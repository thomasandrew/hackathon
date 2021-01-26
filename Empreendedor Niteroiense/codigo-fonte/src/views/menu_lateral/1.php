  <?php # Inicio Menu Lateral ?>

<?php if( $controle_menulateral == TRUE ): ?>


  <aside class="main-sidebar navbar-light sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link elevation-2" style="text-align: center;">
      <img src="../../assets/img/logo/logo2.png" alt="Logo" class="brand-image" style=" width: 200px; min-height:65px;">
        <!-- <span class="brand-text font-weight-light">Unilasalle RJ</span> -->
    </a>



    <!-- Sidebar -->
    <div class="sidebar" style="margin-top: 40px;">




    <?php // ####################################################################### ?>
    <?php // Inicio Perfi Usuario ?>
    <?php // ####################################################################### ?>
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            
            <div class="image">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQGpWEhK-ZOSK2tz0-AKii07HgjjEFRJ1Lcuw&usqp=CAU" class="img-circle elevation-2" alt="Foto">
            </div>

            <div class="info">
              <a href="perfil.php" class="d-block">Aline Gomes</a>
            </div>

          </div>
      <?php // ####################################################################### ?>
      <?php // Fim Perfi Usuario ?>
      <?php // ####################################################################### ?>

      <!-- SidebarSearch Form 
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
        -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php // ####################################################################### ?>
          <?php // InicioIntrodução : ?>
          <?php // ####################################################################### ?>
          <?php /*
                  A classe: class="nav-link active" coloca o azul de ativo no menu
                  
                  A classe: menu-open - deixa o menu aberto
                  ex: <li class="nav-item menu-open"> 




          */ ?>
          <?php // ####################################################################### ?>
          <?php // Fim Introdução : ?>
          <?php // ####################################################################### ?>


          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>
          
          
          <li class="nav-header"></li>

          <?php // ####################################################################### ?>
          <?php // Inicio Novidades ?>
          <?php // ####################################################################### ?>
              <li class="nav-item">
                <a href="../index.php" class="nav-link active">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Novidades
                    <span class="right badge badge-primary">Novo</span>
                  </p>
                </a>
              </li>
          <?php // ####################################################################### ?>
          <?php // Fim Novidades ?>
          <?php // ####################################################################### ?>

          


          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>


          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>

          <?php // ####################################################################### ?>
          <?php // Inicio Capacitação ?>
          <?php // ####################################################################### ?>

          <li class="nav-header">CAPACITAÇÃO</li>

          <?php // ####################################################################### ?>
          <?php // Inicio Auxilio ?>
          <?php // ####################################################################### ?>
                    <li class="nav-item">
          
           <a href="#" class="nav-link">
               <i class="nav-icon fas fas fa-book"></i>
               <p>
                 Cursos
                 <i class="fas fa-angle-left right"></i>
               </p>
             </a>
 
             <ul class="nav nav-treeview">
             
             <?php // ######################### ?>
               <li class="nav-item">
                 <a href="../lista_cursos.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Micro-Empreendedor</p>
                 </a>
               </li>
               <?php // ######################### ?>
               
 
               <?php // ######################### ?>
               <li class="nav-item">
                 <a href="../lista_cursos.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Financeiro</p>
                 </a>
               </li>
               <?php // ######################### ?>

               <?php // ######################### ?>
               <li class="nav-item">
                 <a href="../lista_cursos.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Marketing</p>
                 </a>
               </li>
               <?php // ######################### ?>
 
               <?php // ######################### ?>
               <li class="nav-item">
                 <a href="../lista_cursos.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Ver Todos</p>
                 </a>
               </li>
               <?php // ######################### ?>
 
 
             </ul>
           </li>
           <?php // ######################################################### ?>
          <?php // Fim Auxilio ?>
          <?php // ######################################################### ?>


          <?php // ######################### ?>          
                  <li class="nav-item">
                    <a href="dicas.php" class="nav-link">
                      <i class="nav-icon fas fa-book"></i>
                      <p>
                        Dicas
                      </p>
                    </a>
                  </li>
          <?php // ######################### ?>


          <?php // ####################################################################### ?>
          <?php // Fim Capacitação ?>
          <?php // ####################################################################### ?>

          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>



          <?php // ####################################################################### ?>
          <?php // Beneficios ?>
          <?php // ####################################################################### ?>

          <li class="nav-header">BENEFICIOS</li>

          <?php // ######################### ?>
          <?php // ######################### ?>
          <?php // ######################### ?>

          <li class="nav-item">
           
           <a href="#" class="nav-link">
               <i class="nav-icon fas fa-hands-helping"></i>
               <p>
                 Auxilios
                 <i class="fas fa-angle-left right"></i>
                 <span class="badge badge-primary right">3</span>
               </p>
             </a>
 
             <ul class="nav nav-treeview">
             
             <?php // ######################### ?>
               <li class="nav-item">
                 <a href="../lista_auxilio.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Micro-Empreendedor</p>
                 </a>
               </li>
               <?php // ######################### ?>
               
 
               <?php // ######################### ?>
               <li class="nav-item">
                 <a href="../lista_auxilio.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Covid</p>
                 </a>
               </li>
               <?php // ######################### ?>
 
 
               <?php // ######################### ?>
               <li class="nav-item">
                 <a href="../lista_auxilio.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Ver Todos</p>
                 </a>
               </li>
               <?php // ######################### ?>
 
 
             </ul>
           </li>

          <?php // ######################### ?>
          <?php // ######################### ?>

          
          
          <?php // ####################################################################### ?>
          <?php // Fim Beneficios ?>
          <?php // ####################################################################### ?>
          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>

          <?php // ####################################################################### ?>
          <?php // Inicio Ferramentas ?>
          <?php // ####################################################################### ?>

          <li class="nav-header">FERRAMENTAS</li>


          <?php // ######################### ?>          
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-book"></i>
                      <p>
                        Controle Estoque
                      </p>
                    </a>
                  </li>
          <?php // ######################### ?>


          <li class="nav-item">
           
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hand-holding-usd"></i>
              <p>
                Vendas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
            
              <?php // ######################### ?>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registrar Venda</p>
                  </a>
                </li>
              <?php // ######################### ?>
              

              <?php // ######################### ?>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultar Vendas</p>
                </a>
              </li>
              <?php // ######################### ?>


              <?php // ######################### ?>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Tudo</p>
                </a>
              </li>
              <?php // ######################### ?>


            </ul>
          </li>

          <?php // ####################################################################### ?>
          <?php // Fim Ferramentas ?>
          <?php // ####################################################################### ?>

          <li class="nav-header">CANAL COM A PREFEITURA</li>

          <?php // ####################################################################### ?>
          <?php // Inicio Canal Direto ?>
          <?php // ####################################################################### ?>
              <li class="nav-item">
                <a href="../canal_direto.php" class="nav-link ">
                  <i class="nav-icon fas fa-hands-helping"></i>
                  <p>
                    Canal Direto
                    <span class="right badge badge-primary">Novo</span>
                  </p>
                </a>
              </li>
          <?php // ####################################################################### ?>
          <?php // Fim Canal Direto ?>
          <?php // ####################################################################### ?>


          <?php // ####################################################################### ?>
          <?php // Inicio Realizar Feedback ?>
          <?php // ####################################################################### ?>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="nav-icon fas fa-comment-dots"></i>
                  <p>
                    Realizar Feedback
                    <span class="right badge badge-primary">Novo</span>
                  </p>
                </a>
              </li>
          <?php // ####################################################################### ?>
          <?php // Fim Realizar Feedback ?>
          <?php // ####################################################################### ?>

          <?php // ####################################################################### ?>
          <?php // Inicio Participar de Votação ?>
          <?php // ####################################################################### ?>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="nav-icon fas fa-poll"></i>
                  <p>
                    Participar de Votação
                  </p>
                </a>
              </li>
          <?php // ####################################################################### ?>
          <?php // Fim Participar de Votação ?>
          <?php // ####################################################################### ?>


          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>

          <?php // ####################################################################### ?>
          <?php // Inicio Administrativo ?>
          <?php // ####################################################################### ?>

          <li class="nav-header">ADMINISTRATIVO</li>

          <?php // ######################### ?>
          <?php // ######################### ?>
          <?php // ######################### ?>

          <li class="nav-item">
           
           <a href="#" class="nav-link">
               <i class="nav-icon fas fa-plus-square"></i>
               <p>
                 Administrar Modulos
                 <i class="fas fa-angle-left right"></i>
                 <span class="badge badge-info right"></span>
               </p>
             </a>
 
             <ul class="nav nav-treeview">
             
             <?php // ######################### ?>
               <li class="nav-item">
                 <a href="../admin_cursos.php" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Cursos</p>
                 </a>
               </li>
               <?php // ######################### ?>
               
 
               <?php // ######################### ?>
               <li class="nav-item">
                 <a href="#" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Auxilio</p>
                 </a>
               </li>
               <?php // ######################### ?>
 
 
               <?php // ######################### ?>
               <li class="nav-item">
                 <a href="#" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Noticias</p>
                 </a>
               </li>
               <?php // ######################### ?>

               <?php // ######################### ?>
               <li class="nav-item">
                 <a href="#" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Servicos</p>
                 </a>
               </li>
               <?php // ######################### ?>
 
             </ul>
           </li>

          <?php // ######################### ?>
          <?php // ######################### ?>

          
          <?php // ####################################################################### ?>
          <?php // Fim Administrativo ?>
          <?php // ####################################################################### ?>


          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>
          <?php // ##################################################################################################### ?>
          

      
          <?php // ######################### ?>    <?php // ######################### ?>          
                  <li class="nav-item" style="padding-bottom: 220px;">
                    
                  </li>
          <?php // ######################### ?>
   



  <?php // ####################################################################### ?>
  <?php // Fim Classes que envolvem menu ?>
  <?php // ####################################################################### ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <?php // ####################################################################### ?>
  <?php // Fim Classes que envolvem menu ?>
  <?php // ####################################################################### ?>


<?php endif; ?>