<?php /*aside*/ ?>

				<div class="panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#richiedipreventivo">Richiedi un preventivo</button>

								<!-- Modal -->
								<div class="modal fade" id="richiedipreventivo" role="dialog">
									<div class="modal-dialog">
    
										<!-- Modal content-->
										<div class="modal-content">
	    									<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Richiedi un preventivo</h4>
											</div>
											<div class="modal-body">
												
												<?php include_once ("form_richiedi_preventivo.php"); ?>
												
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
											</div>
										</div>
      
									</div>
								</div>
						</div>
					</div>
						
					<div class="panel panel-default">
						<div class="panel-heading">
							<button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="collapse" data-target="#lavoraconnoi">Lavora con noi</button>
						</div>
						<div id="lavoraconnoi" class="panel-collapse collapse">
							<div class="panel-body">
							
								<!-- Trigger the modal with a button -->
								<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#proponicollaborazione">Proponi una collaborazione</button>
							
								<!-- Modal -->
								<div class="modal fade" id="proponicollaborazione" role="dialog">
									<div class="modal-dialog">
    
										<!-- Modal content-->
										<div class="modal-content">
	    									<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Proponi una collaborazione</h4>
											</div>
											<div class="modal-body">
											
												<?php include_once ("form_proponi_collaborazione.php"); ?>
											
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
											</div>
										</div>
      
									</div>
								</div>
							</div>
							<div class="panel-body">
							
								<!-- Trigger the modal with a button -->
								<button type="button" class="btn btn-default btn-lg btn-block btn-warning" data-toggle="modal" data-target="#richiediprovino">Richiedi un provino gratuito</button>
							
								<!-- Modal -->
								<div class="modal fade" id="richiediprovino" role="dialog">
									<div class="modal-dialog">
    
								<!-- Modal content-->
										<div class="modal-content">
	    									<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Richiedi un provino</h4>
											</div>
											<div class="modal-body">
											
												<?php include_once ("form_richiedi_provino.php"); ?>
											
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
											</div>
										</div>
      
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">Collaborazioni con:</div>
					<div class="panel-body">
						<a href="http://www.scuolateatrosergiotofano.it/cms/index.php?option=com_content&view=article&id=25&Itemid=30">
							<img src="images/loghi/tofano.jpg"  alt="logoScuolaTeatroSergioTofano" class="img-responsive img-thumbnail">
						</a>
						<a href="https://popcorntv.it/">
							<img src="images/loghi/popcorn.jpg" alt="logoPopcorn" class="img-responsive img-thumbnail">
						</a>
						<a href="http://www.pattyeditore.it/">
							<img src="images/loghi/patty.jpg" alt="logoPattyEditore" class="img-responsive img-thumbnail">
						</a>
						<a href="http://www.delta9.it/">
							<img src="images/loghi/deltanove.jpg" alt="logoDeltaNove" class="img-responsive img-thumbnail">
						</a>
					</div>
				</div>
