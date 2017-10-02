<?php /*form richiedi preventivo*/ ?>

												<form action="richiedi_preventivo.php" method="post">
													<div class="form-group">
														<label for="name">Nome</label>
														<input type="text" class="form-control" name="name" id="name" placeholder="Inserisci nome" required>
													</div>
													<div class="form-group">
														<label for="surname">Cognome</label>
														<input type="text" class="form-control" name="surname" id="surname" placeholder="Inserisci cognome" required>
													</div>
													<div class="form-group">
														<div class="radio">
															<label><input type="radio" name="optradio" value="Privato">Privato</label>
														</div>
														<div class="radio">
															<label><input type="radio" name="optradio" value="Azienda">Azienda</label>
														</div>
													</div>
													<div class="form-group">
  														<label for="tipo_societa">Ragione sociale dell'azienda:</label>
 														<input type="text" class="form-control" name="tipo_societa" id="tipo_societa" placeholder="Inserisci la ragione sociale dell'azienda"></input>
													</div>
													<div class="form-group">
  														<label for="lingua_originale">Lingua originale del prodotto da doppiare:</label>
 														<input type="text" class="form-control" name="lingua_originale" id="lingua_originale" placeholder="Inserisci la lingua originale del prodotto da doppiare" required></input>
													</div>
													<div class="form-group">
														<label for="email">Email</label>
														<input type="email" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Inserisci email" required>
													</div>
													<div class="form-group">
														<label for="tel">Numero di telefono:</label>
														<input type="tel" class="form-control" name="tel" id="tel" placeholder="Inserisci numero di telefono" required>
													</div>
													<button type="submit" class="btn btn-default">Invia</button>
												</form>
