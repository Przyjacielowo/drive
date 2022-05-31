@extends ('layouts.app')

@section ('content')
	<div class="margin-content-wraper content-wrapper no-color-content">
		<div class="col-md-8 mx-auto">
				<div class="card card-primary">
						<div class="card-header">
								<h3 class="card-title">Dodaj użytkownika</h3>
						</div>

						<form action="" method="post" enctype="multipart/form-data">
								@csrf
								<div class="card-body">
										<div class="form-group">
												<label for="user_name">Imię i nazwisko</label>
												<input type="text" class="form-control" id="user_name" name="user_name">
										</div>
										<div class="form-group">
											<label for="user_password1">Hasło</label>
											<input type="password" class="form-control" id="user_password1" name="user_password1">
										</div>
										<div class="form-group">
											<label for="user_password2">Powtórz hasło</label>
											<input type="password" class="form-control" id="user_password2" name="user_password2">
										</div>
								</div>

								<div class="card-footer">
										<button type="submit" class="btn btn-primary">Dodaj</button>
								</div>
						</form>

				</div>
		</div>
	</div>
@endsection