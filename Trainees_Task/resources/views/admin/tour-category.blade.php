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
								<li class="breadcrumb-item active" aria-current="page">Orders</li>
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
						  <div class="ms-auto"><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleLargeModal" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Category</a></div>
						</div>

						<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										
										<h5 class="text-primary">Add New Category </h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="card border-top border-0 border-4 border-primary">
										<div class="card-body p-5">
										   
											<hr>
											<form class="row g-3">
												<div class="col-md-6">
													<label for="inputLastName1" class="form-label"> Name</label>
													<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
														<input type="text" class="form-control border-start-0" id="inputLastName1" placeholder="First Name" />
													</div>
												</div>
												<div class="col-md-6">
													<label for="inputLastName2" class="form-label">Date</label>
													<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bx-calendar'></i></span>
														<input type="date" class="form-control border-start-0" id="inputLastName2" placeholder="Last Name" />
													</div>
												</div>
												 <div class="mb-3">
                                        <label for="formFile" class="form-label">Choose Photo</label>
                                        <input class="form-control" type="file" id="formFile">
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



						{{-- addd --}}
						<div class="card radius-10">
							<div class="card-body">
							
								<div class="table-responsive">
									<table class="table align-middle mb-0">
										<thead class="table-light">
										<tr>
											<th>Category Nmae</th>
											<th>Photo</th>
											<th>Category ID</th>
											<th>Date</th>
											
											<th>Actions</th>
										
										</tr>
										</thead>
										<tbody><tr>
											<td>Iphone 5</td>
											<td><img src="assets/images/products/01.png')  }}" class="product-img-2" alt="product img"></td>
											<td>#9405822</td>
																			
											<td>03 Feb 2020</td>
											<td>
												<div class="d-flex order-actions">
													<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
													<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
												</div>
											</td>
										</tr>
			
										<tr>
											<td>Earphone GL</td>
											<td><img src="assets/images/products/02.png')  }}" class="product-img-2" alt="product img"></td>
											<td>#8304620</td>
											
											
											<td>05 Feb 2020</td>
											<td>
												<div class="d-flex order-actions">
													<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
													<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
												</div>
											</td>
										</tr>
			
										<tr>
											<td>HD Hand Camera</td>
											<td><img src="assets/images/products/03.png')  }}" class="product-img-2" alt="product img"></td>
											<td>#4736890</td>
											
											
											<td>06 Feb 2020</td>
											<td>
												<div class="d-flex order-actions">
													<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
													<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
												</div>
											</td>
										</tr>
			
										<tr>
											<td>Clasic Shoes</td>
											<td><img src="assets/images/products/04.png')  }}" class="product-img-2" alt="product img"></td>
											<td>#8543765</td>
																			
											<td>14 Feb 2020</td>
											<td>
												<div class="d-flex order-actions">
													<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
													<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>Sitting Chair</td>
											<td><img src="assets/images/products/06.png')  }}" class="product-img-2" alt="product img"></td>
											<td>#9629240</td>
											
											
											<td>18 Feb 2020</td>
											<td>
												<div class="d-flex order-actions">
													<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
													<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>Hand Watch</td>
											<td><img src="assets/images/products/05.png')  }}" class="product-img-2" alt="product img"></td>
											<td>#8506790</td>
											
											
											<td>21 Feb 2020</td>
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


			</div>
		</div>
		<!--end page wrapper -->
		@endsection
	