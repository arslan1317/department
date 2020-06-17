@extends('layouts.admin-app')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
							<form method="post" action="{{route('basic.setting', $basic_info->id)}}" enctype="multipart/form-data">
                            @csrf
								<div class="form-body">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Logo</label><br>
												@if($basic_info->logo != null)
													<img src="{{asset('images')}}/{{$basic_info->logo}}" alt="" class="mb-2 mt-1">
												@endif
												<input type="file" name="logo">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Footer Logo</label><br>
												@if($basic_info->footer_logo != null)
													<img src="{{asset('images')}}/{{$basic_info->footer_logo}}" alt="" class="mb-2 mt-1">
												@endif
												<input type="file" name="footerlogo">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Favicon</label><br>
												@if($basic_info->favicon != null)
													<img src="{{asset('images')}}/{{$basic_info->favicon}}" alt="" class="mb-2 mt-1"><br>
												@endif
												<input type="file" name="favicon">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Phone</label>
												<input type="text" class="form-control" name="phone" value="{{$basic_info->phone}}">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Email</label>
												<input type="email" class="form-control" name="email" value="{{$basic_info->email}}">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Address</label>
												<input type="text" class="form-control" name="address" value="{{$basic_info->address}}">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Footer Text</label>
												<textarea name="footertext" class="form-control">{{$basic_info->footer_text}}</textarea>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Copyright</label>
												<input type="text" class="form-control" name="copyright" value="{{$basic_info->copyright}}">
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions text-right">
									<button type="submit" class="btn btn-primary">
										<i class="la la-check-square-o"></i> Save Basic Setting
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="basic-form-layouts">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title" id="basic-layout-form">Social Info</h4>
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
							<form action="{{route('basic.social')}}" method="post">
								@csrf
								<div class="form-body">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Link</label>
												<input type="text" class="form-control" name="link">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Icon <a href="https://fontawesome.com/v4.7.0/icons/" target="blank">(https://fontawesome.com/v4.7.0/icons/)</a></label>
												<input type="text" class="form-control" name="icon">
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions text-right">
									<button type="submit" class="btn btn-primary">
										<i class="la la-check-square-o"></i> Save Social Link
									</button>
								</div>
							</form>
						</div>
					</div>

					<div class="card-content">
						<div class="card-body pt-0">
							<div class="row">
								@foreach($social_icons as $social_icon)
								<div class="col-md-4">
									<form method="post" action="{{route('basic.social.update', $social_icon->id)}}">
										@csrf
										<div class="edit-box">
											<div class="icon">
												{!!$social_icon->icon!!}
											</div>
											<div class="form-group">
												<label>Link</label>
												<input type="text" class="form-control" name="link" value="{{$social_icon->link}}">
											</div>
											<div class="form-group">
												<label>Icon</label>
												<input type="text" class="form-control" name="icon" value="{{$social_icon->icon}}">
											</div>
											<div class="row">
												<div class="col-6">
													<button type="submit" class="btn btn-primary btn-block text-center m-auto d-block">
														Update
													</button>
												</div>
												<div class="col-6">
													<button type="button" class="btn btn-danger btn-block text-center m-auto d-block btn-basic-delete" data-route="{{route('basic.delete', $social_icon->id)}}">
														Delete
													</button>
												</div>
											</div>
										</div>
									</form>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section id="basic-form-layouts">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title" id="basic-layout-form">Slider Lower Info</h4>
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
							<form action="{{route('basic.sliderlower', $slider_lower->id)}}" method="post">
								@csrf
								<div class="form-body">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Slider Lower Heading</label>
												<input type="text" class="form-control" name="slider_lower_heading" value="{{$slider_lower->slider_lower_heading}}">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Slider Lower Paragraph</label>
												<input type="text" class="form-control" name="slider_lower_paragraph" value="{{$slider_lower->slider_lower_paragraph}}">
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions text-right">
									<button type="submit" class="btn btn-primary">
										<i class="la la-check-square-o"></i> Update Slider Lower Info
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section id="basic-form-layouts">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title" id="basic-layout-form">Info Box</h4>
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
							<form action="{{route('basic.infobox')}}" method="post" enctype="multipart/form-data">
								@csrf
								<div class="form-body">
									<div class="row">
									<div class="col-md-4">
											<div class="form-group">
												<label>Info Image</label>
												<input type="file" class="form-control" name="image">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Heading</label>
												<input type="text" class="form-control" name="info_heading">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Info Paragraph </label>
												<textarea type="text" class="form-control" name="info_paragraph"></textarea>
											</div>
										</div>
									</div>
								</div>

								@if(count($info_box) < 3)
								<div class="form-actions text-right">
									<button type="submit" class="btn btn-primary">
										<i class="la la-check-square-o"></i> Save Info Box
									</button>
								</div>
								@endif
							</form>
						</div>
					</div>

					<div class="card-content">
						<div class="card-body pt-0">
							<div class="row">
								@foreach($info_box as $info_boxs)
								<div class="col-md-4">
									<form method="post" action="{{route('basic.infobox.update', $info_boxs->id)}}">
										@csrf
										<div class="edit-box">
											<div class="icon mb-1">
											<img src="{{asset('images')}}/{{$info_boxs->info_image}}" width="80" height="80">
											</div>
											<div class="form-group">
												<label>Info Image</label>
												<input type="file" class="form-control" name="image">
											</div>
											<div class="form-group">
												<label>Heading</label>
												<input type="text" class="form-control" name="info_heading" value="{{$info_boxs->info_heading}}">
											</div>
											<div class="form-group">
												<label>Info Paragraph</label>
												<textarea type="text" class="form-control" name="info_paragraph">{{$info_boxs->info_paragraph}}</textarea>
											</div>
											<div class="row">
												<div class="col-6">
													<button type="submit" class="btn btn-primary btn-block text-center m-auto d-block">
														Update
													</button>
												</div>
												<div class="col-6">
													<button type="button" class="btn btn-danger btn-block text-center m-auto d-block btn-basic-delete" data-route="{{route('basic.delete', $info_boxs->id)}}">
														Delete
													</button>
												</div>
											</div>
										</div>
									</form>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section id="basic-form-layouts">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title" id="basic-layout-form">Home About Us</h4>
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
							<form action="{{route('basic.aboutus', $about->id)}}" method="post">
								@csrf
								<div class="form-body">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>About Us Paragraph</label>
												<textarea rows="10" class="form-control" name="about_us">{{$about->about_us}}</textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions text-right">
									<button type="submit" class="btn btn-primary">
										<i class="la la-check-square-o"></i> Update About Us Paragraph
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>


</div>


<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel1">News Delete</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="#" method="post">
				@csrf
				<div class="modal-body">
					<h5>Are you sure?</h5>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-outline-primary">Confirm Delete</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection
