<!-- Modal -->
<div class="modal fade" id="modal_logar" tabindex="-1" aria-labelledby="modal_logar" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="margin: 0 auto;" >
            
      
            <div class=" align-self-center ">
                 <img class="img-fluid" src="../../assets/img/logo/logo1.png" alt="Logo" style=" max-width: 200px;" >
            </div>
            
      </div>
      <div class="modal-body">
       
       


      <?php ####################### INPUT LOGIN ?>
            <div class="form-group" >
                <input class="form-control form-control-user" type="text" name="login" placeholder="Nick ou Email" maxlength="60" required="" value="">
            </div>
        <?php ##################################################################### ?>

        <?php ####################### INPUT SENHA ?>
            <div class="form-group">
                <input class="form-control form-control-user" type="password"  name="senha" required="" maxlength="40" placeholder="Senha"value="">
            </div>        
        <?php ##################################################################### ?>
    

        <?php ####################### BOTAO LEMBRAR SENHA ?>
            <div class="form-group">
                <div class="custom-control custom-checkbox mr-sm-1">
                    <input type="checkbox" class="custom-control-input" id="lembrar_senha" name="lembrar_senha">
                    <label class="custom-control-label" for="lembrar_senha">lembrar-me</label>
                </div>
            </div> 
        <?php ##################################################################### ?>

        <?php ####################### RECAPTCHA GOOGLE ?>
            <div class="d-flex justify-content-center"><div class="g-recaptcha" data-sitekey="6Lf2psgZAAAAALP508iTY-q2lo8CnIgS10VjptmK"></div></div>
        <?php ##################################################################### ?>

        <br>
        
        <?php ####################### BOTAO LOGIN ?>

            <div class="text-center" style="margin-left: 10px; margin-right: 10px;">
                <button class="btn btn-primary btn-block text-white btn-user" name="botao_logar" value="botao_logar" type="submit">Login</button>
            </div>
        <?php ##################################################################### ?>




      </div>
    </div>
  </div>
</div>