<div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Байгууллагын категори</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="form-body">
									<div class="form-group">
										<label>Категори</label>
										<div class="input-group">
											<span class="input-group-addon input-circle-left">
											<i class="fa fa-envelope"></i>
											</span>
									<input type="text" id="categoryInput" class="form-control input-circle-right" placeholder=" Категори">
										</div>
									</div>
									<div class="form-group" id="correspondentList">
										<label class=>Харъяалагдах категори</label>
										<div>
											<select class="form-control select2me" id="correspondentCategory" data-placeholder="Сонгох...">
												
											</select>
											
										</div>
									</div>
									<div class="form-group">
										<div class="checkbox-list">
											<label>
											<input type="checkbox" id="is_show_list"> Хэрэглэгчийн хэсэгт харагдах эсэх </label>
										</div>
									</div>
					</div>
					<div class="modal-footer form-actions">
						<button type="button" class="btn default" data-dismiss="modal">Хаах</button>
						<button type="button" class="btn blue" onclick="addCategory()">Хадгалах</button>
					</div>
				</form>
			</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
							<!-- /.modal -->
