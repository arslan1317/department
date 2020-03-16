@extends('layouts.admin-app')

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
								<form class="form" method="post" action="{{ route('subdepartment.store') }}">
									@csrf
									<div class="form-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="projectinput1">Department Name</label>
													<select class="select2 form-control" name="department_id">
														@foreach($department as $departments)
															<option value="{{$departments->id}}">{{$departments->name}}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Subdepartment Name</label>
													<input type="text" class="form-control" name="name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Website</label>
													<input type="text" class="form-control" name="website">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Address</label>
													<input type="text" class="form-control" name="address">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Telephone</label>
													<input type="text" class="form-control" name="telephone">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Fax</label>
													<input type="text" class="form-control" name="fax">
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
		                            <table class="table table-striped table-bordered row-grouping dataex-html5-export">
		                                <thead>
		                                    <tr>
		                                        <th>Name</th>
		                                        <td>Website</td>
		                                        <th>Office</th>
		                                        <th>Address</th>
		                                        <th>Telephone</th>
		                                        <th>Fax</th>
		                                        <th>Created At</th>
		                                        <th>Action</th>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                	@foreach($department as $departments)
		                                		@foreach($departments->subdepartment as $subdepartments)
		                                		<tr>
		                            				<td>{{$subdepartments->name}}</td>
		                            				<td>{{$subdepartments->website}}</td>
		                            				<td>{{$departments->name}}</td>
		                            				<td>{{$subdepartments->address}}</td>
		                            				<td>{{$subdepartments->telephone}}</td>
		                            				<td>{{$subdepartments->fax}}</td>
		                            				<td>{{$subdepartments->created_at}}</td>
		                            				<td>
		                            					<div class="table-action-button">
		                            						<a href="" class="btn-edit">
		                            							<i class="la la-edit"></i>
		                            						</a>

		                            						<a href="" class="btn-delete">
		                            							<i class="la la-trash"></i>
		                            						</a>
		                            					</div>
		                            				</td>
		                            			</tr>
		                                		@endforeach
		                            		@endforeach
		                                </tbody>
		                                <tfoot>
		                                    <tr>
		                                        <th>Name</th>
		                                        <th>Website</th>
		                                        <th>Office</th>
		                                        <th>Address</th>
		                                        <th>Telephone</th>
		                                        <th>Fax</th>
		                                        <th>Created At</th>
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
