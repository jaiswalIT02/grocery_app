@include('auth.header')
@include('auth.sidebar')

<!-- page content -->
            <div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
                                    <h2>Add User Role</h2>
									<div class="text-right">
										<a class="btn btn-info" href="{{route('userRole')}}">View User Role</a>
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
									<form id="demo-form2" action= "{{ route('storeUserRole') }}" method="post" data-parsley-validate class="form-horizontal form-label-left">
									@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="role">Role<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="role"  name="role" class="form-control ">
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