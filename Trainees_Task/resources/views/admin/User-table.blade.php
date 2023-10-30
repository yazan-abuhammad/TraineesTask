@extends("admin.layouts.app")
		
		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tour</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Users</li>
							</ol>
						</nav>
					</div>
			
				</div>
				<!--end breadcrumb-->
			  
				<div class="card">
					<div class="card-body">
						<div class="d-lg-flex align-items-center mb-4 gap-3">
							<div class="position-relative">
								<input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
							</div>
						  <div class="ms-auto"><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleLargeModal" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New user</a></div>
						</div>

						<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										
										<h5 class="text-primary">Add New user </h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="card border-top border-0 border-4 border-primary">
										<div class="card-body p-5">
										   
											<hr>
											<form class="row g-3">
												<div class="col-md-6">
													<label for="inputLastName1" class="form-label">First Name</label>
													<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
														<input type="text" class="form-control border-start-0" id="inputLastName1" placeholder="First Name" />
													</div>
												</div>
												<div class="col-md-6">
													<label for="inputLastName2" class="form-label">Last Name</label>
													<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
														<input type="text" class="form-control border-start-0" id="inputLastName2" placeholder="Last Name" />
													</div>
												</div>
												<div class="col-12">
													<label for="inputPhoneNo" class="form-label">Phone No</label>
													<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-microphone' ></i></span>
														<input type="text" class="form-control border-start-0" id="inputPhoneNo" placeholder="Phone No" />
													</div>
												</div>
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label">Email Address</label>
													<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-message' ></i></span>
														<input type="text" class="form-control border-start-0" id="inputEmailAddress" placeholder="Email Address" />
													</div>
												</div>
												<div class="col-12">
													<label for="inputChoosePassword" class="form-label">Choose Password</label>
													<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open' ></i></span>
														<input type="Password" class="form-control border-start-0" id="inputChoosePassword" placeholder="Choose Password" />
													</div>
												</div>
												
												
											
												</div>
												
											
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Save changes</button>
									</form>
									</div>
								</div>
							</div>
						</div>
					</div>
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>Id</th>
										<th>First name</th>
										<th>Last name </th>
										<th>Email</th>
										<th>Phone Number</th>
										<th>user stast</th>
										<th>Photo</th>
									
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000354</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i>FulFilled</div></td>
										<td>$485.20</td>
										<td>June 10, 2020</td>
										<td> </td>
										<td><img src="assets/images/products/01.png')  }}" class="product-img-2" alt="product img"></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000986</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Confirmed</div></td>
										<td>$650.30</td>
										<td>June 12, 2020</td>
										<td> </td>
										<td><img src="assets/images/products/01.png')  }}" class="product-img-2" alt="product img"></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000536</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Partially shipped</div></td>
										<td>$159.45</td>
										<td>June 14, 2020</td>
										<td> </td>
										<td><img src="assets/images/products/01.png')  }}" class="product-img-2" alt="product img"></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000678</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>FulFilled</div></td>
										<td>$968.40</td>
										<td>June 16, 2020</td>
										<td> </td>
										<td><img src="assets/images/products/01.png')  }}" class="product-img-2" alt="product img"></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000457</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Confirmed</div></td>
										<td>$689.50</td>
										<td>June 18, 2020</td>
										<td> </td>
										<td><img src="assets/images/products/01.png')  }}" class="product-img-2" alt="product img"></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000685</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Confirmed</div></td>
										<td>$478.60</td>
										<td>June 20, 2020</td>
										<td> </td>
										<td><img src="assets/images/products/01.png')  }}" class="product-img-2" alt="product img"></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000356</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Partially shipped</div></td>
										<td>$523.30</td>
										<td>June 21, 2020</td>
										<td> </td>
										<td><img src="assets/images/products/01.png')  }}" class="product-img-2" alt="product img"></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000875</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>FulFilled</div></td>
										<td>$960.20</td>
										<td>June 24, 2020</td>
										<td> </td>
										<td><img src="assets/images/products/01.png')  }}" class="product-img-2" alt="product img"></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000658</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>FulFilled</div></td>
										<td>$428.10</td>
										<td>June 25, 2020</td>
										<td> </td>
										<td><img src="assets/images/products/01.png')  }}" class="product-img-2" alt="product img"></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000689</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Partially shipped</div></td>
										<td>$876.60</td>
										<td>June 26, 2020</td>
										<td> </td>
										<td><img src="assets/images/products/01.png')  }}" class="product-img-2" alt="product img"></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>


			</div>
		</div>
		<!--end page wrapper -->
		@endsection
	