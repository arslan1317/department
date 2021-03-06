@extends('layouts.admin-app')

@section('content')
<div class="content-body">
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
	                                        <th>Start Date</th>
	                                        <th>End Date</th>
	                                        <th>Details</th>
	                                        <th>Posted By</th>
	                                        <th>Action</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                	@foreach($events as $allevents)
	                                		<tr>
	                                			<td>{{$allevents->name}}</td>
	                                			<td>{{date('M, d D Y h:m:s A', strtotime($allevents->start_date))}}</td>
	                                			<td>{{date('M, d D Y h:m:s A', strtotime($allevents->end_date))}}</td>
												<td>
												@php
													$content = strip_tags($allevents->details);
												@endphp
												{!! \Illuminate\Support\Str::limit($content, $limit = 120, $end = '...') !!}
												</td>
	                                			<td>{{$allevents->user->name}} ({{$allevents->user->email}})</td>  
	                                			<td>
	                                				@if($allevents->sub_dep_id == null)
	                                					<a href="{{route('events.single', ['depart'=>$allevents->department->name,'name'=>0,'id'=>$allevents->id])}}" class="btn btn-info btn-min-width mr-1 mb-0">
		                                					View Details
		                                				</a>
	                                				@else
	                                					<a href="{{route('events.single', ['depart'=>$allevents->subdepartment->department->name,'name'=>$allevents->subdepartment->name,'id'=>$allevents->id])}}" class="btn btn-info btn-min-width mr-1 mb-0">
		                                					View Details
		                                				</a>
	                                				@endif
	                                			</td>			
	                                		</tr>
	                            		@endforeach
	                                </tbody>
	                                <tfoot>
	                                    <tr>
	                                        <th>Name</th>
	                                        <th>Start Date</th>
	                                        <th>End Date</th>
	                                        <th>Details</th>
	                                        <th>Posted By</th>
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
