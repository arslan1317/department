@extends('layouts.user-app')

@section('content')
<div class="content-body">
		<section id="basic-form-layouts">
			<div class="row match-height">
				<div class="col-md-8">
					<div class="card" data-height="">
						<div class="card-header">
							<h4 class="card-title" id="basic-layout-form">Add {{$title}}</h4>
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
								<form class="form" method="post" action="{{route('news.store')}}" enctype="multipart/form-data">
									@csrf
									<input type="hidden" value="{{$access_categories->subdepart->id}}" name="sub_dep_id">
									<div class="form-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="projectinput1">News Image</label>
													<label class="file center-block">
														<input type="file" name="image">
														<span class="file-custom"></span>
													</label>

												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Headline</label>
													<input type="text" class="form-control" name="headline">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label>News Body</label>
													<textarea name="body" id="summernote-code" class="summernote-code"></textarea>
												</div>
											</div>
										</div>

									</div>

									<div class="form-actions text-right">
										<button type="submit" class="btn btn-primary">
											<i class="la la-check-square-o"></i> Save {{$title}}
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" data-height="">
						<div class="card-header">
							<h4 class="card-title" id="basic-layout-form">Information</h4>
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
								@if ($errors->any())
								<div class="alert alert-danger alert-dismissible mb-2" role="alert">
								    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								        <span aria-hidden="true">×</span>
								    </button>
								    <h4 class="alert-heading mb-2">Error!</h4>
								    @foreach ($errors->all() as $error)
							              <p>{{ $error }}<p>
							        @endforeach
								</div>
							    @endif
							    @if(session()->get('success'))
							    <div class="alert alert-success border-0 alert-dismissible mb-2" role="alert">
								    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								        <span aria-hidden="true">×</span>
								    </button>
								    <h4 class="alert-heading mb-2">Success</h4>
								    <p>{{ session()->get('success') }}  </p>
								</div>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="row-grouping">
		    <div class="row">
		        <div class="col-12">
		            <div class="card">
		                <div class="card-header">
		                    <h4 class="card-title">All {{$title}}</h4>
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
		                <div class="card-content collapse show">
		                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">
		                        <div class="table-responsive">
		                            <table class="table table-striped table-bordered  dataex-html5-export dom-jQuery-events">
		                                <thead>
		                                    <tr>
		                                        <th>Image</th>
		                                        <th>Headline</th>
		                                        <th>Body</th>
		                                        <th>Status</th>
		                                        <th>Action</th>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                	@foreach($news as $allnews)
		                                		<tr>
		                            				<td>
		                            					<img src="{{asset('images')}}/{{$allnews->image}}" alt="" width="200">
		                            				</td>
		                            				<td>{{$allnews->headline}}</td>
		                            				<td>{!!$allnews->body!!}</td>
		                            				<td>
		                            					@if($allnews->status == 0)
		                            						<div class="alert alert-danger mb-0 text-center" role="alert">
		                            							Not Approved
															</div>
		                            					@else
		                            						<div class="alert alert-success mb-0 text-center" role="alert">
																Approved
															</div>
		                            					@endif
		                            				</td>
		                            				<td>
		                            					<div class="table-action-button">
		                            						<a href="javascript:;" class="btn-edit"  data-department_id="{{$allnews->id}}" data-name="{{$allnews->name}}" data-website="{{$allnews->website}}" data-address="{{$allnews->address}}" data-telephone="{{$allnews->telephone}}" data-fax="{{$allnews->fax}}" data-action="{{ route('subdepartment.update', $allnews->id) }}" onclick="subdepartment(this, '#inlineForm')">
		                            							<i class="la la-edit"></i>
		                            						</a>

		                            						<a href="javascript:;" class="btn-delete" data-id="{{$allnews->id}}" data-action="{{ route('subdepartment.destroy', $allnews->id)}}">
		                            							<i class="la la-trash"></i>
		                            						</a>
		                            					</div>
		                            				</td>
		                            			</tr>
		                            		@endforeach
		                                </tbody>
		                                <tfoot>
		                                    <tr>
		                                        <th>Image</th>
		                                        <th>Headline</th>
		                                        <th>Body</th>
		                                        <th>Status</th>
		                                        <th>Action</th>
		                                    </tr>
		                                </tfoot>
		                            </table>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>

	</div>

@endsection
