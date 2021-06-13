<?php include("../seguranca.php"); ?>
<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Adicionar Contato</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="adicionar.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nome:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nome" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Departamento:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="departamento" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Ramal Fixo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="ramalfixo">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Localidade:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="localidade">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Grupo de Ramal:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="gruporamal">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</a>
			</form>
            </div>

        </div>
    </div>
</div>