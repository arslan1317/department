@extends('layouts.admin-app')

@section('content')
<div class="content-body">
	<div class="row">
		<div class="col-12">
			<div class="card" data-height="">
			    <div class="card-header">
			        <h4 class="card-title" id="basic-layout-form">{{$news->headline}}</h4>
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
			            <div class="col-12">
			            	<img src="{{asset('images')}}/{{$news->image}}" alt="" width="100%">
			            </div>
			            <div class="col-12 mt-3">
			            	<textarea name="body" id="summernote-code" class="summernote-code">
			            		{!!$news->body!!}
			            	</textarea>
			            </div>
			            <div class="col-12 mt-2 text-right">
			            	<p><strong>Posted By</strong>: {{$news->user->name}} ({{$news->user->email}})</p>
			            </div>
			            <div class="col-12 mt-1 text-right mb-2">
			            	<p><strong>Date</strong>: {{$news->created_at->format('M d Y H:i:s')}}</p>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>

@endsection
