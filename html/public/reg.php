<!-- Modal -->
				          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalReg" class="modal fade">
				              <div class="modal-dialog">
				                  <div class="modal-content">
				                      <div class="modal-header">
				                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-times close-modal"></span></button>
				                         <h4 class="modal-title">Registrar</h4>
				                      </div>
				                      <div class="modal-body">
				                      	<div role="form" onkeypress="runReg(event)">
				                        <form " class="form-horizontal">
				                        	<div class="form-group">
						                        <label for="name" class="col-sm-2 control-label"><strong>Nombre: </strong> </label>
						                        <div class="col-sm-4">
						                      		<input type="text" id="name" name="nombre" placeholder="Nombre" autocomplete="off" class="form-control placeholder-no-fix input-form input-form ">
						                    	</div>
						                    	 <label for="surname" class="col-sm-2 control-label">Apellido: </label>
						                        <div class="col-sm-4">
						                      		<input type="text" id="surname" name="apelido" placeholder="Apellido" autocomplete="off" class="form-control placeholder-no-fix input-form input-form">
						                    	</div>
				                    		</div>
				                    		<div class="form-group">
						                        <label for="email" class="col-sm-2 control-label">Email: </label>
						                        <div class="col-sm-4">
						                      		<input type="text" id="email" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix input-form input-form">
						                    	</div>
						                    	 <label for="remail" class="col-sm-2 control-label">Repita Email: </label>
						                        <div class="col-sm-4">
						                      		<input type="text" id="remail" name="remail" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix input-form input-form">
						                    	</div>
				                    		</div>
				                    		<div class="form-group">
						                        <label for="email" class="col-sm-2 control-label">Clave: </label>
						                        <div class="col-sm-4">
						                      		<input type="password" id="pass" name="email"  autocomplete="off" class="form-control placeholder-no-fix input-form input-form">
						                    	</div>
						                    	 <label for="remail" class="col-sm-2 control-label">Repita Clave: </label>
						                        <div class="col-sm-4">
						                      		<input type="password" id="repass" name="remail" autocomplete="off" class="form-control placeholder-no-fix input-form input-form">
						                    	</div>
				                    		</div>				
					                        </div>
						                      <div class="modal-footer">
						                          <button data-dismiss="modal" id="close" class="btn btn-sophia2" type="button"><span>Salir</span></button>
						                          <button class="btn btn-sophia" id="send" type="button" onclick="goReg();"><span>Registrar</span></button>
						                      </div>
					                	    </fieldset>
				                  		</form>
				                  	</div>
				                  </div>
				              </div>
				          </div>
				      </div>

				      
				          <!-- modal-->
				          <script type="text/javascript" src="views/app/js/reg.js"></script>
				          <script type="text/javascript">
				          	
				           </script>
