@extends('layouts.admin-app')

@section('content')
<div class="content-body">
		<section id="basic-form-layouts">
			<div class="row match-height">
				<div class="col-md-12">
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
		                                        <th>Name</th>
                                                <th>Banner Image</th>
		                                        <th>Page Name</th>
		                                        <th>Details</th>
		                                        <th>Action</th>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                	@foreach($business as $businesses)
		                                		<tr>
		                                			<td>{{$businesses->heading}}</td>
                                                    @if($about->banner_image != null)
                                                        <img src="{{asset('images')}}/{{$businesses->banner_image}}" alt="">
                                                    @endif
                                                    <td>{{$businesses->heading}}</td>
		                                			<td>
													@php
														$content = strip_tags($businesses->details);
													@endphp
													{!! \Illuminate\Support\Str::limit($content, $limit = 120, $end = '...') !!}
													</td>
		                            					<div class="table-action-button">
		                            						<a href="javascript:;" class="btn-edit">
		                            							<i class="la la-edit"></i>
		                            						</a>

		                            						<a href="javascript:;" class="btn-delete" data-id="{{$allevents->id}}" data-action="{{ route('events.admin.destroy', $businesses->id)}}">
		                            							<i class="la la-trash"></i>
		                            						</a>
		                            					</div>
		                            				</td>		
		                                		</tr>
		                            		@endforeach
		                                </tbody>
		                                <tfoot>
		                                    <tr>
		                                        <th>Name</th>
                                                <th>Banner Image</th>
		                                        <th>Page Name</th>
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
                    	<div class="form-group">
                    		<label>Department</label>
	                    	<select class="select2 form-control" name="department_id">
								
							</select>
                    	</div>
                        <div class="form-group">
                        	<label>Event Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                        	<label>Event Start & End Date</label>
	                        <div class='input-group'>
	                            <input type='text' class="form-control editdatetime" name="datetime" />
	                            <div class="input-group-append">
	                                <span class="input-group-text">
	                                    <span class="la la-calendar"></span>
	                                </span>
	                            </div>
							</div>
                        </div>
                        <label>Event Details</label>
                        <div class="form-group">
                            <textarea name="details" id="summernote-code-edit" class="summernote-code"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-outline-primary" value="Update Event">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title" id="myModalLabel1">Event Delete</h4>
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
