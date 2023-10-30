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
								<li class="breadcrumb-item active" aria-current="page">Tour table</li>
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
						  <div class="ms-auto"><a href="Tour-add-new-products" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Tour</a></div>
						</div>
						<div class="card radius-10">
							<div class="card-body">
							
								<div class="table-responsive">
									<table class="table align-middle mb-0">
										<thead class="table-light">
										<tr>
											<th>Tour Nmae</th>
											<th>Photo</th>
											<th>ID</th>
											<th>Category ID</th>
											<th>Number of User</th>
											<th>Days</th>
											<th>Date</th>
											<th>Price</th>
											<th>Actions</th>
												<th>View Details</th>
										
										</tr>
										</thead>
										<tbody><tr>
											<td>Iphone 5</td>
											<td><img src="assets/images/products/01.png')  }}" class="product-img-2" alt="product img"></td>
											<td>#9405822</td>
											<td>#9405822</td>
											<td>#9405822</td>
											<td>#9405822</td>
											<td>#9405822</td>
																			
											<td>03 Feb 2020</td>

											
											<td>
												<div class="d-flex order-actions">
													<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
													<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
												</div>
											</td>
											<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
										</tr>
			
										<tr>
											<td>Earphone GL</td>
											<td><img src="assets/images/products/02.png')  }}" class="product-img-2" alt="product img"></td>
											<td>#9405822</td>
											<td>#9405822</td>
											<td>#9405822</td>
											<td>#8304620</td>
											<td>#8304620</td>
											
											
											<td>05 Feb 2020</td>

											
											<td>
												<div class="d-flex order-actions">
													<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
													<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
												</div>
											</td>
											<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
										</tr>
			
										<tr>
											<td>HD Hand Camera</td>
											<td><img src="assets/images/products/03.png')  }}" class="product-img-2" alt="product img"></td>
											<td>#9405822</td>
											<td>#9405822</td>
											<td>#9405822</td>
											<td>#4736890</td>
											<td>#4736890</td>
											
											
											<td>06 Feb 2020</td>

											
											<td>
												<div class="d-flex order-actions">
													<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
													<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
												</div>
											</td>
											<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
										</tr>
			
										<tr>
											<td>Clasic Shoes</td>
											<td><img src="assets/images/products/04.png')  }}" class="product-img-2" alt="product img"></td>
											<td>#9405822</td>
											<td>#9405822</td>
											<td>#9405822</td>
											<td>#8543765</td>
											<td>#8543765</td>
																			
											<td>14 Feb 2020</td>

											
											<td>
												<div class="d-flex order-actions">
													<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
													<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
												</div>
											</td>
											<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
										</tr>
										<tr>
											<td>Sitting Chair</td>
											<td><img src="assets/images/products/06.png')  }}" class="product-img-2" alt="product img"></td>
											<td>#9405822</td>
											<td>#9405822</td>
											<td>#9405822</td>
											<td>#9629240</td>
											<td>#9629240</td>
											
											
											<td>18 Feb 2020</td>

											
											<td>
												<div class="d-flex order-actions">
													<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
													<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
												</div>
											</td>
											<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
										</tr>
										<tr>
											<td>Hand Watch</td>
											<td><img src="assets/images/products/05.png')  }}" class="product-img-2" alt="product img"></td>
											<td>#9405822</td>
											<td>#9405822</td>
											<td>#9405822</td>
											<td>#8506790</td>
											<td>#8506790</td>
											
											
											<td>21 Feb 2020</td>

											
											<td>
												<div class="d-flex order-actions">
													<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
													<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
												</div>
											</td>
											<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
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
	