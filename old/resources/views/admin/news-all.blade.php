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
	                                        <th>Image</th>
	                                        <th>Headline</th>
	                                        <th>Body</th>
	                                        <th>Posted By</th>
	                                        <th>Action</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                	@foreach($news as $news)
	                                		<tr>
	                                			<td>
	                                				<img src="{{asset('images')}}/{{$news->image}}" alt="" width="200">
	                                			</td>			
	                                			<td>{{$news->headline}}</td>
												<td>
												@php
													$content = strip_tags($news->body);
												@endphp
												{!! \Illuminate\Support\Str::limit($content, $limit = 120, $end = '...') !!}
												</td>
	                                			<td>{{$news->user->name}} ({{$news->user->email}})</td>  
	                                			<td>
	                                				@if($news->sub_dep_id == null)
	                                					<a href="{{route('news.single', ['depart'=>$news->department->name,'name'=>0,'id'=>$news->id])}}" class="btn btn-info btn-min-width mr-1 mb-0">
		                                					View Details
		                                				</a>
	                                				@else
	                                					<a href="{{route('news.single', ['depart'=>$news->subdepartment->department->name,'name'=>$news->subdepartment->name,'id'=>$news->id])}}" class="btn btn-info btn-min-width mr-1 mb-0">
		                                					View Details
		                                				</a>
	                                				@endif
	                                			</td>			
	                                		</tr>
	                            		@endforeach
	                                </tbody>
	                                <tfoot>
	                                    <tr>
	                                        <th>Image</th>
	                                        <th>Headline</th>
	                                        <th>Body</th>
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
