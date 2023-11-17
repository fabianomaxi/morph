<div class="modal fade" id="modal-filters" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Filtrar Projeto</h5>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group" style="padding-top: 10px;">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Status do Projeto
                </button>
                <ul class="dropdown-menu border-0 shadow p-3">
                    <li><a class="dropdown-item py-2 rounded" href="#">action</a></li>
                    <li><a class="dropdown-item py-2 rounded" href="#">Another action</a></li>
                    <li><a class="dropdown-item py-2 rounded" href="#">Something else here</a></li>
                </ul>

                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Tipo do Projeto
                </button>
                <ul class="dropdown-menu border-0 shadow p-3">
                    <li><a class="dropdown-item py-2 rounded" href="#">Action</a></li>
                    <li><a class="dropdown-item py-2 rounded" href="#">Another action</a></li>
                    <li><a class="dropdown-item py-2 rounded" href="#">Something else here</a></li>
                </ul>
            </div>
          </div>

          <div class="form-group" style="padding-top: 10px;">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Cliente
                </button>
                <ul class="dropdown-menu border-0 shadow p-3">
                    <li><a class="dropdown-item py-2 rounded" href="#">Action</a></li>
                    <li><a class="dropdown-item py-2 rounded" href="#">Another action</a></li>
                    <li><a class="dropdown-item py-2 rounded" href="#">Something else here</a></li>
                </ul>
                <input style="width: 32%;" placeholder="Iniciado Em:" type="date" class="form-control" id="admitdate" required="">
            </div>
          </div>



        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="javascript:$('#modal-filters').modal('hide')" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Filtrar Projeto</button>
      </div>
    </div>
  </div>
</div>