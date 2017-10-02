<?php /*form proponi collaborazione*/ ?>

												<form action="proponi_collaborazione.php" method="post">
													<div class="form-group">
														<label for="name">Nome</label>
														<input type="text" class="form-control" name="name" id="name" placeholder="Inserisci nome" required>
													</div>
													<div class="form-group">
														<label for="surname">Cognome</label>
														<input type="text" class="form-control" name="surname" id="surname" placeholder="Inserisci cognome" required>
													</div>
													<div class="form-group">
														<label for="">Email</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="Inserisci email" required>
													</div>
													<div class="form-group">
														<label for="tel">Numero di telefono:</label>
														<input type="tel" class="form-control" name="tel" id="tel" placeholder="Inserisci numero di telefono" required>
													</div>
													<div class="form-group">
  														<label for="comment">Vorrei collaborare con VIDEODELTA in qualità di:</label>
 														<textarea class="form-control" rows="5" id="comment" required></textarea>
													</div>
													<button type="submit" class="btn btn-default">Invia</button>
												</form>
