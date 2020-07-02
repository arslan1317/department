@extends('layouts.admin-app')

@section('content')
<div class="content-body">
	<div class="row">
		<div class="col-4">
		    <div class="card pull-up">
		        <div class="card-content">
		            <div class="card-body">
		                <div class="media d-flex">
		                    <div class="media-body text-left">
		                        <h4 class="text-muted info">Departments</h4>
		                        <h3>{{$dashboard['departments']}}</h3>
		                    </div>
		                    <div class="align-self-center">
		                        <i class="icon-home info font-large-2 float-right"></i>
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
		                    	<h4 class="text-muted warning">Sub Departments</h4>
		                        <h3>{{$dashboard['subdepartments']}}</h3>
		                    </div>
		                    <div class="align-self-center">
		                        <i class="icon-list warning font-large-2 float-right"></i>
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
		                    	<h4 class="text-muted success">Users</h4>
		                        <h3>{{$dashboard['users']}}</h3>
		                    </div>
		                    <div class="align-self-center">
		                        <i class="icon-users success font-large-2 float-right"></i>
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
		                    	<h4 class="text-muted warning">Notifications</h4>
		                        <h3>{{$dashboard['requests']}}</h3>
		                    </div>
		                    <div class="align-self-center">
		                        <i class="icon-bell warning font-large-2 float-right"></i>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</div>

@endsection
