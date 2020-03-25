@extends('layouts.admin-app')

@section('content')
<div class="content-body">
	<section id="basic-form-layouts">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title" id="basic-layout-form">Basic Info</h4>
						<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
						<div class="heading-elements">
							<ul class="list-inline mb-0">
								<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
								<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
								<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
								<li><a data-action="close"><i class="ft-x"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="card-content collapse show" style="">
						<div class="card-body">
							<form action="">
								<div class="form-body">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Logo</label><br>
												<input type="file" name="logo">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Footer Logo</label><br>
												<input type="file" name="footerlogo">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Favicon</label><br>
												<input type="file" name="favicon">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Phone</label>
												<input type="text" class="form-control" name="phone">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Email</label>
												<input type="email" class="form-control" name="email">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Address</label>
												<input type="text" class="form-control" name="address">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Footer Text</label>
												<textarea name="footertext" class="form-control"></textarea>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Copyright</label>
												<input type="text" class="form-control" name="copyright">
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

@endsection
