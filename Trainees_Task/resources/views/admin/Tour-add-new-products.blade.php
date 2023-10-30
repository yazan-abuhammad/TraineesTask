
	@extends("admin.layouts.app")

	@section("style")
	<link href="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
	@endsection
		
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
								<li class="breadcrumb-item active" aria-current="page">Add new tour</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
			  
				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Add New tour</h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
							<div class="mb-3">
								<label for="inputProductTitle" class="form-label">Tour Name</label>
								<input type="email" class="form-control" id="inputProductTitle" placeholder="Enter product title">
							  </div>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Description</label>
								<textarea class="form-control" id="inputProductDescription" rows="3"></textarea>
							  </div>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Tour Images</label>
								<input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
							  </div>
                            </div>
						   </div>
						   <div class="col-lg-4">
							<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
								<div class="col-md-6">
									<label for="inputPrice" class="form-label">Price</label>
									<input type="email" class="form-control" id="inputPrice" placeholder="00.00">
								  </div>
								  <div class="col-md-6">
									<label for="inputCompareatprice" class="form-label">Date</label>
									<input type="date" class="form-control" id="inputCompareatprice" placeholder="00.00">
								  </div>
								  <div class="col-md-6">
									<label for="inputCostPerPrice" class="form-label">Days</label>
									<input type="email" class="form-control" id="Days" placeholder="0">
								  </div>
								  
								  <div class="col-12">
									<label for="inputProductType" class="form-label">Tour Category</label>
									<select class="form-select" id="inputProductType">
										<option></option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									  </select>
								  </div>
								 
								 
								  
								  <div class="col-12">
									  <div class="d-grid">
                                         <button type="button" class="btn btn-primary">Save Product</button>
									  </div>
								  </div>
							  </div> 
						  </div>
						  </div>
					   </div><!--end row-->
					</div>
				  </div>
			  </div>


			</div>
		</div>
		<!--end page wrapper -->
		@endsection
	
	@section("script")
	<script src="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		})
	</script>
	@endsection