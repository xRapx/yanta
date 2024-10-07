@extends('admin.admin')

@section('content')
<div class="container-fluid">
	<!-- -------------------------------------------------------------- -->
	<!-- Breadcrumb -->
	<!-- -------------------------------------------------------------- -->
	<div class="font-weight-medium shadow-none position-relative overflow-hidden mb-7">
		<div class="card-body px-0">
			<div class="d-flex justify-content-between align-items-center">
				<div>
					<h4 class="font-weight-medium fs-14 mb-0">Dashboard</h4>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a class="text-muted text-decoration-none" href="">Home
								</a>
							</li>
							<li class="breadcrumb-item text-muted" aria-current="page">Dashboard</li>
						</ol>
					</nav>
				</div>
				<div>
					<div class="d-sm-flex d-none gap-3 no-block justify-content-end align-items-center">
						<div class="d-flex gap-2">
							<div class="">
								<small>This Month</small>
								<h4 class="text-primary mb-0 ">$58,256</h4>
							</div>
							<div class="">
								<div class="breadbar"></div>
							</div>
						</div>
						<div class="d-flex gap-2">
							<div class="">
								<small>Last Month</small>
								<h4 class="text-secondary mb-0 ">$58,256</h4>
							</div>
							<div class="">
								<div class="breadbar2"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- -------------------------------------------------------------- -->
	<!-- Breadcrumb End -->
	<!-- -------------------------------------------------------------- -->
	<!-- Row -->
	<div class="row">
		<!-- Profile card -->
		<div class="col-lg-5 col-xl-4">
			<!-- Column -->
			<div class="card">
				<div class="card-body p-2">
					<img class="card-img-top w-100 profile-bg-height rounded overflow-hidden" src="../assets/images/backgrounds/profile-bg.jpg" height="111" alt="Card image cap">
					<div class="card-body little-profile text-center p-9">
						<div class="pro-img">
							<img src="../assets/images/profile/user-2.jpg" alt="user" class="rounded-circle shadow-sm" width="112">
						</div>
						<h3 class="mb-1 fs-14">Angela Dominic</h3>
						<p class="fs-3">Web Designer &amp; Developer</p>
						<a href="javascript:void(0)" class="
                        waves-effect waves-dark
                        btn btn-primary btn-md btn-rounded mb-4
                      ">Follow</a>
						<div class="row gx-lg-4 text-center pt-9 justify-content-center border-top">
							<div class="col-4">
								<h3 class="mb-0 fs-14">1099</h3>
								<small class="text-muted fs-3">Articles</small>
							</div>
							<div class="col-4">
								<h3 class="mb-0 fs-14">23,469</h3>
								<small class="text-muted fs-3">Followers</small>
							</div>
							<div class="col-4">
								<h3 class="mb-0 fs-14">6035</h3>
								<small class="text-muted fs-3">Following</small>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Column -->
			<div class="card">
				<div class="card-body pb-0">
					<h4 class="card-title">My Contacts</h4>
					<p class="card-subtitle mb-0">
						Checkout my contacts here
					</p>
				</div>
				<div class="message-box contact-box position-relative">
					<div class="message-widget contact-widget position-relative">
						<!-- contact -->
						<a href="javascript:void(0)" class="py-4 hstack px-7 gap-3">
							<div class="user-img position-relative">
								<img src="../assets/images/profile/user-2.jpg" alt="user" class="rounded-circle w-100">
								<span class="
                            profile-status
                            pull-right
                            d-inline-block
                            position-absolute
                            text-bg-secondary
                            rounded-circle
                          "></span>
							</div>
							<div class="v-middle d-md-flex align-items-center w-100">
								<div class="text-truncate">
									<h5 class="mb-1 text-dark font-weight-medium">
										James Smith
									</h5>
									<span class="text-muted fs-3">you were in video call</span>
								</div>
								<div class="ms-auto d-flex button-group gap-1">
									<button type="button" href="javascript:void(0)" class="btn btn-sm bg-danger-subtle text-danger round-sm rounded-pill m-0">
										<i data-feather="video" class="feather-sm"></i>
									</button>
									<button type="button" href="javascript:void(0)" class="btn btn-sm bg-primary-subtle text-primary round-sm rounded-pill m-0">
										<i data-feather="phone-incoming" class="feather-sm"></i>
									</button>
								</div>
							</div>
						</a>
						<!-- contact -->
						<a href="javascript:void(0)" class="py-4 hstack px-7 gap-3">
							<div class="user-img position-relative">
								<img src="../assets/images/profile/user-6.jpg" alt="user" class="rounded-circle w-100">
								<span class="
                            profile-status
                            pull-right
                            d-inline-block
                            position-absolute
                            text-bg-light-indigo
                            rounded-circle
                          "></span>
							</div>
							<div class="v-middle d-md-flex align-items-center w-100">
								<div class="text-truncate">
									<h5 class="mb-1 text-dark font-weight-medium">
										Joseph Garciar
									</h5>
									<span class="text-muted fs-3">you were in video call</span>
								</div>
								<div class="ms-auto d-flex button-group gap-1">
									<button type="button" href="javascript:void(0)" class="btn btn-sm bg-danger-subtle text-danger round-sm rounded-pill m-0">
										<i data-feather="video" class="feather-sm"></i>
									</button>
									<button type="button" href="javascript:void(0)" class="btn btn-sm bg-primary-subtle text-primary round-sm rounded-pill m-0">
										<i data-feather="phone-incoming" class="feather-sm"></i>
									</button>
								</div>
							</div>
						</a>
						<!-- contact -->
						<a href="javascript:void(0)" class="py-4 pb-7 hstack px-7 gap-8">
							<div class="user-img position-relative">
								<img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded-circle w-100">
								<span class="
                            profile-status
                            pull-right
                            d-inline-block
                            position-absolute
                            text-bg-light-indigo
                            rounded-circle
                          "></span>
							</div>
							<div class="v-middle d-md-flex align-items-center w-100">
								<div class="text-truncate">
									<h5 class="mb-1 text-dark font-weight-medium">
										Maria Rodriguez
									</h5>
									<span class="text-muted fs-3">you missed john call</span>
								</div>
								<div class="ms-auto d-flex button-group gap-1">
									<button type="button" href="javascript:void(0)" class="btn btn-sm bg-danger-subtle text-danger round-sm rounded-pill m-0">
										<i data-feather="video" class="feather-sm"></i>
									</button>
									<button type="button" href="javascript:void(0)" class="btn btn-sm bg-primary-subtle text-primary round-sm rounded-pill m-0">
										<i data-feather="phone-incoming" class="feather-sm"></i>
									</button>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Profile Activitiy card -->
		<div class="col-lg-7 col-xl-8">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Profile Activitiy</h4>
					<p class="card-subtitle">
						Ample Admin Vs Pixel Admin
					</p>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs profile-tab nav-justified gap-9 my-7" role="tablist">
						<li class="nav-item">
							<a class="nav-link px-3 py-9 vstack gap-6 align-items-center text-center" data-bs-toggle="tab" href="#profile" role="tab">
								<iconify-icon icon="solar:user-circle-linear" class="fs-7"></iconify-icon>
								<span class="d-none d-md-inline-block ">Profile</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active px-3 py-9 vstack gap-6 align-items-center text-center" data-bs-toggle="tab" href="#home" role="tab">
								<iconify-icon icon="solar:user-circle-linear" class="fs-7"></iconify-icon>
								<span class="d-none d-md-inline-block ">Activity</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-3 py-9 vstack gap-6 align-items-center text-center" data-bs-toggle="tab" href="#inbox" role="tab">
								<iconify-icon icon="solar:inbox-linear" class="fs-7"></iconify-icon>
								<span class="d-none d-md-inline-block ">Inbox</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-3 py-9 vstack gap-6 align-items-center text-center" data-bs-toggle="tab" href="#settings" role="tab">
								<iconify-icon icon="solar:settings-linear" class="fs-7"></iconify-icon>
								<span class="d-none d-md-inline-block ">Settings</span>
							</a>
						</li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane" id="profile" role="tabpanel">
							<div class="card-body">
								<div class="row">
									<div class="col-md-3 col-xs-6 border-end">
										<strong>Full Name</strong>
										<br>
										<p class="text-muted">Johnathan Deo</p>
									</div>
									<div class="col-md-3 col-xs-6 border-end">
										<strong>Mobile</strong>
										<br>
										<p class="text-muted">(123) 456 7890</p>
									</div>
									<div class="col-md-3 col-xs-6 border-end">
										<strong>Email</strong>
										<br>
										<p class="text-muted">johnathan@admin.com</p>
									</div>
									<div class="col-md-3 col-xs-6">
										<strong>Location</strong>
										<br>
										<p class="text-muted">London</p>
									</div>
								</div>
								<hr>
								<p class="mt-4">
									Donec pede justo, fringilla vel, aliquet nec, vulputate
									eget, arcu. In enim justo, rhoncus ut, imperdiet a,
									venenatis vitae, justo. Nullam dictum felis eu pede
									mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
									elementum semper nisi. Aenean vulputate eleifend tellus.
									Aenean leo ligula, porttitor eu, consequat vitae,
									eleifend ac, enim.
								</p>
								<p>
									Lorem Ipsum is simply dummy text of the printing and
									typesetting industry. Lorem Ipsum has been the
									industry's standard dummy text ever since the 1500s,
									when an unknown printer took a galley of type and
									scrambled it to make a type specimen book. It has
									survived not only five centuries
								</p>
								<p>
									It was popularised in the 1960s with the release of
									Letraset sheets containing Lorem Ipsum passages, and
									more recently with desktop publishing software like
									Aldus PageMaker including versions of Lorem Ipsum.
								</p>
								<h4 class=" mt-4">Skill Set</h4>
								<hr>
								<h5 class="mt-4">
									Wordpress <span class="pull-right">80%</span>
								</h5>
								<div class="progress">
									<div class="progress-bar text-bg-secondary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%; height: 6px">
										<span class="sr-only">50% Complete</span>
									</div>
								</div>
								<h5 class="mt-4">
									HTML 5 <span class="pull-right">90%</span>
								</h5>
								<div class="progress">
									<div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%; height: 6px">
										<span class="sr-only">50% Complete</span>
									</div>
								</div>
								<h5 class="mt-4">
									jQuery <span class="pull-right">50%</span>
								</h5>
								<div class="progress">
									<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%; height: 6px">
										<span class="sr-only">50% Complete</span>
									</div>
								</div>
								<h5 class="mt-4">
									Photoshop <span class="pull-right">70%</span>
								</h5>
								<div class="progress">
									<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%; height: 6px">
										<span class="sr-only">50% Complete</span>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane active" id="home" role="tabpanel">
							<div class="profiletimeline position-relative">
								<div class="sl-item mt-2 mb-3">
									<div class="sl-left float-left me-4">
										<img src="../assets/images/profile/user-4.jpg" alt="user" class="rounded-circle">
									</div>
									<div class="sl-right w-100">
										<div>
											<div class="d-md-flex align-items-center justify-content-between gap-6 mb-6">
												<div class="hstack gap-6">
													<h5 class="mb-0">
														<a href="javascript:void(0)" class="link">John Doe</a>
													</h5>
													<span class="sl-date text-muted fs-3">5 minutes ago</span>
												</div>
												<iconify-icon icon="solar:menu-dots-line-duotone" class="fs-7"></iconify-icon>
											</div>

											<p class="mb-6">
												assign a new task
												<a href="javascript:void(0)" class="text-primary"> Design weblayout</a>
											</p>
											<div class="row gx-9">
												<div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
													<img src="../assets/images/blog/blog-img1.jpg" alt="user" class="rounded-1 w-100" height="80">
												</div>
												<div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
													<img src="../assets/images/blog/blog-img2.jpg" alt="user" class="rounded-1 w-100" height="80">
												</div>
												<div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
													<img src="../assets/images/blog/blog-img3.jpg" alt="user" class="rounded-1 w-100" height="80">
												</div>
												<div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
													<img src="../assets/images/blog/blog-img4.jpg" alt="user" class="rounded-1 w-100" height="80">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="sl-item my-4 pt-3">
									<div class="sl-left float-left me-4">
										<img src="../assets/images/profile/user-5.jpg" alt="user" class="rounded-circle">
									</div>
									<div class="sl-right w-100">
										<div>
											<div class="d-md-flex align-items-center justify-content-between gap-6 mb-6">
												<div class="hstack gap-6">
													<h5 class="mb-0">
														<a href="javascript:void(0)" class="link">Canry Smith</a>
													</h5>
													<span class="sl-date text-muted fs-3">5 minutes ago</span>
												</div>
												<iconify-icon icon="solar:menu-dots-line-duotone" class="fs-7"></iconify-icon>
											</div>
											<div class="p-9 bg-primary-subtle rounded-2">
												<p class="mb-0">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
													Praesent libero. Sed cursus ante dapibus diam. Sed nisi.
													Nulla quis sem at nibh elementum imperdiet.
													Duis sagittis ipsum. Praesent mauris.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="sl-item my-4 mb-0 pt-3">
									<div class="sl-left float-left me-4">
										<img src="../assets/images/profile/user-6.jpg" alt="user" class="rounded-circle">
									</div>
									<div class="sl-right w-100">
										<div>
											<div class="d-md-flex align-items-center justify-content-between gap-6 mb-6">
												<div class="hstack gap-6">
													<h5 class="mb-0">
														<a href="javascript:void(0)" class="link">James Smith</a>
													</h5>
													<span class="sl-date text-muted fs-3">5 minutes ago</span>
												</div>
												<iconify-icon icon="solar:menu-dots-line-duotone" class="fs-7"></iconify-icon>
											</div>
											<div class="row gx-9 mb-9">
												<div class="col-lg-5">
													<div class="hstack gap-3 border rounded-2 px-7 py-9">
														<img src="../assets/images/svgs/icon-zip.svg" alt="user" class="img-fluid flex-shrink-0">
														<div>
															<h5>Payments.zip</h5>
															<p class="mb-0 fs-3">150kb</p>
														</div>
													</div>
												</div>
												<div class="col-lg-5">
													<div class="hstack gap-3 border rounded-2 px-7 py-9">
														<img src="../assets/images/svgs/icon-figma2.svg" alt="user" class="img-fluid flex-shrink-0">
														<div>
															<h5>Payments.zip</h5>
															<p class="mb-0 fs-3">150kb</p>
														</div>
													</div>
												</div>
												<div class="col-lg-2">
													<div class="rounded-2 bg-primary-subtle hstack justify-content-center fs-5 fw-medium h-100">
														+2</div>
												</div>
											</div>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
												Praesent libero.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="inbox" role="tabpanel">
							<div class="card-body">
								<form class="form-horizontal form-material">
									<div class="form-group mb-3">
										<label class="col-md-12">Full Name</label>
										<div class="col-md-12">
											<input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
										</div>
									</div>
									<div class="form-group mb-3">
										<label for="example-email1" class="col-md-12">Email</label>
										<div class="col-md-12">
											<input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email1" id="example-email1">
										</div>
									</div>
									<div class="form-group mb-3">
										<label class="col-md-12">Password</label>
										<div class="col-md-12">
											<input type="password" value="password" class="form-control form-control-line">
										</div>
									</div>
									<div class="form-group mb-3">
										<label class="col-md-12">Phone No</label>
										<div class="col-md-12">
											<input type="text" placeholder="123 456 7890" class="form-control form-control-line">
										</div>
									</div>
									<div class="form-group mb-3">
										<label class="col-md-12">Message</label>
										<div class="col-md-12">
											<textarea rows="5" class="form-control form-control-line"></textarea>
										</div>
									</div>
									<div class="form-group mb-3">
										<label class="col-sm-12">Select Country</label>
										<div class="col-sm-12">
											<select class="form-control form-control-line">
												<option>London</option>
												<option>India</option>
												<option>Usa</option>
												<option>Canada</option>
												<option>Thailand</option>
											</select>
										</div>
									</div>
									<div class="form-group mb-3">
										<div class="col-sm-12">
											<button class="btn btn-success">
												Update Profile
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="tab-pane" id="settings" role="tabpanel">
							<div class="card-body">
								<form class="form-horizontal form-material">
									<div class="form-group mb-3">
										<label class="col-md-12">Full Name</label>
										<div class="col-md-12">
											<input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
										</div>
									</div>
									<div class="form-group mb-3">
										<label for="example-email" class="col-md-12">Email</label>
										<div class="col-md-12">
											<input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
										</div>
									</div>
									<div class="form-group mb-3">
										<label class="col-md-12">Password</label>
										<div class="col-md-12">
											<input type="password" value="password" class="form-control form-control-line">
										</div>
									</div>
									<div class="form-group mb-3">
										<label class="col-md-12">Phone No</label>
										<div class="col-md-12">
											<input type="text" placeholder="123 456 7890" class="form-control form-control-line">
										</div>
									</div>
									<div class="form-group mb-3">
										<label class="col-md-12">Message</label>
										<div class="col-md-12">
											<textarea rows="5" class="form-control form-control-line"></textarea>
										</div>
									</div>
									<div class="form-group mb-3">
										<label class="col-sm-12">Select Country</label>
										<div class="col-sm-12">
											<select class="form-control form-control-line">
												<option>London</option>
												<option>India</option>
												<option>Usa</option>
												<option>Canada</option>
												<option>Thailand</option>
											</select>
										</div>
									</div>
									<div class="form-group mb-3">
										<div class="col-sm-12">
											<button class="btn btn-success">
												Update Profile
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	function handleColorTheme(e) {
		$("html").attr("data-color-theme", e);
		$(e).prop("checked", !0);
	}
</script>

@endsection