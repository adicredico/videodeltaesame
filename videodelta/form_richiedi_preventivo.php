<?php /*form richiedi preventivo*/ ?>

												<form action="" method="">
													<div class="form-group">
														<label for="name">Nome</label>
														<input type="text" class="form-control" name="name" id="name" placeholder="Inserisci nome">
													</div>
													<div class="form-group">
														<label for="surname">Cognome</label>
														<input type="text" class="form-control" name="surname" id="surname" placeholder="Inserisci cognome">
													</div>
													<div class="form-group">
														<div class="radio">
															<label><input type="radio" name="optradio">Privato</label>
														</div>
														<div class="radio">
															<label><input type="radio" name="optradio">Azienda</label>
														</div>
													</div>
													<div class="form-group">
  														<label for="comment">Ragione sociale dell'azienda:</label>
 														<textarea class="form-control" rows="1" id="comment"></textarea>
													</div>
													<div class="form-group">
  														<label for="comment">Lingua originale del prodotto da doppiare:</label>
 														<textarea class="form-control" rows="1" id="comment"></textarea>
													</div>
													<div class="form-group">
														<label for="email">Email</label>
														<input type="email" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Inserisci email">
													</div>
													<div class="form-group">
														<label for="tel">Numero di telefono:</label>
														<input type="tel" class="form-control" name="tel" id="tel" value="" placeholder="Inserisci numero di telefono">
													</div>
													<button type="submit" class="btn btn-default">Invia</button>
												</form>
