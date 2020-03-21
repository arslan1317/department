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
	                                        <th>User</th>
	                                        <th>Email</th>
	                                        <th>Main Department</th>
	                                        <th>Sub Department</th>
	                                        <th>Action</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                	@foreach($notification as $notifications)
	                                	@php
                                            $user = App\User::find($notifications->user_id);
                                        @endphp
	                                		<tr>
	                            				<td>{{$user->name}}</td>
	                            				<td>{{$user->email}}</td>
                            				@php
                                                    $sub_dep = App\SubDepartment::find($notifications->sub_dep_id);
                                            @endphp
	                            				<td>{{$sub_dep->department->name}}</td>
                            				@php
                                                $sub_dep = App\SubDepartment::find($notifications->sub_dep_id);
                                            @endphp
	                            				<td>{{$sub_dep->name}}</td>
	                            				<td>
	                            					<div class="table-action-button">
	                            						@if($notifications->status == 0)
	                            						<div class="alert alert-info mb-0 text-center" role="alert">
															Pending
														</div>
	                            						@else
	                            						<div class="alert alert-success mb-0 text-center">
															Approved
														</div>
	                            						@endif
	                            						<a href=""></a>
	                            					</div>
	                            				</td>
	                            			</tr>
	                            		@endforeach
	                                </tbody>
	                                <tfoot>
	                                    <tr>
	                                        <th>User</th>
	                                        <th>Email</th>
	                                        <th>Main Department</th>
	                                        <th>Sub Department</th>
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
