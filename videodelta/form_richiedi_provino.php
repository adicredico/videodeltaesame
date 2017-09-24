<?php /*form richiedi provino*/ ?>

												<form action="richiedi_provino.php" method="post">
													<div class="form-group">
														<label for="name">Nome</label>
														<input type="text" class="form-control" name="name" id="name" placeholder="Inserisci nome">
													</div>
													<div class="form-group">
														<label for="surname">Cognome</label>
														<input type="text" class="form-control" name="surname" id="surname" placeholder="Inserisci cognome">
													</div>
													<div class="form-group">
														<label for="">Email</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="Inserisci email">
													</div>
													<div class="form-group">
    													<label for="exampleFormControlFile1">Allega il tuo CV in formato PDF</label>
    													<input type="file" class="form-control-file" id="exampleFormControlFile1">
  													</div>
													<button type="submit" class="btn btn-default">Invia</button>
												</form>