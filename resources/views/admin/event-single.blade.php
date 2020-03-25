@extends('layouts.admin-app')

@section('content')
<div class="content-body">
	<div class="row">
		<div class="col-12">
			<div class="card" data-height="">
			    <div class="card-header">
			        <h4 class="card-title" id="basic-layout-form">{{$events->name}}</h4>
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
			            <div class="col-12 mb-1">
			            	<h4 for="">Start Date: <span>{{date('M, d D Y h:m:s A', strtotime($events->start_date))}}</span></h4>
			            </div>
			            <div class="col-12">
			            	<h4 for="">End Date: <span>{{date('M, d D Y h:m:s A', strtotime($events->end_date))}}</span></h4>
			            </div>
			            <div class="col-12 mt-2">
			            	<textarea name="body" id="summernote-code" class="summernote-code">
			            		{!!$events->details!!}
			            	</textarea>
			            </div>
			            <div class="col-12 mt-2 text-right">
			            	<p><strong>Posted By</strong>: {{$events->user->name}} ({{$events->user->email}})</p>
			            </div>
			            <div class="col-12 mt-1 text-right mb-2">
			            	<p><strong>Date</strong>: {{$events->created_at->format('M d Y H:i:s')}}</p>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>

@endsection
