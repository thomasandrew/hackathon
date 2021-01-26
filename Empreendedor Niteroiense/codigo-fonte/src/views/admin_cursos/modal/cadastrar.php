<!-- ############################################################################################################################################### -->
<!-- ############################################# INICIO MODAL NOVO DIA EVENTO #################### -->
<!-- ############################################################################################################################################### -->
<div class="col-12">
       

<!-- Modal -->
<div class="modal fade" id="modal-novo-dia-evento" tabindex="-1" role="dialog" aria-labelledby="modal-novo-dia-eventoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
            <h5 class="modal-title" id="modal-novo-dia-eventoLabel"><?php echo $dados_evento['nome'] ?> - Criar Novo Dia </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body">





<!-- ============================================================================================================================ -->
<form action="php_action/dia_evento.php" method="post" class="form-horizontal form-material">
<!-- ============================================================================================================================ -->
    <input type="hidden" name="id_evento"  value= "<?php echo $dados_evento['idEvento']; ?>" />
    <input type="hidden" name="data_inicio"  value= "<?php echo $dados_evento['dataInicio']; ?>" />
    <input type="hidden" name="data_termino"  value= "<?php echo $dados_evento['dataTermino']; ?>" />

                    

                  <div class="form-row">
                        
                        <div class="form-group col-md-12">

                            <label class="col-md-12">Dia*</label>

                            <div class="col-md-12">
                                <input type="date"  class="form-control form-control-line" name="dia" require>
                            </div>
                        </div>

                    </div>
                    
                    
                    
                    <div class="form-row">
                        
                        <div class="form-group col-md-6">

                            <label  class="col-md-12">Horario Inicio*</label>

                            <div class="col-md-12">
                                <input value="" type="time" name="horario_inicio" class="form-control form-control-line" require>
                            </div>
                        </div>

                        <div class="form-group col-md-6">

                            <label  class="col-md-12">Horario Termino*</label>

                            <div class="col-md-12">
                                <input value="" type="time" name="horario_termino" class="form-control form-control-line" require>
                            </div>
                        </div>
                    

                    </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" name="btn_criar_dia_evento" class="btn btn-primary">Criar</button>
      </div>

<!-- ============================================================================================================================ -->
</form>
<!-- ============================================================================================================================ -->

    </div>
  </div>
</div>

</div>
<!-- ############################################################################################################################################### -->
<!-- ############################################# FIM MODAL NOVO DIA EVENTO #################### -->
<!-- ############################################################################################################################################### -->
