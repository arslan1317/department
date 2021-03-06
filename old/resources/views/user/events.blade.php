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
								<form class="form" method="post" action="{{route('events.store')}}" enctype="multipart/form-data">
									@csrf
									<input type="hidden" value="{{$subdepartment->id}}" name="sub_dep_id">
									<div class="form-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Event Name</label>
													<input type="text" class="form-control" name="name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Start & End Date</label>
													<div class='input-group'>
														<input type='text' class="form-control datetime" name="datetime" />
														<div class="input-group-append">
															<span class="input-group-text">
																<span class="la la-calendar"></span>
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label>Event Detail</label>
													<textarea name="details" id="summernote-code" class="summernote-code"></textarea>
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
		                                        <th>Event Name</th>
		                                        <th>Start & End date</th>
		                                        <th>Details</th>
		                                        <th>Action</th>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                	@foreach($events as $allevents)
		                                		<tr>
		                            				<td>
                                                    {{$allevents->name}}
		                            				</td>
		                            				<td>
		                            					@php
		                            						$start_time = strtotime($allevents->start_date);
															$start_date = date('m/d/Y h:i:s A',$start_time);

															$end_time = strtotime($allevents->end_date);
															$end_date = date('m/d/Y h:i:s A',$end_time);
															
		                            					@endphp
		                            					 {{$start_date}} to {{$end_date}}</td>
													<td>
													@php
														$content = strip_tags($allevents->details);
													@endphp
													{!! \Illuminate\Support\Str::limit($content, $limit = 120, $end = '...') !!}
													</td>
		                            				<td>
		                            					<div class="table-action-button">
		                            						<a href="javascript:;" class="btn-edit" data-name="{{$allevents->name}}" data-startdate="{{$start_date}}" data-enddate="{{$end_date }}" data-detail="{{$allevents->details}}"  data-action="{{ route('events.update', $allevents->id) }}" onclick="events(this, '#inlineForm')">
		                            							<i class="la la-edit"></i>
		                            						</a>

		                            						<a href="javascript:;" class="btn-delete" data-id="{{$allevents->id}}" data-action="{{ route('events.destroy', $allevents->id)}}">
		                            							<i class="la la-trash"></i>
		                            						</a>
		                            					</div>
		                            				</td>
		                            			</tr>
		                            		@endforeach
		                                </tbody>
		                                <tfoot>
		                                    <tr>
		                                        <th>Event Name</th>
		                                        <th>Start & End date</th>
		                                        <th>Details</th>
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

	<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">Edit Event</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#" method="post" enctype="multipart/form-data">
                	@csrf
                    <div class="modal-body">
                        <label>Event Name</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name">
                        </div>

                        <label>Event Start & End Date</label>
                        <div class='input-group'>
                            <input type='text' class="form-control editdatetime" name="datetime" />
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <span class="la la-calendar"></span>
                                </span>
                            </div>
						</div>
                        <label>Event Details</label>
                        <div class="form-group">
                            <textarea name="details" id="summernote-code-edit" class="summernote-code"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-outline-primary" value="Update News">
                    </div>
                </form>
            </div>
        </div>
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
