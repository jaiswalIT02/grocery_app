@include('auth.header')
@include('auth.sidebar')
<!-- page content -->

            <div class="right_col" role="main">
				<div class="row">
				    <div class="col-md-10 col-sm-10 mx-auto  ">
						<div class="x_panel">
						<div class="x_title">
							<h2>Role List</h2>
							<div class="text-right">
								<a class="btn btn-info" href="{{route('addUserRole')}}">Add User Role</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
						@if ($message = Session::get('success'))
							<div class="alert alert-success">
								<p>{{ $message }}</p>
							</div>
						@endif
							<table class="table table-striped">
							<thead>
								<tr>
								<th>#</th>
								<th>Role</th>
								<th>Action</th>
								</tr>
							</thead>
							<tbody>
				
								@php
								   $sno = 1;
								@endphp
								@foreach ($data as $userdata)
								<tr>
								   <td>{{$sno}}</td>
								   <td>{{$userdata->role}}</td>
								  
								   <td></td>
								</tr>
								@php
								   $sno++;
								
								@endphp
								@endforeach
							</tbody>
							</table>

						</div>
						</div>
                   </div>
				</div>
             
            </div>
            <div class="clearfix"></div>
			<!-- /page content -->
@include('auth.footer')