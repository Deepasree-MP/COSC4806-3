	<?php require_once 'app/views/templates/headerPublic.php' ?>
	<main role="main" class="container">
			<div class="page-header" id="banner">
					<div class="row">
							<div class="col-lg-12">
									<h1>You are not logged in</h1>
							</div>
					</div>
			</div>

			<div class="row">
					<div class="col-sm-auto">
						<?php if (isset($_SESSION['error_message'])): ?>
								<div class="alert alert-danger">
										<?= htmlspecialchars($_SESSION['error_message']) ?>
								</div>
								<?php unset($_SESSION['error_message']); ?>
						<?php endif; ?>
							<form action="/login/verify" method="post">
									<fieldset>
											<div class="form-group">
													<label for="username">Username</label>
													<input required type="text" class="form-control" name="username">
											</div>
											<div class="form-group">
													<label for="password">Password</label>
													<input required type="password" class="form-control" name="password">
											</div>
											<br>
											<button type="submit" class="btn btn-primary">Login</button>
											<br><br>
										<a href="/create" class="btn btn-secondary">Create Account</a>
									</fieldset>
							</form> 
					</div>
			</div>
	</main>
	<?php require_once 'app/views/templates/footer.php' ?>
