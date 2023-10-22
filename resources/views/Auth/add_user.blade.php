@include('auth.header')
@include('auth.sidebar')
<!-- page content -->
            <div class="right_col" role="main">
				<div class="">
					<!--<div class="page-title">
						<div class="title_left">
							<h3>Form Elements</h3>
						</div>
						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>-->
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
                                    <h2>Add User</h2>
									<div class="text-right">
										<a class="btn btn-info" href="{{route('user')}}">View User</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									@if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
									@endif
									<form id="demo-form2" action= "{{ route('storeUser') }}" method="post" data-parsley-validate class="form-horizontal form-label-left">
									@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="name"  name="name" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="email" id="email" name="email"  class="form-control">
											</div>
										</div>
                    					<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="password" id="password" name="password"  class="form-control">
											</div>
										</div>
                   						<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="phone">Phone <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="phone" name="phone"  class="form-control">
											</div>
										</div>
                    					<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 label-align">User Type</label>
											<div class="col-md-6 col-sm-6 ">
											<select class="form-control" name="user_type" id="user_type">
												<option value="">Select</option>
												@foreach($roles as $role)
													<option value="{{ $role->id }}">{{ $role->role }}</option>
												@endforeach
											</select>
											</div>
										</div>
										<div class="item form-group">
                    						<div class="col-md-6 mx-auto">
												<div class="formBtn text-right"><button type="submit" class="btn btn-success">Submit</button></div>
											</div>
										</div>
                   						<div class="ln_solid"></div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->
@include('auth.footer')