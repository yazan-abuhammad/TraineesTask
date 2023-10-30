@include('admin.layouts.styles')
                    <!--end breadcrumb-->
                    <div class="row">
                        <div class="col-xl-7 mx-auto">
                            
                            <div class="card border-top border-0 border-4 border-primary">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                        </div>
                                        <h5 class="mb-0 text-primary">User Registration</h5>
                                    </div>
                                    <hr>
                                
                            
                                </div>
                            </div>
                            <h6 class="mb-0 text-uppercase">Login Form</h6>
                            <hr/>
                            <div class="card border-top border-0 border-4 border-dark">
                                <div class="card-body p-5">
                                    <div class="card-title text-center"><i class="bx bxs-user-circle text-dark font-50"></i>
                                        <h5 class="mb-5 mt-2 text-dark">User Login</h5>
                                    </div>
                                    <hr>
                                    <form class="row g-3">
                                        <div class="col-12">
                                            <label for="inputLastEnterUsername" class="form-label">Enter Username</label>
                                            <div class="input-group input-group-lg"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                                <input type="text" class="form-control border-start-0" id="inputLastEnterUsername" placeholder="Enter Username" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputLastEnterPassword" class="form-label">Enter Password</label>
                                            <div class="input-group input-group-lg"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open'></i></span>
                                                <input type="text" class="form-control border-start-0" id="inputLastEnterPassword" placeholder="Enter Password" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck3">
                                                <label class="form-check-label" for="gridCheck3">Check me out</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-end">	<a href="javascript:;">Forgot Password ?</a>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-dark btn-lg px-5"><i class='bx bxs-lock-open'></i>Login</button>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="col-12 text-center">
                                            <p class="mb-0">or Sign in with:</p>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-facebook btn-lg px-5"><i class='bx bxl-facebook'></i>Login with facebook</button>
                                                <button type="submit" class="btn btn-light btn-lg px-5"><i class='bx bxl-google'></i>Login with Google</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                   
                   
                    @include('admin.layouts.script') <!--end row-->
                </div>
            </div>
	



