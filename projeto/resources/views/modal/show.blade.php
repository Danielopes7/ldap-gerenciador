<form action="" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalShow" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="card-body">

                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" value="Daniel Lopes Amorim" readonly>

                        <label class="form-label">Telefone</label>
                        <input type="text" class="form-control" value="898131056" readonly>

                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" value="daniel.lopes.amorim@hotmail.com" readonly>
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{ __('Back') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>