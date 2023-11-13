<div class="modal fade" id="riscos" tabindex="-1" aria-labelledby="exampleModalXlLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
      <div class="modalNew message-header" style="padding: 10px 10px;">
        <h5 class="modal-title" id="exampleModalLabel">Gestão de Riscos</h5>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group" style="padding: 5px 0;">
            <label for="recipient-name" class="col-form-label">Descrição do risco:</label>
            <textarea class="form-control"></textarea>
          </div>
          <div class="form-group" style="padding: 5px 0;">
            <label for="recipient-name" class="col-form-label">Plano de Ação:</label>
            <textarea class="form-control"></textarea>
          </div>
          <div class="form-group" style="padding: 5px 0;">
            <label for="recipient-name" class="col-form-label">Data de Início:</label>
            <input type="date" class="form-control" id="recipient-name">
          </div>
          <div class="form-group" style="padding: 5px 0;">
            <label for="recipient-name" class="col-form-label">Tipo de risco:</label>
            <select class="form-control">
                <option value="">Risco Financeiro</option>
                <option value="">Risco Técnico</option>
                <option value="">Risco Escopo</option>
                <option value="">Risco Recursos Humanos</option>
                <option value="">Risco Legal e Regulatorio</option>
                <option value="">Risco Gerenciado</option>

            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-success">Salvar</button>
        <button type="button" class="btn btn-danger" onclick="javascript:$('#riscos').modal('hide')">Fechar</button>
      </div>
    </div>
  </div>
</div>