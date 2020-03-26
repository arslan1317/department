@extends('layouts.user-app')

@section('content')
<div class="content-body">
	<div class="row">
		<div class="col-4">
		    <div class="card pull-up">
		        <div class="card-content">
		            <div class="card-body">
		                <div class="media d-flex">
		                    <div class="media-body text-left">
		                    	<h4 class="text-muted danger">News</h4>
		                        <h3>{{$dashboard['news']}}</h3>
		                    </div>
		                    <div class="align-self-center">
		                        <i class="icon-book-open danger font-large-2 float-right"></i>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="col-4">
		    <div class="card pull-up">
		        <div class="card-content">
		            <div class="card-body">
		                <div class="media d-flex">
		                    <div class="media-body text-left">
		                    	<h4 class="text-muted info">Events</h4>
		                        <h3>{{$dashboard['events']}}</h3>
		                    </div>
		                    <div class="align-self-center">
		                        <i class="icon-calendar info font-large-2 float-right"></i>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="col-4">
		    <div class="card pull-up">
		        <div class="card-content">
		            <div class="card-body">
		                <div class="media d-flex">
		                    <div class="media-body text-left">
		                        <h4 class="text-muted success">Sources</h4>
		                        <h3>{{$dashboard['source']}}</h3>
		                    </div>
		                    <div class="align-self-center">
		                        <i class="icon-info success font-large-2 float-right"></i>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</div>

@endsection
