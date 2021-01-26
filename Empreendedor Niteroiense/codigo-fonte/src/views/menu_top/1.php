<?php # Inicio do Menu Top ?>

<?php if( $controle_menutop == TRUE ){ ?>



<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
<ul class="navbar-nav">

<?php if( $controle_menulateral == TRUE ): ?>
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
<?php endif; ?>

<!--
    <li class="nav-item">
      <img src="../../assets/img/logo_unilasalle_azul.png" alt="Logo"  style="opacity: .8" width="130" >
    </li>
-->
     
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Pesquisar" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>




    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


<!--
<?php ##################################################################### ?>
<?php //Dropdown de Notificações?>
<?php ##################################################################### ?>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
<?php ##################################################################### ?>
-->


<?php ##################################################################### ?>
<?php //Botão de FullScreen ?>
<?php ##################################################################### ?>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
<?php ##################################################################### ?>


<?php ##################################################################### ?>
<?php //Botão Logar ?>
<?php ##################################################################### ?>
<li class="nav-item">
  <a class="btn nav-link" data-toggle="modal" data-target="#modal_logar"> 
    <i class="fas fa-sign-in-alt" style="font-size: 22px; color: rgb(78,115,223);"></i>
  </a> 
</li>
<?php ##################################################################### ?>






    </ul>

  </nav>


<?php }else{ ?>

<div style="margin-top: -60px;"></div>

<?php }; // fim do controle de exibição menu top?>




<?php # Fim do menu top ?>