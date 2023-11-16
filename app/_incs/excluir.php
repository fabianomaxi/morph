<div class="modal" id="excluir" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <form action="deleletData.php" method="post" name="frmDeletar" id="frmDeletar">  
      <input type="hidden" name="idDelete" id="idDelete" value="">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Excluir Registro</h5>
          <!--<button  onclick="javascript:$('#excluir').modal('hide')" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>-->
        </div>
        <div class="modal-body">
          <p>Deseja mesmo excluir este registro?</p>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success-green">Sim</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:$('#excluir').modal('hide')">Não</button>
        </div>
      </div>
    </form>
  </div>
</div>